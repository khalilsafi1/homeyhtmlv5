<!DOCTYPE html>
<html lang="en">
<head>
    <?php include ('inc/head.php'); ?>
</head>
<body>
    <div class="nav-area header-type-1">
        <!-- desktop nav -->
        <header class="header-nav d-none d-lg-block">
            <div class="container">
                <div class="header-inner table-row">
                    <div class="header-comp-logo">
                        <?php include ('inc/header/logo.php'); ?>
                    </div>
                    <div class="header-comp-nav text-start">
                        <?php include ('inc/header/main-nav.php'); ?>
                    </div>
                    <div class="header-comp-right">
                        <?php include ('inc/header/login-register-v1.php'); ?>
                    </div>
                </div>
            </div>
        </header>
        <!-- mobile header -->
        <?php include ('inc/header/header-mobile.php'); ?>

    </div>
    
    <section class="top-banner-wrap" style="height: 800px;">    

        <div class="banner-inner parallax" data-parallax-bg-image="img/image-1440x960.png"></div><!-- banner-inner parallax -->
        
        <div class="banner-caption banner-caption-side-search">
            <div class="side-search-wrap">

                <h1 class="banner-title text-black">Book and Experience Unique Places</h1>
                <p class="banner-subtitle text-black">WordPress Theme For Rentals</p>

                <?php include ('inc/search/side-search-for-banners.php'); ?>
            </div>
        </div><!-- banner-caption -->

    </section><!-- header-parallax -->

    <section class="main-content-area" style="height: 1000px;">
        <!-- Page content goes here  -->
    </section><!-- main-content-area -->

    <?php include ('inc/scripts.php'); ?>
    <?php include ('inc/footer.php'); ?>
</body>
</html>