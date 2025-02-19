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

                <div class="subtitle  text-alight-lft"><a href = "{{ route('projects.manhattan.riverside-blvd.index') }}">Riverside Blvd</a> > In Progress </div>
                <h2 class="title  text-alight-lft">Crafting Excellence: A Luxury Renovation in Progress</h2>
                <div class="content text-alight-lft">
                    <p>During the transformation of this Manhattan residence, our skilled team meticulously
                        executed each phase of construction with precision and care. The progress photos
                        showcase our comprehensive approach to high-end renovation, from the careful installation
                        of premium wide-plank flooring and sophisticated lighting systems to the expert craftsmanship
                        involved in custom millwork and architectural steel work. The images capture our detailed
                        process of integrating modern systems within the historical framework, including the installation of
                        custom radiator covers, state-of-the-art HVAC integration, and intricate electrical work.</p>
                </div>
            </div>
        </div>
        <div class="col-sm-6  margin-lg-75t margin-xs-10t margin-top-md">
            <div class="heading no-padd-top-bottom left dark">
                <div class="subtitle display-none-md"> </div>
                <div class="content text-alight-lft  no-marg-767 ">
                    <p>Our commitment to excellence is evident in the careful protection of finished
                        surfaces throughout construction, the precise installation of custom steel and
                        glass partitions, and the thoughtful integration of built-in elements. The progress gallery
                        demonstrates the extensive preparation and skillful execution required for luxury features
                        such as the marble waterfall kitchen island, custom cabinetry, and architectural lighting.
                        These behind-the-scenes glimpses reveal the complex coordination and attention to detail
                        that go into creating a sophisticated Manhattan residence, from raw space to refined completion.</p>
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
                                2019
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
                                Hudson, NYC, NY
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
