<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
	<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" /> -->

    <link rel="icon" href="<?=base_url() ?>Assets/images/user.svg" sizes="32x32" type="image/svg">
	
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
	background-color:#ff8333!important;
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
			<div class="infinity-click-box text-center">Create an account</div>
			
			<div class="infinity-fold">
				<div class="infinity-form">
					<form class="form-box">
						<!-- Input Box -->
						<div class="form-input">
							<span><i class="fa fa-user"></i></span>
							<input type="text" name="" placeholder="Full Name" tabindex="10"required>
						</div>
						<div class="form-input">
						<span><img src="https://img.icons8.com/ios-filled/512/phone.png" style="width:15px"></span>
							<input type="number" name="" placeholder="Mobile Number" tabindex="10"required>
						</div>
						<div class="form-input">
							<span><i class="fa fa-lock"></i></span>
							<input type="password" name="" placeholder="Password" required>
						</div>
						<!-- Register Button -->
						<div class="col-12 px-0 text-right">
							<button type="submit" class="btn mb-3">Register</button>
						</div>
						<div class="text-center text-sm">or register with</div>
						<div class="infinity-social-btn text-center">
							<ul class="text-center">
								<!-- Facebook Button -->
								<li class="text-center"><a href="#" class="facebook">
									<i class="fa fa-facebook"></i><i class="fa fa-facebook"></i></a>
								</li>
								<!-- Google Button -->
								<li class="text-center"><a href="#" class="instagram">
									<i class="fa fa-instagram"></i><i class="fa fa-instagram"></i></a>
								</li>
								<!-- Twitter Button -->
								<li class="text-center"><a href="#" class="twitter">
									<i class="fa fa-twitter"></i><i class="fa fa-twitter"></i></a>
								</li>
							</ul>
						</div>
						<div class="text-center">Already have an account?
							<a class="login-link" href="Login1">Login here</a>
		            	</div>
					</form>
				</div>
			</div>
		</div>
		<!-- FORM CONTAINER END -->
	</div>
	
</body>
</html>
