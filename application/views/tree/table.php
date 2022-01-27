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
          <li class="nav-label">Dashboard</li>
          <li class="nav-item"><a href="dashboard-one.html" class="nav-link"><i data-feather="shopping-bag"></i> <span>Sales Monitoring</span></a></li>
          <li class="nav-item active"><a href="dashboard-two.html" class="nav-link"><i data-feather="globe"></i> <span>Website Analytics</span></a></li>
          <li class="nav-item"><a href="dashboard-three.html" class="nav-link"><i data-feather="pie-chart"></i> <span>Cryptocurrency</span></a></li>
          <li class="nav-item"><a href="dashboard-four.html" class="nav-link"><i data-feather="life-buoy"></i> <span>Helpdesk Management</span></a></li>
      </div>
    </aside>

    <div class="col mg-t-10">
              <div class="card card-dashboard-table">
                <div class="table-responsive">
                  <table class="table table-bordered">
                    <thead>
                      <tr>
                        <th>&nbsp;</th>
                        <th colspan="3">Acquisition</th>
                        <th colspan="3">Behavior</th>
                        <th colspan="3">Conversions</th>
                      </tr>
                      <tr>
                        <th>Source</th>
                        <th>Users</th>
                        <th>New Users</th>
                        <th>Sessions</th>
                        <th>Bounce Rate</th>
                        <th>Pages/Session</th>
                        <th>Avg. Session</th>
                        <th>Transactions</th>
                        <th>Revenue</th>
                        <th>Rate</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td><a href="">Organic search</a></td>
                        <td><strong>350</strong></td>
                        <td><strong>22</strong></td>
                        <td><strong>5,628</strong></td>
                        <td><strong>25.60%</strong></td>
                        <td><strong>1.92</strong></td>
                        <td><strong>00:01:05</strong></td>
                        <td><strong>340,103</strong></td>
                        <td><strong>$2.65M</strong></td>
                        <td><strong>4.50%</strong></td>
                      </tr>
                      <tr>
                        <td><a href="">Social media</a></td>
                        <td><strong>276</strong></td>
                        <td><strong>18</strong></td>
                        <td><strong>5,100</strong></td>
                        <td><strong>23.66%</strong></td>
                        <td><strong>1.89</strong></td>
                        <td><strong>00:01:03</strong></td>
                        <td><strong>321,960</strong></td>
                        <td><strong>$2.51M</strong></td>
                        <td><strong>4.36%</strong></td>
                      </tr>
                      <tr>
                        <td><a href="">Referral</a></td>
                        <td><strong>246</strong></td>
                        <td><strong>17</strong></td>
                        <td><strong>4,880</strong></td>
                        <td><strong>26.22%</strong></td>
                        <td><strong>1.78</strong></td>
                        <td><strong>00:01:09</strong></td>
                        <td><strong>302,767</strong></td>
                        <td><strong>$2.1M</strong></td>
                        <td><strong>4.34%</strong></td>
                      </tr>
                      <tr>
                        <td><a href="">Email</a></td>
                        <td><strong>187</strong></td>
                        <td><strong>14</strong></td>
                        <td><strong>4,450</strong></td>
                        <td><strong>24.97%</strong></td>
                        <td><strong>1.35</strong></td>
                        <td><strong>00:02:07</strong></td>
                        <td><strong>279,300</strong></td>
                        <td><strong>$1.86M</strong></td>
                        <td><strong>3.99%</strong></td>
                      </tr>
                    </tbody>
                  </table>
                </div><!-- table-responsive -->
              </div><!-- card -->
            </div><!-- col -->

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
