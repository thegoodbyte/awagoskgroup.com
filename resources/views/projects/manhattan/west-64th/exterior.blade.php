@extends('layouts.default')
<!--MAIN BODY-->
<div class="container-fluid no-padd">
    <div class="row-fluid no-padd ">
        <div class="col-sm-12 no-padd">
            @include('components.projects.gallery', [
                 'galleries' =>  $data['galleries'],
                 'galleryName' => $data['galleryName']
                 ])
        </div>
    </div>
</div>

<div class="container no-padd">
    <div class="row-fluid no-padd">
        <div class="col-sm-6 no-padd-inner">
            <div class="heading no-padd-top-bottom left dark">

                <div class="subtitle  text-alight-lft"><a href = "{{ route('projects.manhattan.west-64th') }}">W64th</a>  > EXTERIOR</div>
                <h2 class="title  text-alight-lft">W64th St: Outdoor Living NYC</h2>
                <div class="content text-alight-lft">
                    <p>Nestled among the iconic brick facades and modern high-rises of Manhattan's Upper West Side,
                        this sophisticated outdoor living space transformation exemplifies the seamless blend of
                        urban luxury and architectural innovation. The sleek, contemporary design features
                        floor-to-ceiling glass panels and sharp metallic finishes, creating an elegant transition
                        between indoor comfort and outdoor living. Lush greenery in modern planters adds organic
                        warmth to the space, while the thoughtfully designed layout maximizes every square foot of
                        this coveted urban terrace.</p>
                </div>
            </div>
        </div>
        <div class="col-sm-6  margin-lg-75t margin-xs-10t margin-top-md">
            <div class="heading no-padd-top-bottom left dark">
                <div class="subtitle display-none-md"> </div>
                <div class="content text-alight-lft  no-marg-767 ">
                    <p>The project showcases our commitment to delivering high-end, visionary renovations that enhance both
                        lifestyle and property value. Custom details include an integrated outdoor entertainment system,
                        weather-resistant modern furnishings, and strategic lighting that transforms the space from day to night.
                        The refined hardscaping and glass barriers preserve breathtaking city views while providing a
                        private sanctuary above the bustling streets of New York. This West 64th Street project stands as a
                        testament to our ability to collaborate with leading architects to create extraordinary outdoor
                        spaces that exceed our discerning clients' expectations.</p>
                </div>
            </div>
        </div>
    </div>

</div>

<div class="container no-padd">
    <div class="row-fluid margin-lg-50t ">
        <div class="col-sm-12 no-padd">
            <div class="project-detail-block-outer">
                <div class="project-detail-block-wrapper">
                    <div class="project-detail-block-item">
                        <div class="project-detail-block-title">
                            YEAR </div>
                        <div class="project-detail-block-descr">
                            <p>
                                2023
                            </p>
                        </div>
                    </div>
                </div>
                <div class="project-detail-block-wrapper">
                    <div class="project-detail-block-item">
                        <div class="project-detail-block-title">
                            LOCATION </div>
                        <div class="project-detail-block-descr">
                            <p>
                                West 64th, Manhattan, NYC, NY
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- share project -->
@include('partials.share-project')
<!-- Eof share-project -->
<!--/MAIN BODY-->
