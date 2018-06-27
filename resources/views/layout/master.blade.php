<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>CRUD</title>

    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

    <!-- Bootstrap -->
    {{ Html::style('css/bootstrap/bootstrap.min.css') }}

    <!-- Font Awesome -->
    {{ Html::style('https://use.fontawesome.com/releases/v5.1.0/css/all.css', ['integrity' => 'sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt', 'crossorigin' => 'anonymous']) }}

    <!-- DataTables -->
    {{ Html::style('https://cdn.datatables.net/1.10.18/css/dataTables.bootstrap4.min.css') }}

    <!-- Theme style -->
    {{ Html::style('css/adminlte/adminlte.min.css') }}

    <!-- My style -->
    {{ Html::style('css/custom.css') }}

    @yield('css')

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>

<body class="hold-transition sidebar-mini">

    @yield('body')

    <!-- jQuery -->
    {{ Html::script('js/jquery/jquery-3.3.1.min.js') }}

    <!-- Bootstrap -->
    {{ Html::script('js/bootstrap/bootstrap.bundle.min.js') }}

    <!-- DataTables -->
    {{ Html::script('https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js') }}
    {{ Html::script('https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap4.min.js') }}

    <!-- AdminLTE App -->
    {{ Html::script('js/adminlte/adminlte.min.js') }}

    <!-- My jQuery -->
    {{ Html::script('js/custom.js') }}

    @yield('js')

</body>
</html>
