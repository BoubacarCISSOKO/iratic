<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Admin</title>

        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

        <link rel="stylesheet" href="{{ url('admin/assets/plugins/fontawesome-free/css/all.min.css') }}">
        <link rel="stylesheet" href="{{ url('https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css')}}">
        <link rel="stylesheet" href="{{ url('admin/assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">
        <link rel="stylesheet" href="{{ url('admin/assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ url('admin/assets/plugins/jqvmap/jqvmap.min.css')}}">
        <link rel="stylesheet" href="{{ url('admin/assets/dist/css/adminlte.min.css')}}">
        <link rel="stylesheet" href="{{ url('admin/assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
        <link rel="stylesheet" href="{{ url('admin/assets/plugins/daterangepicker/daterangepicker.css')}}">
        <link rel="stylesheet" href="{{ url('admin/assets/plugins/summernote/summernote-bs4.min.css')}}">
    </head>

    <body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

    <!-- Preloader -->
    <div class="preloader flex-column justify-content-center align-items-center">
        <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
    </div>

    
    @include('admin.header')

    @include('admin.sidebar')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        
        @yield('content')
     
    </div>
    <!-- /.content-wrapper -->
    @include('admin.footer')

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="{{url('admin/assets/plugins/jquery/jquery.min.js')}}"></script>

    <!-- jQuery UI 1.11.4 -->
    <script src="{{url('admin/assets/plugins/jquery-ui/jquery-ui.min.js')}}"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
    $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <script src="{{url('admin/assets/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <!-- ChartJS -->
    <script src="{{url('admin/assets/plugins/chart.js/Chart.min.js')}}"></script>
    <!-- Sparkline -->
    <script src="{{url('admin/assets/plugins/sparklines/sparkline.js')}}"></script>
    <!-- JQVMap -->
    <script src="{{url('admin/assets/plugins/jqvmap/jquery.vmap.min.js')}}"></script>
    <script src="{{url('admin/assets/plugins/jqvmap/maps/jquery.vmap.usa.js')}}"></script>
    <!-- jQuery Knob Chart -->
    <script src="{{url('admin/assets/plugins/jquery-knob/jquery.knob.min.js')}}"></script>
    <!-- daterangepicker -->
    <script src="{{url('admin/assets/plugins/moment/moment.min.js')}}"></script>
    <script src="{{url('admin/assets/plugins/daterangepicker/daterangepicker.js')}}"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="{{url('admin/assets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>
    <!-- Summernote -->
    <script src="{{url('admin/assets/plugins/summernote/summernote-bs4.min.js')}}"></script>
    <!-- overlayScrollbars -->
    <script src="{{url('admin/assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
    <!-- AdminLTE App -->
    <script src="{{url('admin/assets/dist/js/adminlte.js')}}"></script>
    <script src="{{url('admin/assets/dist/js/adminlte.min.js')}}"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="{{url('admin/assets/dist/js/demo.js')}}"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="{{url('admin/assets/dist/js/pages/dashboard.js')}}"></script>
    </body>



</html>

