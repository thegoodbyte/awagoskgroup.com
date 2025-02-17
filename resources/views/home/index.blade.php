@extends('layouts.homepage')

<div class="row">
    <div class="col-xs-12 no-padd">
        <div class="container-fluid top-banner no-padd  big fullheight light">
            <img src="/img/home/home-bg-300s.jpg" class="s-img-switch" alt="top-banner image" />
            <span class="overlay"></span>
            <div class="content">
                <div class="prague-svg-animation-text"></div>
                <div class="subtitle">Where Design Meets Perfection</div>
                <h1 class="title"> Redefining NYC Living with Architectural Excellence.</h1>
                <div class="description">
                    <p>Elevating NYC Luxury Living
                        through Unparalleled Craftsmanship</p>
                </div>
                <a href="{{ route('projects.manhattan.west-64th') }}" class="a-btn creative">
                    <span class="a-btn-line "></span>EXPLORE IT</a>
            </div>
            <div class="top-banner-cursor"></div>
        </div>
    </div>
</div>

<div class="container no-padd">
    <div class="row-fluid  margin-lg-140t margin-sm-70t">
        <div class="col-sm-8 col-lg-offset-0 no-padd col-lg-4 col-md-offset-0 col-md-5 col-sm-offset-2 col-xs-12  margin-lg-65t margin-sm-0t">
            <div class="vc_column-inner margin-minus-left">
                <div class="prague-counter  alone_item no-figure">

                    <div class="figures ">
                        <!-- triangle -->
                    </div>

                    <div class="counter-outer" style="padding:15px;">

                        <img src="#" data-lazy-src="/img/home/stock-photo-66175729.jpg" alt="experience image"
                             class="prague-counter-img s-img-switch">

                        <div class="numbers">
                            <svg>
                                <defs>
                                    <mask id="coming_mask_0" x="0" y="0">
                                        <rect class="coming-alpha" x="0" y="0" width="100%" height="100%"></rect>
                                        <text class="count number" x="50%" y="45%" text-anchor="middle"
                                              alignment-baseline="middle">30</text>
                                        <text class="count title" x="50%" y="70%" text-anchor="middle"
                                              alignment-baseline="middle">YEARS OF EXPERIENCE</text>
                                    </mask>
                                </defs>
                                <rect style="-webkit-mask: url(#coming_mask_0); mask: url(#coming_mask_0);" class="base"
                                      x="0" y="0" width="100%" height="100%"></rect>
                            </svg>


                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class=" no-padd col-sm-12 col-lg-offset-1 col-lg-7 col-md-offset-0 col-md-7 col-sm-offset-0 col-xs-12  margin-sm-20t">
            <div class="heading  left dark">

                <div class="subtitle ">ABOUT US</div>
                <h2 class="title">Building New York City Dreams</h2>
                <div class="content ">
                    <p>With over 25 years of experience transforming New York City's most prestigious homes, our master
                        craftsmanship has earned a reputation for excellence in high-end residential remodeling.
                        From custom kitchens that blend functionality with elegance to luxurious bathrooms that rival five-star spas,
                        we bring our clients' visions to life with meticulous attention to detail.
                    </p>

                    <p>
                        Our portfolio showcases a diverse range of projects, including sophisticated outdoor living spaces,
                        grand staircases that make a statement, and smart home integrations that elevate modern living.
                        Our commitment to quality craftsmanship and client satisfaction has made us the go-to choice for
                        discerning homeowners across the city.
                    </p>

                    <p>

                        Whether you're dreaming of a complete home renovation or a
                        bespoke custom space, we have the expertise and creativity to exceed your expectations and create a
                        living environment that truly reflects your style and needs.</p>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<div class="margin-lg-20t margin-sm-30t">
    <div class="container">
        <div class="row">

            <div class="column colum-container col-sm-12 no-padd margin-lg-20b">
                <div class="heading  left dark">

                    <div class="subtitle ">LAST PROJECTS</div>
                    <h2 class="title">Transforming Vision into Reality</h2>
                </div>
            </div>

            <div class="no-padd-left no-padd-right margin-lg-20t">
                <div class="wrapper">
                    <div data-unique-key="139714cb2b9c35c987d2544328454258" class="js-load-more" data-start-page="1"
                         data-max-page="5" data-next-link="/">
                        <div class="row prague_list prague_count_col1 prague_gap_col10  no-footer-content no-figure prague-load-wrapper"
                             data-columns="prague_count_col1" data-gap="prague_gap_col10">
                            <div class="project-list-item">
                                <div class="project-list-outer">

                                    <div class="project-list-wrapper">

                                        <div class="project-list-img">
                                            <!-- 51f1b143659493.57f77d5c9619a -->
                                            <a href="{{ route ('projects.manhattan.west-64th') }}" target="_self">
                                                <img src="/img/home/frontpage/west-64th.JPG" data-lazy-src="/img/home/frontpage/west-64th.JPG" class="s-img-switch"
                                                                                                        alt="West 64the Street" /></a>
                                        </div>

                                        <div class="project-list-content">

                                            <div class="project-list-category">2023</div>
                                            <h3 class="project-list-title"><a href="{{ route ('projects.manhattan.west-64th') }}" target="_self">West 64th, Manhattan</a></h3>
                                            <div class="project-list-excerpt">
                                                <p>This stunning urban renovation transforms a multi-level space into a sophisticated,
                                                    contemporary living environment. Characterized by a cohesive gray and white color
                                                    palette, the project seamlessly integrates modern design elements with functional
                                                    living spaces. Thoughtful details like floating stairs, sleek built-in cabinetry,
                                                    and carefully curated furnishings create an elegant, minimalist aesthetic ...</p>
                                            </div>
                                            <a href="{{ route ('projects.manhattan.west-64th') }}" class="project-list-link a-btn-arrow-2"
                                               target="_self">
                                                <span class="arrow-right"></span>
                                                READ</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="project-list-item  column_paralax">
                                <div class="project-list-outer">

                                    <div class="project-list-wrapper">

                                        <div class="project-list-img">
                                            <img src="/img/home/frontpage/wooster-st.JPG" data-lazy-src="/img/home/frontpage/wooster-st.JPG"
                                                 class="s-img-switch" alt="Project #2" />
                                        </div>

                                        <div class="project-list-content">

                                            <div class="project-list-category">2016</div>


                                            <h3 class="project-list-title"><a href="{{ route('projects.manhattan.wooster-st.index') }}"
                                                                              target="_self">Wooster Street, Manhattan</a></h3>
                                            <div class="project-list-excerpt">
                                                <p>This contemporary renovation showcases a masterful blend of minimalist design and
                                                    innovative spatial planning. Characterized by clean lines, warm wooden accents,
                                                    and strategically placed architectural elements, the project transforms the interior
                                                    into a sophisticated, light-filled environment. Unique design features like curved walls,
                                                    exposed structural columns, and a carefully curated color palette of neutral tones create ...</p>

                                            </div>

                                            <a href="{{ route('projects.manhattan.wooster-st.index') }}" class="project-list-link a-btn-arrow-2"
                                               target="_self">
                                                <span class="arrow-right"></span>
                                                READ</a>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="project-list-item">
                                <div class="project-list-outer">


                                    <div class="project-list-wrapper">

                                        <div class="project-list-img">
                                            <img src="/img/home/frontpage/park-ave.JPG" data-lazy-src="/img/home/frontpage/park-ave.JPG" class="s-img-switch"
                                                 alt="yabroudi-villa image" />
                                        </div>

                                        <div class="project-list-content">

                                            <div class="project-list-category">2018</div>

                                            <h3 class="project-list-title"><a href="{{ route('projects.manhattan.park-ave.index') }}" target="_self">Park Ave, Manhattan</a></h3>
                                            <div class="project-list-excerpt">
                                                <p>In this stunning Park Avenue residence, we collaborated closely with architects to
                                                    create a sophisticated urban sanctuary that seamlessly blends contemporary luxury with f
                                                    unctional design. The expansive living spaces showcase our commitment to premium craftsmanship,
                                                    featuring custom millwork, floor-to-ceiling windows with automated sheer curtains,
                                                    and a harmonious mix of materials including marble, glass, and rich hardwoods...</p>
                                            </div>

                                            <a href="{{ route('projects.manhattan.wooster-st.index') }}" class="project-list-link a-btn-arrow-2"
                                               target="_self">
                                                <span class="arrow-right"></span>
                                                READ</a>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="project-list-item">
                                <div class="project-list-outer">


                                    <div class="project-list-wrapper">

                                        <div class="project-list-img">
                                            <img src="/img/home/frontpage/hudson.JPG" data-lazy-src="/img/home/frontpage/hudson.JPG"
                                                 class="s-img-switch" alt="cultural-complex-centre image" />
                                        </div>

                                        <div class="project-list-content">

                                            <div class="project-list-category">2017</div>


                                            <h3 class="project-list-title"><a href="{{ route('projects.manhattan.hudson.index') }}"
                                                                              target="_self">Hudson St, Manhattan</a></h3>
                                            <div class="project-list-excerpt">
                                                <p>In this remarkable Manhattan loft renovation, we transformed an industrial space into a sophisticated modern residence,
                                                    showcasing our expertise in high-end construction through custom millwork, architectural steel and glass partitions,
                                                    and premium finishes. While preserving original elements like exposed brick walls and wooden beams, we integrated
                                                    contemporary features including a state-of-the-art chef's kitchen with marble waterfall countertops ...</p>

                                            </div>

                                            <a href="{{ route('projects.manhattan.hudson.index') }}" class="project-list-link a-btn-arrow-2"
                                               target="_self">
                                                <span class="arrow-right"></span>
                                                READ</a>

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
