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

                <div class="subtitle  text-alight-lft">INTERIOR / EXTERIOR</div>
                <h2 class="title  text-alight-lft">Sorens St. / Tribeca</h2>
                <div class="content text-alight-lft">
                    <p>We propose creating a multifunctional space where you can make a choice: either
                        to
                        retire or be together with everybody. The space, clear of all unnecessary
                        items,
                        will take you to another dimension and help you to get tuned to a calm repose.
                        Lot’s of light and air. In the center of the room there is a functional zoning
                        volume, a white cube, dividing the entire living room into 5 zones: active
                        pastime
                        area, TV area, dressing area, secluded relaxation area and the central area –
                        relaxation area, located inside the white volume.</p>
                </div>
            </div>
        </div>
        <div class="col-sm-6  margin-lg-75t margin-xs-10t margin-top-md">
            <div class="heading no-padd-top-bottom left dark">
                <div class="subtitle display-none-md"> </div>
                <div class="content text-alight-lft  no-marg-767 ">
                    <p>Under the cube there are withdrawable soft modules, and inside the cube there is
                        a
                        live tree that is illuminated from the above roof window. This is a place for
                        solitude, meditation and relaxation. Thus, with the help of withdrawable
                        modules,
                        you can create different zones for conversations, board games, and the one who
                        needs to retire can go and have a rest under the tree. Also, we do not forget
                        about
                        a place for storing clothes. There is a cabinet along one of the many-many
                        walls.</p>
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
                                2022
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
