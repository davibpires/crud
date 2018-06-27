<?php

namespace crud\Http\Controllers;

use crud\Http\Requests\StudentRequest;
use crud\Models\Course;
use crud\Models\Student;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{

    private $students;

    function __construct(Student $students)
    {
        $this->students = $students;
    }

    public function index()
    {
        $pageTitle = 'Listagem de Estudantes';
        $breadcrumbs = ['Estudantes' => ''];

        $students = $this->students->with('course')->orderBy('name')->get();

        return view('student.index', compact(['students', 'search', 'pageTitle', 'breadcrumbs']));
    }

    public function create()
    {
        if (Course::count() == 0)
            return back()->withErrors("Nenhum curso cadastrado. Cadastre algum curso para adicionar estudantes.");

        $pageTitle = 'Adicionar Estudante';
        $breadcrumbs = ['Estudantes' => 'students.index', 'Novo' => ''];

        $courses = ['' => ''] + Course::select('id', DB::raw("CONCAT(name, ' (', institution, ')') AS name"))->get()->pluck('name', 'id')->toArray();

        return view('student.create', compact(['courses', 'pageTitle', 'breadcrumbs']));
    }

    public function store(StudentRequest $request)
    {
        $data = $request->all();

        if ($this->students->create($data))
            return redirect()->route('students.index')->with('success', 'Estudante adicionado com sucesso');
        else
            return back()->withErrors("Ocorreu um erro e não foi possível adicionar o estudante");
    }

    public function show($id)
    {
        $pageTitle = 'Visualizar Estudante';
        $breadcrumbs = ['Estudantes' => 'students.index', 'Visualizar' => ''];

        $student = $this->students->with('course')->find($id);

        return view('student.show', compact(['student', 'pageTitle', 'breadcrumbs']));
    }


    public function edit($id)
    {
        $pageTitle = 'Editar Estudante';
        $breadcrumbs = ['Estudantes' => 'students.index', 'Editar' => ''];

        $student = $this->students->find($id);

        $courses = ['' => ''] + Course::select('id', DB::raw("CONCAT(name, ' (', institution, ')') AS name"))->get()->pluck('name', 'id')->toArray();

        return view('student.edit', compact(['student', 'courses', 'pageTitle', 'breadcrumbs']));
    }


    public function update(StudentRequest $request, $id)
    {
        $data = $request->all();

        $student = $this->students->find($id);

        if ($student->update($data))
            return redirect()->route('students.index')->with('success', 'Estudante atualizado com sucesso');
        else
            return back()->withErrors("Ocorreu um erro e não foi possível atualizar o estudante");
    }

    public function delete($id)
    {
        $pageTitle = 'Deletar Estudante';
        $breadcrumbs = ['Estudantes' => 'students.index', 'Deletar' => ''];

        $student = $this->students->find($id);

        return view('student.delete', compact(['student', 'pageTitle', 'breadcrumbs']));
    }


    public function destroy($id)
    {
        if ($this->students->find($id)->delete())
            return redirect()->route('students.index')->with('success', 'Estudante removido com sucesso');
        else
            return back()->withErrors("Ocorreu um erro e não foi possível deletar o estudante");
    }

}
