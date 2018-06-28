@extends('layout.master', ['bodyClass' => 'login-page'])

@section('body')

    <div class="login-box">
        <div class="login-logo">
            The <strong>{{ env('APP_NAME', 'CRUD') }}</strong> Project
        </div>
        <!-- /.login-logo -->

        <div class="card">
            <div class="card-body">
                @include('reuse.errors')

                @yield('content')
            </div>
            <!-- /.login-card-body -->
        </div>
    </div>
    <!-- /.login-box -->

@endsection