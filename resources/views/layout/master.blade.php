<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- favicon -->
    <link rel="icon" sizes="16x16" href="assets/img/favicon.png">

    <!-- Title -->
    <title> NoonPost. - Personal Blog Template </title>
    
    <!-- Font Google -->
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,500,600,700,800,900&amp;display=swap" rel="stylesheet">
    
    <!-- CSS Plugins -->
    <link rel="stylesheet" href="assets/css/all.css">
    <link rel="stylesheet" href="assets/css/elegant-font-icons.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.css">
    
    <!-- main style -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/custom.css">
  </head>
<body>
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container-fluid">
            <!--logo-->
            <div class="logo">
                <a href="index">
                    <img src="assets/img/logo-dark.png" alt="" class="logo-dark">
                    <img src="assets/img/logo-white.png" alt="" class="logo-white">
                </a>
            </div>
            <!--/-->
    
            <!--navbar-collapse-->
            <div class="collapse navbar-collapse" id="main_nav">
                <ul class="navbar-nav ml-auto mr-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="index" data-toggle="dropdown"> Home </a>
                        <ul class="dropdown-menu fade-up">
                            <li>
                                <a class="dropdown-item" href="index">Demo 1</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="index-2">Demo 2 </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="index-3">Demo 3 </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="index-4">Demo 4 </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="index-5">Demo 5</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="index-6">Demo 6 </a>
                            </li>
                        </ul>
                    </li>
    
                    <li class="nav-item dropdown">
                        <a class="nav-link  dropdown-toggle" href="blog-grid" data-toggle="dropdown"> Blog </a>
                        <ul class="dropdown-menu fade-up">
                            <li>
                                <a class="dropdown-item" href="blog-grid"> Blog grid</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="blog-masonry"> Blog masonry </a>
                            </li>
                            <li>
                                <a class="dropdown-item " href="blog-list"> Blog list </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link  dropdown-toggle" href="post-default" data-toggle="dropdown"> Posts Features </a>
                        <ul class="dropdown-menu fade-up">
                            <li>
                                <a class="dropdown-item" href="post-default"> post default</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="post-video"> post video</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="post-audio"> post audio</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="post-gallery"> post gallery</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="post-no-sidebar"> post no sidebar </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="post-left-sidebar"> post left sidebar </a>
                            </li>
                        </ul>
                    </li>
    
                    <li class="nav-item dropdown">
                        <a class="nav-link active dropdown-toggle" href="#" data-toggle="dropdown">Pages </a>
                        <ul class="dropdown-menu fade-up">
                            <li>
                                <a class="dropdown-item" href="about"> About </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="author"> author </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="login"> Login </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="register"> Sign up </a>
                            </li>
                            <li>
                                <a class="dropdown-item active" href="page404"> Page 404 </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact"> Contact </a>
                    </li>
                </ul>
            </div>
            <!--/-->
    
            <!--navbar-right-->
            <div class="navbar-right ml-auto">
                <div class="theme-switch-wrapper">
                    <label class="theme-switch" for="checkbox">
                        <input type="checkbox" id="checkbox" />
                        <div class="slider round"></div>
                    </label>
                </div>
                <div class="social-icones">
                    <ul class="list-inline">
                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                        <li>
                            <a href="#">
                                <i class="fab fa-instagram"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fab fa-twitter"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fab fa-youtube"></i>
                            </a>
                        </li>
                    </ul>
                </div>
    
                <div class="search-icon">
                    <i class="icon_search"></i>
                </div>
    
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main_nav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
        </div>
    </nav>
      @yield('content')
   <!--newslettre-->
   <section class="newslettre">
    <div class="container-fluid">
        <div class="newslettre-width text-center">
            <div class="newslettre-info">
                <h5>Subscribe to our Newslatter</h5>
                <p> Sign up for free and be the first to get notified about new posts. </p>
            </div>
            <form action="#" class="newslettre-form">
                <div class="form-flex">
                    <div class="form-group">
                        <input type="email" class="form-control" placeholder="Your email adress" required="required">
                    </div>
                    <button class="submit-btn" type="submit">Subscribe</button>
                </div>
            </form>
            <div class="social-icones">
                <ul class="list-inline">
                    <li>
                        <a href="#">
                            <i class="fab fa-facebook-f"></i>Facebook</a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fab fa-twitter"></i>Twitter </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fab fa-instagram"></i>Instagram </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fab fa-youtube"></i>Youtube</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!--footer-->
<footer class="footer">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="copyright">
                    <p>?? Copyright 2021 <a href="#">AssiaGroupe</a>, All rights reserved.</p>
                </div>
                <div class="back">
                    <a href="#" class="back-top">
                        <i class="arrow_up"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</footer>

<!--Search-form-->
<div class="search">
    <div class="container-fluid">
        <div class="search-width  text-center">
            <button type="button" class="close">
                <i class="icon_close"></i>
            </button>
            <form class="search-form" action="#">
                <input type="search" value="" placeholder="What are you looking for?">
                <button type="submit" class="search-btn">search</button>
            </form>
        </div>
    </div>
</div>
<!--/-->

<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="assets/js/jquery-3.5.0.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>

<!-- JS Plugins  -->
<script src="assets/js/ajax-contact.js"></script>
<script src="assets/js/owl.carousel.min.js"></script>
<script src="assets/js/switch.js"></script>

<!-- JS main  -->
<script src="assets/js/main.js"></script>


    </body>
</html>
