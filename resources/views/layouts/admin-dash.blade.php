<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>LaraRent | Advance Rental System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
    <base href="{{ \URL::to('/')}}">
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
    <style>
        .bg-custom-1 {
            background-color: #85144b;
        }

        .bg-custom-2 {
            background-image: linear-gradient(15deg, #13547a 0%, #80d0c7 100%);
        }

        html,
        body {
            max-width: 100%;
            overflow-x: hidden;
        }
    </style>
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="deleteModalLabel">Confirm Delete</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Are you sure you want to delete this item?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-danger">Delete</button>
                </div>
            </div>
        </div>
    </div>
    <div class="wrapper">

        <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
        </div>

        <!-- Navbar -->
        <nav class="navbar navbar-expand navbar-white navbar-light" style="margin-left: 93%;">

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-list-4"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbar-list-4">
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img src="../dist/img/user2-160x160.jpg" width="45" height="45" class="rounded-circle">
                        </a>
                        <div class="dropdown-menu pl-2" aria-labelledby="navbarDropdownMenuLink">
                            @role('admin')
                            <x-nav-link :href="route('profile.edit')" class="dropdown-item">
                                {{ __('Profile Setting') }}
                            </x-nav-link>
                            <x-nav-link :href="route('profile.setting')" class="dropdown-item">
                                {{ __('General Setting') }}
                            </x-nav-link>
                            @endrole
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <x-nav-link :href="route('logout')" onclick="event.preventDefault();
                                                                this.closest('form').submit();" class="dropdown-item">
                                    {{ __('Log Out') }}
                                </x-nav-link>
                            </form>
                        </div>
                    </li>
                </ul>
            </div>

            {{-- <li class="nav-item dropdown" style="margin-left: auto;">
                <a class="nav-link" data-toggle="dropdown" href="#">
                    <i class="far fa-2x fa-user"></i>
                    <span class="badge badge-danger navbar-badge">3</span>
                </a>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right text-center" style="">

                    <!-- Message Start -->
                    <x-nav-link :href="route('profile.edit')" class="dropdown-item">
                        <button class="btn-info" style="width: inherit;">{{ __('Profile Setting') }}</button>
                    </x-nav-link>
                    <!-- Message End -->

                    <div class="dropdown-divider"></div>
                    <x-nav-link :href="route('profile.setting')" class="dropdown-item">
                        <button class="btn-secondary" style="width: inherit;">{{ __('General Setting') }}</button>
                    </x-nav-link>
                    <div class="dropdown-divider"></div>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <x-nav-link :href="route('logout')" onclick="event.preventDefault();
                                                    this.closest('form').submit();" class="dropdown-item">
                            <button class="btn-danger" style="width: inherit;">{{ __('Log Out') }}</button>
                        </x-nav-link>
                    </form>
                    <div class="dropdown-divider"></div>
                </div>
            </li> --}}
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="/dashboard" class="brand-link">
                <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
                    style="opacity: .8">
                <span class="brand-text font-weight-light">LaraRent</span>
            </a>
            {{--User details--}}
            <div class="user-panel mt-3 pb-3 mb-3 d-flex ml-2">
                <div class="image">
                    <img src="../dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
                </div>
                <div class="info">
                    <a href="/dashboard" class="d-block">
                        <div style="color: white">{{ Auth::user()->name }}</div>
                    </a>
                </div>
            </div>
            <!-- Sidebar -->
            <div class="sidebar">


                <!-- Sidebar Menu -->
                <nav class="mt-2 ml-3">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                        {{-- <li class="nav-item">
                            <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')"
                                class="nav-link">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                {{ __('Dashboard') }}
                            </x-nav-link>
                        </li> --}}

                        @role('customer')
                        <li class="nav-item">
                            <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')"
                                class="nav-link">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                {{ __('Dashboard') }}
                            </x-nav-link>
                        </li><li class="nav-item">
                            <x-nav-link :href="route('customer-details')" :active="request()->routeIs('customer-details')"
                                class="nav-link">
                                <i class="nav-icon fas fa-car"></i>
                                {{ __('Booking Details') }}
                            </x-nav-link>
                        </li>
                        @endrole
                        @role('vehicle-owner')
                        <li class="nav-item">
                            <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')"
                                class="nav-link">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                {{ __('Dashboard') }}
                            </x-nav-link>
                        </li>
                        <li class="nav-item">
                            <x-nav-link :href="route('vehiclesowner')" :active="request()->routeIs('vehiclesowner')"
                                class="nav-link">
                                <i class="nav-icon fas fa-car"></i>
                                {{ __('Vehicles') }}
                            </x-nav-link>
                        </li>
                        @endrole
                        @role('admin')
                        <li class="nav-item">
                            <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')"
                                class="nav-link">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                {{ __('Dashboard') }}
                            </x-nav-link>
                        </li>
                        <li class="nav-item">
                            <x-nav-link :href="route('vehiclesdetails')" :active="request()->routeIs('vehiclesdetails')"
                                class="nav-link">
                                <i class="nav-icon fas fa-car"></i>
                                {{ __('Vehicles') }}
                            </x-nav-link>
                        </li>
                        {{-- <li class="nav-item">
                            <x-nav-link :href="route('usersdetails')" :active="request()->routeIs('usersdetails')"
                                class="nav-link">
                                <i class="nav-icon fas fa-user"></i>
                                {{ __('Customer Details') }}
                            </x-nav-link>
                        </li> --}}
                        <li class="nav-item">
                            <x-nav-link :href="route('profile.locationadd')"
                                :active="request()->routeIs('profile.locationadd')" class="nav-link">
                                <i class="nav-icon fas fa-map"></i>
                                {{ __('Location') }}
                            </x-nav-link>
                        </li>
                        <li class="nav-item">
                            <x-nav-link :href="route('booking-details')" :active="request()->routeIs('booking-details')"
                                class="nav-link">
                                <i class="nav-icon fas fa-users"></i>
                                {{ __('Booking Details') }}
                            </x-nav-link>
                        </li>
                        <li class="nav-item">
                            <x-nav-link :href="route('contactdetails')" :active="request()->routeIs('contactdetails')"
                                class="nav-link">
                                <i class="nav-icon fas fa-book"></i>
                                {{ __('Queries') }}
                            </x-nav-link>
                        </li>
                        {{-- <li class="nav-item">
                            <x-nav-link :href="route('vehiclesowner')" :active="request()->routeIs('vehiclesowner')"
                                class="nav-link">
                                <i class="nav-icon fas fa-users"></i>
                                {{ __('Vehicles Owner') }}
                            </x-nav-link>
                        </li> --}}
                        @endrole
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            @yield('content')
        </div>
        <!-- /.content-wrapper -->
        <footer class="main-footer">
            <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
            All rights reserved.
            <div class="float-right d-none d-sm-inline-block">
                <b>Version</b> 3.2.0
            </div>
        </footer>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="plugins/jquery/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="plugins/jquery-ui/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- ChartJS -->
    <script src="plugins/chart.js/Chart.min.js"></script>
    <!-- Sparkline -->
    <script src="plugins/sparklines/sparkline.js"></script>
    <!-- JQVMap -->
    <script src="plugins/jqvmap/jquery.vmap.min.js"></script>
    <script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="plugins/jquery-knob/jquery.knob.min.js"></script>
    <!-- daterangepicker -->
    <script src="plugins/moment/moment.min.js"></script>
    <script src="plugins/daterangepicker/daterangepicker.js"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
    <!-- Summernote -->
    <script src="plugins/summernote/summernote-bs4.min.js"></script>
    <!-- overlayScrollbars -->
    <script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/adminlte.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="dist/js/demo.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="dist/js/pages/dashboard.js"></script>
</body>

</html>