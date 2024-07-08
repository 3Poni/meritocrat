@extends('layouts.app')

@push('head')
<link rel="stylesheet" href="{{ asset('css/services-page.css') }}">
<link rel="stylesheet" href="{{ asset('css/pagination.css') }}">
@endpush
@section('title')Услуги@endsection
@section('content')
<section class="services">
    <div class="graph-services-page"><img src="../img/graph-services-page.png" alt=""></div>
    <div class="container"  style="flex-direction: column">
        <div class="links">
            <a href="../index.html"><span>Главная</span></a>
            <img src="../img/arrow.png" alt="">
            <a href="../pages/services.html"><span class="acitve-link">Услуги</span></a>
        </div>
        <div class="services-h1">
            <h1>Услуги</h1>
        </div>
        <div class="services-items">
            @foreach($services as $service)
            <div class="item">
                <div class="item-text">
                    <span class="item-span">{{ $service->header }}</span>
                    <img src="" alt="">
                </div>
                <div class="item-img">
                    <img src="{{ $service->img }}" alt="Изображение 1" class="image">
                </div>
                <a href=""><button class="purple-button">Перейти</button></a>
            </div>
            @endforeach
            @if(false)
            <div class="item">
                <div class="item-text">
                    <span class="item-span">Бухгалтерский учет</span>
                    <img src="" alt="">
                </div>
                <div class="item-img">
                    <img src="../img/icons/buhg.svg" alt="Изображение 1" class="image">
                </div>
                <a href=""><button class="purple-button">Перейти</button></a>
            </div>
            <div class="item">
                <div class="item-text">
                    <span class="item-span">Налогообложение</span>
                    <img src="" alt="">
                </div>
                <div class="item-img">
                    <img src="../img/taxes.png" alt="Изображение 1" class="image">
                </div>
                <a href=""><button class="purple-button">Перейти</button></a>
            </div>
            <div class="item">
                <div class="item-text">
                    <span class="item-span">Юридический консалтинг</span>
                    <img src="" alt="">
                </div>
                <div class="item-img">
                    <img src="../img/consalting.png" alt="Изображение 1" class="image">
                </div>
                <a href=""><button class="purple-button">Перейти</button></a>
            </div>
            <div class="item">
                <div class="item-text">
                    <span class="item-span">Стратегический консалтинг</span>
                    <img src="" alt="">
                </div>
                <div class="item-img">
                    <img src="../img/seo.png" alt="Изображение 1" class="image">
                </div>
                <a href=""><button class="purple-button">Перейти</button></a>
            </div>
            <div class="item">
                <div class="item-text">
                    <span class="item-span">Операционный консалтинг</span>
                    <img src="" alt="">
                </div>
                <div class="item-img">
                    <img src="../img/pencil.png" alt="Изображение 1" class="image">
                </div>
                <a href=""><button class="purple-button">Перейти</button></a>
            </div>
            <div class="item">
                <div class="item-text">
                    <span class="item-span">Инвестиционный консалтинг</span>
                    <img src="" alt="">
                </div>
                <div class="item-img">
                    <img src="../img/graph.png" alt="Изображение 1" class="image">
                </div>
                <a href=""><button class="purple-button">Перейти</button></a>
            </div>
            <div class="item">
                <div class="item-text">
                    <span class="item-span">Финансовый консалтинг</span>
                    <img src="" alt="">
                </div>
                <div class="item-img">
                    <img src="../img/money.png" alt="Изображение 1" class="image">
                </div>
                <a href=""><button class="purple-button">Перейти</button></a>
            </div>
            <div class="item">
                <div class="item-text">
                    <span class="item-span">Кадровый консалтинг</span>
                    <img src="" alt="">
                </div>
                <div class="item-img">
                    <img src="../img/hr.png" alt="Изображение 1" class="image">
                </div>
                <a href=""><button class="purple-button">Перейти</button></a>
            </div>
            <div class="item">
                <div class="item-text">
                    <span class="item-span">Внешние связи и GR</span>
                    <img src="" alt="">
                </div>
                <div class="item-img">
                    <img src="../img/share.png" alt="Изображение 1" class="image">
                </div>
                <a href=""><button class="purple-button">Перейти</button></a>
            </div>
            <div class="item">
                <div class="item-text">
                    <span class="item-span">Маркетинг и реклама</span>
                    <img src="" alt="">
                </div>
                <div class="item-img">
                    <img src="../img/media.png" alt="Изображение 1" class="image">
                </div>
                <a href=""><button class="purple-button">Перейти</button></a>
            </div>
            <div class="item">
                <div class="item-text">
                    <span class="item-span">Digital-услуги</span>
                    <img src="" alt="">
                </div>
                <div class="item-img">
                    <img src="../img/digital.png" alt="Изображение 1" class="image">
                </div>
                <a href=""><button class="purple-button">Перейти</button></a>
            </div>
            <div class="item">
                <div class="item-text">
                    <span class="item-span">Политический консалтинг</span>
                    <img src="" alt="">
                </div>
                <div class="item-img">
                    <img src="../img/castle.png" alt="Изображение 1" class="image">
                </div>
                <a href=""><button class="purple-button">Перейти</button></a>
            </div>
            <div class="item">
                <div class="item-text">
                    <span class="item-span">Международный консалтинг</span>
                    <img src="" alt="">
                </div>
                <div class="item-img">
                    <img src="../img/community.png" alt="Изображение 1" class="image">
                </div>
                <a href=""><button class="purple-button">Перейти</button></a>
            </div>
            <div class="item">
                <div class="item-text">
                    <span class="item-span">Лингвистический консалтинг</span>
                    <img src="" alt="">
                </div>
                <div class="item-img">
                    <img src="../img/language.png" alt="Изображение 1" class="image">
                </div>
                <a href=""><button class="purple-button">Перейти</button></a>
            </div>
            @endif
            <div class="item">
                <div class="item-text">
                    <h2 class="section-small-h1">Требуется эксклюзивная услуга?</h2>
                </div>
                <button class="purple-button">Заказать</button>
            </div>
        </div>
    </div>
</section>
@endsection
