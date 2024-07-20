@extends('layouts.app')
@push('head')
    <link rel="stylesheet" href="{{ asset('css/strategic.css') }}">
@endpush
@section('title')Стратегическое планирование @endsection
@section('content')
<section class="strategic-page">
    <div class="container">
        @include('layouts.breadcrumbs')
        <h1 class="section-h1">
            Стратегическое планирование
        </h1>
        <span class="section-span">
            Решение стратегических вопросов в современных условиях ведения бизнеса — наиболее сложная управленческая задача. Ошибки при выборе стратегии развития бизнеса сведут к нулю любые усилия по достижению успешных результатов. Именно поэтому стратегический консалтинг является самой востребованной услугой на рынке управленческого консалтинга.
        </span>
        <span class="section-span">
            Стратегический консалтинг представляет собой комплекс мер по определению перспектив и направлений развития организации на основе изучения текущей рыночной ситуации и анализа потенциальных возможностей компании. Стратегический консалтинг определяет цели предпринимательской деятельности, пути и средства их достижения.
        </span>
        <span class="section-span">
            Стратегическое планирование учитывает множество факторов: конкурирующие организации, конъюнктуру и тенденции рынка, появление новых технологий, лучшую отраслевую и функциональную практику международного бизнеса, используемую ведущими мировыми компаниями.
        </span>
        <span class="section-span">
            Решение вопросов стратегического развития благодаря привлечению консалтинговой компании позволяет объективно оценить возможности заказчика. Альтернативный взгляд на будущее компании способен предложить только внешний независимый консультант, не имеющий личной заинтересованности в выборе направления развития предприятия. MERITOCRAT владеет обширной базой знаний об эффективных стратегиях развития.
        </span>
        <div class="strategic-icons">
            <div class="item">
                <img src="../img/icons/stratigic-pic-1.png" alt="">
                <span>В рамках разработки стратегии мы определяем долгосрочные цели руководства компании в долгосрочной перспективе.</span>
                <div class="gradient-blue"></div>
              </div>
            <div class="item">
                <img src="../img/icons/stratigic-pic-2.png" alt="">
                <span>Аналитики MERITOCRAT исследуют международные и российские рынки, изучают существующие в индустрии успешные бизнес-модели и тренды в бизнес-моделях.</span>
                <div class="gradient-orange"></div>
              </div>
        </div>
        <div class="artiqule">
            <img src="../img/articule.png" alt="" class="artiqule-left-top">
            <span>
                Мы обладаем глубоким пониманием отраслевой специфики и используем анализ лучших индустриальных практик для поддержки компаний из различных индустрий. Индивидуальный подход к каждому клиенту обеспечивает наивысшее качество взаимодействия и оперативность решения любых вопросов, связанных как с производством, так и с бизнес-аналитикой.
            </span>
            <img src="../img/articule.png" alt="" class="artiqule-right-bottom">
        </div>
    </div>
</section>
<section class="stages">
    <div class="gradient-orange"></div>

    <div class="container">
      <div class="row-blocks">
        <div class="block-item"><span>Наши эксперты рассматривают возможности расширения бизнеса в новые продуктовые и клиентские сегменты, новые регионы производства и сбыта, развитие в компании новых компетенций</span></div>
        <div class="block-item"><span>В результате проекта компания получает стратегию и детальную дорожную карту ее реализации с указанием необходимых действий, инвестиций, ресурсов и сроков, а также продумаем внедрение стратегии в корпоративную культуру и деятельность каждого отдела, поддержим управленческую команду</span></div>
      </div>
      <div class="row-blocks-mobile">
        <div class="row-blocks-mobile-item">
          <div class="block-item"><span>Наши эксперты рассматривают возможности расширения бизнеса в новые продуктовые и клиентские сегменты, новые регионы производства и сбыта, развитие в компании новых компетенций</span></div>
        </div>
        <div class="row-blocks-mobile-item">
          <div class="block-item second-block-item"><span>В результате проекта компания получает стратегию и детальную дорожную карту ее реализации с указанием необходимых действий, инвестиций, ресурсов и сроков, а также продумаем внедрение стратегии в корпоративную культуру и деятельность каждого отдела, поддержим управленческую команду</span></div>
        </div>
      </div>
        <h1>Этапы</h1>
        <div class="stages-items-row">
            <div class="stages-item">
              <div class="item-number">
                01
              </div>
              <div class="item-span">
                <span class="head-text">Подготовка данных</span>
                <span>Согласование целей аудита, предмета и объект аудита</span>
              </div>
            </div>
            <div class="stages-item">
              <div class="item-number">
                02
              </div>
              <div class="item-span">
                <span class="head-text">Разработка стратегии </span>
                <span>Разработка стратегии развития компании. На данном этапе осуществляется выбор направления развития компании и определяется возможность достижения значимых или уникальных конкурентных преимуществ.</span>
              </div>
            </div>
            <div class="stages-item">
              <div class="item-number">
                03
              </div>
              <div class="item-span">
                <span class="head-text">Проверка стратегии </span>
                <span>Этап проверки разработанной стратегии на достижимость, то есть реальность получения результатов.</span>
              </div>
            </div>
            <div class="stages-item">
              <div class="item-number">
                04
              </div>
              <div class="item-span">
                <span class="head-text">Определение рисков</span>
                <span>Этап определения возможных рисков при реализации разработанной стратегии.</span>
              </div>
            </div>
            <div class="stages-item">
              <div class="item-number">
                05
              </div>
              <div class="item-span">
                <span class="head-text">Заключение</span>
                <span>Заключительный этап подготовки результатов работы.</span>
              </div>
            </div>
            <div class="stages-item empty"></div>
          </div>
    </div>
</section>
<section class="result">
    <div class="graph-result"><img src="../img/graph-result.png" alt=""></div>
    <div class="graph-result-2"><img src="../img/graph-result-2.png" alt=""></div>
    <div class="container">
        <h1>Результат</h1>
        <div class="result-items">
            <div class="result-item">
                <img src="../img/icons/data.png" alt="">
                <span>Единый источник управленческой информации</span>
            </div>
            <div class="result-item">
                <img src="../img/icons/stat.png" alt="">
                <span>Четкая связь оперативных показателей и стратегических целей</span>
            </div>
            <div class="result-item">
                <img src="../img/icons/person.png" alt="">
                <span>Ясное распределение ответственности за показатели деятельности</span>
            </div>
            <div class="result-item">
                <img src="../img/icons/touch.png" alt="">
                <span>Оперативная реакция на изменения в конъюнктуре и экономике предприятия</span>
            </div>
            <div class="result-item">
                <img src="../img/icons/evalution.png" alt="">
                <span>Предсказуемость результатов</span>
            </div>
            <div class="result-item">
                <img src="../img/icons/search.png" alt="">
                <span>Повышение роли анализа в процессах принятия решений</span>
            </div>
            <div class="result-item">
                <img src="../img/icons/setting.png" alt="">
                <span>Высокий уровень контроля над показателями деятельности</span>
            </div>
        </div>
    </div>
</section>
@endsection
@push('script')
    <script src="{{ asset('js/strategic-slider.js') }}"></script>
@endpush
