<!DOCTYPE html>
<html lang="en">

<head>
    <?php include('inc/head.php'); ?>
</head>

<body>

    <h1 style="background-color: #eee; margin: 0; padding: 20px; line-height: 16px; font-size: 16px;">Nav 1 boxed left align</h1>

        
    <div class="nav-area header-type-1">
        <!-- desktop nav -->
        <header class="header-nav d-none d-lg-block">
            <div class="container">
                <div class="header-inner table-row">
                    <div class="header-comp-logo">
                        <?php include('inc/header/logo.php'); ?>
                    </div>
                    <div class="header-comp-nav text-left">
                        <?php include('inc/header/main-nav.php'); ?>
                    </div>
                    <div class="header-comp-right">
                        <?php include('inc/header/login-register-v1.php'); ?>
                    </div>
                </div>
            </div>
        </header>
        <!-- mobile header -->
        <?php include('inc/header/header-mobile.php'); ?>

        <!-- desktop and tablet search -->
        <?php include('inc/search/main-search.php'); ?>
    </div>


    <hr style="margin-top: 200px; margin-bottom: 0; border: none;">
    <h1 style="background-color: #eee; margin: 0; padding: 20px; line-height: 16px; font-size: 16px;">Nav 1 boxed right align</h1>


    <div class="nav-area header-type-1">
        <!-- desktop nav -->
        <header class="header-nav d-none d-lg-block">
            <div class="container">
                <div class="header-inner table-row">
                    <div class="header-comp-logo">
                        <?php include('inc/header/logo.php'); ?>
                    </div>
                    <div class="header-comp-nav text-end">
                        <?php include('inc/header/main-nav.php'); ?>
                    </div>
                    <div class="header-comp-right">
                        <?php include('inc/header/login-register-v1.php'); ?>
                    </div>
                </div>
            </div>
        </header>
        <!-- mobile header -->
        <?php include('inc/header/header-mobile.php'); ?>
    </div>


    <hr style="margin-top: 200px; margin-bottom: 0; border: none;">
    <h1 style="background-color: #eee; margin: 0; padding: 20px; line-height: 16px; font-size: 16px;">Nav 1 boxed left align with social</h1>


    <div class="nav-area header-type-1">
        <!-- desktop nav -->
        <header class="header-nav d-none d-lg-block">
            <div class="container">
                <div class="header-inner table-row">
                    <div class="header-comp-logo">
                        <?php include('inc/header/logo.php'); ?>
                    </div>
                    <div class="header-comp-nav">
                        <?php include('inc/header/main-nav.php'); ?>
                    </div>
                    <div class="header-comp-right">
                        <?php //include('inc/header/social.php'); ?>
                    </div>
                </div>
            </div>
        </header>
        <!-- mobile header -->
        <?php include('inc/header/header-mobile.php'); ?>
    </div>


    <hr style="margin-top: 200px; margin-bottom: 0; border: none;">
    <h1 style="background-color: #eee; margin: 0; padding: 20px; line-height: 16px; font-size: 16px;">Nav 1 boxed left align logged in</h1>


    <div class="nav-area header-type-1">
        <!-- desktop nav -->
        <header class="header-nav d-none d-lg-block">
            <div class="container">
                <div class="header-inner table-row">
                    <div class="header-comp-logo">
                        <?php include('inc/header/logo.php'); ?>
                    </div>
                    <div class="header-comp-nav text-end">
                        <?php include('inc/header/main-nav.php'); ?>
                    </div>
                    <div class="header-comp-right">
                        <?php include('inc/header/account.php'); ?>
                    </div>
                </div>
            </div>
        </header>
        <!-- mobile header -->
        <?php include('inc/header/header-mobile.php'); ?>
    </div>

    <hr style="margin-top: 200px; margin-bottom: 0; border: none;">
    <h1 style="background-color: #eee; margin: 0; padding: 20px; line-height: 16px; font-size: 16px;">Nav 1 boxed with top bar currency switcher, language switcher and socials</h1>

    <div class="nav-area header-type-1">
        <div class="header-top-bar">
            <div class="container">
                <div class="top-bar-inner">
                    <div class="top-bar-left d-flex">
                        <ul class="crncy-lang-block2">
                            <li class="currency-menu dropdown">
                                <a class="" role="button" id="crn-dropdown" data-bs-toggle="dropdown" aria-haspopup="false" aria-expanded="false">
                                    USD <i class="homey-icon homey-icon-arrow-down-1"></i>
                                </a>

                                <div class="dropdown-menu" aria-labelledby="crn-dropdown">
                                    <a class="dropdown-item crn-item" href="#">US</a>
                                    <a class="dropdown-item crn-item" href="#">PK</a>
                                </div>
                                <!-- </div> -->
                            </li>
                        </ul>
                        <ul class="crncy-lang-block2">
                            <li class="language-menu dropdown">
                                <a class="" role="button" id="lang-dropdown" data-bs-toggle="dropdown" aria-haspopup="false" aria-expanded="false">
                                    <img src="img/lang-image.png" class="flag-img" alt="img"> <i class="homey-icon homey-icon-arrow-down-1"></i>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="lang-dropdown">
                                    <a class="dropdown-item crn-item" href="#">English<img src="img/lang-image.png" class="flag-img" alt="img"></a>
                                    <a class="dropdown-item crn-item" href="#">Spanish <img src="img/lang-image.png" class="flag-img" alt="img"></a>
                                    <a class="dropdown-item crn-item" href="#">Italian <img src="img/lang-image.png" class="flag-img" alt="img"></a>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="top-bar-right">
                        <div class="social-icons">
                            <a href="#" class="btn-bg-facebook"><i class="homey-icon homey-icon-social-media-facebook"></i></a>
                            <a href="#" class="btn-bg-twitter"><i class="homey-icon homey-icon-social-media-twitter"></i></a>
                            <a href="#" class="btn-bg-google-plus"><i class="homey-icon homey-icon-social-media-google-plus-1"></i></a>
                            <a href="#" class="btn-bg-instagram"><i class="homey-icon homey-icon-social-instagram"></i></a>
                            <a href="#" class="btn-bg-pinterest"><i class="homey-icon homey-icon-social-pinterest"></i></a>
                            <a href="#" class="btn-bg-linkedin"><i class="homey-icon homey-icon-professional-network-linkedin"></i></a>
                            <a href="#" class="btn-bg-rss"><i class="homey-icon homey-icon-rss-feed-interface-essential"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- desktop nav -->
        <header class="header-nav d-none d-lg-block">
            <div class="container">
                <div class="header-inner table-row">
                    <div class="header-comp-logo">
                        <?php include('inc/header/logo.php'); ?>
                    </div>
                    <div class="header-comp-nav text-end">
                        <?php include('inc/header/main-nav.php'); ?>
                    </div>
                    <div class="header-comp-right">
                        <?php include('inc/header/login-register-v1.php'); ?>
                    </div>
                </div>
            </div>
        </header>
        <!-- mobile header -->
        <?php include('inc/header/header-mobile.php'); ?>
    </div>


    <hr style="margin-top: 200px; margin-bottom: 0; border: none;">
    <h1 style="background-color: #eee; margin: 0; padding: 20px; line-height: 16px; font-size: 16px;">Nav 1 boxed with top bar address, hours, phone and contacts</h1>

    <div class="nav-area header-type-1">
        <div class="header-top-bar">
            <div class="container">
                <div class="top-bar-inner">
                    <div class="top-bar-left">
                        <div class="social-icons">
                            <a href="#" class="btn-bg-facebook"><i class="homey-icon homey-icon-social-media-facebook"></i></a>
                            <a href="#" class="btn-bg-twitter"><i class="homey-icon homey-icon-social-media-twitter"></i></a>
                            <a href="#" class="btn-bg-google-plus"><i class="homey-icon homey-icon-social-media-google-plus-1"></i></a>
                            <a href="#" class="btn-bg-instagram"><i class="homey-icon homey-icon-social-instagram"></i></a>
                            <a href="#" class="btn-bg-pinterest"><i class="homey-icon homey-icon-social-pinterest"></i></a>
                            <a href="#" class="btn-bg-linkedin"><i class="homey-icon homey-icon-professional-network-linkedin"></i></a>
                            <a href="#" class="btn-bg-rss"><i class="homey-icon homey-icon-rss-feed-interface-essential"></i></a>
                        </div>
                    </div>
                    <div class="top-bar-right">
                        <ul class="top-contact-address d-none d-lg-block">
                            <li><a class="phone-number" href="tel:8008888686"><i class="homey-icon homey-icon-phone-circle"></i> Call us (800) 888 8686</a></li>
                            <li><a class="email-contact" href="#"><i class="homey-icon homey-icon-unread-emails"></i> Contact us</a></li>
                        </ul>
                        <ul class="top-contact-address top-contact-address-mobile d-md-none">
                            <li><a class="phone-number" href="tel:8008888686"><i class="homey-icon homey-icon-phone-circle"></i></a></li>
                            <li><a class="email-contact" href="#"><i class="homey-icon homey-icon-unread-emails"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- desktop nav -->
        <header class="header-nav d-none d-lg-block">
            <div class="container">
                <div class="header-inner table-row">
                    <div class="header-comp-logo">
                        <?php include('inc/header/logo.php'); ?>
                    </div>
                    <div class="header-comp-nav text-right">
                        <?php include('inc/header/main-nav.php'); ?>
                    </div>
                    <div class="header-comp-right">
                        <?php include('inc/header/login-register-v1.php'); ?>
                    </div>
                </div>
            </div>
        </header>
        <!-- mobile header -->
        <?php include('inc/header/header-mobile.php'); ?>
    </div>

    <hr style="margin-top: 200px; margin-bottom: 0; border: none;">
    <?php include('inc/footer.php'); ?>
    <?php include('inc/scripts.php'); ?>
</body>

</html>