@extends('layouts.index')

@section('slider')
    @include('slider')
@endsection

<title>Коллекция гибкой черепицы BP</title>
@section('content')

    <div class="row full-width page-padding-top-section padding-bottom-66">
        <div class="row">
            <h2 class="box-header">КОЛЛЕКЦИИ</h2>
            <p class="description ">Ассортимент мягкой черепицы BP настолько богат, что поможет
                удовлетворить требования любого заказчика: практичного, изысканного и экономичного.</p>
            <p class="description align-justify"> Ламинированная кровля превосходит по прочности обычную
                битумную черепицу, поскольку имеет в своей основе не один, а два несвязанных друг с другом слоя
                армированного стекловолокна. Большие выразительные 3D
                теневые полосы и приглушенная окраска создают глубокий, смелый и динамичный стиль.</p>
            <p class="description align-justify"> Классическая однослойная битумная черепица серии DAKOTA и
                YUKON SB имеет привлекательный винтажный стиль,
                который придаст красоту вашей кровле и подойдет под любой фасад. </p>
            <h4 class="box-header margin-top-40">ЛАМИНИРОВАННАЯ</h4>
            <ul class="services-list clearfix page-margin-top">
                <li class="page-margin-right">
                    <div>
                    <a href="{{URL('/collection/manoir')}}" title="MANOIR">
                        <img src="images/samples/gallery/manoir-autumn-brown-su0222.png" alt="">
                    </a>
                    </div>
                    <div>
                    <h4 class="box-header"><a href="{{URL('/collection/manoir')}}"
                                              title="MANOIR">MANOIR</a></h4>
                    <p>Ламинированная черепица с пожизненной гарантией. Уникальная структура гонта с эффектом
                        тени. 7 цветов</p></div>
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
                        <h2 class="box-header padding-bottom-61">СРАВНЕНИЕ ХАРАКТЕРИСТИК КОЛЛЕКЦИЙ</h2>
                        <table class="" id="charcs-table">
                            <tbody>
                            <tr>
                                <td>Название колекции</td>
                                <td><a href="{{url('/collection/manoir')}}" style="color: #009ee3;"> MANOIR</a></td>
                                <td><a href="{{url('/collection/everest')}}" style="color: #009ee3;"> EVEREST 42</a></td>
                                <td><a href="{{url('/collection/mystique')}}" style="color: #009ee3;"> MYSTIQUE 42</a></td>
                                <td><a href="{{url('/collection/yukon-sb')}}" style="color: #009ee3;"> YUKON SB</a></td>
                                <td><a href="{{url('/collection/dakota')}}" style="color: #009ee3;"> DAKOTA</a></td>
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
                                <td>Защита от ветра, км/ч (обычная/повышенная)</td>
                                <td colspan="3">180/220</td>
                                <td colspan="2">180/200</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Размеры гонта, мм</td>
                                <td>1029x343</td>
                                <td colspan="2">1067x356</td>
                                <td colspan="2">1000x336	</td>
                                <td>1000x137</td>
                            </tr>
                            <tr>
                                <td>Видимая часть гонта, мм</td>
                                <td>146</td>
                                <td colspan="2">152</td>
                                <td colspan="2">143</td>
                                <td>21</td>
                            </tr>
                            <tr>
                                <td>В упаковке, м.кв.</td>
                                <td>3</td>
                                <td>3,06</td>
                                <td>3,06</td>
                                <td>3</td>
                                <td>3</td>
                                <td>21</td>
                            </tr>
                            <tr>
                                <td>Гонтов в упаковке, шт</td>
                                <td>20</td>
                                <td>19</td>
                                <td>19</td>
                                <td>21</td>
                                <td>21</td>
                                <td>21</td>
                            </tr>
                            <tr>
                                <td>Упаковок на паллете, шт</td>
                                <td>32</td>
                                <td>36</td>
                                <td>36</td>
                                <td>40</td>
                                <td>40</td>
                                <td>70</td>
                            </tr>
                            <tr>
                                <td>Количество на паллете, м.кв.</td>
                                <td>96</td>
                                <td>110,16</td>
                                <td>110,16</td>
                                <td>120</td>
                                <td>120</td>
                                <td>1470 м.п.</td>
                            </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="row gray page-margin-top-section full-width page-padding-top-section padding-bottom-66">
            <div class="row">
                <h2 class="box-header">ВАШ ДОМ ЖДЕТ ЧЕРЕПИЦУ <span style="color: #009ee3">BUILDING PRODUCTS</span></h2>
            </div>
            <div class="wpb_wrapper margin-top-67">
                <ul class=" test-slider">
                    <li><a class="gallery" data-lightbox="roadtrip" rel="gallery"
                           href="images/samples/slider/image-110.jpg">
                            <img class="test_gallery"
                                 src="images/samples/slider/image-110.jpg"
                                 title="Коллекция Mystique - цвет Slate Grey">
                        </a>
                    </li>
                    <li><a class="gallery" data-lightbox="roadtrip" rel="gallery"
                           href="images/samples/slider/image-111.jpg">
                            <img class="test_gallery"
                                 src="images/samples/slider/image-111.jpg"
                                 title="Коллекция Mystique - цвет Antique Slate">
                        </a>
                    </li>
                    <li><a class="gallery" rel="gallery" data-lightbox="roadtrip"
                           href="images/samples/slider/image-112.jpg">
                            <img class="test_gallery"
                                 src="images/samples/slider/image-112.jpg"
                                 title="Коллекция Everest - цвет Drift Wood">
                        </a>
                    </li>
                    <li><a rel="gallery" data-lightbox="roadtrip"
                           href="images/samples/slider/image-113.jpg">
                            <img class="test_gallery" data-lightbox="roadtrip"
                                 src="images/samples/slider/image-113.jpg"
                                 title="Коллекция Mystique - цвет Slate Grey">
                        </a>
                    </li>
                    <li><a rel="gallery" data-lightbox="roadtrip"
                           href="images/samples/slider/image-114.jpg">
                            <img class="test_gallery"
                                 src="images/samples/slider/image-114.jpg"
                                 title="Коллекция Everest - цвет Weathered Rock">
                        </a>
                    </li>
                    <li><a rel="gallery" data-lightbox="roadtrip"
                           href="images/samples/slider/image-115.jpg">
                            <img class="test_gallery"
                                 src="images/samples/slider/image-115.jpg"
                                 title="Коллекция Everest - цвет Twilight Grey">
                        </a>
                    </li>
                    <li><a rel="gallery" data-lightbox="roadtrip"
                           href="images/samples/slider/image-116.jpg">
                            <img class="test_gallery"
                                 src="images/samples/slider/image-116.jpg"
                                 title="Коллекция Everest - цвет Autumn Brown">
                        </a>
                    </li>
                    <li><a rel="gallery" data-lightbox="roadtrip"
                           href="images/samples/slider/image-117.jpg">
                            <img class="test_gallery"
                                 src="images/samples/slider/image-117.jpg"
                                 title="Коллекция Dakota - цвет Tone Brown">
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="row full-width page-margin-top-section padding-bottom-66">
            <div class="row">
                <h2 class="box-header padding-bottom-61">У МЕНЯ ОСТАЛИСЬ ВОПРОСЫ</h2>
                <form class="contact-form" id="question-form">
                    <div class="row">
                        <fieldset class="column column-1-2">
                            <input class="text-input" name="name" type="text"  placeholder="Имя ">
                            <input class="text-input" name="phone" type="text"
                                   placeholder="Номер телефона ">
                            <input class="text-input" name="email" type="text" placeholder="Email*">
                        </fieldset>
                        <fieldset class="column column-1-2">
                    <textarea name="message"
                              placeholder="Напишите ваш вопрос"></textarea>
                        </fieldset>
                    </div>
                    <div class="row margin-top-30">
                        {{--<div class="column column-1-2">--}}
                        {{--<p class="description t1">Менеджер свяжется с Вами в течении 15 минут в рабочиие дни--}}
                        {{--(пн.-пт с 9-18).</p>--}}
                        {{--</div>--}}
                        <div class="column column-1-2 align-left">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <input type="hidden" name="diller" value="0">
                            <input type="button" id="question" name="submit_question" value="ЗАДАТЬ ВОПРОС" class="more active">
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </div>
@endsection
