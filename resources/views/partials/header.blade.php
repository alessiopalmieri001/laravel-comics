@php

$navBar = 
    [
        [
            'link' =>'CHARACTERS',
            'href' => '#'
        ],
        [
            'link' =>'COMICS',
            'href' => '#'
        ],
        [
            'link' =>'MOVIES',
            'href' => '#'
        ],
        [
            'link' =>'TV',
            'href' => '#'
        ],
        [
            'link' =>'GAMES',
            'href' => '#'
        ],
        [
            'link' =>'COLLECTIBLES',
            'href' => '#'
        ],
        [
            'link' =>'VIDEOS',
            'href' => '#'
        ],
        [
            'link' =>'FANS',
            'href' => '#'
        ],
        [
            'link' =>'NEWS',
            'href' => '#'
        ],
        [
            'link' =>'SHOP',
            'href' => '#'
        ],
    ];


@endphp

<header>
    <div class="container">
            <div class="nav-bar">
            <section>
                <img src="{{asset('/img/dc-logo.png')}}" alt="logodc">
            </section>
            <section>
                
                <ul>
                @foreach ($navBar as $nav)
                    <li>
                        <a href="{{$nav['href']}}">
                            {{$nav['link']}}
                        </a>
                    </li>
                    @endforeach
                </ul>
                
            </section>
        </div>
    </div>
</header>
