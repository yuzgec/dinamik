        <header class="bixol-header header-style-2 header-style-3">
            <div class="info-bar sticky-info">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-9">
                            <div class="info-left">
                                <span><i class="flaticon-telephone"></i><strong>Telefon:</strong> 0216 465 45 70</span>
                                <span><i class="fas fa-envelope-open"></i><strong>Mail:</strong> info@dinamiksms.com</span>
                                <span><i class="fas fa-calendar"></i><strong>7/24</strong> Kesintisiz Hizmet</span>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="header-social">
                                <a href="#"><i class="fab fa-facebook-f text-white"></i></a>
                                <a href="#"><i class="fab fa-twitter text-white"></i></a>
                                <a href="#"><i class="fab fa-linkedin text-white"></i></a>
                                <a href="#"><i class="fab fa-instagram text-white"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-bottom">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-1">
                            <div class="logo-wrapper">
                                <a href="{{ route('home') }}" class="desktop-logo">
                                    <x-application-logo />
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-9 desktop-menu-wrapper">
                            <div class="desktop-menu text-end">
                                <nav>
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
                                                <li><a href="{{ route('news') }}">Blog ve Haberler</a></li>
                                            </ul>
                                        </li>
                                        @foreach($ServiceCategory as $item)
                                        <li class="has-submenu"><a href="#">{{ $item->title }}</a>
                                            <ul>
                                                @foreach($item->getService->sortBy('rank') as $row)
                                                <li>
                                                    <a href="{{ route(($item->id == 1 ) ?  'servicedetail' : 'solutiondetail' , $row->slug) }}">
                                                        {{ $row->title }}
                                                    </a>
                                                </li>
                                                @endforeach
                                            </ul>
                                        </li>
                                        @endforeach

                                        <li><a href="{{ route('support') }}">DESTEK</a></li>
                                        <li><a href="{{ route('price') }}">Fiyatlar</a></li>
                                        <li><a href="{{ route('contactus') }}">Bize Ulaşın</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <div class="header-right">
                                <div class="header-btn">
                                    <a href="#" class="home5-primary-btn">ÜYE OL<span><i class="fas fa-long-arrow-alt-right"></i></span></a>
                                </div>
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
