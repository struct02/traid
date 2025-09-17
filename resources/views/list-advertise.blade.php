
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
    <title>Adveritse Business</title>
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
            <img src="images/logo/logo-dark2.png" alt="">
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
     
    <div class="header fixed-top">
        <div class="left">
            <a href="javascript:void(0);" class="icon back-btn">
                <svg width="8" height="14" viewBox="0 0 8 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M6.88986 12.2951L1.60986 7.00008L6.88986 1.70508" stroke="#121927" stroke-width="1.5"
                        stroke-linecap="round" stroke-linejoin="round" />
                </svg>
            </a>
        </div>
        <h3>My Ads</h3>
    </div>

    <div class="mt-24">
                
                <div class="tf-container">
                    <div class="fl-title d-flex justify-content-between align-items-center">
                    <h4>My Ads</h4>
                    <a href="#" class="button-1">See All</a>
                </div>
                <div class="mt-20 list-jobs">
                   
 @foreach ($businessAdvertise as $post)
                     <div class="job-item">
                        <a href="#" class="logo"><img src="images/logo/smp.png" width="100px" alt=""></a>
                        <div class="content">
                            <div class="info">
                                <h5><a href="#">{{$post->busname}}</a></h5>
                                <ul class="list-info">
                                    <li class="item">
                                        <i class="icon icon-company"></i>
                                        <span class="body-4">{{$post->bustype}}</span>
                                    </li>
                                    <li class="dot"></li>
                                    <li class="item">
                                        <i class="icon icon-map"></i>
                                        <span class="body-4">Tema</span>
                                    </li>
                                </ul>
                            </div>
                            <span class="more">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <g opacity="0.6">
                                        <path
                                            d="M12 3.75C12.6858 3.75 13.25 4.31421 13.25 5C13.25 5.68579 12.6858 6.25 12 6.25C11.3142 6.25 10.75 5.68579 10.75 5C10.75 4.31421 11.3142 3.75 12 3.75Z"
                                            fill="#121927" stroke="#121927" stroke-width="1.5" />
                                        <path
                                            d="M12 17.75C12.6858 17.75 13.25 18.3142 13.25 19C13.25 19.6858 12.6858 20.25 12 20.25C11.3142 20.25 10.75 19.6858 10.75 19C10.75 18.3142 11.3142 17.75 12 17.75Z"
                                            fill="#121927" stroke="#121927" stroke-width="1.5" />
                                        <path
                                            d="M12 10.75C12.6858 10.75 13.25 11.3142 13.25 12C13.25 12.6858 12.6858 13.25 12 13.25C11.3142 13.25 10.75 12.6858 10.75 12C10.75 11.3142 11.3142 10.75 12 10.75Z"
                                            fill="#121927" stroke="#121927" stroke-width="1.5" />
                                    </g>
                                </svg>
                            </span>
                        </div>
                    </div>

                    @endforeach
                      
                     
                
                
                </div>
            </div>
            </div>


   



    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/lazysize.min.js"></script>
    <script type="text/javascript" src="js/jquery.nice-select.min.js"></script>
    <script type="text/javascript" src="js/main.js"></script>

</body>

</html>