<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Records|Highway Code</title>

	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="">
    
	<meta name="description" content="">

	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/animate.min.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/nivo-lightbox.css">
	<link rel="stylesheet" href="css/nivo_themes/default/default.css">
	<link rel="stylesheet" href="css/client.css">
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
			<a href="/adminhome" class="navbar-brand">HIGHWAY CODE</a>
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


<section id="client" class="parallax-section">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12">
				<h1>RECORDS</h1>
			</div>
		</div>
	</div>		
</section>


<section id="menu" class="parallax-section">
	<div class="container">
		<div class="row">
			<div class="col-md-offset-2 col-md-8 col-sm-12 text-center">
				<h1 class="heading">Registered Offenses</h1>
				<hr>
			</div>

			<div class="menu">
            <table style="width: 100%;">
        <tr>
            <th style="padding:0 15px 0 15px;">#</th>
            <th style="padding:0 15px 0 15px;">Driver ID</th>
            <th style="padding:0 15px 0 15px;">Officer ID</th>
            <th style="padding:0 15px 0 15px;">Status</th>
        </tr>
        @foreach ($committedOffensesFinal as $committed_offenses_finalsy)
        <tr>
            <td style="padding:0 15px 0 15px;">{{$committed_offenses_finalsy->co_ID}}</td>
            <td style="padding:0 15px 0 15px;">{{$committed_offenses_finalsy->driverId}}</td>
            <td style="padding:0 15px 0 15px;">{{$committed_offenses_finalsy->officerId}}</td>
            <td style="padding:0 15px 0 15px;">{{$committed_offenses_finalsy->status}}</td>
        </tr>
        @endforeach
           
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
