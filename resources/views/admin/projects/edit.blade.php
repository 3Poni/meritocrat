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
                            <form action="{{ route('admin.project.update', $project->id) }}" method="POST">
                                @csrf
                                @method('PATCH')
                                <div class="form-group w-25">
                                    <label>
                                        <input type="text" class="form-control" name="header" placeholder="Заголовок проекта"
                                               value="{{ $project->header }}">
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
                                               value="{{ $project->description }}">
                                    </label>
                                    @error('description')
                                    <div class="text-danger">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group w-25">
                                    <label>
                                        <input type="text" class="form-control" name="client" placeholder="Клиент проекта"
                                               value="{{ $roject->client }}">
                                    </label>
                                    @error('client')
                                    <div class="text-danger">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group w-25">
                                    <label for="role" >Выберите услугу</label>
                                    <select name="role" class="form-control">
                                        @foreach($services as $service)
                                            <option value="{{ $service->id }}"
                                                {{ $service->id == $project->service_id ? 'selected' : '' }}
                                            >{{ $service }}</option>
                                        @endforeach
                                    </select>
                                    @error('role')
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
