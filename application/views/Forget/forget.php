<!DOCTYPE html>
<html>
<head>
	<title>Forget Password</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" />
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
		<!-- <div class="logo">
			<img src="Assets/images/user.svg" width="130px">
		</div> -->
		<div class="infinity-form-block">
			<div class="infinity-click-box text-center">Reset Your password</div>
			
			<div class="infinity-fold">
				<div class="infinity-form">
					<div class="reset-form d-block">
					    <form class="reset-password-form px-3">
			                <p class="mb-3" style="color: black">
			                    Please enter your mobile number and we will send you a OTP.
			                </p>
							<div class="form-input">
								<span><i class="fa-solid fa-phone"></i></span>
								<input type="number" name="" placeholder="Mobile Number"  maxlength="10" tabindex="10" required>
							</div>
				            <div class="col-12 mb-3 text-right"> 
								<button type="submit" class="btn">Send OTP</button>
							</div>
				        </form>
					</div>
					<div class="reset-confirmation d-none px-3">
					    <div class="mb-4">
					        <h4 class="mb-3">OTP sent successfully..</h4>
					        <h6 style="color: black">Please, check your inbox to get your one time password.</h6>
					    </div>
						<div class="text-right">
					    	<a href="Login1">
					        	<button type="submit" class="btn">Login Now</button>
					    	</a>
						</div>
					</div> 
				</div>
			</div>
		</div>
	</div>

	<script type="text/javascript">
		function PasswordReset() {
			$('form.reset-password-form').on('submit', function(e){
				e.preventDefault();
				$('.reset-form')
				.removeClass('d-block')
				.addClass('d-none');
				$('.reset-confirmation').addClass('d-block');
			});
		}

		window.addEventListener('load',function(){
			PasswordReset();
		});
	</script>
	
</body>
</html>
