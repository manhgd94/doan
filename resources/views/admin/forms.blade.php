@extends('layouts.admin')

@section('page-title')
<h2 class="page-title">Forms</h2>
@endsection

@section('content')

<div class="row">
	<div class="col-md-6">
		<div class="panel panel-default">
			<div class="panel-heading">Form fields</div>
			<div class="panel-body">
				<form method="get" class="form-horizontal">
					<div class="form-group">
						<label class="col-sm-2 control-label">Normal</label>
						<div class="col-sm-10">
							<input type="text" class="form-control">
						</div>
					</div>
					<div class="hr-dashed"></div>
					<div class="form-group">
						<label class="col-sm-2 control-label">Help text</label>
						<div class="col-sm-10">
							<input type="text" class="form-control"><span class="help-block m-b-none">A block of help text that breaks onto a new line and may extend beyond one line.</span> </div>
					</div>
					<div class="hr-dashed"></div>
					<div class="form-group">
						<label class="col-sm-2 control-label">Password</label>
						<div class="col-sm-10">
							<input type="password" class="form-control" name="password">
						</div>
					</div>
					<div class="hr-dashed"></div>
					<div class="form-group">
						<label class="col-sm-2 control-label">Placeholder</label>
						<div class="col-sm-10">
							<input type="text" placeholder="placeholder" class="form-control">
						</div>
					</div>
					<div class="hr-dashed"></div>
					<div class="form-group">
						<label class="col-lg-2 control-label">Disabled</label>
						<div class="col-lg-10">
							<input type="text" disabled="" placeholder="Disabled input here..." class="form-control">
						</div>
					</div>
					<div class="hr-dashed"></div>
					<div class="form-group">
						<label class="col-lg-2 control-label">Static control</label>
						<div class="col-lg-10">
							<p class="form-control-static">email@example.com</p>
						</div>
					</div>
					<div class="hr-dashed"></div>
					<div class="form-group">
						<label class="col-lg-2 control-label">Rate Picker</label>
						<div class="col-lg-10" id="rate_1">
							<div class="input-group" id="datepicker">
								<input type="text" class=" form-control" name="start" value="" />
								<span class="input-group-addon">USDD + </span>
								<input type="text" class=" form-control" name="end" value="" />
								<span class="input-group-addon">%</span>
							</div>
						</div>
					</div>

					<div class="hr-dashed"></div>
					<input id="input-43" type="file" multiple>
					<div id="errorBlock43" class="help-block"></div>
					<div class="hr-dashed"></div>
					<div class="form-group">
						<div class="col-sm-8 col-sm-offset-2">
							<button class="btn btn-default" type="submit">Cancel</button>
							<button class="btn btn-primary" type="submit">Save changes</button>
						</div>
					</div>

				</form>

			</div>
		</div>
	</div>
	<div class="col-md-6">
		<div class="panel panel-default">
			<div class="panel-heading">Awesome bootstrap checkboxes</div>
			<div class="panel-body">
				<form method="get" class="form-horizontal">
					<div class="form-group">
						<label class="col-sm-2 control-label">Checkboxes
							<br>
						</label>
						<div class="col-sm-10">
							<div class="checkbox">
								<input id="checkbox1" type="checkbox">
								<label for="checkbox1">
									Default
								</label>
							</div>
							<div class="checkbox checkbox-primary">
								<input id="checkbox2" type="checkbox" checked>
								<label for="checkbox2">
									Primary
								</label>
							</div>
							<div class="checkbox checkbox-success">
								<input id="checkbox3" type="checkbox">
								<label for="checkbox3">
									Success
								</label>
							</div>
							<div class="checkbox checkbox-info">
								<input id="checkbox4" type="checkbox">
								<label for="checkbox4">
									Info
								</label>
							</div>
							<div class="checkbox checkbox-warning">
								<input id="checkbox5" type="checkbox" checked>
								<label for="checkbox5">
									Warning
								</label>
							</div>
							<div class="checkbox checkbox-danger">
								<input id="checkbox6" type="checkbox" checked>
								<label for="checkbox6">
									Check me out
								</label>
							</div>
						</div>
					</div>
					<div class="hr-dashed"></div>
					<div class="form-group">
						<label class="col-sm-2 control-label">Inline
							<br>
						</label>
						<div class="col-sm-10">
							<div class="checkbox checkbox-inline">
								<input type="checkbox" id="inlineCheckbox1" value="option1">
								<label for="inlineCheckbox1"> Inline One </label>
							</div>
							<div class="checkbox checkbox-success checkbox-inline">
								<input type="checkbox" id="inlineCheckbox2" value="option1" checked>
								<label for="inlineCheckbox2"> Inline Two </label>
							</div>
							<div class="checkbox checkbox-inline">
								<input type="checkbox" id="inlineCheckbox3" value="option1">
								<label for="inlineCheckbox3"> Inline Three </label>
							</div>
						</div>
					</div>

					<div class="hr-dashed"></div>
					<div class="form-group">
						<label class="col-sm-2 control-label">Circled
							<br>
						</label>
						<div class="col-sm-10">
							<div class="checkbox checkbox-circle">
								<input id="checkbox7" type="checkbox">
								<label for="checkbox7">
									Simply Rounded
								</label>
							</div>
							<div class="checkbox checkbox-info checkbox-circle">
								<input id="checkbox8" type="checkbox" checked>
								<label for="checkbox8">
									Me too
								</label>
							</div>
						</div>
					</div>

					<div class="hr-dashed"></div>
					<div class="form-group">
						<label class="col-sm-2 control-label">Disabled
							<br>
						</label>
						<div class="col-sm-10">
							<div class="checkbox">
								<input id="checkbox9" type="checkbox" disabled>
								<label for="checkbox9">
									Can't check this
								</label>
							</div>
							<div class="checkbox checkbox-success">
								<input id="checkbox10" type="checkbox" disabled checked>
								<label for="checkbox10">
									This too
								</label>
							</div>
							<div class="checkbox checkbox-warning checkbox-circle">
								<input id="checkbox11" type="checkbox" disabled checked>
								<label for="checkbox11">
									And this
								</label>
							</div>
						</div>
					</div>

					<div class="hr-dashed"></div>
					<div class="form-group">
						<label class="col-sm-2 control-label">Radio
							<br>
						</label>
						<div class="col-sm-5">
							<div class="radio">
								<input type="radio" name="radio1" id="radio1" value="option1" checked>
								<label for="radio1">
									Small
								</label>
							</div>
							<div class="radio">
								<input type="radio" name="radio1" id="radio2" value="option2">
								<label for="radio2">
									Big
								</label>
							</div>
						</div>
						<div class="col-sm-5">
							<div class="radio radio-danger">
								<input type="radio" name="radio2" id="radio3" value="option1">
								<label for="radio3">
									Next
								</label>
							</div>
							<div class="radio radio-danger">
								<input type="radio" name="radio2" id="radio4" value="option2" checked>
								<label for="radio4">
									One
								</label>
							</div>
						</div>
					</div>

					<div class="hr-dashed"></div>
					<div class="form-group">
						<label class="col-sm-2 control-label">Inline Radios
							<br>
						</label>
						<div class="col-sm-10">
							<div class="radio radio-info radio-inline">
								<input type="radio" id="inlineRadio1" value="option1" name="radioInline" checked>
								<label for="inlineRadio1"> Inline One </label>
							</div>
							<div class="radio radio-inline">
								<input type="radio" id="inlineRadio2" value="option2" name="radioInline">
								<label for="inlineRadio2"> Inline Two </label>
							</div>
						</div>
					</div>

					<div class="hr-dashed"></div>
					<div class="form-group">
						<label class="col-sm-2 control-label">Disabled Raido
							<br>
						</label>
						<div class="col-sm-10">
							<div class="radio radio-danger">
								<input type="radio" name="radio3" id="radio5" value="option1" disabled>
								<label for="radio5">
									Next
								</label>
							</div>
							<div class="radio">
								<input type="radio" name="radio3" id="radio6" value="option2" checked disabled>
								<label for="radio6">
									One
								</label>
							</div>
						</div>
					</div>


				</form>
			</div>
		</div>
	</div>
</div>

<div class="panel panel-default">
	<div class="panel-heading">More input forms</div>
	<div class="panel-body">
		<form method="get" class="form-horizontal">
			<div class="form-group">
				<label class="col-sm-2 control-label">Control sizing</label>
				<div class="col-sm-10">
					<input type="text" placeholder=".input-lg" class="form-control input-lg mb">
					<input type="text" placeholder="Default input" class="form-control mb">
					<input type="text" placeholder=".input-sm" class="form-control input-sm">
				</div>
			</div>
			<div class="hr-dashed"></div>
			<div class="form-group">
				<label class="col-sm-2 control-label">Column sizing</label>
				<div class="col-sm-10">
					<div class="row">
						<div class="col-xs-2">
							<input type="text" class="form-control" placeholder=".col-xs-2">
						</div>
						<div class="col-xs-3">
							<input type="text" class="form-control" placeholder=".col-xs-3">
						</div>
						<div class="col-xs-4">
							<input type="text" class="form-control" placeholder=".col-xs-4">
						</div>
					</div>
				</div>
			</div>
			<div class="hr-dashed"></div>
			<div class="form-group">
				<label class="col-sm-2 control-label">Input groups</label>

				<div class="col-sm-10">
					<div class="input-group mb"><span class="input-group-addon">@</span>
						<input type="text" placeholder="Username" class="form-control">
					</div>
					<div class="input-group mb">
						<input type="text" class="form-control"> <span class="input-group-addon">.00</span></div>
					<div class="input-group mb"><span class="input-group-addon">$</span>
						<input type="text" class="form-control"> <span class="input-group-addon">.00</span></div>
					<div class="input-group mb"><span class="input-group-addon"> <input type="checkbox"> </span>
						<input type="text" class="form-control">
					</div>
					<div class="input-group"><span class="input-group-addon"> <input type="radio"> </span>
						<input type="text" class="form-control">
					</div>
				</div>
			</div>
			<div class="hr-dashed"></div>
			<div class="form-group">
				<label class="col-sm-2 control-label">Search Form</label>
				<div class="col-sm-10">
					<div class="input-group">
						<input type="text" class="form-control">
						<span class="input-group-btn"><button type="button" class="btn btn-primary"><i class="fa fa-search"></i></button></span>
					</div>
				</div>
			</div>
			<div class="hr-line-dashed"></div>
			<div class="form-group">
				<label class="col-sm-2 control-label">With dropdowns</label>

				<div class="col-sm-10">
					<div class="input-group mb">
						<div class="input-group-btn">
							<button class="btn btn-default dropdown-toggle" data-toggle="dropdown" type="button" aria-expanded="false">Action <span class="caret"></span></button>
							<ul class="dropdown-menu">
								<li><a href="">Action</a></li>
								<li><a href="">Another action</a></li>
								<li><a href="">Something else here</a></li>
								<li class="divider"></li>
								<li><a href="">Separated link</a></li>
							</ul>
						</div>
						<input type="text" class="form-control">
					</div>
					<div class="input-group">
						<input type="text" class="form-control">

						<div class="input-group-btn">
							<button class="btn btn-default dropdown-toggle" data-toggle="dropdown" type="button">Action <span class="caret"></span></button>
							<ul class="dropdown-menu pull-right">
								<li><a href="">Action</a></li>
								<li><a href="">Another action</a></li>
								<li><a href="">Something else here</a></li>
								<li class="divider"></li>
								<li><a href="">Separated link</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="hr-line-dashed"></div>
			<div class="form-group">
				<label class="col-sm-2 control-label">Segmented</label>

				<div class="col-sm-10">
					<div class="input-group mb">
						<div class="input-group-btn">
							<button tabindex="-1" class="btn btn-default" type="button">Action</button>
							<button class="btn btn-default dropdown-toggle" data-toggle="dropdown" type="button"><span class="caret"></span></button>
							<ul class="dropdown-menu">
								<li><a href="">Action</a></li>
								<li><a href="">Another action</a></li>
								<li><a href="">Something else here</a></li>
								<li class="divider"></li>
								<li><a href="">Separated link</a></li>
							</ul>
						</div>
						<input type="text" class="form-control">
					</div>
					<div class="input-group">
						<input type="text" class="form-control">


						<div class="input-group-btn">
							<button tabindex="-1" class="btn btn-default" type="button">Action</button>
							<button class="btn btn-default dropdown-toggle" data-toggle="dropdown" type="button"><span class="caret"></span></button>
							<ul class="dropdown-menu pull-right">
								<li><a href="">Action</a></li>
								<li><a href="">Another action</a></li>
								<li><a href="">Something else here</a></li>
								<li class="divider"></li>
								<li><a href="">Separated link</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="hr-dashed"></div>
			<div class="form-group">
				<label class="col-sm-2 control-label">Textarea</label>
				<div class="col-sm-10">
					<textarea class="form-control" rows="3"></textarea>
				</div>
			</div>
			<div class="hr-dashed"></div>
			<div class="form-group">
				<label class="col-sm-2 control-label">Select</label>
				<div class="col-sm-10">
					<select class="form-control">
						<option>1</option>
						<option>2</option>
						<option>3</option>
						<option>4</option>
						<option>5</option>
					</select>
				</div>
			</div>
			<div class="hr-dashed"></div>

			<div class="form-group">
				<label class="col-sm-2 control-label">Select</label>
				<div class="col-sm-10">
					<select class="selectpicker">
						<optgroup label="Picnic">
							<option>Mustard</option>
							<option>Ketchup</option>
							<option>Relish</option>
						</optgroup>
						<optgroup label="Camping">
							<option>Tent</option>
							<option>Flashlight</option>
							<option>Toilet Paper</option>
						</optgroup>
					</select>

					<select class="selectpicker" multiple data-selected-text-format="count">
						<option>Mustard</option>
						<option>Ketchup</option>
						<option>Relish</option>
					</select>
				</div>
			</div>
			<div class="hr-dashed"></div>
			<div class="form-group">
				<div class="col-sm-8 col-sm-offset-2">
					<button class="btn btn-default" type="submit">Cancel</button>
					<button class="btn btn-primary" type="submit">Save changes</button>
				</div>
			</div>
		</form>

	</div>
</div>
@endsection