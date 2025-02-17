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

                <div class="subtitle  text-alight-lft"><a href = "{{ route('projects.manhattan.west-64th') }}">W64th</a> > <a href = "{{ route('projects.manhattan.west-64th.wip.index') }}">IN PROGRESS</a> > GENERIC WORK </div>
                <h2 class="title  text-alight-lft">Every Detail Tells Our Story</h2>
                <div class="content text-alight-lft">
                    <p>As a premier general contractor in New York City, we orchestrate complex renovation projects
                        with precision, expertise, and unwavering attention to detail. From structural modifications
                        to high-end finishes, our team expertly coordinates every aspect of the construction process,
                        ensuring seamless integration of all building systems, including HVAC, electrical, and plumbing.
                        Our comprehensive project management approach means we handle everything from securing
                        necessary permits and coordinating with building management to overseeing specialized
                        trades and maintaining strict quality control. Whether we're installing custom marble
                        fireplaces, implementing sophisticated audio-visual systems, or executing architectural
                        millwork, our focus remains on delivering exceptional craftsmanship.</p>
                </div>
            </div>
        </div>
        <div class="col-sm-6  margin-lg-75t margin-xs-10t margin-top-md">
            <div class="heading no-padd-top-bottom left dark">
                <div class="subtitle display-none-md"> </div>
                <div class="content text-alight-lft  no-marg-767 ">
                    <p>What sets us apart is our ability to transform architectural plans into stunning realities while
                        navigating the unique challenges of New York City construction. Our experienced team excels at
                        managing the logistics of urban renovation projects, from coordinating material deliveries and
                        crane operations to ensuring compliance with strict building regulations and landmark preservation
                        requirements. We pride ourselves on maintaining clear communication throughout the construction process,
                        providing detailed progress updates, and ensuring that each project, whether it's a full apartment
                        renovation or a specific architectural feature, is completed to the highest standards of quality
                        and craftsmanship that our discerning clients expect.</p>
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
