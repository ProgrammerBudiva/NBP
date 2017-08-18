@extends('layouts.index')
@section('slider')
    @include('slider-collection')
@endsection
@section('content')
    <div class="row full-width page-margin-top-section">
        <div class="row">
            <h2 class="box-header"><?=$charcs->description_title ?></h2>
            <?=$charcs->description ?>
        </div>
    </div>
    {{--<div class="vc_row wpb_row vc_row-fluid  full-width">--}}
        {{--<div class="wpb_column vc_column_container vc_col-sm-12">--}}
            <div class="wpb_wrapper">
                <ul class=" test-slider">
                    <li><a class="gallery" data-lightbox="roadtrip" rel="gallery" href="http://quanticalabs.com/wp_themes/renovate/files/2015/05/image_07-480x320.jpg" >
                        <img class="test_gallery"  src="http://quanticalabs.com/wp_themes/renovate/files/2015/05/image_07-480x320.jpg"  title="cfbcfbfcb">
                    </a></li>
                    <li><a class="gallery" data-lightbox="roadtrip" rel="gallery" href="http://quanticalabs.com/wp_themes/renovate/files/2015/05/image_04-480x320.jpg" >
                        <img class="test_gallery"  src="http://quanticalabs.com/wp_themes/renovate/files/2015/05/image_04-480x320.jpg"  title="cfbcfbfcb">
                        </a></li>
                    <li><a class="gallery" rel="gallery" data-lightbox="roadtrip"  href="http://quanticalabs.com/wp_themes/renovate/files/2015/05/image_07-480x320.jpg" >
                        <img class="test_gallery"  src="http://quanticalabs.com/wp_themes/renovate/files/2015/05/image_05-480x320.jpg"  title="fbfcbcbcb">
                        </a></li>
                    <li><a rel="gallery" data-lightbox="roadtrip" href="http://quanticalabs.com/wp_themes/renovate/files/2015/05/image_07-480x320.jpg" >
                        <img class="test_gallery" data-lightbox="roadtrip"  src="http://quanticalabs.com/wp_themes/renovate/files/2015/05/image_06-480x320.jpg" title="cghbcfgc">
                        </a></li>
                    <li><a rel="gallery" data-lightbox="roadtrip" href="http://quanticalabs.com/wp_themes/renovate/files/2015/05/image_07-480x320.jpg" >
                        <img class="test_gallery"  src="http://quanticalabs.com/wp_themes/renovate/files/2015/05/image_07-480x320.jpg"  title="cfbcfbfcb">
                        </a></li>
                </ul>
            </div>
        {{--</div>--}}
    {{--</div>--}}
    <div class="row gray page-margin-top-section full-width page-padding-top-section padding-bottom-66">
        <div class="row">
            <h2 class="box-header">ПРЕИМУЩЕСТВА</h2>

            @foreach($advantages as $advantage)

            <div class="timeline-item vertical-align-table margin-top-40">
                <div class="timeline-left vertical-align-cell">
                    <div class="label-container">
                        <div class="animated-element animation-slideRight25">
                            <span class="label-triangle"></span>
                            <label>{{$loop->index+1}}</label>
                        </div>
                        <span class="timeline-circle animated-element animation-scale"></span>
                    </div>
                </div>
                <div class="timeline-content vertical-align-cell">
                    <h4 class="clearfix">
                        <span class="timeline-title">{{$advantage->advantage_title}}</span>
                    </h4>
                    <p class="description t1">{{$advantage->advantage}}</p>
                </div>
            </div>

            @endforeach
        </div>
    </div>
@endsection