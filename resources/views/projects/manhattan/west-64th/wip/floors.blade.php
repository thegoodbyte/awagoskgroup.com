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

                <div class="subtitle  text-alight-lft"><a href = "{{ route('projects.manhattan.west-64th') }}">W64th</a> > <a href = "{{ route('projects.manhattan.west-64th.wip.index') }}">IN PROGRESS</a> > </a href = "">FLOORS</a> </div>
                <h2 class="title  text-alight-lft">Building Beauty From Ground Up</h2>
                <div class="content text-alight-lft">
                    <p>In every renovation project, the foundation of exceptional
                        design begins with impeccable flooring installation. Our skilled craftsmen
                        bring decades of experience to every floor installation, whether it's laying
                        premium hardwood planks, installing custom decorative details, or creating
                        seamless transitions between spaces. We take pride in our meticulous approach to
                        subfloor preparation, ensuring perfect leveling and addressing any underlying issues
                        to guarantee a flawless foundation that will stand the test of time. From selecting
                        the highest quality materials to executing precise installations, our attention to
                        detail sets us apart.</p>
                </div>
            </div>
        </div>
        <div class="col-sm-6  margin-lg-75t margin-xs-10t margin-top-md">
            <div class="heading no-padd-top-bottom left dark">
                <div class="subtitle display-none-md"> </div>
                <div class="content text-alight-lft  no-marg-767 ">
                    <p>The true mark of our flooring expertise can be seen in the fine details -
                        from custom-fitted heating vent covers that blend seamlessly with the
                        flooring design to perfectly mitred corners and transitions. Our team specializes
                        in working within the unique challenges of New York City residential spaces, expertly
                        managing building requirements, sound insulation needs, and the integration of modern
                        comfort systems beneath beautiful surfaces. Whether we're installing engineered hardwood,
                        luxury vinyl, or custom flooring solutions, each project showcases our commitment to
                        creating floors that not only look stunning but provide lasting durability for our
                        discerning clients.</p>
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
