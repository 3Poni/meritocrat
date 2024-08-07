@extends('admin.layouts.app')
@section('content')
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Редактирование проекта</h1>
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
                            <form action="{{ route('admin.project.update', $project->id) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PATCH')
                                <div class="form-group w-25">
                                    <label>
                                        <h4>Загловок проекта</h4>
                                        <input type="text" class="form-control" name="header" placeholder="Заголовок проекта"
                                               value="{{ $project->header }}">
                                    </label>
                                    @error('header')
                                    <div class="text-danger">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group w-75">
                                    <h4>Описание для слайдера</h4>
                                    <label for="description"></label>
                                    <textarea style="min-height: 300px;min-width: 850px;" name="content2">{{ $project->description }}</textarea>
                                    @error('description')
                                    <div class="text-danger">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group w-75">
                                    <h4>Описание для модального окна</h4>
                                    <label for="ext_description"></label>
                                    <textarea style="min-height: 300px;min-width: 850px;" name="content2">{{ $project->ext_description }}</textarea>
                                    @error('ext_description')
                                    <div class="text-danger">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group w-25">
                                    <label>
                                        <h4>Клиент проекта</h4>
                                        <input type="text" class="form-control" name="client" placeholder="Клиент проекта"
                                               value="{{ $project->client }}">
                                    </label>
                                    @error('client')
                                    <div class="text-danger">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group w-25">
                                    <h4 for="service_id" >Услуга проекта</h4>
                                    <select name="service_id" class="form-control">
                                        @foreach($services as $service)
                                            <option value="{{ $service->id }}"
                                                {{ $service->id == $project->service_id ? 'selected' : '' }}
                                            >{{ $service->title }}</option>
                                        @endforeach
                                    </select>
                                    @error('role')
                                    <div class="text-danger">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group col-4">
                                    <img src="/{{ $project->img }}" width="200px">
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="img" name="img">
                                            <label class="custom-file-label" for="img">{{ $project->img }}</label>
                                        </div>
                                    </div>
                                    @error('img')
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
