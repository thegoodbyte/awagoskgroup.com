<div class="project-detail-slider margin-lg-0t margin-sm-100t margin-xs-75b no-padd-bottom">
    <div class="project-detail-slider-banner">
        <div class="project-detail-main-slider slick-slider" data-key="1" data-arrows="0" data-autoplay="0"
             data-speed="1000" data-autoplay-speed="0" data-fade="1" data-for=".project-detail-thumb-slider"
             data-width="0" data-slides="1">

            @foreach($images['images'] as $image)
                @php  $image = $images['image_path']  . $image  @endphp
                <div class="project-detail-main-slide slick-slide">
                    <img src="{{ $image }}" class="s-img-switch" alt="slider image" />
                </div>
            @endforeach

        </div>

        <div class="project-detail-thumb-slider slick-slider" data-key="1" data-arrows="0"
             data-autoplay="0" data-speed="1000" data-autoplay-speed="5000" data-for=".project-detail-main-slider"
             data-width="0" data-focus="1" data-vertical="1" data-vertical-swiping="1" data-slides="6">

            @foreach($images['thumbs'] as $image)
                @php  $image = $images['image_path'] . $images['thumbs_dir'] . $image  @endphp
                <div class="project-detail-main-slide slick-slide">
                    <img src="{{ $image }}" class="s-img-switch" alt="slider image" />
                </div>
            @endforeach

        </div>
    </div>
</div>
