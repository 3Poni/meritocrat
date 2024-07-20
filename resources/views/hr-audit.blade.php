@extends('layouts.app')
@push('head')
    <link rel="stylesheet" href="{{ asset('css/hr-audit.css') }}">
    <link rel="stylesheet" href="{{ asset('css/callback.css') }}">
@endpush
@section('title')Кадровый аудит@endsection
@section('content')
<section class="hr-audit">
    <div class="hr-graph"><img src="../img/hr-graph.png" alt=""></div>
    <div class="container">
        @include('layouts.breadcrumbs')
        <h1 class="section-h1">
            Кадровый аудит
        </h1>
        <div class="audit-under-text">
            <span class="section-span">
                Снижение рисков и повышение эффективности кадрового делопроизводства.
                Кадровый аудит — комплексный анализ кадровой документации на предмет соответствия требованиям, прописанным на законодательном уровне. Его цель — выявить потенциальные риски развития конфликтных ситуаций в виде трудовых споров или претензий инспекторов по труду. Его проводят по отдельности или в рамках кадрового консалтинга сплошным или выборочным методом.
            </span>
            <span class="section-span">
                MERITOCRAT предлагает комплексный подход в решении задач в сфере кадрового учета. Консультанты оказывают услуги кадрового консалтинга, включающие аудит работы соответствующих отделов. В случае необходимости заказчик может передать на аутсорсинг всю подобную деятельность, что является разумным решением, так как позволяет экономить бюджет.
            </span>
        </div>

        <h1 class="section-small-h1">
            Задачи
        </h1>
        <div class="audit-columns">
            <div class="left-column">
                <div class="audit-item">
                    <h1 class="section-small-h1">
                        01
                    </h1>
                    <span class="section-span">Определить причины недостаточной результативности HR-процессов
                    </span>
                </div>
                <div class="audit-item">
                    <h1 class="section-small-h1">
                        02
                    </h1>
                    <span class="section-span">Выявить связь HR со стратегией компании
                    </span>
                </div>
                <div class="audit-item">
                    <h1 class="section-small-h1">
                        03
                    </h1>
                    <span class="section-span">Выделить целевые HR-процессы и взаимосвязанные

                    </span>
                </div>

            </div>
            <div class="right-column">
                <div class="audit-item">
                    <h1 class="section-small-h1">
                        04
                    </h1>
                    <span class="section-span">Оптимизировать затраты на HR-функцию (выявить потери)
                    </span>
                </div>
                <div class="audit-item">
                    <h1 class="section-small-h1">
                        05
                    </h1>
                    <span class="section-span">Выявить причины выгорания сотрудников

                    </span>
                </div>
                <div class="audit-item">
                    <h1 class="section-small-h1">
                        06
                    </h1>
                    <span class="section-span">Подготовить HR к автоматизации
                    </span>
                </div>
            </div>
        </div>
        <div class="audit-img">
            <h1 class="section-small-h1">Области внимания при кадровом аудите</h1>
            <img src="../img/table.png" alt="">
        </div>
        <div class="audit-area">
          <h1 class="section-small-h1">Области внимания при кадровом аудите</h1>
          <div class="area-items">
            <div class="area-item">

              <div class="area-item-text item-blue">
                <ul>
                  <li>Стандарт и процесс обучения сторудников</li>
                  <li>Удержание талантов</li>
                  <li>Программа развтия кадрового резерва</li>
                  <li>КДП в ходе работы: отпуска,
                    больничные, переводы и пр</li>
                  <li>Мотивация сотрудников,
                    начисление бонусов</li>
                  <li>Работа с увольнениями
                    (причины, предупреждение)</li>
                </ul>
              </div>
              <h1 class="side-text">Обучение и работа</h1>
            </div>
            <div class="area-item">
              <div class="area-item-text item-purple">
                <ul>
                  <li>HR-аналитика</li>
                  <li>Процедуры оценки</li>
                  <li>Процесс работы с ИПР</li>
                  <li>Процесс формирования
                    кадрового резерва</li>
                  <li>Оценка воволеченности
                    (лояльности)</li>
                </ul>
              </div>
              <h1 class="side-text">Оценка</h1>
            </div>
            <div class="area-item">
              <div class="area-item-text item-black">
                <ul>
                  <li>Создание модели компетенций</li>
                  <li>Изменение политик в подборе</li>
                  <li>HR-бренд</li>
                  <li>Аналитика воронки подбора</li>
                  <li>Делопроизводство при найме
                    сотрудников</li>
                </ul>
              </div>
              <h1 class="side-text">Найм</h1>
            </div>
            <div class="area-item">
              <div class="area-item-text item-orange">
                <ul>
                  <li>Стандарт и процесс обучения сторудников</li>
                  <li>Удержание талантов</li>
                  <li>Программа развтия кадрового резерва</li>
                  <li>КДП в ходе работы: отпуска,
                    больничные, переводы и пр</li>
                  <li>Мотивация сотрудников,
                    начисление бонусов</li>
                  <li>Работа с увольнениями
                    (причины, предупреждение)</li>
                </ul>
              </div>
              <h1 class="side-text">Адаптация</h1>
            </div>
          </div>
      </div>

    </div>
    <div class="stages">
      <div class="graph-stages"><img src="../img/graph-stages.png" alt=""></div>
      <div class="container">
          <h1>Этапы</h1>
          <div class="stages-items-row">
              <div class="stages-item">
                <div class="item-number">
                  01
                </div>
                <div class="item-span">
                  <span class="head-span">
                    Определение целей
                    и методологии аудита
                  </span>
                  <span>Согласование целей аудита, предмета и объект аудита.
                  </span>
                </div>
              </div>
              <div class="stages-item">
                <div class="item-number">
                  02
                </div>
                <div class="item-span">
                  <span class="head-span">
                    Согласование план-графика и зон ответственности проекта
                  </span>
                  <span>Знакомство проектной команды, определение каналов коммуникации.</span>
                </div>
              </div>
              <div class="stages-item">
                <div class="item-number">
                  03
                </div>
                <div class="item-span">
                  <span class="head-span">
                    Определение желаемых показателей системы HR
                  </span>
                  <span>Согласуем образ результата, который должны достичь</span>
                </div>
              </div>
              <div class="stages-item">
                <div class="item-number">
                  04
                </div>
                <div class="item-span">
                  <ul>
                    <li>Метрики HR-процессов</li>
                    <li>Регламенты</li>
                    <li>Интервью с руководителями и сотрудниками</li>
                    <li>Наблюдение за работой HR-департамента и аудит существующих процессов (визит на предприятие)</li>
                    <li>Анализ документов (процедуры, регламенты)</li>
                  </ul>
                </div>
              </div>
              <div class="stages-item">
                <div class="item-number">
                  05
                </div>
                <div class="item-span">
                  <span class="head-span">
                    Формирование карты бизнес-процессов
                  </span>
                  <span>Поставщик и покупатель являются резидентами разных государств. Одним
                    из видов международного факторинга является экспортный факторинг.
                  </span>
                  <ul>
                    <li>Построение схем процессов «as is»</li>
                    <li>Анализ текущей ситуации в части негативных факторов, снижающих показатели эффективности на каждом этапе HR-процессов в контексте</li>
                    <li>Анализ факторов, позитивно влияющих на необходимые метрики</li>
                    <li>Рекомендации «to be» в контексте установленных в компании целевых показателей для процессов HR</li>
                  </ul>
                </div>
              </div>
              <div class="stages-item">
                  <div class="item-number">
                    06
                  </div>
                  <div class="item-span">
                    <span class="head-span">
                      Создание отчета и дорожной карты изменений
                    </span>
                    <span>Отчет содержит описание позитивных и негативных факторов, рекомендации по дальнейшей стратегии: заключение о сильных сторонах HR-функции, области улучшения, перечень рисков действующей системы, описание процессов «as is», рекомендации для выстраивания стратегии и процессов «to be», дорожная карта.</span>
                  </div>
                </div>
                <div class="stages-item">
                  <div class="item-number">
                    07
                  </div>
                  <div class="item-span">
                    <span class="head-span">
                      Передача материалов проекта компании клиента
                    </span>
                    <span>Встреча проектной команды, подведение итогов кадрового аудита
                      и переход к дальнейшим изменениями</span>
                  </div>
                </div>
              <div class="stages-item empty"></div>
              <div class="stages-item empty"></div>
            </div>
      </div>

      </div>
      <div class="container">
        <div class="result">
          <h1 class="section-small-h1">
            Показатели оценки HR-функции
          </h1>
          <div class="result-row">
            <div class="result-item">
              <img src="../img/icons/time.png" alt="">
              <span class="section-span">
                Скорость оформления документов КДП
              </span>
            </div>
            <div class="result-item">
              <img src="../img/icons/delivery.png" alt="">
              <span class="section-span">
                «Текучка» персонала
              </span>
            </div>
            <div class="result-item">
              <img src="../img/icons/calendar.png" alt="">
              <span class="section-span">
                Срок жиненного цикла сотрудника в организации
              </span>
            </div>
            <div class="result-item">
              <img src="../img/icons/person-time.png" alt="">
              <span class="section-span">
                Срок работы в компании на разных позициях
              </span>
            </div>
            <div class="result-item">
              <img src="../img/icons/community.png" alt="">
              <span class="section-span">
                Вовлеченность персонала
              </span>
            </div>
            <div class="result-item">
              <img src="../img/icons/accept.png" alt="">
              <span class="section-span">
                Скорость закрытия вакансий
              </span>
            </div>
            <div class="result-item">
              <img src="../img/icons/rating.png" alt="">
              <span class="section-span">
                Рейтинг бренда работодателя
              </span>
            </div>

          </div>
      </div>
      <h1 class="section-small-h1">
        Результаты
      </h1>
      <div class="result-columns">
        <div class="left-column">
          <div class="result-column-item">
            <h1 class="section-small-h1">
              01
            </h1>
            <span class="section-span">
              Сильные стороны HR
            </span>
          </div>
          <div class="result-column-item">
            <h1 class="section-small-h1">
              02
            </h1>
            <span class="section-span">
              Области улучшения HR-процессов
            </span>
          </div>
          <div class="result-column-item">
            <h1 class="section-small-h1">
              03
            </h1>
            <span class="section-span">
              Риски и потери действующей системы
            </span>
          </div>
          <div class="result-column-item">
            <h1 class="section-small-h1">
              04
            </h1>
            <span class="section-span">
              Описание процессов по модели «as is»
            </span>
          </div>

        </div>
        <div class="right-column">
          <div class="result-column-item">
            <h1 class="section-small-h1">
              05
            </h1>
            <span class="section-span">
              Рекомендации для выстраивания процессов по модели «to be»
            </span>
          </div>
          <div class="result-column-item">
            <h1 class="section-small-h1">
              06
            </h1>
            <span class="section-span">
              Рекомендации по автоматизации HR-процессов
            </span>
          </div>
          <div class="result-column-item">
            <h1 class="section-small-h1">
              07
            </h1>
            <span class="section-span">
              Дорожная карта рекомендуемых изменений
            </span>
          </div>
          <div class="result-column-item">
            <h1 class="section-small-h1">
              08
            </h1>
            <span class="section-span">
              Рекомендации по выстраиванию процессов HR-развития (при необходимости)
            </span>
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
  <div class="graph-outsource"><img src="../img/outsource-grapg.png" alt=""></div>
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
@endsection
@push('script')
    <script src="{{ asset('js/outsource-slider.js') }}"></script>
@endpush
