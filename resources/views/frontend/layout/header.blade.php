        <header class="bixol-header header-style-2 header-style-3">
            <div class="info-bar sticky-info">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-9">
                            <div class="info-left">
                                <span><i class="flaticon-telephone"></i><strong>Telefon:</strong> 0216 465 45 70</span>
                                <span><i class="fas fa-envelope-open"></i><strong>Mail:</strong> info@dinamiksms.com</span>
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
                                                <li><a href="/dinamik/sayfa-detay?name=Hakkımızda">Hakkımızda</a></li>
                                                <li><a href="/dinamik/sayfa-detay?name=Lisans ve Sertfikasyon">Lisans ve Sertfikasyon</a></li>
                                                <li><a href="/dinamik/sayfa-detay?name=Sözleşme ve Formlar">Sözleşme ve Formlar</a></li>
                                                <li><a href="/dinamik/sayfa-detay?name=Bayilik Sistemi">Bayilik Sistemi</a></li>
                                                <li><a href="/dinamik/sayfa-detay?name=Banka Hesap Bilgileri">Banka Hesap Bilgileri</a></li>
                                                <li><a href="/dinamik/sayfa-detay?name=Blog ve Haberler">Blog ve Haberler</a></li>
                                            </ul>
                                        </li>
                                        <li class="has-submenu"><a href="#">SMS Hizmeti</a>
                                            <ul>
                                                <li><a href="#">Toplu SMS</a></li>
                                                <li><a href="#">OTP SMS</a></li>
                                            </ul>
                                        </li>
                                        <li class="has-submenu"><a href="#">Çözümler</a>
                                            <ul>
                                                <li><a href="#">Yazılım Çözümleri</a></li>
                                                <li><a href="#">Entegrasyon</a></li>
                                                <li><a href="#">Özel Çözümler</a></li>
                                                <li><a href="#">Sms Api</a></li>
                                            </ul>
                                        </li>

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
                                    <a href="{{ route('signup') }}" class="home5-primary-btn">ÜYE OL<span><i class="fas fa-long-arrow-alt-right"></i></span></a>
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
