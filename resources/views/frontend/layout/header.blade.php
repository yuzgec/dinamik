<header class="bixol-header bg-sticky-white">

    <div class="bixol-header-top">
        <div class="container">
            <div class="bixol-header-top-content">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="bixol-header-top-left">
                            <div class="bixol-header-item">
                                        <span class="bixol-icon-wrapper">
                                            <i class="flaticon flaticon-phone"></i>
                                        </span>
                                <div class="bixol-item-content">
                                    <label>Bilgi & Satış:</label>
                                    <span>{{ config('settings.telefon1') }}</span>
                                </div>
                                <a href="tel:{{ config('settings.telefon1') }}"></a>
                            </div>
                            <div class="bixol-header-item">
                                        <span class="bixol-icon-wrapper">
                                            <i class="flaticon flaticonv2-phone-call"></i>
                                        </span>
                                <div class="bixol-item-content">
                                    <label>Whatsapp:</label>
                                    <span>{{ config('settings.whatsapp') }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="bixol-header-top-right">
                            <div class="bixol-header-item">
                                        <span class="bixol-icon-wrapper">
                                            <i class="flaticon flaticon-mail"></i>
                                        </span>
                                <div class="bixol-item-content">
                                    <label>Email</label>
                                    <span>{{ config('settings.email1') }}</span>
                                </div>
                                <a href="mailto:config('settings.email1')"></a>
                            </div>
                            <div class="bixol-header-item">
                                <span class="bixol-icon-wrapper">
                                    <i class="flaticon flaticon-pin"></i>
                                </span>
                                <div class="bixol-item-content">
                                    <label>{{ config('settings.adres1') }}</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="bixol-navigation mt-3">
        <div class="container">
            <div class="bixol-nav">
                <a href="{{ route('home') }}" class="bixol-header-logo">
                    <img src="/dinamiklogo.png" alt="{{ config('app.name') }}">
                </a>

                <nav class="desktop-menu">
                    <ul>
                        <li><a href="{{ route('home') }}">Anasayfa</a> </li>
                        <li class="has-submenu"><a href="#">Kurumsal</a>
                            <ul>
                                @foreach($Pages as $item)
                                    <li>
                                        <a href="{{ route('corporatedetail',$item->slug) }}">
                                            {{ $item->title }}
                                        </a>
                                    </li>
                                @endforeach
                                <li><a href="{{ route('bankinfo') }}">Banka Hesap Bilgileri</a></li>
                                <li><a href="{{ route('sss') }}">Sıkça Sorulan Sorular</a></li>
{{--
                                <li><a href="{{ route('news') }}">Blog ve Haberler</a></li>
--}}
                            </ul>
                        </li>
                        @foreach($ServiceCategory as $item)
                        <li class="has-submenu"><a href="#">{{ $item->title }}</a>
                            <ul>
                                @foreach($item->getService->sortBy('rank') as $row)
                                    <li>
                                        <a href="{{ route(service($item->id), $row->slug) }}">
                                            {{ $row->title }}
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </li>
                        @endforeach
                        <li><a href="{{ route('api') }}">APİ</a></li>
{{--
                        <li><a href="{{ route('price') }}">Fiyatlar</a></li>
--}}
                        <li><a href="{{ route('contactus') }}">İletişim</a></li>
                        <li><a href="{{ route('home') }}">Bireysel</a></li>
                        <li><a href="{{ route('home') }}">Kurumsal</a></li>
                    </ul>
                </nav>
            </div>
            <div class="bixol-mobile-header">
                <div class="row align-items-center">
                    <div class="col-3">
                        <a href="{{ route('home') }}" class="bixol-logo">
                            <img src="/dinamiklogo.png" alt="">
                        </a>
                    </div>

                    <div class="col-6 d-flex flex-column text-center">
                        <div><p>Bilgi & Satış:</p></div>
                        <div><a href="">{{ config('settings.telefon1') }}</a></div>
                    </div>
                    <div class="col-3">
                        <div class="bixol-mobile-hamburger">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</header>

<div class="bixol-mobile-menu">
    <a href="{{ route('home') }}" class="bixol-logo text-center" >
        <img src="/dinamiklogo.png" alt="{{ config('app.name') }}" style="width: 150px">
    </a>
    <ul>
        <li><a href="{{ route('home') }}">Anasayfa</a> </li>
        <li class="has-submenu"><a href="#">Kurumsal</a>
            <ul>
                @foreach($Pages as $item)
                    <li>
                        <a href="{{ route('corporatedetail',$item->slug) }}">
                            {{ $item->title }}
                        </a>
                    </li>
                @endforeach
                <li><a href="{{ route('bankinfo') }}">Banka Hesap Bilgileri</a></li>
                <li><a href="{{ route('sss') }}">Sıkça Sorulan Sorular</a></li>
                {{--
                                                <li><a href="{{ route('news') }}">Blog ve Haberler</a></li>
                --}}
            </ul>
        </li>
        @foreach($ServiceCategory as $item)
            <li class="has-submenu"><a href="#">{{ $item->title }}</a>
                <ul>
                    @foreach($item->getService->sortBy('rank') as $row)
                        <li>
                            <a href="{{ route(service($item->id), $row->slug) }}">
                                {{ $row->title }}
                            </a>
                        </li>
                    @endforeach
                </ul>
            </li>
        @endforeach
        <li><a href="{{ route('api') }}">APİ</a></li>
        <li><a href="{{ route('price') }}">Fiyatlar</a></li>
        <li><a href="{{ route('contactus') }}">İletişim</a></li>
        <li><a href="{{ route('home') }}">Giriş Yap</a></li>
    </ul>
</div>
