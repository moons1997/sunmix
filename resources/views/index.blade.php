@extends('layouts.fmain')

@section('content')

            <img  class="hero__smile" src="images/icons/smile.svg" alt="hero__smile">

            <section class="hero">
                <div class="swiper-container">
                    <div class="swiper-wrapper">

                        <div class="swiper-slide d-flex" data-link="{{app()->getLocale().'/'.'catalog/3'}}">
                            <div class="hero__content-left">
                                <div class="relative  w-100 container">
                                    <h2 class="hero__content-title width-100">
                                        @lang('settings.Dried_fruits')
                                    </h2>
                                </div>
                            </div>
                            <div class="hero__content-right" style="background-image:url('{{asset('images/photos/hero1.jpg')}}')"></div>
                        </div>

                        <div class="swiper-slide d-flex" data-link="{{app()->getLocale().'/'.'catalog/4'}}">
                            <div class="hero__content-left">
                                <div class="relative w-100 container">
                                    <h2 class="hero__content-title width-100">
                                        @lang('settings.Nuts')
                                    </h2>
                                </div>
                            </div>
                            <div class="hero__content-right" style="background-image:url('{{asset('images/photos/hero4.jpg')}}')"></div>
                        </div>

                        <div class="swiper-slide d-flex" data-link="{{app()->getLocale().'/'.'catalog/6'}}">
                            <div class="hero__content-left">
                                <div class="relative w-100 container">
                                    <h2 class="hero__content-title width-100">
                                        @lang('settings.Legumes')
                                    </h2>
                                </div>
                            </div>
                            <div class="hero__content-right" style="background-image:url('{{asset('images/photos/hero2.jpg')}}')"></div>
                        </div>

                        <div class="swiper-slide d-flex" data-link="{{app()->getLocale().'/'.'catalog/8'}}">
                            <div class="hero__content-left">
                                <div class="relative w-100 container">
                                    <h2 class="hero__content-title width-100">
                                        @lang('settings.Dried_vegetables')
                                    </h2>
                                </div>
                            </div>
                            <div class="hero__content-right" style="background-image:url('{{asset('images/photos/hero3.jpg')}}')"></div>
                        </div>



                    </div>

                    <div class="swiper-pagination"></div>
                </div>

                <div class="hero__container container width-100">
                    <a class="hero__circle-link" href="#" aria-label="Ссылка на каталог">
                        <svg width="71" height="71" viewBox="0 0 71 71" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g id="arrow-right-top">
                                <g id="back-right">
                                    <path id="Path 3" d="M56.2084 38.4583V14.7917H32.5417"  stroke-width="2" stroke-linecap="round"/>
                                    <path id="Path 31" d="M56.2084 14.7917L14.7917 56.2083"  stroke-width="2" stroke-linecap="round"/>
                                </g>
                            </g>
                        </svg>
                    </a>
                    <div class="hero__container-arrows">
                        <div class="hero__swiper-button swiper-button-prev"></div>
                        <div class="hero__swiper-button swiper-button-next"></div>
                    </div>
                </div>

            </section>
@endsection
