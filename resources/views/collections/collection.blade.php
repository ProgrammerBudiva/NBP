@extends('layouts.index')
@section('slider')
    @include('slider-collection')
@endsection
@section('content')
    <div class="row row-4-4">
        <div class="wpb_wrapper column colunm-1-4">
            <h3 class="box-header">ТЕКСТ</h3>
            <div class="wpb_text_column wpb_content_element ">
                <div class="wpb_wrapper">
                    <p>When it comes to choosing a renovator to transfor the interior of your home, quality and trust
                        should never be compromised. Working with a professional is an absolute must. With over 15 years
                        experience and a real focus on customer satisfaction, you can rely on us for your next
                        renovation, driveway sett on home repair. Our installations are carried out by fully trained
                        staff to the highest professional standards. Always on time and on budget.</p>

                </div>
            </div>

            <div class="wpb_text_column wpb_content_element ">
                <div class="wpb_wrapper">
                    <p>Renovate has proven results for setting exceptional standards in cost control, planning,
                        scheduling and project safety. We have experience that gives us a competitive advantage over
                        others in our field.</p>

                </div>
            </div>
        </div>
    </div>
    {{--<div class="vc_row wpb_row vc_row-fluid  full-width">--}}
    {{--<div class="wpb_column vc_column_container vc_col-sm-12">--}}
    <div class="wpb_wrapper">
        <ul class=" test-slider">
            <li><a class="gallery" data-lightbox="roadtrip" rel="gallery"
                   href="http://quanticalabs.com/wp_themes/renovate/files/2015/05/image_07-480x320.jpg">
                    <img class="test_gallery"
                         src="http://quanticalabs.com/wp_themes/renovate/files/2015/05/image_07-480x320.jpg"
                         title="cfbcfbfcb">
                </a></li>
            <li><a class="gallery" data-lightbox="roadtrip" rel="gallery"
                   href="http://quanticalabs.com/wp_themes/renovate/files/2015/05/image_04-480x320.jpg">
                    <img class="test_gallery"
                         src="http://quanticalabs.com/wp_themes/renovate/files/2015/05/image_04-480x320.jpg"
                         title="cfbcfbfcb">
                </a></li>
            <li><a class="gallery" rel="gallery" data-lightbox="roadtrip"
                   href="http://quanticalabs.com/wp_themes/renovate/files/2015/05/image_07-480x320.jpg">
                    <img class="test_gallery"
                         src="http://quanticalabs.com/wp_themes/renovate/files/2015/05/image_05-480x320.jpg"
                         title="fbfcbcbcb">
                </a></li>
            <li><a rel="gallery" data-lightbox="roadtrip"
                   href="http://quanticalabs.com/wp_themes/renovate/files/2015/05/image_07-480x320.jpg">
                    <img class="test_gallery" data-lightbox="roadtrip"
                         src="http://quanticalabs.com/wp_themes/renovate/files/2015/05/image_06-480x320.jpg"
                         title="cghbcfgc">
                </a></li>
            <li><a rel="gallery" data-lightbox="roadtrip"
                   href="http://quanticalabs.com/wp_themes/renovate/files/2015/05/image_07-480x320.jpg">
                    <img class="test_gallery"
                         src="http://quanticalabs.com/wp_themes/renovate/files/2015/05/image_07-480x320.jpg"
                         title="cfbcfbfcb">
                </a></li>
        </ul>
    </div>
    {{--</div>--}}
    {{--</div>--}}
    <div class="row row-4-4">
        <div class="wpb_wrapper column colunm-1-4">
            <h3 class="box-header page-margin-top">ХАРАКТЕРИСТИКИ</h3>
            <div class="wpb_raw_code wpb_content_element wpb_raw_html">
                <div class="wpb_wrapper">
                    <table class="margin-top-40">
                        <tbody>
                        <tr>
                            <td>Гарантия</td>
                            <td><?=$charcs->warranty?></td>
                        </tr>
                        <tr>
                            <td>Вес</td>
                            <td><?=$charcs->weight?></td>
                        </tr>
                        <tr>
                            <td>Размер листа</td>
                            <td><?=$charcs->size?></td>
                        </tr>
                        <tr>
                            <td>Метров в упаковке</td>
                            <td><?=$charcs->length_of_sheets?></td>
                        </tr>
                        <tr>
                            <td>Листов в пачке</td>
                            <td><?=$charcs->quantity_of_sheets?></td>
                        </tr>
                        <tr>
                            <td>Упаковок на палете</td>
                            <td><?=$charcs->quantity_of_boxes?></td>
                        </tr>
                        <tr>
                            <td>Видимая часть (выступ)</td>
                            <td><?=$charcs->protrusion?></td>
                        </tr>
                        <tr>
                            <td>Устойчивость к ветру</td>
                            <td><?=$charcs->wind_min?></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="row gray full-width page-margin-top-section page-padding-top-section padding-bottom-66">
        <div class="row">
            <div class="tabs no-scroll clearfix">
                <ul class="tabs-navigation clearfix">
                    <li>
                        <a href="#we-offer" title="We Offer" class="sl-small-bubble-check">
                            We Offer
                        </a>
                        <span></span>
                    </li>
                    <li>
                        <a href="#we-guarantee" title="We Guarantee" class="sl-small-shield">
                            We Guarantee
                        </a>
                        <span></span>
                    </li>
                    <li>
                        <a href="#we-provide" title="We Provide" class="sl-small-truck">
                            We Provide
                        </a>
                        <span></span>
                    </li>
                </ul>
                <div id="we-offer">
                    <h4 class="box-header">OUR OFFER</h4>
                    <p>Paetos dignissim at cursus elefeind norma arcu. Pellentesque accumsan est in tempus etos
                        ullamcorper, sem quam suscipit lacus maecenas tortor. Erates vitae node metus. Suspendisse
                        gravida ornare non mattis velit rutrum modest. Morbi suspendisse a tortor velim pellentesque
                        uter justo magna gravida.</p>
                </div>
                <div id="we-guarantee">
                    <h4 class="box-header">OUR WARRANTY COVERS</h4>
                    <p>Paetos dignissim at cursus elefeind norma arcu. Pellentesque accumsan est in tempus etos
                        ullamcorper, sem quam suscipit lacus maecenas tortor. Erates vitae node metus. Suspendisse
                        gravida ornare non mattis velit rutrum modest. Morbi suspendisse a tortor velim pellentesque
                        uter justo magna gravida.</p>

                </div>
                <div id="we-provide">
                    <h4 class="box-header">OUR SERVICES</h4>
                    <p>Paetos dignissim at cursus elefeind norma arcu. Pellentesque accumsan est in tempus etos
                        ullamcorper, sem quam suscipit lacus maecenas tortor. Erates vitae node metus. Suspendisse
                        gravida ornare non mattis velit rutrum modest. Morbi suspendisse a tortor velim pellentesque
                        uter justo magna gravida.</p>
                </div>
            </div>
        </div>
    </div>

@endsection