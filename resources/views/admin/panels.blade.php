@extends('layouts.admin')

@section('page-title')
<h2 class="page-title">Panels and Wells</h2>
@endsection

@section('content')

<div class="row">
	<div class="col-md-4">
		<div class="panel panel-default">
			<div class="panel-body">
				Basic panel
			</div>
		</div>

		<div class="panel panel-default">
			<div class="panel-heading">Panel heading</div>
			<div class="panel-body">
				Panel content
			</div>
		</div>

		<div class="panel panel-default">
			<div class="panel-body">
				Panel content
			</div>
			<div class="panel-footer">Panel footer</div>
		</div>
	</div>
	<div class="col-md-4">
		<div class="panel panel-primary">
			<div class="panel-heading">
				<h3 class="panel-title">Panel primary</h3>
			</div>
			<div class="panel-body">
				Panel content
			</div>
		</div>

		<div class="panel panel-success">
			<div class="panel-heading">
				<h3 class="panel-title">Panel success</h3>
			</div>
			<div class="panel-body">
				Panel content
			</div>
		</div>

		<div class="panel panel-warning">
			<div class="panel-heading">
				<h3 class="panel-title">Panel warning</h3>
			</div>
			<div class="panel-body">
				Panel content
			</div>
		</div>
	</div>
	<div class="col-md-4">
		<div class="panel panel-danger">
			<div class="panel-heading">
				<h3 class="panel-title">Panel danger</h3>
			</div>
			<div class="panel-body">
				Panel content
			</div>
		</div>

		<div class="panel panel-info">
			<div class="panel-heading">
				<h3 class="panel-title">Panel info</h3>
			</div>
			<div class="panel-body">
				Panel content
			</div>
		</div>
	</div>
</div>

<div class="panel panel-default">
	<div class="panel-heading">Collapsible Accordion Panel Group</div>
	<div class="panel-body">
		<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
			<div class="panel panel-default">
				<div class="panel-heading" role="tab" id="headingOne">
					<h4 class="panel-title">
<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
Collapsible Group Item #1
</a>
</h4>
				</div>
				<div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
					<div class="panel-body">
						Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
					</div>
				</div>
			</div>
			<div class="panel panel-default">
				<div class="panel-heading" role="tab" id="headingTwo">
					<h4 class="panel-title">
<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
Collapsible Group Item #2
</a>
</h4>
				</div>
				<div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
					<div class="panel-body">
						Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
					</div>
				</div>
			</div>
			<div class="panel panel-default">
				<div class="panel-heading" role="tab" id="headingThree">
					<h4 class="panel-title">
<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
Collapsible Group Item #3
</a>
</h4>
				</div>
				<div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
					<div class="panel-body">
						Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="row">
	<div class="col-md-12">
		<div class="panel panel-default">
			<div class="panel-heading">Basic Tabs</div>
			<div class="panel-body">
				<ul class="nav nav-tabs">
					<li class=""><a href="#home" data-toggle="tab" aria-expanded="false">Home</a></li>
					<li class="active"><a href="#profile" data-toggle="tab" aria-expanded="true">Profile</a></li>
					<li class="disabled"><a>Disabled</a></li>
					<li class="dropdown">
						<a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
					  Dropdown <span class="caret"></span>
					</a>
						<ul class="dropdown-menu">
							<li><a href="#dropdown1" data-toggle="tab">Action</a></li>
							<li class="divider"></li>
							<li><a href="#dropdown2" data-toggle="tab">Another action</a></li>
						</ul>
					</li>
				</ul>
				<br>
				<div id="myTabContent" class="tab-content">
					<div class="tab-pane fade" id="home">
						<p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid. Aliquip placeat salvia cillum iphone. Seitan aliquip quis cardigan american apparel, butcher voluptate nisi qui.</p>
					</div>
					<div class="tab-pane fade active in" id="profile">
						<p>Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo booth letterpress, commodo enim craft beer mlkshk aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthetic magna delectus mollit.</p>
					</div>
					<div class="tab-pane fade" id="dropdown1">
						<p>Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney's organic lomo retro fanny pack lo-fi farm-to-table readymade. Messenger bag gentrify pitchfork tattooed craft beer, iphone skateboard locavore carles etsy salvia banksy hoodie helvetica. DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork.</p>
					</div>
					<div class="tab-pane fade" id="dropdown2">
						<p>Trust fund seitan letterpress, keytar raw denim keffiyeh etsy art party before they sold out master cleanse gluten-free squid scenester freegan cosby sweater. Fanny pack portland seitan DIY, art party locavore wolf cliche high life echo park Austin. Cred vinyl keffiyeh DIY salvia PBR, banh mi before they sold out farm-to-table VHS viral locavore cosby sweater.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="row">
	<div class="col-md-4">
		<div class="well">
			Look, I'm in a well!
		</div>
	</div>
	<div class="col-md-4">
		<div class="well well-sm">
			Look, I'm in a small well!
		</div>
	</div>
	<div class="col-md-4">
		<div class="well well-lg">
			Look, I'm in a large well!
		</div>
	</div>
</div>

<div class="jumbotron">
	<h1>Jumbotron</h1>
	<p>This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
	<p><a class="btn btn-primary btn-lg">Learn more</a></p>
</div>
@endsection
