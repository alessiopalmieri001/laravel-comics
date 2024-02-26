@extends('layouts.app')

@section('page-title', 'Home')

@section('homePageMainContent')
@php
$Object =
[
    [
        'immagine'=> '/img/buy-comics-digital-comics.png',
        'name' => 'DIGITAL COMICS'
    ],
    [
        'immagine'=> '/img/buy-comics-merchandise.png',
        'name' => 'DC MERCHANDISE'
    ],
    [
        'immagine'=> '/img/buy-comics-subscriptions.png',
        'name' => 'SUBSCRIPTION'
    ],
    [
        'immagine'=> '/img/buy-comics-shop-locator.png',
        'name' => 'COMINC SHOP LOCATOR'
    ],
    [
        'immagine'=> '/img/buy-dc-power-visa.svg',
        'name' => 'DC POWER VISA'
    ],

];
@endphp
<!-- <h1>
    main
</h1>
<ul>
    @foreach ($comics as $comic)
    <li>
        {{$comic['title']}}
    </li>
    @endforeach
</ul> -->

<section class="my-main">
            <div class="jumbotron">
                <div class="container">
                    <button class="generalButton">
                        CURRENT SERIES
                    </button>
                </div>
            </div>
            <div class="container">
                <div class="seriesContainer">
                    @foreach ($comics as $comic)
                    <div class="single-product">
                        <div>
                            <img src="{{$comic['thumb']}}" alt="{{$comic['title']}}">
                        </div>
                        <h2>
                            {{$comic['title']}}
                        </h2>

                    </div>
                    @endforeach
                </div>
                <div>
                    <button class="button-main">
                        LOAD MORE
                    </button>
                </div>
            </div>
        </section>
        <section class="my-main-2">
            <div class="container">
                <div class="row">
                    @foreach ($Object as $obj)
                    <div class="col-1-5">
                        <div>
                            <img src="{{$obj['immagine']}}" alt="{{$obj['name']}}">
                        </div>
                        <div>
                            {{$obj['name']}}
                        </div>
                    </div>
                    @endforeach
                </div>
                
            </div>
        </section>

@endsection
