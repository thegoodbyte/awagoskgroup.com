<!--HEADER-->
<header class="prague-header simple sticky-menu sticky-mobile-menu dark">

    <div class="prague-logo">
        <a href="/">
            <img src="/img/home/logo/logo_100w.png" class="image_logo" alt="logo" /></a>
    </div>

    <div class="prague-header-wrapper">

        <div class="prague-navigation">
            <div class="pargue-navigation-wrapper">
                <div class="prague-navigation-inner">


                    <nav>
                        <ul class="main-menu">
                            <li id="menu-item-2317" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-2317"><a
                                    href="/">Home</a>

                            </li>

                            <li id="menu-item-2310" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-2310"><a
                                    href="#">Projects</a>
                                <ul class="sub-menu">
                                    <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-2313">
                                        <span style = "font-weight: bold;color:#fff;padding: 3px; ">Manhattan</span>
                                    </li>
                                    <li id="menu-item-2313" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-2313"><a
                                            href="{{ route("projects.manhattan.park-ave.index") }}">Park Ave, Manhattan</a>
                                        <ul class="sub-menu">
                                            <li id="menu-item-2337" class="menu-item menu-item-type-post_type menu-item-object-page ">
                                                <a href="{{ route("projects.manhattan.park-ave.interior") }}">Interior</a>
                                            </li>
                                            <li id="menu-item-2338" class="menu-item menu-item-type-post_type menu-item-object-page ">
                                                <a href="{{ route("projects.manhattan.park-ave.exterior") }}">Exterior</a>
                                            </li>
                                        </ul>
                                    </li>


                                    <li id="menu-item-2315" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-2315"><a
                                            href="{{ route("projects.manhattan.west-64th") }}">West 64th, Manhattan</a>
                                        <ul class="sub-menu">
                                            <li id="menu-item-2337" class="menu-item menu-item-type-post_type menu-item-object-page ">
                                                <a href="{{ route("projects.manhattan.west-64th.kitchen") }}">Kitchen</a>
                                            </li>
                                            <li id="menu-item-2337" class="menu-item menu-item-type-post_type menu-item-object-page ">
                                                <a href="{{ route("projects.manhattan.west-64th.interior") }}">Interior</a>
                                            </li>
                                            <li id="menu-item-2338" class="menu-item menu-item-type-post_type menu-item-object-page ">
                                                <a href="{{ route("projects.manhattan.west-64th.exterior") }}">Exterior</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li id="menu-item-2318" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-2318"><a
                                            href="{{ route('projects.manhattan.wooster-st.index') }}">Wooster St, Manhattan </a>
                                        <ul class="sub-menu">
                                            <li id="menu-item-2337" class="menu-item menu-item-type-post_type menu-item-object-page ">
                                                <a href="{{ route("projects.manhattan.wooster-st.interior") }}">Interior</a>
                                            </li>
                                            <li id="menu-item-2338" class="menu-item menu-item-type-post_type menu-item-object-page ">
                                                <a href="{{ route("projects.manhattan.wooster-st.bath") }}">Bath</a>
                                            </li>
                                        </ul>
                                    </li>

                                    <li id="menu-item-2318" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-2318"><a
                                            href="{{ route('projects.manhattan.riverside-blvd.index') }}">Riverside Blvd, Manhattan</a>
                                    </li>

                                    <li id="menu-item-2318" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-2318"><a
                                            href="{{ route('projects.manhattan.sorens') }}">Sorens / Tribeca / Manhattan</a>
                                    </li>

                                    <li id="menu-item-2318" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-2318"><a
                                            href="{{ route('projects.manhattan.irving') }}">Irving / Manhattan</a>
                                    </li>

                                    <li id="menu-item-2318" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-2318"><a
                                            href="{{ route('projects.manhattan.central-park-south.index') }}">Central Park South / Manhattan</a>
                                    </li>

                                    <li id="menu-item-2318" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-2318"><a
                                            href="{{ route('projects.manhattan.hudson.index') }}">Hudson / Manhattan</a>
                                    </li>

                                    <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-2313">
                                        <span style = "font-weight: bold;color:#fff;padding: 3px; ">Brooklyn</span>
                                    </li>

                                    <li id="menu-item-2336" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-2336"><a
                                            href="{{ route('projects.brooklyn.warren-st.index') }}">Warren St, Brooklyn</a>
                                    </li>

                                    <li id="menu-item-2336" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-2336"><a
                                            href="{{ route('projects.brooklyn.water-st.index') }}">Water St, Brooklyn</a>
                                    </li>
                                </ul>
                            </li>

                            <li id="menu-item-2311" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-2311"><a
                                    href="#">Services</a>
                                <ul class="sub-menu">
                                    <li id="menu-item-2355" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2355"><a
                                            href="{{ route('services.index') }}">Remodeling and Renovations</a></li>
                                    <li id="menu-item-2333" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2333"><a
                                            href="{{ route('services.index') }}">Custom Kitchens</a></li>
                                    <li id="menu-item-2334" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2334"><a
                                            href="{{ route('services.index') }}">Outdoor living spaces</a></li>
                                    <li id="menu-item-2332" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2332"><a
                                            href="{{ route('services.index') }}">Custom bathrooms</a></li>
                                    <li id="menu-item-2356" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2356"><a
                                            href="{{ route('services.index') }}">Stairways</a></li>
                                    <li id="menu-item-2348" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2348"><a
                                            href="{{ route('services.index') }}">Custom Spaces</a></li>
                                    <li id="menu-item-2347" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2347"><a
                                            href="{{ route('services.index') }}">Custom Cabinets</a></li>

                                </ul>
                            </li>



                            <li id="menu-item-2433" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-2433">
                                <a href="/about-us">About us</a>
                            </li>

                            <li id="menu-item-2445" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-2445">
                                <a href="/contact-us">Contact us</a>
                            </li>
                        </ul>
                    </nav>

                </div>
            </div>
        </div>


        <!-- mobile icon -->
        <div class="prague-nav-menu-icon">
            <a href="#">
                <i></i>
            </a>
        </div>


        <div class="prague-social-nav">

            <a href="#">
                <i class="fa fa-chain-broken" aria-hidden="true"></i>
            </a>

            <ul class="social-content">
                <li>
                    <a target="_blank" href="https://www.behance.net/awagoskgroup">
                        <i aria-hidden="true" class="fa fa-behance"></i>
                    </a>
                </li>
                <li>
                    <a target="_blank" href="https://x.com/awagoskgroup">
                        <i aria-hidden="true" class="fa fa-twitter"></i>
                    </a>
                </li>
                <li>
                    <a target="_blank" href="https://www.facebook.com/awagoskgroup/">
                        <i aria-hidden="true" class="fa fa-facebook"></i>
                    </a>
                </li>
                <li>
                    <a target="_blank" href="https://www.pinterest.com/awagoskgroup">
                        <i aria-hidden="true" class="fa fa-pinterest-p"></i>
                    </a>
                </li>
            </ul>

        </div>

    </div>
</header>
<!-- END HEADER -->
