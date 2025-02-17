@extends('layouts.default')

<!--MAIN BODY-->
<div class="container-fluid no-padd">
    <div class="row-fluid no-padd">
        <div class="col-sm-12 no-padd">
            <div class="prague-categories-outer">
                <div class="container-fluid no-padd top-banner categories fullheight light">
                    <span class="overlay"></span>
                    <img src="/img/projects-galleries/manhattan/park-ave-69th-street/galleries/main/index-image.JPG" class="s-img-switch" alt="main banner image" />
                    <div class="content">
                        <div class="subtitle">Manhattan Made New: Traditional Space, Modern Grace</div>
                        <h1 class="title">Park Ave / 69th Street</h1>
                    </div>
                </div>

                <div class="container padd-only-xs">
                    <div class="row">
                        <div class="col-xs-12 padding-lg-20t">

                            <p>
                                we have  transformed ordinary urban spaces into sophisticated sanctuaries. Our skilled
                                artisans begin with a clean canvas - refinishing hardwood floors to their natural luster
                                while maximizing the dramatic city views that pour through expansive windows. Each project
                                thoughtfully balances the preservation of classic pre-war elements with modern design
                                sensibilities, creating spaces that honor Manhattan's architectural heritage while
                                embracing contemporary living.
                            </p>

                            <p>
                                Beyond the main living spaces, we elevate every detail of your home's functionality with
                                custom storage solutions and premium built-ins. Our signature illuminated closet systems
                                and elegant dressing rooms feature museum-quality lighting that transforms ordinary
                                storage into dramatic personal spaces. By reimagining transitional areas as design
                                opportunities, we create cohesive environments where luxury isn't just about aesthetics –
                                it's about crafting a more refined way of living in the heart of the city.
                            </p>
                        </div>

                        <div class="col-xs-12">
                            <div class="row prague_grid prague_categoties prague_count_col4 prague_gap_col15"
                                 data-columns="prague_count_col4" data-gap="prague_gap_col15">
                                        <div class="portfolio-item-wrapp">
                                            <div class="portfolio-item">
                                                <div class="project-grid-wrapper">
                                                    <a class="project-grid-item-img-link" href="{{  route('projects.manhattan.park-ave-69th-street.main') }}">
                                                        <div class="project-grid-item-img">
                                                            <img   src="#" data-lazy-src="/img/projects-galleries/manhattan/park-ave-69th-street/galleries/main/thumbs/category-face.JPG"
                                                                   class="s-img-switch wp-post-image wp-post-image" alt="seascape-villa image" />
                                                        </div>
                                                    </a>
                                                    <div class="project-grid-item-content">
                                                        <h4 class="project-grid-item-title"><a href="{{  route('projects.manhattan.park-ave-69th-street.main') }}">MAIN</a></h4>
                                                        <div class="project-grid-item-category">
                                                            Luxury Meets Modern Functionality</div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>



                                        <div class="portfolio-item-wrapp">
                                            <div class="portfolio-item">
                                                <div class="project-grid-wrapper">
                                                    <a class="project-grid-item-img-link" href="{{  route('projects.manhattan.park-ave-69th-street.wip') }}">
                                                        <div class="project-grid-item-img">
                                                            <img   src="#" data-lazy-src="/img/projects-galleries/manhattan/park-ave-69th-street/galleries/wip/thumbs/category-face.JPG"
                                                                   class="s-img-switch wp-post-image wp-post-image" alt="cultural-complex-centre" />
                                                        </div>
                                                    </a>
                                                    <div class="project-grid-item-content">
                                                        <h4 class="project-grid-item-title"><a href="{{  route('projects.manhattan.riverside-blvd.wip') }}">IN PROGRESS GALLERY</a></h4>
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
