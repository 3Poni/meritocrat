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
            <a href="{{ route('index') }}"><span>Главная</span></a>
            <img src="../img/arrow.png" alt="">
            <a href="{{ route('partners') }}"><span class="active-link">Партнеры</span></a>
        </div>
        <h1 class="section-h1">Партнеры</h1>
        <div class="partners-buttons">
            <button class="partners-button {{ !empty($tags_ids) ? '' : 'active' }}" onclick="selectService('all')" id="tag_all">Все</button>
            @foreach($tags as $tag)
            <button class="partners-button {{ in_array($tag->id, $tags_ids) ? 'active' : '' }}"
                    onclick="selectService({{ $tag->id }})" id="tag_{{$tag->id}}">{{ $tag->title }}
            </button>
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
@push('script')
    <script>
        var initUrl = '';
        let selectedIds = [];
        let myTimer = false;

        function selectService(id) {
            myTimer = true;
            let clicked = $('#tag_'+id)
            if(id === 'all') {
                $('.partners-button').each(function (item,k) {
                    console.log(k)
                    if(k.getAttribute('id') !== 'tag_all') {
                        k.classList.remove('active')
                    }
                })
                clicked.addClass('active')
                getData('')
                return;
            }else{
                $('#tag_all').removeClass('active')
            }
            if(clicked.hasClass('active')) {
                clicked.toggleClass('active');
                const index = selectedIds.indexOf(id);
                if (index > -1) { // only splice array when item is found
                    selectedIds.splice(index, 1); // 2nd parameter means remove one item only
                }
                initUrl = initUrl.includes(',') ? initUrl.split('=')[0] + '=' + selectedIds.join(',') : initUrl.split('?')[0]
            }else{
                selectedIds.push(id);
                clicked.toggleClass('active')
                initUrl = initUrl.includes('tag_id') ? initUrl + ',' + id : initUrl + '?tag_id=' + id
            }
            console.log(initUrl);
            setTimeout(redirect, 200)
            //
        }

        function redirect() {
            if(myTimer) {
                myTimer = false;
                setTimeout(redirect, 200)
            }else{
                getData(initUrl)
            }

        }

        function getData(url) {
            $.ajax({
                url: "/api/partners" + url,
                type:"GET",
                data:{
                    "_token": "{{ csrf_token() }}",
                },
                success:function(response){
                    let projectsRendered = '';
                    let linksRendered = '';
                    let projectsPoint = $('.partners-items');
                    let paginationPoint = $('.pagination-items');
                    if(response.result.data.length) {
                        console.log(response)
                        response.result.data.forEach(function (item) {
                            projectsRendered += `<img src="${item.img}" alt="партнер">`
                        })
                        response.result.links.forEach(function (item) {
                            if(item.url !== null) {
                                if(item.label === "Next &raquo;") {
                                    linksRendered += `<a href="${item.url.replace('/api', '')}" rel="next" aria-label="Next &amp;raquo;">
                                        <div class="arrow-next">
                                            <img src="../img/icons/right-arrow.png" alt="">
                                        </div>
                                    </a>`
                                }else{
                                    linksRendered += `<a href="${item.url.replace('/api', '')}">
                                    <input type="button" class="${item.active ? 'active' : ''}" value="0${Number(item.label)}">
                                </a>`
                                }

                            }

                        })
                    }
                    projectsPoint.html(projectsRendered)
                    paginationPoint.html(linksRendered)
                },
            });
        }
    </script>
@endpush

