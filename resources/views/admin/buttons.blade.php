@extends('layouts.admin')

@section('page-title')
<h2 class="page-title">Buttons</h2>
@endsection

@section('content')

<div class="row">

	<div class="col-md-6">

		<div class="panel panel-default">
			<div class="panel-heading">Default Buttons</div>
			<div class="panel-body">
				<h4>Normal Buttons</h4>
				<!-- Active buttons -->
				<a href="#" class="btn btn-default">Default</a>
				<a href="#" class="btn btn-primary">Primary</a>
				<a href="#" class="btn btn-success">Success</a>
				<a href="#" class="btn btn-info">Info</a>
				<a href="#" class="btn btn-warning">Warning</a>
				<a href="#" class="btn btn-danger">Danger</a>
				<a href="#" class="btn btn-link">Link</a>

				<hr>
				<h4>Disabled buttons</h4>
				<!-- Disables buttons -->
				<a href="#" class="btn btn-default disabled">Default</a>
				<a href="#" class="btn btn-primary disabled">Primary</a>
				<a href="#" class="btn btn-success disabled">Success</a>
				<a href="#" class="btn btn-info disabled">Info</a>
				<a href="#" class="btn btn-warning disabled">Warning</a>
				<a href="#" class="btn btn-danger disabled">Danger</a>
				<a href="#" class="btn btn-link disabled">Link</a>

				<hr>
				<h4>Dropdown buttons</h4>
				<!-- Dropdown buttons -->
				<div class="btn-group">
					<a href="#" class="btn btn-default">Default</a>
					<a href="#" class="btn btn-default dropdown-toggle" data-toggle="dropdown"><span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="#">Action</a></li>
						<li><a href="#">Another action</a></li>
						<li><a href="#">Something else here</a></li>
						<li class="divider"></li>
						<li><a href="#">Separated link</a></li>
					</ul>
				</div>

				<div class="btn-group">
					<a href="#" class="btn btn-primary">Primary</a>
					<a href="#" class="btn btn-primary dropdown-toggle" data-toggle="dropdown"><span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="#">Action</a></li>
						<li><a href="#">Another action</a></li>
						<li><a href="#">Something else here</a></li>
						<li class="divider"></li>
						<li><a href="#">Separated link</a></li>
					</ul>
				</div>

				<div class="btn-group">
					<a href="#" class="btn btn-success">Success</a>
					<a href="#" class="btn btn-success dropdown-toggle" data-toggle="dropdown"><span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="#">Action</a></li>
						<li><a href="#">Another action</a></li>
						<li><a href="#">Something else here</a></li>
						<li class="divider"></li>
						<li><a href="#">Separated link</a></li>
					</ul>
				</div>

				<div class="btn-group">
					<a href="#" class="btn btn-info">Info</a>
					<a href="#" class="btn btn-info dropdown-toggle" data-toggle="dropdown"><span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="#">Action</a></li>
						<li><a href="#">Another action</a></li>
						<li><a href="#">Something else here</a></li>
						<li class="divider"></li>
						<li><a href="#">Separated link</a></li>
					</ul>
				</div>

				<div class="btn-group">
					<a href="#" class="btn btn-warning">Warning</a>
					<a href="#" class="btn btn-warning dropdown-toggle" data-toggle="dropdown"><span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="#">Action</a></li>
						<li><a href="#">Another action</a></li>
						<li><a href="#">Something else here</a></li>
						<li class="divider"></li>
						<li><a href="#">Separated link</a></li>
					</ul>
				</div>

				<hr>
				<h4>Button sizes</h4>
				<!-- Button sizes -->
				<a href="#" class="btn btn-primary btn-lg">Large button</a>
				<a href="#" class="btn btn-primary">Default button</a>
				<a href="#" class="btn btn-primary btn-sm">Small button</a>
				<a href="#" class="btn btn-primary btn-xs">Mini button</a>
			</div>
		</div>

		<div class="panel panel-default">
			<div class="panel-heading">Fontawesome circle Buttons</div>
			<div class="panel-body">
				<h4>Normal Circle Buttons</h4>
				<button type="button" class="btn btn-default btn-circle"><i class="fa fa-check"></i>
				</button>
				<button type="button" class="btn btn-primary btn-circle"><i class="fa fa-list"></i>
				</button>
				<button type="button" class="btn btn-success btn-circle"><i class="fa fa-link"></i>
				</button>
				<button type="button" class="btn btn-info btn-circle"><i class="fa fa-check"></i>
				</button>
				<button type="button" class="btn btn-warning btn-circle"><i class="fa fa-times"></i>
				</button>
				<button type="button" class="btn btn-danger btn-circle"><i class="fa fa-heart"></i>
				</button>
				<br>
				<br>
				<h4>Large Circle Buttons</h4>
				<button type="button" class="btn btn-default btn-circle btn-lg"><i class="fa fa-check"></i>
				</button>
				<button type="button" class="btn btn-primary btn-circle btn-lg"><i class="fa fa-list"></i>
				</button>
				<button type="button" class="btn btn-success btn-circle btn-lg"><i class="fa fa-link"></i>
				</button>
				<button type="button" class="btn btn-info btn-circle btn-lg"><i class="fa fa-check"></i>
				</button>
				<button type="button" class="btn btn-warning btn-circle btn-lg"><i class="fa fa-times"></i>
				</button>
				<button type="button" class="btn btn-danger btn-circle btn-lg"><i class="fa fa-heart"></i>
				</button>
				<br>
				<br>
				<h4>Extra Large Circle Buttons</h4>
				<button type="button" class="btn btn-default btn-circle btn-xl"><i class="fa fa-check"></i>
				</button>
				<button type="button" class="btn btn-primary btn-circle btn-xl"><i class="fa fa-list"></i>
				</button>
				<button type="button" class="btn btn-success btn-circle btn-xl"><i class="fa fa-link"></i>
				</button>
				<button type="button" class="btn btn-info btn-circle btn-xl"><i class="fa fa-check"></i>
				</button>
				<button type="button" class="btn btn-warning btn-circle btn-xl"><i class="fa fa-times"></i>
				</button>
				<button type="button" class="btn btn-danger btn-circle btn-xl"><i class="fa fa-heart"></i>
				</button>
			</div>
		</div>

	</div>

	<div class="col-md-6">
		<div class="panel panel-default">
			<div class="panel-heading">Social Buttons</div>
			<div class="panel-body">

				<a class="btn btn-block btn-social btn-adn">
					<span class="fa fa-adn"></span> Sign in with App.net
				</a>
				<a class="btn btn-block btn-social btn-bitbucket">
					<span class="fa fa-bitbucket"></span> Sign in with Bitbucket
				</a>
				<a class="btn btn-block btn-social btn-dropbox">
					<span class="fa fa-dropbox"></span> Sign in with Dropbox
				</a>
				<a class="btn btn-block btn-social btn-facebook">
					<span class="fa fa-facebook"></span> Sign in with Facebook
				</a>
				<a class="btn btn-block btn-social btn-flickr">
					<span class="fa fa-flickr"></span> Sign in with Flickr
				</a>
				<a class="btn btn-block btn-social btn-foursquare">
					<span class="fa fa-foursquare"></span> Sign in with Foursquare
				</a>
				<a class="btn btn-block btn-social btn-github">
					<span class="fa fa-github"></span> Sign in with GitHub
				</a>
				<a class="btn btn-block btn-social btn-google">
					<span class="fa fa-google"></span> Sign in with Google
				</a>
				<a class="btn btn-block btn-social btn-instagram">
					<span class="fa fa-instagram"></span> Sign in with Instagram
				</a>
				<a class="btn btn-block btn-social btn-linkedin">
					<span class="fa fa-linkedin"></span> Sign in with LinkedIn
				</a>
				<a class="btn btn-block btn-social btn-microsoft">
					<span class="fa fa-windows"></span> Sign in with Microsoft
				</a>
				<a class="btn btn-block btn-social btn-odnoklassniki">
					<span class="fa fa-odnoklassniki"></span> Sign in with Odnoklassniki
				</a>
				<a class="btn btn-block btn-social btn-openid">
					<span class="fa fa-openid"></span> Sign in with OpenID
				</a>
				<a class="btn btn-block btn-social btn-pinterest">
					<span class="fa fa-pinterest"></span> Sign in with Pinterest
				</a>
				<a class="btn btn-block btn-social btn-reddit">
					<span class="fa fa-reddit"></span> Sign in with Reddit
				</a>
				<a class="btn btn-block btn-social btn-soundcloud">
					<span class="fa fa-soundcloud"></span> Sign in with SoundCloud
				</a>
				<a class="btn btn-block btn-social btn-tumblr">
					<span class="fa fa-tumblr"></span> Sign in with Tumblr
				</a>
				<a class="btn btn-block btn-social btn-twitter">
					<span class="fa fa-twitter"></span> Sign in with Twitter
				</a>
				<a class="btn btn-block btn-social btn-vimeo">
					<span class="fa fa-vimeo-square"></span> Sign in with Vimeo
				</a>
				<a class="btn btn-block btn-social btn-vk">
					<span class="fa fa-vk"></span> Sign in with VK
				</a>
				<a class="btn btn-block btn-social btn-yahoo">
					<span class="fa fa-yahoo"></span> Sign in with Yahoo!
				</a>

				<hr>

				<div class="text-center">
					<a class="btn btn-social-icon btn-adn" onclick="_gaq.push(['_trackEvent', 'btn-social-icon', 'click', 'btn-adn']);"><span class="fa fa-adn"></span></a>
					<a class="btn btn-social-icon btn-bitbucket" onclick="_gaq.push(['_trackEvent', 'btn-social-icon', 'click', 'btn-bitbucket']);"><span class="fa fa-bitbucket"></span></a>
					<a class="btn btn-social-icon btn-dropbox" onclick="_gaq.push(['_trackEvent', 'btn-social-icon', 'click', 'btn-dropbox']);"><span class="fa fa-dropbox"></span></a>
					<a class="btn btn-social-icon btn-facebook" onclick="_gaq.push(['_trackEvent', 'btn-social-icon', 'click', 'btn-facebook']);"><span class="fa fa-facebook"></span></a>
					<a class="btn btn-social-icon btn-flickr" onclick="_gaq.push(['_trackEvent', 'btn-social-icon', 'click', 'btn-flickr']);"><span class="fa fa-flickr"></span></a>
					<a class="btn btn-social-icon btn-foursquare" onclick="_gaq.push(['_trackEvent', 'btn-social-icon', 'click', 'btn-foursquare']);"><span class="fa fa-foursquare"></span></a>
					<a class="btn btn-social-icon btn-github" onclick="_gaq.push(['_trackEvent', 'btn-social-icon', 'click', 'btn-github']);"><span class="fa fa-github"></span></a>
					<a class="btn btn-social-icon btn-google" onclick="_gaq.push(['_trackEvent', 'btn-social-icon', 'click', 'btn-google']);"><span class="fa fa-google-plus"></span></a>
					<a class="btn btn-social-icon btn-instagram" onclick="_gaq.push(['_trackEvent', 'btn-social-icon', 'click', 'btn-instagram']);"><span class="fa fa-instagram"></span></a>
					<a class="btn btn-social-icon btn-linkedin" onclick="_gaq.push(['_trackEvent', 'btn-social-icon', 'click', 'btn-linkedin']);"><span class="fa fa-linkedin"></span></a>
					<a class="btn btn-social-icon btn-microsoft" onclick="_gaq.push(['_trackEvent', 'btn-social-icon', 'click', 'btn-microsoft']);"><span class="fa fa-windows"></span></a>
					<a class="btn btn-social-icon btn-odnoklassniki" onclick="_gaq.push(['_trackEvent', 'btn-social-icon', 'click', 'btn-odnoklassniki']);"><span class="fa fa-odnoklassniki"></span></a>
					<a class="btn btn-social-icon btn-openid" onclick="_gaq.push(['_trackEvent', 'btn-social-icon', 'click', 'btn-openid']);"><span class="fa fa-openid"></span></a>
					<a class="btn btn-social-icon btn-pinterest" onclick="_gaq.push(['_trackEvent', 'btn-social-icon', 'click', 'btn-pinterest']);"><span class="fa fa-pinterest"></span></a>
					<a class="btn btn-social-icon btn-reddit" onclick="_gaq.push(['_trackEvent', 'btn-social-icon', 'click', 'btn-reddit']);"><span class="fa fa-reddit"></span></a>
					<a class="btn btn-social-icon btn-soundcloud" onclick="_gaq.push(['_trackEvent', 'btn-social-icon', 'click', 'btn-soundcloud']);"><span class="fa fa-soundcloud"></span></a>
					<a class="btn btn-social-icon btn-tumblr" onclick="_gaq.push(['_trackEvent', 'btn-social-icon', 'click', 'btn-tumblr']);"><span class="fa fa-tumblr"></span></a>
					<a class="btn btn-social-icon btn-twitter" onclick="_gaq.push(['_trackEvent', 'btn-social-icon', 'click', 'btn-twitter']);"><span class="fa fa-twitter"></span></a>
					<a class="btn btn-social-icon btn-vimeo" onclick="_gaq.push(['_trackEvent', 'btn-social-icon', 'click', 'btn-vimeo']);"><span class="fa fa-vimeo-square"></span></a>
					<a class="btn btn-social-icon btn-vk" onclick="_gaq.push(['_trackEvent', 'btn-social-icon', 'click', 'btn-vk']);"><span class="fa fa-vk"></span></a>
					<a class="btn btn-social-icon btn-yahoo" onclick="_gaq.push(['_trackEvent', 'btn-social-icon', 'click', 'btn-yahoo']);"><span class="fa fa-yahoo"></span></a>
				</div>
			</div>
		</div>
	</div>

</div>
@endsection
