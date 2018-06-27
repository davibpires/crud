@extends('layout.page')

@section('content')

    <div class="row">
        <div class="col-8 offset-2 mt-2 mb-3">
            @if (session('success'))
                <div class="alert alert-success alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    {{ session('success') }}
                </div>
            @endif
        </div>

        <div class="col-12 mb-3 center">
            <a href="{{ route('students.create') }}">
                <button class="btn btn-primary">Adicionar estudante</button>
            </a>
        </div>

        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Estudantes</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table class="table table-bordered table-hover dataTables">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nome</th>
                                <th>Curso</th>
                                <th>Matrícula</th>
                                <th>Semestre</th>
                                <th>Status</th>
                                <th>Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($students as $student)
                                <tr>
                                    <td>{{ $student->id }}</td>
                                    <td><a href="{{ route('students.show', ['student' => $student->id]) }}">{{ $student->name }}</a></td>
                                    <td>{{ $student->course->name }}</td>
                                    <td>{{ $student->registration }}</td>
                                    <td>{{ $student->semester }}</td>
                                    <td>{{ $student->status }}</td>
                                    <td>
                                        <a href="{{ route('students.edit', ['student' => $student->id]) }}" class="pr-1"><i class="fas fa-pencil-alt"></i></a>
                                        <a href="{{ route('students.delete', ['student' => $student->id]) }}" class="pl-1"><i class="fas fa-trash text-red" style="color: tomato;"></i></a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
    </div><!-- /.row -->
    
@stop