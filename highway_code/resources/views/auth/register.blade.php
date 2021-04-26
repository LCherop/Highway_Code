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
    <br><br>
      <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />
        <div class="container" id="container">
            <div class="row">
                <div class="col-md-offset-1 col-md-10 col-sm-12 text-center">
                            <h1 class="heading" href="/">Register</h1>
                                <hr>
                            </div>
                            <div class="col-md-offset-1 col-md-10 col-sm-12 wow fadeIn" data-wow-delay="0.9s">
                                <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <!--Driver/Officer ID -->
                            <div class="col-md-offset-3 col-md-6 col-sm-offset-3 col-sm-6">
                                <x-input id="driver_officerId" class="block mt-1 w-full" type="text" name="driver_officerId" :value="old('driver_officerId')" required autofocus placeholder="License No/Officer No" />
                            </div>
                            <!-- Name -->
                            <div class="col-md-offset-3 col-md-6 col-sm-offset-3 col-sm-6">
                                <x-input id="fullname" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus placeholder="Fullname" />
                            </div>

                            <!-- Gender -->
                            <div class="col-md-offset-3 col-md-6 col-sm-offset-3 col-sm-6">
                                <x-input id="gender" class="block mt-1 w-full" type="text" name="gender" :value="old('gender')" required placeholder="Gender"/>
                            </div>

                            <!-- Email Address -->
                            <div class="col-md-offset-3 col-md-6 col-sm-offset-3 col-sm-6">
                                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required placeholder="Email"/>
                            </div>

                            <!-- Role -->
                            <div class="col-md-offset-3 col-md-6 col-sm-offset-3 col-sm-6">
                            
                                <select class="block appearance-none w-full bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline"name="userType" :value="old('userType')" required >
                                        <option>Motorist</option>
                                        <option>Police Officer</option>
                                </select>
                            </div>

                            <!-- Password -->
                            <div class="col-md-offset-3 col-md-6 col-sm-offset-3 col-sm-6">
                            

                                <x-input id="password" class="block mt-1 w-full"
                                                type="password"
                                                name="password"
                                                required autocomplete="new-password" placeholder="Password"/>
                            </div>

                            <!-- Confirm Password -->
                            <div class="col-md-offset-3 col-md-6 col-sm-offset-3 col-sm-6">

                                <x-input id="password_confirmation" class="block mt-1 w-full"
                                                type="password"
                                                name="password_confirmation" required placeholder="Confirm Password"/>
                            </div>

                            <div class="col-md-offset-3 col-md-6 col-sm-offset-3 col-sm-6">
                                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                                    {{ __('Already registered?') }}
                                </a>

                                <x-button class="ml-4">
                                    {{ __('Register') }}
                                </x-button>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div> 
    


