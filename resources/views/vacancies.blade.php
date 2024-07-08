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
              @foreach($vacancies as $vacancy)
              <li class="dropdown" id="dropdown">
                <span class="dropdown-span">{{ $vacancy->title }}</span><img src="../img/icons/arrow-down-white-1.png" alt="">
              </li>
              <li class="dropdown-menu-vacancy" id="dropdown-menu">
                <div >
                    <div class="first-row">
                      <div class="row-text">
                        <h1>Тип занятости</h1>
                        <span>{{ $vacancy->type }}</span>
                      </div>
                      <div class="row-text">
                        <h1>Зарплата</h1>
                        <span>{{ $vacancy->salary }}</span>
                      </div>
                    </div>
                    <div class="second-row">
                      <div class="row-text">
                        <div class="left-column">
                          <h1>Требование</h1>
                        </div>
                        <div class="right-column">
                          <span>
                            {!! $vacancy->requirements !!}
                          </span>
                        </div>
                      </div>
                      <div class="row-text">
                        <div class="left-column">
                          <h1>Чем нужно заниматься</h1>
                        </div>
                        <div class="right-column">
                          <span>
                           {!! $vacancy->description !!}
                            <button class="button-white">Отправить резюме</button>
                          </span>
                        </div>
                      </div>
                    </div>
                </div>
              </li>
              @endforeach
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
