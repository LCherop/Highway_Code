<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Login|Highway Code</title>
    
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="">
    <meta name="description" content="">
    
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/nivo-lightbox.css">
    <link rel="stylesheet" href="css/nivo_themes/default/default.css">
    <link rel="stylesheet" href="css/login.css">
    <link href='https://fonts.googleapis.com/css?family=Poppins:400,500' rel='stylesheet' type='text/css'>
</head>
<section class="preloader">
	<div class="sk-spinner sk-spinner-pulse"></div>
</section>
<section class="navbar navbar-default navbar-fixed-top" role="navigation">
		<div class="navbar-header">
			<button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				<span class="icon icon-bar"></span>
				<span class="icon icon-bar"></span>
				<span class="icon icon-bar"></span>
			</button>
			<a href="/" class="navbar-brand">HIGHWAY CODE</a>
		</div>
</section>
<br><br>
<body style=" background:  url('../images/login-bg.jpg') no-repeat center center fixed;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
	display: flex;
	justify-content: center;
	align-items: center;
	flex-direction: column;
	font-family: 'Poppins', sans-serif;
	height: 100vh;
    margin: -20px 0 50px;
    font-weight: 400;
    position: relative;">
<div>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />
        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />
        
       <div class="form-container" id="container">
            <div class="row"> 
            <div class="col-md-offset-1 col-md-10 col-sm-12 text-center" >
            <h1 class="heading">Login</h1>
				<hr>
        <div class="col-md-offset-1 col-md-10 col-sm-12 wow fadeIn" data-wow-delay="0.9s" >        
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <!-- Email Address -->
            <div class="col-md-offset-3 col-md-6 col-sm-offset-3 col-sm-6">
                <x-label for="driver_officerId" :value="__('License No/Officer No')" />
                <x-input id="driver_officerId" class="block mt-1 w-full" type="text" name="driver_officerId" :value="old('dirver_officerId')" required autofocus />
            </div>
            <!-- Password -->
            <div class="col-md-offset-3 col-md-6 col-sm-offset-3 col-sm-6">
                <x-label for="password" :value="__('Password')" />
                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="current-password" />
            </div>
            <!-- Remember Me -->
            <div class="col-md-offset-3 col-md-6 col-sm-offset-3 col-sm-6">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>
            <div class="col-md-offset-3 col-md-6 col-sm-offset-3 col-sm-6">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif
                <x-button class="ml-3">
                    {{ __('Log in') }}
                </x-button>
            </div>
        </form>
       
    
</div>
</body>
</html> 