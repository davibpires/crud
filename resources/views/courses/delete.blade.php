@extends('layout.page')

@section('content')

    <div class="row justify-content-center">
        <div class="col-sm-12 col-md-6 col-lg-5">
            @include('reuse.errors')
        </div>

        <div class="col-12 center">
            {!! Form::open(['route' => ['courses.destroy', $course->id], 'method' => 'delete']) !!}

            <div class="col-12 mt-5">
                <h3>Você deseja mesmo remover o curso <strong>{{ $course->name }}</strong>?</h3>
            </div>

            <!--- Submit Form Button --->
            <div class="form-group mt-5">
                {!! Form::submit('Remover curso', ['class' => 'btn btn-primary']) !!}
            </div>

            {!! Form::close() !!}
        </div>
    </div>

@stop