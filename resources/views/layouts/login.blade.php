<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/login.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    

    <!-- Styles -->
    <link href="{{ asset('css/login.css') }}" rel="stylesheet">
<!--===============================================================================================-->
</head>
<body>

	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="{!!url('/img/logos/logo_eba.png')!!}" alt="IMG">
				</div>
                @yield('content')
			</div>
		</div>
	</div>




<!--===============================================================================================-->

	<script >
         window.onload = function () {
            // $('.js-tilt').tilt({
            //     scale: 1.1
            // })
            var user_error =@json($errors->has('username'));
            var pass_error =@json($errors->has('password'));
            console.log(user_error);
            if(user_error){
                toastr.error('Error Usuario Incorrecto','Error');
            }
            if(pass_error){
                toastr.error('Error Password Incorrecto','Error');
            }
            // var usermessage = @json($errors->first());
            // console.log(user);
        };


	</script>


</body>
</html>
