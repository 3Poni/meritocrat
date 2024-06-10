@extends('layouts.app')
@section('title')Главная@endsection
@section('content')
    <section class="about-company">
        <div class="container">
            <div class="about-items">
                <div class="left-block">
                    <h1 class="about-items_headtext">О компании</h1>
                    <div class="about-items_undertext"><span class="header-logo">MERITOCRAT — </span><br><span class="about-items_undertext-bold">комплексные бизнес-решения</span></div>
                    <p class="about-items_paragraph">Мы являемся экспертами в области стратегического консультирования и оптимизации операционных процессов для бизнеса. Наши консультанты предлагают клиентам услуги, позволяющие им принимать смелые решения для обеспечения устойчивого развития.</p>
                    <p class="about-items_paragraph">MERITOCRAT оказывает полный комплекс бизнес-услуг от стратегического планирования и аутсорсинга бизнес-процессов до реализации цифровых проектов.</p>
                </div>
                <div class="right-block">
                    <img src="img/rocket.png" alt="">
                </div>
            </div>
            <div class="about-items-second">
                <div class="left-block">
                    <img src="img/dashboard.png" alt="">
                </div>
                <div class="right-block">
                    <p class="about-items_paragraph">Цель сотрудничества — претворить в жизнь новаторские идеи и выстроить долгосрочные отношения, чтобы применять современные методы работы, добиваться улучшения операционной деятельности и развивать навыки персонала. Независимо от сложности задач, мы сосредоточены на достижении практических результатов.</p>
                    <p class="about-items_paragraph">Среди наших экспертов — бизнес-аналитики, ученые и консультанты различных индустрий. Мы изучаем рынки, тенденции и передовые практики во всех отраслях как на местном, так и на международном уровне.</p>
                    <p class="about-items_paragraph">Будучи меритократами в сфере консалтинга, мы поможем вам стать корифеем своего дела. Взаимодействие с нами станет поворотным моментом в истории вашей компании.</p>
                    <input type="button" class="button-white right-block_button" value="Связаться с нами">
                </div>
            </div>
            <div class="about-items-slider-mobile">
                <div class="item-slider-mobile">
                    <h1 class="about-items_headtext">О компании</h1>
                    <div class="about-items_undertext"><span class="header-logo">MERITOCRAT</span><span class="line">—</span><br><span class="about-items_undertext-bold">комплексные бизнес-решения</span></div>
                    <p class="about-items_paragraph">Мы являемся экспертами в области стратегического консультирования и оптимизации операционных процессов для бизнеса. Наши консультанты предлагают клиентам услуги, позволяющие им принимать смелые решения для обеспечения устойчивого развития.</p>
                    <p class="about-items_paragraph">MERITOCRAT оказывает полный комплекс бизнес-услуг от стратегического планирования и аутсорсинга бизнес-процессов до реализации цифровых проектов.</p>
                </div>
                <div class="item-slider-mobile">
                    <p class="about-items_paragraph">Цель сотрудничества — претворить в жизнь новаторские идеи и выстроить долгосрочные отношения, чтобы применять современные методы работы, добиваться улучшения операционной деятельности и развивать навыки персонала. Независимо от сложности задач, мы сосредоточены на достижении практических результатов.</p>
                    <p class="about-items_paragraph">Среди наших экспертов — бизнес-аналитики, ученые и консультанты различных индустрий. Мы изучаем рынки, тенденции и передовые практики во всех отраслях как на местном, так и на международном уровне.</p>
                    <p class="about-items_paragraph">Будучи меритократами в сфере консалтинга, мы поможем вам стать корифеем своего дела. Взаимодействие с нами станет поворотным моментом в истории вашей компании.</p>
                </div>
            </div>
        </div>
    </section>
    <section class="principes">
        <div class="container">
            <h1 class="section-h1">Наши принципы</h1>
            <img src="img/schema.png" alt="">
            <div class="principes-items-mobile">
                <div class="item-mobile">
                    <h2>Профессионализм </h2>
                    <span>Наш ресурсный капитал и интеллектуальный потенциал подкреплены глубокой отраслевой специализацией экспертов</span>
                </div>
                <div class="item-mobile">
                    <h2>Прозрачность</h2>
                    <span>Поддерживаем понятную клиентам политику ценообразования и сценарии работы</span>
                </div>
                <div class="item-mobile">
                    <h2>Результативность </h2>
                    <span>Эффективно представляем интересы наших клиентов и преодолеваем барьеры для бизнеса</span>
                </div>
                <div class="item-mobile">
                    <h2>Безопасность</h2>
                    <span>Обеспечиваем строгую законность разрабатываемых и реализуемых решений</span>
                </div>
                <div class="item-mobile">
                    <h2>Баланс интересов</h2>
                    <span>Понимая приоритеты развития бизнеса и интересы общества, создаем условия для достижения целей наших клиентов </span>
                </div>
            </div>
        </div>
        <div class="left-contur"><img src="img/left-back.png" alt=""></div>
        <div class="right-contur"><img src="img/right-back.png" alt=""></div>

    </section>
    <section class="services">
        <div class="topographic_for_services"><img src="img/Topographic_for_services.png" alt=""></div>
        <div class="topographic_for_services_bottom"><img src="img/Topographic_for_services_bottom.png" alt=""></div>
        <div class="container">
            <div class="left-side">
                <h1 class="section-h1">Услуги</h1>
            </div>

            <div class="right-side">
                <div class="container-drop">
                    <ul>
                        <li class="dropdown">
                            <a href="#" data-toggle="dropdown"><h1 class="dropdown-h1">01</h1><span class="dropdown-span">Бухгалтерский учет</span><i class="icon-arrow"></i></a>
                        </li>
                        <li class="dropdown">
                            <a href="#" data-toggle="dropdown"><h1 class="dropdown-h1">02</h1><span class="dropdown-span">Налогообложение</span><i class="icon-arrow"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Налоговое консультирование</a></li>
                                <li><a href="#">Сокращение налоговых штрафов</a></li>
                                <li><a href="#">Разработка правовых и налоговых схем деятельности</a></li>
                                <li><a href="#">Составление и сдача налоговой отчетности</a></li>
                                <li><a href="#">Налоговое планирование</a></li>
                                <li><a href="#">Налоговая оптимизация</a></li>
                                <li><a href="#">Возмещение НДС</a></li>
                                <li><a href="#">Разработка методологии налогового учета</a></li>
                                <li><a href="#">Постановка налогового учета</a></li>
                                <li><a href="#">Функция "внутренний ревизор"</a></li>
                                <li><a href="#">Представительство в контролирующих органах</a></li>
                                <li><a href="#">Консультационно-методологическое сопровождение операций</a></li>
                                <li><a href="#">Налоговые споры</a></li>
                                <li><a href="#">Экспертиза текущей системы налогового учета</a></li>
                                <li><a href="#">Досудебное урегулирование налоговых споров</a></li>
                                <li><a href="#">Консультационно-обучающие мероприятия для сотрудников</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" data-toggle="dropdown"><h1 class="dropdown-h1">03</h1><span class="dropdown-span">Юридический консалтинг</span><i class="icon-arrow"></i></a>
                            <ul class="dropdown-menu">
                                <!-- <li><a href="#">Налоговое консультирование</a></li> -->
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" data-toggle="dropdown"><h1 class="dropdown-h1">04</h1><span class="dropdown-span">Стратегический консалтинг</span><i class="icon-arrow"></i></a>
                            <ul class="dropdown-menu">
                                <!-- <li><a href="#">Налоговое консультирование</a></li> -->
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" data-toggle="dropdown"><h1 class="dropdown-h1">05</h1><span class="dropdown-span">Операционный консалтинг</span><i class="icon-arrow"></i></a>
                            <ul class="dropdown-menu">
                                <!-- <li><a href="#">Налоговое консультирование</a></li> -->
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" data-toggle="dropdown"><h1 class="dropdown-h1">06</h1><span class="dropdown-span">Инвестиционный консалтинг</span><i class="icon-arrow"></i></a>
                            <ul class="dropdown-menu">
                                <!-- <li><a href="#">Налоговое консультирование</a></li> -->
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" data-toggle="dropdown"><h1 class="dropdown-h1">07</h1><span class="dropdown-span">Финансовый консалтинг</span><i class="icon-arrow"></i></a>
                            <ul class="dropdown-menu">
                                <!-- <li><a href="#">Налоговое консультирование</a></li> -->
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" data-toggle="dropdown"><h1 class="dropdown-h1">08</h1><span class="dropdown-span">Кадровый консалтинг</span><i class="icon-arrow"></i></a>
                            <ul class="dropdown-menu">
                                <!-- <li><a href="#">Налоговое консультирование</a></li> -->
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" data-toggle="dropdown"><h1 class="dropdown-h1">09</h1><span class="dropdown-span">Внешние связи и GR</span><i class="icon-arrow"></i></a>
                            <ul class="dropdown-menu">
                                <!-- <li><a href="#">Налоговое консультирование</a></li> -->
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" data-toggle="dropdown"><h1 class="dropdown-h1">10</h1><span class="dropdown-span">Маркетинг и реклама</span><i class="icon-arrow"></i></a>
                            <ul class="dropdown-menu">
                                <!-- <li><a href="#">Налоговое консультирование</a></li> -->
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" data-toggle="dropdown"><h1 class="dropdown-h1">11</h1><span class="dropdown-span">Digital-услуги</span><i class="icon-arrow"></i></a>
                            <ul class="dropdown-menu">
                                <!-- <li><a href="#">Налоговое консультирование</a></li> -->
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" data-toggle="dropdown"><h1 class="dropdown-h1">12</h1><span class="dropdown-span">Политический консалтинг</span><i class="icon-arrow"></i></a>
                            <ul class="dropdown-menu">
                                <!-- <li><a href="#">Налоговое консультирование</a></li> -->
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" data-toggle="dropdown"><h1 class="dropdown-h1">13</h1><span class="dropdown-span">Международный консалтинг</span><i class="icon-arrow"></i></a>
                            <ul class="dropdown-menu">
                                <!-- <li><a href="#">Налоговое консультирование</a></li> -->
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" data-toggle="dropdown"><h1 class="dropdown-h1">14</h1><span class="dropdown-span">Лингвистический консалтинг</span><i class="icon-arrow"></i></a>
                            <ul class="dropdown-menu">
                                <!-- <li><a href="#">Налоговое консультирование</a></li> -->
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class="schems-work">
        <div class="gradient-orange"></div>
        <div class="gradient-blue"></div>
        <div class="container">
            <h1 class="schems-work_h1">Схема работы</h1>
            <div class="schems-work_items-circles">
                <div class="circle-items">
                    <div class="circle">
                        <h1 class="cicle_h1 fixe-padding">
                            1
                        </h1>
                    </div>
                    <span class="circle_span">
                        Анализируем заказ
                    </span>
                </div>
                <div class="circle-line first-line">
                    <img src="img/circle-line.png" alt="">
                </div>
                <div class="circle-items">
                    <div class="circle fixe-circle">
                        <h1 class="cicle_h1">
                            2
                        </h1>
                    </div>
                    <span class="circle_span">
                        Обсуждаем формат работы и заключаем договор
                      </span>
                </div>
                <div class="circle-line second-line">
                    <img src="img/circle-line.png" alt="">
                </div>
                <div class="circle-items">
                    <div class="circle fixe-circle">
                        <h1 class="cicle_h1">
                            3
                        </h1>
                    </div>
                    <span class="circle_span">
                        Реализуем проект
                    </span>
                </div>
            </div>
            <div class="schems-work_items-circles-mobile">
                <div class="circle-items">
                    <div class="circle">
                        <h1 class="first-cicle_h1 fixe-padding">
                            1
                        </h1>
                    </div>
                    <span class="circle_span">
                   Анализируем заказ
                </span>
                </div>
                <div class="circle-items">
                    <div class="circle fixe-circle">
                        <h1 class="first-cicle_h1 fixe-padding">
                            2
                        </h1>
                    </div>
                    <span class="circle_span">
                  Обсуждаем формат работы и заключаем договор
                </span>
                </div>
                <div class="circle-items">
                    <div class="circle fixe-circle">
                        <h1 class="first-cicle_h1 fixe-padding">
                            3
                        </h1>
                    </div>
                    <span class="circle_span">
                  Реализуем проект
                </span>
                </div>
            </div>
            <div class="scheme-work_forms">
                <div class="left-side">
                    <h1 class="section-small-h1">Мы готовы приступить к работе. А вы?</h1>
                    <div class="forms-items">
                        <input type="name" placeholder="Имя" class="scheme-work_form">
                        <input type="phone" placeholder="Номер телефона" class="scheme-work_form">
                        <input type="email" placeholder="Email" class="scheme-work_form">
                    </div>
                </div>
                <div class="right-side">
                    <input type="button" value="Оформить заявку" class="button-white">
                </div>
            </div>
        </div>
    </section>
    <section class="partners">
        <div class="img-top-right"><img src="img/partners-graphic.png" alt=""></div>
        <div class="container">
            <h1 class="partners-h1">Партнеры</h1>
            <div class="partners-sliders">
                <div><img src="img/logo-kontur.png" alt="" style="padding-top: 20px;"></div>
                <div><img src="img/tochka.png" alt="" style="padding-top: 20px;"></div>
                <div><img src="img/alfa-bank.png" alt=""></div>
                <div><img src="img/mtt.png" alt="" style="padding-top: 30px;"></div>
                <div><img src="img/logo-kontur.png" alt=""style="padding-top: 20px;"></div>
                <div><img src="img/tochka.png" alt=""style="padding-top: 20px;"></div>
                <div><img src="img/alfa-bank.png" alt=""></div>
            </div>
        </div>
        </div>
    </section>
    <section class="reviews">
        <div class="container">
            <div class="reviews-h1">Отзывы</div>
            <div class="reviews-sliders">
                <div class="reviews-slider_items">
                    <div class="reviews-slider_item-img">
                        <img src="img/men-circle.png" alt="">
                    </div>
                    <div class="reviews-slider_item-text">
                        <span class="reviews-name">Фамилия Имя Отчество</span>
                        <span class="reviews-position">Должность</span>
                        <span class="reviews-under-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi ratione tenetur placeat sint sit quaerat repellendus.</span>
                    </div>
                </div>
                <div class="reviews-slider_items">
                    <div class="reviews-slider_item-img">
                        <img src="img/men-circle.png" alt="">
                    </div>
                    <div class="reviews-slider_item-text">
                        <span class="reviews-name">Фамилия Имя Отчество</span>
                        <span class="reviews-position">Должность</span>
                        <span class="reviews-under-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi ratione tenetur placeat sint sit quaerat repellendus.</span>
                    </div>
                </div>
                <div class="reviews-slider_items">
                    <div class="reviews-slider_item-img">
                        <img src="img/men-circle.png" alt="">
                    </div>
                    <div class="reviews-slider_item-text">
                        <span class="reviews-name">Фамилия Имя Отчество</span>
                        <span class="reviews-position">Должность</span>
                        <span class="reviews-under-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi ratione tenetur placeat sint sit quaerat repellendus.</span>
                    </div>
                </div>
                <div class="reviews-slider_items">
                    <div class="reviews-slider_item-img">
                        <img src="img/men-circle.png" alt="">
                    </div>
                    <div class="reviews-slider_item-text">
                        <span class="reviews-name">Фамилия Имя Отчество</span>
                        <span class="reviews-position">Должность</span>
                        <span class="reviews-under-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi ratione tenetur placeat sint sit quaerat repellendus.</span>
                    </div>
                </div>
            </div>
            <div class="reviews-sliders">
                <div class="reviews-slider_items">
                    <div class="reviews-slider_item-img">
                        <img src="img/men-circle.png" alt="">
                    </div>
                    <div class="reviews-slider_item-text">
                        <span class="reviews-name">Фамилия Имя Отчество</span>
                        <span class="reviews-position">Должность</span>
                        <span class="reviews-under-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi ratione tenetur placeat sint sit quaerat repellendus.</span>
                    </div>
                </div>
                <div class="reviews-slider_items">
                    <div class="reviews-slider_item-img">
                        <img src="img/men-circle.png" alt="">
                    </div>
                    <div class="reviews-slider_item-text">
                        <span class="reviews-name">Фамилия Имя Отчество</span>
                        <span class="reviews-position">Должность</span>
                        <span class="reviews-under-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi ratione tenetur placeat sint sit quaerat repellendus.</span>
                    </div>
                </div>
                <div class="reviews-slider_items">
                    <div class="reviews-slider_item-img">
                        <img src="img/men-circle.png" alt="">
                    </div>
                    <div class="reviews-slider_item-text">
                        <span class="reviews-name">Фамилия Имя Отчество</span>
                        <span class="reviews-position">Должность</span>
                        <span class="reviews-under-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi ratione tenetur placeat sint sit quaerat repellendus.</span>
                    </div>
                </div>
                <div class="reviews-slider_items">
                    <div class="reviews-slider_item-img">
                        <img src="img/men-circle.png" alt="">
                    </div>
                    <div class="reviews-slider_item-text">
                        <span class="reviews-name">Фамилия Имя Отчество</span>
                        <span class="reviews-position">Должность</span>
                        <span class="reviews-under-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi ratione tenetur placeat sint sit quaerat repellendus.</span>
                    </div>
                </div>
            </div>
            <div class="reviews-docs">
                <div class="reviews-docs-slider">
                    <div class="reviews-docs-item">
                        <div class="reviews-docs-item_img">
                            <img src="img/doc.png" alt="">
                        </div>
                        <div class="reviews-docs-item_text">
                            <span class="reviews-docs-item_name">Фамилия Имя Отчество</span>
                            <span class="reviews-docs-item_position">Должность</span>
                            <span class="reviews-docs-item_under-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi ratione tenetur placeat sint sit quaerat repellendus.</span>
                        </div>
                        <div class="reviews-docs_img-bottom">
                            <img src="img/articule.png" alt="">
                        </div>
                    </div>
                    <div class="reviews-docs-item">
                        <div class="reviews-docs-item_img">
                            <img src="img/doc.png" alt="">
                        </div>
                        <div class="reviews-docs-item_text">
                            <span class="reviews-docs-item_name">Фамилия Имя Отчество</span>
                            <span class="reviews-docs-item_position">Должность</span>
                            <span class="reviews-docs-item_under-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi ratione tenetur placeat sint sit quaerat repellendus.</span>
                        </div>
                        <div class="reviews-docs_img-bottom">
                            <img src="img/articule.png" alt="">
                        </div>
                    </div>
                    <div class="reviews-docs-item">
                        <div class="reviews-docs-item_img">
                            <img src="img/doc.png" alt="">
                        </div>
                        <div class="reviews-docs-item_text">
                            <span class="reviews-docs-item_name">Фамилия Имя Отчество</span>
                            <span class="reviews-docs-item_position">Должность</span>
                            <span class="reviews-docs-item_under-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi ratione tenetur placeat sint sit quaerat repellendus.</span>
                        </div>
                        <div class="reviews-docs_img-bottom">
                            <img src="img/articule.png" alt="">
                        </div>
                    </div>
                    <div class="reviews-docs-item">
                        <div class="reviews-docs-item_img">
                            <img src="img/doc.png" alt="">
                        </div>
                        <div class="reviews-docs-item_text">
                            <span class="reviews-docs-item_name">Фамилия Имя Отчество</span>
                            <span class="reviews-docs-item_position">Должность</span>
                            <span class="reviews-docs-item_under-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi ratione tenetur placeat sint sit quaerat repellendus.</span>
                        </div>
                        <div class="reviews-docs_img-bottom">
                            <img src="img/articule.png" alt="">
                        </div>
                    </div>
                    <div class="reviews-docs-item">
                        <div class="reviews-docs-item_img">
                            <img src="img/doc.png" alt="">
                        </div>
                        <div class="reviews-docs-item_text">
                            <span class="reviews-docs-item_name">Фамилия Имя Отчество</span>
                            <span class="reviews-docs-item_position">Должность</span>
                            <span class="reviews-docs-item_under-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi ratione tenetur placeat sint sit quaerat repellendus.</span>
                        </div>
                        <div class="reviews-docs_img-bottom">
                            <img src="img/articule.png" alt="">
                        </div>
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
                            <img src="img/wp.png" alt="">
                            <span class="social-items_text">Чат с консультантом</span>
                        </div>
                        <div class="social">
                            <img src="img/tg.png" alt="">
                            <span class="social-items_text">Новости и аналитика</span>
                        </div>
                        <div class="social">
                            <img src="img/vk.png" alt="">
                            <span class="social-items_text">Новости и обсуждения</span>
                        </div>
                        <div class="social">
                            <img src="img/inst.png" alt="">
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
