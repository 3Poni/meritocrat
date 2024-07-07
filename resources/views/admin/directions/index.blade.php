@extends('admin.layouts.app')
@section('content')
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Направления</h1>
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
                        <div class="col-1 mb-3">
                            <a href="{{ route('admin.direction.create') }}" type="button" class="btn btn-block btn-default">Добавить</a>
                        </div>
                    </div>
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
                                                <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Название</th>
                                                    <th>Ссылка</th>
                                                    <th colspan="3">Действие</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @foreach ($directions as $direction)
                                                <tr>
                                                    <td>{{ $direction->id  }}</td>
                                                    <td>{{ $direction->title  }}</td>
                                                    <td><a href="{{ route('direction', $direction->url) }}" target="_blank">{{ $direction->url  }}</a></td>
                                                    <td><a href="{{ route('admin.direction.edit', $direction->id) }}"><i class="fas fa-pencil-alt text-success"></i></a></td>
                                                    <td>
                                                        <form action="{{ route('admin.direction.delete', $direction->id)}}" method="POST">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="border-0 bg-transparent">
                                                            <i class="fas fa-trash text-danger" role="button"></i>
                                                            </button>
                                                        </form>
                                                </tr>
                                                @endforeach
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
