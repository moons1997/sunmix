@extends('layouts.fmain')

@section('content')
    <section class="about gutter-top gutter-bottom">
        <div class="container">

            <div class="about__intro">
                <img class="content-icon" src="{{asset('images/icons/smile.svg')}}" alt="">
                <h1
                        class="page-title"
                        data-scroll
                        data-scroll-class="page-title_visible"
                >
                    <span> @lang('settings.about_title')</span>
                </h1>
                <p
                        data-scroll
                        data-scroll-class="descr-text_visible"
                        class="about__intro-text descr-text">
                        <span>@lang('settings.about_subTitle')</span>
                </p>
            </div>
            @if(!empty($data_1))
                <div class="content-holder block-row">
                    <div class="content-holder__img">
                        <div
                                data-scroll
                                data-scroll-class="content-holder__img-self_visible"
                                class="content-holder__img-self" style="background-image: url('{{asset('uploads/sections/'.$data_1->img)}}')"></div>
                    </div>
                    <div class="content-holder__content">
                        <img src="{{asset('images/logo.svg')}}" alt="logo">
                        <div class="content-holder__descr descr-text">

                            {!! $data_1->{ 'info_'.app()->getLocale() } !!}
                        </div>
                    </div>
                </div>
            @endif

            @if(!empty($data_2))
                <div class="content-holder content-holder_reversed block-row justify-content-between">
                    <div class="content-holder__img">
                        <div
                                data-scroll
                                data-scroll-class="content-holder__img-self_visible"
                                class="content-holder__img-self" style="background-image: url('{{asset('uploads/sections/'.$data_2->img)}}')"></div>
                    </div>

                    <div class="content-holder__content">
                        <!-- <img src="images/logo.svg" alt=""> -->
                        <h4
                                class="content-holder__title">
                            {{$data_2->{ 'name_'.app()->getLocale() } }}
                        </h4>
                        <div class="content-holder__descr descr-text">
                            {!! $data_2->{ 'info_'.app()->getLocale() } !!}
                        </div>
                    </div>
                </div>
            @endif



            <div class="about__block about__certificates align-items-center justify-content-between">
                <div class="certificates">
                    <div class="certificates__row block-row">
                        <div class="certificates__item">
                            <img src="{{asset('images/photos/certificate.jpg')}}" alt="certificate">
                        </div>
                        <div class="certificates__item">
                            <img src="{{asset('images/photos/certificate2.jpg')}}" alt="certificate">
                        </div>
                        <div class="certificates__item">
                            <img src="{{asset('images/photos/certificate3.jpg')}}" alt="certificate">
                        </div>
                    </div>
                </div>
            </div>


            <div class="advantages">
                <h2 class="section-title justify-content-center section-title_center d-flex">
                    @lang('settings.Benefits')
                </h2>
                <div class="block-row advantages__row">
                    <div class="advantages__item">
                        <div class="advantages__icon d-flex align-items-center justify-content-center">
                            <img src="{{asset('images/icons/plane.svg')}}" alt="plane">
                        </div>
                        <p class="descr-text advantages__descr">
                            @lang('settings.Benefits_1')
                        </p>
                    </div>

                    <div class="advantages__item">
                        <div class="advantages__icon d-flex align-items-center justify-content-center">
                            <img src="{{asset('images/icons/verified.svg')}}" alt="verifid">
                        </div>
                        <p class="descr-text advantages__descr">
                            @lang('settings.Benefits_2')
                        </p>
                    </div>

                    <div class="advantages__item">
                        <div class="advantages__icon d-flex align-items-center justify-content-center">
                            <img src="{{asset('images/icons/box.svg')}}" alt="box">
                        </div>
                        <p class="descr-text advantages__descr">
                            @lang('settings.Benefits_3')
                        </p>
                    </div>

                    <div class="advantages__item">
                        <div class="advantages__icon d-flex align-items-center justify-content-center">
                            <img src="{{asset('images/icons/cart.svg')}}" alt="cart">
                        </div>
                        <p class="descr-text advantages__descr">
                            @lang('settings.Benefits_4')
                        </p>
                    </div>
                </div>
            </div>


        </div>


        <div class="about__quote" >
            <div class="about__quote-content">
                <img
                        data-scroll
                        data-scroll-speed="1"
                        class="about__quote-img"
                        src="{{asset('images/photos/about-photo1.jpg')}}"
                        alt="about"
                >
                <h3
                        class="about__quote-title" >
                    @lang('settings.qualty')
                </h3>
                <img
                        data-scroll
                        data-scroll-speed="2"
                        class="about__quote-img"
                        src="{{asset('images/photos/about-photo2.jpg')}}"
                        alt="about"
                >
            </div>
        </div>
        @if(!empty($data_3))
        <div class="container">
            <div class="about__partnership content-holder block-row">
                <div class="content-holder__img">
                    <div
                            data-scroll
                            data-scroll-class="content-holder__img-self_visible"
                            class="content-holder__img-self content-holder__img-self_lg" style="background-image: url('{{asset('uploads/sections/'.$data_3->img)}}')"></div>
                </div>
                <div class="content-holder__content">
                    <h4 class="content-holder__title">{{$data_3->{ 'name_'.app()->getLocale() } }}</h4>

                    <div class="content-holder__descr descr-text">
                        {!! $data_3->{ 'info_'.app()->getLocale() } !!}
                    </div>
                </div>
            </div>
        </div>
        @endif
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
@endsection
