<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Theme title-->
    <title>Blood Management System | @yield('dashboard')</title>

    <!-- all included css file link -->
    <link rel="stylesheet" type="text/css" href="{{asset('ui/backend/css/bootstrap-grid.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('ui/backend/css/bootstrap-reboot.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('ui/backend/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('ui/backend/css/fontawesome.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('ui/backend/css/all.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('ui/backend/css/jquery.dataTables.min.css')}}">


    <!-- Theme style -->
    <link rel="stylesheet" type="text/css" href="{{asset('ui/backend/css/style.css')}}">
</head>

<body>

    <!-- sidebar -->
    @include('admin.layout.parsials.sidebar')
    <!-- sidebar-end -->

    <!-- page main section -->
    <section class="main_section">

        <!-- navbar -->
        @include('admin.layout.parsials.navbar')
        <!-- navbar-end -->

        {{-- content --}}
        @yield('content')
        {{-- content-end --}}

        <!-- footer area -->
        @include('admin.layout.parsials.footer')
        <!-- footer area end-->
    </section>
    <!-- .main_section end -->


    <!-- REQUIRED SCRIPTS -->
    <script type="text/javascript" src="{{asset('ui/backend/js/jQuery-v2.2.4.js')}}"></script>
    <script type="text/javascript" src="{{asset('ui/backend/js/bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('ui/backend/js/fontawesome.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('ui/backend/js/chart.js')}}"></script>
    <script type="text/javascript" src="{{asset('ui/backend/js/jquery.dataTables.min.js')}}"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#MyTable').DataTable();
            $('#MyTable2').DataTable();
        } );
    </script>

</body>

</html>