@extends('layouts.app')

@push('head')
    <link rel="stylesheet" href="{{ asset('css/consulting.css') }}">
@endpush
@section('title'){{ $direction->title }}@endsection
@section('content')
<section class="consulting-page">
  <div class="container">
    <div class="links">
      <a href="{{ route('index') }}"><span>Главная</span></a>
      <img src="../img/arrow.png" alt="">
      <a href="{{ route('services') }}"><span>Услуги</span></a>
      <img src="../img/arrow.png" alt="">
      <a href="{{ route('service',$direction->service->url) }}"><span>{{ $direction->service->header }}</span></a>
      <img src="../img/arrow.png" alt="">
      <a href="{{ route('direction',$direction->url) }}"><span class="active-link">{{ $direction->header }}</span></a>
    </div>
    <div class="section-h1">
        {{ $direction->title }}
    </div>
    <span class="section-span">
        {!! $direction->content  !!}
    </span>
    @if(!empty($direction->content2))
    <div class="consulting-text">
      <div class="left-column">
        <img src="../img/nalog-pic.png" alt="">
      </div>
      <div class="right-column">
          {!! $direction->content2  !!}
      </div>
    </div>
    @endif
    @if(!empty($direction->result))
    <div class="consulting-text second-block">
      <div class="left-column">
        <h1 class="consulting-h1">Результат</h1>
        <div class="consulting-items">
            @foreach($direction->result as $key => $result)
                <div class="consulting-item">
                    <h1>{{ $key + 1 }}</h1>
                    <span>{{ $result }}</span>
                </div>
            @endforeach
        </div>
      </div>
      <div class="right-column">
        <img src="../img/nalog-pic-2.png" alt="">
      </div>
    </div>
    @endif
  </div>
</section>
@endsection
