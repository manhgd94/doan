<!doctype html>
<html lang="en" class="no-js">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>Admin-Login</title>

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
	
	<div class="login-page bk-img" style="background-image: url(/public/admin/images/login-bg.jpg);">
		<div class="form-content">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-md-offset-3">
						<h1 class="text-center text-bold text-light mt-4x">Sign in</h1>
						<div class="well row pt-2x pb-3x bk-light">
							<div class="col-md-8 col-md-offset-2">
								<form action="" method="POST" class="mt">

									<label for="" class="text-uppercase text-sm">Email</label>
									<input type="text" placeholder="Email" name="email" class="form-control mb">

									<label for="" class="text-uppercase text-sm">Password</label>
									<input type="password" placeholder="Password" name="password" class="form-control mb">

									<div class="checkbox checkbox-circle checkbox-info">
										<input id="checkbox7" type="checkbox" checked>
										<label for="checkbox7">
											Keep me signed in
										</label>
									</div>

									<button class="btn btn-primary btn-block" type="submit">LOGIN</button>

								</form>
							</div>
						</div>
						<div class="text-center text-light">
							<a href="#" class="text-light">Forgot password?</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<!-- Loading Scripts -->
	<script src="{{ asset('public/admin/js/jquery.min.js')}}"></script>
	<script src="{{ asset('public/admin/js/bootstrap-select.min.js')}}"></script>
	<script src="{{ asset('public/admin/js/bootstrap.min.js')}}"></script>
	<script src="{{ asset('public/admin/js/jquery.dataTables.min.js')}}"></script>
	<script src="{{ asset('public/admin/js/dataTables.bootstrap.min.js')}}"></script>
	<script src="{{ asset('public/admin/js/Chart.min.js')}}"></script>
	<script src="{{ asset('public/admin/js/fileinput.js')}}"></script>
	<script src="{{ asset('public/admin/js/chartData.js')}}"></script>
	<script src="{{ asset('public/admin/js/main.js')}}"></script>
	<script type="text/javascript">
	    $(function () {

	        $('form').on('submit', function (e) {
	          e.preventDefault();
	          $.ajax({
	            type: 'post',
	            url: 'http://jwtapi.local/api/auth/login',
	            data: $('form').serialize(),
	            dataType: 'json',
	            success: function (data) {
	                if (data.token) {
	                    window.location.href = "/admin/login?token="+data.token;
	                } else {
	                    alert(data.message);
	                }
	            },
	            error: function (data) {
	                var obj = JSON.parse(data.responseText);
	                var htmlresult = '<div class="form-group"><div class="col-md-8 col-md-offset-4">';
	                for (i = 0; i < obj.errors.length; ++i) {
	                    htmlresult += '<span class="help-block"><strong>'+obj.errors[i]+'</strong></span>'
	                }
	                htmlresult += '</div></div>'
	                $('form').prepend(htmlresult);
	            }
	          });

	        });

	      });
	</script>
</body>

</html>