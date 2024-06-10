@extends('layouts.app')

@push('head')
    <link rel="stylesheet" href="{{ asset('css/partners-page.css') }}">
    <link rel="stylesheet" href="{{ asset('css/pagination.css') }}">
@endpush
@section('title')Партнеры@endsection
@section('content')
<section class="partners-page">
    <div class="partners-graph"><img src="../img/partners-graph.png" alt=""></div>
    <div class="partners-graph_2"><img src="../img/partners-graph-1.png" alt=""></div>
    <div class="container">
        <div class="links">
            <a href="../index.html"><span>Главная</span></a>
            <img src="../img/arrow.png" alt="">
            <a href="../index.html"><span class="active-link">Партнеры</span></a>
        </div>
        <h1 class="section-h1">Партнеры</h1>
        <div class="partners-buttons">
            <button class="partners-button">Все</button>
            <button class="partners-button">Бухгалтерия</button>
            <button class="partners-button">Расчетный счет</button>
            <button class="partners-button">Продажи и маркетинг</button>
            <button class="partners-button">Телефония</button>
            <button class="partners-button">Подбор персонала</button>
            <button class="partners-button">Юриспруденция</button>
            <button class="partners-button">CRM/ERP</button>
            <button class="partners-button">Онлайн-касса и эквайринг</button>
            <button class="partners-button">Маркировка</button>
        </div>
        <div class="partners-items">
            <img src="../img/out-slid-3.png" alt="">
            <img src="../img/out-slid.png" alt="">
            <img src="../img/out-slid-2.png" alt="">
            <img src="../img/out-slid-5.png" alt="">
            <img src="../img/out-slid-4.png" alt="">
            <img src="../img/out-slid-3.png" alt="">
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

