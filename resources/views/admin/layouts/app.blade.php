<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    @yield('title')

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/edit.css') }}">
    <link rel="stylesheet" href="{{ asset('admin-lte/plugins/fontawesome-free/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin-lte/dist/css/adminlte.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin-lte/plugins/jsgrid/jsgrid.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin-lte/plugins/jsgrid/jsgrid-theme.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin-lte/plugins/select2/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin-lte/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin-lte/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin-lte/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin-lte/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
    </head>

<body class="hold-transition sidebar-mini">
    @include('sweetalert::alert')
    
    <div class="wrapper">
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="index3.html" class="nav-link">{{ trans('home.home') }}</a>
                </li>
            </ul>

            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                                {{ trans('home.language') }}
                            </button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">{{ trans('home.english') }}</a>
                                <a class="dropdown-item" href="#">{{ trans('home.vietnamese') }}</a>
                            </div>
                        </div>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
                        <i class="fas fa-sign-out-alt"></i>
                        <span>{{ trans('home.log_out') }}</span>
                    </a>
                </li>
            </ul>
        </nav>
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <a href="index3.html" class="brand-link">
                <img src="{{ asset('admin-lte/dist/img/logo.png') }}"                   class="brand-image img-circle">
                <strong>{{ trans('home.web_name') }}</strong>
            </a>

            <div class="sidebar">
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="{{ asset('admin-lte/dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2"
                            alt="User Image">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block">{{ trans('home.admin') }}</a>
                    </div>
                </div>

                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <li class="nav-item">
                            <a href="" class="nav-link">
                                <i class="nav-icon fas fa-th"></i>
                                <p>
                                    {{ trans('home.categories') }}
                                </p>
                            </a>
                        </li>

                        <li class="nav-item mt-4">
                            <a href="" class="nav-link">
                                <i class="nav-icon fas fa-book"></i>
                                <p>
                                    {{ trans('home.rounds') }}
                                </p>
                            </a>
                        </li>

                        <li class="nav-item mt-4">
                            <a href="" class="nav-link">
                                <i class="nav-icon fas fa-pencil-alt"></i>
                                <p>
                                    {{ trans('home.tests') }}
                                </p>
                            </a>
                        </li>

                        <li class="nav-item mt-4">
                            <a href="" class="nav-link">
                                <i class="nav-icon fas fa-building"></i>
                                <p>
                                    {{ trans('home.teachers') }}
                                </p>
                            </a>
                        </li>

                        <li class="nav-item mt-4">
                            <a href="" class="nav-link">
                                <i class="nav-icon fas fa-users-cog"></i>
                                <p>
                                    {{ trans('home.users') }}
                                </p>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
        @yield('content')

        <footer class="main-footer">
            <div class="float-right d-none d-sm-inline">
                {{ trans('home.anything_you_want') }}
            </div>
            <strong>{{ trans('home.copyright') }}
            </strong> {{ trans('home.all_rights_reserved') }}
        </footer>
    </div>

    <script src="{{ asset('admin-lte/plugins/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('admin-lte/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('admin-lte/dist/js/adminlte.min.js') }}"></script>
    <script src="{{ asset('admin-lte/plugins/jsgrid/demos/db.js') }}"></script>
    <script src="{{ asset('admin-lte/plugins/jsgrid/jsgrid.min.js') }}"></script>
    <script src="{{ asset('admin-lte/dist/js/demo.js') }}"></script>
    <script src="{{ asset('admin-lte/plugins/bs-custom-file-input/bs-custom-file-input.min.js') }}"></script>
    <script src="{{ asset('admin-lte/plugins/select2/js/select2.full.min.js') }}"></script>
    <script src="{{ asset('admin-lte/plugins/sweetalert2/sweetalert2.min.js') }}"></script>
    <script src="{{ asset('admin-lte/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('admin-lte/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('admin-lte/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('admin-lte/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('js/show_edit.js') }}"></script>
</body>

</html>