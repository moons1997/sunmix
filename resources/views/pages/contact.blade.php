@extends('layouts.fmain')

@section('content')
    <section class="contacts gutter-top gutter-bottom">

    <div class="container">

        <div class="contacts__row block-row">

            <div class="contacts__map">
                <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A71578c8909e4fbe21f8b428cff7f1ed66362249766d10b1a3b7d6e136122dd9e&amp;source=constructor" frameborder="0"></iframe>
            </div>

            <div class="contacts__data">
                <h3 class="contacts__data-title" data-da=".contacts__map,992,0">
                    Контакты
                </h3>
                <div class="contacts__data-wrap block-row justify-content-between">

                    <div class="footer__data-item">
                        <h5 class="footer__data-title">@lang('settings.address'):</h5>
                        <a class="footer__data-link contacts__map-link" target="_blank" href="https://yandex.ru/map-widget/v1/?um=constructor%3A71578c8909e4fbe21f8b428cff7f1ed66362249766d10b1a3b7d6e136122dd9e&amp;source=constructor">
                            @lang('settings.address_link')
                        </a>
                        <p class="footer__data-text">
                            @lang('settings.address_loc')
                        </p>
                    </div>

                    <div class="footer__data-item">
                        <h5 class="footer__data-title">@lang('settings.mail'):</h5>
                        <a class="footer__data-link" href="mailto:info@sunfest.uz">
                            @lang('settings.mail_link')
                        </a>
                        <p class="footer__data-text contacts__email">
                            <strong>info@sunfest.uz</strong>
                        </p>
                    </div>

                    <div class="footer__data-item">
                        <h5 class="footer__data-title">@lang('settings.tel'):</h5>
                        <a class="footer__data-link" href="tel: +998993713070">
                            @lang('settings.tel_link')
                        </a>
                        <p class="footer__data-text">
                            +998 (99) 371-30-70 <br>
                            +998 (90) 936-77-66
                        </p>
                    </div>

                    <div class="footer__data-item">
                        <h5 class="footer__data-title">Соц. сети:</h5>
                        <ul class="contacts__social-list d-flex">
                            <li>
                                <a class="contacts__social-link" href="#" target="_blank" rel="noopener noreferrer">
                                    <img src="{{asset('images/icons/instagram.svg')}}" alt="instagram">
                                </a>
                            </li>
                            <li>
                                <a class="contacts__social-link" href="#" target="_blank" rel="noopener noreferrer">
                                    <img src="{{asset('images/icons/facebook.svg')}}" alt="facebook">
                                </a>
                            </li>
                        </ul>
                    </div>

                </div>
                <div class="contacts__data-smile">
                    <img  class="hero__smile" src="{{asset('images/icons/smile.svg')}}" alt="hero__smile">
                </div>
            </div>

        </div>

    </div>

</section>
@endsection

@section('footer')
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
