<?php

namespace crud\Http\Controllers;

use crud\Http\Requests\CourseRequest;
use crud\Models\Course;

class CourseController extends Controller
{

    private $courses;

    function __construct(Course $courses)
    {
        $this->courses = $courses;
    }

    public function index()
    {
        $pageTitle = 'Listagem de Cursos';
        $breadcrumbs = ['Cursos' => ''];

        $search = \Request::get('search');

        $courses = $this->courses->search()->orderBy('name')->paginate(15);

        return view('course.index', compact(['courses', 'search', 'pageTitle', 'breadcrumbs']));
    }

    public function create()
    {
        $pageTitle = 'Adicionar Curso';
        $breadcrumbs = ['Cursos' => 'courses.index', 'Novo' => ''];

        return view('course.create', compact(['pageTitle', 'breadcrumbs']));
    }

    public function store(CourseRequest $request)
    {
        $data = $request->all();

        if ($this->courses->create($data))
            return redirect()->route('courses.index')->with('success', 'Curso adicionado com sucesso');
        else
            return back()->withErrors("Ocorreu um erro e não foi possível adicionar o curso");
    }

    public function show($id)
    {
        $pageTitle = 'Visualizar Curso';
        $breadcrumbs = ['Cursos' => 'courses.index', 'Visualizar' => ''];

        $course = $this->courses->with('students')->find($id);

        return view('course.show', compact(['course', 'pageTitle', 'breadcrumbs']));
    }


    public function edit($id)
    {
        $pageTitle = 'Editar Curso';
        $breadcrumbs = ['Cursos' => 'courses.index', 'Editar' => ''];

        $course = $this->courses->find($id);

        return view('course.edit', compact(['course', 'pageTitle', 'breadcrumbs']));
    }


    public function update(CourseRequest $request, $id)
    {
        $data = $request->all();

        $course = $this->courses->find($id);

        if ($course->update($data))
            return redirect()->route('courses.index')->with('success', 'Curso atualizado com sucesso');
        else
            return back()->withErrors("Ocorreu um erro e não foi possível atualizar o curso");
    }

    public function delete($id)
    {
        $pageTitle = 'Deletar Curso';
        $breadcrumbs = ['Cursos' => 'courses.index', 'Deletar' => ''];

        $course = $this->courses->find($id);

        return view('course.delete', compact(['course', 'pageTitle', 'breadcrumbs']));
    }


    public function destroy($id)
    {
        if ($this->courses->find($id)->delete())
            return redirect()->route('courses.index')->with('success', 'Curso removido com sucesso');
        else
            return back()->withErrors("Ocorreu um erro e não foi possível deletar o curso");
    }

}
