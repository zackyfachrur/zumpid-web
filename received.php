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

</head>
<body>
    
    <section class="section pt-0" id="about">
        <!-- container -->
        <div class="container text-center">
            <!-- about wrapper -->
            <div class="about">
                <div class="about-img-holder">
                    <img src="assets/imgs/success_image.jpg" class="about-img" alt="">
                </div>
                <div class="about-caption">
                    <p class="section-subtitle">Thank you for submitting! </p>
                    <h2 class="section-title mb-3">Message Has Been Sent </h2>
                    <!-- <button class="btn-rounded btn btn-outline-primary mt-4">Download CV</button> -->
                </div>
            </div><!-- end of about wrapper -->
        </div><!-- end of container -->
    </section> <!-- end of about section -->


    <!-- Preloader -->
    <div class="preloader">
        <!-- Add your loading animation or image here -->
        <div class="spinner"></div>
    </div>

    <script>
        // Wait for the entire page to load
        window.addEventListener('load', function () {
            // Get the preloader element
            const preloader = document.querySelector('.preloader');
            // Get the content element
            const content = document.querySelector('.content');

            // Hide the preloader and show the content
            preloader.style.display = 'none';
            content.classList.remove('hidden');
        });
    </script>
    
    <!-- core  -->
    <script src="assets/vendors/jquery/jquery-3.4.1.js"></script>
    <script src="assets/vendors/bootstrap/bootstrap.bundle.js"></script>

    <!-- Swiper Javascript -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>

    <!-- bootstrap 3 affix -->
    <script src="assets/vendors/bootstrap/bootstrap.affix.js"></script>

    <!-- Zump js -->
    <script src="assets/js/zump.js"></script>

</body>
</html>