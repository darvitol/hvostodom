@extends('layouts.main')
@section('title') @endsection
@section('content')
    <section class="section-margin--small mb-5">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-4 col-md-5">
                    <div class="sidebar-categories">
                        <div class="head">Browse Categories</div>
                        <ul class="main-categories">
                            <li class="common-filter">
                                <form action="#">
                                    <ul>
                                        <li class="filter-list"><input class="pixel-radio" type="radio" id="men"
                                                                       name="brand"><label
                                                for="men">Men<span> (3600)</span></label></li>
                                        <li class="filter-list"><input class="pixel-radio" type="radio" id="women"
                                                                       name="brand"><label for="women">Women<span> (3600)</span></label>
                                        </li>
                                        <li class="filter-list"><input class="pixel-radio" type="radio" id="accessories"
                                                                       name="brand"><label for="accessories">Accessories<span> (3600)</span></label>
                                        </li>
                                        <li class="filter-list"><input class="pixel-radio" type="radio" id="footwear"
                                                                       name="brand"><label for="footwear">Footwear<span> (3600)</span></label>
                                        </li>
                                        <li class="filter-list"><input class="pixel-radio" type="radio" id="bayItem"
                                                                       name="brand"><label for="bayItem">Bay item<span> (3600)</span></label>
                                        </li>
                                        <li class="filter-list"><input class="pixel-radio" type="radio" id="electronics"
                                                                       name="brand"><label for="electronics">Electronics<span> (3600)</span></label>
                                        </li>
                                        <li class="filter-list"><input class="pixel-radio" type="radio" id="food"
                                                                       name="brand"><label
                                                for="food">Food<span> (3600)</span></label></li>
                                    </ul>
                                </form>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-9 col-lg-8 col-md-7">
                    <!-- Start Filter Bar -->
                    <div class="filter-bar d-flex flex-wrap align-items-center">
                        <div class="sorting">
                            <select style="display: none;">
                                <option value="1">Default sorting</option>
                                <option value="1">Default sorting</option>
                                <option value="1">Default sorting</option>
                            </select>
                            <div class="nice-select" tabindex="0"><span class="current">Default sorting</span>
                                <ul class="list">
                                    <li data-value="1" class="option selected">Default sorting</li>
                                    <li data-value="1" class="option">Default sorting</li>
                                    <li data-value="1" class="option">Default sorting</li>
                                </ul>
                            </div>
                        </div>
                        <div class="sorting mr-auto">
                            <select style="display: none;">
                                <option value="1">Show 12</option>
                                <option value="1">Show 12</option>
                                <option value="1">Show 12</option>
                            </select>
                            <div class="nice-select" tabindex="0"><span class="current">Show 12</span>
                                <ul class="list">
                                    <li data-value="1" class="option selected">Show 12</li>
                                    <li data-value="1" class="option">Show 12</li>
                                    <li data-value="1" class="option">Show 12</li>
                                </ul>
                            </div>
                        </div>
                        <div>
                            <div class="input-group filter-bar-search">
                                <input type="text" placeholder="Search">
                                <div class="input-group-append">
                                    <button type="button"><i class="ti-search"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Filter Bar -->
                    <!-- Start Best Seller -->
                    <section class="lattest-product-area pb-40 category-list">
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
                                <div class="col-md-6 col-lg-4">
                                    <div class="card text-center card-product">
                                        <div class="card-product__img wrapper wr mx-auto" style="width: 15rem; height: 15rem">
                                            <img class="card-img mx-auto" src="/img/pets/{{$image}}" alt="">
                                            <ul class="card-product__imgOverlay">
                                                <li>
                                                    <a href="{{route('showPet', $pet->pet_alias)}}"><i class="ti-search"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="card-body">
                                            <h4 class="card-product__title"><a href="{{route('showPet', $pet->pet_alias)}}">{{$pet->name}}</a></h4>
                                            <p><b>Возраст: </b> {{$pet->age}}</p>
                                            <p><b>Пол: </b> {{$pet->sex}}</p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </section>
                    <!-- End Best Seller -->
                </div>
            </div>
        </div>
    </section>
@endsection

