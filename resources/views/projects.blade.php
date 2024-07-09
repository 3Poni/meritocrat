@extends('layouts.app')

@push('head')
<link rel="stylesheet" href="{{ asset('css/pagination.css') }}">
<link rel="stylesheet" href="{{ asset('css/projects.css') }}">
<link rel="stylesheet" href="{{ asset('css/project-page.css') }}">
@endpush
@section('title')Проекты@endsection
@section('content')
<section class="project-page">
        <section class="about-company" style="background: transparent">
            <div class="container">
                <div class="links">
                    <a href="{{ route('index') }}"><span>Главная</span></a>
                    <img src="../img/arrow.png" alt="">
                    <a href="{{ route('projects') }}"><span class="active-link">Проекты</span></a>
                </div>
            </div>
        </section>
        <section class="projects">
            <div class="projects-topgraph"><img src="../img/graph-projects.png" alt=""></div>
            <div class="projecrts-topgraph_2"><img src="../img/graph-projects_2.png" alt=""></div>
            <div class="container">
                <h1 class="projects_h1">Проекты</h1>
                <div class="projects-row_items_categories">
                    <div class="project-item">
                        <input type="button" class="project-categories_button active" value="Все">
                    </div>
                    @foreach($services as $service)
                        <div class="project-item">
                            <input type="button" class="project-categories_button" value="{{ $service->title }}">
                        </div>
                    @endforeach
                </div>
                <div class="projects-row_items_categories-mobile">
                    <div class="project-item">
                      <button type="button" class="active">Все <img src="../img/arrow-down.png" alt=""></button>
                    </div>
                    <div class="dropdown-mobile">
                      <div class="projects-list-mobile">
                        <ul>
                          <li>Все</li>
                          @foreach($services as $service)
                             <li>{{ $service->title }}</li>
                          @endforeach
                        </ul>
                      </div>
                    </div>
                  </div>
                <div class="projects-items">
                    @foreach($projects as $project)
                        <div class="project-slider-item">
                            <div class="project-slider-item_img">
                                <img src="{{ $project->img }}" alt="">
                            </div>
                            <div class="project-slider-item_text" style="margin-top: -10px;display: flex;min-height: 192px;flex-direction: column;justify-content: space-between;">
                                <h1>{{ $project->header }}</h1>
                                <p>{{ $project->description }}</p>
                                <span>{{ $project->service->title }}</span>
                            </div>
                        </div>
                    @endforeach
                </div>
                {{ $projects->links() }}
            </div>
        </section>
    </section>
@endsection
@push('script')
<script src="{{ asset('js/dropdown-projects.js') }}"></script>
@endpush
