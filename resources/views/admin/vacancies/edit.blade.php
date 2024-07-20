@extends('admin.layouts.app')
@section('content')
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Редактирование вакансии</h1>
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
                        <div class="col-12">
                            <form action="{{ route('admin.vacancy.update', $vacancy->id) }}" method="POST">
                                @csrf
                                @method('PATCH')
                                <div class="form-group w-25">
                                    <label>
                                        <h4>Название вакансии</h4>
                                        <input type="text" class="form-control" name="title" placeholder="Название вакансии"
                                               value="{{ $vacancy->title }}">
                                    </label>
                                    @error('title')
                                    <div class="text-danger">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group w-25">
                                    <label>
                                        <h4>Тип занятости</h4>
                                        <input type="text" class="form-control" name="type" placeholder="Тип занятости"
                                               value="{{ $vacancy->type }}">
                                    </label>
                                    @error('type')
                                    <div class="text-danger">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group w-25">
                                    <label>
                                        <h4>Зарплата</h4>
                                        <input type="text" class="form-control" name="salary" placeholder="Заработная плата"
                                               value="{{ $vacancy->salary }}">
                                    </label>
                                    @error('salary')
                                    <div class="text-danger">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group w-25">
                                    <label>
                                        <h4>Требования</h4>
                                        <input type="text" class="form-control" name="requirements" placeholder="Требования к кандидату"
                                               value="{{ $vacancy->requirements }}">
                                    </label>
                                    @error('requirements')
                                    <div class="text-danger">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group w-25">
                                    <label>
                                        <h4>Список задач</h4>
                                        <input type="text" class="form-control" name="description" placeholder="Чем предстоит заниматься"
                                               value="{{ $vacancy->description }}">
                                    </label>
                                    @error('description')
                                    <div class="text-danger">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <input type="submit" class="btn btn-primary" value="Обновить">
                                </div>
                            </form>
                        </div>
                    </div><!-- /.row (main row) -->
                </div><!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
@endsection
