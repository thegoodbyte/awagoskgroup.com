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

                <div class="subtitle  text-alight-lft"><a href = "{{ route('projects.brooklyn.warren-st.index') }}">Warren St > </a> <a href = "{{ route('projects.brooklyn.warren-st.wip.index') }}">In Progress > </a> Stairs </div>
                <h2 class="title  text-alight-lft">Brooklyn Hearths [WIP]</h2>
                <div class="content text-alight-lft">
                    <p>The fireplace restoration project showcases a delicate balance of historical preservation and structural rehabilitation. The ornate Victorian marble mantel, with its intricate carved details and classical arch design, is being carefully restored to its original grandeur. The process involves meticulous cleaning and repair of the decorative elements, while ensuring the structural integrity of both the mantel and the surrounding masonry work.</p>
                </div>
            </div>
        </div>
        <div class="col-sm-6  margin-lg-75t margin-xs-10t margin-top-md">
            <div class="heading no-padd-top-bottom left dark">
                <div class="subtitle display-none-md"> </div>
                <div class="content text-alight-lft  no-marg-767 ">
                    <p>The comprehensive restoration extends beyond aesthetics to include essential functional improvements. Particular attention is being paid to the proper integration with new flooring materials, reinforcement of the hearth structure, and careful preservation of the original architectural details. The project demonstrates the challenges of maintaining historical elements while adapting the space for modern use,
                        all while adhering to NYC building codes and landmark preservation requirements.</p>
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
                                2024
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
                <div class="project-detail-block-wrapper">
                    <div class="project-detail-block-item">
                        <div class="project-detail-block-title">
                            CREATIVE DIRECTOR </div>
                        <div class="project-detail-block-descr">
                            <p>
                                Wojciech Gosk
                            </p>
                        </div>
                    </div>
                </div>
                <div class="project-detail-block-wrapper">
                    <div class="project-detail-block-item">
                        <div class="project-detail-block-title">
                            VISUALIZATION </div>
                        <div class="project-detail-block-descr">
                            <p>
                                Wojciech Gosk
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container project-detail-simple margin-lg-125b margin-sm-75b">
    <div class=" prague-share-icons">
        <div class="prague-share-label">SHARE PROJECT</div>

        <button data-share="http://www.facebook.com/sharer.php?u=alto-furniture.html&amp;t=Alto Furniture" class="icon fa fa-facebook"></button>

        <button data-share="http://twitter.com/home/?status=Alto Furniture - alto-furniture.html" class="icon fa fa-twitter"></button>

        <button data-share="http://www.linkedin.com/shareArticle?mini=true&amp;title=Alto Furniture&amp;url=alto-furniture.html"
                class="icon fa fa-linkedin"></button>

        <button data-share="http://pinterest.com/pin/create/button/?url=alto-furniture.html&media=img/alto-furniture/29d9cd46052073.58467b6d8b26b-e1542297883242.jpg"
                class="icon fa fa-pinterest-p"></button>

    </div>
</div>
<!--/MAIN BODY-->
