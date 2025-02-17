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

                <div class="subtitle  text-alight-lft"><a href = "{{ route('projects.manhattan.west-64th') }}">W64th</a>  > KITCHEN</div>
                <h2 class="title  text-alight-lft">West 64th Street : Kitchen</h2>
                <div class="content text-alight-lft">
                    <p>The West 64th Street Kitchen Project exemplifies our  commitment to delivering
                        visionary apartment remodeling in collaboration with renowned architects.
                        This stunning kitchen space blends modern design with functional elegance,
                        featuring sleek cabinetry, a sophisticated marble countertop, and high-quality finishes.
                        The layout emphasizes natural light, with expansive windows that connect the interior
                        seamlessly to outdoor spaces, creating a sense of openness and tranquility.</p>
                </div>
            </div>
        </div>
        <div class="col-sm-6  margin-lg-75t margin-xs-10t margin-top-md">
            <div class="heading no-padd-top-bottom left dark">
                <div class="subtitle display-none-md"> </div>
                <div class="content text-alight-lft  no-marg-767 ">
                    <p>Working in NYC’s dynamic environment, we specialize in high-end renovations
                        that transform living spaces into masterpieces. The West 64th Street project
                        highlights the synergy of form and function, showcasing custom-crafted details
                        and innovative solutions tailored to the client's vision. This kitchen is not just a
                        workspace but a statement of luxury and modern living, designed for both practicality
                        and aesthetic appeal.</p>
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
