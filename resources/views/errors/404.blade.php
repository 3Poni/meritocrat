@extends('layouts.app')
@section('title')404 - контент не найден@endsection
@section('404')
<main>
    <div class="container">
        <div class="main-title">
            <span class="main-logo animate__animated animate__fadeInUp">MERITOCRAT</span>
            <span class="main-underlogo_text">404 - Контент не найден</span>
            <div class="main-row_button">
                <a href="{{ route('index') }}"><input type="button" value = "На главную" class="button-white"></a>
            </div>
        </div>
        <div class="gradient-orange"></div>
        <div class="gradient-blue"></div>
        <div class="main-vector rotate"><img src="img/main-vector.png" alt=""></div>
    </div>
</main>
@endsection


