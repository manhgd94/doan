@extends('layouts.admin')

@section('page-title')
<h2 class="page-title">Notifications and Alerts</h2>
@endsection

@section('content')
				
<div class="row">
	<div class="col-md-6">
		<div class="panel panel-default">
			<div class="panel-heading">Alert Styles</div>
			<div class="panel-body">
				<div class="alert alert-dismissible alert-warning">
					<button type="button" class="close" data-dismiss="alert"><i class="fa fa-remove"></i></button>
					<h4>Warning!</h4>
					<p>Best check yo self, you're not looking too good. Nulla vitae elit libero, a pharetra augue. Praesent commodo cursus magna, <a href="#" class="alert-link">vel scelerisque nisl consectetur et</a>.</p>
				</div>
				<div class="alert alert-dismissible alert-danger">
					<button type="button" class="close" data-dismiss="alert"><i class="fa fa-remove"></i></button>
					<strong>Oh snap!</strong> <a href="#" class="alert-link">Change a few things up</a> and try submitting again.
				</div>
				<div class="alert alert-dismissible alert-success">
					<button type="button" class="close" data-dismiss="alert"><i class="fa fa-remove"></i></button>
					<strong>Well done!</strong> You successfully read <a href="#" class="alert-link">this important alert message</a>.
				</div>
				<div class="alert alert-dismissible alert-info">
					<button type="button" class="close" data-dismiss="alert"><i class="fa fa-remove"></i></button>
					<strong>Heads up!</strong> This <a href="#" class="alert-link">alert needs your attention</a>, but it's not super important.
				</div>
			</div>
		</div>
	</div>
	<div class="col-md-6">
		<div class="panel panel-default">
			<div class="panel-heading">Dialogs</div>
			<div class="panel-body">

				<h4>Popovers</h4>
				<button type="button" class="btn btn-default" data-container="body" data-toggle="popover" data-placement="left" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." data-original-title="" title="">Left</button>

				<button type="button" class="btn btn-default" data-container="body" data-toggle="popover" data-placement="top" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." data-original-title="" title="">Top</button>

				<button type="button" class="btn btn-default" data-container="body" data-toggle="popover" data-placement="bottom" data-content="Vivamus
sagittis lacus vel augue laoreet rutrum faucibus." data-original-title="" title="">Bottom</button>

				<button type="button" class="btn btn-default" data-container="body" data-toggle="popover" data-placement="right" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." data-original-title="" title="">Right</button>

				<hr>
				<h4>Tooltips</h4>
				<button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="left" title="" data-original-title="Tooltip on left">Left</button>

				<button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="top" title="" data-original-title="Tooltip on top">Top</button>

				<button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Tooltip on bottom">Bottom</button>

				<button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="right" title="" data-original-title="Tooltip on right">Right</button>

				<hr>
				<h4>Modals</h4>
				<!-- Button trigger modal -->
				<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
					Launch demo modal
				</button>

				<!-- Modal -->
				<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
								<h4 class="modal-title" id="myModalLabel">Modal title</h4>
							</div>
							<div class="modal-body">
								...
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
								<button type="button" class="btn btn-primary">Save changes</button>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>
</div>
<div class="panel panel-default">
	<div class="panel-heading">Progress Bars</div>
	<div class="panel-body">
	
		<h4>Basic</h4>
		
		<div class="progress">
		  <div class="progress-bar" style="width: 60%;"></div>
		</div>
		
		<h4>Contextual alternatives</h4>
		
		<div class="progress">
		  <div class="progress-bar progress-bar-info" style="width: 20%"></div>
		</div>

		<div class="progress">
		  <div class="progress-bar progress-bar-success" style="width: 40%"></div>
		</div>

		<div class="progress">
		  <div class="progress-bar progress-bar-warning" style="width: 60%"></div>
		</div>

		<div class="progress">
		  <div class="progress-bar progress-bar-danger" style="width: 80%"></div>
		</div>
		
		<h4>Striped</h4>
		
		<div class="progress progress-striped">
		  <div class="progress-bar progress-bar-info" style="width: 20%"></div>
		</div>

		<div class="progress progress-striped">
		  <div class="progress-bar progress-bar-success" style="width: 40%"></div>
		</div>

		<div class="progress progress-striped">
		  <div class="progress-bar progress-bar-warning" style="width: 60%"></div>
		</div>

		<div class="progress progress-striped">
		  <div class="progress-bar progress-bar-danger" style="width: 80%"></div>
		</div>
		
		<h4>Animated</h4>
		
		<div class="progress progress-striped active">
		  <div class="progress-bar" style="width: 45%"></div>
		</div>
		
		<h4>Stacked</h4>
		
		<div class="progress">
		  <div class="progress-bar progress-bar-success" style="width: 35%"></div>
		  <div class="progress-bar progress-bar-warning" style="width: 20%"></div>
		  <div class="progress-bar progress-bar-danger" style="width: 10%"></div>
		</div>
		
	</div>
</div>
@endsection
