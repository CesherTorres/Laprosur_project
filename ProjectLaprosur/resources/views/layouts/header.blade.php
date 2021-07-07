<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" type="image/jpg" href="/img/almacen.png">
    <title>Laprosur S.A.C - @yield('title')</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="/plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="../../css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bbootstrap 4 -->
    <link rel="stylesheet" href="/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="/plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="/dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="/plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="/plugins/summernote/summernote-bs4.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">



    @yield('css')
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div id="app">
        <div class="wrapper">

            <nav class="main-header navbar navbar-expand bg-primary navbar-light border-bottom">
                <!-- Left navbar links -->
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link font-weight-light text-white" data-widget="pushmenu" href="#"><i
                                class="fa fa-bars"></i></a>
                    </li>
                </ul>

                <!-- Right navbar links -->
                <ul class="navbar-nav ml-auto">
                    <!-- Notifications Dropdown Menu -->

                    <!-- Authentication Links -->

                    @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle font-weight-light text-white" href="#"
                                role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <img style="height: 40px; width: 40px; background-color: #EFEFEF;"
                                    class="card-img-top rounded-circle mx-auto d-block"
                                    src="/avatarss/{{ Auth()->user()->avatar }}" alt="">
                                <h4 class="dropdown-header"> {{ Auth::user()->name }}</h4>
                                <a class="dropdown-item" data-bs-toggle="modal" role="button"
                                    data-bs-target="#edits">Cambiar avatar</a>
                                <a class="dropdown-item" data-bs-toggle="modal" role="button"
                                    data-bs-target="#editsC">Actualizar contraseña</a>

                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                                 document.getElementById('logout-form').submit();">
                                    {{ __('Cerrar Sesion') }} <i class="fas fa-sign-out-alt"></i>
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                    style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>

                    @endguest

                </ul>


            </nav>

            <aside class="main-sidebar sidebar-dark-primary elevation-4">
                <!-- Brand Logo -->
                <a href="#" class="brand-link text-decoration-none">
                    <img src="../../images/portada/laprosur_icono.png" alt="AdminLTE Logo"
                        class="brand-image img-circle elevation-3" style="opacity: .8">
                    <span class="brand-text font-weight-light">LAPROSUR S.A.C</span>
                </a>

                <!-- Sidebar -->
                <div class="sidebar">
                    <!-- Sidebar user panel (optional) -->
                    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                        <div class="image">
                            <img style="height: 40px; width: 40px; background-color: #EFEFEF;"
                                class="card-img-top rounded-circle mx-auto d-block"
                                src="/avatarss/{{ Auth()->user()->avatar }}" alt="">
                        </div>
                        <div class="info">
                            <a href="#" class="d-block text-decoration-none">{{ Auth::user()->name }}</a>
                        </div>
                    </div>


                    <!-- Sidebar Menu -->
                    <nav class="mt-2">
                        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                            data-accordion="false">
                            <!-- Add icons to the links using the .nav-icon class
                                        with font-awesome or any other icon font library -->

                            <!--Inicio-->
                            <li class="nav-item">
                                <a href="{{ url('/home') }}" class="nav-link active">
                                    <i class="nav-icon fa fa-home"></i>
                                    <p>
                                        Inicio
                                    </p>
                                </a>
                            </li>

                            <!--Ladrillos-->
                            <li class="nav-item has-treeview">
                                <a href="#" class="nav-link">
                                    <i class="nav-icon fas fa-door-open"></i>
                                    <p>
                                        MATERIALES
                                        <i class="fa fa-angle-left right"></i>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview">

                                    <li class="nav-item">
                                        <a href="{{ url('/tipoLadrillos') }}" class="nav-link">
                                            <i class="fa fa-circle-o nav-icon"></i>
                                            <p>Tipos de Ladrillos</p>
                                        </a>
                                    </li>

                                </ul>
                            </li>
                            {{-- Cierre Ladrillos --}}

                            {{-- Produccion crudo --}}
                            <li class="nav-item has-treeview">
                                <a href="#" class="nav-link">
                                    <i class="nav-icon fa fa-industry"></i>
                                    <p>
                                        PRODUCCION CRUDO
                                        <i class="right fa fa-angle-left"></i>
                                    </p>
                                </a>

                                <ul class="nav nav-treeview">
                                    <li class="nav-item">

                                        <a href="{{ url('/produccionCrudos') }}" class="nav-link">
                                            <i class="fa fa-circle-o nav-icon"></i>
                                            <p>Produccion</p>
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="{{ url('/almacenCrudo') }}" class="nav-link">
                                            <i class="fa fa-circle-o nav-icon"></i>
                                            <p>Almacenes</p>
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="{{ url('/turnoProduccion') }}" class="nav-link">
                                            <i class="fa fa-circle-o nav-icon"></i>
                                            <p>Turnos</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            {{-- cierre de produccion crudo --}}
                            {{-- Produccion Cocido --}}
                            <li class="nav-item has-treeview">
                                <a href="#" class="nav-link">
                                    <i class="nav-icon fas fa-door-open"></i>
                                    <p>
                                        PRODUCCION COCIDO
                                        <i class="fa fa-angle-left right"></i>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview">

                                    <li class="nav-item">
                                        <a href="{{ url('/produccionCocidos') }}" class="nav-link">
                                            <i class="fa fa-circle-o nav-icon"></i>
                                            <p>Produccion</p>
                                        </a>
                                    </li>

                                </ul>

                            </li>
                            {{-- cierre produccion cocido --}}


                            <!--Compras-->





                            <!--Empresas-->
                            <li class="nav-item has-treeview">
                                <a href="#" class="nav-link">
                                    <i class="nav-icon fas fa-door-open"></i>
                                    <p>
                                        EMPRESAS
                                        <i class="fa fa-angle-left right"></i>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview">

                                    <li class="nav-item">
                                        <a href="{{ url('/empresas') }}" class="nav-link">
                                            <i class="fa fa-circle-o nav-icon"></i>
                                            <p>Crecion de Empresas</p>
                                        </a>
                                    </li>

                                </ul>

                            </li>
                            <!-- Cierre Empresas-->



                        </ul>
                    </nav>
                    <!-- /.sidebar-menu -->
                </div>
                <!-- /.sidebar -->
            </aside>
            @include('/auth/AvatarModals')
            @include('/auth/NewPasswordAvatar')
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <div class="content-header">

                    <div class="container col-12">

                        @yield('content')
                    </div>

                </div><!-- /.container-fluid -->
            </div>


        </div>
    </div>
    <footer class="main-footer">
        <strong>Copyright &copy; 2021 <a href="http://www.cuanticagroup.com/" target="blank"
                class="text-decoration-none">Ladrillera Progreso del Sur S.A.C</a>.</strong>
        Todos los derechos reservados
        <div class="float-right d-none d-sm-inline-block">
            <b>Version</b> 1.0.1
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
    <script src="/plugins/jquery/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="/plugins/jquery-ui/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>

    <!-- Bootstrap 4 -->
    <script src="/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- ChartJS -->
    <script src="/plugins/chart.js/Chart.min.js"></script>
    <script src="/js/app.js"></script>
    <!-- Sparkline -->
    <script src="/plugins/sparklines/sparkline.js"></script>
    <!--swalert2-->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.js"></script>
    <script src="/js/pluginSwwet.js"></script>
    <!-- JQVMap -->
    <script src="/plugins/jqvmap/jquery.vmap.min.js"></script>
    <script src="/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="/plugins/jquery-knob/jquery.knob.min.js"></script>
    <!-- daterangepicker -->
    <script src="/plugins/moment/moment.min.js"></script>
    <script src="/plugins/daterangepicker/daterangepicker.js"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
    <!-- Summernote -->
    <script src="/plugins/summernote/summernote-bs4.min.js"></script>
    <!-- overlayScrollbars -->
    <script src="/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <!-- AdminLTE App -->
    <script src="/dist/js/adminlte.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="/dist/js/pages/dashboard.js"></script>
    @section('js')
        <!-- AdminLTE for demo purposes -->
        <script src="/dist/js/demo.js"></script>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
                integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
        </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
                integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
        </script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
                integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
        </script>

        @stack('scripts')
        @yield('js')


        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        @if (session('updatepass') == 'ok')
            <script>
                Swal.fire(
                    '¡Actualizado!',
                    'Contraseña actualizada correctamente',
                    'success'
                )
            </script>
        @endif
        @if (session('error') == 'over')
            <script>
                Swal.fire({
                    icon: '¡¡ERROR!!',
                    title: '¡¡ERROR!!',
                    text: 'No ES LA INFORMACION CORRECTA'
                })
            </script>
        @endif
    @endsection
    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>
