@extends('layouts.main')
@section('title')Главная страница @endsection
@section('content')

    {{--Ищут дом--}}
    <section class="section-margin calc-60px">
        <div class="container">
            <div class="section-intro pb-60px">
                <h2><a href="#" style="color: #222 !important;">
                        <span class="section-intro__style">Ищут</span> дом</h2>
                    </a>

            </div>
            <div class="row">
                @foreach($pets as $pet)
                    @php
                        $image = '';
                        if (count($pet->images)>0) {
                            $image = $pet->images[0]['img'];
                        } else {
                            $image = 'no_image.png';
                        }
                    @endphp
                    <div class="col-md-6 col-lg-4 col-xl-3">
                        <div class="card text-center card-product">
                            <div class="card-product__img">
                                <img class="card-img" src="/img/pets/{{$image}}" alt="{{$pet->name}}">
                                <ul class="card-product__imgOverlay">
                                    <li>
                                        <a href="{{route('showPet', $pet->pet_alias)}}"><i class="ti-search"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="card-body">
                                <h4 class="card-product__title"><a href="{{route('showPet', $pet->pet_alias)}}">{{$pet->name}}</a></h4>
                                <p class="card-product__price">Возраст: {{$pet->age}}</p>
                            </div>
                        </div>
                    </div>

                @endforeach
            </div>
        </div>
    </section>
    {{--Ищут дом--}}

    {{--Новости--}}
    <section class="blog">
        <div class="container">
            <div class="section-intro pb-60px">
                <h2>
                    <a href="#" style="color: #222 !important;">
                        <span class="section-intro__style">Новости</span></h2>
                    </a>
            </div>

            <div class="row">
                @foreach($news as $article)
                    @php
                        $image = '';
                        if (count($article->images)>0) {
                            $image = $article->images[0]['img'];
                        } else {
                            $image = 'no_image.png';
                        }
                    @endphp
                    <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
                        <div class="card card-blog">
                            <div class="card-blog__img">
                                <img class="card-img rounded-0" src="/img/home/{{$image}}" alt="">
                            </div>
                            <div class="card-body">
                                <h4 class="card-blog__title">
                                    <a href="single-blog.html">
                                        {{$article->title}}
                                    </a>
                                </h4>
                                <p>{{$article->short_description}}</p>
                                {{--                                <p>Let one fifth i bring fly to divided face for bearing divide unto seed. Winged divided light Forth.</p>--}}
                                <a class="card-blog__link" href="#">Read More <i class="ti-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    {{--Новости--}}

    {{--Истории--}}
    <section class="section-margin calc-60px">
        <div class="container">
            <div class="section-intro pb-60px">
                <h2><a href="#" style="color: #222 !important;">
                        Счастливые <span class="section-intro__style">истории</span></h2>
                </a>
            </div>
            <div class="owl-carousel owl-theme owl-loaded owl-drag" id="bestSellerCarousel">
                <div class="owl-stage-outer">
                    <div class="owl-stage"
                         style="transform: translate3d(-1080px, 0px, 0px); transition: all 0s ease 0s; width: 4320px;">
                        @foreach($stories as $story)
                            @php
                                $image = '';
                                if (count($story->images)>0) {
                                    $image = $story->images[0]['img'];
                                } else {
                                    $image = 'no_image.png';
                                }
                            @endphp
                            <div class="owl-item" style="width: 240px; margin-right: 30px;">
                                <div class="card text-center card-product">
                                    <div class="card-product__img">
                                        <img class="img-fluid" src="/img/stories/{{$image}}" alt="">
                                        <ul class="card-product__imgOverlay">
                                            <li>
                                                <button><i class="ti-search"></i></button>
                                            </li>
                                            <li>
                                                <button><i class="ti-heart"></i></button>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="card-body">
                                        <p>Decor</p>
                                        <h4 class="card-product__title"><a href="single-product.html">Room Flash
                                                Light</a>
                                        </h4>
                                        <p class="card-product__price">$150.00</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="owl-nav">
                    <button type="button" role="presentation" class="owl-prev"><i class="ti-arrow-left"></i></button>
                    <button type="button" role="presentation" class="owl-next"><i class="ti-arrow-right"></i></button>
                </div>
                <div class="owl-dots disabled"></div>
            </div>
        </div>
    </section>
    {{--Истории--}}


@endsection
