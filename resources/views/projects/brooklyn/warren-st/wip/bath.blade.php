@extends('layouts.default')
<!--MAIN BODY-->
<div class="container-fluid no-padd">
    <div class="row-fluid no-padd ">
        <div class="col-sm-12 no-padd">

            {{--            @php--}}
            {{--                print_r($data['galleries']);--}}
            {{--                exit;--}}
            {{--            @endphp--}}
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

                <div class="subtitle  text-alight-lft"><a href = "{{ route('projects.brooklyn.warren-st.index') }}">Warren St > </a> <a href = "{{ route('projects.brooklyn.warren-st.wip.index') }}">In Progress > </a> Bath </div>
                <h2 class="title  text-alight-lft">Urban Oasis [WIP]</h2>
                <div class="content text-alight-lft">
                    <p>The bathroom remodel showcases a meticulous attention to detail, from the ground up. Starting
                        with a proper foundation, the team installed cement board and electric radiant floor heating,
                        ensuring both durability and comfort. The space features a striking combination of tile work,
                        including light gray shower tiles in a clean grid pattern, a dramatic marble-look accent wall,
                        and designer geometric tiles that create an artistic statement. The custom-built shower niche
                        and bench demonstrate thoughtful functionality while maintaining the space's elegant aesthetic.
                    </p>
                </div>
            </div>
        </div>
        <div class="col-sm-6  margin-lg-75t margin-xs-10t margin-top-md">
            <div class="heading no-padd-top-bottom left dark">
                <div class="subtitle display-none-md"> </div>
                <div class="content text-alight-lft  no-marg-767 ">
                    <p>The finished bathroom harmoniously blends modern amenities with sophisticated design elements.
                        The floating wood vanity with its dark stone countertop provides a warm contrast to the cool
                        tones of the tile work. Matte black fixtures, including the shower controls, towel bars, and
                        door hardware, add contemporary touches throughout. The glass shower enclosure maintains an
                        open feel while protecting the rest of the space, and the large window, framed by geometric
                        patterned tile, brings natural light into the renovated space, highlighting the quality of
                        craftsmanship in every detail.</p>
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
                                2023 / 2024
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
                                Warren St, Brooklyn, NY
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
