@extends('layouts.app')

@push('head')
    <link rel="stylesheet" href="{{ asset('css/discussian.css') }}">
    <link rel="stylesheet" href="{{ asset('css/projects.css') }}">
    <link rel="stylesheet" href="{{ asset('css/about-us-page.css') }}">
    <link rel="stylesheet" href="{{ asset('css/about-numbers.css') }}">
@endpush
@section('title')О компании@endsection
@section('content')
<section class="about-company about-company-main">
    <div class="graph-about"><img src="../img/graph-about.png" alt=""></div>
    <div class="container">
        <div class="links">
            <a href="../index.html"><span>Главная</span></a>
            <img src="../img/arrow.png" alt="">
            <a href="../pages/about.html"><span class="active-link">О компании</span></a>
        </div>
        <div class="about-text-items">
            <h1 class="about-h1">О компании</h1>
            <p class="about-p">MERITOCRAT — уникальная компания на рынке профессиональных услуг для корпоративных
                клиентов. Вы получаете комплексное обслуживание собственного бизнеса, не отвлекаясь на поиск
                исполнителей под каждый проект.</p>
            <p class="about-p">В рамках своих компетенций наши сотрудники и бизнес-партнеры ведут деятельность по 14
                направлениям для обеспечения последовательного развития клиентов. Компания реализует проекты в
                кооперации с внешними контрагентами: отраслевыми экспертами, научными институтами, бизнес-аналитиками и
                инновационными компаниями малого и среднего бизнеса.</p>
            <input type="button" class="about-button" value="Скачать реквизиты">
        </div>
    </div>
</section>
<section class="about-numbers">
    <div class="graph-about-numbers"><img src="../img/graphic-numbers.png" alt=""></div>
    <div class="container">
        <div class="about-numbers_items">
            <div class="about-numbers_items-row">
                <div class="item">
                    <h1><span class="count">15</span>+</h1>
                    <span>лет практики</span>
                </div>
                <div class="item">
                    <h1><span class="count">350</span>+</h1>
                    <span>постоянных клиентов</span>
                </div>
                <div class="item">
                    <h1><span class="count active">1400</span></h1>
                    <span>реализованных проектов</span>
                </div>
            </div>
            <div class="about-numbers_items-row">
                <div class="item">
                    <h1><span  class="count">98</span>%</h1>
                    <span>клиентов рекомендуют нас</span>
                </div>
                <div class="item last-item">
                    <h1><span class="count">100</span>+</h1>
                    <span>профессиональных услуг</span>
                </div>
            </div>

        </div>
    </div>
</section>
<section class="industries">
    <div class="container">
        <h1 class="industries-h1">Отрасли</h1>
        <div class="industries-mobile-list">
            <div class="industries-mobile-slider">
                <div class="industries-slider-item">
                    <span>HoReCa</span>
                    <span>Торговля и FMCG</span>
                    <span>Транспорт и логистика</span>
                    <span>Строительство и девелопмент</span>
                    <span>Сервисы и услуги (B2C/B2B)</span>
                    <span>Финансовые и страховые организации</span>
                    <span>Государственные органы и НКО</span>
                    <span>Коммунальное хозяйство</span>
                </div>
                <div class="industries-slider-item">
                    <span>Образование</span>
                    <span>Спорт и красота</span>
                    <span>Здравоохранение и фармацевтика</span>
                    <span>Строительство и девелопмент</span>
                    <span>Сервисы и услуги (B2C/B2B)</span>
                    <span>Финансовые и страховые организации</span>
                    <span>Государственные органы и НКО</span>
                    <span>Коммунальное хозяйство</span>
                </div>
            </div>
        </div>
        <div class="industries_img">
            <img src="../img/industries.png" alt="">
        </div>
    </div>
</section>
<section class="projects">
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
                <button type="button" class="active">Все <img src="../img/down-arrow.png" alt=""></button>
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
        <div class="project-slider">
            <div class="project-slider-item">
                <div class="project-slider-item_img">
                    <img src="../img/project_img-1.png" alt="">
                </div>
                <div class="project-slider-item_text">
                    <span>Название проекта</span>
                    <p>Lorem ipsum dolor sit amet consectetur. Elementum eu tincidunt odio habitasse congue nibh neque
                        praesent pellentesque. </p>
                    <span>Налогообложение</span>
                </div>
            </div>
            <div class="project-slider-item">
                <div class="project-slider-item_img">
                    <img src="../img/project_img-2.png" alt="">
                </div>
                <div class="project-slider-item_text">
                    <span>Название проекта</span>
                    <p>Lorem ipsum dolor sit amet consectetur. Elementum eu tincidunt odio habitasse congue nibh neque
                        praesent pellentesque. </p>
                    <span>Налогообложение</span>
                </div>
            </div>
            <div class="project-slider-item">
                <div class="project-slider-item_img">
                    <img src="../img/project_img-1.png" alt="">
                </div>
                <div class="project-slider-item_text">
                    <span>Название проекта</span>
                    <p>Lorem ipsum dolor sit amet consectetur. Elementum eu tincidunt odio habitasse congue nibh neque
                        praesent pellentesque. </p>
                    <span>Налогообложение</span>
                </div>
            </div>
            <div class="project-slider-item">
                <div class="project-slider-item_img">
                    <img src="../img/project_img-2.png" alt="">
                </div>
                <div class="project-slider-item_text">
                    <span>Название проекта</span>
                    <p>Lorem ipsum dolor sit amet consectetur. Elementum eu tincidunt odio habitasse congue nibh neque
                        praesent pellentesque. </p>
                    <span>Налогообложение</span>
                </div>
            </div>
            <div class="project-slider-item">
                <div class="project-slider-item_img">
                    <img src="../img/project_img-1.png" alt="">
                </div>
                <div class="project-slider-item_text">
                    <span>Название проекта</span>
                    <p>Lorem ipsum dolor sit amet consectetur. Elementum eu tincidunt odio habitasse congue nibh neque
                        praesent pellentesque. </p>
                    <span>Налогообложение</span>
                </div>
            </div>
            <div class="project-slider-item">
                <div class="project-slider-item_img">
                    <img src="../img/project_img-1.png" alt="">
                </div>
                <div class="project-slider-item_text">
                    <span>Название проекта</span>
                    <p>Lorem ipsum dolor sit amet consectetur. Elementum eu tincidunt odio habitasse congue nibh neque
                        praesent pellentesque. </p>
                    <span>Налогообложение</span>
                </div>
            </div>
        </div>
        <input type="button" value="Все проекты" class="projects-button">
    </div>
</section>
<section class="reviews">
    <div class="container">
        <div class="reviews-h1">Отзывы</div>
        <div class="reviews-sliders">
            <div class="reviews-slider_items">
                <div class="reviews-slider_item-img">
                    <img src="../img/men-circle.png" alt="">
                </div>
                <div class="reviews-slider_item-text">
                    <span class="reviews-name">Фамилия Имя Отчество</span>
                    <span class="reviews-position">Должность</span>
                    <span class="reviews-under-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi ratione tenetur placeat sint sit quaerat repellendus.</span>
                </div>
            </div>
            <div class="reviews-slider_items">
                <div class="reviews-slider_item-img">
                    <img src="../img/men-circle.png" alt="">
                </div>
                <div class="reviews-slider_item-text">
                    <span class="reviews-name">Фамилия Имя Отчество</span>
                    <span class="reviews-position">Должность</span>
                    <span class="reviews-under-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi ratione tenetur placeat sint sit quaerat repellendus.</span>
                </div>
            </div>
            <div class="reviews-slider_items">
                <div class="reviews-slider_item-img">
                    <img src="../img/men-circle.png" alt="">
                </div>
                <div class="reviews-slider_item-text">
                    <span class="reviews-name">Фамилия Имя Отчество</span>
                    <span class="reviews-position">Должность</span>
                    <span class="reviews-under-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi ratione tenetur placeat sint sit quaerat repellendus.</span>
                </div>
            </div>
            <div class="reviews-slider_items">
                <div class="reviews-slider_item-img">
                    <img src="../img/men-circle.png" alt="">
                </div>
                <div class="reviews-slider_item-text">
                    <span class="reviews-name">Фамилия Имя Отчество</span>
                    <span class="reviews-position">Должность</span>
                    <span class="reviews-under-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi ratione tenetur placeat sint sit quaerat repellendus.</span>
                </div>
            </div>
        </div>
        <div class="reviews-sliders">
            <div class="reviews-slider_items">
                <div class="reviews-slider_item-img">
                    <img src="../img/men-circle.png" alt="">
                </div>
                <div class="reviews-slider_item-text">
                    <span class="reviews-name">Фамилия Имя Отчество</span>
                    <span class="reviews-position">Должность</span>
                    <span class="reviews-under-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi ratione tenetur placeat sint sit quaerat repellendus.</span>
                </div>
            </div>
            <div class="reviews-slider_items">
                <div class="reviews-slider_item-img">
                    <img src="../img/men-circle.png" alt="">
                </div>
                <div class="reviews-slider_item-text">
                    <span class="reviews-name">Фамилия Имя Отчество</span>
                    <span class="reviews-position">Должность</span>
                    <span class="reviews-under-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi ratione tenetur placeat sint sit quaerat repellendus.</span>
                </div>
            </div>
            <div class="reviews-slider_items">
                <div class="reviews-slider_item-img">
                    <img src="../img/men-circle.png" alt="">
                </div>
                <div class="reviews-slider_item-text">
                    <span class="reviews-name">Фамилия Имя Отчество</span>
                    <span class="reviews-position">Должность</span>
                    <span class="reviews-under-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi ratione tenetur placeat sint sit quaerat repellendus.</span>
                </div>
            </div>
            <div class="reviews-slider_items">
                <div class="reviews-slider_item-img">
                    <img src="../img/men-circle.png" alt="">
                </div>
                <div class="reviews-slider_item-text">
                    <span class="reviews-name">Фамилия Имя Отчество</span>
                    <span class="reviews-position">Должность</span>
                    <span class="reviews-under-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi ratione tenetur placeat sint sit quaerat repellendus.</span>
                </div>
            </div>
        </div>
        <div class="reviews-docs">
            <div class="reviews-docs-slider">
                <div class="reviews-docs-item">
                    <div class="reviews-docs-item_img">
                        <img src="../img/doc.png" alt="">
                    </div>
                    <div class="reviews-docs-item_text">
                        <span class="reviews-docs-item_name">Фамилия Имя Отчество</span>
                        <span class="reviews-docs-item_position">Должность</span>
                        <span class="reviews-docs-item_under-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi ratione tenetur placeat sint sit quaerat repellendus.</span>
                    </div>
                    <div class="reviews-docs_img-bottom">
                        <img src="../img/articule.png" alt="">
                    </div>
                </div>
                <div class="reviews-docs-item">
                    <div class="reviews-docs-item_img">
                        <img src="../img/doc.png" alt="">
                    </div>
                    <div class="reviews-docs-item_text">
                        <span class="reviews-docs-item_name">Фамилия Имя Отчество</span>
                        <span class="reviews-docs-item_position">Должность</span>
                        <span class="reviews-docs-item_under-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi ratione tenetur placeat sint sit quaerat repellendus.</span>
                    </div>
                    <div class="reviews-docs_img-bottom">
                        <img src="../img/articule.png" alt="">
                    </div>
                </div>
                <div class="reviews-docs-item">
                    <div class="reviews-docs-item_img">
                        <img src="../img/doc.png" alt="">
                    </div>
                    <div class="reviews-docs-item_text">
                        <span class="reviews-docs-item_name">Фамилия Имя Отчество</span>
                        <span class="reviews-docs-item_position">Должность</span>
                        <span class="reviews-docs-item_under-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi ratione tenetur placeat sint sit quaerat repellendus.</span>
                    </div>
                    <div class="reviews-docs_img-bottom">
                        <img src="../img/articule.png" alt="">
                    </div>
                </div>
                <div class="reviews-docs-item">
                    <div class="reviews-docs-item_img">
                        <img src="../img/doc.png" alt="">
                    </div>
                    <div class="reviews-docs-item_text">
                        <span class="reviews-docs-item_name">Фамилия Имя Отчество</span>
                        <span class="reviews-docs-item_position">Должность</span>
                        <span class="reviews-docs-item_under-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi ratione tenetur placeat sint sit quaerat repellendus.</span>
                    </div>
                    <div class="reviews-docs_img-bottom">
                        <img src="../img/articule.png" alt="">
                    </div>
                </div>
                <div class="reviews-docs-item">
                    <div class="reviews-docs-item_img">
                        <img src="../img/doc.png" alt="">
                    </div>
                    <div class="reviews-docs-item_text">
                        <span class="reviews-docs-item_name">Фамилия Имя Отчество</span>
                        <span class="reviews-docs-item_position">Должность</span>
                        <span class="reviews-docs-item_under-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi ratione tenetur placeat sint sit quaerat repellendus.</span>
                    </div>
                    <div class="reviews-docs_img-bottom">
                        <img src="../img/articule.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="discussion">
    <div class="gradient-orange"></div>
    <div class="gradient-blue"></div>
    <div class="graph-discussian">
        <img src="../img/discussian-graph.png" alt="">
    </div>
    <div class="container">
        <div class="discussion-items">
            <div class="discussion-item">
                <h1>Работать у нас</h1>
                <span>hr@meritocratconsulting.ru</span>
                <input type="button" class="button-white" value="Оправить резюме">
            </div>
            <div class="discussion-item second-item">
                <h1>Обсудить проект</h1>
                <span>info@meritocratconsulting.ru</span>
                <input type="button" class="button-white" value="Отправить заявку">
            </div>
            <div class="discussion-item">
                <h1>Сотрудничать</h1>
                <span>partner@meritocratconsulting.ru</span>
                <input type="button" class="button-white" value="Стать партнерами">
            </div>
        </div>
    </div>
    <div class="container-mobile">
        <div class="discussion-items-mobile">
            <div class="discussion-item">
                <h1>Работать у нас</h1>
                <span>hr@meritocratconsulting.ru</span>
                <input type="button" class="button-white" value="Оправить резюме">
            </div>
            <div class="discussion-item second-item">
                <h1>Обсудить проект</h1>
                <span>info@meritocratconsulting.ru</span>
                <input type="button" class="button-white" value="Отправить заявку">
            </div>
            <div class="discussion-item">
                <h1>Сотрудничать</h1>
                <span>partner@meritocratconsulting.ru</span>
                <input type="button" class="button-white" value="Стать партнерами">
            </div>
        </div>
    </div>
</section>
@endsection

@push('script')
    <script src="{{ asset('js/slider-about.js') }}"></script>
    <script src="{{ asset('js/discussian-slider.js') }}"></script>
    <script src="{{ asset('js/dropdown-projects.js') }}"></script>
    <script src="{{ asset('js/about-slider.js') }}"></script>
    <script src="{{ asset('js/discussian-slider.js') }}"></script>
    <script src="{{ asset('js/odometer.js') }}"></script>
@endpush

