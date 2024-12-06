<!--==================================================-->
<!-- Start Hendre Top Menu section -->
<!--==================================================-->
<div class="header-top-section">
    <div class="container">
        <div class="row align-items-center d-flex">
            <div class="col-lg-6">
                <div class="header-address-info">
                    <p> <i class="bi bi-geo-alt"></i> {{ $address[0]->value }} </p>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="header-top-right text-right">

                    <div class="phone-number">
                        <p>
                            @foreach($phone as $item)
                                <i class="fas fa-phone-square-alt"></i>  {{ $item->value }} &nbsp &nbsp
                            @endforeach
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--==================================================-->
<!-- Start Hendre Top Menu section -->
<!--==================================================-->




<!--==================================================-->
<!-- Start Hendre Main Menu  -->
<!--==================================================-->
<div id="sticky-header" class="hendre_nav_manu">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-2">
                <div class="logo">
                    <a class="logo_img" href="{{ route("main") }}" title="hendre">
                        <img class="img-fluid" src="{{ asset('admin/images/logo_sarsilmaz.png') }}" alt="" />
                    </a>
                    <a class="main_sticky" href="{{ route('main') }}" title="hendre">
                        <img class="img-fluid" src="{{ asset('admin/images/logo_sarsilmaz.png') }}" alt="" />
                    </a>
                </div>
            </div>
            <div class="col-lg-10">
                <nav class="hendre_menu">
                    <ul class="nav_scroll">
                        <li><a href="{{ route('main') }}">Anasayfa</a></li>

                        <li><a href="{{ route("about") }}">Hakkımızda</a></li>
                        <li><a href="{{ route('blogs') }}">Blog </a></li>
                        <li><a href="{{ route("services") }}">Hizmetlerimiz</a></li>
                        <li><a href="{{ route('front.gallery') }}">Galeri</a></li>
                        <li><a href="{{ route("contact") }}">İletişim</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>

<!-- hendre Mobile Menu  -->
<div class="mobile-menu-area sticky d-sm-block d-md-block d-lg-none ">
    <div class="mobile-menu">
        <nav class="hendre_menu">
            <ul class="nav_scroll">
                <li><a href="#home">Home <span><i class="fas fa-chevron-down"></i></span></a>
                    <ul class="sub-menu">
                        <li><a href="index.html">Hendre Home Page</a></li>
                        <li><a href="home-landing.html">Hendre Landing Page</a></li>
                    </ul>
                </li>
                <li><a href="about.html">About Us</a></li>
                <li><a href="#">Services <span><i class="fas fa-chevron-down"></i></span></a>
                    <ul class="sub-menu">
                        <li><a href="service.html">Our Service</a></li>
                        <li><a href="service-details.html">Service Details</a></li>
                    </ul>
                </li>
                <li><a href="#">Pages <span><i class="fas fa-chevron-down"></i></span></a>
                    <ul class="sub-menu">
                        <li><a href="about.html">About Us</a></li>
                        <li><a href="service.html">Our Service</a></li>
                        <li><a href="team.html">Our Team</a></li>
                        <li><a href="portfolio.html">Project</a></li>
                        <li><a href="portfolio-details.html">Project Details</a></li>
                        <li><a href="pricing.html">Pricing</a></li>
                        <li><a href="faq.html">Faq</a></li>
                        <li><a href="contact.html">Contact Us</a></li>
                    </ul>
                </li>
                <li><a href="#">Shop <span><i class="fas fa-chevron-down"></i></span></a>
                    <ul class="sub-menu">
                        <li><a href="shop.html">Shop One</a></li>
                        <li><a href="shop-2.html">Shop Two</a></li>
                        <li><a href="shop-details.html">Shop Details</a></li>
                    </ul>
                </li>
                <li><a href="#">Blog <span><i class="fas fa-chevron-down"></i></span></a>
                    <ul class="sub-menu">
                        <li><a href="blog-grid.html">Blog Gird</a></li>
                        <li><a href="blog.html">Blog List</a></li>
                        <li><a href="blog-2column.html">Blog-2Column</a></li>
                        <li><a href="blog-details.html">Blog Details</a></li>
                    </ul>
                </li>
                <li><a href="contact.html">Contact Us</a></li>
            </ul>
        </nav>
    </div>
</div>
<!--==================================================-->
<!-- End Hendre Main Menu  -->
<!--==================================================-->
