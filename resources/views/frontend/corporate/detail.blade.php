@extends('frontend.layout.app')
@section('content')

    <div class="bixol-breadcrumb" data-background="/frontend/images/banner.jpg">
        <span class="breadcrumb-object">
            <img src="/frontend/images/email-icon.png" alt="{{ config('app.name') }}">
        </span>

        <div class="container">
            <div class="breadcrumb-content">
                <h1>{{ $Detay->title }}</h1>
                <a href="{{ route('home') }}">Anasayfa <i class="fas fa-angle-double-right"></i></a>
                <a href="#">Kurumsal <i class="fas fa-angle-double-right"></i></a>
                <span>{{ $Detay->title }}</span>
            </div>
        </div>
    </div>

    <section class="service-details pt-100 pb-50">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="sr-sidebar">

                        @include('frontend.layout.sozlesme')

                        <div class="sidebar-widget sr-list-widget cerceve p-2">
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
                        @foreach($ServiceCategory as $item)
                            <div class="sidebar-widget sr-list-widget cerceve p-2">
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
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="sr-details-content">
                        <div class="title-txt">
                            <h3>{{ $Detay->title }}</h3>
                        </div>
                        <div class="pera-text mt-20">
                            {!! $Detay->desc !!}
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
