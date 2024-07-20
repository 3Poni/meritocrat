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
            <a href="{{ route('index') }}"><span>Главная</span></a>
            <img src="../img/arrow.png" alt="">
            <a href="{{ route('about') }}"><span class="active-link">О компании</span></a>
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
        <div class="project-slider">
            @foreach($projects as $project)
                <div class="project-slider-item">
                    <div class="project-slider-item_img">
                        <img src="{{ $project->img }}" alt="проект">
                    </div>
                    <div class="project-slider-item_text">
                        <h1 style="cursor: pointer" onclick="showProjectModal('{{ $project->header }}','{{ $project->img }}', '{{ $project->client }}', '{{ $project->ext_description }}' )">{{ $project->header }}</h1>
                        <p>{{ $project->description }}</p>
                        <span>{{ $project->service->title }}</span>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="project-modal" style="display: none;">
            <svg onclick="hideModal()" width="20" height="20" viewBox="0 0 40 41" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <mask id="mask0_1261_4472" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="40" height="41">
                    <rect y="0.666992" width="40" height="40" fill="url(#pattern0_1261_4472)"/>
                </mask>
                <g mask="url(#mask0_1261_4472)">
                    <rect y="0.666992" width="40" height="40" fill="white"/>
                </g>
                <defs>
                    <pattern id="pattern0_1261_4472" patternContentUnits="objectBoundingBox" width="1" height="1">
                        <use xlink:href="#image0_1261_4472" transform="scale(0.00195312)"/>
                    </pattern>
                    <image id="image0_1261_4472" width="512" height="512" xlink:href="data:image/png;base64,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"/>
                </defs>
            </svg>
            <div class="modal-content">
                <img src="" alt="изображение проекта">
                <div class="modal-text">
                    <h3>title</h3>
                    <div class="modal-client"><b>Клиент: </b>client</div>
                    <p>text</p>
                </div>
            </div>
        </div>
        <a href="{{ route('projects') }}" style="text-decoration: none" class="projects-button">Все проекты</a>
    </div>
</section>
@include('layouts.reviews')
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
    <script>
        function showProjectModal(title, img, client, text) {
            let template = `<img src="${img}" alt="изображение проекта">
                <div class="modal-text">
                    <h3>${title}</h3>
                    <div class="modal-client"><b>Клиент: </b>${client}</div>
                    <p>${text}</p>
                </div>`
            $('.modal-content').html(template);
            $('.project-modal').css('display', 'flex');
        }

        function hideModal() {
            $('.project-modal').hide();
        }
    </script>
    <script src="{{ asset('js/slider-about.js') }}"></script>
    <script src="{{ asset('js/discussian-slider.js') }}"></script>
    <script src="{{ asset('js/dropdown-projects.js') }}"></script>
    <script src="{{ asset('js/about-slider.js') }}"></script>
    <script src="{{ asset('js/discussian-slider.js') }}"></script>
    <script src="{{ asset('js/odometer.js') }}"></script>
@endpush

