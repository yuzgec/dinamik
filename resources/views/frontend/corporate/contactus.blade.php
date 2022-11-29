@extends('frontend.layout.app')
@section('content')
    @include('sweetalert::alert')
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
                        <form action="{{ route('form') }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="name-field">
                                        @if($errors->has('name'))
                                            <div class="invalid-feedback" style="display: block">{{$errors->first('name')}}</div>
                                        @endif
                                        <label for="your-name">Adınız Soyadınız</label>
                                        <input type="text" name="name">


                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="mail-field">
                                        @if($errors->has('email'))
                                            <div class="invalid-feedback" style="display: block">{{$errors->first('email')}}</div>
                                        @endif
                                        <label for="email-address">Email Adresiniz</label>
                                        <input type="email" name="email">

                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="phone-field">
                                        @if($errors->has('phone'))
                                            <div class="invalid-feedback" style="display: block">{{$errors->first('phone')}}</div>
                                        @endif
                                        <label for="phone-number">Telefon Numaranız</label>
                                        <input type="tel" name="phone" >

                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="phone-field">
                                        <label for="phone-number">Konu</label>
                                        <input type="text" name="subject">
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="message-field">
                                        @if($errors->has('message'))
                                            <div class="invalid-feedback" style="display: block">{{$errors->first('message')}}</div>
                                        @endif
                                        <label for="message">Mesajınız</label>
                                        <textarea  rows="9" name="message"></textarea>

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
