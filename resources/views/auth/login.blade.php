@extends('layout.auth')

@section('content')

    <p class="login-box-msg">Faça o login para acessar o sistema</p>

    {{ Form::open(['route' => 'login', 'method' => 'post']) }}

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

        <div class="row">
            <div class="col-8">
                <div class="form-group mt-2 mb-0">
                    <div class="form-check">
                        <label>
                            <input class="mr-2" type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Lembrar de mim
                        </label>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <!--- Submit Form Button --->
                <div class="form-group">
                    {{ Form::submit('Login', ['class' => 'btn btn-primary btn-block']) }}
                </div>
            </div>
            <!-- /.col -->
        </div>

    {{ Form::close() }}

    <p class="mb-1 mt-3">
        <a href="{{ route('password.request') }}">Esqueci minha senha</a>
    </p>
    <p class="mb-0">
        <a href="{{ route('register') }}" class="text-center">Criar nova conta</a>
    </p>

@endsection
