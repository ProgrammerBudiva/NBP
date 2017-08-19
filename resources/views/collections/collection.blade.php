@extends('layouts.index')
@section('slider')
    @include('slider-collection')
@endsection
@section('content')
    <div class="row full-width page-margin-top-section">
        <div class="row">
            <h2 class="box-header"><?=$charcs->description_title ?></h2>
            <div class="margin-top-43">
                <?=$charcs->description ?>
            </div>
            <div class="margin-top-34">
                {{--<div class="wpb_wrapper">--}}
                {{--<h3 class="box-header page-margin-top">ХАРАКТЕРИСТИКИ</h3>--}}
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
    </div>

    <div class="row full-width page-padding-top-section">
        <div class="row">
            <h2 class="box-header">ЦВЕТОВЫЕ РЕШЕНИЯ</h2>
        </div>
    </div>
    <div class="wpb_wrapper margin-top-67">
        <ul class=" test-slider">
            <li>
                <a class="gallery" data-lightbox="roadtrip" rel="gallery"
                   href="http://quanticalabs.com/wp_themes/renovate/files/2015/05/image_07-480x320.jpg">
                    <img class="test_gallery"
                         src="http://quanticalabs.com/wp_themes/renovate/files/2015/05/image_07-480x320.jpg"
                         title="cfbcfbfcb">
                </a>
            </li>
            <li>
                <a class="gallery" data-lightbox="roadtrip" rel="gallery"
                   href="http://quanticalabs.com/wp_themes/renovate/files/2015/05/image_04-480x320.jpg">
                    <img class="test_gallery"
                         src="http://quanticalabs.com/wp_themes/renovate/files/2015/05/image_04-480x320.jpg"
                         title="cfbcfbfcb">
                </a>
            </li>
            <li>
                <a class="gallery" rel="gallery" data-lightbox="roadtrip"
                   href="http://quanticalabs.com/wp_themes/renovate/files/2015/05/image_07-480x320.jpg">
                    <img class="test_gallery"
                         src="http://quanticalabs.com/wp_themes/renovate/files/2015/05/image_05-480x320.jpg"
                         title="fbfcbcbcb">
                </a>
            </li>
            <li>
                <a rel="gallery" data-lightbox="roadtrip"
                   href="http://quanticalabs.com/wp_themes/renovate/files/2015/05/image_07-480x320.jpg">
                    <img class="test_gallery" data-lightbox="roadtrip"
                         src="http://quanticalabs.com/wp_themes/renovate/files/2015/05/image_06-480x320.jpg"
                         title="cghbcfgc">
                </a>
            </li>
            <li>
                <a rel="gallery" data-lightbox="roadtrip"
                   href="http://quanticalabs.com/wp_themes/renovate/files/2015/05/image_07-480x320.jpg">
                    <img class="test_gallery"
                         src="http://quanticalabs.com/wp_themes/renovate/files/2015/05/image_07-480x320.jpg"
                         title="cfbcfbfcb">
                </a>
            </li>
        </ul>
    </div>

    <div class="row page-margin-top-section full-width padding-bottom-66">
        <div class="row">
            <h2 class="box-header padding-top-bottom-30">ДОСТОИНСТВА КОЛЛЕКЦИИ MANOIR</h2>
            @foreach($advantages as $advantage)

                <div class="timeline-item vertical-align-table">
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
                        <p class="description t1 margin-top-10">{{$advantage->advantage}}</p>
                    </div>
                </div>

            @endforeach
        </div>
    </div>

    <div class="theme-page padding-bottom-66">
        <div class="row page-margin-top">
            <h2 class="box-header padding-bottom-61">ЗАКАЗАТЬ НА МОЙ ОБЪЕКТ</h2>
            <form class="contact-form" id="contact-form" method="post"
                  action="contact_form/contact_form.php">
                <div class="row">
                    <fieldset class="column column-1-2">
                        <input class="text-input" name="name" type="text" value="Имя *" placeholder="Имя *">
                        <input class="text-input" name="phone" type="text" value="Номер телефона *"
                               placeholder="Номер телефона *">
                        <input class="text-input" name="email" type="text" value="Email *"
                               placeholder="Email *">
                    </fieldset>
                    <fieldset class="column column-1-2">
                        <textarea name="message"
                                  placeholder="Комментарии к моему заказу">Комментарии к моему заказу</textarea>
                    </fieldset>
                </div>
                <div class="row margin-top-30">
                    <div class="column column-1-2">
                        <p class="description t1">Менеджер свяжется с Вами в течении 15 минут в рабочиие дни (пн.-пт с 9-18).</p>
                    </div>
                    <div class="column column-1-2 align-left">
                        <input type="hidden" name="action" value="contact_form"/>
                        <input type="submit" name="submit" value="ПОДТВЕРЖДАЮ МОЙ ЗАКАЗ" class="more active">
                    </div>
                </div>
            </form>
        </div>
    </div>

@endsection