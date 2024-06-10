@extends('layouts.app')
@push('head')
    <link rel="stylesheet" href="{{ asset('css/effectivity.css') }}">
@endpush
@section('title')Операционная эффективность@endsection
@section('content')
<section class="effectivity-page">
    <div class="effect-graph"><img src="../img/effectivity-graph.png" alt=""></div>
    <div class="container">
        <div class="links">
            <a href="../index.html"><span>Главная</span></a>
            <img src="../img/arrow.png" alt="">
            <a href="../index.html"><span>Услуги</span></a>
            <img src="../img/arrow.png" alt="">
            <a href="../index.html"><span>Операционный консалтинг</span></a>
            <img src="../img/arrow.png" alt="">
            <a href="../index.html"><span class="active-link">Операционная эффективность</span></a>
        </div>
        <h1 class="section-h1">
            Операционная эффективность
        </h1>
        <span class="section-span">
            Современные условия ведения бизнеса постоянно меняются, равно как и ожидания клиентов. Консультанты MERITOCRAT помогают клиентам адаптироваться к этим изменениям и оптимизировать свою операционную деятельность, обеспечивая тем самым конкурентное преимущество.
        </span>
        <h1 class="section-small-h1">
            Операционная эффективность vs Стратегия развития
        </h1>
        <span class="section-span">Операционную эффективность часто путают со стратегией развития бизнеса, хотя перед ними стоят разные задачи. Стратегия направлена преимущественно на долгосрочное планирование: она определяет направления развития, сферы деятельности, поставленные цели и пути их достижения. А операционная эффективность имеет для организации тактическое значение: от нее зависит, как решаются практические повседневные задачи здесь и сейчас.</span>
        <span class="section-span">Обеспечение эффективности всех основных и вспомогательных процессов является необходимым фактором успешного функционирования компании в долгосрочной перспективе. В нынешней ситуации операционная эффективность означает не только выбор наиболее эффективных методов производства и организации труда, но и максимальное соответствие требованиям гибкости и устойчивости. Повышение операционной эффективности может осуществляться как в отношении отдельных функций, так и компании в целом – когда консультант осуществляет поддержку трансформации организации на основе бережливого производства.</span>
        <span class="section-span">В чем кроется принципиальное различие между привычными направлениями повышения эффективности (например, «Управление данными», «Управление клиентским опытом») и инициативой «Операционная эффективность»? По нашему мнению, установка на максимальную реализацию потенциала, сосредоточенного в конкретной области (например, снижение уровня запасов готовой продукции) связана с негативными побочными эффектами в сопредельных областях - увеличении (вплоть до нереализуемых на практике) требований к гибкости и скорости производства. Таким образом, выигрыш в одной области ведет к потерям в другой.</span>
        <span class="section-span">Наш подход к инициативе «Операционная эффективность» предполагает сбалансированный подход к реализации внутренних резервов компании без неизбежных негативных явлений – необоснованное усложнение бизнес-процессов, капиталоемкие вложения, внедрение избыточного количества IT-систем и т.п.</span>
    </div>
</section>
<section class="effectivity-stats">
    <div class="effect-stats-graph"><img src="../img/effectivity-graph-2.png" alt=""></div>
    <div class="effect-stats-graph-2"><img src="../img/effectivity-graph-3.png" alt=""></div>
    <div class="container">
        <h1 class="section-small-h1">Операционная эффективность — внешний эффект ключевых производственных задач</h1>
        <img src="../img/effect-stats.png" alt="">
        <img src="../img/shem-stat.png" alt="" class="visible">
    </div>
</section>
<section class="effect-text">
    <div class="container">
    <h1 class="section-small-h1">Меры повышения операционной эффективности</h1>
    <div class="text-items">
        <div class="left-column">
            <div class="effect-item">
                <h1 class="section-small-h1">01</h1>
                <span class="section-span">
                    Сегментирование и классифицирование конкурентных факторов производства (OWC – Order-Winning and ОQ – Order-Qualifying Criteria)
                </span>
            </div>
            <div class="effect-item">
                <h1 class="section-small-h1">02</h1>
                <span class="section-span">
                    Разработка стандартных операционных процедур компании (SOP – Standart Operations Procedures) в рамках корпоративной и маркетинговой стратегий организации
                </span>
            </div>
            <div class="effect-item">
                <h1 class="section-small-h1">03</h1>
                <span class="section-span">
                    Картирование процессов и выбор оптимальных схем
                </span>
            </div>
            <div class="effect-item">
                <h1 class="section-small-h1">04</h1>
                <span class="section-span">
                    Управление мощностями и узкими местами в производственных процессах компании
                </span>
            </div>
            <div class="effect-item">
                <h1 class="section-small-h1">05</h1>
                <span class="section-span">
                    SPC (Statistical Process Control) – статистическое управление мощностями, FMEA – Failure Mode & Effects Analysis анализ видов и последствий отказов, Six Sigma
                </span>
            </div>
            <div class="effect-item">
                <h1 class="section-small-h1">06</h1>
                <span class="section-span">
                    Разработка и внедрение операционной стратегии
                </span>
            </div>
        </div>
        <div class="right-column">
            <div class="effect-item">
                <h1 class="section-small-h1">07</h1>
                <span class="section-span">
                    Подготовка анализов разрывов (Gap analysis) между рынком и операционной деятельностью организации, идентификация ключевых проблем и определение путей улучшения результативности
                </span>
            </div>
            <div class="effect-item">
                <h1 class="section-small-h1">08</h1>
                <span class="section-span">
                    Внедрение технологий бережливого производства Lean, 6 Sigma, JIT (Just-In-Time), Kaizen и других методов улучшения процессов
                </span>
            </div>
            <div class="effect-item">
                <h1 class="section-small-h1">09</h1>
                <span class="section-span">
                    Определение целевых параметров (KPI) в рамках ключевых операционных задач, таких как себестоимость, надежность, гибкость, качество и оперативность
                </span>
            </div>
            <div class="effect-item">
                <h1 class="section-small-h1">10</h1>
                <span class="section-span">
                    Планирование спроса и товарных запасов
                </span>
            </div>
            <div class="effect-item">
                <h1 class="section-small-h1">11</h1>
                <span class="section-span">
                    Работа с операционным персоналом
                </span>
            </div>
            <div class="effect-item">
                <h1 class="section-small-h1">12</h1>
                <span class="section-span">
                    Внедрение управленческих панелей мониторинга результативности
                </span>
            </div>
            <div class="effect-item">
                <h1 class="section-small-h1">13</h1>
                <span class="section-span">
                    TQM (Total Quality Management) – комплексное управление качеством
                </span>
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
