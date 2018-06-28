@extends('layout.master')

@section('body')

    <div class="wrapper">

        <!-- Header -->
        @include('layout.partials.header')

        <!-- Sidebar -->
        @include('layout.partials.sidebar')

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0 text-dark">{{ $pageTitle or "" }}</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="{{ url('') }}"><i class="fas fa-home"></i> Home</a></li>
                                @if (isset($breadcrumbs))
                                    @foreach($breadcrumbs as $key => $value)
                                        <li class="breadcrumb-item pl-0 @if ($loop->last) active @endif">@if ($value != '')<a href="{{ route($value) }}">{{ $key }}</a>@else{{ $key }}@endif</li>
                                    @endforeach
                                @endif
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <div class="content">
                <div class="container-fluid">
                    <!-- Page Content Here -->
                    @yield('content')
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <!-- Footer -->
        @include('layout.partials.footer')

    </div>
    <!-- ./wrapper -->

@endsection