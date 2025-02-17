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

                <div class="subtitle  text-alight-lft"><a href = "{{ route('projects.manhattan.west-64th') }}">W64th</a> > <a href = "{{ route('projects.manhattan.west-64th.wip.index') }}">IN PROGRESS</a> > CUSTOM CABINETRY </div>
                <h2 class="title  text-alight-lft">Handcrafted Excellence, <br />Built In</h2>
                <div class="content text-alight-lft">
                    <p>From luxurious kitchens to sophisticated bathrooms and elegant wardrobes,
                        our master craftsmen create bespoke cabinetry that transforms your space into a
                        masterpiece of both form and function. Each piece is meticulously designed and
                        handcrafted in our workshop, where we combine time-honored woodworking techniques
                        with modern precision tools. Our artisans work closely with you to select the finest
                        materials, from exotic hardwoods to premium finishes, ensuring every detail aligns
                        perfectly with your vision and lifestyle needs.</p>
                </div>
            </div>
        </div>
        <div class="col-sm-6  margin-lg-75t margin-xs-10t margin-top-md">
            <div class="heading no-padd-top-bottom left dark">
                <div class="subtitle display-none-md"> </div>
                <div class="content text-alight-lft  no-marg-767 ">
                    <p>Whether it's a sleek, modern kitchen with innovative storage solutions,
                        a spa-like bathroom vanity with integrated lighting, or a custom wardrobe
                        with personalized organizational systems, our cabinetry is built to stand
                        the test of time. We pride ourselves on creating pieces that not only serve as
                        beautiful focal points in your home but also provide practical, intelligently
                        designed storage that enhances your daily life. Each cabinet, drawer, and shelf
                        is crafted with exacting standards, featuring dovetail joints, soft-close mechanisms,
                        and customized interior configurations that reflect our unwavering commitment to
                        quality and craftsmanship.</p>
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
