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

                <div class="subtitle  text-alight-lft"><a href = "{{ route('projects.brooklyn.water-st.index') }}">Water St</a> Exterior </div>
                <h2 class="title  text-alight-lft">Brooklyn Skyline Terrace Specialists</h2>
                <div class="content text-alight-lft">
                    <p>Our exterior remodeling expertise transforms urban spaces into stunning outdoor sanctuaries with Manhattan skyline views. We specialize in creating sophisticated rooftop terraces and balconies that maximize the dramatic cityscapes while providing intimate entertainment spaces. Our projects feature premium materials like architectural pavers, custom privacy walls, and integrated outdoor kitchens, all engineered to meet strict building codes while delivering uncompromising style and functionality.</p>
                </div>
            </div>
        </div>
        <div class="col-sm-6  margin-lg-75t margin-xs-10t margin-top-md">
            <div class="heading no-padd-top-bottom left dark">
                <div class="subtitle display-none-md"> </div>
                <div class="content text-alight-lft  no-marg-767 ">
                    <p>From waterproofing and drainage systems to lighting and custom amenities, we handle every aspect of exterior transformation with meticulous attention to detail. Our designs incorporate durable materials that withstand urban weather conditions while maintaining their aesthetic appeal. We excel at optimizing limited outdoor spaces through thoughtful layout planning and multi-functional design elements, creating seamless transitions between indoor and outdoor living areas that capture Brooklyn's unique position as a front-row seat to Manhattan's iconic skyline.</p>
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
                                2017 / 2018
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
                                Water Street, Brooklyn, NY
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
