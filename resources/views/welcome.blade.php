@extends('layouts.app')

@section('page-title', 'Home')

@section('homePageMainContent')



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
        <!-- <section class="my-main-2">
            <div class="container">
                <div class="row">
                    
                </div>
                
            </div>
        </section> -->

@endsection
