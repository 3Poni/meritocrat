@extends('layouts.app')
@push('head')
    <link rel="stylesheet" href="{{ asset('css/due-diligence.css') }}">
@endpush
@section('title')Due-diligence@endsection
@section('content')
<section class="due-diligence">
    <div class="due-graph"><img src="../img/due-graph.png" alt=""></div>
    <div class="container">
        <div class="links">
            <a href="../index.html"><span>Главная</span></a>
            <img src="../img/arrow.png" alt="">
            <a href="../index.html"><span>Услуги</span></a>
            <img src="../img/arrow.png" alt="">
            <a href="../index.html"><span>Инвестиционный консалтинг</span></a>
            <img src="../img/arrow.png" alt="">
            <a href="../index.html"><span class="active-link">Due Diligence</span></a>
        </div>
        <h1 class="section-h1">
            Due Diligence
        </h1>
        <span class="section-span">
            Due diligence – процедура формирования объективного и непредвзятого представления об объекте инвестиций, при которой взвешиваются инвестиционные риски, проводится оценка целесообразности и экономической эффективности объекта инвестиций. Это один из наиболее эффективных инструментов снижения рисков и защиты интересов сторон при проведении крупных сделок.
        </span>
        <span class="section-span">
            Необходимость в процедуре Due diligence возникает, как правило, при планировании крупной сделки или при принятии инвестиционных решений.
        </span>
        <h1 class="section-small-h1 fix-bottom-margin">
            Преимущества
        </h1>
        <div class="due-items-features">
            <div class="item">
                <h1 class="section-small-h1 zero-margin">
                    01
                </h1>
                <span class="section-span">Предоставление потенциальному инвестору (кредитору) подтвержденных, достоверных данных о финансовой состоятельности, платеже и кредитоспособности</span>
            </div>
            <div class="item">
                <h1 class="section-small-h1 zero-margin">
                    02
                </h1>
                <span class="section-span">Проверка надежности контрагента
                </span>
            </div>
            <div class="item">
                <h1 class="section-small-h1 zero-margin">
                    03
                </h1>
                <span class="section-span">Оценка объекта инвестирования, оценка рисков, связанных с инвестициями и т.п.
                </span>
            </div>
            <div class="item">
                <span class="section-span">Комплексный Due Diligence — это совокупность различных мер, направленных на всестороннюю и добросовестную проверку одного из участников сделки путем выявления рисков, связанных с вложением капитала.
                </span>
            </div>
        </div>
        <div class="due-columns">
            <div class="left-column">
                <img src="../img/due-img.png" alt="">
            </div>
            <div class="right-column">
                <h1 class="section-small-h1">Когда требуется Due Diligence?</h1>
                <ul>
                    <li>Покупка-продажа бизнеса</li>
                    <li>Слияние и поглощение (M&A)</li>
                    <li>Приобретение акций и долей</li>
                    <li>Обращение в банк за кредитом</li>
                    <li>Приобретение коммерческой недвижимости</li>
                    <li>Совершение других финансовых и коммерческих операций, в которых необходимо получить объективное представление об объекте инвестирования</li>
                </ul>
            </div>
        </div>
        <div class="due-expertise">
            <h1 class="section-small-h1">
                Экспертиза
            </h1>
            <div class="expertise-items">
              <div class="item-container">
                <div class="item">
                  <div class="gradient-blue"></div>
                    <div class="text">
                        <h1>Налоговая </h1>
                        <span class="under-text">экспертиза</span>
                    </div>
                    <ul>
                        <li>Анализ налоговых рисков</li>
                        <li>Анализ истории налоговых проверок и судебных разбирательств</li>
                        <li>Анализ налоговых активов и обязательств</li>
                        <li>Анализ налоговых аспектов деятельности, налогового статуса</li>
                    </ul>
                </div>
              </div>
              <div class="item-container">
                <div class="item">
                  <div class="gradient-orange"></div>
                    <div class="text">
                        <h1>Финансовая</h1>
                        <span class="under-text">экспертиза</span>
                    </div>
                    <ul>
                        <li>Анализ наличия активов и обязательств</li>
                        <li>Анализ финансового результата деятельности</li>
                        <li>Анализ оборотного и внеоборотного капитала</li>
                        <li>Анализ заемного капитала</li>
                        <li>Порядок организации финансового учета</li>
                    </ul>
                </div>
              </div>
              <div class="item-container">
                <div class="item">
                  <div class="gradient-blue"></div>
                    <div class="text">
                        <h1>Юридическая</h1>
                        <span class="under-text">экспертиза</span>
                    </div>
                    <ul>
                        <li>Анализ корпоративной структуры и управления</li>
                        <li>Анализ уставного капитала</li>
                        <li>Анализ существенных договоров</li>
                        <li>Анализ объектов недвижимости</li>
                        <li>Анализ объектов интеллектуальной собственности</li>
                        <li>Анализ судебных разбирательств</li>
                        <li>Анализ трудовых договоров</li>
                    </ul>
                </div>
              </div>
              <div class="item-container">
                <div class="item item-last">
                  <div class="graph-due"><img src="../img/due-graph-block.png" alt=""></div>
                  <div class="gradient-blue"></div>
                  <div class="text">
                        <h1>Комплексная</h1>
                        <span class="under-text">экспертиза</span>
                    </div>
                    <div class="set-h1">
                        <h1 class="text-h1">Налоговая</h1>
                        <h1 class="text-h1">Финансовая</h1>
                        <h1 class="text-h1">Юридическая</h1>
                    </div>

                </div>
              </div>
            </div>

            </div>
            <div class="under-text">
                <span class="section-span">
                    Таким образом, Due Diligence проводится перед осуществлением сделки и помогает обосновать принятие инвестиционных решений.
                </span>
            </div>
            <h1 class="section-small-h1">
                Результат
            </h1>
            <div class="due-columns">
                <div class="left-columns">
                    <div class="text-item">
                        <h1 class="section-small-h1">
                            01
                        </h1>
                        <span class="section-span">
                            Обзор основных выводов, оценку инвестиционных рисков («executive summary»)
                        </span>
                    </div>
                    <div class="text-item">
                        <h1 class="section-small-h1">
                            02
                        </h1>
                        <span class="section-span">
                            Отчет о результатах проведения финансовой, налоговой и юридической экспертизы с оценкой выявленных рисков и рекомендациями по их устранению и минимизации (митигации)
                        </span>
                    </div>
                    <div class="text-item">
                        <h1 class="section-small-h1">
                            03
                        </h1>
                        <span class="section-span">
                            Приложения, включающие документы, которые могут служить подтверждением или более подробным объяснением сведений, представленных в отчете
                        </span>
                    </div>
                    <div class="text-item">
                        <h1 class="section-small-h1">
                            04
                        </h1>
                        <span class="section-span">
                            Рекомендации по включению в проект договора купли-продажи дополнительных условий, включая заверений продавца, indemnity
                        </span>
                    </div>
                </div>
                <div class="right-column">
                    <img src="../img/due-img-2.png" alt="">
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
@push('script')
    <script src="{{ asset('js/expertise-items-mobile-slide.js') }}"></script>
    <script src="{{ asset('js/Carousel-move_slide_by_slide.js') }}"></script>
@endpush
