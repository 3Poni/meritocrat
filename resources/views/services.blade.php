@extends('layouts.app')

@push('head')
<link rel="stylesheet" href="{{ asset('css/services-page.css') }}">
<link rel="stylesheet" href="{{ asset('css/pagination.css') }}">
@endpush
@section('title')Услуги@endsection
@section('content')
<section class="services">
    <div class="graph-services-page"><img src="../img/graph-services-page.png" alt=""></div>
    <div class="container">
        <div class="links">
            <a href="../index.html"><span>Главная</span></a>
            <img src="../img/arrow.png" alt="">
            <a href="../pages/services.html"><span class="acitve-link">Услуги</span></a>
        </div>
        <div class="services-h1">
            <h1>Услуги</h1>
        </div>
        <div class="services-items">
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
            <div class="item">
                <div class="item-text">
                    <h2 class="section-small-h1">Требуется эксклюзивная услуга?</h2>
                </div>
                <button class="purple-button">Заказать</button>
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
