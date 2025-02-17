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

                <div class="subtitle  text-alight-lft"><a href = "{{ route('projects.manhattan.west-64th') }}">W64th</a> > <a href = "{{ route('projects.manhattan.west-64th.wip.index') }}">IN PROGRESS</a> > </a href = "">WINDOWS</a> </div>
                <h2 class="title  text-alight-lft">Windows of Distinction: <br />Architectural Excellence</h2>
                <div class="content text-alight-lft">
                    <p>Our window installation services represent the perfect blend of technical precision and architectural
                        vision, transforming New York City spaces with stunning fenestration solutions. From installing expansive
                        floor-to-ceiling windows that frame city views to creating custom skylights that flood interiors with natural
                        light, our team brings decades of experience to every project. We specialize in managing complex installations
                        in urban environments, ensuring every window not only meets strict building codes and energy efficiency
                        standards but also enhances the architectural integrity of your space.</p>
                </div>
            </div>
        </div>
        <div class="col-sm-6  margin-lg-75t margin-xs-10t margin-top-md">
            <div class="heading no-padd-top-bottom left dark">
                <div class="subtitle display-none-md"> </div>
                <div class="content text-alight-lft  no-marg-767 ">
                    <p>What sets our window installations apart is our comprehensive understanding of both
                        the technical and aesthetic demands of high-end residential projects. Whether we're
                        coordinating the installation of custom-engineered window systems, designing innovative
                        skylight solutions, or retrofitting historic properties with modern window technology,
                        our attention to detail is evident at every step. Our expert team carefully manages each phase of
                        the installation process, from precise measurements and careful removal of existing windows to the
                        meticulous installation and weatherproofing of new units, ensuring that each project delivers both stunning visual
                        impact and optimal performance.</p>
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
