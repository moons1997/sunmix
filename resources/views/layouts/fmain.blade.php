<!DOCTYPE html>
<html lang="{{app()->getLocale()}}">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>SunFest</title>
    <!-- <link rel="icon" href="./img/logo.png" type="image/png"> -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" href="{{asset('css/style.min.css')}}" />
</head>

<body>
    <?php
        function getActive($nodes){
            if(request()->is($nodes)){
                return true;
            }else{
                return false;
            }
        }
    ?>

    @if(getActive(App::getLocale()))
        <div class="preloader">
            <div class="container">
                <div class="preloader__counter">0%</div>
                <div class="preloader__text text">
                    <img src="{{asset('images/preloader_1.svg')}}" alt="text">
                </div>
                <div class="preloader__text text">
                    <img src="{{asset('images/preloader_2.svg')}}" alt="text">
                </div>
                <div class="preloader__text logo">
                    <img src="{{asset('images/logo.svg')}}" alt="text">
                </div>
                <div class="preloader__smile">
                    <img  class="hero__smile" src="{{asset('images/icons/smile.svg')}}" alt="hero__smile">
                </div>
            </div>
        </div>
    @endif

    <div class="wrapper transition-fade" id="swup" data-scroll-container>

        <header class="header">
            <div class="container">
                <div class="header__row align-items-center">

                    <a class="header__logo logo" href="/{{App::getLocale()}}" aria-label="Логотип">
                        <img src="{{asset('images/logo.svg')}}" alt="logo">
                    </a>





                    <div class="header__actions w-100 d-flex justify-content-between">

                        <button class="close-header" type="button"></button>

                        <nav class="nav">
                            <ul class="nav__list d-flex">
                                <li>
                                    <a class="header__link" href="{{LaravelLocalization::localizeUrl(url('about'))}}">@lang('settings.about')</a>
                                </li>
                                <li>
                                    <a class="header__link" href="{{LaravelLocalization::localizeUrl(url('catalog'))}}">@lang('settings.catalog')</a>
                                </li>
                            </ul>
                        </nav>

                        <div class="header__nav-right d-flex">
                            <ul class="header__langs">
                                <li class="header__langs-item">
                                    <a class="header__link " href="/en" style="margin-right: 10px">
                                        En
                                    </a>
                                    <a class="header__link " href="/ru" >
                                        Ru
                                    </a>
                                </li>

{{--                                <li class="header__langs-item">--}}
{{--                                    <a class="header__link " href="/en">--}}
{{--                                        En--}}
{{--                                    </a>--}}
{{--                                </li>--}}
                            </ul>

                            <nav class="nav">
                                <ul class="nav__list d-flex">
                                    <li>
                                        <a class="header__link" href="{{LaravelLocalization::localizeUrl(url('technology'))}}">@lang('settings.technology')</a>
                                    </li>
                                    <li>
                                        <a class="header__link" href="{{LaravelLocalization::localizeUrl(url('contact'))}}">
                                            @lang('settings.contact')
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>

                    </div>

                    <div class="burger"  aria-label="Burger button">
                        <div></div>
                        <div></div>
                    </div>

                </div>
            </div>
        </header>

        <main class="main">
            @yield('content')
        </main>
            @yield('footer')
    </div>



<script src="https://cdn.jsdelivr.net/npm/locomotive-scroll@4.1.1/dist/locomotive-scroll.min.js"></script>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script src="{{asset('js/dynamic.js')}}"></script>


<script src="{{asset('js/swup.min.js')}}"></script>
<script src="{{asset('js/SwupOverlayTheme.min.js')}}"></script>
<!-- <script src="js/bundle.min.js"></script> -->
<script src="{{asset('js/index.js')}}"></script>
</body>
</html>
