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

                <div class="subtitle  text-alight-lft"><a href = "{{ route('projects.manhattan.wooster-st.wip.index') }}">Wooster St</a> > <a href = "{{ route('projects.manhattan.wooster-st.wip.index') }}">IN PROGRESS</a> > DRYWALL </div>

                <h2 class="title  text-alight-lft">Precision Drywall Artistry</h2>
                <div class="content text-alight-lft">
                    <p>Our drywall expertise sets new standards in high-end residential construction, delivering
                        flawlessly smooth surfaces that serve as the perfect canvas for luxury interiors. Each project
                        showcases our dedication to perfection, from precisely finished corners to seamlessly
                        integrated lighting fixtures. The level planes and crisp edges demonstrate our commitment to
                        superior craftsmanship in every detail.</p>
                </div>
            </div>
        </div>
        <div class="col-sm-6  margin-lg-75t margin-xs-10t margin-top-md">
            <div class="heading no-padd-top-bottom left dark">
                <div class="subtitle display-none-md"> </div>
                <div class="content text-alight-lft  no-marg-767 ">
                    <p>Beyond basic installation, our drywall work incorporates sophisticated architectural elements
                        that elevate the overall design. Our skilled team expertly handles complex ceiling transitions,
                        recessed lighting integration, and custom soffits that add architectural interest. This
                        attention to detail and technical precision ensures that each surface not only meets but
                        exceeds the exacting standards expected in luxury Manhattan residences.</p>
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
