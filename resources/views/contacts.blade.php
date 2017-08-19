@extends('layouts.index')

@section('content')
    <div class="theme-page">
        <div class="clearfix">
            <div class="row full-width">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d34223.1331378141!2d30.594100423457803!3d50.391730443868894!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40d4c5ed6628d82d%3A0x95836f18206f9ea6!2z0LLRg9C70LjRhtGPINCR0YPQtNGW0L3QtNGD0YHRgtGA0ZbRlywgN9CmLCDQmtC40ZfQsg!5e0!3m2!1sru!2sua!4v1503134921185"
                        width="1903" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
            <div class="row full-width page-margin-top-section padding-bottom-66">
                <div class="row">
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
                                <p class="description t1">Менеджер свяжется с Вами в течении 15 минут в рабочиие дни
                                    (пн.-пт с 9-18).</p>
                            </div>
                            <div class="column column-1-2 align-left">
                                <input type="hidden" name="action" value="contact_form"/>
                                <input type="submit" name="submit" value="ПОДТВЕРЖДАЮ МОЙ ЗАКАЗ" class="more active">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection