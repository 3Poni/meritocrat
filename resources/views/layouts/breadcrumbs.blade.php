<div class="links">
    <a href="../index.html"><span>Главная</span></a>
    <img src="../img/arrow.png" alt="">
    <a href="{{ route('services') }}"><span>Услуги </span></a>
    <img src="../img/arrow.png" alt="">
    <a href="{{ route('service', $direction->service->url) }}"><span>{{ $direction->service->header }}</span></a>
    <img src="../img/arrow.png" alt="">
    <a href="{{ route('direction', !empty($direction->url) ? $direction->url : $direction->url_static) }}"><span class="active-link">{{ $direction->header }}</span></a>
</div>
