<!doctype html>
<html lang="zxx">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>shotgear</title>
    <link rel="icon" href="img/favicon.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- animate CSS -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="css/all.css">
    <!-- flaticon CSS -->
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/themify-icons.css">
    <link rel="stylesheet" href="css/swiper.min.css">
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="css/magnific-popup.css">
    <!-- swiper CSS -->
    <link rel="stylesheet" href="css/slick.css">
    <!-- style CSS -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <!--::header part start::-->
    <header class="main_menu home_menu">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <a class="navbar-brand" href="index.blade.php"> <img src="img/logo.png" alt="logo"> </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="menu_icon"><i class="fas fa-bars"></i></span>
                        </button>

                        <div class="collapse navbar-collapse main-menu-item" id="navbarSupportedContent">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link" href="index.blade.php">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="about.blade.php">about</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="services.blade.php">services</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="" id="navbarDropdownpro" role="button"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        portfolio
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdownpro">
                                        <a class="dropdown-item" href="portfolio.blade.php">portfolio</a>
                                        <a class="dropdown-item" href="portfolio_details.blade.php">portfolio details</a>
                                    </div>
                                </li>

                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="blog.blade.php" id="navbarDropdown"
                                        role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Blog
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="blog.blade.php"> blog</a>
                                        <a class="dropdown-item" href="single-blog.blade.php">Single blog</a>
                                    </div>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="blog.blade.php" id="navbarDropdown1"
                                        role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        pages
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown1">
                                        <a class="dropdown-item" href="elements.blade.php">Elements</a>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="contact.blade.php">contact</a>
                                </li>
                            </ul>
                        </div>
                        <div class="dropdown cart">
                            <a class="dropdown-toggle" href="#" id="navbarDropdown3" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="flaticon-bag"></i>
                            </a>
                            <!-- <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <div class="single_product">
        
                                        </div>
                                    </div> -->
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- Header part end-->

    <!-- breadcrumb start-->
    <section class="breadcrumb breadcrumb_bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb_iner text-center">
                        <div class="breadcrumb_iner_item">
                            <h2>projects</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb start-->

    <!-- gallery_part part start-->
    <section class="gallery_part section_padding">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-5 offset-lg-2">
                    <div class="section_tittle">
                        <p>recent project</p>
                        <h2>Check latest work</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="portfolio-filter filters">
                        <ul>
                            <li data-filter="all">All photos</li>
                            <li data-filter="1">weeding</li>
                            <li data-filter="2">fashion</li>
                            <li data-filter="3">portrait</li>
                            <li data-filter="4">magazine</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="gallery_part_item filtr-container">
                        <a href="portfolio_details.blade.php" class="img-gal filtr-item" data-category="1"
                            style="background-image: url('img/gallery/gallery_item_1.png')">
                            <div class="single_gallery_item">
                                <div class="single_gallery_item_iner">
                                    <div class="gallery_item_text">
                                        <p>Fashion photography</p>
                                        <h4>Smiling beutiful women</h4>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="portfolio_details.blade.php" class="img-gal width-1 filtr-item" data-category="2"
                            style="background-image: url('img/gallery/gallery_item_2.png')">
                            <div class="single_gallery_item">
                                <div class="single_gallery_item_iner">
                                    <div class="gallery_item_text">
                                        <p>Fashion photography</p>
                                        <h4>Smiling beutiful women</h4>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="portfolio_details.blade.php" class="img-gal width-2 filtr-item" data-category="3"
                            style="background-image: url('img/gallery/gallery_item_3.png')">
                            <div class="single_gallery_item">
                                <div class="single_gallery_item_iner">
                                    <div class="gallery_item_text">
                                        <p>Fashion photography</p>
                                        <h4>Smiling beutiful women</h4>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="portfolio_details.blade.php" class="img-gal width-2 filtr-item" data-category="4"
                            style="background-image: url('img/gallery/gallery_item_4.png')">
                            <div class="single_gallery_item">
                                <div class="single_gallery_item_iner">
                                    <div class="gallery_item_text">
                                        <p>Fashion photography</p>
                                        <h4>Smiling beutiful women</h4>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="portfolio_details.blade.php" class="img-gal width-1 filtr-item" data-category="1"
                            style="background-image: url('img/gallery/gallery_item_5.png')">
                            <div class="single_gallery_item">
                                <div class="single_gallery_item_iner">
                                    <div class="gallery_item_text">
                                        <p>Fashion photography</p>
                                        <h4>Smiling beutiful women</h4>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="portfolio_details.blade.php" class="img-gal filtr-item" data-category="2"
                            style="background-image: url('img/gallery/gallery_item_6.png')">
                            <div class="single_gallery_item">
                                <div class="single_gallery_item_iner">
                                    <div class="gallery_item_text">
                                        <p>Fashion photography</p>
                                        <h4>Smiling beutiful women</h4>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- gallery_part part end-->

    <!--::footer_part start::-->
    <footer class="footer-area">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-sm-6 col-md-6 col-lg-3">
                    <div class="single-footer-widget">
                        <h4>Our Service</h4>
                        <ul>
                            <li><a href="#">Car accident</a></li>
                            <li><a href="#">Personal injury</a></li>
                            <li><a href="#">Family law</a></li>
                            <li><a href="#">Bank and financial</a></li>
                            <li><a href="#">Capital market</a></li>
                            <li><a href="#">Employment Law</a></li>
                        </ul>

                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-3">
                    <div class="single-footer-widget footer_icon">
                        <h4>Contact Info</h4>
                        <p>4361 Morningview Lane Artland , Pall Street
                            Latimer, IA 50452 / 23654</p>
                        <ul>
                            <li><a href="#"><i class="ti-mobile"></i>+02 - 32 365 2654</a></li>
                            <li><a href="#"><i class="ti-email"></i>ariclaw@law.com</a></li>
                            <li><a href="#"><i class="ti-world"></i> ariclawyerfirm.com</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-3">
                    <div class="single-footer-widget footer_3">
                        <h4>Instagram</h4>
                        <div class="footer_img">
                            <div class="single_footer_img">
                                <img src="img/footer_img/footer_img_1.png" alt="">
                                <i class="ti-instagram"></i>
                            </div>
                            <div class="single_footer_img">
                                <img src="img/footer_img/footer_img_2.png" alt="">
                                <i class="ti-instagram"></i>
                            </div>
                            <div class="single_footer_img">
                                <img src="img/footer_img/footer_img_3.png" alt="">
                                <i class="ti-instagram"></i>
                            </div>
                            <div class="single_footer_img">
                                <img src="img/footer_img/footer_img_4.png" alt="">
                                <i class="ti-instagram"></i>
                            </div>
                            <div class="single_footer_img">
                                <img src="img/footer_img/footer_img_5.png" alt="">
                                <i class="ti-instagram"></i>
                            </div>
                            <div class="single_footer_img">
                                <img src="img/footer_img/footer_img_6.png" alt="">
                                <i class="ti-instagram"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-3">
                    <div class="single-footer-widget footer_2">
                        <h4>Newsletter</h4>
                        <p>Stay updated with our latest trends see heaven so said place fruit.
                        </p>
                        <div class="form-wrap" id="mc_embed_signup">
                            <form target="_blank"
                                action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
                                method="get" class="form-inline">
                                <input class="form-control" name="EMAIL" placeholder="Your Email Address"
                                    onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your Email Address '"
                                    required="" type="email">
                                <button class="btn btn-default text-uppercase"><i class="ti-angle-right"></i></button>
                                <div style="position: absolute; left: -5000px;">
                                    <input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value=""
                                        type="text">
                                </div>

                                <div class="info"></div>
                            </form>
                        </div>
                        <div class="social_icon">
                            <a href="#"> <i class="ti-facebook"></i> </a>
                            <a href="#"> <i class="ti-twitter-alt"></i> </a>
                            <a href="#"> <i class="ti-instagram"></i> </a>
                            <a href="#"> <i class="ti-skype"></i> </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="copyright_part_text text-center">
                        <p class="footer-text m-0"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="ti-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--::footer_part end::-->

    <!-- jquery plugins here-->
    <script src="js/jquery-1.12.1.min.js"></script>
    <!-- popper js -->
    <script src="js/popper.min.js"></script>
    <!-- bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- easing js -->
    <script src="js/jquery.magnific-popup.js"></script>
    <!-- swiper js -->
    <script src="js/swiper.min.js"></script>
    <!-- swiper js -->
    <script src="js/jquery.filterizr.min.js"></script>
    <!-- particles js -->
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <!-- slick js -->
    <script src="js/slick.min.js"></script>
    <script src="js/swiper.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/contact.js"></script>
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/jquery.form.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/mail-script.js"></script>
    <!-- custom js -->
    <script src="js/custom.js"></script>
</body>

</html>