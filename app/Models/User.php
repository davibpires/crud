<?php

namespace crud\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{

    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function messages()
    {
        return [
            'name.required'             => 'O campo Nome é obrigatório',
            'email.required'            => 'O campo E-mail é obrigatório',
            'email.unique'              => 'Este e-mail já está em uso',
            'current_password.required' => 'O campo Senha Atual é obrigatório',
            'password.required'         => 'O campo Nova Senha é obrigatório',
            'password.confirmed'        => 'A confirmação de senha não confere'
        ];
    }

}
