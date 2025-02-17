@extends('layouts.default')
<!--MAIN BODY-->
<div class="container-fluid no-padd">
    <div class="row-fluid no-padd ">
        <div class="col-sm-12 no-padd">

            @include('components.projects.gallery', [
                'images' =>  $images['galleries']['bath']
                ])
        </div>
    </div>
</div>

<div class="container no-padd">
    <div class="row-fluid no-padd">
        <div class="col-sm-6 no-padd-inner">
            <div class="heading no-padd-top-bottom left dark">

                <div class="subtitle  text-alight-lft">INTERIOR</div>
                <h2 class="title  text-alight-lft">Wooster Street - Bath Remodeling</h2>
                <div class="content text-alight-lft">

                    <!--
                    Exceptional Bathroom Remodeling for NYC’s Finest Apartments and Penthouses
                    -->
                    <p>Transforming a bathroom into a space of elegance and functionality is no
                        easy task. For our clients in New York City’s finest apartments and
                        penthouses, we bring vision and precision to every detail, working
                        hand-in-hand with top architects to create truly exceptional results.
                        From the moment you step into our remodeled bathrooms, you'll notice the
                        seamless blend of modern design, high-quality materials, and thoughtful craftsmanship.
                    </p>

                    <p>
                        Each bathroom features stunning design elements, such as custom-built vanities,
                        state-of-the-art fixtures, and spa-like showers with bespoke tiling and innovative
                        storage solutions. The careful attention to layout and design ensures that each element
                        serves a purpose, while maintaining a sense of luxury and sophistication.
                    </p>

                    <p>
                        Whether you are looking to update your master bath or completely revamp your entire
                        space, we approach every project with the utmost dedication to quality and aesthetics,
                        making sure every detail exceeds your expectations. Our ability to combine practicality
                        with style results in a bathroom that not only meets the highest standards but offers a
                        serene and functional retreat within your home.</p>
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
