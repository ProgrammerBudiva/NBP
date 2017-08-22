@extends('layouts.index')

@section('slider')
    @include('slider')
@endsection

<title>Коллекция гибкой черепицы NВР</title>
@section('content')

    <div class="row full-width page-padding-top-section padding-bottom-66">
        <div class="row">
            <h2 class="box-header">КОЛЛЕКЦИИ</h2>
            <p class="description ">Ассортимент мягкой черепицы BP настолько богат, что поможет
                удовлетворить требования любого заказчика: практичного, изысканного и экономичного.</p>
            <p class="description align-justify"> Ламинированная кровля превосходит по прочности обычную
                битумную черепицу, поскольку имеет в своей основе не один, а два несвязанных друг с другом слоя
                армированного стекловолокна. Черепица этих коллекций производят эффект объема и пространственной
                завершенности. </p>
            <p class="description align-justify"> Классическая однослойная битумная черепица серии DAKOTA и
                YUKON SB придаст красоту вашей кровле и подойдет под любой фасад. </p>
            <h4 class="box-header margin-top-40">ЛАМИНИРОВАННАЯ</h4>
            <ul class="services-list clearfix page-margin-top">
                <li class="page-margin-right">
                    <a href="{{URL('/collection/manoir')}}" title="MANOIR">
                        <img src="images/samples/gallery/manoir-autumn-brown-su0222.png" alt="">
                    </a>
                    <h4 class="box-header"><a href="{{URL('/collection/manoir')}}"
                                              title="MANOIR">MANOIR</a></h4>
                    <p>Ламинированная черепица с пожизненной гарантией. Уникальная структура гонта с эффектом
                        тени. 7 цветов</p>
                </li>
                <li class="page-margin-right">
                    <a href="{{URL('/collection/everest')}}" title="EVEREST">
                        <img src="images/samples/gallery/everest-blue_09_e.jpg" alt="">
                    </a>
                    <h4 class="box-header"><a href="{{URL('/collection/everest')}}" title="EVEREST">EVEREST
                            42</a></h4>
                    <p>Классическая ламинированная битумная черепица с пожизненной гарантией в форме трехмерных
                        квадратов. 12 цветов</p>
                </li>
                <li>
                    <a href="{{URL('/collection/mystique')}}" title="MYSTIQUE">
                        <img src="images/samples/gallery/mystique_forest-green_11_E.jpg" alt="">
                    </a>
                    <h4 class="box-header"><a href="{{URL('/collection/mystique')}}" title="MYSTIQUE">MYSTIQUE
                            42</a></h4>
                    <p>Черепица с пожизненной гарантией в виде чередования квадратов и прямоугольников с
                        увеличенными гонтами. 12 цветов</p>
                </li>
            </ul>
            <h4 class="box-header margin-top-40">ОДНОСЛОЙНАЯ</h4>

            <ul class="services-list clearfix page-margin-top">
                <li class="page-margin-right">
                    <a href="{{URL('/collection/yukon-sb')}}" title="YUKON SB">
                        <img src="images/samples/gallery/yukon-sb_weathered-rock_ew.jpg" alt="">
                    </a>
                    <h4 class="box-header"><a href="{{URL('/collection/yukon-sb')}}"
                                              title="YUKON SB">YUKON SB</a></h4>
                    <p>Серия однослойной черепицы с гарантией 30 лет. Гонты в форме прямоугольников. 12
                        цветов</p>
                </li>
                <li>
                    <a href="{{URL('/collection/dakota')}}" title="DAKOTA">
                        <img src="images/samples/gallery/dakota-redwood-su0261.png" alt="">
                    </a>
                    <h4 class="box-header"><a href="{{URL('/collection/dakota')}}"
                                              title="DAKOTA">DAKOTA</a></h4>
                    <p>Однослойная черепица выполнена в форме прямоугольников. Гарантия 25 лет. 15 цветов</p>
                </li>
            </ul>
        </div>
    </div>

    <div class="row page-margin-top-section full-width padding-bottom-66">
        <div class="row">

            <div class="">
                {{--<div class="wpb_wrapper">--}}
                {{--<h3 class="box-header page-margin-top">ХАРАКТЕРИСТИКИ</h3>--}}
                <div class="wpb_raw_code wpb_content_element wpb_raw_html">
                    <div class="wpb_wrapper collection">
                        <table class="margin-top-40">
                            <tbody>
                            <tr>
                                <td>Название колекции</td>
                                <td>MANOIR</td>
                                <td>EVEREST 42</td>
                                <td>MYSTIQUE 42</td>
                                <td>YUKON SB</td>
                                <td>DAKOTA</td>
                                <td>Стартовый профиль Starter Strip </td>
                            </tr>
                            <tr>
                                <td>Артикул</td>
                                <td>RL200</td>
                                <td>RL442</td>
                                <td>RL621</td>
                                <td>RT606</td>
                                <td>RT664</td>
                                <td>RH100</td>
                            </tr>
                            <tr>
                                <td>Гарантия</td>
                                <td colspan="3">Ограниченная пожизненная</td>
                                <td>30 лет</td>
                                <td>25 лет</td>
                                <td>как в коллекции</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>


        </div>
    </div>
@endsection
