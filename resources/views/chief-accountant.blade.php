@extends('layouts.app')

@push('head')
    <link rel="stylesheet" href="{{ asset('css/accounting-support.css') }}">
    <link rel="stylesheet" href="{{ asset('css/chief-accounting.css') }}">
@endpush
@section('title')Проекты@endsection
@section('content')
<section class="accounting-support">
    <div class="container">
        <div class="links">
            <a href="../index.html"><span>Главная</span></a>
            <img src="../img/arrow.png" alt="">
            <a href="../pages/services.html"><span>Услуги </span></a>
            <img src="../img/arrow.png" alt="">
            <a href=""><span>Бухгалтерский учет</span></a>
            <img src="../img/arrow.png" alt="">
            <a href=""><span class="active-link">Выполнение функции главного бухгалтера</span></a>
        </div>
        <h1 class="section-h1">Выполнение функции главного бухгалтера</h1>
        <span class="section-span">Функция главного бухгалтера поможет максимально быстро решить проблему нехватки кадров. Передайте решение своих проблем профессионалам. Функции главного бухгалтера берет себе или совместитель, или новый сотрудник, которого требуется обучить и ввести в курс дел. Но не всегда на это есть время. Кроме того, есть риск, что новый работник не справится с возложенными обязанностями, особенно если отсутствие главного бухгалтера совпадет с началом отчетного периода, когда нагрузка на бухгалтерию возрастает в разы. Без помощи опытного главбуха подготовить и вовремя сдать отчеты очень сложно, а значит, компании могут грозить штрафы от контролирующих органов.
        </span>
        <span class="section-span">Компания MERITOCRAT предлагает аутсорсинг функции главного бухгалтера и комплексное бухгалтерское сопровождение «под ключ». Мы также возьмем на себя расчет заработной платы и кадровый учет, расчет и оптимизацию налогов, общение с налоговой, ведение архива документов.
        </span>
        <span class="section-span">Новый главный бухгалтер, который приходит на фирму, не несет никакой ответственности за все ошибки и недочеты в работе с документами, которые были допущены прежним сотрудником. Наши юристы оказывают помощь в оформлении акта приема-передачи, учитывая малейшие тонкости ведения бизнеса именно вашей компании. Мы также можем в соответствующей форме уведомить о смене главного бухгалтера внебюджетные фонды, банки, налоговые органы и прочие организации и ведомства.
        </span>
        <div class="accounting-support-columns">
            <div class="left-column">
                <img src="../img/chief-account.png" alt="">
            </div>
            <div class="right-column">
                <span class="section-span">
                    Мы предлагаем качественный бухучет, который позволит содержать в порядке всю документацию и отчеты, а также оптимизировать расходы компании. Стоимость такого бухучета будет зависеть от списка требующихся вам услуг, вида деятельности компании и ее выручки, от количества сотрудников.
                </span>
                <span class="section-span">
                    Одним из основных принципов нашей работы является принцип фиксированной цены. Поэтому, пока продолжается декрет главного бухгалтера, вы можете быть спокойны за свои затраты, они не будут расти и увеличиваться. Это будет дешевле, чем пригласить бухгалтера со стороны, удобнее, чем напрягать дополнительной работой руководителя организации, и безопаснее, чем поручить обязанности главбуха рядовым сотрудникам.
                </span>
            </div>
        </div>
        <h1 class="section-small-h1">Почему аутсорсинг это выгодно?</h1>
        <div class="table-benefits">
          <div class="item">
            <div class="column">
              <div class="row"><h1>Статья затрат</h1></div>
              <div class="row"><span>Заработная плата сотрудников HR-департамента (включая налоги, премию, социальные отчисления, материальную помощь и иные выплаты)</span></div>
              <div class="row">Страховые взносы с заработной платы</div>
              <div class="row">Затраты на учетную систему и ее поддержку</div>
              <div class="row">Накладные расходы на отдел кадров (аренда рабочих мест, офисные расходы, доступ к базам резюме, платные объявления и др)</div>
              <div class="row">Услуги аутсорсинга</div>
              <div class="row"><h1>Итого</h1></div>
            </div>
          </div>
          <div class="item">
            <div class="column">
              <div class="row"><h1>% от общих затрат на содержание бухгалтерии</h1></div>
              <div class="row"><span>55%</span></div>
              <div class="row"><span>30%</span></div>
              <div class="row"><span>10%</span></div>
              <div class="row"><span>5%</span></div>
              <div class="row"><span>0%</span></div>
              <div class="row"><h1>100%</h1></div>
            </div>
          </div>
          <div class="item">
            <div class="column">
              <div class="row"><h1>% эквивалент стоимость услуг аутсорсинга</h1></div>
              <div class="row"><span>0%</span></div>
              <div class="row"><span>0%</span></div>
              <div class="row"><span>0%</span></div>
              <div class="row"><span>0%</span></div>
              <div class="row"><span>70%</span></div>
              <div class="row"><h1>70%</h1></div>
            </div>
          </div>
        </div>
        <div class="table-ecomomy">
          <h1>
            Экономия до 70%
          </h1>
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
<script src="{{ asset('js/chief-accounting.js') }}"></script>
@endpush
