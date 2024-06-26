@extends('admin.layouts.app')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (CustomPage header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Главная страница</h1>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->
        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- Small boxes (Stat box) -->
                <div class="row">
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-info">
                            <div class="inner">
                                <h3>{{ $data['applicationsCount'] }}</h3>
                                <p>Заявки</p>
                            </div>
                            <div class="icon">
                                <i class="nav-icon fas fa-th-list"></i>
                            </div>
                            <a href="{{ route('admin.application.index') }}" class="small-box-footer">Подробнее<i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-success">
                            <div class="inner">
                                <h3>4</h3>
                                <p>Тэги</p>
                            </div>
                            <div class="icon">
                                <i class="nav-icon fas fa-tags"></i>
                            </div>
                            <a href="#" class="small-box-footer">Подробнее <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-warning">
                            <div class="inner">
                                <h3>{{ $data['pagesCount'] }}</h3>
                                <p>Шаблонные страницы</p>
                            </div>
                            <div class="icon">
                                <i class="nav-icon fas fa-list-alt"></i>
                            </div>
                            <a href="{{ route('admin.page.index') }}" class="small-box-footer">Подробнее<i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-danger">
                            <div class="inner">
                                <h3>{{ $data['usersCount'] }}</h3>
                                <p>Пользователи</p>
                            </div>
                            <div class="icon">
                                <i class="nav-icon fas fa-users"></i>
                            </div>
                            <a href="#" class="small-box-footer">Подробнее<i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->
                </div>
                <!-- /.row -->

                <!-- /.row (main row) -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
@endsection
