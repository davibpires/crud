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
            <a href="{{ route('courses.create') }}">
                <button class="btn btn-primary">Adicionar curso</button>
            </a>
        </div>

        <div class="col-12">
            <div class="card card-info card-outline">
                <div class="card-header">
                    <h3 class="card-title">Cursos</h3>

                    @include('reuse.search', ['route' => 'courses.index', 'search' => $search])
                </div>
                <!-- /.card-header -->
                <div class="card-body table-responsive p-0">
                    @if ($courses->count() == 0)
                        <h5 class="mt-4 mb-4 center">Sem cursos</h5>
                    @else
                        <table class="table table-hover">
                            <tr>
                                <th>ID</th>
                                <th>Código</th>
                                <th>Nome</th>
                                <th>Instituição</th>
                                <th>Ações</th>
                            </tr>
                            @foreach($courses as $course)
                                <tr>
                                    <td>{{ $course->id }}</td>
                                    <td>{{ $course->code }}</td>
                                    <td><a href="{{ route('courses.show', ['course' => $course->id]) }}">{{ $course->name }}</a></td>
                                    <td>{{ $course->institution }}</td>
                                    <td>
                                        <a href="{{ route('courses.edit', ['course' => $course->id]) }}" class="pr-1"><i class="fas fa-pencil-alt"></i></a>
                                        <a href="{{ route('courses.delete', ['course' => $course->id]) }}" class="pl-1"><i class="fas fa-trash text-red" style="color: tomato;"></i></a>
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                    @endif
                </div>
                <!-- /.card-body -->
                <div class="card-footer clearfix">
                    <ul class="pagination pagination-sm m-0 float-right">
                        {{ $courses->links() }}
                    </ul>
                </div>
                <!-- /.card-footer -->
            </div>
            <!-- /.card -->
        </div>
    </div><!-- /.row -->

@endsection