<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>CЗ ЖКХ</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    @section('css')
        <link rel="stylesheet" href="build/bundle.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    @show
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
    <header class="main-header">
        <a href="{{ route('front.main.index') }}" class="logo">
            <span class="logo-mini"><b>С</b>ЖКХ</span>
            <span class="logo-lg"><b>СЗ</b>ЖКХ</span>
        </a>
        <nav class="navbar navbar-static-top">
            <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                <span class="sr-only">Toggle navigation</span>
            </a>
        </nav>
    </header>
    <aside class="main-sidebar">
        <section class="sidebar">
            <ul class="sidebar-menu" data-widget="tree">
                <li class="header">MAIN NAVIGATION</li>
                <li><a href="{{ route('front.main.index') }}"><i class="fa fa-circle"></i> <span>На сайт</span></a></li>
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-files-o"></i>
                        <span>(Кладдер)</span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="#"><i class="fa fa-circle-o"></i>Страны</a></li>
                        <li><a href="#"><i class="fa fa-circle-o"></i>Области</a></li>
                        <li><a href="#"><i class="fa fa-circle-o"></i>Города</a></li>
                    </ul>
                </li>
                <li class="{{ active('admin.claim.index') }}"><a href="{{ route('admin.claim.index') }}"><i class="fa fa-user"></i> <span>Заявки</span></a></li>
                <li class="{{ active('admin.user.index') }}"><a href="{{ route('admin.user.index') }}"><i class="fa fa-user"></i> <span>Пользователи</span></a></li>
                <li class="{{ active('admin.worker.index') }}"><a href="{{ route('admin.worker.index') }}"><i class="fa fa-user"></i> <span>Исполнители</span></a></li>
                <li class="{{ active('admin.category.index') }}"><a href="{{ route('admin.category.index') }}"><i class="fa fa-user"></i> <span>Категории</span></a></li>
            </ul>
        </section>
    </aside>
    <div class="content-wrapper">
        @yield('content')
    </div>
    <footer class="main-footer">
    </footer>
</div>
@section('js')
    <script src="build/bundle.js"></script>
@show
</body>
</html>
