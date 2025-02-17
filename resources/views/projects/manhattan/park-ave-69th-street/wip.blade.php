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

                <div class="subtitle  text-alight-lft"><a href = "{{ route('projects.manhattan.park-ave-69th-street.index') }}">Park Ave : 69th Street</a> > In Progress </div>
                <h2 class="title  text-alight-lft">Behind the Walls: A Manhattan Metamorphosis</h2>
                <div class="content text-alight-lft">
                    <p>At the heart of every luxury Manhattan renovation lies a complex symphony of infrastructure
                        work that most will never see. Through the dust and demolition, skilled craftsmen meticulously
                        reconstruct the bones of these prestigious properties - from precision-engineered metal framing
                        systems to state-of-the-art HVAC integration. The careful installation of commercial-grade steel s
                        tuds creates the foundation for perfectly straight walls, while advanced electrical and mechanical
                        systems are thoughtfully concealed within the framework, ensuring both optimal performance and
                        aesthetic perfection.</p>
                </div>
            </div>
        </div>
        <div class="col-sm-6  margin-lg-75t margin-xs-10t margin-top-md">
            <div class="heading no-padd-top-bottom left dark">
                <div class="subtitle display-none-md"> </div>
                <div class="content text-alight-lft  no-marg-767 ">
                    <p>The transformation from raw construction to refined elegance represents the essence of high-end Manhattan renovations.
                        As the metal framework rises and mechanical systems find their place, each technical decision is made with the final
                        vision in mind. The installation of seamless HVAC systems, hidden behind pristine drywall and custom millwork,
                        demonstrates the invisible luxury that defines premium New York properties. From the precision-cut door frames to
                        the flawless ceiling joints, every detail is executed with the understanding that true luxury lies not just in what you see,
                        but in the quality of what remains hidden.</p>
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
                                20218
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
                                Park Ave / 69th Street, New York NY
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
