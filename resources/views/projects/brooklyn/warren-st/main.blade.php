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

                <div class="subtitle  text-alight-lft"><a href = "{{ route('projects.brooklyn.water-st.index') }}">Water St</a> Main Gallery </div>
                <h2 class="title  text-alight-lft">The Art of Integration: NYC Modern Library Design</h2>
                <div class="content text-alight-lft">
                    <p>Our latest Manhattan project exemplifies the seamless fusion of contemporary design with practical
                        functionality. The space features meticulously crafted built-in shelving units that maximize
                        storage while maintaining an open, airy atmosphere. The integrated HVAC system and recessed
                        lighting demonstrate our expertise in combining technical requirements with clean architectural lines.</p>
                </div>
            </div>
        </div>
        <div class="col-sm-6  margin-lg-75t margin-xs-10t margin-top-md">
            <div class="heading no-padd-top-bottom left dark">
                <div class="subtitle display-none-md"> </div>
                <div class="content text-alight-lft  no-marg-767 ">
                    <p>The design's success lies in its attention to detail – from the carefully selected wide-plank
                        flooring to the strategically placed media center. Modern conveniences blend effortlessly with
                        the minimalist aesthetic, creating a sophisticated space that serves both as a private library
                        and entertainment area. This project showcases our ability to deliver high-end custom solutions
                        that meet the exacting standards of New York's luxury residential market.</p>
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
                                Water Street, Brooklyn, NYC, NY
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
