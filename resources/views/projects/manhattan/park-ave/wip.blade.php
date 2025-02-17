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

                <div class="subtitle  text-alight-lft"><a href = "{{ route('projects.manhattan.park-ave.index') }}">Park Ave</a> > In Progress </div>
                <h2 class="title  text-alight-lft">Where Precision Meets Craftsmanship</h2>
                <div class="content text-alight-lft">
                    <p>During the construction phase of this high-end Park Avenue residence,
                        our team is meticulously executing every detail of the architectural vision.
                        The work-in-progress showcases our precise installation methods,
                        from the custom fireplace framing and premium engineered wood flooring to the
                        sophisticated curved wall applications and state-of-the-art HVAC integration.
                        The temporary protection systems and methodical masking techniques demonstrate our
                        commitment to preserving finished surfaces while maintaining the highest standards of craftsmanship
                        throughout the renovation process.</p>
                </div>
            </div>
        </div>
        <div class="col-sm-6  margin-lg-75t margin-xs-10t margin-top-md">
            <div class="heading no-padd-top-bottom left dark">
                <div class="subtitle display-none-md"> </div>
                <div class="content text-alight-lft  no-marg-767 ">
                    <p>The ongoing transformation highlights our expertise in complex architectural elements,
                         as evidenced by the custom-built floating staircase with glass balustrades currently under
                        construction, and the installation of premium marble wall cladding featuring dramatic veining
                        patterns. Our attention to detail extends to the careful installation of curved drywall
                        sections and precision millwork, all while maintaining clean working conditions and proper surface
                        protection. These construction progress images reveal the intricate layers of work that go into
                        creating a luxury Manhattan residence, where every element is carefully considered and expertly executed.</p>
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
                                2018
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
                                Park Ave, NYC, NY
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
