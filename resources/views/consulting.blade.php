@extends('layouts.app')

@push('head')
    <link rel="stylesheet" href="{{ asset('css/consulting.css') }}">
@endpush
@section('title')Налоговое консультирование@endsection
@section('content')
<section class="consulting-page">
  <div class="container">
    <div class="links">
      <a href="../index.html"><span>Главная</span></a>
      <img src="../img/arrow.png" alt="">
      <a href="../index.html"><span>Услуги</span></a>
      <img src="../img/arrow.png" alt="">
      <a href="../pages/taxes.html"><span>Налогообложение</span></a>
      <img src="../img/arrow.png" alt="">
      <a href="../pages/taxes.html"><span class="active-link">Налоговое консультирование</span></a>
    </div>
    <div class="section-h1">
      Налоговое консультирование
    </div>
    <span class="section-span">
      Умело комбинируя различные системы налогообложения, используя всевозможные лазейки, грамотный специалист может не только минимизировать отчисления государству, но и избежать недопонимания с контролирующими органами.
    </span>
    <span class="section-span">
      Профессионал формирует четкую картину рисков вашей компании и рассчитывает рациональную схему выплат периодических отчислений государству.
    </span>
    <span class="section-span" style="margin-bottom: 0;">
      <b>Кроме этого, он анализирует следующие данные:</b>
    </span>
    <ul class="consulting-list">
      <li> <span>систему учета основных операций предприятия</span></li>
      <li><span>документооборот</span></li>
      <li><span>взаимоотношения с проверяющими органами</span></li>
    </ul>
    <div class="consulting-text">
      <div class="left-column">
        <img src="../img/nalog-pic.png" alt="">
      </div>
      <div class="right-column">
        <span class="section-span">Подобные услуги позволяют предпринимателю получить подробный анализ существующей ситуации в сфере налогообложения. При этом стоит учитывать, что на состояние дел в этой области может влиять не только компетенция сотрудников, но и экономическая ситуация в стране, постоянные изменения в законодательстве и характер сотрудников госорганов.</span>
        <span class="section-span">Чтобы оперативно реагировать на нововведения и корректировки налогового законодательства важно владеть самой актуальной информацией. Налоговый консалтинг от экспертов MERITOCRAT охватывает широкий круг вопросов, в том числе узкоспециализированных, и всегда учитывает специфику бизнеса клиента.</span>
        <span class="section-span">Налоговые специалисты MERITOCRAT предлагают профессиональную поддержку в области налогообложения, которая позволит компании избежать проблем с контролирующими органами и минимизировать возможные штрафы и санкции.
          Проектная команда обеспечит комплексный подход к налоговой оптимизации в рамках действующего законодательства, сократив тем самым налоговые риски в будущем, и к снижению налоговой нагрузки на бизнес клиента.</span>
        <span class="section-span">
          В нашем штате — профессиональные юристы, бухгалтеры, которые хорошо изучили налоговое законодательство РФ и имеют за плечами многолетний опыт практической работы.
          </span>
      </div>
    </div>
    <div class="consulting-text second-block">
      <div class="left-column">
        <h1 class="consulting-h1">Результат</h1>
        <div class="consulting-items">
          <div class="consulting-item">
            <h1>01</h1>
            <span>Выявление и минимизация налоговых рисков</span>
          </div>
          <div class="consulting-item">
            <h1>02</h1>
            <span>Исключение вероятности налоговых доначислений</span>
          </div>
          <div class="consulting-item">
            <h1>03</h1>
            <span>Правильная подготовка к визиту налоговиков</span>
          </div>
          <div class="consulting-item">
            <h1>04</h1>
            <span>Конфиденциальность информации</span>
          </div>
          <div class="consulting-item">
            <h1>05</h1>
            <span>Получение информации о законных методах, которые исключат любые налоговые риски.</span>
          </div>
        </div>
      </div>
      <div class="right-column">
        <img src="../img/nalog-pic-2.png" alt="">
      </div>
    </div>
  </div>
</section>
@endsection
