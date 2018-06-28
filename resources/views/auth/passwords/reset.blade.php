@extends('layout.auth')

@section('content')

    <p class="login-box-msg">Alterar senha</p>

    {{ Form::open(['route' => 'password.request', 'method' => 'post']) }}

        {{ Form::hidden('token', $token) }}

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

        <div class="row justify-content-end">
            <div class="col-6">
                <!--- Submit Form Button --->
                <div class="form-group">
                    {{ Form::submit('Alterar senha', ['class' => 'btn btn-primary btn-block']) }}
                </div>
            </div>
            <!-- /.col -->
        </div>

    {{ Form::close() }}

@endsection
