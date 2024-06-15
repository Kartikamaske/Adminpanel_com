<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PMS_Adminpanel</title>
    <script>
        var base_path="<?php echo base_url();?>";
     </script>
    <link href="https://fonts.googleapis.com/css?family=Nunito:300,400,400i,600,700,800,900" rel="stylesheet">
    <link href="<?=base_url() ?>Assets/css/style.css" rel="stylesheet">
    <!-- <link href="<?=base_url() ?>Assets/css/comtranse-user-style.css" rel="stylesheet"> -->
    <link rel="icon" href="<?=base_url() ?>Assets/images/studentlogo.png" sizes="32x32" type="image/png">

<style>
  .forgot-pass{
    padding-left: 66%;
 }
 @media (max-width:992px) {
    .forgot-pass{
    padding-left: 50%!important;
    }
 }
 .body-style{
    background-image: url("Assets/images/login_bg.jpg");
 }
 .logo-style{
position: relative;
top: 80px;
z-index:1;
 }

</style>
</head>
<div class="auth-layout-wrap body-style login-form-sm" >
    <div class="auth-content" style="margin-top: -40px;">
        <div class="auth-logo text-center my-4 logo-style ">
            <img src="<?=base_url() ?>Assets/images/logocom.png" alt="" style="border-radius: 23%;">
        </div>
        <div class="card o-hidden">
            <div class="row">
                <div class="col-md-11 col-sm-12 mx-auto">
              
                    <div class="pt-4">
                    

                    <h1 class="text-center text-dark my-5">Login to your Account</h1>
                      
                        <form id="Form" >
                    <div class="text-center " style="color:red;font-size:16px;font-weight: bold;" id="errorLogin"></div>

                            <div class="form-group">
                                <label for="user">User Name</label>
                                <input class="form-control" id="username" name="username" type="username">
                                <p id="errorusername"></p>
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input class="form-control" id="password" name="password" type="password">
                                <p id="errorpassword"></p>

                            </div>
                            <!-- <a class="text-muted forgot-pass" href="#"> -->
                                <!-- <u>Forgot Password?</u></a> -->
                          
                                <button type="button" class="btn btn-rounded btn-primary text-center px-5 mx-auto d-block mt-4" id="login_link">
                                <!-- <a href="<?=base_url() ?>Attendance/create"  class="text-white"> -->
                                 Login
                                <!-- </a> -->
                                </button>
                        </form>
                        <div class="m-3 text-center">
                                <a href="<?=base_url() ?>NewRegistration/create">New Registration</a>
                        </div>
                       
                    </div>
                </div>
               
            </div>
        </div>
    </div>
</div>

<script src="<?php echo base_url();?>Assets/jquery-3.3.1.min.js"></script>         
        <script  src="<?php echo base_url('web_resources');?>/dist/js/controllers/ComLogin_Create.js"></script>
     

<script>


    $(document).ready(function(){
        $('#login_link').click(function(){
    // alert("hi");

            // alert("Login done");
        });
    });
</script>


<!-- <div class="d-lg-none footer-bottom border-top py-3 d-flex flex-column flex-sm-row align-items-center ">
    <div class="">
        <p class="m-0">&copy; Comtranse Technology Pvt Ltd</p>
        <p class="m-0">All rights reserved</p>
                      
    </div>
</div> -->