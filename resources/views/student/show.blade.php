@extends('layout.page')

@section('content')

    <div class="row">
        <div class="col-sm-12 col-md-6 col-lg-5 offset-md-1 offset-lg-1">
            <div class="card card-info card-outline">
                <div class="card-body">
                    <strong><i class="fas fa-user mr-1"></i> Nome</strong>
                    <p class="text-muted">{{ $student->name }}</p>
                    <hr>
                    <strong><i class="fas fa-university mr-1"></i> Curso</strong>
                    <p class="text-muted">{{ $student->course->name }} ({{ $student->course->institution }})</p>
                    <hr>
                    <strong><i class="fas fa-user-graduate mr-1"></i> Matrícula</strong>
                    <p class="text-muted">{{ $student->registration }}</p>
                    <hr>
                    <strong><i class="fas fa-book mr-1"></i> Semestre</strong>
                    <p class="text-muted">{{ $student->semester }}</p>
                    <hr>
                    <strong><i class="far fa-file-alt mr-1"></i> Status</strong>
                    <p class="text-muted">{{ ucfirst($student->status) }}</p>
                    <hr>
                    <strong><i class="far fa-calendar-alt mr-1"></i> Cadastrado em</strong>
                    <p class="text-muted">{{ $student->created_at->format('d/m/Y \à\s H:m:s') }}</p>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
    </div>

@endsection