@extends('layouts.app')
@push('head')
    <link rel="stylesheet" href="{{ asset('css/outsourcing.css') }}">
@endpush
@section('title')
    Проекты
@endsection
@section('content')
    <section class="outsourcing-page">
        <div class="container">
            <div class="links">
                <a href="{{ route('index') }}"><span>Главная</span></a>
                <img src="../img/arrow.png" alt="">
                <a href="{{ route('services') }}"><span>Услуги</span></a>
                <img src="../img/arrow.png" alt="">
                <a href="{{ route('service',$direction->service->url) }}"><span>{{ $direction->service->header }}</span></a>
                <img src="../img/arrow.png" alt="">
                <a href="{{ route('direction',$direction->url) }}"><span
                        class="active-link">{{ $direction->header }}</span></a>
            </div>
            <h1 class="section-h1">{{ $direction->header }}</h1>
            {{ $direction->content }}
            <div class="outsourcing-text">
                <div class="left-column">
                    <img src="../img/outsource.png" alt="">
                </div>
                <div class="right-column">
                    {{ $direction->content2 }}
                </div>
            </div>
            @if(!empty($direction->result))
                <div class="outsourcing-text">
                    <div class="left-column">
                        <div class="text-item">

                            <h1>Услуги</h1>
                            <ul>
                                @foreach($direction->result as $res)
                                    <li>{{ $res }}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <div class="right-column">
                        <img src="../img/outsource-2.png" alt="">
                    </div>
                </div>
        </div>
        @endif
        <div class="container">
            @if(!empty($direction->stages))
                <div class="outsourcing-items">
                    <h1>Этапы</h1>
                    <div class="outsourcing-items-row">
                        @foreach($direction->stages as $key => $stage)
                            <div class="outsourcing-item">
                                <div class="item-number">
                                    {{ $key + 1 }}
                                </div>
                                <div class="item-span">
                                    <span>{{ $stage }}</span>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            @endif
        </div>
        @if(!empty($direction->result2))
            <div class="outsourcing-resource">
                <div class="container">
                    <h1>Результат</h1>
                    <div class="resource-text">
                        <div class="left-column">
                            @foreach($direction->result2 as $key => $res2)
                                <div class="outsource-item">
                                    <h1>{{ $key }}</h1>
                                    <div class="item-text">
                                        {{ $res2 }}
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <div class="right-column">
                            <img src="../img/outsource-3.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
            @endif
            </div>
    </section>
@endsection
@push('script')
    <script src="{{ asset('js/outsource-slider.js') }}"></script>
@endpush
