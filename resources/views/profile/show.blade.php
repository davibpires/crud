@extends('layout.page')

@section('content')

    <div class="row">
        <div class="col-sm-12 col-md-6 col-lg-5 offset-md-1 offset-lg-1">
            @if (session('success'))
                <div class="alert alert-success alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    {{ session('success') }}
                </div>
            @endif

            @include('reuse.errors')

            <div class="card card-info card-outline">
                <div class="card-body">
                    <strong><i class="fas fa-user mr-1"></i> Nome</strong>
                    <p class="text-muted">{{ $user->name }}</p>
                    <hr>
                    <strong><i class="fas fa-envelope mr-1"></i> E-mail</strong>
                    <p class="text-muted">{{ $user->email }}</p>
                    <hr>
                    <strong><i class="far fa-calendar-alt mr-1"></i> Cadastrado em</strong>
                    <p class="text-muted">{{ $user->created_at->format('d/m/Y \à\s H:m:s') }}</p>
                </div>
                <!-- /.card-body -->
                <div class="card-footer pb-0">
                    <div class="row justify-content-center">
                        <div class="col-5 offset-1 col-sm-5 offset-sm-2 col-md-5 offset-md-0 col-lg-5 col-xl-3">
                            <!--- Submit Form Button --->
                            <div class="form-group">
                                <a href="{{ route('profile.password') }}">
                                    {{ Form::button('Alterar senha', ['class' => 'btn btn-info']) }}
                                </a>
                            </div>
                        </div>
                        <div class="col-5 col-sm-5 col-md-5 col-lg-5 offset-lg-1 col-xl-3 offset-xl-1">
                            <!--- Submit Form Button --->
                            <div class="form-group">
                                <a href="{{ route('profile.edit') }}">
                                    {{ Form::button('Editar perfil', ['class' => 'btn btn-info']) }}
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.card-footer -->
            </div>
            <!-- /.card -->
        </div>
    </div>

@endsection