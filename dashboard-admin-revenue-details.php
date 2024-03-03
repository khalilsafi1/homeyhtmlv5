<!DOCTYPE html>
<html lang="en">
<head>
    <?php include 'inc/head.php';?>
</head>
<body>

    <div class="header-dashboard">
        <div class="nav-area header-type-1">
            <!-- desktop nav -->
            <header class="header-nav hidden-sm hidden-xs">
                <div class="container-fluid">
                    <div class="header-inner table-block">
                        <div class="header-comp-logo">
                            <?php include ('inc/header/logo.php'); ?>
                        </div>
                        <div class="header-comp-nav text-left">
                            <?php include ('inc/header/main-nav.php'); ?>
                        </div>
                        <div class="header-comp-right">
                            <?php include ('inc/header/account-host.php'); ?>
                        </div>
                    </div>
                </div>
            </header>
            <!-- mobile header -->
            <?php include ('inc/header/header-mobile-full-width.php'); ?>
        </div>   
    </div>    
    <section id="body-area">

        <div class="dashboard-page-title">
            <h1>Dashboard</h1>
        </div><!-- .dashboard-page-title -->

        <?php include 'inc/dashboard/dashboard-side-menu-admin.php';?>

        <div class="user-dashboard-right dashboard-without-sidebar">
            <div class="dashboard-content-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="dashboard-area admin-top-banner">

                                <!-- <div class="block">
                                    <div class="block-verify">
                                        <div class="block-col block-col-25 text-left">
                                            <h3>Listings</h3>
                                            <p class="block-big-text">89</p>
                                            <div>2 New listings</div>
                                            <a class="btn btn-success-outlined btn-slim admin-top-banner-btn" href="#">Manage</a>
                                        </div>
                                        <div class="block-col block-col-25">
                                            <h3>Reservations</h3>
                                            <p class="block-big-text">65</p>
                                            <div>21 New reservations</div>
                                            <a class="btn btn-success-outlined btn-slim admin-top-banner-btn" href="#">Manage</a>
                                        </div>
                                        <div class="block-col block-col-25">
                                            <h3>Users</h3>
                                            <p class="block-big-text">186</p>
                                            <div>3 New Users</div>
                                            <a class="btn btn-success-outlined btn-slim admin-top-banner-btn" href="#">Manage</a>
                                        </div>
                                        <div class="block-col block-col-25">
                                            <h3>Earnings</h3>
                                            <p class="block-big-text">$87,672.00</p>
                                            <div>April, 2019</div>
                                            <a class="btn btn-success-outlined btn-slim admin-top-banner-btn" href="#">Details</a>
                                        </div>
                                    </div>
                                </div> --><!-- .block -->

                                <div class="block">
                                    <div class="block-title">
                                        <div class="block-left">
                                            <h2 class="title">Earning Details</h2>
                                        </div>
                                        <div class="block-right">
                                            <select class="selectpicker form-control" data-live-search="false" title="All Time">
                                                <option>All Time</option>
                                                <option>Last month</option>
                                                <option>Last 3 months</option>
                                                <option>Last 6 months</option>
                                                <option>Last Year</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="table-block dashboard-listing-table dashboard-table">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th>Payments</th>
                                                    <th>Amount</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td data-label="Description">
                                                        Upfront Payments 
                                                        <span data-toggle="tooltip" data-placement="top" title="Tooltip on top">
                                                            <i class="homey-icon homey-icon-information-circle"></i>
                                                        </span>
                                                    </td>
                                                    <td data-label="Amount">
                                                        $100,000
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td data-label="Description">
                                                        Payments Due 
                                                        <span data-toggle="tooltip" data-placement="top" title="Tooltip on top">
                                                            <i class="homey-icon homey-icon-information-circle"></i>
                                                        </span>
                                                    </td>
                                                    <td data-label="Amount">
                                                        $200,000
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td data-label="Description">
                                                        <strong>Total Payments</strong>
                                                        <span data-toggle="tooltip" data-placement="top" title="Tooltip on top">
                                                            <i class="homey-icon homey-icon-information-circle"></i>
                                                        </span>
                                                    </td>
                                                    <td data-label="Amount">
                                                        <strong>$300,000</strong>
                                                    </td>
                                                </tr>
                                            </tbody>

                                            <thead>
                                                <tr>
                                                    <th>Fees</th>
                                                    <th>Amount</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td data-label="Description">
                                                        Commissions 
                                                        <span data-toggle="tooltip" data-placement="top" title="Tooltip on top">
                                                            <i class="homey-icon homey-icon-information-circle"></i>
                                                        </span>
                                                    </td>
                                                    <td data-label="Description">
                                                        $10,000
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td data-label="Description">
                                                        Service Fee 
                                                        <span data-toggle="tooltip" data-placement="top" title="Tooltip on top">
                                                            <i class="homey-icon homey-icon-information-circle"></i>
                                                        </span>
                                                    </td>
                                                    <td data-label="Amount">
                                                        $50,000
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td data-label="Description">
                                                        Host Fee 
                                                        <span data-toggle="tooltip" data-placement="top" title="Tooltip on top">
                                                            <i class="homey-icon homey-icon-information-circle"></i>
                                                        </span>
                                                    </td>
                                                    <td data-label="Amount">
                                                        $80,000
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td data-label="Description">
                                                        <strong>Total Fees</strong>
                                                        <span data-toggle="tooltip" data-placement="top" title="Tooltip on top">
                                                            <i class="homey-icon homey-icon-information-circle"></i>
                                                        </span>
                                                    </td>
                                                    <td data-label="Amount">
                                                        <strong>$140,000</strong>
                                                    </td>
                                                </tr>
                                            </tbody>

                                            <thead>
                                                <tr>
                                                    <th>Earning</th>
                                                    <th>Amount</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                
                                                <tr>
                                                    <td data-label="Description">
                                                        Total Earnings 
                                                        <span data-toggle="tooltip" data-placement="top" title="Tooltip on top">
                                                            <i class="homey-icon homey-icon-information-circle"></i>
                                                        </span>
                                                    </td>
                                                    <td data-label="Amount">
                                                        $300,000
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td data-label="Description">
                                                        Net Earnings 
                                                        <span data-toggle="tooltip" data-placement="top" title="Tooltip on top">
                                                            <i class="homey-icon homey-icon-information-circle"></i>
                                                        </span>
                                                    </td>
                                                    <td data-label="Amount">
                                                        $300,000
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div><!-- .block -->

                            </div><!-- .dashboard-area -->
                        </div><!-- col-lg-12 col-md-12 col-sm-12 -->
                    </div>
                </div><!-- .container-fluid -->
            </div><!-- .dashboard-content-area -->    

        </div><!-- .user-dashboard-right -->

    </section><!-- #body-area -->

    <?php // include 'inc/dashboard/dashboard-footer.php';?>
    <?php include 'inc/scripts.php';?>

</body>
</html>