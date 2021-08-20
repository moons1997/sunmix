@extends('layouts.fmain')

@section('content')
    @if(!empty($data))
    <div class="product-page">
        <section class="single gutter-bottom">

            <div class="container">
                <div class="single__row block-row justify-content-between">
                    <div class="single-slider">

                        <div class="swiper-container-single">
                            <div class="swiper-wrapper">
                                @foreach($data->images as $img)
                                <div class="swiper-slide">
                                    <img src="{{asset('uploads/products/images/'.$img->image)}}" alt="{{$img}}">
                                </div>
                                @endforeach
                            </div>
                        </div>

                        <div class="slider-thumbs">
                            <div class="swiper-container-thumbs">
                                <div class="swiper-wrapper">
                                    @foreach($data->images as $img)
                                        <div class="swiper-slide">
                                            <img src="{{asset('uploads/products/images/'.$img->image)}}" alt="{{$img}}">
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>


                    </div>
                    <div class="single__main">
                        <ul class="breadrumbs block-row" data-da=".single__row,768,0">
                            <li class="breadrumbs__item">
                                <a href="{{LaravelLocalization::localizeUrl(url('/'))}}">@lang('settings.bread_crumb')</a>
                            </li>
                            <li class="breadrumbs__item">
                                <a href="{{LaravelLocalization::localizeUrl(url('catalog/'))}}">@lang('settings.bread_crumb2')</a>
                            </li>
                            <li class="breadrumbs__item">
                                <a href="{{LaravelLocalization::localizeUrl(url('catalog/'.$data->product_categories->id))}}">{{$data->product_categories->{ 'name_'.app()->getLocale() } }}</a>
                            </li>
                            <li class="breadrumbs__item">
                                <span>{{ $data->{ 'name_'.app()->getLocale()} }}</span>
                            </li>
                        </ul>

                        <div class="single__main-content">
                            <h2 class="single__main-title">
                                {{ $data->{ 'name_'.app()->getLocale()} }}
                            </h2>
                            <div class="single__main-descr">
                                {!! $data->{ 'product_about_'.app()->getLocale() } !!}
                            </div>
                            <ul class="single__main-awards d-flex">
                                <li>
                                    <img src="{{asset('images/photos/reward1.png')}}" alt="reward1">
                                </li>
                                <li>
                                    <img src="{{asset('images/photos/reward2.png')}}" alt="reward1">
                                </li>
                                <li>
                                    <img src="{{asset('images/photos/reward3.png')}}" alt="reward1">
                                </li>
                            </ul>
                            <a class="single__main-download" href="#" download>
                                <span>@lang('settings.download')</span>
                                <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g id="download">
                                        <path id="Path 2" d="M23.9995 6V32"  stroke-width="2" stroke-linecap="round"/>
                                        <path id="Path 3" d="M13.9995 24.0001L23.9995 34.0001L33.9995 24.0001"  stroke-width="2" stroke-linecap="round"/>
                                        <path id="Path 2_2" d="M40 42H8"  stroke-width="2" stroke-linecap="round"/>
                                    </g>
                                </svg>
                            </a>
                        </div>
                    </div>
                    <div class="single__options">
                        {!! $data->{ 'product_info_'.app()->getLocale() } !!}
                    </div>
                </div>
            </div>

        </section>

        <footer class="footer">
            <div class="container">
                <div class="footer__top d-flex justify-content-between">
                    <a  href="#">
                        <img src="{{asset('images/logo-lg.svg')}}" alt="logo">
                    </a>
                    <div class="footer__data d-flex">

                        <div class="footer__data-item">
                            <h5 class="footer__data-title">@lang('settings.address'):</h5>
                            <a  class="footer__data-link contacts__map-link" target="_blank" href="https://yandex.ru/map-widget/v1/?um=constructor%3A71578c8909e4fbe21f8b428cff7f1ed66362249766d10b1a3b7d6e136122dd9e&source=constructor">
                                @lang('settings.address_link')
                            </a>
                            <p class="footer__data-text">
                                @lang('settings.address_loc')
                            </p>
                        </div>

                        <div class="footer__data-item">
                            <h5 class="footer__data-title">@lang('settings.tel'):</h5>
                            <a  class="footer__data-link" href="tel: +998993713070">
                                @lang('settings.address_link')
                            </a>
                            <p class="footer__data-text">
                                +998 (99) 371-30-70
                                +998 (90) 936-77-66
                            </p>
                        </div>

                        <div class="footer__data-item">
                            <h5 class="footer__data-title">@lang('settings.mail'):</h5>
                            <a  class="footer__data-link" href="mailto: info@sunfest.uz">
                                @lang('settings.address_link')
                            </a>
                            <p class="footer__data-text">
                                info@sunfest.uz
                            </p>
                        </div>

                    </div>
                </div>
                <div class="footer__bottom d-flex justify-content-between">
                    <p>© 2021 ООО «Sunfest»</p>
                    <p class="d-flex align-items-center">
                        @lang('settings.developer')
                        <a class="production-logo" target="_blank" href="http://web.eljamalgroup.uz/">
                            <img src="{{asset('images/manufacturer-logo.svg')}}" alt="logo">
                        </a>
                    </p>
                </div>
            </div>
        </footer>
    </div>
    @endif
@endsection
