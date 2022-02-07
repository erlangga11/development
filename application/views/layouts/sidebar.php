<aside class="aside aside-fixed">
	<div class="aside-header">
		<a href="<?php echo base_url(); ?>" class="aside-logo">dash<span>forge</span></a>
		<a href="" class="aside-menu-link">
			<i data-feather="menu"></i>
			<i data-feather="x"></i>
		</a>
	</div>
	<div class="aside-body">
		<div class="aside-loggedin">
			<div class="d-flex align-items-center justify-content-start">
				<a href="" class="avatar"><img src="https://via.placeholder.com/500" class="rounded-circle" alt=""></a>
				<!-- <div class="aside-alert-link">
					<a href="" class="new" data-toggle="tooltip" title="You have 2 unread messages"><i data-feather="message-square"></i></a>
					<a href="" class="new" data-toggle="tooltip" title="You have 4 new notifications"><i data-feather="bell"></i></a>
					<a href="" data-toggle="tooltip" title="Sign out"><i data-feather="log-out"></i></a>
				</div> -->
			</div>
			<div class="aside-loggedin-user">
				<a href="#loggedinMenu" class="d-flex align-items-center justify-content-between mg-b-2" data-toggle="collapse">
					<h6 class="tx-semibold mg-b-0">Nama User</h6>
					<i data-feather="chevron-down"></i>
				</a>
				<p class="tx-color-03 tx-12 mg-b-0">Role User</p>
			</div>
			<div class="collapse" id="loggedinMenu">
				<ul class="nav nav-aside mg-b-0">
					<li class="nav-item"><a href="" class="nav-link"><i data-feather="edit"></i> <span>Edit Profile</span></a></li>
					<!-- <li class="nav-item"><a href="" class="nav-link"><i data-feather="user"></i> <span>View Profile</span></a></li> -->
					<li class="nav-item"><a href="" class="nav-link"><i data-feather="settings"></i> <span>Account Settings</span></a></li>
					<!-- <li class="nav-item"><a href="" class="nav-link"><i data-feather="help-circle"></i> <span>Help Center</span></a></li> -->
					<li class="nav-item"><a href="" class="nav-link"><i data-feather="log-out"></i> <span>Sign Out</span></a></li>
				</ul>
			</div>
		</div><!-- aside-loggedin -->
		<ul class="nav nav-aside">
			<li class="nav-label">Dashboard</li>
			<li class="nav-item active"><a href="<?= base_url() ?>Dashboard" class="nav-link"><i data-feather="shopping-bag"></i> <span>Beranda</span></a></li>
			<li class="nav-item with-sub">
				<a href="dashboard-three.html" class="nav-link"><i data-feather="pie-chart"></i> <span>PKU</span></a>
				<ul>
					<li><a href="<?= base_url() ?>Chart">PKU Chart</a></li>
					<li><a href="<?= base_url() ?>/#">PKU Tree</a></li>
				</ul>
			</li>
			<li class="nav-item"><a href="<?= base_url() ?>Equipment " class="nav-link"><i data-feather="life-buoy"></i> <span>List Equipment</span></a></li>
			<li class="nav-item"><a href="<?= base_url() ?>Wo" class="nav-link"><i data-feather="life-buoy"></i> <span>List WO</span></a></li>
		</ul>
	</div>
</aside>
