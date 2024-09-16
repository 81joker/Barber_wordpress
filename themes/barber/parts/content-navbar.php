    <header>
        <!--? Header Start -->
        <div class="header-area header-transparent pt-20">
            <div class="main-header header-sticky">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <!-- Logo -->
                        <div class="col-xl-2 col-lg-2 col-md-1">
                            <div class="logo">
                                <a href="<?php echo site_url('/') ?>"><img src="<?php echo get_theme_file_uri('assets/img/logo/logo.png') ?>" alt=""></a>
                            </div>
                        </div>
                        <div class="col-xl-10 col-lg-10 col-md-10">
                            <div class="menu-main d-flex align-items-center justify-content-end">
                                <!-- Main-menu -->
                                <div class="main-menu f-right d-none d-lg-block">
                                    <nav>
                                        <ul id="navigation">
                                            <li <?php echo ($_SERVER['REQUEST_URI'] == '/') ? 'class="active"' : ''; ?>>
                                                <a  href="<?php echo site_url('/') ?>">Home</a>
                                            </li>
                                            <li <?php echo ($_SERVER['REQUEST_URI'] == '/uber-uns/') ? 'class="active"' : ''; ?> > <a href="<?php echo site_url('/uber-uns') ?>" >Über Uns</a></li>
                                            <li <?php echo ($_SERVER['REQUEST_URI'] == '/dienstleistungen/') ? 'class="active"' : ''; ?> > <a href="<?php echo site_url('/dienstleistungen') ?>" >Dienstleistungen</a></li>
                                            <li <?php echo ($_SERVER['REQUEST_URI'] == '/portfolio-gallery/') ? 'class="active"' : ''; ?> > <a href="<?php echo site_url('/portfolio-gallery') ?>" >Portfolio & Gallery</a></li>
                                            <!-- <li><a href="blog.html">Blog</a>
                                                <ul class="submenu">
                                                    <li><a href="blog.html">Blog</a></li>
                                                    <li><a href="blog_details.html">Blog Details</a></li>
                                                    <li><a href="elements.html">Element</a></li>
                                                </ul>
                                            </li> -->
                                            <li <?php echo ($_SERVER['REQUEST_URI'] == '/kontakt/') ? 'class="active"' : ''; ?> > <a href="<?php echo site_url('/kontakt') ?>" >Kontakt</a></li>
                                        </ul>
                                    </nav>
                                </div>
                                <div class="header-right-btn f-right d-none d-lg-block ml-30">
                                    <a href="from.html" class="btn header-btn">became a member</a>
                                </div>
                            </div>
                        </div>   
                        <!-- Mobile Menu -->
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header End -->
    </header>