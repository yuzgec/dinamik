@extends('frontend.layout.app')
@section('content')

    <div class="bixol-breadcrumb" data-background="/frontend/images/banner.jpg">
        <div class="container">
            <div class="breadcrumb-content">
                <h1>İletişim</h1>
                <a href="{{ route('home') }}">Anasayfa <i class="fas fa-angle-double-right"></i></a>
                <a href="#">Kurumsal <i class="fas fa-angle-double-right"></i></a>
                <span>İletişim</span>
            </div>
        </div>
    </div>

    <section class="contact-v2 pt-100 pb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="contact-v2-left">
                        <div class="bixol-title-area">
                            <span class="">DİNAMİK SMS</span>
                            <h3>Hızlı ve ekonomik  <span>Toplu SMS Hizmeti</span></h3>
                        </div>
                        <div class="contact-v2-list">
                            <div class="row justify-content-center justify-content-lg-start">
                                <div class="col-lg-10 col-md-6">
                                    <div class="contact-v2-item">
                                        <div class="bixol-icon-wrapper">
                                            <i class="flaticon flaticon-pin"></i>
                                        </div>
                                        <div class="column-content">
                                            <h5>Adresimiz</h5>
                                            <p>{{ config('settings.adres2') }}</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-10 col-md-6">
                                    <div class="contact-v2-item">
                                        <div class="bixol-icon-wrapper">
                                            <i class="flaticon flaticon-phone"></i>
                                        </div>
                                        <div class="column-content">
                                            <h5>Telefon Numaralaramız</h5>
                                            <p>{{ config('settings.telefon1') }} </p>
                                            <p>{{ config('settings.telefon2') }} </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-10 col-md-6">
                                    <div class="contact-v2-item">
                                        <div class="bixol-icon-wrapper">
                                            <i class="flaticon flaticon-mail"></i>
                                        </div>
                                        <div class="column-content">
                                            <h5>Email Adresimiz</h5>
                                            <p>{{ config('settings.email1') }} </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6  mt-3">
                    <div class="contact-v2-right">
                        <p>Formu doldurarak bizlere hızlı bir şekilde email gönderebilirsiniz. Uzman ekibimiz en kısa zamanda sizlere dönüş yapacaktır.</p>
                        <form action="#">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="name-field">
                                        <label for="your-name">Adınız Soyadınız</label>
                                        <input type="text" name="adsoyad">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="mail-field">
                                        <label for="email-address">Email Adresiniz</label>
                                        <input type="email" name="email">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="phone-field">
                                        <label for="phone-number">Telefon Numaranız</label>
                                        <input type="tel" name="telefon" >
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="phone-field">
                                        <label for="phone-number">Konu</label>
                                        <input type="text" >
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="message-field">
                                        <label for="message">Mesajınız</label>
                                        <textarea  rows="9"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="submit-btn">
                                <button type="submit"><i class="fas fa-check-circle"></i>MESAJI GÖNDER</button>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
