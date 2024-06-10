@extends('layouts.app')
@push('head')
<link rel="stylesheet" href="{{ asset('css/outsourcing.css') }}">
@endpush
@section('title')Проекты@endsection
@section('content')
<section class="outsourcing-page">
      <div class="container">
        <div class="links">
          <a href="../index.html"><span>Главная</span></a>
          <img src="../img/arrow.png" alt="">
          <a href="../index.html"><span>Услуги</span></a>
          <img src="../img/arrow.png" alt="">
          <a href="../pages/taxes.html"><span> Кадровый консалтинг</span></a>
          <img src="../img/arrow.png" alt="">
          <a href="../pages/taxes.html"><span class="active-link">Кадровый аутсорсинг</span></a>
        </div>
        <h1 class="section-h1">Кадровый аутсорсинг</h1>
        <span class="section-span">Аутсорсинг кадрового учета — это полное или частичное ведение участков кадрового учета специализированным провайдером в области учетных функций.
          Оформление трудовых отношений в России – область гораздо более сложная, чем обычно представляют себе предприниматели и даже некоторые кадровики. Во-первых, не существует единого документа, регулирующего все вопросы о подборе персонала и управлению им, расчете компенсаций, налогов и т.п. Эти нормы рассредоточены в разных частях Трудового и Налогового кодекса, указаниях министерств, подзаконных актов. Во-вторых, в России наемный работник обладает большими правами по отношению к работодателю, что порой осложняет ведение бизнеса. При этом нарушение законодательства может грозить мультиплицированными штрафами или даже приостановкой деятельности предприятия.
        </span>
        <span class="section-span">Аутсорсинг кадровых услуг в MERITOCRAT включает в себя аудит кадровой документации и бизнес-процессов, постановку и ведение документооборота, охрану труда, а также консультирование по сложным вопросам трудового законодательства.</span>
        <div class="outsourcing-text">
          <div class="left-column">
            <img src="../img/outsource.png" alt="">
          </div>
          <div class="right-column">
            <div class="text-item">
              <h1>Задачи</h1>
              <span class="head-span">Текущий кадровый документооборот</span>
              <span class="under-span">Ведем учет на всех участках, готовим полный пакет документов: прием/увольнение сотрудников, командировки и пр.</span>
            </div>
            <div class="text-item">
              <span class="head-span">Локально-нормативные акты</span>
              <span class="under-span">Разрабатываем, актуализируем и вносим коррективы в ЛНА в соответствии с изменениями в законодательстве и кадровой политике.</span>
            </div>
            <div class="text-item">
              <span class="head-span">Трудовые конфликты и спорные ситуации</span>
              <span class="under-span">Прогнозируем развитие и предлагаем решение спорной ситуации. Готовим письменные ответы и представляем интересы работодателя в госорганах в случае проверки.</span>
            </div>
            <div class="text-item">
              <span class="head-span">Миграционный и воинский учет</span>
              <span class="under-span">Ведем учет, готовим отчетность, подаем сведения в Миграционную службу и военкомат в соответствии с законодательством.</span>
            </div>
          </div>
        </div>
        <div class="outsourcing-text">
          <div class="left-column">
            <div class="text-item">
              <h1>Услуги</h1>
              <ul>
                <li>Расчет заработной платы</li>
                <li>Расчет налогов и отчисления в ИФНС и СФР</li>
                <li>Формирование и сдача обязательной отчетности</li>
                <li>Взаимодействие с проверяющими органами</li>
                <li>Кадровое сопровождение текущей деятельности</li>
                <li>Разработка кадровой документации</li>
                <li>Трудовые споры, проверки гос. органами</li>
                <li>Формирование и сдача кадровой отчетности</li>
              </ul>
            </div>
          </div>
          <div class="right-column">
            <img src="../img/outsource-2.png" alt="">
          </div>
        </div>
        </div>
        <div class="outsourcing-list">
          <div class="container">
            <h1>Услуги</h1>
            <div class="outsourcing-items">
              <div class="outsourcing-items-row">
                <div class="item">
                  <img src="../img/icons/white-icons/money.png" alt="">
                  <span>Расчет заработной платы</span>
                </div>
                <div class="item">
                  <img src="../img/icons/white-icons/exchange.png" alt="">
                  <span>Расчет налогов и отчисления в ИФНС и СФР
                  </span>
                </div>
                <div class="item">
                  <img src="../img/icons/white-icons/analitycs.png" alt="">
                  <span>Формирование и сдача обязательной отчетности
                  </span>
                </div>
                <div class="item">
                  <img src="../img/icons/white-icons/transition.png" alt="">
                  <span>Взаимодействие с проверяющими органами
                  </span>
                </div>

              </div>
              <div class="outsourcing-items-row">
                <div class="item">
                  <img src="../img/icons/white-icons/community.png" alt="">
                  <span>Кадровое сопровождение текущей деятельности
                  </span>
                </div>
                <div class="item">
                  <img src="../img/icons/white-icons/documents.png" alt="">
                  <span>Разработка кадровой документации</span>
                </div>
                <div class="item">
                  <img src="../img/icons/white-icons/state.png" alt="">
                  <span>Трудовые споры,
                    проверки гос. органами</span>
                </div>
                <div class="item">
                  <img src="../img/icons/white-icons/report.png" alt="">
                  <span>Формирование и сдача кадровой отчетности</span>
                </div>

              </div>
            </div>
          </div>
        </div>
        <div class="container">
        <div class="outsourcing-items">
          <h1>Этапы</h1>
          <div class="outsourcing-items-row">
            <div class="outsourcing-item">
              <div class="item-number">
                01
              </div>
              <div class="item-span">
                <span>Подписываем договор, соглашение о конфиденциальности, при необходимости SLA (Service Level Agreement)</span>
              </div>
            </div>
            <div class="outsourcing-item">
              <div class="item-number">
                02
              </div>
              <div class="item-span">
                <span>Получаем исходные данные (загрузка начальных данных за 2 предыдущих календарных года)</span>
              </div>
            </div>
            <div class="outsourcing-item">
              <div class="item-number">
                03
              </div>
              <div class="item-span">
                <span>Проводим параллельный расчет</span>
              </div>
            </div>
            <div class="outsourcing-item">
              <div class="item-number">
                04
              </div>
              <div class="item-span">
                <span>Анализируем текущие процессы</span>
              </div>
            </div>
            <div class="outsourcing-item">
              <div class="item-number">
                05
              </div>
              <div class="item-span">
                <span>Восстанавливаем кадровый учет при необходимости, корректируем настройки по расчету заработной платы</span>
              </div>
            </div>
            <div class="outsourcing-item">
              <div class="item-number">
                06
              </div>
              <div class="item-span">
                <span>Организуем документооборот и регламент взаимодействия </span>
              </div>
            </div>
            <div class="outsourcing-item">
              <div class="item-number">
                07
              </div>
              <div class="item-span">
                <span>Переходим к регулярному обслуживанию</span>
              </div>
            </div>
            <div class="outsourcing-item">
              <div class="item-number">
                08
              </div>
              <div class="item-span">
                <span></span>
              </div>
            </div>
            <div class="outsourcing-item">
              <div class="item-number">
                09
              </div>
              <div class="item-span">
                <span></span>
              </div>
            </div>
          </div>
        </div>
      </div>
        <div class="outsourcing-resource">
          <div class="container">
          <h1>Результат</h1>
          <div class="resource-text">
            <div class="left-column">
              <div class="outsource-item">
                <h1>01</h1>
                <div class="item-text">
                  <span class="head-span">Кадровые документы в порядке
                    и готовы к проверке</span>
                  <span class="under-text">Вам достаточно сообщить о факте кадрового события, и мы предоставим полный пакет всех необходимых документов
                  </span>
                </div>
              </div>
              <div class="outsource-item">
                <h1>02</h1>
                <div class="item-text">
                  <span class="head-span">Кадровый учет соответствует актуальному законодательству</span>
                  <span class="under-text">Мы отслеживаем и анализируем изменения в нормативной базе</span>
                </div>
              </div>
              <div class="outsource-item">
                <h1>03</h1>
                <div class="item-text">
                  <span class="head-span">Освободите себя от работы с кадрами</span>
                  <span class="under-text">Вам не придется нанимать дополнительных сотрудников в штат, обучать и решать, кем заменить во время отпуска или больничного. Наши специалисты возьмут на себя ответственность за результат</span>
                </div>
              </div>
            </div>
            <div class="right-column">
              <img src="../img/outsource-3.png" alt="">
            </div>
          </div>
        </div>
        </div>
      </div>
    </section>
<section class="callback-forms">
      <div class="gradient-orange"></div>
      <div class="gradient-blue"></div>
      <div class="container">
        <h1>Мы готовы приступить к работе. А вы?</h1>
        <div class="callback-items">
          <div class="left-column">
            <input type="text" placeholder="Имя">
            <input type="text" placeholder="Телефон">
            <input type="text" placeholder="Email">
          </div>
          <div class="right-column">
            <input type="button" class="button-white" value="Оформить заявку">
          </div>
        </div>
      </div>
    </section>
<section class="offer-partners">
      <div class="graph-outsource"><img src="../img/graph-parnters-123.png" alt=""></div>
      <div class="container">
        <h1 class="section-h1">Предложения партнеров</h1>
        <div class="offer-partners-slider">
          <div class="offer-slider-item">
            <img src="../img/out-slid.png" alt="">
          </div>
          <div class="offer-slider-item">
            <img src="../img/out-slid-2.png" alt="">
          </div>
          <div class="offer-slider-item">
            <img src="../img/out-slid-3.png" alt="">
          </div>
          <div class="offer-slider-item">
            <img src="../img/out-slid-4.png" alt="">
          </div>
          <div class="offer-slider-item">
            <img src="../img/out-slid-5.png" alt="">
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
<script src="{{ asset('js/outsource-slider.js') }}"></script>
@endpush
