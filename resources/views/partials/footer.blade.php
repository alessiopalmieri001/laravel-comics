@php
    $dcComics =
    [
        [
            'link'=>'Characters',
            'href'=>'#',
        ],
        [
            'link'=>'Comics',
            'href'=>'#',
        ],
        [
            'link'=>'Movies',
            'href'=>'#',
        ],
        [
            'link'=>'TV',
            'href'=>'#',
        ],
        [
            'link'=>'Games',
            'href'=>'#',
        ],
        [
            'link'=>'Videos',
            'href'=>'#',
        ],
        [
            'link'=>'News',
            'href'=>'#',
        ],
    ];
    $shop =
    [
        [
            'link'=>'Shop DC',
            'href'=>'#',
        ],
        [
            'link'=>'Shop DC Collection',
            'href'=>'#',
        ],
    ];
    $dc =
    [
        [
            'link'=>'Term Of Use',
            'href'=>'#',
        ],
        [
            'link'=>'Privacy policy',
            'href'=>'#',
        ],
        [
            'link'=>'ad choise',
            'href'=>'#',
        ],
        [
            'link'=>'SAdvertisng',
            'href'=>'#',
        ],
        [
            'link'=>'Subscriptions',
            'href'=>'#',
        ],
        [
            'link'=>'talent workshops',
            'href'=>'#',
        ],
        [
            'link'=>'CPSC Certification',
            'href'=>'#',
        ],
        [
            'link'=>'rating',
            'href'=>'#',
        ],
        [
            'link'=>'Shop help',
            'href'=>'#',
        ],
        [
            'link'=>'contact us',
            'href'=>'#',
        ],
        
    ];
    $sites =
    [
        [
            'link'=>'DC',
            'href'=>'#'
        ],
        [
            'link'=>'Mad magazine',
            'href'=>'#'
        ],
        [
            'link'=>'DC kids',
            'href'=>'#'
        ],
        [
            'link'=>'DC universe',
            'href'=>'#'
        ],
        [
            'link'=>'DC power visa',
            'href'=>'#'
        ],
        

    ]
    

@endphp

<footer>
        <section class="bg-footer-top">
            <div class="container">
                <div class="col">
                    <div>
                        <h4>
                            DC COMICS
                        </h4>
                        <ul>
                            @foreach ($dcComics as $dc)
                            <li v-for="elem in dcComics">
                                <a href="{{$dc['href']}}">
                                    {{$dc['link']}}
                                </a>
                            </li>
                            @endforeach
                        </ul>
                        <h4>
                            SHOP
                        </h4>
                        <ul>
                            @foreach ($shop as $sh)
                            <li v-for="elem in shop">
                                <a href="{{$sh['href']}}">
                                    {{$sh['link']}}
                                </a>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                    <div>
                        <h4>
                            DC
                        </h4>
                        <ul>
                            @foreach ($dc as $dc)
                            <li v-for="elem in dc">
                                <a href="{{$dc['href']}}">
                                    {{$dc['link']}}
                                </a>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                    <div>
                        <h4>
                            SITES
                        </h4>
                        <ul>
                            @foreach ($sites as $sit)
                            <li v-for="elem in sites">
                                <a href="{{$sit['href']}}">
                                    {{$sit['link']}}
                                </a>
                            </li>
                        </ul>
                    </div>
                    
                </div>
                <div class="col bg-dc-comics">

                </div>
            </div>
        </section>
        <section class="bg-footer-bottom">
            <div class="container">
                
                        <div>
                            <a href="#">
                                SIGN UP NOW
                            </a>
                        </div>
                        <div class="blue">
                            
                            <h4>
                                FOLLOW US
                            </h4>
                            <ul>
                                <li>
                                    <img src="../../../public/img/footer-facebook.png" alt="">
                                </li>
                                <li>
                                    <img src="/img/footer-periscope.png" alt="">
                
                                </li>
                                <li>
                                    <img src="/img/footer-pinterest.png" alt="">
                
                                </li>
                                <li>
                                    <img src="/img/footer-twitter.png" alt="">
                
                                </li>
                                <li>
                                    <img src="/img/footer-youtube.png" alt="">
                
                                </li>
                            </ul>
                
                        </div>
                    
                
            </div>
        </section>
</footer>
