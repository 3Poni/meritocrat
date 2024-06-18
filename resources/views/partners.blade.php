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
@endsection

