@extends('layouts.app')

@push('head')
    <link rel="stylesheet" href="{{ asset('css/support.css') }}">
@endpush
@section('title')Проекты @endsection
@section('content')
<section class="government-support">
    <div class="container">
        <div class="links">
            <a href="../index.html"><span>Главная</span></a>
            <img src="../img/arrow.png" alt="">
            <a href="../index.html"><span>Услуги</span></a>
            <img src="../img/arrow.png" alt="">
            <a href="../index.html"><span>Инвестиционный консалтинг</span></a>
            <img src="../img/arrow.png" alt="">
            <a href="../index.html"><span class="active-link">Применение мер господдержки </span></a>
        </div>
        <h1 class="section-h1">
            Применение мер господдержки
        </h1>
        <span class="section-span">
            Существенно изменившиеся экономические условия, а также курс на достижение технологического суверенитета и стимулирование импортозамещения в России вновь повысил актуальность государственной поддержки инвестиций.
        </span>
        <span class="section-span">
            Так, за 2022 год в России был актуализирован, трансформирован или перезапущен ряд инструментов поддержки инвестиционной активности:
        </span>
        <div class="government-items">
          <div class="item">
            <div class="government-item">
              <div class="gradient-blue"></div>
              <h1>
                  Специальные инвестиционные контракты
              </h1>
              <ul>
                  <li>СПИК 1.0 – привлечение инвестиций в проекты по созданию новых промышленных производств</li>
                  <li>СПИК 2.0 – реализация промышленных проектов на территории РФ, которые предусматривают внедрение современных технологий</li>
              </ul>
          </div>
          </div>
            <div class="item">
              <div class="government-item">
                <div class="gradient-orange"></div>
                <h1>
                    СЗПК
                </h1>
                <span class="section-span">Соглашения о защите и поощрении капиталовложений</span>
            </div>
            </div>
            <div class="item">
              <div class="government-item">
                <div class="gradient-blue"></div>
                <h1>
                    Промышленная ипотека
                </h1>
                <span class="section-span">Поддержка предприятий промышленного сектора при возведении, приобретении и реконструкции промышленных площадей</span>
            </div>
            </div>
            <div class="item">
              <div class="government-item">
                <div class="graph-str"><img src="../img/graph-str.png" alt=""></div>
                <div class="gradient-blue"></div>
                <h1>
                    Поддержка промышленных кластеров в рамках стимулирования импортозамещения
                </h1>
            </div>
            </div>
        </div>
        <div class="government-columns">
            <div class="left-column">
                <img src="../img/gov-img.png" alt="">
            </div>
            <div class="right-column">
                <span class="section-span">
                    Консультанты MERITOCRAT оказывают комплексную поддержку в применении мер государственной поддержки.
                    От предварительного анализа и выбора наиболее эффективного механизма с учетом индивидуальных особенностей, специфики деятельности и целей инвестора до подготовки полного комплекта документов, сопровождения подачи заявки в регулирующий орган и консультационной поддержки в период действия льготного механизма.
                </span>
                <span class="section-span">
                    Механизм СПИК 2.0 направлен на стимулирование инвестиций в российское промышленное производство с использованием новых технологий. На фоне введенных антироссийских санкций этот механизм, в том числе, преследует цель наладить импортозамещение в важных для экономики секторах.
                </span>
                <span class="section-span">Инвестор заключает соглашение с государством, в котором фиксируются обязательства инвестора реализовать инвестиционный проект, а также обязательства государства обеспечить стабильность условий ведения бизнеса и предоставить меры господдержки.
                </span>
            </div>
        </div>
    </div>
    <div class="stages">
        <div class="gradient-blue"></div>
        <div class="container">
            <h1>Этапы заключения СПИК 2.0</h1>
            <div class="stages-items-row">
                <div class="stages-item">
                  <div class="item-number">
                    01
                  </div>
                  <div class="item-span">
                    <span>Проведение мониторинга законодательства субъекта РФ на предмет наличия мер поддержки. В случае их отсутствия у инвестора есть два выхода: начать переговоры с администрацией региона о включении таких мер в законодательство или выбрать для инвестирования другой регион.
                    </span>
                  </div>
                </div>
                <div class="stages-item">
                  <div class="item-number">
                    02
                  </div>
                  <div class="item-span">
                    <span>Согласование с региональными властями места размещения производства.</span>
                  </div>
                </div>
                <div class="stages-item">
                  <div class="item-number">
                    03
                  </div>
                  <div class="item-span">
                    <span>Подача предложения о заключении СПИК в Минпромторг. До конца 2023 года продлен ускоренный порядок заключения специнвестконтрактов, согласно которому сроки ответа органов власти на предложение о заключении СПИК составляют не более 5 рабочих дней.
                    </span>
                  </div>
                </div>
                <div class="stages-item">
                  <div class="item-number">
                    04
                  </div>
                  <div class="item-span">
                    <span>ЭПодача через государственную информационную систему промышленности (ГИСП) заявления с описанием характеристик продукции, которую планируется производить на основании технологии, или способа производства продукции. Перечень видов технологий утверждает Правительство РФ.
                    </span>
                  </div>
                </div>
                <div class="stages-item">
                  <div class="item-number">
                    05
                  </div>
                  <div class="item-span">
                    <span>Документация о проведении конкурсного отбора разрабатывается в течение 10 календарных дней, и далее инвестор может сразу подать заявку на участие.
                    </span>
                  </div>
                </div>
                <div class="stages-item">
                    <div class="item-number">
                      06
                    </div>
                    <div class="item-span">
                      <span>Подготовка полного пакета документов для участия в конкурсе:
                        <ul>
                            <li>Бизнес-план</li>
                            <li>Финансовая модель</li>
                            <li>План-график инвестиций</li>
                            <li>Документы, подтверждающие возможность привлечения инвестиций</li>
                            <li>План-график выполнения производственных и технологических операций</li>
                            <li>Сведения о согласовании места производства с субъектом РФ и муниципальным образованием</li>
                        </ul>
                    </span>
                    </div>
                  </div>
                  <div class="stages-item">
                    <div class="item-number">
                      07
                    </div>
                    <div class="item-span">
                      <span>Далее заявка рассматривается уполномоченным органом, которым принимается решение об одобрении проекта.</span>
                    </div>
                  </div>
                <div class="stages-item empty"></div>
                <div class="stages-item empty"></div>
              </div>
        </div>
    </div>
</section>
<section class="support-favorites">
    <div class="container">
        <div class="favorites-text">
            <h1 class="section-small-h1">
                Поддержка заключения СЗПК
            </h1>
            <span class="section-span">
                Механизм СЗПК направлен на стимулирование инвестиционной активности в стране. Существенно изменившиеся экономические условия, а также курс на достижение технологического суверенитета и стимулирование импортозамещения в России вновь повысил актуальность государственной поддержки инвестиций.
            </span>
            <h1 class="section-small-h1">
                Преимущества заключения СЗПК
            </h1>
            <div class="favorites-items">
                <div class="favorites-item">
                    <h1 class="section-small-h1">
                        01
                    </h1>
                    <span class="section-span">
                        Фиксация в соглашении «стабилизационной оговорки», т.е. факторов, законодательные изменения которых могут негативно отразиться на реализации проекта.
                    </span>
                </div>
                <div class="favorites-item">
                    <h1 class="section-small-h1">
                        02
                    </h1>
                    <span class="section-span">
                        Возмещение затрат на создание, модернизацию и реконструкцию обеспечивающей и сопутствующей инфраструктур в форме субсидии или налогового вычета. Последний напрямую зависит от налоговых поступлений от реализации инвестиционного проекта.
                    </span>
                </div>
            </div>
        </div>
        <div class="favorites-columns">
            <div class="left-column">
                <img src="../img/favorite-1.png" alt="">
            </div>
            <div class="right-column">
                <h1 class="section-small-h1">
                    Документы для заключения СЗПК
                </h1>
                <span class="section-span">Для соглашения заключения о защите и поощрении капиталовложений требуется подать комплект документов, включающий, в частности:
                </span>
                <ul>
                    <li>Общую информацию о заявителе</li>
                    <li>Бизнес-план проекта, оформленный в соответствии с требованиями регулятора</li>
                    <li>Финансовую модель проекта, оформленную в соответствии с требованиями регулятора</li>
                    <li>Подтверждение возможности осуществления заявителем капиталовложений в заявленном в бизнес-плане объеме</li>
                    <li>Разрешение на строительство (при необходимости) и др.</li>
                </ul>
            </div>
        </div>
        <div class="favorites-columns">
            <div class="left-column">
                <h1 class="section-small-h1">
                    Поддержка при заключении СЗПК
                </h1>
                <span class="section-span">Специалисты MERITOCRAT оказывают комплексное сопровождение заключения соглашений о защите и поощрении капиталовложений – от предварительного анализа до разработки полного пакета документов для СЗПК. В частности:
                </span>
                <div class="support-items">
                    <div class="support-item">
                        <h1 class="section-small-h1">
                            01
                        </h1>
                        <span class="section-span">
                            Проведут правовой анализ возможности заключения СЗПК
                        </span>
                    </div>
                    <div class="support-item">
                        <h1 class="section-small-h1">
                            02
                        </h1>
                        <span class="section-span">
                            Окажут сопровождение в рамках процедуры заключения СЗПК, включая подготовку полного пакета документов: бизнес-план, финмодель, необходимые разрешения и пр.
                        </span>
                    </div>
                    <div class="support-item">
                        <h1 class="section-small-h1">
                            03
                        </h1>
                        <span class="section-span">
                            Представят интересы компании в органах власти на всех этапах заключения СЗПК
                        </span>
                    </div>
                    <div class="support-item">
                        <h1 class="section-small-h1">
                            04
                        </h1>
                        <span class="section-span">
                            Окажут поддержку при переходе на налоговый мониторинг
                        </span>
                    </div>
                    <div class="support-item">
                        <h1 class="section-small-h1">
                            05
                        </h1>
                        <span class="section-span">
                            Обеспечат консультационную поддержку по налоговым, финансовым, правовым и бухгалтерским вопросам в рамках всего периода исполнения СЗПК
                        </span>
                    </div>
                </div>
            </div>
            <div class="right-column">
                <img src="../img/favorite-2.png" alt="">
            </div>
        </div>
    </div>
</section>
@endsection
@push('script')
<script src="{{ asset('js/strategic-slider.js') }}"></script>
<script src="{{ asset('js/slider-support.js') }}"></script>
@endpush
