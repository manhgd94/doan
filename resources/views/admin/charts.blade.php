@extends('layouts.admin')

@section('page-title')
<h2 class="page-title">Charts</h2>
@endsection

@section('content')

<div class="row">
	<div class="col-md-7">
		<div class="panel panel-default">
			<div class="panel-heading">Line Chart</div>
			<div class="panel-body">
				<div class="chart">
					<canvas id="lineChart" height="310" width="600"></canvas>
				</div>
				<div id="legendDiv"></div>
			</div>
		</div>
	</div>
	<div class="col-md-5">
		<div class="panel panel-default">
			<div class="panel-heading">Radar Chart</div>
			<div class="panel-body">
				<div class="row">
					<div class="col-md-12">
						<div class="chart chart-doughnut">
							<canvas id="chart-area" width="500" height="280" />
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>
</div>

<div class="row">
	<div class="col-md-4">
		<div class="panel panel-default">
			<div class="panel-heading">Polar Chart</div>
			<div class="panel-body">
				<div class="chart chart-doughnut">
					<canvas id="chart-area2" width="1200" height="600" />
				</div>
			</div>
		</div>
	</div>
	<div class="col-md-8">
		<div class="panel panel-default">
			<div class="panel-heading">Bar Chart</div>
			<div class="panel-body">
				<div class="chart">
					<canvas id="chart-bar" height="400" width="1200"></canvas>
				</div>

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
	window.onload = function(){

		// Line chart from swirlData
		var ctx = document.getElementById("lineChart").getContext("2d");
		window.myLine = new Chart(ctx).Line(swirlData, {
			responsive: true,
			scaleShowVerticalLines: false,
			scaleBeginAtZero : true,
			multiTooltipTemplate: "<%if (label){%><%=label%>: <%}%><%= value %>",
		});

		// Radar Chart from radarData
		var doctx = document.getElementById("chart-area").getContext("2d");
		window.myDoughnut = new Chart(doctx).Radar(radarData, {responsive : true});

		// PolarArea from polarData
		var doctx = document.getElementById("chart-area2").getContext("2d");
		window.myDoughnut = new Chart(doctx).PolarArea(polarData, {responsive : true});

		// Pie Chart from doughutData
		var doctx = document.getElementById("chart-area3").getContext("2d");
		window.myDoughnut = new Chart(doctx).Pie(doughnutData, {responsive : true});

		// Dougnut Chart from doughnutData
		var doctx = document.getElementById("chart-area4").getContext("2d");
		window.myDoughnut = new Chart(doctx).Doughnut(doughnutData, {responsive : true});

		// Bar Chart from barChartData
		var ctx = document.getElementById("chart-bar").getContext("2d");
		window.myBar = new Chart(ctx).Bar(barChartData, {
			responsive : true
		});


	}	
</script>
<script src="{{ asset('public/admin/js/chartData.js')}}"></script>
@endsection
