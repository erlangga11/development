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
	<link rel="shortcut icon" type="image/x-icon" href="<?= base_url() ?>/assets/img/favicon.png">

	<title>DashForge Responsive Bootstrap 4 Dashboard Template</title>

	<!-- vendor css -->
	<link href="<?= base_url() ?>/lib/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">
	<link href="<?= base_url() ?>/lib/ionicons/css/ionicons.min.css" rel="stylesheet">
	<link href="<?= base_url() ?>/lib/jqvmap/jqvmap.min.css" rel="stylesheet">
	<link href="<?= base_url() ?>/lib/prismjs/themes/prism-vs.css" rel="stylesheet">
	<link href="<?= base_url() ?>/lib/datatables.net-dt/css/jquery.dataTables.min.css" rel="stylesheet">
	<link href="<?= base_url() ?>/lib/datatables.net-responsive-dt/css/responsive.dataTables.min.css" rel="stylesheet">
	<link href="<?= base_url() ?>/lib/select2/css/select2.min.css" rel="stylesheet">

	<!-- DashForge CSS -->
	<link rel="stylesheet" href="<?= base_url() ?>/assets/css/dashforge.css">
	<link rel="stylesheet" href="<?= base_url() ?>/assets/css/dashforge.dashboard.css">

	<script  src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css"  href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>

<body>
	<!-- Sidebar -->
	<?php include 'sidebar.php'; ?>
	<!-- End Sidebar -->

	<div class="content ht-100v pd-0">
		<!-- Nav-header -->
		<?php include 'nav_header.php' ?>
		<!-- End Nav-Header -->

		<div class="content-body">
			<div class="container pd-x-0">
				<!-- Content-Header -->
				<?php include 'content_header.php'; ?>
				<!-- End Content-Header -->

				<!-- Content -->
				<div class="row row-xs">
					<?php $this->load->view($content) ?>
				</div><!-- row -->
				<!-- End Content -->
			</div><!-- container -->
		</div>
	</div>

	<?php include 'script.php'; ?>
</body>

</html>