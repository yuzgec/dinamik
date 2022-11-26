@extends('frontend.layout.app')
@section('content')

    <div class="bixol-breadcrumb" data-background="/frontend/images/banner.jpg">
        <div class="container">
            <div class="breadcrumb-content">
                <h1>Sıkça Sorulan Sorular</h1>
                <a href="{{ route('home') }}">Anasayfa <i class="fas fa-angle-double-right"></i></a>
                <a href="#">Kurumsal <i class="fas fa-angle-double-right"></i></a>
                <span>S.S.S.</span>
            </div>
        </div>
    </div>

    <section class="contact-v2 pt-100 pb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="faq-content">
                        <div class="faq-wrapper">
                            <div class="accordion" id="faq-accordion">
                                @foreach($All as $item)
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


            </div>
        </div>
    </section>
@endsection
