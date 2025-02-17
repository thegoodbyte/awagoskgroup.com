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

                <div class="subtitle  text-alight-lft"><a href = "{{ route('projects.brooklyn.warren-st.index') }}">Warren St > </a> <a href = "{{ route('projects.brooklyn.warren-st.wip.index') }}">In Progress > </a> Stairs </div>
                <h2 class="title  text-alight-lft">Brooklyn Hearths [WIP]</h2>
                <div class="content text-alight-lft">
                    <p>The fireplace restoration project showcases a delicate balance of historical preservation and structural rehabilitation. The ornate Victorian marble mantel, with its intricate carved details and classical arch design, is being carefully restored to its original grandeur. The process involves meticulous cleaning and repair of the decorative elements, while ensuring the structural integrity of both the mantel and the surrounding masonry work.</p>
                </div>
            </div>
        </div>
        <div class="col-sm-6  margin-lg-75t margin-xs-10t margin-top-md">
            <div class="heading no-padd-top-bottom left dark">
                <div class="subtitle display-none-md"> </div>
                <div class="content text-alight-lft  no-marg-767 ">
                    <p>The comprehensive restoration extends beyond aesthetics to include essential functional improvements. Particular attention is being paid to the proper integration with new flooring materials, reinforcement of the hearth structure, and careful preservation of the original architectural details. The project demonstrates the challenges of maintaining historical elements while adapting the space for modern use,
                        all while adhering to NYC building codes and landmark preservation requirements.</p>
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
                                2023 / 2024
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
                                Warren St, Brooklyn, NY
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
