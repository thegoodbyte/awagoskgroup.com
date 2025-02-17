@extends('layouts.default')
<!--MAIN BODY-->
<div class="container-fluid no-padd">
    <div class="row-fluid no-padd ">
        <div class="col-sm-12 no-padd">

{{--            @php--}}
{{--                print_r($data['galleries']);--}}
{{--                exit;--}}
{{--            @endphp--}}
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

                <div class="subtitle  text-alight-lft"><a href = "{{ route('projects.manhattan.west-64th') }}">W64th</a> > <a href = "{{ route('projects.manhattan.west-64th.wip.index') }}">IN PROGRESS</a> > DRYWALL</div>
                <h2 class="title  text-alight-lft">Shaping Spaces with Precision</h2>
                <div class="content text-alight-lft">
                    <p>Transforming architectural visions into flawless living spaces requires more than
                        just technical skill – it demands artistry, precision, and an unwavering attention
                        to detail. Our master drywall craftsmen bring decades of expertise to every project,
                        skillfully crafting curved walls, custom soffits, layered ceilings, and intricate
                        architectural details that turn ordinary rooms into extraordinary spaces. From
                        perfectly smooth walls to expertly executed level-5 finishes, we create surfaces
                        that serve as the perfect canvas for your home's final aesthetic.</p>
                </div>
            </div>
        </div>
        <div class="col-sm-6  margin-lg-75t margin-xs-10t margin-top-md">
            <div class="heading no-padd-top-bottom left dark">
                <div class="subtitle display-none-md"> </div>
                <div class="content text-alight-lft  no-marg-767 ">
                    <p>Behind every immaculate wall lies our commitment to excellence at every step of the process.
                        Our team excels in creating complex geometric designs, rounded corners, and seamless
                        transitions that elevate your space beyond the ordinary. Whether we're executing
                        elaborate tray ceilings, custom entertainment centers, or sleek modern wall panels,
                        our advanced techniques and meticulous attention to detail ensure that every joint,
                        seam, and surface meets the highest standards of quality. We take pride in our ability
                        to tackle challenging architectural elements and unusual spaces, turning your most
                        ambitious design dreams into lived realities that you'll enjoy for years to come</p>
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
