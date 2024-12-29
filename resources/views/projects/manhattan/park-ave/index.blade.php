@extends('layouts.default')

<!--MAIN BODY-->
<div class="container-fluid no-padd">
    <div class="row-fluid no-padd">
        <div class="col-sm-12 no-padd">
            <div class="prague-categories-outer">
                <div class="container-fluid no-padd top-banner categories fullheight light">
                    <span class="overlay"></span>
                    <img src="/img/projects-galleries/manhattan/park-ave/galleries/interior/IMG_7078[interior]_[stairs].JPG" class="s-img-switch" alt="main banner image" />
                    <div class="content">
                        <div class="subtitle">See our work categorized bellow for the </div>
                        <h1 class="title">Park ave, Manhattan</h1>
                    </div>
                </div>

                <div class="container padd-only-xs">
                    <div class="row">
                        <div class="col-xs-12 padding-lg-20t">

                            <p>
                                In this stunning Park Avenue residence, we collaborated closely with architects to
                                create a sophisticated urban sanctuary that seamlessly blends contemporary luxury with f
                                unctional design. The expansive living spaces showcase our commitment to premium craftsmanship,
                                featuring custom millwork, floor-to-ceiling windows with automated sheer curtains,
                                and a harmonious mix of materials including marble, glass, and rich hardwoods.
                                The open-concept living and dining areas are anchored by statement lighting fixtures
                                and enhanced by thoughtfully integrated smart home technologies, while the crown
                                jewel of this Manhattan residence is its extraordinary <a href = "{{  route('projects.manhattan.park-ave.exterior') }}">outdoor living spaces</a>,
                                with custom marble fireplaces, a spectacular rooftop pool with glass panels,
                                and sophisticated landscaping that creates the perfect balance of privacy
                                and stunning city views.
                            </p>
                        </div>

                        <div class="col-xs-12">
                            <div class="row prague_grid prague_categoties prague_count_col4 prague_gap_col15"
                                 data-columns="prague_count_col4" data-gap="prague_gap_col15">
                                        <div class="portfolio-item-wrapp">
                                            <div class="portfolio-item">
                                                <div class="project-grid-wrapper">
                                                    <a class="project-grid-item-img-link" href="{{  route('projects.manhattan.park-ave.interior') }}">
                                                        <div class="project-grid-item-img">
                                                            <img   src="#" data-lazy-src="/img/projects-galleries/manhattan/park-ave/galleries/interior/thumbs/category-face.JPG"
                                                                   class="s-img-switch wp-post-image wp-post-image" alt="seascape-villa image" />
                                                        </div>
                                                    </a>
                                                    <div class="project-grid-item-content">
                                                        <h4 class="project-grid-item-title"><a href="{{  route('projects.manhattan.park-ave.interior') }}">INTERIOR</a></h4>
                                                        <div class="project-grid-item-category">
                                                            Luxury Meets Modern Functionality</div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="portfolio-item-wrapp">
                                            <div class="portfolio-item">
                                                <div class="project-grid-wrapper">
                                                    <a class="project-grid-item-img-link" href="{{  route('projects.manhattan.park-ave.exterior') }}">
                                                        <div class="project-grid-item-img">
                                                            <img   src="#" data-lazy-src="/img/projects-galleries/manhattan/park-ave/galleries/exterior/thumbs/category-face.JPG"
                                                                   class="s-img-switch wp-post-image wp-post-image" alt="european-lard-station image" />
                                                        </div>
                                                    </a>
                                                    <div class="project-grid-item-content">
                                                        <h4 class="project-grid-item-title"><a href="{{  route('projects.manhattan.park-ave.exterior') }}">EXTERIOR</a></h4>
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
                                                            <img   src="#" data-lazy-src="/img/projects-galleries/manhattan/park-ave/galleries/wip/thumbs/category-face.JPG"
                                                                   class="s-img-switch wp-post-image wp-post-image" alt="cultural-complex-centre" />
                                                        </div>
                                                    </a>
                                                    <div class="project-grid-item-content">
                                                        <h4 class="project-grid-item-title"><a href="{{  route('projects.manhattan.park-ave.wip') }}">IN PROGRESS GALLERY</a></h4>
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

{{--                <div class="container padd-only-xs">--}}
{{--                    <div class = "col-sm-12 col-lg-6">--}}
{{--                        <p>--}}
{{--                            In this stunning Park Avenue residence, we collaborated closely with architects to create a--}}
{{--                            sophisticated urban sanctuary that seamlessly blends contemporary luxury with functional design.--}}
{{--                            The expansive living spaces showcase our commitment to premium craftsmanship, featuring custom--}}
{{--                            millwork, floor-to-ceiling windows with automated sheer curtains, and a harmonious mix of materials--}}
{{--                            including marble, glass, and rich hardwoods. The open-concept living and dining areas are anchored by--}}
{{--                            statement lighting fixtures and enhanced by thoughtfully integrated smart home technologies,--}}
{{--                            while the gourmet kitchen features sleek cabinetry and professional-grade appliances that cater--}}
{{--                            to both daily living and elegant entertaining.--}}
{{--                        </p>--}}
{{--                    </div>--}}
{{--                    <div class="row">--}}
{{--                        <div class="col-xs-12">--}}
{{--                            <div class="row prague_grid prague_categoties prague_count_col4 prague_gap_col15"--}}
{{--                                 data-columns="prague_count_col4" data-gap="prague_gap_col15">--}}

{{--                                <div class="portfolio-item-wrapp">--}}
{{--                                    <div class="portfolio-item">--}}
{{--                                        <div class="project-grid-wrapper">--}}
{{--                                            <a class="project-grid-item-img-link" href="{{  route('projects.manhattan.park-ave.interior') }}">--}}
{{--                                                <div class="project-grid-item-img">--}}
{{--                                                    <img   src="#" data-lazy-src="/img/projects-galleries/manhattan/park-ave/galleries/interior/thumbs/category-face.JPG"--}}
{{--                                                           class="s-img-switch wp-post-image wp-post-image" alt="seascape-villa image" />--}}
{{--                                                </div>--}}
{{--                                            </a>--}}
{{--                                            <div class="project-grid-item-content">--}}
{{--                                                <h4 class="project-grid-item-title"><a href="{{  route('projects.manhattan.park-ave.interior') }}">INTERIOR</a></h4>--}}
{{--                                                <div class="project-grid-item-category">--}}
{{--                                                    Luxury Meets Modern Functionality</div>--}}

{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}

{{--                                <div class="portfolio-item-wrapp">--}}
{{--                                    <div class="portfolio-item">--}}
{{--                                        <div class="project-grid-wrapper">--}}
{{--                                            <a class="project-grid-item-img-link" href="{{  route('projects.manhattan.park-ave.exterior') }}">--}}
{{--                                                <div class="project-grid-item-img">--}}
{{--                                                    <img   src="#" data-lazy-src="/img/projects-galleries/manhattan/park-ave/galleries/exterior/thumbs/category-face.JPG"--}}
{{--                                                           class="s-img-switch wp-post-image wp-post-image" alt="european-lard-station image" />--}}
{{--                                                </div>--}}
{{--                                            </a>--}}
{{--                                            <div class="project-grid-item-content">--}}
{{--                                                <h4 class="project-grid-item-title"><a href="{{  route('projects.manhattan.park-ave.exterior') }}">EXTERIOR</a></h4>--}}
{{--                                                <div class="project-grid-item-category">--}}
{{--                                                    Handcrafted Excellence, Built In</div>--}}

{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}

{{--                                <div class="portfolio-item-wrapp">--}}
{{--                                    <div class="portfolio-item">--}}
{{--                                        <div class="project-grid-wrapper">--}}
{{--                                            <a class="project-grid-item-img-link" href="{{  route('projects.manhattan.park-ave.wip') }}">--}}
{{--                                                <div class="project-grid-item-img">--}}
{{--                                                    <img   src="#" data-lazy-src="/img/projects-galleries/manhattan/park-ave/galleries/wip/thumbs/category-face.JPG"--}}
{{--                                                           class="s-img-switch wp-post-image wp-post-image" alt="cultural-complex-centre" />--}}
{{--                                                </div>--}}
{{--                                            </a>--}}
{{--                                            <div class="project-grid-item-content">--}}
{{--                                                <h4 class="project-grid-item-title"><a href="{{  route('projects.manhattan.park-ave.wip') }}">IN PROGRESS GALLERY</a></h4>--}}
{{--                                                <div class="project-grid-item-category">--}}
{{--                                                    Shaping Spaces with Precision</div>--}}

{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
            </div>



        </div>
    </div>
</div>
<!--/MAIN BODY-->
