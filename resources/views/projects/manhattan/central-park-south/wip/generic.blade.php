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

                <div class="subtitle  text-alight-lft"><a href = "{{ route('projects.manhattan.central-park-south.index') }}">Central Park South</a> > <a href = "{{ route('projects.manhattan.central-park-south.wip.index') }}">IN PROGRESS</a> > GENERIC WORK </div>
                <h2 class="title  text-alight-lft">NYC's Premier Interior Transformation Specialists</h2>
                <div class="content text-alight-lft">
                    <p>As premier interior specialists in New York City, we bring unparalleled expertise to
                        every aspect of interior construction and renovation. Our portfolio showcases complete
                        interior transformations, from raw spaces to meticulously finished luxury environments.
                        We excel in coordinating complex projects that require sophisticated integration of
                        various elements - from precision drywall installation and custom millwork to the
                        incorporation of striking design features like decorative glass partitions and
                        artistic wall treatments. Each project demonstrates our ability to execute high-end
                        finishes while managing the intricate demands of NYC construction, including the
                        careful navigation of landmark building requirements and luxury residential specifications.</p>
                </div>
            </div>
        </div>
        <div class="col-sm-6  margin-lg-75t margin-xs-10t margin-top-md">
            <div class="heading no-padd-top-bottom left dark">
                <div class="subtitle display-none-md"> </div>
                <div class="content text-alight-lft  no-marg-767 ">
                    <p>What sets us apart is our comprehensive approach to interior construction and our
                        attention to sophisticated details. Our expertise shines through in our execution
                        of modern design elements, such as seamless wall transitions, integrated lighting
                        systems, and custom architectural features. The images of our work reveal the journey
                        from basic construction to elegant completion, showcasing our ability to handle
                        everything from structural modifications to the installation of high-end finishes.
                        Whether it's creating sleek modern interiors with glass partitions, installing
                        custom closet systems, or managing complete floor renovations, our team delivers
                        results that meet the exacting standards of New York's most discerning clients.
                        Our work consistently demonstrates why we're trusted to handle complex interior
                        projects in one of the world's most demanding real estate markets.</p>
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
                                2016
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

            </div>
        </div>
    </div>
</div>
<!-- share project -->
@include('partials.share-project')
<!-- Eof share-project -->
<!--/MAIN BODY-->
