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
                    <div class="project-item" style="margin-right: 14px">
                        <input type="button" class="project-categories_button active" value="Все">
                    </div>
                    @foreach($services as $service)
                        <div class="project-item">
                            <input type="button"  onclick="selectService({{ $service->id }})" class=" {{ in_array($service->id, $service_ids) ? 'active' : '' }} project-categories_button"
                                   id="service_{{$service->id}}"
                                   value="{{ $service->title }}">
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
                                <img src="{{ $project->img }}" alt="проект">
                            </div>
                            <div class="project-slider-item_text">
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
    <script>
        var initUrl = '';
        let selectedIds = [];
        let myTimer = false;

        function selectService(id) {
            myTimer = true;
            let clicked = $('#service_'+id)
            let allSelected = $('.project-categories_button')
            if(clicked.hasClass('active')) {
                clicked.toggleClass('active');
                const index = selectedIds.indexOf(id);
                if (index > -1) { // only splice array when item is found
                    selectedIds.splice(index, 1); // 2nd parameter means remove one item only
                }
                initUrl = initUrl.includes(',') ? initUrl.split('=')[0] + '=' + selectedIds.join(',') : initUrl.split('?')[0]
                console.log(initUrl)
            }else{
                selectedIds.push(id);
                clicked.toggleClass('active')
                initUrl = initUrl.includes('service_id') ? initUrl + ',' + id : initUrl + '?service_id=' + id
                console.log(initUrl)
            }
            setTimeout(redirect, 200)
            //
        }

        function redirect() {
            if(myTimer) {
                myTimer = false;
                setTimeout(redirect, 200)
            }else{
                getData(initUrl)
            }

        }

        function getData(url) {
            $.ajax({
                url: "/api/projects?" + url,
                type:"GET",
                data:{
                    "_token": "{{ csrf_token() }}",
                },
                success:function(response){
                    let projectsRendered = '';
                    let linksRendered = '';
                    let projectsPoint = $('.projects-items');
                    let paginationPoint = $('.pagination-items');
                    if(response.result.data.length) {
                        response.result.data.forEach(function (item) {
                            projectsRendered += `<div class="project-slider-item">
                            <div class="project-slider-item_img">
                                <img src="${item.img}" alt="проект">
                            </div>
                            <div class="project-slider-item_text">
                                <h1>${item.header}</h1>
                                <p>${item.description}</p>
                                <span>${item.service.title}</span>
                            </div>
                        </div>`
                        })
                        response.result.links.forEach(function (item) {
                            if(item.url !== null) {
                                if(item.label === "Next &raquo;") {
                                    linksRendered += `<a href="${item.url.replace('/api', '')}" rel="next" aria-label="Next &amp;raquo;">
                                        <div class="arrow-next">
                                            <img src="../img/icons/right-arrow.png" alt="">
                                        </div>
                                    </a>`
                                }else{
                                    linksRendered += `<a href="${item.url.replace('/api', '')}">
                                    <input type="button" class="${item.active ? 'active' : ''}" value="0${Number(item.label)}">
                                </a>`
                                }

                            }

                        })
                    }
                    projectsPoint.html(projectsRendered)
                    paginationPoint.html(linksRendered)
                },
            });
        }
    </script>
<script src="{{ asset('js/dropdown-projects.js') }}"></script>
@endpush
