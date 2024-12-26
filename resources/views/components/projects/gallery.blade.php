<div class="project-detail-slider margin-lg-0t margin-sm-100t margin-xs-75b no-padd-bottom">
    YES
    <div class="project-detail-slider-banner">
        <div class="project-detail-main-slider slick-slider" data-key="1" data-arrows="0" data-autoplay="0"
             data-speed="1000" data-autoplay-speed="0" data-fade="1" data-for=".project-detail-thumb-slider"
             data-width="0" data-slides="1">
{{--            @php--}}
{{--            echo '<pre />';--}}
{{--                print_r($galleries);--}}
{{--                exit;--}}
{{--            @endphp--}}
            @if ( !empty($galleries[$galleryName]['images']))
                @foreach($galleries[$galleryName]['images'] as $index => $image)
                    @php  $image = $galleries[$galleryName]['image_path']  . DIRECTORY_SEPARATOR . $image['filename']  @endphp
                    <!-- Image Starts -->
                    <div class="project-detail-main-slide slick-slide">
    {{--                    <img--}}
    {{--                        srcset = ""--}}
    {{--                        sizes = "(max-width: 480px) 480px"--}}
    {{--                        src="{{ $image }}"--}}
    {{--                        class="s-img-switch" alt="slider image" />--}}
    {{--                    <picture>--}}
    {{--                            @if (!empty($imgSizes['sizes']))--}}
    {{--                                @php //print_r( $imgSizes ) @endphp--}}

    {{--                                 @foreach($imgSizes['sizes'] as $size => $imgSizePath)--}}
    {{--                                    @php //print_r( $imgSizes['sizes'] ) @endphp--}}
    {{--                                    <source srcset="{{ $images['image_path'] . $imgSizePath }}" media="(max-width: {{$size}}px)">--}}
    {{--                                 @endforeach--}}
    {{--                            @endif--}}
    {{--                        <img--}}
    {{--                            src="{{ $image }}"--}}
    {{--                            class="s-img-switch" alt="slider image" />--}}
    {{--                    </picture>--}}

                        <img srcset="
                             @if (!empty($imgSizes['sizes']))
                                @foreach($imgSizes['sizes'] as $size => $imgSizePath)
                                    {{  $galleries['image_path'] . $imgSizePath }} {{ $size }}w,
                                @endforeach
                             @endif"
                        sizes="
                            @if (!empty($imgSizes['sizes']))
                                @foreach ($imgSizes['sizes'] as $size => $imgSizePath)
                                    (max-width: {{  $size }}px) {{ $size }}px
                                @endforeach
                             @endif
                            "
                             src="{{ $image }}"
                             class="s-img-switch" alt="slider image" />

                    </div>
                    <!-- Image ends -->
                @endforeach
            @else

                    <h2 align = "center">This gallery has no images</h2>

            @endif
        </div>

        <div class="project-detail-thumb-slider slick-slider" data-key="1" data-arrows="0"
             data-autoplay="0" data-speed="1000" data-autoplay-speed="5000" data-for=".project-detail-main-slider"
             data-width="0" data-focus="1" data-vertical="1" data-vertical-swiping="1" data-slides="6">


            @if ( !empty($galleries[$galleryName]['thumbs']))

                @foreach($galleries[$galleryName]['thumbs'] as $image)

                    @if (!empty($image['filename']))
                        @php  $image = $galleries[$galleryName]['image_path'] . DIRECTORY_SEPARATOR . $galleries[$galleryName]['thumbs_dir'] . DIRECTORY_SEPARATOR . $image['filename']  @endphp
                        <div class="project-detail-main-slide slick-slide">
                            <img src="{{ $image }}" class="s-img-switch" alt="slider image" />
                        </div>
                    @endif
                @endforeach
            @endif
        </div>
    </div>
</div>
