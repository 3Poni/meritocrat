@extends('layouts.app')

@push('head')
<link rel="stylesheet" href="{{ asset('css/pagination.css') }}">
<link rel="stylesheet" href="{{ asset('css/projects.css') }}">
<link rel="stylesheet" href="{{ asset('css/project-page.css') }}">
@endpush
@section('title')Проекты@endsection
@section('content')
<section class="project-page">
        <section class="about-company">
            <div class="container">
                <div class="links">
                    <a href="../index.html"><span>Главная</span></a>
                    <img src="../img/arrow.png" alt="">
                    <a href="../pages/about.html"><span class="active-link">Проекты</span></a>
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
                    <div class="project-item">
                        <input type="button" class="project-categories_button" value="Бухгалтерский учет">
                    </div>
                    <div class="project-item">
                        <input type="button" class="project-categories_button" value="Налогообложение">
                    </div>
                    <div class="project-item">
                        <input type="button" class="project-categories_button" value="Юридический консалтинг">
                    </div>
                    <div class="project-item">
                        <input type="button" class="project-categories_button" value="Стратегический консалтинг">
                    </div>
                    <div class="project-item">
                        <input type="button" class="project-categories_button" value="Операционный консалтинг">
                    </div>
                    <div class="project-item">
                        <input type="button" class="project-categories_button" value="Инвестиционный консалтинг">
                    </div>
                    <div class="project-item">
                        <input type="button" class="project-categories_button" value="Финансовый консалтинг">
                    </div>
                    <div class="project-item">
                        <input type="button" class="project-categories_button" value="Кадровый консалтинг">
                    </div>
                    <div class="project-item">
                        <input type="button" class="project-categories_button" value="Внешние связи и GR">
                    </div>
                    <div class="project-item">
                        <input type="button" class="project-categories_button" value="Маркетинг и реклама">
                    </div>
                    <div class="project-item">
                        <input type="button" class="project-categories_button" value="Digital-услуги">
                    </div>
                    <div class="project-item">
                        <input type="button" class="project-categories_button" value="Политический консалтинг">
                    </div>
                    <div class="project-item">
                        <input type="button" class="project-categories_button" value="Международный консалтинг">
                    </div>
                    <div class="project-item">
                        <input type="button" class="project-categories_button" value="Лингвистический консалтинг">
                    </div>
                </div>
                <div class="projects-row_items_categories-mobile">
                    <div class="project-item">
                      <button type="button" class="active">Все <img src="../img/arrow-down.png" alt=""></button>
                    </div>
                    <div class="dropdown-mobile">
                      <div class="projects-list-mobile">
                        <ul>
                          <li>Все</li>
                          <li>Бухгалтерский учет</li>
                          <li>Налогообложение</li>
                          <li>Юридический консалтинг</li>
                          <li>Стратегический консалтинг</li>
                          <li>Операционный консалтинг</li>
                          <li>Инвестиционный консалтинг</li>
                          <li>Финансовый консалтинг</li>
                          <li>Внешние связи и GR</li>
                          <li>Маркетинг и реклама</li>
                          <li>Digital-услуги</li>
                          <li>Политический консалтинг</li>
                          <li>Международный консалтинг</li>
                          <li>Лингвистический консалтинг</li>
                        </ul>
                      </div>
                    </div>
                  </div>
                <div class="projects-items">
                    <div class="project-slider-item">
                        <div class="project-slider-item_img">
                            <img src="../img/project_img-1.png" alt="">
                        </div>
                        <div class="project-slider-item_text">
                            <h1>Название проекта</h1>
                            <p>Lorem ipsum dolor sit amet consectetur. Elementum eu tincidunt odio habitasse congue nibh neque praesent pellentesque. </p>
                            <span>Налогообложение</span>
                        </div>
                    </div>
                    <div class="project-slider-item">
                        <div class="project-slider-item_img">
                            <img src="../img/project_img-1.png" alt="">
                        </div>
                        <div class="project-slider-item_text">
                            <h1>Название проекта</h1>
                            <p>Lorem ipsum dolor sit amet consectetur. Elementum eu tincidunt odio habitasse congue nibh neque praesent pellentesque. </p>
                            <span>Налогообложение</span>
                        </div>
                    </div>
                    <div class="project-slider-item">
                        <div class="project-slider-item_img">
                            <img src="../img/project_img-1.png" alt="">
                        </div>
                        <div class="project-slider-item_text">
                            <h1>Название проекта</h1>
                            <p>Lorem ipsum dolor sit amet consectetur. Elementum eu tincidunt odio habitasse congue nibh neque praesent pellentesque. </p>
                            <span>Налогообложение</span>
                        </div>
                    </div>
                    <div class="project-slider-item">
                        <div class="project-slider-item_img">
                            <img src="../img/project_img-1.png" alt="">
                        </div>
                        <div class="project-slider-item_text">
                            <h1>Название проекта</h1>
                            <p>Lorem ipsum dolor sit amet consectetur. Elementum eu tincidunt odio habitasse congue nibh neque praesent pellentesque. </p>
                            <span>Налогообложение</span>
                        </div>
                    </div>
                    <div class="project-slider-item">
                        <div class="project-slider-item_img">
                            <img src="../img/project_img-1.png" alt="">
                        </div>
                        <div class="project-slider-item_text">
                            <h1>Название проекта</h1>
                            <p>Lorem ipsum dolor sit amet consectetur. Elementum eu tincidunt odio habitasse congue nibh neque praesent pellentesque. </p>
                            <span>Налогообложение</span>
                        </div>
                    </div>
                    <div class="project-slider-item">
                        <div class="project-slider-item_img">
                            <img src="../img/project_img-1.png" alt="">
                        </div>
                        <div class="project-slider-item_text">
                            <h1>Название проекта</h1>
                            <p>Lorem ipsum dolor sit amet consectetur. Elementum eu tincidunt odio habitasse congue nibh neque praesent pellentesque. </p>
                            <span>Налогообложение</span>
                        </div>
                    </div>
                    <div class="project-slider-item">
                        <div class="project-slider-item_img">
                            <img src="../img/project_img-1.png" alt="">
                        </div>
                        <div class="project-slider-item_text">
                            <h1>Название проекта</h1>
                            <p>Lorem ipsum dolor sit amet consectetur. Elementum eu tincidunt odio habitasse congue nibh neque praesent pellentesque. </p>
                            <span>Налогообложение</span>
                        </div>
                    </div>
                    <div class="project-slider-item">
                        <div class="project-slider-item_img">
                            <img src="../img/project_img-1.png" alt="">
                        </div>
                        <div class="project-slider-item_text">
                            <h1>Название проекта</h1>
                            <p>Lorem ipsum dolor sit amet consectetur. Elementum eu tincidunt odio habitasse congue nibh neque praesent pellentesque. </p>
                            <span>Налогообложение</span>
                        </div>
                    </div>
                    <div class="project-slider-item">
                        <div class="project-slider-item_img">
                            <img src="../img/project_img-1.png" alt="">
                        </div>
                        <div class="project-slider-item_text">
                            <h1>Название проекта</h1>
                            <p>Lorem ipsum dolor sit amet consectetur. Elementum eu tincidunt odio habitasse congue nibh neque praesent pellentesque. </p>
                            <span>Налогообложение</span>
                        </div>
                    </div>
                    <div class="project-slider-item">
                        <div class="project-slider-item_img">
                            <img src="../img/project_img-1.png" alt="">
                        </div>
                        <div class="project-slider-item_text">
                            <h1>Название проекта</h1>
                            <p>Lorem ipsum dolor sit amet consectetur. Elementum eu tincidunt odio habitasse congue nibh neque praesent pellentesque. </p>
                            <span>Налогообложение</span>
                        </div>
                    </div>
                    <div class="project-slider-item">
                        <div class="project-slider-item_img">
                            <img src="../img/project_img-1.png" alt="">
                        </div>
                        <div class="project-slider-item_text">
                            <h1>Название проекта</h1>
                            <p>Lorem ipsum dolor sit amet consectetur. Elementum eu tincidunt odio habitasse congue nibh neque praesent pellentesque. </p>
                            <span>Налогообложение</span>
                        </div>
                    </div>
                    <div class="project-slider-item">
                        <div class="project-slider-item_img">
                            <img src="../img/project_img-1.png" alt="">
                        </div>
                        <div class="project-slider-item_text">
                            <h1>Название проекта</h1>
                            <p>Lorem ipsum dolor sit amet consectetur. Elementum eu tincidunt odio habitasse congue nibh neque praesent pellentesque. </p>
                            <span>Налогообложение</span>
                        </div>
                    </div>
                    <div class="project-slider-item">
                        <div class="project-slider-item_img">
                            <img src="../img/project_img-1.png" alt="">
                        </div>
                        <div class="project-slider-item_text">
                            <h1>Название проекта</h1>
                            <p>Lorem ipsum dolor sit amet consectetur. Elementum eu tincidunt odio habitasse congue nibh neque praesent pellentesque. </p>
                            <span>Налогообложение</span>
                        </div>
                    </div>
                    <div class="project-slider-item">
                        <div class="project-slider-item_img">
                            <img src="../img/project_img-1.png" alt="">
                        </div>
                        <div class="project-slider-item_text">
                            <h1>Название проекта</h1>
                            <p>Lorem ipsum dolor sit amet consectetur. Elementum eu tincidunt odio habitasse congue nibh neque praesent pellentesque. </p>
                            <span>Налогообложение</span>
                        </div>
                    </div>
                    <div class="project-slider-item">
                        <div class="project-slider-item_img">
                            <img src="../img/project_img-1.png" alt="">
                        </div>
                        <div class="project-slider-item_text">
                            <h1>Название проекта</h1>
                            <p>Lorem ipsum dolor sit amet consectetur. Elementum eu tincidunt odio habitasse congue nibh neque praesent pellentesque. </p>
                            <span>Налогообложение</span>
                        </div>
                    </div>

                </div>
                <div class="pagination">
                    <div class="pagination-items">
                        <input type="button" value="01" class="active">
                        <input type="button" value="02">
                        <input type="button" value="03">
                        <div class="arrow-next">
                            <img src="../img/icons/right-arrow.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </section>
@endsection
@push('script')
<script src="{{ asset('js/dropdown-projects.js') }}"></script>
@endpush
