@extends('admin.layouts.app')
@section('content')
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6 d-flex align-items-center">
                            <h1 class="m-0 mr-3">{{ $newsletter->email }}</h1>
                            <a href="{{ route('admin.newsletter.edit', $newsletter->id) }}"><i class="fas fa-pencil-alt text-success"></i></a>
                            <form action="{{ route('admin.newsletter.delete', $newsletter->id)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="ml-3 border-0 bg-transparent">
                                    <i class="fas fa-trash text-danger" role="button"></i>
                                </button>
                            </form>
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
                                <div class="col-6">
                                    <div class="card">
                                            <div class="card-tools">
                                                <div class="input-group input-group-sm" style="width: 150px;">
                                                </div>
                                            </div>
                                        <!-- /.card-header -->
                                        <div class="card-body table-responsive p-0">
                                            <table class="table table-hover text-nowrap">
                                                <tbody>
                                                <tr>
                                                    <td>ID</td>
                                                    <td>{{ $service->id  }}</td>
                                                </tr>
                                                <tr>
                                                    <td>Название META</td>
                                                    <td>{{ $service->title  }}</td>
                                                </tr>
                                                <tr>
                                                    <td>Описание META</td>
                                                    <td>{{ $service->description  }}</td>
                                                </tr>
                                                <tr>
                                                    <td>Заголовок</td>
                                                    <td>{{ $service->header  }}</td>
                                                </tr>
                                                <tr>
                                                    <td>Изображение</td>
                                                    <td><a href="{{ route('service', $service->url) }}" target="_blank">{{ $service->url  }}</a></td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <!-- /.card-body -->
                                    </div>
                                    <!-- /.card -->
                                </div>
                            </div>
                    <!-- /.row -->
                    <!-- /.row (main row) -->
                </div><!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
@endsection
