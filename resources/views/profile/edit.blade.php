@extends('layout.page')

@section('content')

    <div class="row">
        <div class="col-sm-12 col-md-6 col-lg-5 offset-md-1 offset-lg-1">
        @include('reuse.errors')

        {{ Form::model($user, ['route' => ['profile.update'], 'method' => 'put']) }}

            <!--- Name Form Input --->
            <div class="form-group">
                {{ Form::label('name', 'Nome:') }}
                {{ Form::text('name', null, ['class' => 'form-control', 'required']) }}
            </div>

            <!--- Email Form Input --->
            <div class="form-group">
                {{ Form::label('email', 'E-mail:') }}
                {{ Form::email('email', null, ['class' => 'form-control', 'required']) }}
            </div>

            <!--- Submit Form Button --->
            <div class="form-group mt-4 center">
                {{ Form::submit('Salvar', ['class' => 'btn btn-primary']) }}
            </div>

            {{ Form::close() }}
        </div>
    </div>
    
@endsection