@extends('layouts.app')

@push('head')
    <meta name="description" content="{{$page->description}}">
    <meta name="keywords" content="{{$page->keywords}}">
    <link rel="stylesheet" href="{{ asset('css/accounting-support.css') }}">
@endpush
@section('title'){{$page->title}}@endsection
@section('content')

<section class="accounting-support">
    <div class="container">
        <div class="links">
            <a href="/"><span>Главная</span></a>
            <img src="../img/arrow.png" alt="">
            <a href=""><span class="active-link">{{$page->header}}</span></a>
        </div>
        <h1 class="section-h1">{{$page->header}}</h1>
        @php
            echo $page->content
        @endphp
    </div>
</section>
@endsection

