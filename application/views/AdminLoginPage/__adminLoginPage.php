<!DOCTYPE html>
<html lang="en">
<head>
	<title>Admin Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="Assets/images/comlogo.png"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Assets/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Assets/fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->

	<link rel="stylesheet" type="text/css" href="Assets/css/util.css">
	<link rel="stylesheet" type="text/css" href="Assets/css/main.css">
<!--===============================================================================================-->

<script>
        var base_path="<?php echo base_url();?>";
    </script>

<style>
    .logo-img-style{
        position: absolute;
    z-index: 1;
    top: 89px;
    background-color: white;
    width: 32%;
    border-radius: 10px;
    }
    .bg-body{
        background-image: url('Assets/images/loginbg3.jpg');
        /* background-image: url('Assets/images/login_bg.jpg'); */
        background-repeat: no-repeat;
    background-size: cover;
    }
</style>
</head>
<body class="bg-body">
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-4">
			<!-- p-l-55 p-r-55 p-t-65 p-b-54 -->
				<form class="login100-form validate-form px-3" id="Form" action="" method="POST">
					<span class="login100-form-title p-b-49">Login</span>
					<div class="text-center " style="color:red;font-size:16px;font-weight: bold;" id="errorLogin"></div>

					<div class="wrap-input100 validate-input m-b-23" data-validate = "Username is reauired">
						<span class="label-input100">Username</span>
						<input class="input100" type="text" name="username" id="username" placeholder="Type username">
						<span class="focus-input100" data-symbol="&#xf206;"></span>
					</div>
					<p class="mb-3 mt-0" style="color:red;font-size:15px;font-weight:bold;text-align:left" id="erroruname"></p>

					<div class="wrap-input100 validate-input m-b-23" data-validate="Password is required">
						<span class="label-input100">Password</span>
						<input class="input100" type="password" name="password" id="password" placeholder="Type password">
						<span class="focus-input100" data-symbol="&#xf190;"></span>
					</div>
					<p class="" style="color:red;font-size:15px;font-weight:bold;text-align:left" id="errorpassword"></p>
					
					<div class="container-login100-form-btn p-t-8 p-b-31 padding-style">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button type="button" class="login100-form-btn" id="btn_login" name="btn_login">Login</button>
						</div>
					</div>

				</form>
			</div>
		</div>
	</div>
	
	<div id="dropDownSelect1"></div>

</body>
</html>

<script src="<?=base_url() ?>Assets/js/jquery-3.3.1.min.js"></script>

     <script  src="<?php echo base_url('web_resources');?>/dist/js/controllers/AdminLoginCreate.js"></script>

     <script  src="<?php echo base_url('web_resources');?>/dist/js/common/common_validations.js"></script>