@extends('layout.page')

@section('content')

    <div class="row">
        <div class="col-sm-12 col-md-6 col-lg-5 offset-md-1 offset-lg-1">
            @include('reuse.errors')

            {!! Form::open(['route' => 'courses.store', 'method' => 'post']) !!}

                @include('courses._form')

                <!--- Submit Form Button --->
                <div class="form-group mt-4 center">
                    {!! Form::submit('Adicionar curso', ['class' => 'btn btn-primary']) !!}
                </div>

            {!! Form::close() !!}
        </div>
    </div>

@stop