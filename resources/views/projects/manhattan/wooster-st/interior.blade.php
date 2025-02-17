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

                <div class="subtitle  text-alight-lft"><a href = "{{ route('projects.manhattan.wooster-st.index') }}">Wooster St</a> > INTERIOR </div>

                <h2 class="title  text-alight-lft">Crafting Manhattan's Finest Living Spaces</h2>
                <div class="content text-alight-lft">
                    <p>As New York City's premier residential remodeling firm, we transform luxury apartments into
                        masterpieces of modern design. Our expertise is evident in our innovative approach to
                        open-concept living, where we seamlessly integrate custom architectural elements with
                        sophisticated finishes. The interplay of natural and ambient lighting, achieved through
                        carefully designed ceiling coves and strategic illumination, creates dramatic yet welcoming
                        environments. Our projects showcase distinctive features like curved walls, floating design
                        elements, and bespoke millwork that elevate everyday living spaces into extraordinary homes.
                    </p>
                </div>
            </div>
        </div>
        <div class="col-sm-6  margin-lg-75t margin-xs-10t margin-top-md">
            <div class="heading no-padd-top-bottom left dark">
                <div class="subtitle display-none-md"> </div>
                <div class="content text-alight-lft  no-marg-767 ">
                    <p>Each project reflects our commitment to architectural excellence and precision craftsmanship.
                        From custom-built entertainment walls to integrated storage solutions, we create spaces that
                        are both visually stunning and highly functional. The use of premium materials - from rich
                        hardwood flooring to custom wooden beams - adds warmth and sophistication to our contemporary
                        designs. Our attention to detail extends to every aspect of the space, from the subtle curves
                        of transitional walls to the precise alignment of architectural lighting, ensuring each home
                        we create becomes a testament to luxury urban living.</p>
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
                                2023
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
