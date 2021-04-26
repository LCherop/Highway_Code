<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Info|Highway Code</title>

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
			<a href="#" class="navbar-brand">HIGHWAY CODE</a>
		</div>
		<div class="collapse navbar-collapse">
			<ul class="nav navbar-nav navbar-right">
				<li><a href="/home" class="smoothScroll">HOME</a></li>
				<li><a href="/precords" class="smoothScroll">RECORDS</a></li>
				<li><a href="/dashboard" class="smoothScroll">PROFILE</a></li>
				<li><a href="/alloffenses" class="smoothScroll">INFO</a></li>
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
				<h1>INFO</h1>
			</div>
			
		</div>
	</div>		
</section>


<section id="menu" class="parallax-section">
	<div class="container">
		<div class="row">
			<div class="col-md-offset-2 col-md-8 col-sm-12 text-center">
				<h1 class="heading">Common Offenses</h1>
				<hr>
			</div>

			<div class="menu">
                <table>
                    <tr>
                        <th>Offense Number</th>
                        <th>Offense ID</th>
                        <th>Description</th>
                        <th>Fine</th>
                        <th>Created At</th>
                        <th>Updated At</th>
                    </tr>
            @foreach ($offences as $offence)
                    <tr>
                        <td>{{$offence->offenseNo}}</td>
                        <td>{{$offence->offenseId}}</td>
                        <td>{{$offence->description}}</td>
                        <td>{{$offence->offenseFine}}</td>
                        <td>{{$offence->created_at}}</td>
                        <td>{{$offence->updated_at}}</td>
                    </tr>
            @endforeach
                </table>
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
