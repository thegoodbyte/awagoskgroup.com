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
                'galleries' =>  $data['gaslleries'],
                'galleryName' => $data['galleryName']
                ])
        </div>
    </div>
</div>

<div class="container no-padd">
    <div class="row-fluid no-padd">
        <div class="col-sm-6 no-padd-inner">
            <div class="heading no-padd-top-bottom left dark">

                <div class="subtitle  text-alight-lft"><a href = "{{ route('projects.manhattan.west-64th') }}">W64th</a> > <a href = "{{ route('projects.manhattan.west-64th.wip.index') }}">IN PROGRESS</a> > EXTERIOR </div>
                <h2 class="title  text-alight-lft">Transforming From Outside In</h2>
                <div class="content text-alight-lft">
                    <p>In the vibrant tapestry of New York City's skyline, we specialize in transforming
                        underutilized rooftops and exterior spaces into breathtaking urban sanctuaries.
                        Working in close collaboration with leading architects, our team expertly navigates
                        the unique challenges of NYC outdoor renovations, from landmark regulations to
                        building code requirements, creating sophisticated spaces that maximize every square foot.
                        Each project is thoughtfully designed to capture stunning city views while providing
                        intimate spaces for relaxation, entertainment, and year-round outdoor living that
                        elevates the luxury lifestyle our discerning clients expect.</p>
                </div>
            </div>
        </div>
        <div class="col-sm-6  margin-lg-75t margin-xs-10t margin-top-md">
            <div class="heading no-padd-top-bottom left dark">
                <div class="subtitle display-none-md"> </div>
                <div class="content text-alight-lft  no-marg-767 ">
                    <p>Our portfolio showcases a range of extraordinary transformations, from sleek modern terraces
                        with custom architectural elements to lush garden retreats complete with outdoor kitchens
                        and sophisticated lighting systems. We pride ourselves on our ability to seamlessly integrate
                        indoor and outdoor living spaces through innovative design solutions, premium materials,
                        and expert craftsmanship. Whether it's installing custom pergolas, creating vertical gardens,
                        or implementing state-of-the-art outdoor entertainment systems, our team ensures each detail
                        contributes to creating an exceptional outdoor living experience that allows our clients to
                        enjoy New York City's magic from their own private paradise.</p>
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
                                2024
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
                <div class="project-detail-block-wrapper">
                    <div class="project-detail-block-item">
                        <div class="project-detail-block-title">
                            CREATIVE DIRECTOR </div>
                        <div class="project-detail-block-descr">
                            <p>
                                Wojciech Gosk
                            </p>
                        </div>
                    </div>
                </div>
                <div class="project-detail-block-wrapper">
                    <div class="project-detail-block-item">
                        <div class="project-detail-block-title">
                            VISUALIZATION </div>
                        <div class="project-detail-block-descr">
                            <p>
                                Wojciech Gosk
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
