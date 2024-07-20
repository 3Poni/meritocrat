@extends('admin.layouts.app')
@section('content')
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Добавление проекта</h1>
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
                            <form action="{{ route('admin.project.store') }}" method="POST">
                                @csrf
                                <div class="form-group w-25">
                                    <label for="service_id" >Выберите услугу</label>
                                    <select name="service_id" class="form-control">
                                        <option disabled selected></option>
                                        @foreach($services as $service)
                                            <option value="{{ $service->id }}"
                                            >{{ $service->title }}</option>
                                        @endforeach
                                    </select>
                                    @error('service_id')
                                    <div class="text-danger">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group w-25">
                                    <label>
                                        <input type="text" class="form-control" name="header" placeholder="Заголовок проекта"
                                               value="{{ old('header') }}">
                                    </label>
                                    @error('header')
                                    <div class="text-danger">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group w-25">
                                    <label>
                                        <input type="text" class="form-control" name="description" placeholder="Описание проекта"
                                               value="{{ old('description') }}">
                                    </label>
                                    @error('description')
                                    <div class="text-danger">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group w-75">
                                    <h4>Описание для слайдера</h4>
                                    <label for="description"></label>
                                    <textarea style="min-height: 300px;min-width: 850px;" name="content2">{{ old('description') }}</textarea>
                                    @error('description')
                                    <div class="text-danger">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group w-75">
                                    <h4>Описание для модального окна</h4>
                                    <label for="ext_description"></label>
                                    <textarea style="min-height: 300px;min-width: 850px;" name="content2">{{ old('ext_description') }}</textarea>
                                    @error('ext_description')
                                    <div class="text-danger">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group w-25">
                                    <label>
                                        <input type="text" class="form-control" name="client" placeholder="Введите название клиента"
                                               value="{{ old('client') }}">
                                    </label>
                                    @error('client')
                                    <div class="text-danger">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>

                                <div class="form-group col-4">
                                    <label for="img">Добавить файл</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="img" name="img">
                                            <label class="custom-file-label" for="img">Выберите файл</label>
                                        </div>
                                        <div class="input-group-append">
                                            <span class="input-group-text">Загрузить</span>
                                        </div>
                                    </div>
                                    @error('img')
                                    <div class="text-danger">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group mt-5">
                                <input type="submit" class="btn btn-primary" value="Добавить">
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
