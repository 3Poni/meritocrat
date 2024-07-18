<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/header.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('css/fonts.css') }}">
    <link rel="stylesheet" href="{{ asset('css/global.css') }}">
    <link rel="stylesheet" href="{{ asset('css/about-company.css') }}">
    <link rel="stylesheet" href="{{ asset('css/principes.css') }}">
    <link rel="stylesheet" href="{{ asset('css/services.css') }}">
    <link rel="stylesheet" href="{{ asset('css/dropdown.css') }}">
    <link rel="stylesheet" href="{{ asset('css/schems-work.css') }}">
    <link rel="stylesheet" href="{{ asset('css/partners.css') }}">
    <link rel="stylesheet" href="{{ asset('css/reviews.css') }}">
    <link rel="stylesheet" href="{{ asset('css/contacts.css') }}">
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}">
    <link rel="stylesheet" href="{{ asset('css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('css/slick-theme.css') }}">
    <link rel="stylesheet" href="{{ asset('css/adaptive.css') }}">
    <link rel="stylesheet" href="{{ asset('css/burger-menu.css') }}">
    <link rel="stylesheet" href="{{ asset('css/animation.css') }}">
    <link rel="stylesheet" href="{{ asset('css/slide-style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/burger-test.css') }}">
    @stack('head')
    <title>@yield('title')</title>
</head>

<body>
    <header>
        <div class="container">
            <div class="menu">
                <div class="menu-logo">
                  <a href="/">
                    <span class="header-logo">MERITOCRAT</span>
                  </a>
                </div>
                <div class="menu-list">
                    <ul>
                        <li><a href="{{ route('about') }}">О компании</a></li>
                        <li class="dropdown-hover"><a href="{{ route('services') }}">Услуги<i class="icon-arrow"></i><img src="img/icons/arrow-down-white.svg" alt=""></a></li>
                        @if(false)<li><a href="#">Аналитика</a></li>@endif
                        <li><a href="{{ route('projects') }}">Проекты</a></li>
                        <li><a href="{{ route('partners') }}">Партнеры</a></li>
                        <li><a href="{{ route('contacts') }}">Контакты</a></li>
                    </ul>
                </div>
                <div class="dropdown-list">
                  <div class="dropdown-list-items">
                    <div class="dropdown-item">
                      <ul>
                          @foreach($allServices as $service)
                              <li><a href="{{ route('service',empty($service->url_static) ? $service->url : $service->url_static ) }}">{{ $service->title }}</a></li>
                          @endforeach
                        @if(false)
                        <li><a href="{{ route('accounting-support') }}">Бухгалтерский учет</a></li>
                        <li><a href="{{ route('taxes') }}">Налогообложение</a></li>
                        <li><a href="">Юридический консалтинг</a></li>
                        <li><a href="{{ route('strategic') }}">Стратегический консалтинг</a></li>
                        <li><a href="{{ route('effectivity') }}">Операционный консалтинг</a></li>
                        <li><a href="{{ route('due-diligence') }}">Инвестиционный консалтинг</a></li>
                        <li><a href="">Финансовый консалтинг</a></li>
                        <li><a href="{{ route('hr-audit') }}">Кадровый консалтинг</a></li>
                        <li><a href="">Внешние связи и GR</a></li>
                        <li><a href="">Маркетинг и реклама</a></li>
                        <li><a href="{{ route('services') }}">Digital-услуги</a></li>
                        <li><a href="">Политический консалтинг</a></li>
                        <li><a href="">Международный консалтинг</a></li>
                        <li><a href="">Лингвистический консалтинг</a></li>
                          @endif
                      </ul>
                    </div>
                    <div class="dropdown-item">
                      <ul>
                        <li><a href="{{ route('accounting-support') }}">Консультирование по вопросам бухгалтерского учета</a></li>
                        <li><a href="{{ route('chief-accountant') }}">Бухгалтерское сопровождение</a></li>
                        <li><a href="{{ route('chief-accountant') }}">Выполнение функции главного бухгалтера</a></li>
                        <li><a href="">Составление и сдача бухгалтерской отчетности</a></li>
                        <li><a href="">Постановка системы бухгалтерского учета</a></li>
                        <li><a href="">Восстановление бухгалтерского учета</a></li>
                        <li><a href="">Экспресс-аудит</a></li>
                        <li><a href="">Разработка учетной политики</a></li>
                        <li><a href="">Расчет зарплаты</a></li>
                      </ul>
                    </div>
                  </div>

                </div>
                <div class="menu-phone">
                    8 (800) 267-19-45
                </div>
                <nav>
                  <div class="burger" id="burger">
                    <img src="img/menu.png" alt="">
                  </div>
                  <ul class="burger-list" id="menu-list">
                    <div class="close-btn" id="close-btn">
                      <img src="img/icons/icon-close.png" alt="">
                    </div>
                    <ul class="burger-head">
                      <li><span class="header-logo">MERITOCRAT</span></li>
                      <li><span class="burger-contact">8 (800) 267-19-45</span></li>
                      <li><span class="burger-contact">info@meritocratconsulting.ru</span></li>
                    </ul>
                    <ul>
                      <li><a href="{{ route('about') }}">О компании</a></li>
                      <div class="dropdown">
                        <p class="dropdown-toggle">Услуги <img src="img/down-chevron.png" alt=""></p>
                        <ul class="dropdown-menu" style="display: none;">
                          <li>Бухгалтерский учет<img src="img/down-chevron.png" alt=""></li>
                          <li>Налогообложение<img src="img/down-chevron.png" alt=""></li>
                          <li>Юридический консалтинг<img src="img/down-chevron.png" alt=""></li>
                          <li>Стратегический консалтинг<img src="img/down-chevron.png" alt=""></li>
                          <li>Операционный консалтинг<img src="img/down-chevron.png" alt=""></li>
                          <li>Инвестиционный консалтинг<img src="img/down-chevron.png" alt=""></li>
                          <li>Финансовый консалтинг<img src="img/down-chevron.png" alt=""></li>
                          <li>Кадровый консалтинг<img src="img/down-chevron.png" alt=""></li>
                          <li>Внешние связи и GR<img src="img/down-chevron.png" alt=""></li>
                          <li>Маркетинг и реклама<img src="img/down-chevron.png" alt=""></li>
                          <li>Digital-услуги<img src="img/down-chevron.png" alt=""></li>
                          <li>Политический консалтинг<img src="img/down-chevron.png" alt=""></li>
                          <li>Международный консалтинг<img src="img/down-chevron.png" alt=""></li>
                          <li>Лингвистический консалтинг<img src="img/down-chevron.png" alt=""></li>
                        </ul>
                      </div>

                      @if(false)<li><a href="">Аналитика</a></li>@endif
                      <li><a href="{{ route('projects') }}">Проекты</a></li>
                      <li><a href="{{ route('partners') }}">Партнеры</a></li>
                      <li><a href="{{ route('contacts') }}">Контакты</a></li>
                      <li>Пресс-служба:</li>
                      <li><span class="burger-contact">pr@meritocratconsulting.ru</span></li>
                      <li>Партнерство:</li>
                      <li><span class="burger-contact">partner@meritocratconsulting.ru</span></li>
                      <li><input type="button" class="button-white" value="Связаться с нами"></li>
                      <div class="row-social">
                        <img src="img/wp.png" alt="">
                        <img src="img/tg.png" alt="">
                        <img src="img/vk.png" alt="">
                        <img src="img/inst.png" alt="">
                      </div>
                    </ul>
                  </ul>
                </nav>
                </div>
            </div>
        </div>
        @if(!empty($popup))
            <div class="popup" style="
    box-shadow: #00000017 0 0 13px;
    z-index: 1000;
    padding: 20px;
    border-radius: 12px;
    background: white;
    left: 36%;
    position: fixed;
    height: auto;
    width: auto;"><img onclick="closePopup();" src="/img/cross.svg" style="
    cursor: pointer;
    position: absolute;
    right: 14px;
    top: 14px;
    max-height: 14px;
    color: black;"> <div style="
    display: flex;
    flex-direction: row;
"><img src="/img/nalog-pic.png" style="
    max-width: 156px;
"><div style="
    padding: 20px;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: space-evenly;
"><div style="
    color: black;
">{{ $popup['message'] }}</div><button onclick="closePopup();" style="
    color: white;
    cursor: pointer;
    border-radius: 20px;
    border: none;
    padding: 6px 60px;
    background: linear-gradient(74.13deg, #C0A7E7 8.19%, #9CBEDE 78.01%);
">Ок</button></div></div></div>
        @endif
    </header>
    <main>
        <div class="container">
            <div class="main-title">
                <span class="main-logo animate__animated animate__fadeInUp">MERITOCRAT</span>
                <span class="main-underlogo_text">КОМЛЕКСНОЕ ОБСЛУЖИВАНИЕ БИЗНЕСА</span>
                <div class="main-row_button">
                    <input type="button" value = "Связаться с нами" class="button-white">
                    <input type="button" value = "Скачать презентацию" class="button-with-border">
                </div>
            </div>
            <div class="gradient-orange"></div>
            <div class="gradient-blue"></div>
            <div class="main-vector rotate"><img src="img/main-vector.png" alt=""></div>
        </div>
    </main>
    @yield('content')
    @if(Route::current()->getName() !== 'contacts')
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
                <form action="{{ route('application.store') }}" method="POST" class="right-column" enctype="multipart/form-data">
                    @csrf
                    @method('POST')
                    <h1 class="right-column_h1">Оставьте заявку</h1>
                    <span>Рассчитать стоимость услуг</span>
                    <div class="contacts-forms">
                        <input type="text" name="name" placeholder="Имя" class="contacts-form">
                        <input type="text" name="phone" placeholder="Телефон" class="contacts-form">
                        <input type="email" name="email" placeholder="Email" class="contacts-form">
                        <input type="hidden" name="source" value="contacts">
                        <textarea name="comment" id="comment" cols="30" rows="10" class="contacts-comments" placeholder="Комментарии"></textarea>
                        <span class="text-data">*Нажимая кнопку «Отправить», я даю согласие на обработку <a>персональных данных</a></span>
                        <div class="row-buttons">
                            <label for="file" class="button-with-border">Прикрепить файлы</label>
                            <input type="file" class="button-with-border" name="file" id="file" style="display: none">
                            <input type="submit" class="button-white" value="Отправить">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    @endif
    <footer>
      <div class="container">
        <div class="footer-row">
          <div class="footer-column">
            <div class="menu-logo">
              <span class="header-logo">MERITOCRAT</span>
            </div>
            <span class="footer-phone">8 (800) 267-19-45</span>
            <span class="footer-text footer-under-text">Общие вопросы:</span>
            <span class="footer-text">info@meritocratconsulting.ru</span>
            <span class="footer-text footer-under-text">Пресс-служба:</span>
            <span class="footer-text">pr@meritocratconsulting.ru</span>
            <span class="footer-text footer-under-text">Партнерство:</span>
            <span class="footer-text">partner@meritocratconsulting.ru</span>
          </div>
          <div class="footer-column">
            <ul>
              <li><a href="{{ route('index') }}">Главная</a></li>
              <li><a href="{{ route('about') }}">О компании</a></li>
              <li><a href="{{ route('services') }}">Услуги</a></li>
                @if(false)<li><a href="">Аналитика</a></li>@endif
              <li><a href="{{ route('projects') }}">Проекты</a></li>
              <li><a href="{{ route('partners') }}">Партнеры</a></li>
              <li><a href="{{ route('vacancies') }}">Вакансии</a></li>
              <li><a href="{{ route('contacts') }}">Контакты</a></li>
            </ul>
          </div>
          <div class="footer-column">
            <ul>
              <li><a href="">Пользовательское соглашение <br>
                и политика конфиденциальности</a></li>
              <li><a href="">Политика использования файлов cookies</a></li>
              <li><a href="">Соглашение по продаже обзоров</a></li>
              <li><a href="">Способы оплаты</a></li>
              <li><a href="">Реквизиты</a></li>
            </ul>
          </div>
          <div class="footer-column">
              <form action="{{ route('newsletter.store') }}" method="POST" id="newsletter">
                  @csrf
                  @method('POST')
              </form>
            <span>Подпишитесь на рассылку
              Новости и спецпредложения</span>
              <input type="text" form="newsletter" placeholder="Email" class="footer-form" name="email" id="email">
              <input type="submit" form="newsletter" class="button-white" value="Подписаться">

          </div>
        </div>
        <div class="footer-row-last">
          <span> 2023 MERITOCRAT. Все права защищены</span>
          <div class="row-social">
            <img src="img/wp.png" alt="">
            <img src="img/tg.png" alt="">
            <img src="img/vk.png" alt="">
            <img src="img/inst.png" alt="">
          </div>
          <span>
            Разработано | DaT-Studio
          </span>
        </div>
      </div>
    </footer>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script type="text/javascript" src="{{ asset('js/slick.min.js') }}"></script>
    <script src="{{ asset('js/dropdown.js') }}"></script>
    <script src="{{ asset('js/slide-partners.js') }}"></script>
    <script src="{{ asset('js/reviews-slider.js') }}"></script>
    <script src="{{ asset('js/dropdown-menu.js') }}"></script>
    <script src="{{ asset('js/scroll-header.js') }}"></script>
    <script src="{{ asset('js/mobile-slider-about.js') }}"></script>
{{--    <script src="{{ asset('js/burger-menu.js') }}"></script>--}}
    <script src="{{ asset('js/schems-works-slider.js') }}"></script>
    <script src="{{ asset('js/burger-test.js') }}"></script>
    <script src="{{ asset('js/dropdown-test.js') }}"></script>
    @stack('script')
    <script>
        function closePopup() {
            $(".popup").css('display', 'none');
        }
    </script>
  </body>
</html>
