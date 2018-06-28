<?php

namespace crud\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class ProfileController extends Controller
{

    public function show()
    {
        $pageTitle = 'Visualizar Perfil';
        $breadcrumbs = ['Perfil' => ''];

        $user = Auth::user();

        return view('profile.show', compact(['user', 'pageTitle', 'breadcrumbs']));
    }


    public function edit()
    {
        $pageTitle = 'Editar Perfil';
        $breadcrumbs = ['Perfil' => 'profile', 'Editar' => ''];

        $user = Auth::user();

        return view('profile.edit', compact(['user', 'pageTitle', 'breadcrumbs']));
    }


    public function update(Request $request)
    {
        $data = $request->all();
        $user = $request->user();

        $validator = Validator::make($data, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . $user->id
        ], $user->messages());

        if ($validator->fails())
            return back()->withErrors($validator)->withInput();

        if ($user->update($data))
            return redirect()->route('profile')->with('success', 'Perfil atualizado com sucesso');
        else
            return back()->withErrors("Ocorreu um erro e não foi possível atualizar o perfil");
    }

    public function editPassword()
    {
        $pageTitle = 'Mudar Senha';
        $breadcrumbs = ['Perfil' => 'profile', 'Mudar Senha' => ''];

        return view('profile.password', compact(['pageTitle', 'breadcrumbs']));
    }

    public function changePassword(Request $request)
    {
        $data = $request->all();
        $user = $request->user();

        if (!(Hash::check($request->get('current_password'), Auth::user()->password)))
            return back()->withErrors("Senha atual incorreta. Por favor tente novamente.");

        if (strcmp($request->get('current_password'), $request->get('password')) == 0)
            return back()->withErrors("A nova senha não pode ser igual a atual. Por favor escolha uma nova senha.");

        $validator = Validator::make($data, [
            'current_password' => 'required',
            'password' => 'required|string|min:6|confirmed'
        ], $user->messages());

        if ($validator->fails())
            return back()->withErrors($validator)->withInput();

        $user->password = bcrypt($request->get('password'));

        if ($user->save())
            return redirect()->route('profile')->with('success', 'Senha atualizada com sucesso');
        else
            return back()->withErrors("Ocorreu um erro e não foi possível atualizar a senha");
    }

}
