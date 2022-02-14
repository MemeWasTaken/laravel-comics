@extends('guest.layout.base')

@section('documentTitle')
  {{$nomePagina}}
@endsection

@section('content')
    <main class="main-comic">

        <div class="current-comic">
            <div class="container-comic">
                 <div class="overlay-thumb">
                     <span class="comic-book">Comic Book</span>
                     <span class="comic-gallery">View Gallery</span>
                     <img class="current-thumb" src="{{ $comic['thumb'] }}" alt="">
                 </div>
            </div>
        </div>
        
        <div class="row-desc">
            <div class="comic-desc">
                <h1 class="title-comic"> {{ $comic['title'] }} </h1>
    
                <div class="green-box">
                    <div class="left">
                        <div class="price">
                            <span class="price-text">U.S. Price:</span>
                            <span class="dollar-price"> {{$comic['price']}} </span>
                        </div>
                        <span class="available"> Available </span>
                    </div>
                    <div class="right">
                        <span class="check-av">Check Availability</span>
                    </div>
                </div>
    
                <p class="par-comic">
                    {{ $comic['description'] }}
                </p>
    
            </div>

            <div class="advertisement">
                <h3 class="adv-text"> Advertisement </h3>
                <img src=" {{asset('img/adv.jpg')}} " alt="">
            </div>
        </div>

        <div class="row-info">
            <div class="comic-info">
                <div class="talent-col">
                    <h2 class="talent-text"> Talent </h2>
                    <div class="art-by">
                        <div class="left-art">
                            Art by:
                        </div>
                        <div class="right-art">
                            @foreach ($comic['artists'] as $artist)
                                @if ($loop->last)
                                    <span> <a href=""> {{ $artist }}</a> </span>
                                @else
                                    <span> <a href=""> {{ $artist }}</a>, </span>
                                @endif
                            @endforeach
                        </div>
                    </div>
                    <div class="written-by">
                        <div class="left-wrt">
                            Written by:
                        </div>
                        <div class="right-wrt">
                            @foreach ($comic['writers'] as $writer)
                                @if ($loop->last)
                                    <span> <a href=""> {{ $writer }}</a> </span>
                                @else
                                    <span> <a href=""> {{ $writer }}</a>, </span>
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="specs-col">
                    <h2 class="specs-text"> Specs </h2>

                    <div class="series">
                        <div class="left-ser">
                            Series:
                        </div>
                        <div class="right-ser">
                            <a href=""> {{ $comic['series'] }} </a>
                        </div>
                    </div>

                    <div class="us-price">
                        <div class="left-prc">
                            U.S. Price:
                        </div>
                        <div class="right-prc">
                            {{ $comic['price']}}
                        </div>
                    </div>

                    <div class="on-sale-date">
                        <div class="left-osd">
                            On Sale Date: 
                        </div>
                        <div class="right-art">
                            {{ date_format(date_create($comic['sale_date']),'M d Y') }}
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>
@endsection