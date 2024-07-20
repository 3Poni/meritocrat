@extends('admin.layouts.app')
@section('content')
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Добавление направления</h1>
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
                            <form action="{{ route('admin.direction.store') }}" method="POST">
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
                                    <h4>Название страницы META</h4>
                                    <label>
                                        <input type="text" class="form-control" name="title" placeholder="Название страницы META"
                                               value="{{ old('title') }}">
                                    </label>
                                    @error('title')
                                    <div class="text-danger">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group w-25">
                                    <h4>Описание страницы META</h4>
                                    <label>
                                        <input type="text" class="form-control" name="description" placeholder="Описание страницы META"
                                               value="{{ old('description') }}">
                                    </label>
                                    @error('description')
                                    <div class="text-danger">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group w-25">
                                    <h4>Заголовок страницы</h4>
                                    <label>
                                        <input type="text" class="form-control" name="header" placeholder="Заголовок страницы"
                                               value="{{ old('header') }}">
                                    </label>
                                    @error('header')
                                    <div class="text-danger">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group w-25">
                                    <h4>URL направления</h4>
                                    <label>
                                        <input type="text" class="form-control" name="url" placeholder="Ссылка направления"
                                               value="{{ old('url') }}">
                                    </label>
                                    @error('url')
                                    <div class="text-danger">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group w-25" id="template">
                                    <label for="template" >Выберите тип шаблона</label>
                                    <select onchange="showTemplate(this.options[this.selectedIndex].value);" name="template" class="form-control">
                                        <option selected disabled value="0">Не указано</option>
                                        <option value="1">Шаблон № 1 - короткий</option>
                                        <option value="2">Шаблон № 2 - длинный</option>
                                    </select>
                                    @error('template')
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
        <script>
            let selected = 0;
            let template1 = `<div class="template show-tpl" id="template-1">
                                    <div class="form-group w-75">
                                            <h4>Контент страницы 1-ый блок</h4>
                                            <label for="summernote"></label>
                                            <textarea style="min-height: 300px;min-width: 850px;" name="content"></textarea>
                                    </div>
                                    <div class="form-group w-75">
                                            <h4>Контент страницы 2-ой блок</h4>
                                            <label for="summernote"></label>
                                            <textarea style="min-height: 300px;min-width: 850px;" name="content2"></textarea>
                                    </div>
                                <div class="form-group w-25">
                                    <label>
                                        <input type="text" class="form-control" name="result[]" placeholder="Результат 1">
                                    </label>
                                </div>
                                <button onclick="addField(event, this, 'result');" class="mb-5">Добавить поле результата</button>
                            </div>`
            let template2 = `<div class="template show-tpl" id="template-2">
                                    <div class="form-group w-75">
                                            <h4>Контент страницы 1-ый блок</h4>
                                            <label for="summernote"></label>
                                            <textarea style="min-height: 300px;min-width: 850px;" name="content"></textarea>
                                    </div>
                                    <div class="form-group w-75">
                                            <h4>Контент страницы 2-ой блок</h4>
                                            <label for="summernote"></label>
                                            <textarea style="min-height: 300px;min-width: 850px;" name="content2"></textarea>
                                    </div>
                                    <div class="form-group w-25">
                                        <label>
                                            <input type="text" class="form-control" name="result[]" placeholder="Услуга 1">
                                        </label>
                                    </div>
                                    <button onclick="addField(event, this, 'result');" class="mb-5">Добавить поле услуг</button>
                                    <div class="form-group w-25">
                                        <label>
                                            <input type="text" class="form-control" name="stages[]" placeholder="Этап 1">
                                        </label>
                                    </div>
                                    <button onclick="addField(event, this, 'stages');" class="mb-5">Добавить поле этапа</button>
                                    <div class="form-group w-25">
                                        <label>
                                            <input type="text" class="form-control" name="result2[]" placeholder="Результат 1">
                                        </label>
                                    </div>
                                    <button onclick="addField(event, this, 'result2');" class="mb-5">Добавить поле результата</button>
                                </div>`

            function showTemplate(id) {
                console.log(id)
                if(id === 0 ) return;
                if(id == 1) {
                    if($('#template-2')) {
                        $('#template-2').remove()
                    }
                    $('#template').after(template1);
                }else{
                    if($('#template-1')) {
                        $('#template-1').remove()
                    }
                    $('#template').after(template2);
                }

                // if(selected != 0) {
                //     $('#template-'+selected).toggleClass('show-tpl')
                // }
                // selected = id;
                // $('#template-'+id).toggleClass('show-tpl')
            }

            let result = 1;

            function addField(e,button, name) {
                result += 1
                let template = `<div class="form-group w-25">
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
