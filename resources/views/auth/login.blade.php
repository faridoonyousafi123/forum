<!DOCTYPE html>
<html lang="en">
<head>
	<title>AfghanYouthDev</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/logo2.png"/>
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
	<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
	<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
	<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-form-title" style="background-image: url(images/bg-01.jpg);">
					<span class="login100-form-title-1">
						Sign In
					</span>
				</div>
				
				<form method="POST" action="{{ route('login') }}" class="login100-form validate-form m-t-20">
						@csrf
					
					
						
					<div class="flex-c-m m-l-20 m-b-30">
					
						<a href="#" class="login100-social-item bg1">
						<i class="fab fa-facebook-f"></i>
						</a>

						<a href="#" class="login100-social-item bg2">
						<i class="fab fa-twitter"></i>
						</a>

						<a href="#" class="login100-social-item bg3">
						<i class="fab fa-google"></i>
						</a>

						<a href="{{route('social.auth',['provider'=>'github'])}}" class="login100-social-item bg4">
						<i class="fab fa-github"></i>
						</a>

					</div>

					
					<div class="wrap-input100 validate-input m-b-26" data-validate="Username is required">
						<span class="label-input100">Username</span>
						<input class="input100" type="email" id="email" name="email" placeholder="Enter email">
						
						<span class="focus-input100"></span>
					</div>
					
					<div class="wrap-input100 validate-input m-b-18" data-validate = "Password is required">
						<span class="label-input100">Password</span>
						<input class="input100" type="password" name="password" id="password" placeholder="Enter password">
						
						<span class="focus-input100"></span>
					</div>
					
					<div class="flex-sb-m w-full p-b-30">
						<div class="contact100-form-checkbox">
							<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
							<label class="label-checkbox100" for="ckb1">
								Remember me
							</label>
						</div>
						
						<div>
							<a href="#" class="txt1">
								Forgot Password?
							</a>
						</div>
						
					</div>
					
					
					<div class="container-login100-form-btn m-t-40 m-r-90">
						<button type="submit" class="login100-form-btn">
						Sign In
						</button>
					
						<a class="m-l-20 login100-form-btn login200-form-btn links" href="{{ route('register') }}">
							Sign Up
							
						</a>
					</div>
					
				</form>
				<div class="text-center">
				<footer>Powered by 
					<span class="afg">Afg</span><span class="han">han</span><span class="youth">Youth</span><span class="dev">Dev</span> </footer>
				</div>
			</div>
				
		</div>
	</div>
	
	<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
	<!--===============================================================================================-->
	<script src="js/main.js"></script>
	
    <script src="{{ asset('js/app.js') }}"></script>

    <script src="{{ asset('js/toastr.min.js') }}"></script>
  
     
    <script>
        @if(Session::has('success'))
            toastr.success("{{Session::get('success')}}")
        @endif
         @if(Session::has('info'))
            toastr.info("{{Session::get('info')}}")
        @endif
         @if($errors)
            <?php
            foreach ($errors->all() as $error) {
                ?>
                toastr.error("{!!$error!!}")
                <?php
            }
            ?>

        @endif
    </script>
	
</body>
</html>