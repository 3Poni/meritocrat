@extends('layouts.app')
@push('head')
    <link rel="stylesheet" href="{{ asset('css/mottivation-page.css') }}">
@endpush
@section('title')Система мотивации персонала@endsection
@section('content')
    <section class="motivation">
        <div class="container">
            <div class="links">
                <a href="../index.html"><span>Главная</span></a>
                <img src="../img/vacancy-arrow.png" alt="">
                <a href="../pages/about.html"><span class="">Услуги</span></a>
                <img src="../img/vacancy-arrow.png" alt="">
                <a href="../pages/about.html"><span class="">Кадровый консалтинг</span></a>
                <img src="../img/vacancy-arrow.png" alt="">
                <a href="../pages/about.html"><span class="active-link">Система мотивации персонала</span></a>
            </div>
            <h1 class="section-h1">Система мотивации персонала</h1>
            <span class="section-span">Специалисты MERITOCRAT разрабатывают четкие критерии для оценки эффективности работы персонала и схемы мотивации — как отдельных менеджеров, так и сотрудников подразделений. Эта услуга особенно востребована в компаниях, где есть острая необходимость в объективной оценке работы менеджеров среднего и высшего звена и их оптимального поощрения. В итоге — справедливое распределение финансовых премий и повышений по карьерной лестнице.</span>
            <span class="section-span">Особенное внимание мы уделяем развитию руководителей, поскольку считаем это одним из главных стимулирующих факторов. Именно личность руководителя, способного вселить оптимизм, оценить потенциал каждого сотрудника и вовремя поощрить за проделанную работу, является лучшим моральным стимулом. Вот почему разработка системы мотивации персонала в компании специалистами MERITOCRAT всегда осуществляется с учетом этого фактора.</span>
        </div>
    </section>
    <section class="types-motivation">
        <div class="container">
            <h1>Виды мотивации</h1>
            <div class="items-motivation">
                <div class="first-row-items">
                    <div class="item">
                        <div class="first-row">
                            <h1 class="number section-small-h1">01</h1>
                            <h1 class="head-text"></h1>
                        </div>
                        <div class="item-span"></div>
                    </div>
                    <div class="item">
                        <div class="first-row">
                            <h1 class="number section-small-h1">02</h1>
                            <h1 class="head-text"></h1>
                        </div>
                        <div class="item-span"></div>
                    </div>
                </div>
                <div class="second-row-items">
                    <div class="item">
                        <div class="first-row">
                            <h1 class="number section-small-h1">03</h1>
                            <h1 class="head-text"></h1>
                        </div>
                        <div class="item-span"></div>
                    </div>
                </div>
            </div>
        </div>
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
    <script src="{{ asset('js/dropdown-vacancy.js') }}"></script>
@endpush
