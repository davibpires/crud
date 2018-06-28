@extends('layout.auth')

@section('content')

    <p class="login-box-msg">Criar nova conta</p>

    {{ Form::open(['route' => 'register', 'method' => 'post']) }}

        <!--- Name Form Input --->
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-user"></i></span>
            </div>
            {{ Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Nome', 'required']) }}
        </div>

        <!--- Email Form Input --->
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-envelope"></i></span>
            </div>
            {{ Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'E-mail', 'required']) }}
        </div>

        <!--- Password Form Input --->
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-key"></i></span>
            </div>
            {{ Form::password('password', ['class' => 'form-control', 'placeholder' => 'Senha', 'required']) }}
        </div>

        <!--- Password Confimation Form Input --->
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-key"></i></span>
            </div>
            {{ Form::password('password_confirmation', ['class' => 'form-control', 'placeholder' => 'Confirmação de Senha', 'required']) }}
        </div>

        <div class="row">
            <div class="col-7">
                <p class="mt-2">
                    <a href="{{ route('login') }}" class="text-center">Já tenho conta, fazer login</a>
                </p>
            </div>
            <div class="col-5">
                <!--- Submit Form Button --->
                <div class="form-group">
                    {{ Form::submit('Criar conta', ['class' => 'btn btn-primary btn-block']) }}
                </div>
            </div>
            <!-- /.col -->
        </div>

    {{ Form::close() }}

@endsection
