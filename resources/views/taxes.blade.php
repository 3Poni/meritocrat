@extends('layouts.app')

@push('head')
    <link rel="stylesheet" href="{{ asset('css/taxes-page.css') }}">
@endpush
@section('title')Налогообложение@endsection
@section('content')
<section class="taxes-page">
        <div class="taxes-graph"><img src="../img/taxes-graph.png" alt=""></div>
        <div class="taxes-graph_1"><img src="../img/taxes-graph_1.png" alt=""></div>
        <div class="taxes-graph_2"><img src="../img/taxes-graph_2.png" alt=""></div>
        <div class="container">
            <div class="links">
                <a href="../index.html"><span>Главная</span></a>
                <img src="../img/arrow.png" alt="">
                <a href="../index.html"><span>Услуги</span></a>
                <img src="../img/arrow.png" alt="">
                <a href="../pages/taxes.html"><span class="active-link">Налогообложение</span></a>
            </div>
            <div class="taxes-text">
                <h1 class="section-h1">Налогообложение</h1>
                <span class="taxes-span">Мониторинг изменений в законодательстве позволяет нам своевременно предоставлять клиентам актуальные консультации и помогать в решении сложных вопросов, возникающих при ведении бизнеса. Мы изучаем различные методы эффективного распределения налоговой нагрузки клиентов и минимизации тех рисков, с которыми они могут столкнуться в будущем.
                </span>
                <span class="taxes-span">
                    <span class="logo-text">MERITOCRAT</span>  предлагает комплексные консультации в области налогообложения. В него входит аудит деятельности вашего предприятия, а также выработка мер и инструкций по устранению ошибок, рисков и чрезмерных расходов в бухгалтерской, хозяйственной и договорной системах учета компании. Наши специалисты в области налогового права и учета быстро и четко сформируют реальную картину дел на вашем предприятии и помогут найти решения для любых проблем в области налогообложения. Эти факты подтверждены многолетним опытом сотрудников и положительными отзывами благодарных клиентов.
                </span>
                <span class="taxes-span">
                    Сотрудники проводят качественный налоговый аудит клиента, проанализировав его деятельность, отрасль работы и существующий документооборот. Далее на основе полученной информации формируется отчет с подробными инструкциями по устранению рисков и приведению бухгалтерской и договорной документации в соответствие с новой политикой компании в области налогообложения.
                </span>
                <span class="taxes-span">
                    Квалифицированная помощь специалистов <span class="logo-text">MERITOCRAT</span> — простой способ избежать проблем с контролирующими органами и оградить предприятие от непредвиденных штрафов или более серьезных санкций. Налоговое консультирование поможет руководству компании сократить издержки на поиск и содержание штата опытных сотрудников с высокой оплатой их труда, а также затраты на постоянное повышение квалификации в связи с выходом очередных изменений в законодательстве.
                </span>
                <span class="taxes-span">
                    Специалисты проводят налоговые консультации для юридических лиц, помогая в решении серьезных вопросов, связанных с налогами. Мы помогаем досконально разобраться в существующей проблеме, сформировать правильную правовую позицию с составлением подробного и четкого плана действий.
                </span>
                <span class="taxes-span">
                    Для своих клиентов мы предлагаем не просто консультации, а полноценные рекомендации по управлению бизнесом, таким образом, чтобы он был максимально прибыльным и действовал в соответствии с законодательством. Такие услуги помогут избежать ненужного внимания со стороны налоговых органов, хорошо подготовиться к выездным проверкам, правильно распределять нагрузку на бюджет компании и самое главное — подобрать законную схему уплаты налогов с минимальными издержками.
                </span>
                <span class="taxes-span">
                    С нашей помощью вы получите в глазах контролирующих органов репутацию исполнительного налогоплательщика.
                </span>
                <h1 class="section-h1">Направления</h1>
                <div class="taxes-items">

                    <a href="">
                        <div class="taxes-button">
                            <span>Налоговое консультирование</span>
                            <span class="taxes-svg"></span>
                        </div>
                    </a>
                    <a href="">
                        <div class="taxes-button">
                            <span>Сокращение налоговых штрафов</span>
                            <span class="taxes-svg"></span>
                        </div>
                    </a>
                    <a href="">
                        <div class="taxes-button">
                            <span>Разработка правовых и налоговых схем деятельности</span>
                            <span class="taxes-svg"></span>
                        </div>
                    </a>
                    <a href="">
                        <div class="taxes-button">
                            <span>Составление и сдача налоговой отчетности</span>
                            <span class="taxes-svg"></span>
                        </div>
                    </a>
                    <a href="">
                        <div class="taxes-button">
                            <span>Налоговое планирование</span>
                            <span class="taxes-svg"></span>
                        </div>
                    </a>
                    <a href="">
                        <div class="taxes-button">
                            <span>Налоговая оптимизация</span>
                            <span class="taxes-svg"></span>
                        </div>
                    </a>
                    <a href="">
                        <div class="taxes-button">
                            <span>Возмещение НДС</span>
                            <span class="taxes-svg"></span>
                        </div>
                    </a>
                    <a href="">
                        <div class="taxes-button">
                            <span>Разработка методологии налогового учета</span>
                            <span class="taxes-svg"></span>
                        </div>
                    </a>
                    <a href="">
                        <div class="taxes-button">
                            <span>Постановка налогового учета</span>
                            <span class="taxes-svg"></span>
                        </div>
                    </a>
                    <a href="">
                        <div class="taxes-button">
                            <span>Функция "внутренний ревизор"</span>
                            <span class="taxes-svg"></span>
                        </div>
                    </a>
                    <a href="">
                        <div class="taxes-button">
                            <span>Представительство в контролирующих органах</span>
                            <span class="taxes-svg"></span>
                        </div>
                    </a>
                    <a href="">
                        <div class="taxes-button">
                            <span>Консультационно-методологическое сопровождение операций</span>
                            <span class="taxes-svg"></span>
                        </div>
                    </a>
                    <a href="">
                        <div class="taxes-button">
                            <span>Налоговые споры</span>
                            <span class="taxes-svg"></span>
                        </div>
                    </a>
                    <a href="">
                        <div class="taxes-button">
                            <span>Экспертиза текущей системы налогового учета</span>
                            <span class="taxes-svg"></span>
                        </div>
                    </a>
                    <a href="">
                        <div class="taxes-button">
                            <span>Досудебное урегулирование налоговых споров</span>
                            <span class="taxes-svg"></span>
                        </div>
                    </a>
                    <a href="">
                        <div class="taxes-button">
                            <span>Консультационно-обучающие мероприятия для сотрудников</span>
                            <span class="taxes-svg"></span>
                        </div>
                    </a>
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
    <script src="{{ asset('js/strategic-slider.js') }}"></script>
@endpush
