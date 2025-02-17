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

                <div class="subtitle  text-alight-lft"><a href = "{{ route('projects.manhattan.wooster-st.index') }}">Wooster St</a> > <a href = "{{ route('projects.manhattan.wooster-st.wip.index') }}">IN PROGRESS</a> > GENERIC WORK </div>

                <h2 class="title  text-alight-lft">Building Excellence: NYC Renovation in Progress</h2>
                <div class="content text-alight-lft">
                    <p>Behind every luxury renovation lies a foundation of meticulous craftsmanship and advanced
                        engineering expertise. Our work-in-progress reveals the complex infrastructure that supports
                        modern luxury living, from precisely engineered curved ceiling frameworks to sophisticated
                        electrical and plumbing systems. Each project begins with careful structural planning and
                        custom framing solutions that enable our signature architectural features. Our team's
                        expertise in advanced construction techniques allows us to create unique design elements
                        like curved walls and floating ceilings while ensuring every technical aspect meets the
                        stringent requirements of NYC building codes.</p>
                </div>
            </div>
        </div>
        <div class="col-sm-6  margin-lg-75t margin-xs-10t margin-top-md">
            <div class="heading no-padd-top-bottom left dark">
                <div class="subtitle display-none-md"> </div>
                <div class="content text-alight-lft  no-marg-767 ">
                    <p>Behind every luxury renovation lies a foundation of meticulous craftsmanship and advanced
                        engineering expertise. Our work-in-progress reveals the complex infrastructure that supports
                        modern luxury living, from precisely engineered curved ceiling frameworks to sophisticated
                        electrical and plumbing systems. Each project begins with careful structural planning and
                        custom framing solutions that enable our signature architectural features. Our team's expertise
                        in advanced construction techniques allows us to create unique design elements like curved
                        walls and floating ceilings while ensuring every technical aspect meets the stringent
                        requirements of NYC building codes.</p>
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
                                Wooster Street, Manhattan, NYC, NY
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
