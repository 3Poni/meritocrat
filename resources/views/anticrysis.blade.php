@extends('layouts.app')
@push('head')
    <link rel="stylesheet" href="{{ asset('css/antycrysis-consalting-page.css') }}">
@endpush
    @section('title')Антикризисный консалтинг@endsection
@section('content')
<section class="antycrysis-consalting-page">
  <div class="antycrysis-wave"><img src="../img/ant-wave.png" alt=""></div>
    <div class="container">
        <div class="links">
            <a href="../index.html"><span>Главная</span></a>
            <img src="../img/arrow.png" alt="">
            <a href="../index.html"><span>Услуги</span></a>
            <img src="../img/arrow.png" alt="">
            <a href="../index.html"><span>Стратегический консалтинг</span></a>
            <img src="../img/arrow.png" alt="">
            <a href="../index.html"><span class="active-link">Антикризисный консалтинг</span></a>
        </div>
        <h1 class="section-h1">
            Антикризисный<br>консалтинг
        </h1>
        <span class="section-span">
            Современные предприятия развиваются в условиях высокой конкуренции и нестабильной экономической обстановки, что может привести к снижению ее прибыльности. Руководству предприятий необходимо применять комплексный подход к управлению рисками, занимать проактивную позицию, нацеленную на принятие упреждающих мер и прогнозирование рисков. Управление рисками должно стать стратегическим фактором сохранения устойчивости бизнеса и снижения издержек. В достижении этих целей вам помогут эксперты MERITOCRAT.
        </span>
        <span class="section-span">
            Антикризисный консалтинг с привлечением внешних экспертов может стать наиболее разумным подходом для выхода компании из кризиса и стабилизации ее деятельности. Наши консультанты обладают опытом комплексных трансформаций бизнеса и корпоративных реструктуризаций и совместно с клиентами разрабатываем необходимые шаги для достижения выдающихся результатов.
        </span>
        <div class="artiqule">
            <img src="../img/articule.png" alt="" class="artiqule-left-top">
            <span>
                В процессе работы мы регулярно проводим сессии с клиентом для более быстрого внедрения антикризисных мер и контроля над их результативностью. Мы поддерживаем вашу компанию на протяжении реализации всей антикризисной программы и получения результатов по ключевым показателям.
            </span>
            <img src="../img/articule.png" alt="" class="artiqule-right-bottom">
        </div>
    </div>
</section>
<section class="block">
  <div class="ant-wave-second"><img src="../img/ant-wave-1.png" alt=""></div>
    <div class="container">
        <div class="more-block">
            <img src="../img/crysis-graph.png" alt="">
            <span> При внедрении новых проектов рекомендуем вам воспользоваться услугой стратегического планирования </span>
            <button class="button-white">Подробнее</button>
            <div class="gradient-blue"></div>
        </div>
    </div>
</section>
<section class="section-text">
    <div class="container">
        <div class="page-text">
            <div class="left-column">
                <img src="../img/crysis-img.png" alt="">
            </div>
            <div class="right-column">
                <span class="section-span">Диапазон наших услуг включает как подготовку отдельных антикризисных мер, управление ликвидностью, так и комплексные программы реструктуризации и трансформации бизнеса, в зависимости от требований клиентов.
                    При оказании услуг мы нацелены на разработку комплексных решений, позволяющих оказать незамедлительный положительный эффект на операционной эффективности, финансовых результатах и организационных проблемах в условиях давления внешних факторов и временных ограничений.
                    </span>
                <span class="section-span">Поддержка наших консультантов может быть оказана как в виде услуг по традиционному антикризисному консалтингу топ-менеджмента, во время которых мы предоставляем инструкции по обнаружению, поэтапному выстраиванию и внедрению необходимых действий и согласованных изменений, нацеленных на выход из кризиса и устойчивую трансформацию компании, так и путем предоставления временных управляющих и менеджмента.</span>
            </div>
        </div>
    </div>
</section>
@endsection
