@extends('frontend.layout.app')
@section('content')

    <div class="bixol-breadcrumb" data-background="/frontend/images/banner.jpg">
         <span class="breadcrumb-object">
            <img src="/frontend/images/email-icon.png" alt="{{ config('app.name') }}">
        </span>
        <div class="container">
            <div class="breadcrumb-content">
                <h1>{{ $Detay->title }}</h1>
                <a href="/dinamik">Anasayfa <i class="fas fa-angle-double-right"></i></a>
                <a href="/dinamik">Çözümlerimiz <i class="fas fa-angle-double-right"></i></a>
                <span>{{ $Detay->title }}</span>
            </div>
        </div>
    </div>

    <section class="service-details pt-50 pb-50">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="sr-sidebar">

                        @include('frontend.layout.sozlesme')

                        @foreach($ServiceCategory->whereIn('id',[1,$Detay->id]) as $item)
                            <div class="sidebar-widget sr-list-widget cerceve p-2">
                            <div class="widget-title">
                                <h5>{{ $item->title }}</h5>
                            </div>
                            <div class="list-nav">
                                <ul>
                                    @foreach($item->getService as $row)
                                        <li>
                                            <a href="{{ route(service($item->id), $row->slug) }}" title="{{ $row->title }}">
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
