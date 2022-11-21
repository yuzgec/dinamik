@extends('frontend.layout.app')
@section('content')
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
                                            <p>Örnek Mahallesi Adnan Menderes Cad. No:4-6A Ataşehir / İSTANBUL</p>
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
                                            <p>0216 822 01 11 </p>
                                            <p>0850 678 01 11 </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-10 col-md-6">
                                    <div class="contact-v2-item">
                                        <div class="bixol-icon-wrapper">
                                            <i class="flaticon flaticon-mail"></i>
                                        </div>
                                        <div class="column-content">
                                            <h5>Email ADresimiz</h5>
                                            <p>info@dinamiksms.com </p>
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
                                        <input type="text" id="your-name">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="mail-field">
                                        <label for="email-address">Email Adresiniz</label>
                                        <input type="email" id="email-address" >
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="phone-field">
                                        <label for="phone-number">Telefon Numaranız</label>
                                        <input type="tel" id="phone-number" >
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="phone-field">
                                        <label for="phone-number">Konu</label>
                                        <input type="tel" id="phone-number" >
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="message-field">
                                        <label for="message">Mesajınız</label>
                                        <textarea  rows="9" id="message"></textarea>
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
