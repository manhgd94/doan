@extends('layouts.admin')

@section('page-title')
<h2 class="page-title">Dashboard</h2>
@endsection

@section('content')

<div class="row">
	<div class="col-md-12">
		<div class="row">
			<div class="col-md-3">
				<div class="panel panel-default">
					<div class="panel-body bk-primary text-light">
						<div class="stat-panel text-center">
							<div class="stat-panel-number h1 ">{{$data['users']}}</div>
							<div class="stat-panel-title text-uppercase">Users</div>
						</div>
					</div>
					<a href="/admin/users" class="block-anchor panel-footer text-center">See All &nbsp; <i class="fa fa-arrow-right"></i></a>
				</div>
			</div>
			<div class="col-md-3">
				<div class="panel panel-default">
					<div class="panel-body bk-success text-light">
						<div class="stat-panel text-center">
							<div class="stat-panel-number h1 ">{{$data['jobs']}}</div>
							<div class="stat-panel-title text-uppercase">Jobs</div>
						</div>
					</div>
					<a href="/admin/jobs" class="block-anchor panel-footer text-center">See All &nbsp; <i class="fa fa-arrow-right"></i></a>
				</div>
			</div>
			<div class="col-md-2">
				<div class="panel panel-default">
					<div class="panel-body bk-danger text-light">
						<div class="stat-panel text-center">
							<div class="stat-panel-number h1 ">{{$data['orders']}}</div>
							<div class="stat-panel-title text-uppercase">Orders</div>
						</div>
					</div>
					<a href="/admin/orders" class="block-anchor panel-footer text-center">See All &nbsp; <i class="fa fa-arrow-right"></i></a>
				</div>
			</div>
			<div class="col-md-2">
				<div class="panel panel-default">
					<div class="panel-body bk-info text-light">
						<div class="stat-panel text-center">
							<div class="stat-panel-number h1 ">{{$data['categories']}}</div>
							<div class="stat-panel-title text-uppercase">Categories</div>
						</div>
					</div>
					<a href="/admin/categories" class="block-anchor panel-footer text-center">See All &nbsp; <i class="fa fa-arrow-right"></i></a>
				</div>
			</div>
			<div class="col-md-2">
				<div class="panel panel-default">
					<div class="panel-body bk-warning text-light">
						<div class="stat-panel text-center">
							<div class="stat-panel-number h1 ">{{$data['comments']}}</div>
							<div class="stat-panel-title text-uppercase">Comments</div>
						</div>
					</div>
					<a href="/admin/comments" class="block-anchor panel-footer text-center">See All &nbsp; <i class="fa fa-arrow-right"></i></a>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="row">
	<div class="col-md-6">
		<div class="panel panel-default">
			<div class="panel-heading">Sales Report</div>
			<div class="panel-body">
				<div class="chart">
					<canvas id="dashReport" height="310" width="600"></canvas>
				</div>
				<div id="legendDiv"></div>
			</div>
		</div>
	</div>
	<div class="col-md-6">
		<div class="panel panel-default">
			<div class="panel-heading">Recent Oreders</div>
			<div class="panel-body">
				<div class="alert alert-dismissible alert-success">
					<button type="button" class="close" data-dismiss="alert"><i class="fa fa-close"></i></button>
					<strong>Well done!</strong> You successfully read <a href="#" class="alert-link">this important alert message</a>.
				</div>
				<table class="table table-hover">
					<thead>
						<tr>
							<th>#</th>
							<th>First Name</th>
							<th>Last Name</th>
							<th>Username</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<th scope="row">1</th>
							<td>Mark</td>
							<td>Otto</td>
							<td>@mdo</td>
						</tr>
						<tr>
							<th scope="row">2</th>
							<td>Jacob</td>
							<td>Thornton</td>
							<td>@fat</td>
						</tr>
						<tr>
							<th scope="row">3</th>
							<td>Larry</td>
							<td>the Bird</td>
							<td>@twitter</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>

<div class="row">
	<div class="col-md-6">
		<div class="panel panel-default">
			<div class="panel-heading">Pie Chart</div>
			<div class="panel-body">
				<div class="row">
					<div class="col-md-4">
						<ul class="chart-dot-list">
							<li class="a1">date 1</li>
							<li class="a2">data 2</li>
							<li class="a3">data 3</li>
						</ul>
					</div>
					<div class="col-md-8">
						<div class="chart chart-doughnut">
							<canvas id="chart-area3" width="1200" height="900" />
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="col-md-6">
		<div class="panel panel-default">
			<div class="panel-heading">Doughnut</div>
			<div class="panel-body">
				<div class="row">
					<div class="col-md-4">
						<ul class="chart-dot-list">
							<li class="a1">date 1</li>
							<li class="a2">data 2</li>
							<li class="a3">data 3</li>
						</ul>
					</div>
					<div class="col-md-8">
						<div class="chart chart-doughnut">
							<canvas id="chart-area4" width="1200" height="900" />
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection

@section('script')
<script>
	var date = [
		@foreach($date as $dat => $value)
			"{{$value}}",
		@endforeach
		]

	var dataUser = [
		@foreach($dataUser as $dat => $value)
			{{$value}},
		@endforeach
		]

	var dataJob = [
		@foreach($dataJob as $dat => $value)
			{{$value}},
		@endforeach
		]

	window.onload = function(){

		// Line chart from swirlData for dashReport
		var ctx = document.getElementById("dashReport").getContext("2d");
		window.myLine = new Chart(ctx).Line(swirlData, {
			responsive: true,
			scaleShowVerticalLines: false,
			scaleBeginAtZero : true,
			// multiTooltipTemplate: "<%if (label){%><%=label%>: <%}%><%= value %>",
		}); 
		
		// Pie Chart from doughutData
		var doctx = document.getElementById("chart-area3").getContext("2d");
		window.myDoughnut = new Chart(doctx).Pie(doughnutData, {responsive : true});

		// Dougnut Chart from doughnutData
		var doctx = document.getElementById("chart-area4").getContext("2d");
		window.myDoughnut = new Chart(doctx).Doughnut(doughnutData, {responsive : true});

	}
</script>
<script src="{{ asset('public/admin/js/chartData.js')}}"></script>
@endsection
