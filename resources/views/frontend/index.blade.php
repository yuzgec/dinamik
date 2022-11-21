@extends('frontend.layout.app')
@section('content')
    @include('frontend.layout.slider')

    <div class="get-in-touch mt-30 mb-30">
        <div class="container">
            <div class="git-content" data-background="/frontend/images/home6/git-bg.jpg" style="background-image: url(/frontend/images/home6/git-bg.jpg;);">
                <div class="row align-items-center">
                    <div class="col-lg-8 col-md-6">
                        <div class="git-left">
                            <h4 class="text-white">Hizmetlerimizden faydalanmak için hemen arayın!</h4>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="git-btn home6-secondary-btn">
                            <a href="#"><span><i class="flaticonv2 flaticonv2-telephone-call"></i></span>0216 465 45 70 </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

{{--    <div class="home7-booking-form">
        <div class="container">
            <div class="row">
                <div class="col-md-2 col-1"></div>

                <div class="col">
                    <div class="booking-form">
                        <form action="#">
                            <input type="text" class="form-control"  style="border:1px solid gray" placeholder="Email Adresiniz">
                            <input type="password" class="form-control" style="border:1px solid gray" placeholder="Parolanız">
                            <button type="submit">Giriş Yap</button>
                        </form>
                    </div>
                </div>

                <div class="col-md-1"></div>

            </div>
        </div>
    </div>--}}


    <section class="home6-pricing-table pt-10 pb-10">
        <div class="container">

            <div class="home6-pricing">
                <div class="row justify-content-center">
                    <div class="col-lg-3 col-md-6 p-0">
                        <div class="home6-pricing-column">
                            <div class="h6-headline">
                                <h5>1.000 SMS</h5>
                            </div>
                            <div class="price-area">
                                <h2>99₺</h2>
                            </div>
                            <div class="feature-list">
                                <ul>
                                    <li>Başlıklı Sms Gönderimi</li>
                                    <li>Anlık Detaylı Raporlama</li>
                                    <li>İletilmeyen İadesi</li>
                                    <li>Her yöne Gönderim</li>
                                    <li>Kolay Excel Aktarım</li>
                                    <li>KDV Dahil</li>
                                </ul>
                            </div>
                            <div class="price-btn">
                                <a href="#" class="mb-1">Planı Seç</a>
                            </div>
                            <div class="header-btn">
                                <a href="#" class="home5-primary-btn" style="width:170px">Bilgi Al
                                    <span><i class="fas fa-long-arrow-alt-right"></i></span>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 p-0">
                        <div class="home6-pricing-column ">
                            <div class="h6-headline">
                                <h5>10.000 SMS</h5>
                            </div>
                            <div class="price-area">
                                <h2>399₺</h2>
                            </div>
                            <div class="feature-list">
                                <ul>
                                    <li>Başlıklı Sms Gönderimi</li>
                                    <li>Anlık Detaylı Raporlama</li>
                                    <li>İletilmeyen İadesi</li>
                                    <li>Her yöne Gönderim</li>
                                    <li>Kolay Excel Aktarım</li>
                                    <li>KDV Dahil</li>
                                </ul>
                            </div>
                            <div class="price-btn">
                                <a href="#" class="mb-1">Planı Seç</a>
                            </div>
                            <div class="header-btn">
                                <a href="#" class="home5-primary-btn" style="width:170px">Bilgi Al
                                    <span><i class="fas fa-long-arrow-alt-right"></i></span>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 p-0">
                        <div class="home6-pricing-column selected">
                            <div class="h6-headline">
                                <h5>50.000 SMS</h5>
                            </div>
                            <div class="price-area">
                                <h2>1399₺</h2>
                            </div>
                            <div class="feature-list">
                                <ul>
                                    <li>Başlıklı Sms Gönderimi</li>
                                    <li>Anlık Detaylı Raporlama</li>
                                    <li>İletilmeyen İadesi</li>
                                    <li>Her yöne Gönderim</li>
                                    <li>Kolay Excel Aktarım</li>
                                    <li>KDV Dahil</li>
                                </ul>
                            </div>
                            <div class="price-btn">
                                <a href="#" class="mb-1">Planı Seç</a>
                            </div>
                            <div class="header-btn">
                                <a href="#" class="home5-primary-btn" style="width:170px">Bilgi Al
                                    <span><i class="fas fa-long-arrow-alt-right"></i></span>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 p-0">
                        <div class="home6-pricing-column ">
                            <div class="h6-headline">
                                <h5>100.000 SMS</h5>
                            </div>
                            <div class="price-area">
                                <h2>1399₺</h2>
                            </div>
                            <div class="feature-list">
                                <ul>
                                    <li>Başlıklı Sms Gönderimi</li>
                                    <li>Anlık Detaylı Raporlama</li>
                                    <li>İletilmeyen İadesi</li>
                                    <li>Her yöne Gönderim</li>
                                    <li>Kolay Excel Aktarım</li>
                                    <li>KDV Dahil</li>
                                </ul>
                            </div>
                            <div class="price-btn">
                                <a href="#" class="mb-1">Planı Seç</a>
                            </div>
                            <div class="header-btn">
                                <a href="#" class="home5-primary-btn" style="width:170px">Bilgi Al
                                    <span><i class="fas fa-long-arrow-alt-right"></i></span>
                                </a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section class="home6-choose-us">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 order-2 order-lg-1">
                    <div class="choose-left">
                        <div class="title-style-4">
                            <span class="bixol-subtitle">Dinamik SMS</span>
                            <h2>Toplu SMS İle
                                İşletmenize değer katın. </h2>
                            <p>Hedef kitlenize isterseniz kendi başlığınız ile isterseniz de size özel DinamikSMS abone numaranız ile SMS gönderin. DinamikSMS size doğrudan operatörlerden gelen ve gerçek SMS teslim raporları sunar.</p>
                        </div>
                        <div class="choose-list">
                            <div class="row">
                                <div class="col-6">
                                    <div class="item">
                                        <span><i class="fas fa-check-circle"></i>7/24 Müşteri Desteği</span>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="item">
                                        <span><i class="fas fa-check-circle"></i>Ekonomik Çözümler</span>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="item">
                                        <span><i class="fas fa-check-circle"></i>Gelişmiş Altyapı</span>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="item">
                                        <span><i class="fas fa-check-circle"></i>Kullanımı Kolay Arayüz</span>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="item">
                                        <span><i class="fas fa-check-circle"></i>Ödeme Kolaylığı</span>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="item">
                                        <span><i class="fas fa-check-circle"></i>Excel ile SMS Gönderimi</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
                <div class="col-lg-6 order-1 order-lg-2">
                    <div class="choose-right">
                        <div class="img-wrapper">
                            <img src="/frontend/images/hakkimizda.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="get-in-touch mb-30 mt-30">
        <div class="container">
            <div class="git-content" data-background="/frontend/images/home6/git-bg.jpg" style="background-image: url(&quot;/frontend/images/home6/git-bg.jpg&quot;);">
                <div class="row align-items-center">
                    <div class="col-12">
                        <div class="git-left">
                            <p class="text-white text-center">TC. Bilgi Teknolojileri ve İletişim Kurumu (BTK) dan işletmeci yetkilendirmesine
                                sahip <br>DİNAMİK TELEKOMÜNİKASYON BİLİŞİM SİSTEMLERİ SANAYİ VE TİCARET LTD.ŞTİ ad ve hesabına sunulmaktadır.
                            </p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <section class="srv2-service-section  pb-30">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="bixol-title-area text-center">
                        <h3>HİZMETLERİMİZ</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach($Service->where('category', 1) as $item)
                <div class="col-lg-4 col-sm-6">
                    <div class="srv2-item">

                        <div class="srv2-service-content">
                            <h5>{{ $item->title }}</h5>
                            <p>Hedef kitlenize isterseniz kendi başlığınız ile isterseniz de size özel DinamikSMS abone numaranız ile SMS gönderin.</p>
                        </div>
                        <div class="srv2-hover-item" data-background="/frontend/images/services/01.jpg">

                            <div class="srv2-service-content">
                                <a href="#"><h5>SMS Hizmeti</h5></a>
                                <p>Hedef kitlenize isterseniz kendi başlığınız ile isterseniz de size özel DinamikSMS abone numaranız ile SMS gönderin.</p>
                                <a href="#" class="srv2-readmore-btn">İncele<i class="fas fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </section>

    <section class="bixol-service-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4">
                    <div class="bixol-services">
                        <div class="bixol-service-item">
                            <div class="bixol-icon-wrapper">
                                <span><i class="flaticon flaticon-return"></i></span>
                            </div>
                            <div class="bixol-service-content">
                                <a href=""><h6>HEMEN İADE</h6></a>
                                <p>Gönderilmeyen SMS'lerin kredi iadesi hemen yapılsın istiyorsanız,</p>
                            </div>
                        </div>
                        <div class="bixol-service-item">
                            <div class="bixol-icon-wrapper">
                                <span><i class="flaticon flaticon-return"></i></span>
                            </div>
                            <div class="bixol-service-content">
                                <a href="#"><h6>LİSANSLI FİRMA</h6></a>
                                <p>B.T.K Lisanslı YASAL bir hizmet istiyorsanız.</p>
                            </div>
                        </div>
                        <div class="bixol-service-item">
                            <div class="bixol-icon-wrapper">
                                <span><i class="flaticon flaticon-return"></i></span>
                            </div>
                            <div class="bixol-service-content">
                                <a href="#"><h6>GERÇEK ZAMANLI RAPOR</h6></a>
                                <p>SMS gönderimlerinizi gerçek zamanlı raporlayın. </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="bixol-service-middle">
                        <div class="img-wrapper">
                            <img src="/dinamiklogo.png" alt="">
                            <div class="banner-content">
                                <span class="banner-svg-1"></span>
                                <span class="banner-svg-2"></span>
                                <h3>13+</h3>
                                <p>Yıllık <br>Deneyim</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="bixol-services">
                        <div class="bixol-service-item">
                            <div class="bixol-icon-wrapper">
                                <span><i class="flaticon flaticon-return"></i></span>
                            </div>
                            <div class="bixol-service-content">
                                <a href="#"><h6>İLETİ YÖNETİM SİSTEMİ</h6></a>
                                <p>6563-Elektronik ticaretin düzenlenmesine tam entegre şeklinde yasal gönderim.</p>
                            </div>
                        </div>
                        <div class="bixol-service-item">
                            <div class="bixol-icon-wrapper">
                                <span><i class="flaticon flaticon-return"></i></span>
                            </div>
                            <div class="bixol-service-content">
                                <a href="#"><h6>TEK FİYAT</h6></a>
                                <p>Tüm GSM operatörlere gönderilir ve fiyatlar aynıdır.</p>
                            </div>
                        </div>
                        <div class="bixol-service-item">
                            <div class="bixol-icon-wrapper">
                                <span><i class="flaticon flaticon-return"></i></span>
                            </div>
                            <div class="bixol-service-content">
                                <a href="#"><h6>2 YIL GEÇERLİ</h6></a>
                                <p>Satın alınan kontörlerin kullanım süresi 2 yıldır.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="home2-pmv-section">
        <div class="container">
            <div class="pmv-bottom">

                <div class="pmv-nav">
                    <ul class="nav" >
                        @foreach($Service->where('category', 3) as $item)
                        <li><a href="#{{ str_replace('0850-','',$item->slug)}}" data-bs-toggle="tab" class="@if ($loop->first) active @endif">{{ $item->title }}</a></li>
                        @endforeach
                    </ul>
                </div>

                <div class="tab-content">
                    @foreach($Service->where('category', 3) as $item)
                    <div class="tab-pane fade  @if ($loop->first) active show @endif" id="{{ str_replace('0850-','',$item->slug)}}">
                        <div class="row align-items-center">
                            <div class="col-lg-6 order-2 order-lg-1">
                                <div class="pmv-content">
                                    <h4>{{ $item->title }}</h4>
                                    {{ $item->short }}
                                </div>
                                <div class="pmv-content">
                                <a href="{{ route(service($item->id), $item->slug) }}" class="bixol-primary-btn">Detaylı Bilgi İçin</a>
                                </div>
                            </div>
                            <div class="col-lg-6 order-1 order-lg-2">
                                <div class="img-wrapper">
                                    <img src="/frontend/images/sms.svg" alt="" class="img-fluid" width="250px">
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>


    <section class="home2-faq-area pt-20 pb-30">
        <div class="container">

            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="bixol-title-area text-center">
                        <h3>SIKÇA SORULAN SORULAR</h3>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-8">
                    <div class="faq-content">
                        <div class="faq-wrapper">
                            <div class="accordion" id="faq-accordion">
                                @foreach($Faq as $item)
                                <div class="accordion-item">
                                    <div class="accordion-header">
                                        <a href="#d-{{ $item->id }}" data-bs-toggle="collapse">{{ $item->title }}</a>
                                    </div>
                                    <div id="d-{{ $item->id }}" class="collapse @if  ($loop->first) show @endif" data-bs-parent="#faq-accordion">
                                        <div class="accordion-body">
                                            {!! $item->desc !!}
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mt-5">
                    <img src="/frontend/images/services/srd-img.png">
                </div>

            </div>
        </div>
    </section>

    <div class="home2-brand-area pt-60 pb-60">
        <div class="container">
            <div class="brand-wrapper">
                <div class="row home2-brand-slider">
                    <div class="brand-single">
                        <img src="http://www.dinamiksms.com.tr/dinamiktoplusms/saadet.png" alt="" width="150px">
                    </div>
                    <div class="brand-single">
                        <img src="http://www.dinamiksms.com.tr/dinamiktoplusms/chp.png" alt="" width="150px">
                    </div>
                    <div class="brand-single">
                        <img src="http://www.dinamiksms.com.tr/dinamiktoplusms/mhp.png" alt="" width="150px">
                    </div>
                    <div class="brand-single">
                        <img src="http://www.dinamiksms.com.tr/dinamiktoplusms/akparti.png" alt="" width="150px">
                    </div>
                    <div class="brand-single">
                        <img src="http://www.dinamiksms.com.tr/dinamiktoplusms/vestel.png" alt="" width="150px">
                    </div>
                </div>
            </div>

        </div>
    </div>


    <section class="home6-blog-area pt-50">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-style-4 text-center">
                        <h3>Duyuru - Blog - Haberler</h3>
                    </div>
                </div>
            </div>
            <div class="home6-blog-bottom">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="blog-column">
                                    <div class="thumb-wrapper">
                                        <img src="/frontend/images/home6/blog-1.jpg" alt="">
                                    </div>
                                    <div class="blog-content">
                                        <div class="h6-headline">
                                            <a href="#"><h6>Başvuru Evrakları Nelerdir?</h6></a>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="blog-column">
                                    <div class="thumb-wrapper">
                                        <img src="/frontend/images/home6/blog-2.jpg" alt="">
                                    </div>
                                    <div class="blog-content">
                                        <div class="h6-headline">
                                            <a href="#"><h6>Başvuru Evrakları Nelerdir?</h6></a>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="blog-right">
                            <div class="blog-item">
                                <div class="thumb-wrapper">
                                    <div class="thumb">
                                        <img src="/frontend/images/home6/blog-3.jpg" alt="">
                                    </div>
                                </div>
                                <div class="blog-content">
                                    <div class="h6-headline">
                                        <a href="#"><h6>Başvuru Evrakları Nelerdir?</h6></a>
                                    </div>

                                </div>
                            </div>
                            <div class="blog-item">
                                <div class="thumb-wrapper">
                                    <div class="thumb">
                                        <img src="/frontend/images/home6/blog-4.jpg" alt="">
                                    </div>

                                </div>
                                <div class="blog-content">
                                    <div class="h6-headline">
                                        <a href="#"><h6>Başvuru Evrakları Nelerdir?</h6></a>
                                    </div>

                                </div>
                            </div>
                            <div class="blog-item">
                                <div class="thumb-wrapper">
                                    <div class="thumb">
                                        <img src="/frontend/images/home6/blog-5.jpg" alt="">
                                    </div>

                                </div>
                                <div class="blog-content">
                                    <div class="h6-headline">
                                        <a href="#"><h6>Başvuru Evrakları Nelerdir?</h6></a>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection
@section('customJS')
    <script>
        var	tpj = jQuery;
        if(window.RS_MODULES === undefined) window.RS_MODULES = {};
        if(RS_MODULES.modules === undefined) RS_MODULES.modules = {};
        RS_MODULES.modules["revslider31"] = {init:function() {
                window.revapi3 = window.revapi3===undefined || window.revapi3===null || window.revapi3.length===0  ? document.getElementById("rev_slider_3_1") : window.revapi3;
                if(window.revapi3 === null || window.revapi3 === undefined || window.revapi3.length==0) { window.revapi3initTry = window.revapi3initTry ===undefined ? 0 : window.revapi3initTry+1; if (window.revapi3initTry<20) requestAnimationFrame(function() {RS_MODULES.modules["revslider31"].init()}); return;}
                window.revapi3 = jQuery(window.revapi3);
                if(window.revapi3.revolution==undefined){ revslider_showDoubleJqueryError("rev_slider_3_1"); return;}
                revapi3.revolutionInit({
                    revapi:"revapi3",
                    sliderLayout:"fullwidth",
                    visibilityLevels:"1240,1024,778,480",
                    gridwidth:"1230,1024,778,480",
                    gridheight:"500,500,500,540",
                    spinner:"spinner0",
                    perspective:600,
                    perspectiveType:"global",
                    keepBPHeight:true,
                    editorheight:"500,500,500,540",
                    responsiveLevels:"1240,1024,778,480",
                    progressBar:{disableProgressBar:true},
                    navigation: {
                        onHoverStop:false,
                        arrows: {
                            enable:true,
                            style:"custom",
                            hide_onleave:true,
                            left: {
                                h_offset:30
                            },
                            right: {
                                h_offset:30
                            }
                        }
                    },
                    parallax: {
                        levels:[5,10,15,20,25,30,35,40,45,46,47,48,49,50,51,30],
                        type:"scroll",
                        origo:"slidercenter",
                        speed:0
                    },
                    viewPort: {
                        global:false,
                        globalDist:"-200px",
                        enable:false
                    },
                    fallbacks: {
                        allowHTML5AutoPlayOnAndroid:true
                    },
                });

            }}
        if (window.RS_MODULES.checkMinimal!==undefined) { window.RS_MODULES.checkMinimal();};
    </script>
@endsection
