<?php

namespace crud\Http\Controllers;

use crud\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{

    private $students;

    function __construct(Student $students)
    {
        $this->students = $students;
    }

    public function index()
    {
        $search = \Request::get('search');

        $students = $this->students->search()->with('course')->orderBy('name')->get();

        return view('student.index', compact(['students', 'search']));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }

}
