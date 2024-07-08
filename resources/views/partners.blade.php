@extends('layouts.app')

@push('head')
    <link rel="stylesheet" href="{{ asset('css/partners-page.css') }}">
    <link rel="stylesheet" href="{{ asset('css/pagination.css') }}">
@endpush
@section('title')Партнеры@endsection
@section('content')
<section class="partners-page">
    <div class="partners-graph"><img src="../img/partners-graph.png" alt=""></div>
    <div class="partners-graph_2"><img src="../img/partners-graph-1.png" alt=""></div>
    <div class="container">
        <div class="links">
            <a href="../index.html"><span>Главная</span></a>
            <img src="../img/arrow.png" alt="">
            <a href="../index.html"><span class="active-link">Партнеры</span></a>
        </div>
        <h1 class="section-h1">Партнеры</h1>
        <div class="partners-buttons">
            <button class="partners-button">Все</button>
            @foreach($tags as $tag)
            <button class="partners-button">{{ $tag->title }}</button>
            @endforeach
        </div>
        <div class="partners-items">
            @foreach($partners as $partner)
            <img src="{{ $partner->img }}" alt="">
            @endforeach
        </div>
        {{ $partners->links() }}
    </div>
</section>
@endsection

