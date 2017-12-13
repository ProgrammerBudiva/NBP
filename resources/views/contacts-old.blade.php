@extends('layouts.index')
@section('head')

@endsection
<title>Контакты представителей мягкой черепицы BP в Украине</title>
@section('content')
    <div class="row yellow full-width margin-top-30 padding-top-bottom-30">
        <div class="row">
            <div class="column column-1-3">
                <ul class="contact-details-list">
                    <li class="sl-small-phone">
                        <p>Телефон:<br>
                            044 247 72 77 </p>
                    </li>
                </ul>
            </div>
            <div class="column column-1-3">
                <ul class="contact-details-list">
                    <li class="sl-small-location">
                        <p>г. Киев <br>
                            ул. Островная, 16</p>
                    </li>
                </ul>
            </div>
            <div class="column column-1-3">
                <ul class="contact-details-list">
                    <li class="sl-small-mail">
                        <p>E-mail:<br>
                            <a href="mailto:info@bpcan.in.ua">info@bpcan.in.ua</a></p>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    @include('map')

    <div  class="map-mobile clearfix">
        <div class="row page-margin-top ">
            <h4 class="box-header">КОНТАКТЫ</h4>
            <p class="description t1" style="color: #009ee3; line-height: 15px;">Отображены те города, в которых есть преставительства либо дилеры.</p>
            <ul class="accordion margin-top-40 clearfix" style="padding-bottom: 30px;">
                <li>
                    <div id="accordion-renovation-cost">
                        <h5>Киев</h5>
                    </div>
                    <p class="description t1"><b>Главное представительство</b></p>
                    <p class="description t1"><b>Адрес:</b> ул. Стройиндустрии, 7</p>
                    <p class="description t1"><b>Телефон: </b>044 247 72 77</p>
                    <p class="description t1"><b>E-mail: </b><a href="mailto:info@bpcan.in.ua">info@bpcan.in.ua</a></p>
                </li>
            </ul>
        </div>
    </div>


    <div class="theme-page">
        <div class="clearfix">
            {{--<div class="row full-width">--}}
                {{--<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d34223.1331378141!2d30.594100423457803!3d50.391730443868894!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40d4c5ed6628d82d%3A0x95836f18206f9ea6!2z0LLRg9C70LjRhtGPINCR0YPQtNGW0L3QtNGD0YHRgtGA0ZbRlywgN9CmLCDQmtC40ZfQsg!5e0!3m2!1sru!2sua!4v1503134921185"--}}
                        {{--width="1903" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>--}}
            {{--</div>--}}

            <div class="row full-width page-margin-top-section padding-bottom-66">
                <div class="row">
                    <h2 class="box-header padding-bottom-61">ОТПРАВИТЬ ЗАПРОС НА ПОЛУЧЕНИЕ ДИЛЕРСКИХ УСЛОВИЙ</h2>
                    <form class="contact-form" id="question-form">
                        <div class="row">
                            <fieldset class="column column-1-2">
                                <input class="text-input" name="name" type="text"  placeholder="Имя ">
                                <input class="text-input" name="phone" type="text"
                                       placeholder="Номер телефона ">
                                <input class="text-input" name="email" type="text" placeholder="Email*">
                            </fieldset>
                            <fieldset class="column column-1-2">
                        <textarea name="message" placeholder="Напишите немного о вашей компании"></textarea>
                            </fieldset>
                        </div>
                        <div class="row margin-top-30">
                            {{--<div class="column column-1-2">--}}
                                {{--<p class="description t1">Менеджер свяжется с Вами в течении 15 минут в рабочиие дни--}}
                                    {{--(пн.-пт с 9-18).</p>--}}
                            {{--</div>--}}
                            <div class="column column-1-2 align-left">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <input type="hidden" name="diller" value="1">
                                <input type="button" id="question" name="submit_question" value="ЖДУ ПРЕДЛОЖЕНИЯ" class="more active">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection