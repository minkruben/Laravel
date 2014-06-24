<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title> Learning Laravel Website</title>
	<link rel="stylesheet"  href="//maxcdn.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
	<script src="https://code.jquery.com/jquery.js"></script>
	<script src="//maxcda.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.js"></script>
</head>
<body>
	<div class="container col-md-8 col-md-offset-2">
		<nav class="navbar navbar-default" role="navigation">
			<div class="navnar-header">
				<ul class="nav navbar-nav">
					<li class="active"><a href="./">Home</a></li>
					<li><a href="./about">About</a></li>
					<li><a href="./contact">Contact</a></li>
				</ul>
			</div>
		</nav>
		@yield('content')
	</div>
</body>
</html>