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

                <div class="subtitle  text-alight-lft"><a href = "{{ route('projects.manhattan.central-park-south.index') }}">Central Park South</a> > <a href = "{{ route('projects.manhattan.central-park-south.wip.index') }}">IN PROGRESS</a> > CUSTOM CABINETRY </div>
                <h2 class="title  text-alight-lft">Custom Cabinetry Excellence</h2>
                <div class="content text-alight-lft">
                    <p>Our custom cabinetry solutions exemplify the perfect marriage of form and function,
                        transforming spaces into highly organized yet aesthetically pleasing environments.
                        Each project showcases our commitment to precision craftsmanship, from floor-to-ceiling
                        storage systems to seamlessly integrated wall units. We specialize in creating
                        sophisticated storage solutions that maximize every inch of available space while
                        maintaining clean, contemporary lines. Our attention to detail is evident in the perfect
                        alignment of doors, the careful integration of lighting systems, and the flawless
                        execution of floating shelves that appear to defy gravity.</p>
                </div>
            </div>
        </div>
        <div class="col-sm-6  margin-lg-75t margin-xs-10t margin-top-md">
            <div class="heading no-padd-top-bottom left dark">
                <div class="subtitle display-none-md"> </div>
                <div class="content text-alight-lft  no-marg-767 ">
                    <p>The versatility of our custom cabinetry work extends beyond traditional storage solutions.
                        Our designs incorporate modern amenities and thoughtful features that enhance daily living.
                        Whether it's crafting built-in wardrobes with specialized compartments, designing elegant
                        display shelving, or creating custom walk-in closets, each project is tailored to meet
                        specific client needs while elevating the overall aesthetic of the space.
                        The minimalist hardware, precise gaps, and sophisticated finishes we select ensure that
                        each installation not only serves its practical purpose but also stands as a testament
                        to superior craftsmanship. Our work demonstrates how custom cabinetry can transform a
                        room from merely functional to exceptionally refined.</p>
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
