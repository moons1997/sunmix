@extends('layouts.fmain')

@section('content')
    <section class="technology gutter-top gutter-bottom">
        <div class="container">

            <div class="about__intro">
                <h1
                        data-scroll
                        data-scroll-class="page-title_visible"
                        class="page-title"
                >
                        <span>
                            @lang('settings.tech_title')
                        </span>
                </h1>
                <p
                        data-scroll
                        data-scroll-class="descr-text_visible"
                        class="about__intro-text descr-text"
                >
                        <span>
                             @lang('settings.tech_subtitle')
                        </span>
                </p>
            </div>

            @if(!empty($data_1))
                <div class="content-holder block-row">
                    <div class="content-holder__img">
                        <div
                                data-scroll
                                data-scroll-class="content-holder__img-self_visible"
                                class="content-holder__img-self content-holder__img-self_lg" style="background-image: url('{{asset('uploads/sections/'.$data_1->img)}}')"></div>
                    </div>
                    <div class="content-holder__content">
                        <h4
                                class="content-holder__title">
                            {{$data_1->{ 'name_'.app()->getLocale() } }}
                        </h4>
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
                                class="content-holder__img-self content-holder__img-self_lg" style="background-image: url('{{asset('uploads/sections/'.$data_2->img)}}')"></div>
                    </div>

                    <div class="content-holder__content">
                        <h4
                                class="content-holder__title"> {{$data_2->{ 'name_'.app()->getLocale() } }}</h4>

                        <div class="content-holder__descr descr-text">
                            {!! $data_2->{ 'info_'.app()->getLocale() } !!}
                        </div>
                    </div>
                </div>
            @endif
            @if(!empty($data_3))
            <div class="content-holder block-row">
                <div class="content-holder__img">
                    <div
                            data-scroll
                            data-scroll-class="content-holder__img-self_visible"
                            class="content-holder__img-self content-holder__img-self_lg" style="background-image: url('{{asset('uploads/sections/'.$data_3->img)}}')"></div>
                </div>
                <div class="content-holder__content">
                    <h4
                            class="content-holder__title"
                    >  {{$data_3->{ 'name_'.app()->getLocale() } }}</h4>
                    <div class="content-holder__descr descr-text">
                        {!! $data_3->{ 'info_'.app()->getLocale() } !!}
                    </div>
                </div>
            </div>
            @endif
            @if(!empty($data_4))
            <div class="content-holder content-holder_reversed block-row justify-content-between">
                <div class="content-holder__img">
                    <div
                            data-scroll
                            data-scroll-class="content-holder__img-self_visible"
                            class="content-holder__img-self content-holder__img-self_lg" style="background-image: url('{{asset('uploads/sections/'.$data_4->img)}}')"></div>
                </div>

                <div class="content-holder__content">
                    <h4
                            class="content-holder__title">{{$data_4->{ 'name_'.app()->getLocale() } }}</h4>
                    <div class="content-holder__descr descr-text">
                        {!! $data_4->{ 'info_'.app()->getLocale() } !!}
                    </div>
                </div>
            </div>
            @endif
            <div class="process">
                <h4 class="process__title content-holder__title"> @lang('settings.process')</h4>
                <div class="process__row block-row">
                    <div class="process__col">
                        <div class="process__item">
                            <div class="process__icon">
                                <img src="{{asset('images/technologyIcons/item1.png')}}" alt="tech">
                            </div>
                            <p class="process__descr">
                                @lang('settings.process_1')
                            </p>
                        </div>
                    </div>

                    <div class="process__col">
                        <div class="process__item">
                            <div class="process__icon">
                                <img src="{{asset('images/technologyIcons/item2.png')}}" alt="tech1">
                            </div>
                            <p class="process__descr">
                                @lang('settings.process_2')
                            </p>
                        </div>
                    </div>

                    <div class="process__col">
                        <div class="process__item">
                            <div class="process__icon">
                                <img src="{{asset('images/technologyIcons/item3.png')}}" alt="tech2">
                            </div>
                            <p class="process__descr">
                                @lang('settings.process_3')
                            </p>
                        </div>
                    </div>

                    <div class="process__col">
                        <div class="process__item">
                            <div class="process__icon">
                                <img src="{{asset('images/technologyIcons/item3.png')}}" alt="tech3">
                            </div>
                            <p class="process__descr">
                                @lang('settings.process_4')
                            </p>
                        </div>
                    </div>

                    <div class="process__col">
                        <div class="process__item">
                            <div class="process__icon">
                                <img src="{{asset('images/technologyIcons/item5.png')}}" alt="tech4">
                            </div>
                            <p class="process__descr">
                                @lang('settings.process_5')
                            </p>
                        </div>
                    </div>

                    <div class="process__col">
                        <div class="process__item">
                            <div class="process__icon">
                                <img src="{{asset('images/technologyIcons/item6.png')}}" alt="tech5">
                            </div>
                            <p class="process__descr">
                                @lang('settings.process_6')
                            </p>
                        </div>
                    </div>

                    <div class="process__col">
                        <div class="process__item">
                            <div class="process__icon">
                                <img src="{{asset('images/technologyIcons/item7.png')}}" alt="tech6">
                            </div>
                            <p class="process__descr">
                                @lang('settings.process_7')
                            </p>
                        </div>
                    </div>

                    <div class="process__col">
                        <div class="process__item">
                            <div class="process__icon">
                                <img src="{{asset('images/technologyIcons/item8.png')}}" alt="tech7">
                            </div>
                            <p class="process__descr">
                                @lang('settings.process_8')
                            </p>
                        </div>
                    </div>

                    <div class="process__col">
                        <div class="process__item">
                            <div class="process__icon">
                                <img src="{{asset('images/technologyIcons/item9.png')}}" alt="tech8">
                            </div>
                            <p class="process__descr">
                                @lang('settings.process_9')
                            </p>
                        </div>
                    </div>

                    <div class="process__col">
                        <div class="process__item">
                            <div class="process__icon">
                                <img src="{{asset('images/technologyIcons/item10.png')}}" alt="tech9">
                            </div>
                            <p class="process__descr">
                                @lang('settings.process_10')
                            </p>
                        </div>
                    </div>

                    <div class="process__col">
                        <div class="process__item">
                            <div class="process__icon">
                                <img src="{{asset('images/technologyIcons/item11.png')}}" alt="tech">
                            </div>
                            <p class="process__descr">
                                @lang('settings.process_11')
                            </p>
                        </div>
                    </div>

                    <div class="process__col">
                        <div class="process__item">
                            <div class="process__icon">
                                <img src="{{asset('images/technologyIcons/item12.png')}}" alt="tech">
                            </div>
                            <p class="process__descr">
                                @lang('settings.process_12')
                            </p>
                        </div>
                    </div>

                    <div class="process__col">
                        <div class="process__item">
                            <div class="process__icon">
                                <img src="{{asset('images/technologyIcons/item13.png')}}" alt="tech">
                            </div>
                            <p class="process__descr">
                                @lang('settings.process_13')
                            </p>
                        </div>
                    </div>

                    <div class="process__col">
                        <div class="process__item">
                            <div class="process__icon">
                                <img src="{{asset('images/technologyIcons/item14.png')}}" alt="tech">
                            </div>
                            <p class="process__descr">
                                @lang('settings.process_14')
                            </p>
                        </div>
                    </div>

                    <div class="process__col">
                        <div class="process__item">
                            <div class="process__icon">
                                <img src="{{asset('images/technologyIcons/item15.png')}}" alt="tech">
                            </div>
                            <p class="process__descr">
                                @lang('settings.process_15')
                            </p>
                        </div>
                    </div>

                    <div class="process__col">
                        <div class="process__item">
                            <div class="process__icon">
                                <img src="{{asset('images/technologyIcons/item16.png')}}" alt="tech">
                            </div>
                            <p class="process__descr">
                                @lang('settings.process_16')
                            </p>
                        </div>
                    </div>

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
@endsection
