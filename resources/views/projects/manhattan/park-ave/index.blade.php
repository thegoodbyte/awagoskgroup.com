@extends('layouts.default')

<!--MAIN BODY-->
<div class="container-fluid no-padd">
    <div class="row-fluid no-padd">
        <div class="col-sm-12 no-padd">
            <div class="prague-categories-outer">
{{--                <div class="container-fluid no-padd top-banner categories fullheight light">--}}
{{--                    <span class="overlay"></span>--}}
{{--                    <img src="/img/projects-galleries/manhattan/west-64th/galleries/exterior/08.JPG" class="s-img-switch" alt="main banner image" />--}}
{{--                    <div class="content">--}}
{{--                        <div class="subtitle">See our work categorized bellow for the </div>--}}
{{--                        <h1 class="title">West &amp; 64th Street</h1>--}}
{{--                    </div>--}}
{{--                </div>--}}

                <div class="container padd-only-xs">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="row prague_grid prague_categoties prague_count_col4 prague_gap_col15"
                                 data-columns="prague_count_col4" data-gap="prague_gap_col15">



                                <div class="portfolio-item-wrapp">
                                    <div class="portfolio-item">
                                        <div class="project-grid-wrapper">
                                            <a class="project-grid-item-img-link" href="{{  route('projects.manhattan.park-ave.interior') }}">
                                                <div class="project-grid-item-img">
                                                    <img   src="#" data-lazy-src="/img/projects-galleries/manhattan/west-64th/galleries/wip/bath/thumbs/category-face.JPG"
                                                           class="s-img-switch wp-post-image wp-post-image" alt="seascape-villa image" />
                                                </div>
                                            </a>
                                            <div class="project-grid-item-content">
                                                <h4 class="project-grid-item-title"><a href="{{  route('projects.manhattan.park-ave.interior') }}">Bath</a></h4>
                                                <div class="project-grid-item-category">
                                                    Luxury Meets Modern Functionality</div>

                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="portfolio-item-wrapp">
                                    <div class="portfolio-item">
                                        <div class="project-grid-wrapper">
                                            <a class="project-grid-item-img-link" href="{{  route('projects.manhattan.west-64th.park-ave.exterior') }}">
                                                <div class="project-grid-item-img">
                                                    <img   src="#" data-lazy-src="/img/projects-galleries/manhattan/west-64th/galleries/wip/cabinetry/thumbs/category-face.JPG"
                                                           class="s-img-switch wp-post-image wp-post-image" alt="european-lard-station image" />
                                                </div>
                                            </a>
                                            <div class="project-grid-item-content">
                                                <h4 class="project-grid-item-title"><a href="{{  route('projects.manhattan.west-64th.park-ave.interior') }}">Custom Cabinetry</a></h4>
                                                <div class="project-grid-item-category">
                                                    Handcrafted Excellence, Built In</div>

                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="portfolio-item-wrapp">
                                    <div class="portfolio-item">
                                        <div class="project-grid-wrapper">
                                            <a class="project-grid-item-img-link" href="{{  route('projects.manhattan.park-ave.wip') }}">
                                                <div class="project-grid-item-img">
                                                    <img   src="#" data-lazy-src="/img/projects-galleries/manhattan/west-64th/galleries/wip/drywall/thumbs/category-face.JPG"
                                                           class="s-img-switch wp-post-image wp-post-image" alt="cultural-complex-centre" />
                                                </div>
                                            </a>
                                            <div class="project-grid-item-content">
                                                <h4 class="project-grid-item-title"><a href="{{  route('projects.manhattan.park-ave.wip') }}">Drywall</a></h4>
                                                <div class="project-grid-item-category">
                                                    Shaping Spaces with Precision</div>

                                            </div>
                                        </div>
                                    </div>
                                </div>



                            </div>
                        </div>
                    </div>
                </div>
            </div>



        </div>
    </div>
</div>
<!--/MAIN BODY-->
