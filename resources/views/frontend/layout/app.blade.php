<!DOCTYPE html>
<html lang="tr">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {!! SEOMeta::generate() !!}
    {!! OpenGraph::generate() !!}
    {!! Twitter::generate() !!}
    @include('frontend.layout.css')
    @yield('customCSS')
    @include('frontend.layout.css')
</head>
<body>
    <div id="ct-loadding">
        <div class="loading-infinity">
            <div><span></span></div>
            <div><span></span></div>
            <div><span></span></div>
        </div>
    </div>
    <a href="#" class="scrolltop-btn"><span><i class="flaticon-arrow"></i></span></a>
    @include('frontend.layout.header')
    @yield('content')
    @include('frontend.layout.footer')
    @include('frontend.layout.js')
    @yield('customJS')
</body>
</html>
