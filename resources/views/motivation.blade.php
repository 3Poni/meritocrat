@extends('layouts.app')
@push('head')
    <link rel="stylesheet" href="{{ asset('css/mottivation-page.css') }}">
@endpush
@section('title')Система мотивации персонала@endsection
@section('content')
    <section class="motivation">
        <div class="container">
            @include('layouts.breadcrumbs')
            <h1 class="section-h1">Система мотивации персонала</h1>
            <span class="section-span">Специалисты MERITOCRAT разрабатывают четкие критерии для оценки эффективности работы персонала и схемы мотивации — как отдельных менеджеров, так и сотрудников подразделений. Эта услуга особенно востребована в компаниях, где есть острая необходимость в объективной оценке работы менеджеров среднего и высшего звена и их оптимального поощрения. В итоге — справедливое распределение финансовых премий и повышений по карьерной лестнице.</span>
            <span class="section-span">Особенное внимание мы уделяем развитию руководителей, поскольку считаем это одним из главных стимулирующих факторов. Именно личность руководителя, способного вселить оптимизм, оценить потенциал каждого сотрудника и вовремя поощрить за проделанную работу, является лучшим моральным стимулом. Вот почему разработка системы мотивации персонала в компании специалистами MERITOCRAT всегда осуществляется с учетом этого фактора.</span>
        </div>
    </section>
    <section class="types-motivation">
        <div class="container">
            <h1>Виды мотивации</h1>
            <div class="items-motivation">
                <div class="first-row-items">
                    <div class="item">
                        <div class="first-row">
                            <h1 class="number section-small-h1">01</h1>
                            <h1 class="head-text"></h1>
                        </div>
                        <div class="item-span"></div>
                    </div>
                    <div class="item">
                        <div class="first-row">
                            <h1 class="number section-small-h1">02</h1>
                            <h1 class="head-text"></h1>
                        </div>
                        <div class="item-span"></div>
                    </div>
                </div>
                <div class="second-row-items">
                    <div class="item">
                        <div class="first-row">
                            <h1 class="number section-small-h1">03</h1>
                            <h1 class="head-text"></h1>
                        </div>
                        <div class="item-span"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@push('script')
    <script src="{{ asset('js/dropdown-projects.js') }}"></script>
    <script src="{{ asset('js/dropdown-vacancy.js') }}"></script>
@endpush
