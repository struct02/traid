<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, viewport-fit=cover">
    <!-- font -->
    <link rel="stylesheet" href="fonts/fonts.css">
    <!-- Icons -->
    <link rel="stylesheet" href="fonts/font-icons.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/nouislider.min.css" />
    <link rel="stylesheet" href="css/swiper-bundle.min.css">
    <link rel="stylesheet" type="text/css" href="css/styles.css" />

    <!-- Favicon and Touch Icons  -->
    <link rel="shortcut icon" href="images/logo/168.png" />
    <link rel="apple-touch-icon-precomposed" href="images/logo/168.png" />
    <title>TRAID | Onboarding</title>
    <!-- Apply dark theme early to avoid white flash -->
    <script>
        if (localStorage.toggled === "dark-theme") {
            document.documentElement.classList.add('dark-theme');
        }
    </script>

</head>

<body>

    <!-- preloade -->
    <div class="preload preload-container">
        {{-- <div class="logo-img">
            <img src="images/logo/logo-light.png" alt="" style="width: auto">
        </div> --}}
        <div class="spinner-circle lg success">
            <span class="spinner-circle1 spinner-child"></span>
            <span class="spinner-circle2 spinner-child"></span>
            <span class="spinner-circle3 spinner-child"></span>
            <span class="spinner-circle4 spinner-child"></span>
            <span class="spinner-circle5 spinner-child"></span>
            <span class="spinner-circle6 spinner-child"></span>
            <span class="spinner-circle7 spinner-child"></span>
            <span class="spinner-circle8 spinner-child"></span>
            <span class="spinner-circle9 spinner-child"></span>
        </div>
    </div>
    <!-- /preload -->

    <section class="boarding-sec">
        <div class="tf-container">
            <div dir="ltr" class="swiper tf-swiper-2" data-space-between="24" data-preview="1" data-tablet="1" data-desktop="1">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="boarding-img">
                            <div class="img">
                                <img src="images/banner/boarding3.png" alt="">
                            </div>
                        </div>
                        <div class="content-boarding text-center">
                            <h1 class="title">Welcome to TRAID</h1>
                            <p class="desc">This platform helps you close <br> the best deals in your business endeavours. </p>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="boarding-img" style="background-color:#f1e2a9">
                            <div class="img">
                                <img src="images/banner/boarding2.png" alt="">
                            </div>
                        </div>
                        <div class="content-boarding text-center">
                            <h1 class="title">Search for jobs <br> anywhere & anytime</h1>
                            <p class="desc">You can search for gigs <br> anywhere and anytime you want.
                            </p>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="boarding-img" style="background-color:#28fe7b">
                            <div class="img">
                                <img src="images/banner/boarding1.png" alt="">
                            </div>
                        </div>
                        <div class="content-boarding text-center">
                            <h1 class="title">Find Jobs Easier <br> and More Effective</h1>
                            <p class="desc">Make your job search experience <br> easier and more effective.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination line-tes"></div>
            </div>
        </div>
        <div class="fixed-button group-btn-boarding">
            <a href="login" class="tf-btn primary">Get Started</a>
        </div>
    </section>

    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/lazysize.min.js"></script>
    <script type="text/javascript" src="js/swiper-bundle.min.js"></script>
    <script type="text/javascript" src="js/carousel.js"></script>
    <script type="text/javascript" src="js/main.js"></script>

</body>

</html>