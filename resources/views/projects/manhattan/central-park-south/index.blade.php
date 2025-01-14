@extends('layouts.default')

<!--MAIN BODY-->
<div class="container-fluid no-padd">
    <div class="row-fluid no-padd">
        <div class="col-sm-12 no-padd">
            <div class="prague-categories-outer">
                <div class="container-fluid no-padd top-banner categories fullheight light">
                    <span class="overlay"></span>
                    <img src="/img/projects-galleries/manhattan/west-64th/galleries/exterior/08.JPG" class="s-img-switch" alt="main banner image" />
                    <div class="content">
                        <div class="subtitle">See our work categorized bellow for the </div>
                        <h1 class="title">Central South Park</h1>
                    </div>
                </div>

                <div class="container padd-only-xs">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="row prague_grid prague_categoties prague_count_col4 prague_gap_col15"
                                 data-columns="prague_count_col4" data-gap="prague_gap_col15">

                                <div class="portfolio-item-wrapp">
                                    <div class="portfolio-item">
                                        <div class="project-grid-wrapper">
                                            <a class="project-grid-item-img-link" href="{{ route('projects.manhattan.central-park-south.main') }}">
                                                <div class="project-grid-item-img">
                                                    <img   src="#" data-lazy-src="/img/projects-galleries/manhattan/west-64th/galleries/interior/17.JPG"
                                                           class="s-img-switch wp-post-image wp-post-image" alt="seascape-villa image" />
                                                </div>
                                            </a>
                                            <div class="project-grid-item-content">
                                                <h4 class="project-grid-item-title"><a href="{{ route('projects.manhattan.central-park-south.main') }}">MAIN</a></h4>
                                                <div class="project-grid-item-category">
                                                    Dream living delivered </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>



                                <div class="portfolio-item-wrapp">
                                    <div class="portfolio-item">
                                        <div class="project-grid-wrapper">
                                            <a class="project-grid-item-img-link" href="/projects/manhattan/west-64th/wip">
                                                <div class="project-grid-item-img">
                                                    <img   src="#" data-lazy-src="/img/projects-galleries/manhattan/west-64th/galleries/wip/generic/_157_face.JPG"
                                                           class="s-img-switch wp-post-image wp-post-image" alt="alvar-alto-museum image" />
                                                </div>
                                            </a>
                                            <div class="project-grid-item-content">
                                                <h4 class="project-grid-item-title"><a href="{{ route('projects.manhattan.central-park-south.wip') }}"> Work In  Progress</a></h4>
                                                <div class="project-grid-item-category">
                                                    Work In  Progress</div>

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
