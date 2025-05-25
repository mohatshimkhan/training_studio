<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Training Studio :: Admin Panel</title>
        <!-- Google Font: Source Sans Pro -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
        
        <!-- Font Awesome -->
        <link rel="stylesheet" href="{{ asset('backend/assets/plugins/fontawesome-free/css/all.min.css') }}">

        <!-- Theme style -->
        <link rel="stylesheet" href="{{ asset('backend/assets/css/adminlte.min.css') }}">
        <link rel="stylesheet" href="{{ asset('backend/assets/css/custom.css') }}">

        <!-- Ionicons -->
        <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

        <!-- summernote -->
        <link rel="stylesheet" href="{{ asset('backend/assets/plugins/summernote/summernote-bs4.css') }}">

        <meta name="csrf-token" content="{{ csrf_token() }}">
        
        @yield('custom_css')

    </head>
    <body class="hold-transition sidebar-mini">
        <!-- Site wrapper -->
        <div class="wrapper">
            <!-- Navbar -->
            <nav class="main-header navbar navbar-expand navbar-white navbar-light">
                <!-- Right navbar links -->
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                    </li>                   
                </ul>
                <div class="navbar-nav pl-2">
                <!--<ol class="breadcrumb p-0 m-0 bg-white">
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol> -->
                </div>
                
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                            <i class="fas fa-expand-arrows-alt"></i>
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link p-0 pr-3" data-toggle="dropdown" href="#">
                            <img src="{{ asset('backend/assets/img/avatar5.png') }}" class='img-circle elevation-2' width="40" height="40" alt="">
                        </a>
                        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right p-3">
                            <h4 class="h4 mb-0"><strong> {{ Auth::user()->name }}
                                 </strong></h4>
                            <div class="mb-3">{{ Auth::user()->email }}</div>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item">
                                <i class="fas fa-user-cog mr-2"></i> Settings                               
                            </a>
                                          
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item">
                                <i class="fas fa-lock mr-2"></i> Change Password
                            </a>

                            <div class="dropdown-divider"></div>
                            
                            <a href="{{ route('logout') }}" class="dropdown-item text-danger" onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                <i class="fas fa-sign-out-alt mr-2"></i> {{ __('Logout') }}
                                
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </a>

                        </div>
                    </li>
                </ul>
            </nav>
            <!-- /.navbar -->
            <!-- Main Sidebar Container -->
            
            @include('backend.layouts.sidebar')
            
            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                
                @yield('content')

            </div>
            <!-- /.content-wrapper -->

            <footer class="main-footer">
                <strong>Copyright &copy; 2025-2026. All rights reserved.
            </footer>
            
        </div>
        <!-- ./wrapper -->
        <!-- jQuery -->
        <script src="{{ asset('backend/assets/plugins/jquery/jquery.min.js') }}"></script>
        <!-- Bootstrap 4 -->
        <script src="{{ asset('backend/assets/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <!-- AdminLTE App -->
        <script src="{{ asset('backend/assets/js/adminlte.min.js') }}"></script>
        <!-- AdminLTE for demo purposes -->
        <script src="{{ asset('backend/assets/js/demo.js') }}"></script>
        <!-- Summernote -->
        <script src="{{ asset('backend/assets/plugins/summernote/summernote-bs4.min.js') }}"></script>
        <script>
          $(function () {
            // Summernote
            $('.textarea').summernote()
          })
        </script>
        <script type="text/javascript">
            $.ajaxSetup({
                headers: { 
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
        </script>

        @yield('custom_js')
        
    </body>
</html>