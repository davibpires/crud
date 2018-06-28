@extends('layout.page')

@section('content')

    <div class="row">
        <div class="col-sm-12 col-md-6 col-lg-5 offset-md-1 offset-lg-1">
            @include('reuse.errors')

            {{ Form::open(['route' => 'profile.password', 'method' => 'post']) }}

                <!--- Current Password Form Input --->
                <div class="form-group">
                    {{ Form::label('current_password', 'Senha Atual:') }}
                    {{ Form::password('current_password', ['class' => 'form-control', 'required']) }}
                </div>

                <!--- Password Form Input --->
                <div class="form-group">
                    {{ Form::label('password', 'Nova Senha:') }}
                    {{ Form::password('password', ['class' => 'form-control', 'required']) }}
                </div>

                <!--- Password Confirmation Form Input --->
                <div class="form-group">
                    {{ Form::label('password_confirmation', 'Confirmação de Nova Senha:') }}
                    {{ Form::password('password_confirmation', ['class' => 'form-control', 'required']) }}
                </div>

                <!--- Submit Form Button --->
                <div class="form-group mt-4 center">
                    {{ Form::submit('Alterar senha', ['class' => 'btn btn-primary']) }}
                </div>

            {{ Form::close() }}
        </div>
    </div>
    
@endsection