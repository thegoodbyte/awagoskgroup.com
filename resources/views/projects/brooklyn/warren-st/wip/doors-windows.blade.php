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
                <h2 class="title  text-alight-lft">NYC Openings [WIP]</h2>
                <div class="content text-alight-lft">
                    <p>The installation process demonstrates exceptional attention to detail in both technical precision
                        and aesthetic refinement. From the custom-fitted door frames to the precisely calibrated window
                        installations, each opening is thoughtfully executed to ensure perfect functionality while
                        maintaining architectural integrity. The project features a sophisticated mix of traditional
                        and modern elements, including elegant moldings, custom hardware, and high-performance materials
                        that blend seamlessly with both interior and exterior design elements.</p>
                </div>
            </div>
        </div>
        <div class="col-sm-6  margin-lg-75t margin-xs-10t margin-top-md">
            <div class="heading no-padd-top-bottom left dark">
                <div class="subtitle display-none-md"> </div>
                <div class="content text-alight-lft  no-marg-767 ">
                    <p>The scope of work encompasses various opening styles, from classic double-hung windows with
                        period-appropriate trim to contemporary sliding glass doors that maximize natural light and
                        urban views. Each installation is meticulously waterproofed and insulated, with careful
                        consideration given to the unique challenges of NYC buildings. The black finish on selected
                        pieces adds a dramatic contemporary touch while honoring the architectural heritage of the space.
                    </p>
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
