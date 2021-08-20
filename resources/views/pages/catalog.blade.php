@extends('layouts.fmain')

@section('content')
    <section class="catalogue main__catalogue gutter-top gutter-bottom">
        <div class="container">
            <div class="catalogue__row block-row">
                <aside class="aside d-flex justify-content-between">
                    <div class="aside__wrapper">
                        <?php $count = 1; ?>
                        @if(!empty($datas))
                            @foreach($datas as $data)
                                @if($data->category_type == 0)
                                    <div class="accordeon">
                                        <div class="{{ 1 == 100 ? 'accordeon-open' : '' }} accordeon__head d-flex justify-content-between align-items-center">
                                            <h3 class="accordeon__title">
                                                {{$data->{ 'name_'.app()->getLocale() } }}
                                            </h3>
                                            <svg class="accordeon__icon" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <rect x="9.14258" y="1.42857" width="1.71429" height="17.1429" />
                                                <rect x="1.42871" y="10.8571" width="1.71429" height="17.1429" transform="rotate(-90 1.42871 10.8571)" />
                                            </svg>
                                        </div>
                                        <div class="accordeon__body">
                                            <ul>
                                                @foreach($datas as $key=>$item)
                                                    @if($item->category_type == $data->id)
                                                        <li>
                                                            <a class="{{ $id == $item->id ? 'selected' : '' }}" href="{{LaravelLocalization::localizeUrl(url('catalog/'.$item->id))}}">
                                                                {{$item->{ 'name_'.app()->getLocale() } }}
                                                            </a>
                                                        </li>
                                                    @endif
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                @endif
                                    <?php $count++; ?>
                            @endforeach
                        @endif
                    </div>
                    <img class="aside__icon smile-animate" src="{{asset('images/icons/smile.svg')}}" alt="smile">
                </aside>

                <div class="products">
                    <div class="products__row block-row">
                        @if(!empty($products))
                            @foreach($products as $product)
{{--                                {{dd()}}--}}
                                <div class="products__col">
                                    <div class="products__item">
                                        <h3 class="products__title">
                                            Абрикос Кондитерский
                                            {{$product->{ 'name_'.app()->getLocale() } }}
                                        </h3>
                                        <img class="products__img" src="{{asset('uploads/products/images/'.$product->images[0]->image)}}" alt="apricot">
                                        <a class="products__link" href="{{LaravelLocalization::localizeUrl(url('product/'.$product->id))}}" aria-label="Ссылка на продукт">
                                            <span>Посмотреть</span>
                                        </a>
                                    </div>
                                </div>
                            @endforeach
                        @endif
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