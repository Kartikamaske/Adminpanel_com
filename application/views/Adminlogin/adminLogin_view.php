
<!DOCTYPE html>
<html lang="en">
 
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>Comtranse Admin Login</title>
 <link href="<?php base_url(); ?>assets2/font.css" rel="stylesheet">
  <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">  -->
 <link href="assets2/bootstrap.min.css" rel="stylesheet">
  
	 <link href="assets2/jquery-ui.min.css" rel="stylesheet">
	 <link href="assets2/sweetalert.css" rel="stylesheet">
 <link href="<?php base_url(); ?>Assets/css/style-for-loginPage.css" rel="stylesheet">
 <link rel="stylesheet" href="<?php echo base_url(); ?>web_resources/dist/css/sweetalert.css">

 <!-- <link href="<?=base_url() ?>Assets/css/style.css" rel="stylesheet"> -->

 <link rel="stylesheet" type="text/css" href="assets2/multiselect.css">
 <link rel="icon" href="<?=base_url() ?>Assets/images/comlogo.png" sizes="16x16" type="image/png">
 

 </head>

 <script>
        var base_path="<?php base_url(); ?>";
     </script>

<style type="text/css">
  @media(max-width: 768px){
  .ms-content-wrapper.login{
    padding-top: 0px !important;
    padding: 0px;
  }
  }
</style>

 <body>
<div class="fullPageImage">
    <img src="Assets/images/coding1.jpg" class="imageFullWidth">
</div>
<div class="mainbackGround"> </div>
<div class="ms-content-wrapper login" style="padding-top: 0px;">
 			<!-- <div class="row"> -->
    <form class="" id="Form" name="form" method="post" role="form" enctype="multipart/form-data" autocomplete="off">
 	<div class="col-12 forDesktopView" style="padding-left: 0;padding-right: 0px;">
 		<div class="main_img_wrap">
 			<img src="Assets/images/comtranselogo.png" style="height: 81px; width: 280px;" alt="logo1" class="image_fit">
 			
 		</div> 
 		<div class="input_fields_names">
            <div class="text-center mt-0 my-2" style="color:red;font-size:16px;font-weight: bold;" id="errorLogin"></div>
 			<div class="forms_inputs">
 				<div class="form-group">
                    
 					<input type="text" name="username" id="username" class="form-control inpit_fields" placeholder="Enter username">
                     <!-- <p id="erroruname" class="mt-3" style="color:red;font-size:14px;"></p> -->
 				</div>
 				<div class="form-group" style="padding-top: 15px;">
 					<input type="password" name="password" id="password" class="form-control inpit_fields" placeholder="Enter Password">
                     <!-- <p id="errorpassword" class="mt-3" style="color:red;font-size:14px;"></p> -->
                
 				</div>
                 
 			</div>
 		</div>


 		<div class="btn_lgn mt-5">
 			<button type="button" class="btn btn-primary btn-lg btn-block " name="btn_login" id="btn_login">Login</button>  
 		</div>
		 <div class="m-3 text-center" style="color: blue;">
            <a href="<?=base_url() ?>NewRegistration/create">New Registration</a>
        </div>
        <span id="develoupedby" >Developed By Comtranse Ptv.Ltd</span>  
 						
 	</div>
    </form> 
</div>
<script src="<?php echo base_url(); ?>web_resources/dist/js/sweetalert.min.js"></script>
<link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.min.css'></link>  

<script src="<?=base_url() ?>Assets/js/jquery-3.3.1.min.js"></script>

<script  src="<?php echo base_url('web_resources');?>/dist/js/controllers/AdminLoginCreate.js"></script>
<script  src="<?php echo base_url('web_resources');?>/dist/js/common/common_validations.js"></script>
 	

