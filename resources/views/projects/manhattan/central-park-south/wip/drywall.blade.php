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

                <div class="subtitle  text-alight-lft"><a href = "{{ route('projects.manhattan.central-park-south.index') }}">Central Park South</a> > <a href = "{{ route('projects.manhattan.central-park-south.wip.index') }}">IN PROGRESS</a> > DRYWALL </div>
                <h2 class="title  text-alight-lft">Elevating drywall work to an art form</h2>
                <div class="content text-alight-lft">
                    <p>Our mastery of drywall installation goes far beyond the conventional,
                        transforming architectural visions into stunning reality. We specialize in
                        executing complex geometric designs and non-standard architectural elements that
                        demand the highest level of precision and expertise. Our skilled artisans excel at
                        creating dramatic angular walls, seamless curved surfaces, and sophisticated geometric
                        patterns that serve as architectural focal points. The level of detail in our work
                        is evident in how we handle challenging transitions, floating ceilings,
                        and unconventional wall angles - each executed with meticulous attention to detail.</p>
                </div>
            </div>
        </div>
        <div class="col-sm-6  margin-lg-75t margin-xs-10t margin-top-md">
            <div class="heading no-padd-top-bottom left dark">
                <div class="subtitle display-none-md"> </div>
                <div class="content text-alight-lft  no-marg-767 ">
                    <p>From precise lighting integration to flawless finishing around custom window frames,
                        our team approaches each project as a piece of architectural artistry.
                        The images of our work showcase how we manipulate drywall to create
                        bold geometric shapes, perfectly level surfaces, and crisp edges that enhance modern
                        architectural designs. Whether it's crafting elegant corridor transitions,
                        implementing sophisticated ceiling details, or executing precise angular wall
                        intersections, our expertise ensures that each element contributes to the overall
                        architectural vision. This dedication to excellence and ability to handle complex
                        geometrical challenges sets us apart in the industry, making us the trusted choice for
                        architects and designers who push the boundaries of conventional design.</p>
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
                                Central Park South, Manhattan, NYC, NY
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
