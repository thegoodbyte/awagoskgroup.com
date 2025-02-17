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

                <div class="subtitle  text-alight-lft"><a href = "{{ route('projects.manhattan.central-park-south.index') }}">Central Park South</a> > <a href = "{{ route('projects.manhattan.central-park-south.wip.index') }}">IN PROGRESS</a> > KITCHEN </div>
                <h2 class="title  text-alight-lft">Modern Kitchen Design: Work in Progress</h2>
                <div class="content text-alight-lft">
                    <p>Our kitchen design and installation process represents the perfect blend of precision planning
                        and expert execution, transforming spaces into the heart of modern homes. The in-progress
                        images reveal our meticulous approach to creating functional yet aesthetically pleasing kitchens,
                        with careful attention to every detail from custom cabinetry placement to optimal workflow
                        design. Even in the construction phase, you can see how we carefully consider the integration
                        of natural light with strategic window placement, complemented by advanced lighting systems.
                        The thoughtful layout of each kitchen ensures that storage solutions are abundant yet
                        elegantly concealed, while maintaining clean lines and a spacious feel.</p>
                </div>
            </div>
        </div>
        <div class="col-sm-6  margin-lg-75t margin-xs-10t margin-top-md">
            <div class="heading no-padd-top-bottom left dark">
                <div class="subtitle display-none-md"> </div>
                <div class="content text-alight-lft  no-marg-767 ">
                    <p>What makes our kitchen designs exceptional is our focus on creating spaces that balance beauty
                        with functionality. Our projects showcase how we integrate modern amenities while maintaining
                        architectural harmony. The work-in-progress photos demonstrate our methodical installation
                        process, from the precise mounting of upper cabinets to the careful consideration of counter
                        space and workflow zones. You can see how we're creating kitchens that aren't just cooking
                        spaces but sophisticated environments where design meets practicality. Each element is
                        carefully positioned to ensure both optimal functionality and visual appeal, resulting in
                        kitchens that serve as both efficient workspaces and stunning centerpieces of the home.</p>
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
