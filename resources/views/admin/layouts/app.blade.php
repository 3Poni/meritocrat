<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Меню администратора</title>
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('plugins/select2/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="{{ asset('plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
    <!-- iCheck -->
    <link rel="stylesheet" href="{{ asset('plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
    <!-- JQVMap -->
    <link rel="stylesheet" href="{{ asset('plugins/jqvmap/jqvmap.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('css/adminlte.css') }}">
    <!-- overlayScrollbars -->
{{--    <link rel="stylesheet" href="{{ asset('plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">--}}
    <!-- Daterange picker -->
{{--    <link rel="stylesheet" href="{{ asset('plugins/daterangepicker/daterangepicker.css') }}">--}}
    <!-- summernote -->
    <link rel="stylesheet" href="{{ asset('plugins/summernote/summernote-bs4.min.css') }}">
    <style>
        .form-control {
            min-width: 500px;
        }
    </style>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light d-flex justify-content-between">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="{{ route('admin.main.index') }}" class="nav-link">Главная</a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="/" class="nav-link">Вернуться на сайт</a>
            </li>
        </ul>
        <ul class="navbar-nav mr-3">
            <li class="nav-item">
               <form action="{{ route('logout') }}" method="post">
                   @csrf
                   <input class="btn btn-outline-primary" type="submit" value="Выйти">
               </form>
            </li>
        </ul>
    </nav>
    <!-- /.navbar -->
    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Sidebar -->
        <div class="sidebar">
            <ul class="pt-3 nav nav-pills nav-sidebar flex-column" data-widget="treeview">
                <li class="nav-item">
                    <a href="{{ route('admin.application.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-th-list"></i>
                        <p>Заявки</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.tag.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-tags"></i>
                        <p>Тэги</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.project.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-tags"></i>
                        <p>Проекты</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.partner.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-tags"></i>
                        <p>Партнеры</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.service.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-list-alt"></i>
                        <p>Услуги</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.direction.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-list-alt"></i>
                        <p>Направления услуг</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.newsletter.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-list-alt"></i>
                        <p>E-mail для рассылки</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.vacancy.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-list-alt"></i>
                        <p>Вакансии</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.review.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-list-alt"></i>
                        <p>Отзывы</p>
                    </a>
                </li>
                @if(false)
                <li class="nav-item"
                @endif
            </ul>
        </div>

    </aside>
    <!-- Content Wrapper. Contains page content -->
@yield('content')
    <!-- /.content-wrapper -->
    <footer class="main-footer">
        <p>Footer</p>
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
</div>

<!-- ./wrapper --><!-- jQuery -->
<script src="{{asset ('plugins/jquery/jquery.min.js')}}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{ asset ('plugins/jquery-ui/jquery-ui.min.js') }}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('plugins/select2/js/select2.full.min.js') }}"></script>
<!-- ChartJS -->
{{--<script src="{{asset ('plugins/chart.js/Chart.min.js')}}"></script>--}}
<!-- Sparkline -->
{{--<script src="{{asset ('plugins/sparklines/sparkline.js')}}"></script>--}}
<!-- JQVMap -->
<script src="{{asset ('plugins/jqvmap/jquery.vmap.min.js')}}"></script>
<script src="{{asset ('plugins/jqvmap/maps/jquery.vmap.usa.js')}}"></script>
<!-- jQuery Knob Chart -->
<script src="{{asset ('plugins/jquery-knob/jquery.knob.min.js')}}"></script>
<!-- daterangepicker -->
<script src="{{asset ('plugins/moment/moment.min.js')}}"></script>
<script src="{{asset ('plugins/bs-custom-file-input/bs-custom-file-input.min.js')}}"></script>
{{--<script src="{{asset ('plugins/daterangepicker/daterangepicker.js')}}"></script>--}}
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{asset ('plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>
<!-- Summernote -->
<script src="{{asset ('plugins/summernote/summernote-bs4.min.js')}}"></script>
<!-- overlayScrollbars -->
{{--<script src="{{asset ('plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>--}}
<!-- AdminLTE App -->
<script src="{{asset ('js/adminlte.js')}}"></script>
<script>
    $(document).ready(function() {
        $('#summernote').summernote({
            toolbar: [
                // [groupName, [list of button]]
                ['style', ['bold', 'italic', 'underline', 'clear']],
                ['font', ['strikethrough', 'superscript', 'subscript']],
                ['fontsize', ['fontsize']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['height', ['height']]
            ]
        });
    });
    $(function () {
        bsCustomFileInput.init();
    });
    $('.select2').select2()
</script>
<style>
    .custom-file-input:lang(en)~.custom-file-label:after {
        content: "...";
    }
</style>
</body>
</html>
