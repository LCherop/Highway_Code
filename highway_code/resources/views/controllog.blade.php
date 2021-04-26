<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Control Log|Highway Code</title>

	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="">
	<meta name="description" content="">

	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/animate.min.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/nivo-lightbox.css">
	<link rel="stylesheet" href="css/nivo_themes/default/default.css">
	<link rel="stylesheet" href="css/admin.css">
	<link href='https://fonts.googleapis.com/css?family=Poppins:400,500' rel='stylesheet' type='text/css'>
</head>


<body>

<section class="preloader">
	<div class="sk-spinner sk-spinner-pulse"></div>
</section>

<section class="navbar navbar-default navbar-fixed-top" role="navigation">
	<div class="container">
		<div class="navbar-header">
			<button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				<span class="icon icon-bar"></span>
				<span class="icon icon-bar"></span>
				<span class="icon icon-bar"></span>
			</button>
			<a href="#" class="navbar-brand">HIGHWAY CODE</a>
		</div>
		<div class="collapse navbar-collapse">
			<ul class="nav navbar-nav navbar-right">
				<li><a href="/adminhome" class="smoothScroll">HOME</a></li>
				<li><a href="/admindashboard" class="smoothScroll">PROFILE</a></li>
				<li><a href="/controllog" class="smoothScroll">CONTROL LOG</a></li>
				<li><a href="/allrecords" class="smoothScroll">RECORDS</a></li>
				<li><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                             class="smoothScroll">LOG OUT</a></li>
                             <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">@csrf</form>
			</ul>
		</div>
	</div>
</section>


<section id="admin" class="parallax-section">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12">
				<h1>ADMIN UNIT</h1>
			</div>
		</div>
	</div>		
</section>


<section id="add" class="parallax-section">
	<div class="container">
		<div class="row">
			<div class="col-md-offset-1 col-md-10 col-sm-12 text-center">
				<h1 class="heading">Register Offence</h1>
				<hr>
			</div>
			<div class="col-md-offset-1 col-md-10 col-sm-12 wow fadeIn" data-wow-delay="0.9s">
				<form action="/controllog/push" method="post" enctype="multipart/form-data">
				@csrf
					<div class="col-md-offset-3 col-md-6 col-sm-offset-3 col-sm-6">
						<input name="offenseId" type="driverid" class="form-control" id="offenseId" placeholder="Offense ID">
				    </div><br><br>
					<div class="col-md-offset-3 col-md-6 col-sm-offset-3 col-sm-6">
						<input name="description" type="officerid" class="form-control" id="description" placeholder="Description">
				    </div><br><br>
					<div class="col-md-offset-3 col-md-6 col-sm-offset-3 col-sm-6">
						<input name="fine" type="offenseno" class="form-control" id="fine" placeholder="Fine">
				    </div><br><br>
					<div class="col-md-offset-3 col-md-6 col-sm-offset-3 col-sm-6">
						<input name="add" type="submit" class="form-control" id="submit" value="Add">
					</div>
				</form>
			</div>
		</div>
	</div>
</section>


<section id="copyright">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12">
				<h3>HIGHWAY CODE</h3>
				<p>Copyright © Highway Code
			</div>
		</div>
	</div>
</section>


<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.parallax.js"></script>
<script src="js/smoothscroll.js"></script>
<script src="js/nivo-lightbox.min.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/index.js"></script>

</body>
</html>