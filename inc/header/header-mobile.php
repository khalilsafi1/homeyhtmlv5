<header class="header-nav header-mobile d-lg-none">
    <div class="header-mobile-wrap">
        <div class="container">
            <div class="row">
                <div class="col-3">
                    <button class="navbar-toggler btn btn-mobile-nav" type="button" data-bs-toggle="collapse" data-bs-target="#mobile-nav" aria-controls="#mobile-nav" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="homey-icon homey-icon-navigation-menu" aria-hidden="true"></i>
                    </button>
                </div>
                <div class="col-6">
                    <div class="mobile-logo text-center">
                        <?php include ('inc/header/logo.php'); ?>
                    </div><!-- mobile-logo -->
                </div>
                <div class="col-3">
                    <div class="user-menu text-end">
                        <button type="button" class="btn btn-mobile-nav" data-bs-toggle="collapse" data-bs-target="#user-nav" aria-expanded="false" aria-controls="navbar">
                            <i class="homey-icon homey-icon-single-neutral-circle" aria-hidden="true"></i>
                        </button>
                    </div><!-- user-menu -->
                </div>
            </div><!-- row -->
        </div><!-- container -->
    </div><!-- header-mobile-wrap -->
    
    <div class="container">
        <div class="row">
            <div class="mobile-nav-wrap">
                <?php include ('inc/header/mobile-menu.php'); ?>
            </div><!-- mobile-nav-wrap -->    
        </div>        
    </div><!-- container -->
    <div class="container">
        <div class="row">
            <div class="user-nav-wrap">
                <?php  include ('inc/header/mobile-user-menu.php'); ?>
            </div><!-- mobile-nav-wrap -->
        </div>
    </div><!-- container -->
</header><!-- header-nav header-mobile hidden-md hidden-lg -->