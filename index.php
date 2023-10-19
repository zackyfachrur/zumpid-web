<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Site Metas -->
    <meta name="keywords" content="Web Developer, Front-End Developer, zumpid, zumpy.rozistudio.com" />
    <meta name="description" content="Web Developer, Front-End Developer, Web Design, zumpid" />
    <meta name="author" content="Zumpid" />
    <title> Zumpid | Web Developer </title>
    <!-- logo web -->
    <link href="assets/imgs/title-logo.png" rel="icon">
    <!-- font icons -->
    <link rel="stylesheet" href="assets/vendors/themify-icons/css/themify-icons.css">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css">
    <!-- Aos -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

</head>


<body oncontextmenu="return false;" data-spy="scroll" data-target=".navbar" data-offset="40" id="home">

    <!-- Page Navbar -->
    <nav class="custom-navbar" data-spy="affix" data-offset-top="20">
        <div class="container">
            <a class="logo" href="#"><?php echo "Zumpid" ?></a>
            <ul class="nav">
                <li class="item" style="transition: ease-in-out 0.1s;">
                    <a class="link" href="#home"><?= "Home" ?></a>
                </li>
                <li class="item" style="transition: ease-in-out 0.2s;">
                    <a class="link" href="#about"><?= "About Us" ?></a>
                </li>
                <li class="item" style="transition: ease-in-out 0.3s;">
                    <a class="link" href="#service"><?= "Our Service" ?></a>
                </li>
                <li class="item" style="transition: ease-in-out 0.4s;">
                    <a class="link" href="#portfolio"><?= "Portfolio"  ?></a>
                </li>
                <li class="item" style="transition: ease-in-out 0.6s;">
                    <a class="link" href="#message"><?= "Email Us" ?></a>
                </li>
            </ul>
            <a href="javascript:void(0)" id="nav-toggle" class="hamburger hamburger--elastic">
                <div class="hamburger-box">
                    <div class="hamburger-inner"></div>
                </div>
            </a>
        </div>
    </nav><!-- End of Page Navbar -->

    <!-- page header -->
    <header id="home" class="header">
        <div class="overlay"></div>
        <div class="header-content container">
            <h1 class="header-title">
                <span class="up" data-aos="fade-left"> <?php echo "Hello I Am" ?> </span>
                <span class="down" data-aos="fade-right"><?php echo "Zumpid" ?></span>
            </h1>
            <p class="header-subtitle" data-aos="fade-left"><?php echo "Website Development Services" ?></p>

            <button class="btn btn-primary" style="font-family: 'Baloo Paaji', cursive;" data-aos="fade-right">
            <a href="https://wa.me/6287703577988?text=Hello Zumpid" target="_blank"><?php echo "Contact Us" ?></a></button>
        </div>
    </header><!-- end of page header -->

    <!-- about section -->
    <section class="section pt-0" id="about">
        <!-- container -->
        <div class="container text-center">
            <!-- about wrapper -->
            <div class="about">
                <div class="about-img-holder">
                    <img src="assets/imgs/motor.jpg" class="about-img" alt="" data-aos="fade-right">
                </div>
                <div class="about-caption">
                    <p class="section-subtitle" data-aos="fade-left"><?php echo "About Us"  ?></p>
                    <h2 class="section-title mb-3" data-aos="fade-left"><?php echo "Front-End Developer" ?> </h2>
                    <h6 class="subtitle" style="font-family: 'Aldrich', sans-serif; color: #424242;" data-aos="fade-left">
                    <?php echo "Developing new user-facing features, determining the structure and design of web pages,
                        building
                        reusable codes and optimizing page loading times" ?>
                    </h6>
                    <!-- <button class="btn-rounded btn btn-outline-primary mt-4">Download CV</button> -->
                </div>
            </div><!-- end of about wrapper -->
        </div><!-- end of container -->
    </section> <!-- end of about section -->

    <!-- service section -->
    <section class="section" id="service">
        <div class="container text-center">
            <p class="section-subtitle" data-aos="flip-down"><?php echo  "There are 2 types of " ?></p>
            <h6 class="section-title mb-6" data-aos="flip-down"><?php echo  "Service" ?></h6>
            <!-- row -->
            <div class="row">
                <div class="col-md-6 col-lg-6">
                    <div class="service-card" data-aos="fade-right">
                        <div class="body">
                            <img src="assets/imgs/toolbox.svg" alt="" class="icon">
                            <h6 class="title"><?php echo  "Web Development" ?> </h6>
                            <h6 class="subtitle" style="font-family: 'Aldrich', sans-serif; color: #424242;">
                            <?php echo  "Helps to create a user-friendly design interface, optimizing page loading times and
                                SEO-friendly website." ?></h6>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6">
                    <div class="service-card" data-aos="fade-left">
                        <div class="body">
                            <img src="assets/imgs/analytics.svg" alt="" class="icon">
                            <h6 class="title"><?php echo  "Web Design" ?> </h6>
                            <h6 class="subtitle" style="font-family: 'Aldrich', sans-serif; color: #424242;"><?php echo "Good
                                navigation, concise and effective pages, working links and most importantly, good
                                grammar and spelling." ?></h6>
                        </div>
                    </div>
                </div>
            </div><!-- end of row -->
        </div>
    </section><!-- end of service section -->

    <!-- portfolio section -->
    <section class="section" id="portfolio">
        <div class="container text-center">
            <p class="section-subtitle" data-aos="flip-down"><?php echo  "Click Images For Preview" ?></p>
            <h6 class="section-title mb-6" data-aos="flip-down"><?php echo  "Portfolio" ?></h6>


            <div class="container swiper">
                <div class="content" data-aos="flip-down">
                    <div class="cards-wrapper swiper-wrapper">
                        <div class="card two swiper-slide" style="border: none">
                            <a href="#" class="portfolio-card">
                                <img src="assets/imgs/foward.png" class="portfolio-card-img" alt="">
                                <span class="portfolio-card-overlay">
                                    <h5 class="portfolio-card-caption">
                                    <?php echo "Slide this" ?>
                                    </h5>
                                </span>
                            </a>
                        </div>
                        <div class="card two swiper-slide" style="border: none">
                            <a href="https://bliwayandaihatsu.com/" target="_blank" class="portfolio-card">
                                <img src="assets/imgs/testimonials/port1.png" class="portfolio-card-img" alt="">
                                <span class="portfolio-card-overlay">
                                    <h5 class="portfolio-card-caption">
                                    <?php echo "Sales Daihatsu" ?>
                                    </h5>
                                </span>
                            </a>
                        </div>
                        <div class="card two swiper-slide" style="border: none">
                            <a href="https://zahsey.github.io/" target="_blank" class="portfolio-card">
                                <img src="assets/imgs/testimonials/port3.png" class="portfolio-card-img" alt="">
                                <span class="portfolio-card-overlay">
                                    <h5 class="portfolio-card-caption">
                                    <?php echo  "Portfolio Website" ?>
                                    </h5>
                                </span>
                            </a>
                        </div>
                        <div class="card two swiper-slide" style="border: none">
                            <a href="https://zahsey.github.io/berserk.github.io/" target="_blank" class="portfolio-card">
                                <img src="assets/imgs/testimonials/port2.png" class="portfolio-card-img" alt="">
                                <span class="portfolio-card-overlay">
                                    <h5 class="portfolio-card-caption">
                                    <?php echo  "Personal Website" ?>
                                    </h5>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="swiper-pagination" style="--swiper-theme-color: #3B2650;">
                </div>
            </div>
    </section> <!-- end of portfolio section -->

    <!-- section -->
    <section class="section-sm" id="contact">
        <!-- container -->
        <div class="container text-center text-sm-left">
            <!-- row -->
            <div class="row align-items-center">
                <div class="col-sm offset-md-2 mb-4 mb-md-0">
                    <h6 class="title" data-aos="fade-right"><?php echo "Free Concultation" ?></h6>
                    <p class="contact-subtitle" style="font-family: 'Aldrich', sans-serif;" data-aos="fade-right">
                    <?php echo "Our Web Design" ?></p>
                </div>
                <div class="col-sm offset-sm-2 offset-md-3">
                    <button class="btn my-font btn-primary" data-aos="fade-left"> <a href="https://wa.me/6287703577988?text=Hello Zumpid" target="_blank">
                    <?php echo "Message" ?> </a> </button>
                </div>
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </section> <!-- end of section -->

    <!-- blog section -->
    <section class="section">
        <!-- container -->
        <div class="container text-center">
            <p class="section-subtitle" data-aos="flip-down"><?php echo  "Recent Posts?" ?></p>
            <h6 class="section-title mb-6" data-aos="flip-down"><?php echo "Blog" ?></h6>

            <!-- blog-wrapper -->
            <div class="blog-card" data-aos="fade-left">
                <div class="blog-card-header">
                    <img src="assets/imgs/testimonials/1concept.jpg" class="blog-card-img" alt="">
                </div>
                <div class="blog-card-body">
                    <h5 class="blog-card-title"><?php echo "Independence Theme" ?></h6>

                        <p class="blog-card-caption">
                            <a href="https://www.instagram.com/zumpid/" target="_blank"><?php echo "By: @zumpid" ?></a>
                            <a href="https://www.instagram.com/p/CwC3oW5v_vL/?igshid=MzRlODBiNWFlZA==" target="_blank"><i class="ti-heart text-danger"></i><?php echo  "11" ?> </a>
                            <a href="https://www.instagram.com/zumpid/" target="_blank"><i class="ti-instagram"></i>
                            <?php echo  "Follow Us" ?> </a>
                        </p>
                        <a href="https://www.instagram.com/p/CwC3oW5v_vL/?igshid=MzRlODBiNWFlZA==" target="_blank" style="font-family: 'Baloo Paaji', cursive;" class="blog-card-link">
                        <?php echo "Read more" ?> <i class="ti-sharethis"></i></a>
                </div>
            </div><!-- end of blog wrapper -->

            <!-- blog-wrapper -->
            <div class="blog-card" data-aos="fade-right">
                <div class="blog-card-header">
                    <img src="assets/imgs/testimonials/2concept.jpg" class="blog-card-img" alt="">
                </div>
                <div class="blog-card-body">
                    <h5 class="blog-card-title"><?php echo "Custom Bootstrap" ?> </h6>

                        <p class="blog-card-caption">
                            <a href="https://www.instagram.com/zumpid/" target="_blank"><?php echo "By: @zumpid" ?></a>
                            <a href="https://www.instagram.com/p/CvfggAwPIMv/?igshid=MzRlODBiNWFlZA==" target="_blank"><i class="ti-heart text-danger"></i> <?php echo "10" ?> </a>
                            <a href="https://www.instagram.com/zumpid/" target="_blank"><i class="ti-instagram"></i>
                            <?php echo "Follow Us" ?> </a>
                        </p>
                        <a href="https://www.instagram.com/p/CvfggAwPIMv/?utm_source=ig_web_copy_link&igshid=MzRlODBiNWFlZA==" target="_blank" style="font-family: 'Baloo Paaji', cursive;" class="blog-card-link">
                        <?php echo "Read more"?> <i class="ti-sharethis"></i></a>
                </div>
            </div><!-- end of blog wrapper -->

        </div><!-- end of container -->
    </section><!-- end of blog section -->

    <!-- contact section -->
    <section class="section" id="message">
        <div class="container text-center" style="font-family: 'Aldrich', sans-serif;">
            <p class="section-subtitle" data-aos="flip-down"> <b><?php echo  "Our Email" ?></b> <?php echo ": mochzackyaja@gmail.com" ?></p>
            <h6 class="section-title mb-5" data-aos="flip-down"> <?php echo "Give me a question" ?></h6>
            <!-- contact form -->
            <form method="POST" action="send.php" class="contact-form col-md-10 col-lg-8 m-auto">
                <div class="form-row">
                    <div class="form-group col-sm-6" data-aos="flip-down">
                        <input type="text" name="name" size="50" class="form-control" placeholder="Your Name" required>
                    </div>
                    <div class="form-group col-sm-6" data-aos="flip-down">
                        <input type="email" name="email" class="form-control" placeholder="Please Type Our Email" requried>
                    </div>
                    <div class="form-group col-sm-12" data-aos="flip-down">
                        <input type="subject" name="subject" class="form-control" placeholder="Your Email" requried>
                    </div>
                    <div class="form-group col-sm-12" data-aos="flip-down">
                        <textarea name="comment" rows="2" class="form-control" placeholder="Type your messages"></textarea>
                    </div>
                    <div class="form-group col-sm-12 mt-4" data-aos="flip-down">
                        <input style="font-family: 'Baloo Paaji', cursive;" type="submit" name="submits" value="Send Message" class="btn btn-primary">
                    </div>
                </div>
            </form><!-- end of contact form -->
        </div><!-- end of container -->
    </section><!-- end of contact section -->



    <!-- footer -->
    <div class="container">
        <footer class="footer">
            <p class="mb-0 text-left"><?php echo "Copyright" ?>
                <script>
                    document.write(new Date().getFullYear())
                </script> &copy; <a href="http://www.zumpy.rozistudio.com"><?php echo "Zump.id" ?></a>
            </p>
            <div class="social-links text-right m-auto ml-sm-auto">
                <a href="#" class="link" target="_blank"><i class="ti-shopping-cart-full"></i></a>
                <a href="https://www.instagram.com/zumpid/" class="link" target="_blank"><i class="ti-instagram"></i></a>
                <a href="#" class="link" target="_blank"><i class="ti-thought"></i></a>

            </div>
        </footer>
    </div> <!-- end of page footer -->

    <canvas></canvas>

    <!-- Preloader -->
    <div class="preloader">
        <!-- Add your loading animation or image here -->
        <div class="spinner"></div>
    </div>
    </div>

    <!-- preloader -->
    <script>
        window.addEventListener('load', function() {
            // Get the preloader element
            const preloader = document.querySelector('.preloader');
            // Get the content element
            const content = document.querySelector('.content');

            // Hide the preloader and show the content
            preloader.style.display = 'none';
            content.classList.remove('hidden');
            AOS.init();
        });

        
    </script>

    <!-- core  -->
    <script src="assets/vendors/jquery/jquery-3.4.1.js"></script>
    <script src="assets/vendors/bootstrap/bootstrap.bundle.js"></script>

    <!-- Ajax -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Swiper Javascript -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>

    <!-- bootstrap 3 affix -->
    <script src="assets/vendors/bootstrap/bootstrap.affix.js"></script>

    <!-- Zump js -->
    <script src="assets/js/zump.js"></script>

    <!-- Aos -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
</body>

</html>