@extends('admin.layouts.app')
@section('content')
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Редактирование направления</h1>
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
                            <form action="{{ route('admin.direction.update', $direction->id) }}" method="POST">
                                @csrf
                                @method('PATCH')
                                <div class="form-group">
                                    <h4>Название страницы META</h4>
                                    <label>
                                        <input type="text" class="form-control" name="title" placeholder="Название страницы META"
                                               value="{{ $direction->title }}">
                                    </label>
                                    @error('title')
                                    <div class="text-danger">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group w-100">
                                    <h4>Описаниее страницы META</h4>
                                    <label>
                                        <input type="text" class="form-control" name="description" placeholder="Описание тсраницы"
                                               value="{{ $direction->description }}">
                                    </label>
                                    @error('description')
                                    <div class="text-danger">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group w-75">
                                    <h4>Заголовок страницы</h4>
                                    <label>
                                        <input type="text" class="form-control" name="header" placeholder="Заголовок страницы"
                                               value="{{ $direction->header }}">
                                    </label>
                                    @error('header')
                                    <div class="text-danger">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group w-75">
                                    <h4>URL страницы</h4>
                                    <label>
                                        <input type="text" class="form-control" name="url" placeholder="Ссылка страницы"
                                               value="{{ $direction->url }}">
                                    </label>
                                    @error('url')
                                    <div class="text-danger">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group w-75">
                                    <label for="service_id" >Выберите услугу</label>
                                    <select name="service_id" class="form-control">
                                        @foreach($services as $service)
                                            <option value="{{ $service->id }}"
                                                {{ $service->id == $direction->service_id ? 'selected' : '' }}
                                            >{{ $service->title }}</option>
                                        @endforeach
                                    </select>
                                    @error('service')
                                    <div class="text-danger">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                @if($direction->template === 1)
                                    <div class="template show-tpl" id="template-1">
                                        <div class="form-group w-75">
                                            <h4>Контент страницы 1-ый блок</h4>
                                            <label></label>
                                            <textarea style="min-height: 300px;min-width: 850px;" name="content">
                                                {{ $direction->content }}
                                            </textarea>
                                            @error('content')
                                            <div class="text-danger">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                        <div class="form-group w-75">
                                            <h4>Контент страницы 2-ой блок</h4>
                                            <label for="summernote"></label>
                                            <textarea style="min-height: 300px;min-width: 850px;" name="content2">
                                                {{ $direction->content2 }}
                                            </textarea>
                                            @error('content2')
                                            <div class="text-danger">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                        @if(!empty($direction->result))
                                            <h4>Список результатов</h4>
                                        @foreach($direction->result as $key => $result)
                                        <div class="form-group w-75">
                                            <label>
                                                <input value="{{ $result }}" type="text" class="form-control" name="result[]" placeholder="Результат {{ $key + 1 }}">
                                            </label>
                                        </div>
                                        @endforeach
                                        @endif
                                        <button onclick="addField(event, this, 'result');">Добавить поле результата</button>
                                    </div>
                                    @elseif($direction->template === 2)
                                    <div class="template show-tpl" id="template-2">
                                        <div class="form-group w-75">
                                            <h4>Контент страницы 1-ый блок</h4>
                                            <label></label>
                                            <textarea style="min-height: 300px;min-width: 850px;" name="content">
                                                {{ $direction->content }}
                                            </textarea>
                                            @error('content')
                                            <div class="text-danger">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                        <div class="form-group w-75">
                                            <h4>Контент страницы 2-ой блок</h4>
                                            <label for="summernote"></label>
                                            <textarea style="min-height: 300px;min-width: 850px;" name="content2">
                                                {{ $direction->content2 }}
                                            </textarea>
                                            @error('content2')
                                            <div class="text-danger">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                        @if(!empty($direction->result))
                                            <h4>Список услуг</h4>
                                        @foreach($direction->result as $key => $result)
                                        <div class="form-group w-75">
                                                <label>
                                                    <input value="{{ $result }}" type="text" class="form-control" name="result[]" placeholder="Услуга {{ $key + 1 }}">
                                                </label>
                                        </div>
                                        @endforeach
                                        @endif
                                        <button onclick="addField(event, this, 'result');">Добавить поле услуг</button>
                                        @if(!empty($direction->stages))
                                            <h4>Список этапов</h4>
                                        @foreach($direction->stages as $key => $stage)
                                        <div class="form-group w-75">
                                                <label>
                                                    <input value="{{ $stage }}" type="text" class="form-control" name="stages[]" placeholder="Этап {{ $key + 1 }}">
                                                </label>
                                        </div>
                                        @endforeach
                                        @endif
                                        <button onclick="addField(event, this, 'stages');">Добавить поле этапа</button>
                                        @if(!empty($direction->result2))
                                            <h4>Список результатов</h4>
                                        @foreach($direction->result2 as $key => $result2)
                                        <div class="form-group w-75">
                                                <label>
                                                    <input value="{{ $result2 }}" type="text" class="form-control" name="result2[]" placeholder="Результат {{ $key + 1 }}">
                                                </label>
                                        </div>
                                        @endforeach
                                        @endif
                                        <button onclick="addField(event, this, 'result2');">Добавить поле результата</button>
                                    </div>
                                @endif

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
        <script>
            let result = 1;

            function addField(e,button, name) {
                result += 1
                let template = `<div class="form-group w-75">
                                <label>
                                    <input type="text" class="form-control" name="${name}[]" placeholder="Результат ${result}"
                                </label>
                                </div>`
                button.previousElementSibling.insertAdjacentHTML('afterend', template);
                e.preventDefault();
            }
        </script>
        <!-- /.content-wrapper -->
@endsection
