@extends('admin.layouts.app')
@section('content')
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Редактирование партнера</h1>
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
                            <form action="{{ route('admin.partner.update', $partner->id) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PATCH')
                                <div class="form-group w-75">
                                    <label>
                                        <h4>Название партнера</h4>
                                        <input type="text" class="form-control" name="title" placeholder="Название партнера"
                                               value="{{ $partner->title }}">
                                    </label>
                                    @error('title')
                                    <div class="text-danger">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group w-75">
                                    <label>
                                        <h4>Заголовок партнера</h4>
                                        <input type="text" class="form-control" name="header" placeholder="Заголовок партнера"
                                               value="{{ $partner->header }}">
                                    </label>
                                    @error('header')
                                    <div class="text-danger">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <h4>Тэги</h4>
                                    <select class="select2" name="tag_ids[]" multiple="multiple" data-placeholder="Выберите тэги" style="width: 100%;">
                                        @foreach ( $tags as $tag)
                                            <option {{ is_array( $partner->tags->pluck('id')->toArray()) && in_array($tag->id, $partner->tags->pluck('id')->toArray()) ? 'selected' : '' }} value="{{ $tag->id }}">{{ $tag->title }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group w-75">
                                    <h4>Текстовый контент партнера</h4>
                                    <label for="ext_description"></label>
                                    <textarea style="min-height: 300px;min-width: 850px;" name="content">{{ $partner->content }}</textarea>
                                    @error('content')
                                    <div class="text-danger">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group w-75">
                                    <h4>URL партнера</h4>
                                    <label>
                                        <input type="text" class="form-control" name="url" placeholder="Ссылка партнера"
                                               value="{{ $partner->url }}">
                                    </label>
                                    @error('url')
                                    <div class="text-danger">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group w-75">
                                    <h4>Текст кнопки</h4>
                                    <label>
                                        <input type="text" class="form-control" name="btn" placeholder="Текст кнопки"
                                               value="{{ $partner->btn }}">
                                    </label>
                                    @error('btn')
                                    <div class="text-danger">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group col-4">
                                    @if($partner->img)
                                    <img src="{{ $partner->img }}" width="200px">
                                    @endif
                                    <h4>Изображение проекта</h4>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="img" name="img">
                                            <label class="custom-file-label" for="img">{{ $partner->img }}</label>
                                        </div>
                                    </div>
                                    @error('img')
                                    <div class="text-danger">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group col-4">
                                    @if($partner->slider_img)
                                        <img src="{{ $partner->slider_img }}" width="200px">
                                    @endif
                                    <h4>Изображение для слайдера</h4>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="slider_img" name="slider_img">
                                            <label class="custom-file-label" for="slider_img">{{ $partner->slider_img }}</label>
                                        </div>
                                    </div>
                                    @error('slider_img')
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
