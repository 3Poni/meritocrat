@extends('admin.layouts.app')
@section('content')
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Редактирование отзыва</h1>
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
                            <form action="{{ route('admin.review.update', $review->id) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PATCH')
                                <div class="form-group w-75">
                                    <label>
                                        <h4>ФИО клиента</h4>
                                        <input type="text" class="form-control" name="fio" placeholder="ФИО клиента"
                                               value="{{ $review->fio }}">
                                    </label>
                                    @error('fio')
                                    <div class="text-danger">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group w-75">
                                    <label>
                                        <h4>Должность клиента</h4>
                                        <input type="text" class="form-control" name="position" placeholder="Должность клиента"
                                               value="{{ $review->position }}">
                                    </label>
                                    @error('position')
                                    <div class="text-danger">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group w-75">
                                    <h4>Тип отзыва</h4>
                                    <label for="type" >Выберите тип отзыва</label>
                                    <select name="type" class="form-control">
                                        @foreach($types as $id => $type)
                                            <option value="{{ $id }}"
                                                {{ $id == $review->type ? 'selected' : '' }}
                                            >{{ $type }}</option>
                                        @endforeach
                                    </select>
                                    @error('type')
                                    <div class="text-danger">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group w-75">
                                    <label>
                                        <h4>URL отзыва</h4>
                                        <input type="text" class="form-control" name="url" placeholder="URL отзыва"
                                               value="{{ $review->url }}">
                                    </label>
                                    @error('message')
                                    <div class="text-danger">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group w-75">
                                    <h4>Текст отзыва</h4>
                                    <label for="message"></label>
                                    <textarea style="min-height: 300px;min-width: 850px;" name="message">{{ $review->message }}</textarea>
                                    @error('description')
                                    <div class="text-danger">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group col-4">
                                    <img src="{{ $review->img }}" width="200px">
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="img" name="img">
                                            <label class="custom-file-label" for="img">{{ $review->img }}</label>
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
