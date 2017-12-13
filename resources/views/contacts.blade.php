@extends('layouts.index')
@section('head')
@endsection
<title>Контакты представителей мягкой черепицы BP в Украине</title>
@section('content')
<div class="theme-page">
    <div class="clearfix">
        {{--<div class="row full-width">--}}
        {{--<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d34223.1331378141!2d30.594100423457803!3d50.391730443868894!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40d4c5ed6628d82d%3A0x95836f18206f9ea6!2z0LLRg9C70LjRhtGPINCR0YPQtNGW0L3QtNGD0YHRgtGA0ZbRlywgN9CmLCDQmtC40ZfQsg!5e0!3m2!1sru!2sua!4v1503134921185"--}}
        {{--width="1903" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>--}}
        {{--</div>--}}
        <div class="row row-contacts" id="flex-tab">
            <div class="column column-1-2">
                <div class="row full-width page-margin-top-section padding-bottom-66">
                    <div class="row">
                        <h4 style="color: #009ee3;">«ПЛАНЕТА К» - головное представительство BP в Украине</h4>
                        <h5 class="margin-top-20">Контакты</h5>

                        <p class="no-padding-gray">Киев, ул.Островная, 16</p>
                        <p class="no-padding-gray">+38 044 247 72 77</p>
                        <p class="no-padding-gray"><a href="mailto:info@bpcan.in.ua">info@bpcan.in.ua</a></p>
                    </div>
                    <div class="row full-width padding-top-bottom-30">
                    <iframe align="center" src="https://www.google.com/maps/embed/v1/place?q=%D0%BA%D0%B8%D0%B5%D0%B2%20%D0%BE%D1%81%D1%82%D1%80%D0%BE%D0%B2%D0%BD%D0%B0%D1%8F%2016&key=AIzaSyBH3MvhZwBBPjxyT33SBBTb3fPG8SG7L0Q"
                    width="550" height="397" frameborder="0" style="border:0;border: 1px solid #E2E6E7;" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
            <div class="column column-1-2">
                <div class="row full-width page-margin-top-section padding-bottom-66">
                    <div class="row">
                        <h2 class="box-header padding-bottom-61">ОТПРАВИТЬ ЗАПРОС НА ПОЛУЧЕНИЕ ДИЛЕРСКИХ УСЛОВИЙ</h2>
                        <form class="contact-form" id="question-form">
                            <div class="row">
                                <fieldset class="column">
                                    <input class="text-input" name="name" type="text"  placeholder="Имя ">
                                    <input class="text-input" name="phone" type="text"
                                           placeholder="Номер телефона ">
                                    <input class="text-input" name="email" type="text" placeholder="Email*">
                                {{--</fieldset>--}}
                                {{--<fieldset class="column column-1-2">--}}
                                    <textarea style="margin-top: 20px;" name="message" placeholder="Напишите немного о вашей компании"></textarea>
                                </fieldset>
                            </div>
                            <div class="row margin-top-30">
                                {{--<div class="column column-1-2">--}}
                                {{--<p class="description t1">Менеджер свяжется с Вами в течении 15 минут в рабочиие дни--}}
                                {{--(пн.-пт с 9-18).</p>--}}
                                {{--</div>--}}
                                <div class="column  align-left" style="width: 100%;">
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
    </div>
</div>

@endsection