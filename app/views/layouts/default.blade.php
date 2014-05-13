<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	
	<title>Laravel Sample</title>
	
	{{ HTML::style('css/application.css') }} 
	{{ HTML::script('js/bootstrap.min.js') }}
</head>
<body>

	<div class="navbar navbar-fixed-top" role="navigation">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="/">Laravel Sample</a>
			</div>
		</div>
	</div>
		
	<div class="content">
		<div class="container">
			<hr />
			<div id="main" class="row">
				@yield('content')
			</div>
		</div>
	</div>
</body>
</html>
