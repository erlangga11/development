<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
  <head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Twitter -->
    <meta name="twitter:site" content="@themepixels">
    <meta name="twitter:creator" content="@themepixels">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="DashForge">
    <meta name="twitter:description" content="Responsive Bootstrap 4 Dashboard Template">
    <meta name="twitter:image" content="http://themepixels.me/dashforge/img/dashforge-social.png">

    <!-- Facebook -->
    <meta property="og:url" content="http://themepixels.me/dashforge">
    <meta property="og:title" content="DashForge">
    <meta property="og:description" content="Responsive Bootstrap 4 Dashboard Template">

    <meta property="og:image" content="http://themepixels.me/dashforge/img/dashforge-social.png">
    <meta property="og:image:secure_url" content="http://themepixels.me/dashforge/img/dashforge-social.png">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="600">

    <!-- Meta -->
    <meta name="description" content="Responsive Bootstrap 4 Dashboard Template">
    <meta name="author" content="ThemePixels">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url(); ?>/assets/img/favicon.png">

    <title>DashForge Responsive Bootstrap 4 Dashboard Template</title>

    <!-- vendor css -->
    <link href="<?php echo base_url(); ?>/lib/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>/lib/ionicons/css/ionicons.min.css" rel="stylesheet">

    <!-- DashForge CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/dashforge.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/dashforge.dashboard.css">
  </head>
  <body>

    <aside class="aside aside-fixed">
      <div class="aside-header">
        <a href="../../index.html" class="aside-logo">dash<span>forge</span></a>
        <a href="" class="aside-menu-link">
          <i data-feather="menu"></i>
          <i data-feather="x"></i>
        </a>
      </div>
      <div class="aside-body">
        <div class="aside-loggedin">
          <div class="d-flex align-items-center justify-content-start">
            <a href="" class="avatar"><img src="https://via.placeholder.com/500" class="rounded-circle" alt=""></a>
            <div class="aside-alert-link">
              <a href="" class="new" data-toggle="tooltip" title="You have 2 unread messages"><i data-feather="message-square"></i></a>
              <a href="" class="new" data-toggle="tooltip" title="You have 4 new notifications"><i data-feather="bell"></i></a>
              <a href="" data-toggle="tooltip" title="Sign out"><i data-feather="log-out"></i></a>
            </div>
          </div>
          <div class="aside-loggedin-user">
            <a href="#loggedinMenu" class="d-flex align-items-center justify-content-between mg-b-2" data-toggle="collapse">
              <h6 class="tx-semibold mg-b-0">Katherine Pechon</h6>
              <i data-feather="chevron-down"></i>
            </a>
            <p class="tx-color-03 tx-12 mg-b-0">Administrator</p>
          </div>
          <div class="collapse" id="loggedinMenu">
            <ul class="nav nav-aside mg-b-0">
              <li class="nav-item"><a href="" class="nav-link"><i data-feather="edit"></i> <span>Edit Profile</span></a></li>
              <li class="nav-item"><a href="" class="nav-link"><i data-feather="user"></i> <span>View Profile</span></a></li>
              <li class="nav-item"><a href="" class="nav-link"><i data-feather="settings"></i> <span>Account Settings</span></a></li>
              <li class="nav-item"><a href="" class="nav-link"><i data-feather="help-circle"></i> <span>Help Center</span></a></li>
              <li class="nav-item"><a href="" class="nav-link"><i data-feather="log-out"></i> <span>Sign Out</span></a></li>
            </ul>
          </div>
        </div><!-- aside-loggedin -->
        <ul class="nav nav-aside">
          <li class="nav-label" ><a href="<?php echo base_url(); ?>Dashboard">Dashboard</li>
          <li class="nav-item"><a href="<?php echo base_url(); ?>Chart" class="nav-link"><i data-feather="shopping-bag"></i> <span>PKU Chart</span></a></li>
          <li class="nav-item"><a href="dashboard-two.html" class="nav-link"><i data-feather="globe"></i> <span>PKU Tree</span></a></li>
          <li class="nav-item"><a href="<?php echo base_url(); ?>Equipment" class="nav-link"><i data-feather="pie-chart"></i> <span>List Equipment</span></a></li>
          <li class="nav-item"><a href="<?php echo base_url(); ?>Wo" class="nav-link"><i data-feather="life-buoy"></i> <span>List WO</span></a></li>
      </div>
    </aside>

    <div class="content ht-100v pd-0">
      <div class="content-header">
        <div class="content-search">
          <i data-feather="search"></i>
          <input type="search" class="form-control" placeholder="Search...">
        </div>
        <nav class="nav">
          <a href="" class="nav-link"><i data-feather="help-circle"></i></a>
          <a href="" class="nav-link"><i data-feather="grid"></i></a>
          <a href="" class="nav-link"><i data-feather="align-left"></i></a>
        </nav>
      </div><!-- content-header -->

      <div class="content-body">
        <div class="container pd-x-0">
          <div class="d-sm-flex align-items-center justify-content-between mg-b-20 mg-lg-b-25 mg-xl-b-30">
            <div>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb-style1 mg-b-10">
                  <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>Dashboard">Dashboard</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Website Analytics</li>
                </ol>
              </nav>
              <h4 class="mg-b-0 tx-spacing--1">Welcome to Dashboard</h4>
            </div>
            <div class="d-none d-md-block">
              <button class="btn btn-sm pd-x-15 btn-white btn-uppercase"><i data-feather="save" class="wd-10 mg-r-5"></i> Save</button>
              <button class="btn btn-sm pd-x-15 btn-white btn-uppercase mg-l-5"><i data-feather="upload" class="wd-10 mg-r-5"></i> Export</button>
              <button class="btn btn-sm pd-x-15 btn-white btn-uppercase mg-l-5"><i data-feather="share-2" class="wd-10 mg-r-5"></i> Share</button>
              <button class="btn btn-sm pd-x-15 btn-primary btn-uppercase mg-l-5"><i data-feather="sliders" class="wd-10 mg-r-5"></i> Settings</button>
            </div>
          </div>

          <div class="row row-xs">
            <div class="col-lg-12 col-xl-12">
              <div class="card shadow">
                <div class="card-header bd-b-0 pd-t-20 pd-lg-t-25 pd-l-20 pd-lg-l-25 d-flex flex-column flex-sm-row align-items-sm-start justify-content-sm-between">
                  <div>
                    <h6 class="mg-b-5">Website Audience Metrics</h6>
                    <p class="tx-12 tx-color-03 mg-b-0">Audience to which the users belonged while on the current date range.</p>
                  </div>
                  <div class="btn-group mg-t-20 mg-sm-t-0">
                    <button class="btn btn-xs btn-white btn-uppercase">Day</button>
                    <button class="btn btn-xs btn-white btn-uppercase">Week</button>
                    <button class="btn btn-xs btn-white btn-uppercase active">Month</button>
                  </div><!-- btn-group -->
                </div><!-- card-header -->
                <div class="card-body pd-lg-25">
                  <div class="row align-items-sm-end">
                    <div class="col-lg-7 col-xl-8">
                      <div class="chart-six"><canvas id="chartBar1"></canvas></div>
                    </div>
                    <div class="col-lg-5 col-xl-4 mg-t-30 mg-lg-t-0">
                      <div class="row">
                        <div class="col-sm-6 col-lg-12">
                          <div class="d-flex align-items-center justify-content-between mg-b-5">
                            <h6 class="tx-uppercase tx-10 tx-spacing-1 tx-color-02 tx-semibold mg-b-0">New Users</h6>
                            <span class="tx-10 tx-color-04">65% goal reached</span>
                          </div>
                          <div class="d-flex align-items-end justify-content-between mg-b-5">
                            <h5 class="tx-normal tx-rubik lh-2 mg-b-0">13,596</h5>
                            <h6 class="tx-normal tx-rubik tx-color-03 lh-2 mg-b-0">20,000</h6>
                          </div>
                          <div class="progress ht-4 mg-b-0 op-5">
                            <div class="progress-bar bg-teal wd-65p" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </div>
                        <div class="col-sm-6 col-lg-12 mg-t-30 mg-sm-t-0 mg-lg-t-30">
                          <div class="d-flex align-items-center justify-content-between mg-b-5">
                            <h6 class="tx-uppercase tx-10 tx-spacing-1 tx-color-02 tx-semibold mg-b-0">Page Views</h6>
                            <span class="tx-10 tx-color-04">45% goal reached</span>
                          </div>
                          <div class="d-flex justify-content-between mg-b-5">
                            <h5 class="tx-normal tx-rubik mg-b-0">83,123</h5>
                            <h5 class="tx-normal tx-rubik tx-color-03 mg-b-0"><small>250,000</small></h5>
                          </div>
                          <div class="progress ht-4 mg-b-0 op-5">
                            <div class="progress-bar bg-orange wd-45p" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </div>
                        <div class="col-sm-6 col-lg-12 mg-t-30">
                          <div class="d-flex align-items-center justify-content-between mg-b-5">
                            <h6 class="tx-uppercase tx-10 tx-spacing-1 tx-color-02 tx-semibold mg-b-0">Page Sessions</h6>
                            <span class="tx-10 tx-color-04">20% goal reached</span>
                          </div>
                          <div class="d-flex justify-content-between mg-b-5">
                            <h5 class="tx-normal tx-rubik mg-b-0">16,869</h5>
                            <h5 class="tx-normal tx-rubik tx-color-03 mg-b-0"><small>85,000</small></h5>
                          </div>
                          <div class="progress ht-4 mg-b-0 op-5">
                            <div class="progress-bar bg-pink wd-20p" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </div>
                        <div class="col-sm-6 col-lg-12 mg-t-30">
                          <div class="d-flex align-items-center justify-content-between mg-b-5">
                            <h6 class="tx-uppercase tx-10 tx-spacing-1 tx-color-02 tx-semibold mg-b-0">Bounce Rate</h6>
                            <span class="tx-10 tx-color-04">85% goal reached</span>
                          </div>
                          <div class="d-flex justify-content-between mg-b-5">
                            <h5 class="tx-normal tx-rubik mg-b-0">28.50%</h5>
                            <h5 class="tx-normal tx-rubik tx-color-03 mg-b-0"><small>30.50%</small></h5>
                          </div>
                          <div class="progress ht-4 mg-b-0 op-5">
                            <div class="progress-bar bg-primary wd-85p" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </div>
                      </div><!-- row -->

                    </div>
                  </div>
                </div><!-- card-body -->
              </div><!-- card -->
            </div>
           
            
          </div><!-- row -->
        </div><!-- container -->
      </div>
    </div>

    <script src="<?php echo base_url(); ?>/lib/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>/lib/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo base_url(); ?>/lib/feather-icons/feather.min.js"></script>
    <script src="<?php echo base_url(); ?>/lib/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="<?php echo base_url(); ?>/lib/chart.js/Chart.bundle.min.js"></script>
    <script src="<?php echo base_url(); ?>/lib/jquery.flot/jquery.flot.js"></script>
    <script src="<?php echo base_url(); ?>/lib/jquery.flot/jquery.flot.stack.js"></script>
    <script src="<?php echo base_url(); ?>/lib/jquery.flot/jquery.flot.resize.js"></script>

    <script src="<?php echo base_url(); ?>/assets/js/dashforge.js"></script>
    <script src="<?php echo base_url(); ?>/assets/js/dashforge.aside.js"></script>
    <script src="<?php echo base_url(); ?>/assets/js/dashforge.sampledata.js"></script>
    <script src="<?php echo base_url(); ?>/assets/js/dashboard-two.js"></script>

    <!-- append theme customizer -->
    <script src="<?php echo base_url(); ?>/lib/js-cookie/js.cookie.js"></script>
    <script src="<?php echo base_url(); ?>/assets/js/dashforge.settings.js"></script>

    
  </body>
</html>
