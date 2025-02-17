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

                <div class="subtitle  text-alight-lft"><a href = "{{ route('projects.manhattan.park-ave-69th-street.index') }}">Park Ave : 69th Street /</a> >  > MAIN</div>
                <h2 class="title  text-alight-lft">Bringing Your Vision to Life</h2>
                <div class="content text-alight-lft">
                    <p>In this remarkable Manhattan renovation project, we undertook a comprehensive transformation of an
                        industrial loft space into a sophisticated modern residence. The scope of work showcases our expertise
                        in high-end residential construction, featuring custom millwork, architectural steel and glass partitions,
                        and premium finishes throughout. The renovation preserved and enhanced original architectural elements
                        like exposed brick walls and wooden beams, while integrating contemporary design elements including a
                        state-of-the-art chef's kitchen with marble waterfall countertops, professional-grade appliances,
                        and custom cabinetry..</p>
                </div>
            </div>
        </div>
        <div class="col-sm-6  margin-lg-75t margin-xs-10t margin-top-md">
            <div class="heading no-padd-top-bottom left dark">
                <div class="subtitle display-none-md"> </div>
                <div class="content text-alight-lft  no-marg-767 ">
                    <p>Our meticulous attention to detail is evident in every aspect of the project, from the
                        carefully curated lighting design featuring modern chandeliers to the premium wide-plank bleached
                        oak flooring that unifies the space. The transformation includes built-in storage solutions, custom
                        steel-framed glass room dividers, and integrated smart home technology, all while maintaining the
                        loft's industrial character. The result is a harmonious blend of historic architectural elements
                        with modern luxury, creating a sophisticated urban sanctuary that exemplifies our commitment to
                        excellence in high-end Manhattan renovations.</p>
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
                                2017
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
