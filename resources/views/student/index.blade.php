@extends('layout.page')

@section('content')

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Estudantes</h3>

                    @include('reuse.search', ['route' => 'students.index', 'search' => $search])
                </div>
                <!-- /.card-header -->
                <div class="card-body table-responsive p-0">
                    <table class="table table-hover">
                        <tr>
                            <th>ID</th>
                            <th>Nome</th>
                            <th>Cursos</th>
                            <th>Matrícula</th>
                            <th>Semestre</th>
                            <th>Status</th>
                        </tr>
                        @foreach($students as $student)
                            <tr>
                                <td>{{ $student->id }}</td>
                                <td>{{ $student->name }}</td>
                                <td>{{ $student->course->name }}</td>
                                <td>{{ $student->registration }}</td>
                                <td>{{ $student->semester }}</td>
                                <td>{{ $student->status }}</td>
                            </tr>
                        @endforeach
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
    </div><!-- /.row -->
    
@stop