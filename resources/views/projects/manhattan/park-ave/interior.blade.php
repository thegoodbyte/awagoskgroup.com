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

                <div class="subtitle  text-alight-lft"><a href = "{{ route('projects.manhattan.park-ave.index') }}">Park Ave</a> >  > INTERIOR</div>
                <h2 class="title  text-alight-lft">Bringing Your Vision to Life</h2>
                <div class="content text-alight-lft">
                    <p>In this stunning Park Avenue residence, we collaborated closely with architects to
                        create a sophisticated urban sanctuary that seamlessly blends contemporary luxury with
                        functional design. The expansive living spaces showcase our commitment to premium craftsmanship,
                        featuring custom millwork, floor-to-ceiling windows with automated sheer curtains, and a harmonious
                        mix of materials including marble, glass, and rich hardwoods.</p>
                </div>
            </div>
        </div>
        <div class="col-sm-6  margin-lg-75t margin-xs-10t margin-top-md">
            <div class="heading no-padd-top-bottom left dark">
                <div class="subtitle display-none-md"> </div>
                <div class="content text-alight-lft  no-marg-767 ">
                    <p>The open-concept living and dining areas are anchored by statement lighting fixtures and
                        enhanced by thoughtfully integrated smart home technologies, while the gourmet kitchen features
                        sleek cabinetry and professional-grade appliances that cater to both daily living and elegant
                        entertaining.</p>
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
                                2018
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
                                Park Ave, Manhattan, NYC, NY
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
