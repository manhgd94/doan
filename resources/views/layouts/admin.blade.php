<!doctype html>
<html lang="en" class="no-js')}}">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<meta name="theme-color" content="#3e454c">
	
	<title>Admin student's jobs</title>

	<!-- Font awesome -->
	<link rel="stylesheet" href="{{ asset('public/admin/css/font-awesome.min.css')}}">
	<!-- Sandstone Bootstrap CSS -->
	<link rel="stylesheet" href="{{ asset('public/admin/css/bootstrap.min.css')}}">
	<!-- Bootstrap Datatables -->
	<link rel="stylesheet" href="{{ asset('public/admin/css/dataTables.bootstrap.min.css')}}">
	<!-- Bootstrap social button library -->
	<link rel="stylesheet" href="{{ asset('public/admin/css/bootstrap-social.css')}}">
	<!-- Bootstrap select -->
	<link rel="stylesheet" href="{{ asset('public/admin/css/bootstrap-select.css')}}">
	<!-- Bootstrap file input -->
	<link rel="stylesheet" href="{{ asset('public/admin/css/fileinput.min.css')}}">
	<!-- Awesome Bootstrap checkbox -->
	<link rel="stylesheet" href="{{ asset('public/admin/css/awesome-bootstrap-checkbox.css')}}">
	<!-- Admin Stye -->
	<link rel="stylesheet" href="{{ asset('public/admin/css/style.css')}}">

	<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
	<div class="brand clearfix">
		<a href="/admin" class="logo"><img src="{{ asset('public/admin/images/logo.jpg') }}" class="img-responsive" alt=""></a>
		<span class="menu-btn"><i class="fa fa-bars"></i></span>
		<ul class="ts-profile-nav">
			<li><a href="#">Help</a></li>
			<li><a href="#">Settings</a></li>
			<li class="ts-account">
				<a href="#"><img src="{{ asset('public/admin/images/ts-avatar.jpg') }}" class="ts-avatar hidden-side" alt=""> Account <i class="fa fa-angle-down hidden-side"></i></a>
				<ul>
					<li><a href="#">My Account</a></li>
					<li><a href="#">Edit Account</a></li>
					<li><a href="/admin/logout">Logout</a></li>
				</ul>
			</li>
		</ul>
	</div>

	<div class="ts-main-content">
		<nav class="ts-sidebar">
			<ul class="ts-sidebar-menu">
				<li class="ts-label">Search</li>
				<li>
					<input type="text" class="ts-sidebar-search" placeholder="Search here...">
				</li>
				<li class="ts-label">Main</li>
				<li class="open"><a href="/admin"><i class="fa fa-dashboard"></i> Dashboard</a></li>
				<li><a href="#"><i class="fa fa-desktop"></i> UI Elements</a>
					<ul>
						<li><a href="/admin/panels">Panels and Wells</a></li>
						<li><a href="/admin/buttons">Buttons</a></li>
						<li><a href="/admin/notifications">Notifications</a></li>
						<li><a href="/admin/typography">Typography</a></li>
						<li><a href="/admin/icon">Icon</a></li>
						<li><a href="/admin/grid">Grid</a></li>
					</ul>
				</li>
				<li><a href="/admin/categories"><i class="fa fa-book"></i> Categories</a></li>
				<li><a href="/admin/jobs"><i class="fa fa-money"></i> Jobs</a></li>
				<li><a href="/admin/orders"><i class="fa fa-wrench"></i> Orders</a></li>
				<li><a href="/admin/users"><i class="fa fa-user"></i> Users</a></li>
				<li><a href="/admin/comments"><i class="fa fa-comment"></i> Comments</a></li>
				<li><a href="/admin/rates"><i class="fa fa-star"></i> Rates</a></li>
				<li><a href="/admin/forms"><i class="fa fa-edit"></i> Forms</a></li>
				<li><a href="/admin/charts"><i class="fa fa-pie-chart"></i> Charts</a></li>
				<li><a href="#"><i class="fa fa-sitemap"></i> Multi-Level Dropdown</a>
					<ul>
						<li><a href="#">2nd level</a></li>
						<li><a href="#">2nd level</a></li>
						<li><a href="#">3rd level</a>
							<ul>
								<li><a href="#">3rd level</a></li>
								<li><a href="#">3rd level</a></li>
							</ul>
						</li>
					</ul>
				</li>
				<li><a href="#"><i class="fa fa-files-o"></i> Sample Pages</a>
					<ul>
						<li><a href="/admin/blank">Blank page</a></li>
						<li><a href="/admin/login">Login page</a></li>
					</ul>
				</li>

				<!-- Account from above -->
				<ul class="ts-profile-nav">
					<li><a href="#">Help</a></li>
					<li><a href="#">Settings</a></li>
					<li class="ts-account">
						<a href="#"><img src="{{ asset('public/admin/images/ts-avatar.jpg') }}" class="ts-avatar hidden-side" alt=""> Account <i class="fa fa-angle-down hidden-side"></i></a>
						<ul>
							<li><a href="#">My Account</a></li>
							<li><a href="#">Edit Account</a></li>
							<li><a href="/admin/logout">Logout</a></li>
						</ul>
					</li>
				</ul>

			</ul>
		</nav>
		<div class="content-wrapper">
			<div class="container-fluid">

				<div class="row">
					<div class="col-md-12">

						@section('page-title')
				            <h2 class="page-title">Dashboard</h2>
				        @show
						
						@yield('content')

					</div>
				</div>
				
				<div class="row text-center">
                    <div class="col-md-12">
                        <div>Design &amp; Developed by <a href="http://www.facebook.com/lazycat.ngoc" target="_blank">Mạnh Mẽ Lên</a></div>
                    </div>
                </div>
			</div>
		</div>
	</div>

	<!-- Loading Scripts -->
	<script type="text/javascript">
		var domainapi = 'http://jwtapi.local';
	</script>
	<script src="{{ asset('public/admin/js/jquery.min.js')}}"></script>
	<script src="{{ asset('public/admin/js/bootstrap-select.min.js')}}"></script>
	<script src="{{ asset('public/admin/js/bootstrap.min.js')}}"></script>
	<script src="{{ asset('public/admin/js/jquery.dataTables.min.js')}}"></script>
	<script src="{{ asset('public/admin/js/dataTables.bootstrap.min.js')}}"></script>
	<script src="{{ asset('public/admin/js/Chart.min.js')}}"></script>
	<script src="{{ asset('public/admin/js/fileinput.js')}}"></script>
	<script src="{{ asset('public/admin/js/main.js')}}"></script>
	@yield('script')
</body>

</html>