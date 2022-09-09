<?php get_header() ?>

    <!-- BODY -->
    <body id="body" data-spy="scroll" data-target=".header">

        <!--========== HEADER ==========-->
        <header class="header navbar-fixed-top">
            <!-- Navbar -->
            <nav class="navbar" role="navigation">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="menu-container js_nav-item">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".nav-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="toggle-icon"></span>
                        </button>

                        <!-- Logo -->
                        <div class="logo">
                            <a class="logo-wrap" href="<?php echo home_url() ?>">
                                <img class="logo-img" src="<?php bloginfo('template_directory'); ?>/img/logo.png" alt="shuhrat.uz">
                            </a>
                        </div>
                        <!-- End Logo -->
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse nav-collapse">
                        <div class="menu-container">
                            <ul class="nav navbar-nav navbar-nav-right">
                                <li class="js_nav-item nav-item"><a class="nav-item-child nav-item-hover" href="#body">Home</a></li>
                                <li class="js_nav-item nav-item"><a class="nav-item-child nav-item-hover" href="#about">About</a></li>
                                <li class="js_nav-item nav-item"><a class="nav-item-child nav-item-hover" href="#experience">Work</a></li>
                                <li class="js_nav-item nav-item"><a class="nav-item-child nav-item-hover" href="#contact">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- End Navbar Collapse -->
                </div>
            </nav>
            <!-- Navbar -->
        </header>
        <!--========== END HEADER ==========-->

        <!--========== SLIDER ==========-->
        <div class="promo-block">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 sm-margin-b-60">
                        <div class="margin-b-30">
                            <h1 class="promo-block-title text-muted">Shuhrat <br/> Xodjakov</h1>
                            <p class="promo-block-text">Web Developer</p>
                            <ul class="list-inline">
                            <li><a href="https://github.com/edisods" class="social-icons"><i class="icon-social-github"></i></a></li>
                            
                            <li><a href="https://t.me/shuhratweb" class="social-icons"><i class="icon-paper-plane"></i></a></li>
                            <li><a href="tel:+99893 637 08 03"><i class="icon-phone"></i></a></li>
                            <li><a href="https://mail.google.com/" class="social-icons"><i class="icon-social-google"></i></a></li>
                        </ul>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="promo-block-img-wrap">
                            <img class="promo-block-img img-responsive" src="<?php bloginfo('template_directory'); ?>/img/mockup/avatar-01.png" align="Avatar">
                        </div>
                    </div>
                </div>
                <!--// end row -->
            </div>
        </div>
        <!--========== SLIDER ==========-->

        <!--========== PAGE LAYOUT ==========-->
        <!-- About -->
        <div id="about">
            <div class="container content-lg">
                <div class="row">
                    <div class="col-sm-3 sm-margin-b-10">
                        <img class="full-width img-responsive" src="<?php bloginfo('template_directory'); ?>/img/500x700/01.jpg" alt="Image">
                    </div>
                    <div class="col-sm-9">
                        <div class="section-seperator margin-b-50">
                            <div class="margin-b-50">
                                <div class="margin-b-30">
                                    <h2>About Me</h2>
                                    <p>My name is Shuhrat. I was born in Termiz. I am interested in programming and IT. At first I made some interesting pages in HTML and CSS. Later I learned PHP programming language and started creating themes for WordPress CMS. Currently, I am continuing to learn PHP, Laravel, Vue JS and I am increasing my experience by creating interesting projects and themes.<br><br>

                                    To date, I have commissioned several organizations and individuals to create sites of varying looks and capabilities. My goal is to create programs, sites, plugins, and services that people need using programming languages, and to place them in online stores and sell them.<br><br>

                                    I'm also a Junior! I want to become a fullstack developer. Please contact me if you are interested in the programming languages ​​I am learning and my projects. I look forward to your cooperation, suggestions and ideas.</p>
                                </div>
                                <a href="<?php bloginfo('template_directory'); ?>/img/500x700/file.pdf" class="btn-theme btn-theme-md btn-default-bg text-uppercase">Download my CV</a>
                            </div>
                        </div>

                        <h2>My Skills</h2>
                        <!-- Progress Box -->
                        <div class="progress-box">
                            <h5>HTML <span class="color-heading pull-right">87%</span></h5>
                            <div class="progress">
                                <div class="progress-bar bg-color-base" role="progressbar" data-width="87"></div>
                            </div>
                        </div>
                        <div class="progress-box">
                            <h5>CSS <span class="color-heading pull-right">71%</span></h5>
                            <div class="progress">
                                <div class="progress-bar bg-color-base" role="progressbar" data-width="71"></div>
                            </div>
                        </div>
                        <div class="progress-box">
                            <h5>JavaScript <span class="color-heading pull-right">73%</span></h5>
                            <div class="progress">
                                <div class="progress-bar bg-color-base" role="progressbar" data-width="73"></div>
                            </div>
                        </div>
                        <div class="progress-box">
                            <h5>PHP <span class="color-heading pull-right">55%</span></h5>
                            <div class="progress">
                                <div class="progress-bar bg-color-base" role="progressbar" data-width="50"></div>
                            </div>
                        </div>
                        <div class="progress-box">
                            <h5>Laravel <span class="color-heading pull-right">40%</span></h5>
                            <div class="progress">
                                <div class="progress-bar bg-color-base" role="progressbar" data-width="40"></div>
                            </div>
                        </div>
                        <div class="progress-box">
                            <h5>Wordpress <span class="color-heading pull-right">70%</span></h5>
                            <div class="progress">
                                <div class="progress-bar bg-color-base" role="progressbar" data-width="70"></div>
                            </div>
                        </div>
                        
                        <div class="progress-box">
                            <h5>OOP <span class="color-heading pull-right">55%</span></h5>
                            <div class="progress">
                                <div class="progress-bar bg-color-base" role="progressbar" data-width="55"></div>
                            </div>
                        </div>
                        <div class="progress-box">
                            <h5>Vue JS <span class="color-heading pull-right">30%</span></h5>
                            <div class="progress">
                                <div class="progress-bar bg-color-base" role="progressbar" data-width="30"></div>
                            </div>
                        </div>
                        <div class="progress-box">
                            <h5>Adobe Photoshop <span class="color-heading pull-right">50%</span></h5>
                            <div class="progress">
                                <div class="progress-bar bg-color-base" role="progressbar" data-width="50"></div>
                            </div>
                        </div>
                        <!-- End Progress Box -->
                    </div>
                </div>
                <!--// end row -->
            </div>
        </div>

        </div>
        <!-- Experience -->
        <div id="experience">

            <div class="bg-color-sky-light" data-auto-height="true">
                <div class="container content-lg">
                    <div class="row margin-b-40">
                    <div class="col-sm-6">
                        <h2>My Latest Products</h2>
                        <hr>
                    </div>
                </div>
                    <div class="row row-space-2 margin-b-4">
                        <div class="col-md-3 col-sm-6 md-margin-b-4">
                            <div class="service" data-height="height">
                                <div class="service-element">
                                    <i class="service-icon icon-globe"></i>
                                </div>
                                <div class="service-info">
                                    <h3>SportMed.uz</h3>
                                    <a href="https://www.sportmed.uz"><p class="margin-b-5">Live preview</p></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 md-margin-b-4">
                            <div class="service" data-height="height">
                                <div class="service-element">
                                    <i class="service-icon icon-globe"></i>
                                </div>
                                <div class="service-info">
                                    <h3>GlobalHalal.uz</h3>
                                    <a href="https://www.globalhalal.uz"><p class="margin-b-5">Live preview</p></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 md-margin-b-4">
                            <div class="service" data-height="height">
                                <div class="service-element">
                                    <i class="service-icon icon-globe"></i>
                                </div>
                                <div class="service-info">
                                    <h3>Kochmas-Mulk.uz</h3>
                                    <a href="https://www.kochmas-mulk.uz"><p class="margin-b-5">Live preview</p></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 md-margin-b-4">
                            <div class="service" data-height="height">
                                <div class="service-element">
                                    <i class="service-icon icon-globe"></i>
                                </div>
                                <div class="service-info">
                                    <h3>100k.uz</h3>
                                    <a href="https://www.100k.uz"><p class="margin-b-5">Live preview</p></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--// end row -->
                    <div class="row row-space-2 margin-b-4">
                        <div class="col-md-3 col-sm-6 md-margin-b-4">
                            <div class="service" data-height="height">
                                <div class="service-element">
                                    <i class="service-icon icon-globe"></i>
                                </div>
                                <div class="service-info">
                                    <h3>BadWords Plugin</h3>
                                    <a href="https://github.com/edisods/BadWords-WP-plugin"><p class="margin-b-5">Link to Github</p></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 md-margin-b-4">
                            <div class="service" data-height="height">
                                <div class="service-element">
                                    <i class="service-icon icon-globe"></i>
                                </div>
                                <div class="service-info">
                                    <h3>SportMed.uz</h3>
                                    <a href="https://www.sportmed.uz"><p class="margin-b-5">Live preview</p></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 md-margin-b-4">
                            <div class="service" data-height="height">
                                <div class="service-element">
                                    <i class="service-icon icon-globe"></i>
                                </div>
                                <div class="service-info">
                                    <h3>SportMed.uz</h3>
                                    <a href="https://www.sportmed.uz"><p class="margin-b-5">Live preview</p></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 md-margin-b-4">
                            <div class="service" data-height="height">
                                <div class="service-element">
                                    <i class="service-icon icon-globe"></i>
                                </div>
                                <div class="service-info">
                                    <h3>SportMed.uz</h3>
                                    <a href="https://www.sportmed.uz"><p class="margin-b-5">Live preview</p></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--// end row -->
                </div>
            </div>
        </div>

        <div id="contact">
            <div class="bg-color-sky-light">
                <div class="container content-lg">
                    <div class="row margin-b-40">
                        <div class="col-sm-6">
                           <h2>Contact Me</h2>
                           <hr>
                        </div>
                    </div>
                    <!--// end row -->

                    <div class="row">
                        <div class="col-md-3 col-xs-6 md-margin-b-30">
                            <h4>My Location</h4>
                            <a href="#">Uzbekistan, Tashkent city</a>
                        </div>
                        <div class="col-md-3 col-xs-6 md-margin-b-30">
                            <h4>Phone</h4>
                            <a href="#">+99893 637-08-03</a>
                        </div>
                        <div class="col-md-3 col-xs-6">
                            <h4>Email</h4>
                            <a href="#">shuhrat92hod@gmail.com</a>
                        </div>
                        <div class="col-md-3 col-xs-6">
                            <h4>Messenger</h4>
                            <a href="https://t.me/shuhratweb">Telegram </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

<?php get_footer() ?>