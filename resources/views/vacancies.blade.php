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
@endsection
@push('script')
    <script src="{{ asset('js/dropdown-projects.js') }}"></script>
    <script src="{{ asset('js/dropdown-vacancy.js') }}"></script>
@endpush
