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
                                <h3>{{ $data['tagCount'] }}</h3>
                                <p>Тэги</p>
                            </div>
                            <div class="icon">
                                <i class="nav-icon fas fa-tags"></i>
                            </div>
                            <a href="{{ route('admin.tag.index') }}" class="small-box-footer">Подробнее <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-success">
                            <div class="inner">
                                <h3>{{ $data['projectCount'] }}</h3>
                                <p>Проекты</p>
                            </div>
                            <div class="icon">
                                <i class="nav-icon fas fa-tags"></i>
                            </div>
                            <a href="{{ route('admin.project.index') }}" class="small-box-footer">Подробнее <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-success">
                            <div class="inner">
                                <h3>{{ $data['partnerCount'] }}</h3>
                                <p>Партнеры</p>
                            </div>
                            <div class="icon">
                                <i class="nav-icon fas fa-tags"></i>
                            </div>
                            <a href="{{ route('admin.partner.index') }}" class="small-box-footer">Подробнее <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-warning">
                            <div class="inner">
                                <h3>{{ $data['serviceCount'] }}</h3>
                                <p>Услуги</p>
                            </div>
                            <div class="icon">
                                <i class="nav-icon fas fa-list-alt"></i>
                            </div>
                            <a href="{{ route('admin.service.index') }}" class="small-box-footer">Подробнее<i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-warning">
                            <div class="inner">
                                <h3>{{ $data['directionCount'] }}</h3>
                                <p>Направления</p>
                            </div>
                            <div class="icon">
                                <i class="nav-icon fas fa-list-alt"></i>
                            </div>
                            <a href="{{ route('admin.vacancy.index') }}" class="small-box-footer">Подробнее<i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-warning">
                            <div class="inner">
                                <h3>{{ $data['newsletterCount'] }}</h3>
                                <p>E-mail для рассылки</p>
                            </div>
                            <div class="icon">
                                <i class="nav-icon fas fa-list-alt"></i>
                            </div>
                            <a href="{{ route('admin.newsletter.index') }}" class="small-box-footer">Подробнее<i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-warning">
                            <div class="inner">
                                <h3>{{ $data['vacancyCount'] }}</h3>
                                <p>Вакансии</p>
                            </div>
                            <div class="icon">
                                <i class="nav-icon fas fa-list-alt"></i>
                            </div>
                            <a href="{{ route('admin.vacancy.index') }}" class="small-box-footer">Подробнее<i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-warning">
                            <div class="inner">
                                <h3>{{ $data['reviewCount'] }}</h3>
                                <p>Отзывы</p>
                            </div>
                            <div class="icon">
                                <i class="nav-icon fas fa-list-alt"></i>
                            </div>
                            <a href="{{ route('admin.review.index') }}" class="small-box-footer">Подробнее<i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    @if(false)
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
                    @endif
                </div>
                <!-- /.row -->

                <!-- /.row (main row) -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
@endsection
