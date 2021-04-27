<!DOCTYPE html>
<html lang="en">
<body>
<x-app-layout>
<head>

	<meta charset="utf-8">
	<title>Profile|Highway Code</title>

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
    

    
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <p>
                        <label>Full Name</label>
                        <p> 
                        {{ Auth::user()->name }};
                        </p>
                    </p>
                    <p>
                        <label>Serial Number</label>
                        <p>
                        {{ Auth::user()->driver_officerId }};
                        </p>
                    </p>
                    <p>
                        <label>Gender</label>
                        <p>
                        {{ Auth::user()->gender}};
                        </p>
                    </p>
                    <p>
                        <label>Email</label>
                        <p>
                        
                            {{ Auth::user()->email }};
                            
                        </p>
                    </p>
                </div>
            </div>
        </div>

    </div>

<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.parallax.js"></script>
<script src="js/smoothscroll.js"></script>
<script src="js/nivo-lightbox.min.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/index.js"></script>

</x-app-layout>
</body>
</html>
