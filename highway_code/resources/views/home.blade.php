<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Home|Highway Code</title>

	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="">
	<meta name="description" content="">

	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/animate.min.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/nivo-lightbox.css">
	<link rel="stylesheet" href="css/nivo_themes/default/default.css">
	<link rel="stylesheet" href="css/index.css">
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
<<<<<<< HEAD
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
=======
			<a href="/" class="navbar-brand">HIGHWAY CODE</a>
		</div>
		<div class="collapse navbar-collapse">
			<ul class="nav navbar-nav navbar-right">
            @if (Route::has('login'))
                <div>                    
                    @auth
                        <a href="{{ url('/dashboard') }}"class="navbar-brand">dashboard</a>
                    @else
                        <a href="{{ route('login') }}"class="navbar-brand">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="navbar-brand">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
>>>>>>> 2695312c74c4a63544f4c06c88030df97f07fc12
			</ul>
		</div>
	</div>
</section>


<section id="home" class="parallax-section">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12">
				<h1>HIGHWAY CODE</h1>
<<<<<<< HEAD
				<a href="/precords" class="smoothScroll btn btn-default">SEE MY RECORDS</a>
=======
				<a href="" class="smoothScroll btn btn-default">SEE MY RECORDS</a>
>>>>>>> 2695312c74c4a63544f4c06c88030df97f07fc12
			</div>
		</div>
	</div>		
</section>


<section id="gallery" class="parallax-section">
	<div class="container">
		<div class="row">
			<div class="col-md-offset-2 col-md-8 col-sm-12 text-center">
				<h1 class="heading">Ensuring Safety On Our Roads</h1>
				<hr>
			</div>
			<div class="col-md-4 col-sm-4 wow fadeInUp" data-wow-delay="0.3s">
				<a href="images/gallery-img1.jpg" data-lightbox-gallery="zenda-gallery"><img src="images/gallery-img1.jpg" alt="gallery img"></a>
				
				<a href="images/gallery-img2.jpg" data-lightbox-gallery="zenda-gallery"><img src="images/gallery-img2.jpg" alt="gallery img"></a>
				
			</div>
			<div class="col-md-4 col-sm-4 wow fadeInUp" data-wow-delay="0.6s">
				<a href="images/gallery-img3.jpg" data-lightbox-gallery="zenda-gallery"><img src="images/gallery-img3.jpg" alt="gallery img"></a>
				
			</div>
			<div class="col-md-4 col-sm-4 wow fadeInUp" data-wow-delay="0.9s">
				<a href="images/gallery-img4.jpg" data-lightbox-gallery="zenda-gallery"><img src="images/gallery-img4.jpg" alt="gallery img"></a>
	
				<a href="images/gallery-img5.jpg" data-lightbox-gallery="zenda-gallery"><img src="images/gallery-img5.jpg" alt="gallery img"></a>
				
			</div>
		</div>
	</div>
</section>


<section id="about" class="parallax-section">
	<div class="container">
		<div class="row">
			<div class="col-md-offset-2 col-md-8 col-sm-12 text-center">
				<h1 class="heading">FACT OF THE DAY</h1>
				<hr>

<<<<<<< HEAD
				<p>La Pâtisserie is a Kenyan owned bakery that seeks to bring French flavour to the local scene. We are one of only a handful few enduring Craft Bakeries in Nairobi. We have assembled our notoriety on consolidating great quality conventional heating with great incentive for cash. We offer our clients a full scope of breads, forte breads, morning merchandise, cakes and baked goods. Our pastry specialists work with the goal that the portion you purchase is crisp out of the stove. We keep on satisfying the requirements and wants of our clients with a menu of fixing enlivened, arranged to-arrange nourishment.</p>
			</div>
=======
				<p></p>	
            </div>

>>>>>>> 2695312c74c4a63544f4c06c88030df97f07fc12
		</div>
	</div>
</section>		


<section id="contact" class="parallax-section">
	<div class="container">
		<div class="row">
			<div class="col-md-offset-1 col-md-10 col-sm-12 text-center">
				<h1 class="heading">Contact Us</h1>
				<hr>
			</div>
			<div class="col-md-offset-1 col-md-10 col-sm-12 wow fadeIn" data-wow-delay="0.9s">
				<form action="#" method="post">
					<div class="col-md-6 col-sm-6">
						<input name="name" type="text" class="form-control" id="name" placeholder="Name">
				  </div>
					<div class="col-md-6 col-sm-6">
						<input name="email" type="email" class="form-control" id="email" placeholder="Email">
				  </div>
					<div class="col-md-12 col-sm-12">
						<textarea name="message" rows="8" class="form-control" id="message" placeholder="Message"></textarea>
					</div>
					<div class="col-md-offset-3 col-md-6 col-sm-offset-3 col-sm-6">
						<input name="submit" type="submit" class="form-control" id="submit" value="Send">
					</div>
				</form>
			</div>
			<div class="col-md-2 col-sm-1"></div>
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
