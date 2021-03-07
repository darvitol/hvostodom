@extends('layouts.main')
@section('title') @endsection
@section('content')
    <div class="product_image_area">
        <div class="container">
            <div class="row s_product_inner">
                <div class="col-lg-6">
                    <div class="owl-carousel owl-theme s_Product_carousel owl-loaded owl-drag">
                        <div class="owl-stage-outer">
                            <div class="owl-stage"
                                 style="transform: translate3d(-1020px, 0px, 0px); transition: all 0s ease 0s; width: 2550px;">
                                @php
                                    $image = '';
                                        if(count($pets->images)>0) {
                                            $image = $pets->images[0]['img'];
                                        }
                                        else {
                                            $image = 'no_image.png';
                                        }
                                @endphp
                                @if($image == 'no_image.png')
                                @else
                                    @foreach($pets->images as $img)
                                        @if($loop->first)
                                            <div class="owl-item active" style="width: 510px;">
                                                <div class="single-prd-item">
                                                    <img class="img-fluid" src="img/pets/{{$img['img']}}" alt="">
                                                </div>
                                            </div>
                                        @else
                                        @endif
                                            <div class="owl-item" style="width: 510px;">
                                                <div class="single-prd-item wrapper wr">
                                                    <img class="img-fluid" src="img/pets/{{$img['img']}}" alt="">
                                                </div>
                                            </div>
                                    @endforeach
                                @endif
                            </div>
                        </div>
                        <div class="owl-nav disabled">
                            <button type="button" role="presentation" class="owl-prev"><span
                                    aria-label="Previous">‹</span></button>
                            <button type="button" role="presentation" class="owl-next"><span aria-label="Next">›</span>
                            </button>
                        </div>
                        <div class="owl-dots disabled"></div>
                    </div>
                </div>
                <div class="col-lg-5 offset-lg-1">
                    <div class="s_product_text">
                        <h3>{{$pets->name}}</h3>
                        <ul class="list">
                            <li><a class="active" href="#"><b>Пол:</b> {{$pets->sex}}</a></li>
                            <li><a href="#"><b>Возраст:</b> {{$pets->age}}</a></li>
                        </ul>
                        <p style="word-break: break-word">{{$pets->description}}</p>
                        <a class="button primary-btn" href="#">Забрать к себе</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
