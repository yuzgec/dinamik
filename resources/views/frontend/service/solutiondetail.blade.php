@extends('frontend.layout.app')
@section('content')

    <div class="bixol-breadcrumb" data-background="/frontend/images/banner.jpg">
        <div class="container">
            <div class="breadcrumb-content">
                <h1>{{ $Detay->title }}</h1>
                <a href="/dinamik">Anasayfa <i class="fas fa-angle-double-right"></i></a>
                <a href="/dinamik">Çözümlerimiz <i class="fas fa-angle-double-right"></i></a>
                <span>{{ $Detay->title }}</span>
            </div>
        </div>
    </div>

    <section class="service-details pt-100 pb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="sr-sidebar">

                        @foreach($ServiceCategory as $item)
                        <div class="sidebar-widget sr-list-widget">
                            <div class="widget-title">
                                <h5>{{ $item->title }}</h5>
                            </div>
                            <div class="list-nav">
                                <ul>
                                    @foreach($item->getService as $row)
                                        <li>
                                            <a href="{{ route(($item->id == 1 ) ?  'servicedetail' : 'solutiondetail' , $row->slug) }}">
                                                {{ $row->title }}
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        @endforeach
                        <div class="sidebar-widget sr-list-widget">
                            <div class="widget-title">
                                <h5>Kurumsal</h5>
                            </div>
                            <div class="list-nav">
                                <ul>
                                    @foreach($Pages as $item)
                                        <li>
                                            <a href="{{ route('corporatedetail',$item->slug) }}">
                                                {{ $item->title }}
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="sr-details-content">
                        <div class="title-txt">
                            <h3>{{ $Detay->title }}</h3>
                        </div>
                        <div class="pera-text mt-20">
                            <p>As a app web crawler expert, I help organizations adjust to the expanding significance of internet
                                promoting.  or lipsum as it is sometimes known, is dummy text used in laying out print, grap or web
                                designs. USA champions professionalism in the cleaning industry by providing top-quality cleaning and related services that meet and exceed the expectations of today’s demanding corporate, office and ware
                                house clients…courteously, responsively.
                            </p>
                        </div>
                        <div class="pera-txt mt-20">
                            <p>USA champions professionalism in the cleaning industry by providing top-quality cleaning and related services that meet and exceed the expectations of today’s demanding corporate, office, industrial and warehouse clients…courteously, responsively, responsibly, dependably, economically and on-time.
                                We provide janitorial.</p>
                        </div>
                        <div class="pera-txt mt-20">
                            <p>A neatly maintained building is an important asset to every organization. It reflects who you are and influences how your customers perceive you.</p>
                        </div>

                        <div class="sr-details-bottom mt-40">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="sr-details-left">
                                        <div class="title-txt">
                                            <h4>Service Overview</h4>
                                        </div>
                                        <div class="pera-txt mt-20">
                                            <p>A neatly maintained building is an important asset to every organization. It reflects who you are and influences how your customers perceive you to complete depending on the size.</p>
                                        </div>
                                        <div class="pera-txt mt-20">
                                            <p>Condition of your home. We work in teams of 2-4 or more. A team leader or the owner.</p>
                                        </div>
                                        <div class="srd-list mt-20">
                                            <ul>
                                                <li><i class="fas fa-check"></i><p>The housekeepers we hired are professionals who take pride in doing excellent work and in exceeding expectations.</p></li>
                                                <li><i class="fas fa-check"></i><p>We carefully screen all of our cleaners, so you can rest assured that your home would receive the absolute highest quality of service providing.</p></li>
                                                <li><i class="fas fa-check"></i><p>Your time is precious, and we understand that cleaning is really just one more item on your to-do list.</p></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="srd-right-img">
                                        <img src="/frontend/images/services/srd-img.png" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Case Study -->
    <div class="bixol-case-study">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="bixol-ct-left" data-background="/frontend/images/home1/map-bg.png">
                        <span class="ct-title">80<sup>+</sup></span>
                        <span class="ct-subtitle">İş Ortaklarımız</span>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="bixol-ct-right">
                        <div class="row">
                            <div class="col-md-4 col-sm-6 p-0 grid-item">
                                <div class="bixol-pt-item">
                                    <img src="/frontend/images/home1/partner-1.png" alt="">
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 p-0 grid-item">
                                <div class="bixol-pt-item">
                                    <img src="/frontend/images/home1/partner-2.png" alt="">
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 p-0 grid-item">
                                <div class="bixol-pt-item">
                                    <img src="/frontend/images/home1/partner-3.png" alt="">
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 p-0 grid-item">
                                <div class="bixol-pt-item">
                                    <img src="/frontend/images/home1/partner-4.png" alt="">
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 p-0 grid-item">
                                <div class="bixol-pt-item">
                                    <img src="/frontend/images/home1/partner-5.png" alt="">
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 p-0 grid-item">
                                <div class="bixol-pt-item">
                                    <img src="/frontend/images/home1/partner-6.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @endsection
