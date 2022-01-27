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
    <link rel="shortcut icon" type="image/x-icon" href="../../assets/img/favicon.png">

    <title>DashForge Responsive Bootstrap 4 Dashboard Template</title>

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
          <li class="nav-label">Dashboard</li>
          <li class="nav-item"><a href="<?php echo base_url(); ?>Chart" class="nav-link"><i data-feather="shopping-bag"></i> <span>PKU Chart</span></a></li>
          <li class="nav-item"><a href="dashboard-two.html" class="nav-link"><i data-feather="globe"></i> <span>PKU Tree</span></a></li>
          <li class="nav-item active"><a href="<?php echo base_url(); ?>Equipment" class="nav-link"><i data-feather="pie-chart"></i> <span>List Equipment</span></a></li>
          <li class="nav-item"><a href="<?php echo base_url(); ?>Wo" class="nav-link"><i data-feather="life-buoy"></i> <span>List WO</span></a></li>
        </ul>
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
                  <h4 class="breadcrumb-item"><a href="#">PETA UNIT KESEHATAN</a></h4>
                  <h4 class="breadcrumb-item active" aria-current="page">LIST EQUIPMENT</h4>
                </ol>
              </nav>
              <h4 class="mg-b-0 tx-spacing--1">LIST EQUIPMENT </h4>
            </div>
            <div class="d-none d-md-block">
              <button class="btn btn-sm pd-x-15 btn-white btn-uppercase mg-l-5"><i data-feather="share-2" class="wd-10 mg-r-5"></i> Share</button>
              <button class="btn btn-sm pd-x-15 btn-primary btn-uppercase mg-l-5"><i data-feather="upload" class="wd-10 mg-r-5"></i> Export</button> 
            </div>
          </div>

          <div class="row row-xs">  
            <div class="col mg-t-10">
              <!-- <div class="card card-dashboard-table"> -->
                <div class="table-responsive">
                <table class="table table-striped">
                <thead class="thead-dark">
                      <tr>
                        <th>No</th>
                        <th>Assetnum</th>
                        <th>Wonum</th>                      
                        <th>Wodesc</th>
                        <th>Wtnum</th>
                        <th>Taskdesc</th>
                        <th>Priority</th>
                        <th>Wtstatus</th>
                        <th>Reportdate</th>
                        <th>Worktype</th>
                      </tr>                     
                    </thead>
                    <tbody>
                      <tr>
                        <td>1</td>
                        <td><a href="">Organic search</a></td>
                        <td class="text-left"><strong>Lorem ipsum dolor</strong></td>
                        <td class="text-left"><strong>22</strong></td>
                        <td class="text-left"><strong>5,628</strong></td>
                        <td class="text-left"><strong>25.60%</strong></td>
                        <td class="text-left"><strong>Lorem ipsum dolor</strong></td>
                        <td class="text-left"><strong>22</strong></td>
                        <td class="text-left"><strong>5,628</strong></td>
                        <td class="text-left"><strong>25.60%</strong></td>                      
                      <tr>
                      <td>2</td>
                        <td><a href="">Social media</a></td>
                        <td class="text-left"><strong>perspiciatis repudianda</strong></td>
                        <td class="text-left"><strong>18</strong></td>
                        <td class="text-left"><strong>5,100</strong></td>
                        <td class="text-left"><strong>23.66%</strong></td>
                        <td class="text-left"><strong>Lorem ipsum dolor</strong></td>
                        <td class="text-left"><strong>22</strong></td>
                        <td class="text-left"><strong>5,628</strong></td>
                        <td class="text-left"><strong>25.60%</strong></td>
                      </tr>
                      <tr>
                      <td>3</td>
                        <td><a href="">Referral</a></td>
                        <td class="text-left"><strong>ipsum dolor sit</strong></td>
                        <td class="text-left"><strong>17</strong></td>
                        <td class="text-left"><strong>4,880</strong></td>
                        <td class="text-left"><strong>26.22%</strong></td>
                        
                        <td class="text-left"><strong>ipsum dolor sit</strong></td>
                        <td class="text-left"><strong>17</strong></td>
                        <td class="text-left"><strong>4,880</strong></td>
                        <td class="text-left"><strong>26.22%</strong></td>
                      <tr>
                      <td>4</td>
                        <td class="text-left"><a href="">Email</a></td>
                        <td class="text-left"><strong>dolor sit amet </strong></td>
                        <td class="text-left"><strong>14</strong></td>
                        <td class="text-left"><strong>4,450</strong></td>
                        <td class="text-left"><strong>24.97%</strong></td>
                        <td class="text-left"><strong>dolor sit amet </strong></td>
                        <td class="text-left"><strong>14</strong></td>
                        <td class="text-left"><strong>4,450</strong></td>
                        <td class="text-left"><strong>24.97%</strong></td>
                      </tr>
                    </tbody>
                  </table>
                </div><!-- table-responsive -->
              <!-- </div>card -->
            </div><!-- col -->
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
