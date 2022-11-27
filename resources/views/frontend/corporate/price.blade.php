@extends('frontend.layout.app')
@section('content')
    <div class="bixol-breadcrumb" data-background="/frontend/images/banner.jpg">
        <div class="container">
            <div class="breadcrumb-content">
                <h1>SMS Fiyatları</h1>
                <a href="{{ route('home') }}">Anasayfa <i class="fas fa-angle-double-right"></i></a>
                <a href="#">Kurumsal <i class="fas fa-angle-double-right"></i></a>
                <span>Fiyatlar</span>
            </div>
        </div>
    </div>


    <section class="home6-pricing-table pt-10 pb-10">
        <div class="container">

            <div class="home6-pricing">
                <div class="row justify-content-center">
                    @foreach($Price as $item)
                        <div class="col-lg-3 col-md-6 p-0">
                            <div class="home6-pricing-column">
                                <div class="h6-headline">
                                    <h5>{{ $item->title }} SMS</h5>
                                </div>
                                <div class="price-area">
                                    <h2>{{ $item->price }}₺</h2>
                                </div>
                              {{--  <div class="feature-list">
                                    <ul>
                                        <li>Başlıklı Sms Gönderimi</li>
                                        <li>Anlık Detaylı Raporlama</li>
                                        <li>İletilmeyen İadesi</li>
                                        <li>Her yöne Gönderim</li>
                                        <li>Kolay Excel Aktarım</li>
                                        <li>KDV Dahil</li>
                                    </ul>
                                </div>--}}
                                {{--     <div class="price-btn">
                                         <a href="#" class="mb-1">Planı Seç</a>
                                     </div>--}}
                           {{--     <div class="header-btn">
                                    <a href="{{ route('contactus') }}" class="home5-primary-btn" style="width:170px">Bilgi Al
                                        <span><i class="fas fa-long-arrow-alt-right"></i></span>
                                    </a>
                                </div>--}}
                            </div>
                        </div>

                    @endforeach

                </div>
            </div>
        </div>
    </section>
@endsection
