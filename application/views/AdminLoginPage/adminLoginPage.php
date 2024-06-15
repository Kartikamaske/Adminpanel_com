<!DOCTYPE html>
<html>
<head>
	<title>Admin Login</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
	<link href="<?=base_url() ?>Assets/css/style.css" rel="stylesheet">
	<link href="https://stackpath.bootstrapcdn.com/Assetsfont-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <link rel="stylesheet" type="text/css" href="<?=base_url() ?>Assets/css/util.css">
    <link rel="stylesheet" type="text/css" href="<?=base_url() ?>Assets/css/loader.min.css">
	<link rel="stylesheet" type="text/css" href="<?=base_url() ?>Assets/css/main.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>web_resources/dist/css/sweetalert.css">

    <link rel="icon" href="<?=base_url() ?>Assets/images/comlogo.png" sizes="16x16" type="image/png">
    <script>
        var base_path="<?php echo base_url();?>";
    </script>
</head>
<style>
    body{
        background-image: url('Assets/images/loginbg3.jpg');
        background-repeat: no-repeat;
    background-size: cover;
        /* background-image: url("Assets/images/login_bg.jpg"); */
    }
    
    .infinity-container{
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    background-size: cover;
    min-height: 100vh;
}

.loginbtn{
    font-size: 16px;
    width: 55%;
    background: -webkit-linear-gradient(260deg, #00dbde, #fc00ff);
    color: white;
    border-radius: 30px;
    transition: width 1s;
}
.loginbtn:hover{
    color: white;
    width: 65%;
    margin-bottom: 30px;
}

@media (min-width: 768px) {
    .infinity-container {
        background: url('bg.png') center no-repeat;
    }
    .infinity-form {
        box-shadow: 0 3px 6px hsla(0, 0%, 0%, 0.1);
        border-radius: 10px;
        width: 28rem;
    }
 
}
.infinity-form{
    background: #ffffff;
    /* background: #ffdbcae0; */
}

.infinity-form h4 {
    font-weight: bold;
}

.infinity-form .form-input
{
    position: relative;
}

.infinity-form .form-input input
{
    width: 100%;
    margin-bottom: 20px;
    height: 40px;
    border: none;
    border-bottom: 2px solid #777;
    outline: none;
    background: transparent;
    padding-left: 40px;
    font-weight: bold;
    color: #777;
}

.infinity-form .form-input span {
    position: absolute;
    top: 8px;
    padding-left: 10px;
    color: #777;
}

.infinity-form .form-input input::placeholder {
    padding-left: 0px;
}

.infinity-form .form-input input:focus,
.infinity-form .form-input input:valid
{
    border-bottom: 2px solid #57b894;
}

.infinity-form .custom-checkbox .custom-control-input:checked ~ .custom-control-label::before {
  background-color: #4ea585 !important;
  border:0px;
}

.infinity-form button[type="submit"] {
    margin-top: 10px;
    border: none;
    cursor: pointer;
    border-radius: 20px;
    background: linear-gradient(45deg, #4ea585, #57b894);
    color: #fff;
    font-weight: bold;
    transition: 0.5s;
    margin-bottom: 10px;
}

.infinity-form button[type="submit"]:hover {
    background: linear-gradient(45deg, #57b894, #4ea585);
}

.forget-link , .login-link , .register-link {
    color: #57b894;
    font-weight: bold;
}

.forget-link:hover , .login-link:hover , .register-link:hover {
    color: #4ea585;
    text-decoration: none;
}

.infinity-form .btn-social {
    color: #fff;
    border: 0;
    display: inline-block;
    font-weight: bold;
    width: 38px;
    height: 38px;
    border-radius: 50%;
    margin: 0px;
    margin-right: 10px;
    margin-bottom: 10px;
}

.infinity-form .btn-facebook {
    background: #4866a8;
}

.infinity-form .btn-google {
    background: #da3f34;
}

.infinity-form .btn-twitter {
    background: #33ccff;
}

.infinity-form .btn-facebook:hover {
    background: hsla(221, 40%, 40%, 1);
}

.infinity-form .btn-google:hover {
    background: hsla(4, 59%, 47%, 1);
}

.infinity-form .btn-twitter:hover {
    background: hsla(195, 78%, 54%, 1);
}

    </style>
<body>
	<div class="container infinity-container">
		<div class="form-row">
			<div class="col-md-1 infinity-left-space"></div>
			
			<!-- FORM BEGIN -->
			<div class="col-lg-10 col-md-10 col-sm-12 col-xs-12 p-2 text-center infinity-form" style="height: 30rem;">
				
				<div class="text-center my-5 text-primary">
					<h4 style="font-size: 34px;color: #0e0e0e;">Login </h4>
				</div>
				<!-- Form -->
                <form class="px-3" id="Form" action=""  method="POST">
					<!-- Input Box -->

                    <div class="text-center " style="color:red;font-size:16px;font-weight: bold;" id="errorLogin"></div>
					<div class="form-input mb-1">
						<span><i class="fa fa-user-circle" aria-hidden="true" style="font-size: 20px;"></i></span>
						<input class="mb-2" type="username" name="username" id="username" placeholder=" Enter Username ">
                   </div>
                    <p style="color:red;font-size:15px;font-weight:bold;text-align:left" id="erroruname"></p>
					<div class="form-input mt-3 mb-1">
						<span><i class="fa fa-lock" style="font-size: 20px;"></i></span>
						<input class="mb-3"  type="password" name="password" id="password" placeholder="Enter Password" >
					</div>
                    <p style="color:red;font-size:15px;font-weight:bold;text-align:left" id="errorpassword"></p>
					
			   	    <!-- Login Button -->
		            <div class="mb-3"> 
                        <button type="button" class="btn loginbtn py-2 px-3 mt-5 mb-3 shadow-sm" id="btn_login" name="btn_login" style="">Log In</button>
					</div>
				
				</form>
			</div>
			<!-- FORM END -->
	
			<div class="col-md-1 infinity-right-space"></div>
		</div>
	</div>

</body>
</html>
<script src="<?php echo base_url(); ?>web_resources/dist/js/sweetalert.min.js"></script>
<link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.min.css'></link>  

<script src="<?=base_url() ?>Assets/js/jquery-3.3.1.min.js"></script>

<script  src="<?php echo base_url('web_resources');?>/dist/js/controllers/AdminLoginCreate.js"></script>
<script  src="<?php echo base_url('web_resources');?>/dist/js/common/common_validations.js"></script>
