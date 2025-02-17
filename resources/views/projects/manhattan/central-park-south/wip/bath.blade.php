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

                <div class="subtitle  text-alight-lft"><a href = "{{ route('projects.manhattan.central-park-south.index') }}">Central Park South</a> > <a href = "{{ route('projects.manhattan.central-park-south.wip.index') }}">IN PROGRESS</a> > </a href = "">BATH</a> </div>
                <h2 class="title  text-alight-lft">Crafting Your Dream Bathroom: <br />A Behind-the-Scenes Look</h2>
                <div class="content text-alight-lft">
                    <p>Our bathroom remodeling expertise combines innovative design with superior craftsmanship
                        to create stunning personal sanctuaries. We understand that a modern bathroom should be
                        both a functional space and a retreat for relaxation, which is why we carefully select
                        premium materials and implement cutting-edge design elements in every project.
                        From dramatic floor patterns that create visual impact to precisely installed fixtures
                        that ensure lasting quality, our attention to detail transforms ordinary bathrooms into
                        extraordinary spaces. The seamless integration of contemporary features, such as
                        custom-built tubs and sleek architectural elements, showcases our commitment to excellence.</p>
                </div>
            </div>
        </div>
        <div class="col-sm-6  margin-lg-75t margin-xs-10t margin-top-md">
            <div class="heading no-padd-top-bottom left dark">
                <div class="subtitle display-none-md"> </div>
                <div class="content text-alight-lft  no-marg-767 ">
                    <p>What sets our bathroom renovations apart is our ability to balance aesthetic beauty
                        with practical functionality. Our team specializes in creating custom solutions that
                        maximize space while delivering the sophisticated look of a high-end spa environment.
                        The installation of premium fixtures, coupled with expert tile work and precise finishing,
                        ensures that each bathroom we create stands as a testament to quality craftsmanship.
                        Whether it's incorporating striking geometric floor patterns, installing modern soaking
                        tubs, or implementing elegant storage solutions, we approach each project with the goal
                        of exceeding our clients' expectations. The result is a perfectly executed bathroom
                        space that combines luxury with everyday practicality.</p>
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
