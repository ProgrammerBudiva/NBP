@extends('layouts.index')
<title>Стать дилером BP в Украине</title>
@section('content')
    <!-- Slider Revolution -->
    <div class="revolution-slider-container">
        <div class="revolution-slider-collection">
            <ul style="display: none;">
                <!-- SLIDE 1 -->
                    <li data-transition="fade" data-masterspeed="500" data-slotamount="1" data-delay="6000">
                        <!-- MAIN IMAGE -->
                        <img src="/images/slider/everest1.jpg" alt="" data-bgfit="cover">
                        <!-- LAYERS -->
                        <!-- LAYER 01 -->
                        <div class="tp-caption customin customout slider-custom-caption"
                             data-x="0"
                             data-y="140"

                             data-customin="x:40;y:0;"
                             data-start="500"
                             data-speed="1200"
                             data-easing="easeInOutExpo"

                             data-customout="x:0;y:0;"
                             data-endspeed="500"
                             data-endeasing="easeInOutExpo">

                            <div class="slider-content-box no-padding">
                                <h2 class="no-border">ЭЛИТНАЯ ЧЕРЕПИЦА, КОТОРАЯ ПОВЫШАЕТ ЦЕННОСТЬ ДОМА</h2>

                            </div>
                        </div>
                    </li>
            </ul>
        </div>
    </div>
    <!--/-->
    <div class="theme-page">
        <div class="clearfix">
            <div class="row page-margin-top-section padding-bottom-66">
                <div class="row page-margin-top">
                    <div class="column column-140 align-center re-preload">
                        <p></p>
                    </div>
                    <div class="column column-1-3 align-center re-preload">
                        <img src="images/samples/home/image-107.jpg" alt="" class="radius margin-top-40">
                    </div>
                    <div class="column column-60 align-center re-preload">
                        <p></p>
                    </div>
                    <div class="column column-1-2">
                        <h2 class="box-header align-left">СТАНЬТЕ ДИЛЕРОМ ЧЕРЕПИЦЫ BP</h2>
                        <p class="description t1">Мы уже подготовили для Вас выгодные условия сотрудничества и готовы
                            делиться всем опытом наших продаж.
                        </p>
                        <p class="description t1">Будь Вы архитектор, сметчик, генеральный подрядчик или владелец
                            магазина – Вы останетесь довольны качественной продукции и условиями работы.
                        </p>
                        <p class="description t1">Зарабатывайте, продавая битумную черепицу с пожизненной гарантией
                            международной бренда BP!
                        </p>
                        <p class="description t1">Интересно? Звоните по номеру 044 247 72 77 – перед нашим предложением
                            вы не сможете устоять ;)
                        </p>
                        <p class="description t1">Будьте эксклюзивны и зарабатывайте на этом!
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="clearfix">
            <div class="row page-margin-top ">

                <h4 class="box-header">ВАМ БУДЕТ ВЫГОДНО И УДОБНО</h4>
                <ul class="accordion margin-top-40 clearfix" style="padding-bottom: 30px;">
                    <li>
                        <div id="accordion-renovation-cost">
                            <h5>Уверенность в качестве и оригинальности продукции</h5>
                        </div>
                        <p class="description t1">Сотрудничество с нами – уверенность в оригинальности и качестве
                            продукции. Мы – единственные официальные представители международной компании Building
                            Products of Canada Corporation в Украине.</p>
                    </li>
                    <li>
                        <div id="accordion-project-timeline">
                            <h5>Квалифицированная техническая поддержка и сервис </h5>
                        </div>
                        <p class="description t1">Грамотная консультация по подбору, монтажу и эксплуатации материалов.
                            Ни один Ваш вопрос не останется без ответа!</p>
                    </li>
                    <li>
                        <div id="accordion-construction-budget">
                            <h5>Юридические и физические лица</h5>
                        </div>
                        <p class="description t1">Сотрудничаем со всеми формами собственности.</p>
                    </li>
                    <li>
                        <div id="accordion-project-initiation">
                            <h5>Удобная оплата</h5>
                        </div>
                        <p class="description t1">Банковской картой или платежом по счёту.</p>
                    </li>
                    <li>
                        <div id="accordion-construction-budget1">
                            <h5>Всегда под рукой необходимая документация и сертификаты</h5>
                        </div>
                        <p class="description t1">Отлаженный документооборот и учет - Ваша отчетность в порядке.</p>
                    </li>
                    <li>
                        <div id="accordion-project-initiation2">
                            <h5>Своевременная доставка нужного количества</h5>
                        </div>
                        <p class="description t1">Быстрая доставка материалов, в срок, без происшествий и по минимальной
                            цене - получайте удовольствие от такого сервиса.</p>
                    </li>
                </ul>
            </div>
        </div>
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

@endsection