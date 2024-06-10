@extends('layouts.app')

@push('head')
    <link rel="stylesheet" href="{{ asset('css/accounting-support.css') }}">
@endpush
@section('title')Проекты@endsection
@section('content')
    <section class="accounting-support">
        <div class="container">
            <div class="links">
                <a href="../index.html"><span>Главная</span></a>
                <img src="../img/arrow.png" alt="">
                <a href="../pages/services.html"><span>Услуги </span></a>
                <img src="../img/arrow.png" alt="">
                <a href=""><span>Бухгалтерский учет</span></a>
                <img src="../img/arrow.png" alt="">
                <a href=""><span class="active-link">Бухгалтерское сопровождение</span></a>
            </div>
            <h1 class="section-h1">Бухгалтерское сопровождение</h1>
            <span class="section-span">Освободите время для бизнеса. Команда по цене штатного бухгалтера. Ведение бухгалтерии без ошибок.
        </span>
            <span class="section-span">Профессиональное бухгалтерское сопровождение от MERITOCRAT – это возможность сотрудничать со узкопрофильными специалистами высокой квалификации: бухгалтерами, консультантами по налогам, юристами, кадровиками. Они знают, как отстоять Ваши интересы перед контролирующими органами, исключить штрафы и оптимизировать суммы налогов. И это при том, что бухгалтерское сопровождение, построенное на принципах аутсорсинга, не предусматривает крупных затрат на содержание соответствующей службы.
        </span>
            <span class="section-span">В обязанности любой компании, помимо ведения основной деятельности, входит составление документов бухгалтерского учета. В случае с малым бизнесом эту задачу вполне может решить один бухгалтер, максимум – небольшой бухгалтерский отдел. Тогда как средние и крупные предприятия требуют более серьезного подхода к ведению отчетности. Большой объем документов и тысячи разноплановых хозяйственных операций, выполняемых каждый месяц, необходимо правильно учитывать и систематизировать.
        </span>
            <div class="accounting-support-columns">
                <div class="left-column">
                    <img src="../img/account-img.png" alt="">
                </div>
                <div class="right-column">
                <span class="section-span">
                    Ведение бухгалтерского и налогового учета невозможно без соответствующих знаний. Частые изменения законодательства, введение новых положений приводят к тому, что специалисты многих компаний не успевают с ними ознакомиться. Квалифицированные консультации по ведению бухгалтерского учета – неоценимая помощь компаниям любой формы собственности. Независимо от вида деятельности вашего предприятия, вы можете заказать услугу у специалистов компании MERITOCRAT.
                </span>
                    <span class="section-span">
                    Аутсорсинг ВЭД осуществляют, как правило, в рамках комплексного бухгалтерского сопровождения. В состав аутсорсинга ВЭД компании входят как операции по импорту, так и операции по экспорту. Аутсорсинг ВЭД не ограничен только бухучетом внешнеэкономической деятельности. Ведь он начинается с правильно заключенного внешнеторгового контракта. Мы предоставим специалистов, которые смогут взять на себя разработку таких договоров и соглашений. Для этого у нас в штате есть юристы, налоговые консультанты и аудиторы. В плане сопровождения ВЭД по импорту товаров наш бухгалтер осуществляет оприходование поступившего товара и сбор всех необходимых документов для предоставления в банк.
                </span>
                    <span class="section-span">
                    Мы занимаемся бухгалтерским сопровождением НКО от регистрации, которая имеет массу нюансов, до бухгалтерского сопровождения. Большая роль отводится внутренним локальным документам. На наш взгляд, без правильно разработанных локально нормативных актов, грамотно вести учет просто невозможно. При необходимости мы можем оказать помощь в их разработке. Также, например, необходима сдача дополнительного ежегодно отчета.
                </span>
                </div>
            </div>
            <h1 class="section-small-h1">Почему аутсорсинг это выгодно?</h1>
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
