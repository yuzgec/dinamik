<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
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
                gridheight:"600,600,600,540",
                spinner:"spinner0",
                perspective:600,
                perspectiveType:"global",
                keepBPHeight:true,
                editorheight:"600,600,600,540",
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

</body>
</html>
