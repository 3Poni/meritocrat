@extends('layouts.app')
@push('head')
    <link rel="stylesheet" href="{{ asset('css/vacancy.css') }}">
@endpush
@section('title')Вакансии@endsection
@section('content')
<section class="vacancy">
    <div class="container">
        <div class="links">
            <a href="../index.html"><span>Главная</span></a>
            <img src="../img/vacancy-arrow.png" alt="">
            <a href="../pages/about.html"><span class="active-link">Вакансии</span></a>
        </div>
        <h1 class="section-h1">
            Вакансии
        </h1>
        <div class="container-drop">
            <ul>
              <li class="dropdown" id="dropdown">
                <span class="dropdown-span">Название вакансии</span><img src="../img/icons/arrow-down-white-1.png" alt="">
              </li>
              <li class="dropdown-menu-vacancy" id="dropdown-menu">
                <div >
                    <div class="first-row">
                      <div class="row-text">
                        <h1>Тип занятости</h1>
                        <span>Удаленная работа</span>
                      </div>
                      <div class="row-text">
                        <h1>Зарплата</h1>
                        <span>От 00 до 000 тыс. рублей</span>
                      </div>
                    </div>
                    <div class="second-row">
                      <div class="row-text">
                        <div class="left-column">
                          <h1>Требование</h1>
                        </div>
                        <div class="right-column">
                          <span>
                            1. Lorem ipsum dolor sit amet consectetur. Elementum eu tincidunt odio habitasse congue nibh neque praesent pellentesque.<br><br>
                            2. Lorem ipsum dolor sit amet consectetur. Elementum eu tincidunt odio habitasse congue nibh neque praesent pellentesque.<br><br>
                            3. Lorem ipsum dolor sit amet consectetur. Elementum eu tincidunt odio habitasse congue nibh neque praesent pellentesque.<br><br>
                            4. Lorem ipsum dolor sit amet consectetur. Elementum eu tincidunt odio habitasse congue nibh neque praesent pellentesque.<br><br>
                            5. Lorem ipsum dolor sit amet consectetur. Elementum eu tincidunt odio habitasse congue nibh neque praesent pellentesque.<br><br>
                            6. Lorem ipsum dolor sit amet consectetur. Elementum eu tincidunt odio habitasse congue nibh neque praesent pellentesque.<br><br>
                          </span>
                        </div>
                      </div>
                      <div class="row-text">
                        <div class="left-column">
                          <h1>Чем нужно заниматься</h1>
                        </div>
                        <div class="right-column">
                          <span>
                            1. Lorem ipsum dolor sit amet consectetur. Elementum eu tincidunt odio habitasse congue nibh neque praesent pellentesque.<br><br>
                            2. Lorem ipsum dolor sit amet consectetur. Elementum eu tincidunt odio habitasse congue nibh neque praesent pellentesque.<br><br>
                            3. Lorem ipsum dolor sit amet consectetur. Elementum eu tincidunt odio habitasse congue nibh neque praesent pellentesque.<br><br>
                            <button class="button-white">Отправить резюме</button>
                          </span>
                        </div>
                      </div>
                    </div>
                </div>
              </li>
              <li class="dropdown" id="dropdown">
                <span class="dropdown-span">Название вакансии</span><img src="../img/icons/arrow-down-white-1.png" alt="">
                <ul class="dropdown-menu">
                  <!-- <li><a href="#">Налоговое консультирование</a></li> -->
                </ul>
              </li>
              <li class="dropdown" id="dropdown">
                <span class="dropdown-span">Название вакансии</span><img src="../img/icons/arrow-down-white-1.png" alt="">
                <ul class="dropdown-menu">
                  <!-- <li><a href="#">Налоговое консультирование</a></li> -->
                </ul>
              </li>
              <li class="dropdown" id="dropdown">
                <span class="dropdown-span">Название вакансии</span><img src="../img/icons/arrow-down-white-1.png" alt="">
                <ul class="dropdown-menu">
                  <!-- <li><a href="#">Налоговое консультирование</a></li> -->
                </ul>
              </li>
              <li class="dropdown" id="dropdown">
                <span class="dropdown-span">Название вакансии</span><img src="../img/icons/arrow-down-white-1.png" alt="">
                <ul class="dropdown-menu">
                  <!-- <li><a href="#">Налоговое консультирование</a></li> -->
                </ul>
              </li>
              <li class="dropdown" id="dropdown">
                <span class="dropdown-span">Название вакансии</span><img src="../img/icons/arrow-down-white-1.png" alt="">
                <ul class="dropdown-menu">
                  <!-- <li><a href="#">Налоговое консультирование</a></li> -->
                </ul>
              </li>
              <li class="dropdown" id="dropdown">
                <span class="dropdown-span">Название вакансии</span><img src="../img/icons/arrow-down-white-1.png" alt="">
                <ul class="dropdown-menu">
                  <!-- <li><a href="#">Налоговое консультирование</a></li> -->
                </ul>
              </li>
              <li class="dropdown" id="dropdown">
                <span class="dropdown-span">Название вакансии</span><img src="../img/icons/arrow-down-white-1.png" alt="">
                <ul class="dropdown-menu">
                  <!-- <li><a href="#">Налоговое консультирование</a></li> -->
                </ul>
              </li>
              <li class="dropdown" id="dropdown">
                <span class="dropdown-span">Название вакансии</span><img src="../img/icons/arrow-down-white-1.png" alt="">
                <ul class="dropdown-menu">
                  <!-- <li><a href="#">Налоговое консультирование</a></li> -->
                </ul>
              </li>
              <li class="dropdown" id="dropdown">
                <span class="dropdown-span">Название вакансии</span><img src="../img/icons/arrow-down-white-1.png" alt="">
                <ul class="dropdown-menu">
                  <!-- <li><a href="#">Налоговое консультирование</a></li> -->
                </ul>
              </li>
              <li class="dropdown"id="dropdown">
                <span class="dropdown-span">Название вакансии</span><img src="../img/icons/arrow-down-white-1.png" alt="">
                <ul class="dropdown-menu">
                  <!-- <li><a href="#">Налоговое консультирование</a></li> -->
                </ul>
              </li>
              <li class="dropdown" id="dropdown">
                <span class="dropdown-span">Название вакансии</span><img src="../img/icons/arrow-down-white-1.png" alt="">
                <ul class="dropdown-menu">
                  <!-- <li><a href="#">Налоговое консультирование</a></li> -->
                </ul>
              </li>
              <li class="dropdown" id="dropdown">
                <span class="dropdown-span">Название вакансии</span><img src="../img/icons/arrow-down-white-1.png" alt="">
                <ul class="dropdown-menu">
                  <!-- <li><a href="#">Налоговое консультирование</a></li> -->
                </ul>
              </li>
            </ul>
          </div>
    </div>
    <div class="block-not-vacancy">
      <div class="text">
        <h1>Нет подходящей вакансии,<br>но вы нам подходите?</h1>
        <button class="button-white">Отправить резюме</button>
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
