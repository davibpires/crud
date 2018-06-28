@extends('layout.auth')

@section('content')

    <p class="login-box-msg">Recuperar senha</p>

    {{ Form::open(['route' => 'password.email', 'method' => 'post']) }}

        <!--- Email Form Input --->
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-envelope"></i></span>
            </div>
            {{ Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'E-mail', 'required']) }}
        </div>

        <div class="row justify-content-end">
            <div class="col-6">
                <p class="mt-2">
                    <a href="{{ route('login') }}" class="text-center">Fazer login</a>
                </p>
            </div>
            <div class="col-6">
                <!--- Submit Form Button --->
                <div class="form-group">
                    {{ Form::submit('Recuperar senha', ['class' => 'btn btn-primary btn-block']) }}
                </div>
            </div>
            <!-- /.col -->
        </div>

    {{ Form::close() }}

@endsection
