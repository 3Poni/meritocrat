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
<section class="contacts" id="contacts">
      <div class="gradient-orange"></div>
      <div class="gradient-blue"></div>
      <div class="container">
        <h1 class="contacts-h1">Контакты</h1>
        <div class="contacts-items">
          <div class="left-column">
            <span class="conctacts-phone">8 (800) 267-19-45 </span>
            <span class="conctacts-email">info@meritocratconsulting.ru</span>
            <div class="social-items">
              <div class="social">
                  <img src="../img/wp.png" alt="">
                  <span class="social-items_text">Чат с консультантом</span>
              </div>
              <div class="social">
                <img src="../img/tg.png" alt="">
                <span class="social-items_text">Новости и аналитика</span>
              </div>
              <div class="social">
                <img src="../img/vk.png" alt="">
                <span class="social-items_text">Новости и обсуждения</span>
              </div>
              <div class="social">
                <img src="../img/inst.png" alt="">
                <span class="social-items_text">Новости</span>
              </div>

            </div>
          </div>
          <div class="right-column">
            <h1 class="right-column_h1">Оставьте заявку</h1>
            <span>Рассчитать стоимость услуг</span>
            <div class="contacts-forms">
              <input type="text" placeholder="Имя" class="contacts-form">
              <input type="text" placeholder="Телефон" class="contacts-form">
              <input type="text" placeholder="Email" class="contacts-form">
              <textarea name="" id="" cols="30" rows="10" class="contacts-comments" placeholder="Комментарии"></textarea>
              <span class="text-data">*Нажимая кнопку «Отправить», я даю согласие на обработку <a>персональных данных</a></span>
              <div class="row-buttons">
                <input type="button" class="button-with-border" value="Прикрепить файлы">
                <input type="button" class="button-white" value="Отправить">
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
@endsection
@push('script')
<script src="{{ asset('js/dropdown-projects.js') }}"></script>
@endpush
