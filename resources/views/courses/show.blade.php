@extends('layout.page')

@section('content')

    <div class="row">
        <div class="col-sm-12 col-md-6 col-lg-5 offset-md-1 offset-lg-1">
            <div class="card">
                <div class="card-body">
                    <strong><i class="fas fa-map-pin mr-1"></i> Código</strong>
                    <p class="text-muted">{{ $course->code }}</p>

                    <hr>

                    <strong><i class="far fa-file-alt mr-1"></i> Nome</strong>
                    <p class="text-muted">{{ $course->name }}</p>

                    <hr>

                    <strong><i class="fas fa-university mr-1"></i> Instituição</strong>
                    <p class="text-muted">{{ $course->institution }}</p>

                    <hr>

                    <strong><i class="far fa-calendar-alt mr-1"></i> Cadastrado em</strong>
                    <p class="text-muted">{{ $course->created_at->format('d/m/Y \à\s H:m:s') }}</p>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->

        </div>

        <div class="col-sm-12 col-md-6 col-lg-5">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Estudantes</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body table-responsive p-0">
                    @if ($course->students->count() == 0)
                        <h5 class="mt-4 mb-4 center">Sem estudantes</h5>
                    @else
                        <table class="table table-hover">
                            <tr>
                                <th><i class="fas fa-user mr-1"></i> Nome</th>
                                <th><i class="far fa-file-alt mr-1"></i> Status</th>
                            </tr>
                            @foreach($course->students as $student)
                                <tr>
                                    <td>{{ $student->name}}</td>
                                    <td>{{ ucfirst($student->status) }}</td>
                                </tr>
                            @endforeach
                        </table>
                    @endif
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
    </div>

@stop