
<!-- Slider Revolution -->
<div class="revolution-slider-container">
    <div class="revolution-slider-collection">
        <ul style="display: none;">
            <!-- SLIDE 1 -->
            @foreach($slides as $slide)
            <li data-transition="fade" data-masterspeed="500" data-slotamount="1" data-delay="6000">
                <!-- MAIN IMAGE -->
                <img src="{{$slide->image_url}}" alt="{{$slide->image_alt}}" data-bgfit="cover">
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
                    <h2 class="no-border">{{$slide->image_alt}}</h2>

                   </div>
                </div>
            </li>
            @endforeach
        </ul>
    </div>
</div>
<!--/-->