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

                <div class="subtitle  text-alight-lft"><a href = "{{ route('projects.manhattan.central-park-south.index') }}">Central Park South</a> > <a href = "{{ route('projects.manhattan.west-64th.wip.index') }}">IN PROGRESS</a> > CUSTOM CABINETRY </div>
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
                                2024
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
                                Central Park South, Manhattan, NYC, NY
                            </p>
                        </div>
                    </div>
                </div>
                <div class="project-detail-block-wrapper">
                    <div class="project-detail-block-item">
                        <div class="project-detail-block-title">
                            CREATIVE DIRECTOR </div>
                        <div class="project-detail-block-descr">
                            <p>
                                Wojciech Gosk
                            </p>
                        </div>
                    </div>
                </div>
                <div class="project-detail-block-wrapper">
                    <div class="project-detail-block-item">
                        <div class="project-detail-block-title">
                            VISUALIZATION </div>
                        <div class="project-detail-block-descr">
                            <p>
                                Wojciech Gosk
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container project-detail-simple margin-lg-125b margin-sm-75b">
    <div class=" prague-share-icons">
        <div class="prague-share-label">SHARE PROJECT</div>

        <button data-share="http://www.facebook.com/sharer.php?u=alto-furniture.html&amp;t=Alto Furniture" class="icon fa fa-facebook"></button>

        <button data-share="http://twitter.com/home/?status=Alto Furniture - alto-furniture.html" class="icon fa fa-twitter"></button>

        <button data-share="http://www.linkedin.com/shareArticle?mini=true&amp;title=Alto Furniture&amp;url=alto-furniture.html"
                class="icon fa fa-linkedin"></button>

        <button data-share="http://pinterest.com/pin/create/button/?url=alto-furniture.html&media=img/alto-furniture/29d9cd46052073.58467b6d8b26b-e1542297883242.jpg"
                class="icon fa fa-pinterest-p"></button>

    </div>
</div>
<!--/MAIN BODY-->
