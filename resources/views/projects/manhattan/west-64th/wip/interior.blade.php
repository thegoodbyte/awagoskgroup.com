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

                <div class="subtitle  text-alight-lft"><a href = "{{ route('projects.manhattan.west-64th') }}">W64th</a> > <a href = "{{ route('projects.manhattan.west-64th.wip.index') }}">IN PROGRESS</a> > INTERIOR</div>
                <h2 class="title  text-alight-lft">Bringing Your Vision to Life</h2>
                <div class="content text-alight-lft">
                    <p>Our comprehensive interior remodeling services transform ordinary spaces into
                        extraordinary living environments that perfectly balance sophistication with functionality.
                        From opening up floor plans to installing custom lighting solutions, we handle every aspect
                        of interior transformation with meticulous attention to detail. Our team excels at creating
                        harmonious spaces that flow seamlessly from room to room, incorporating modern amenities
                        and luxurious finishes while respecting the architectural integrity of New York City's
                        prestigious buildings. Whether it's integrating designer lighting systems, crafting custom
                        millwork, or executing complex structural modifications, we ensure each element contributes
                        to a cohesive and elevated living space.</p>
                </div>
            </div>
        </div>
        <div class="col-sm-6  margin-lg-75t margin-xs-10t margin-top-md">
            <div class="heading no-padd-top-bottom left dark">
                <div class="subtitle display-none-md"> </div>
                <div class="content text-alight-lft  no-marg-767 ">
                    <p>What truly sets our interior construction work apart is our ability to orchestrate complex
                        renovations while maintaining the highest standards of craftsmanship. Our experienced team
                        navigates the unique challenges of urban residential construction, from coordinating with
                        building management to ensuring minimal disruption to neighbors. We pride ourselves on our
                        sophisticated approach to space planning, material selection, and project execution,
                        ensuring that every detail - from the placement of recessed lighting to the integration of
                        smart home technologies - enhances both the aesthetic appeal and functionality of your space.
                        The result is a thoughtfully crafted interior that exceeds our clients' expectations and
                        stands as a testament to our commitment to excellence in construction and design.</p>
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
