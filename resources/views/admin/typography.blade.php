@extends('layouts.admin')

@section('page-title')
<h2 class="page-title">Typography</h2>
@endsection

@section('content')

<div class="row">
	<div class="col-md-4">
		<div class="panel panel-default">
			<div class="panel-heading">Headings</div>
			<div class="panel-body">
				<h1>Heading 1</h1>
				<h2>Heading 2</h2>
				<h3>Heading 3</h3>
				<h4>Heading 4</h4>
				<h5>Heading 5</h5>
				<h6>Heading 6</h6>
				<p class="lead">Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
			</div>
		</div>
	</div>
	<div class="col-md-4">
		<div class="panel panel-default">
			<div class="panel-heading">Text</div>
			<div class="panel-body">
				<h2>Example body text</h2>
				<p>Nullam quis risus eget <a href="#">urna mollis ornare</a> vel eu leo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nullam id dolor id nibh ultricies vehicula.</p>
				<p><small>This line of text is meant to be treated as fine print.</small></p>
				<p>The following snippet of text is <strong>rendered as bold text</strong>.</p>
				<p>The following snippet of text is <em>rendered as italicized text</em>.</p>
				<p>An abbreviation of the word attribute is <abbr title="attribute">attr</abbr>.</p>
			</div>
		</div>
	</div>
	<div class="col-md-4">
		<div class="panel panel-default">
			<div class="panel-heading">Emphasis</div>
			<div class="panel-body">
				<h2>Emphasis classes</h2>
				<p class="text-muted">Fusce dapibus, tellus ac cursus commodo, tortor mauris nibh.</p>
				<p class="text-primary">Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
				<p class="text-warning">Etiam porta sem malesuada magna mollis euismod.</p>
				<p class="text-danger">Donec ullamcorper nulla non metus auctor fringilla.</p>
				<p class="text-success">Duis mollis, est non commodo luctus, nisi erat porttitor ligula.</p>
				<p class="text-info">Maecenas sed diam eget risus varius blandit sit amet non magna.</p>
			</div>
		</div>
	</div>

</div>

<div class="row">

	<div class="col-md-6">
		<div class="panel panel-default">
			<div class="panel-heading">Blockqutes Left</div>
			<div class="panel-body">
				<blockquote>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
					<small>Someone famous in <cite title="Source Title">Source Title</cite></small>
				</blockquote>
			</div>
		</div>
	</div>
	<div class="col-md-6">
		<div class="panel panel-default">
			<div class="panel-heading">Blockquote Right</div>
			<div class="panel-body">
				<blockquote class="blockquote-reverse">
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
					<small>Someone famous in <cite title="Source Title">Source Title</cite></small>
				</blockquote>
			</div>
		</div>
	</div>
</div>

<div class="row">
	<div class="col-md-12">
		<div class="panel panel-default">
			<div class="panel-body">
				<div class="content-format">
					<h2>Example body text in <code>.content-format</code> class</h2>
					<p>Nullam quis risus eget <a href="#">urna mollis ornare</a> vel eu leo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nullam id dolor id nibh ultricies vehicula.</p>
					<p><small>This line of text is meant to be treated as fine print.</small></p>
					<p>The following snippet of text is <strong>rendered as bold text</strong>.</p>
					<p>The following snippet of text is <em>rendered as italicized text</em>.</p>
					<p>An abbreviation of the word attribute is <abbr title="attribute">attr</abbr>.</p>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
