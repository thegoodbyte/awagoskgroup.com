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

                <div class="subtitle  text-alight-lft"><a href = "{{ route('projects.manhattan.wooster-st.index') }}">Wooster St</a> > BATH </div>

                <h2 class="title  text-alight-lft">Bespoke Bathroom Sanctuaries</h2>
                <div class="content text-alight-lft">
                    <p>Our custom bathroom designs redefine luxury in Manhattan's most prestigious residences. Each
                        project showcases our mastery of sophisticated materials and architectural innovation, from
                        curved terrazzo shower enclosures with integrated seating to striking copper-finished soaking
                        tubs that serve as sculptural centerpieces. The floating vanities with seamless surfaces
                        demonstrate our commitment to pushing design boundaries while maintaining practical
                        functionality. Our expertise in lighting design creates dramatic effects through carefully
                        positioned LED systems and architectural details that transform these spaces into personal
                        spa retreats..
                    </p>
                </div>
            </div>
        </div>
        <div class="col-sm-6  margin-lg-75t margin-xs-10t margin-top-md">
            <div class="heading no-padd-top-bottom left dark">
                <div class="subtitle display-none-md"> </div>
                <div class="content text-alight-lft  no-marg-767 ">
                    <p>The technical precision of our work is evident in every detail, from the gracefully curved
                        walls to the precisely engineered plumbing systems that support custom fixtures.
                        Each bathroom becomes a study in refined minimalism, featuring innovative elements like
                        floating counters with hidden storage, sculptural fixtures, and bespoke finishes. The marriage
                        of form and function is exemplified in details like the integrated shelf lighting, contemporary
                        European fixtures, and the harmonious blend of materials – from metallic accents to custom
                        terrazzo surfaces – creating spaces that epitomize modern luxury while providing an oasis of
                        tranquility.</p>
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
                                2023
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
                                Wooster Street, Manhattan, NYC, NY
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
