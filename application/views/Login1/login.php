<!DOCTYPE html>
<html>

<head>
	<title>Login</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="icon" href="<?=base_url() ?>Assets/images/user.svg" sizes="30x30" type="image/svg">
    
<style>
    .infinity-container
{
	display:flex;
	flex-direction:column;
	align-items:center;
	justify-content:center;
	min-height:100vh;
	color:black;
	font-weight:500;
    background:url('Assets\\images\\img9.png') center no-repeat; 
	background-size:cover;
}

.infinity-form-block
{
	width:350px;
	border-radius:5px;
	box-sizing:border-box;
	overflow:hidden;
	font-size:15px;
	background: linear-gradient( 45deg , #2f3132, transparent);
	/* padding:10px; */
}

.infinity-click-box
{
	height:50px;
	background-color:#ff8333;
	color:white;
	line-height:50px;
	font-size:20px;
	box-shadow:0 5px 10px rgba(0,0,0,.5);
}

.infinity-fold
{
	position:relative;
	width:100%;
	background-image:linear-gradient(wheat,#eb833c);
	padding:30px 20px;
}

.infinity-form .text-sm
{
	font-size:14px;
}

.infinity-form .form-input
{
	position:relative;
}

.infinity-form .form-input input
{
	width:100%;
	margin-bottom:20px;
	height:40px;
	border:2px solid #fff;
	border-radius:20px;
	outline:none;
	background:transparent;
	padding-left:45px;
}

.infinity-form .form-input span
{
	position:absolute;
	top:8px;
	padding-left:20px;
	color:black;
}

.infinity-form .form-input input:focus,.infinity-form .form-input input:valid
{
	border:2px solid #ff8333;
}

.infinity-form .form-input input:focus::placeholder
{
	color:#454b69;
}

.infinity-form input[type="checkbox"]:not(:checked) + label:before
{
	background:transparent;
	border:2px solid #fff;
	width:15px;
	height:15px;
}

.custom-checkbox .custom-control-input:checked ~ .custom-control-label::before
{
	background-color:red!important;
	border:0;
	width:15px;
	height:15px;
	
}

.infinity-form button[type="submit"]
{
	margin-top:10px;
	border:none;
	cursor:pointer;
	width:150px;
	height:40px;
	border-radius:5px;
	background:#ff8333;
	color:white;
	font-weight:700;
	transition:.5s;
	margin-bottom:10px;
}

.infinity-form button[type="submit"]:hover
{
	background:#643859;
	-webkit-box-shadow:0 9px 10px -2px rgba(0,0,0,0.55);
	-moz-box-shadow:0 9px 10px -2px rgba(0,0,0,0.55);
	box-shadow:0 9px 10px -2px rgba(0,0,0,0.55);
}

.forget-link,.login-link,.register-link
{
	color:#000;
	font-weight:700;
}

.forget-link:hover,.login-link:hover,.register-link:hover
{
	color:purple;
}

.infinity-social-btn ul
{
	display:flex;
}

.infinity-social-btn ul li
{
	position:relative;
	list-style:none;
	width:40px;
	height:40px;
	top:10px;
	left:20px;
	align-items:center;
	margin-right:20px;
	background:#fff;
	text-align:center;
	border:4px solid transparent;
	box-sizing:border-box;
	border-radius:50%;
	transition:.5s;
	overflow:hidden;
	margin-bottom:10px;
}

.infinity-social-btn ul li .facebook .fa
{
	color:#3b5998;
}

.infinity-social-btn ul li .instagram .fa
{
	color:#8a3ab9;
}

.infinity-social-btn ul li .twitter .fa
{
	color:#1DA1F2;
}

.infinity-social-btn ul li:hover:nth-child(1)
{
	background-color:#3b5999;
}

.infinity-social-btn ul li:hover:nth-child(2)
{
	background-color:#dd4b39;
}

.infinity-social-btn ul li:hover:nth-child(3)
{
	background-color:#55acee;
}

.infinity-social-btn ul li .fa
{
	position:absolute;
	top:50%;
	left:50%;
	transform:translate(-50%,-50%);
	font-size:24px;
	color:#2196f3;
	transition:.5s;
}

.infinity-social-btn ul li .fa:nth-child(1)
{
	left:-50%;
	opacity:0;
}

.infinity-social-btn ul li:hover .fa:nth-child(1)
{	
	left:50%;
	opacity:1;
	color:#fff;
}

.infinity-social-btn ul li:hover .fa:nth-child(2)
{
	left:150%;
	opacity:0;
}


</style>


</head>

<body>
	<div class="infinity-container">
		<!-- Company Logo -->
		<!-- <div class="logo">
			<img src="Assets/images/user.svg" width="130px"> 
		</div> -->

		<!-- FORM CONTAINER BEGIN -->
		<div class="infinity-form-block">
			<div class="infinity-click-box text-center">Login into your account</div>

			<div class="infinity-fold">
				<div class="infinity-form">
					<form class="form-box">
						<!-- Input Box -->
						<div class="form-input">
							<span><i class="fa fa-envelope"></i></span>
							<input type="email" name="" placeholder="Email Address" tabindex="10" required>
						</div>
						<div class="form-input">
							<span><i class="fa fa-lock"></i></span>
							<input type="password" name="" placeholder="Password" minlength="5" maxlength="8" required>
						</div>
						<div class="row mb-2">
							<!--Remember Checkbox -->
							<div class="col-6 d-flex align-items-center">
								<div class="custom-control custom-checkbox">
									<input type="checkbox" class="custom-control-input" id="cb1">
									<label class="custom-control-label text-sm" for="cb1">Remember me
									</label>
								</div>
							</div>
							<!-- Forget Password -->
							<div class="col-6 text-right text-sm">
								<a href="Forget" class="forget-link">Forgot password?</a>
							</div>
						</div>
						<!-- Login Button -->
						<div class="col-12 px-0 text-right">
							<button type="submit" class="btn mb-3">Login</button>
						</div>

						<div class="text-center text-sm">or login with</div>
						<div class="infinity-social-btn text-center">
							<ul class="text-center">
								<li class="text-center"><a href="#" class="facebook">
										<i class="fa fa-facebook"></i><i class="fa fa-facebook"></i></a>
								</li>
								<li class="text-center"><a href="#" class="instagram">
										<i class="fa fa-instagram"></i><i class="fa fa-instagram"></i></a>
								</li>
								<li class="text-center"><a href="#" class="twitter">
										<i class="fa fa-twitter"></i><i class="fa fa-twitter"></i></a>
								</li>
							</ul>
						</div>
						<div class="text-center">Don't have an account?
							<a class="register-link" href="Register">Register here</a>
						</div>
					</form>
				</div>
			</div>
		</div>
		<!-- FORM CONTAINER END -->
	</div>

</body>

</html>
