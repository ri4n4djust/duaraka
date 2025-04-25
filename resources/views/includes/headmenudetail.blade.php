<header id="banner-wd" class="scrollto clearfix" style="background-image: url('{{ asset('storage/banner/' . $pages->image) }}'); ">
    <div id="header" class="nav-collapse" style="z-index: 2;">
        <div class="row clearfix">
            <div class="col-1">

                <!--Logo-->
                <div id="logo">
                    
                    <!--Logo that is shown on the banner-->
                    <img src="{{asset('assets/images/logo.png')}}" id="banner-logo" alt="Landing Page"/>
                    <!-- <h1>The Awan Villas</h1>  -->
                    <!--End of Banner Logo-->

                    <!--The Logo that is shown on the sticky Navigation Bar-->
                    <img src="{{asset('assets/images/logo-2.png')}}" id="navigation-logo" alt="Landing Page"/>
                    <!--End of Navigation Logo-->

                </div>
                <!--End of Logo-->

                <aside>

                    <!--Social Icons in Header-->
                    <ul class="social-icons">
                        <li>
                            <a target="_blank" title="Facebook" href="https://www.facebook.com/username">
                                <i class="fa fa-facebook fa-3x"></i><span>Facebook</span>
                            </a>
                        </li>
                        <li>
                            <a target="_blank" title="Twitter" href="http://www.twitter.com/username">
                                <i class="fa fa-twitter fa-3x"></i><span>Twitter</span>
                            </a>
                        </li>
                        <li>
                            <a target="_blank" title="Instagram" href="http://www.instagram.com/username">
                                <i class="fa fa-instagram fa-3x"></i><span>Instagram</span>
                            </a>
                        </li>
                    </ul>
                    <!--End of Social Icons in Header-->

                </aside>

                <!--Main Navigation-->
                <nav id="nav-main">
                    <ul>
                        <li ><a  href="/">Home</a></li>
                        <li >
                            <a  href="#">VILLAS</a>
                            <ul>
                                <li><a href="/one-bedroom">One Bed Room</a></li>
                                <li><a href="/two-bedroom">Two Bed Room</a></li>
                            </ul>
                        </li>
                        <!-- <li ><a href="/dining">DINING</a></li> -->
                        <li ><a  href="/provide-services">Provided Services</a></li>
                        <li ><a  href="/gallery">GALLERY</a></li>
                        <li><a href="/special-offers">SPECIAL OFFERS</a></li>
                        <li ><a  href="/about-us">About Us</a></li>
                    </ul>
                </nav>
                <!--End of Main Navigation-->

                <div id="nav-trigger"><span></span></div>
                <nav id="nav-mobile"></nav>

            </div>
        </div>
    </div><!--End of Header-->
</header>
