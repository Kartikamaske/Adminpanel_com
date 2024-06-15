<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Online Music</title>
    <link href="https://fonts.googleapis.com/css?family=Nunito:300,400,400i,600,700,800,900" rel="stylesheet">
    <link href="<?=base_url() ?>Assets/css/style.css" rel="stylesheet">
    <link rel="icon" href="<?=base_url() ?>Assets/images/logo.png" sizes="32x32" type="image/png">

    <script>
   
   var base_path="<?php echo base_url();?>";
</script>

</head>
<body style="background-image: url(Assets/images/loginbg4.jfif);
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;">
<div class="d-flex justify-content-end m-4 mb-0">
        <a class="text-body font-weight-bold" href="<?=base_url() ?>Register" style="font-size:18px">Sign Up</a>
     </div>


<div class="auth-layout-wrap" >

   

    <div class="auth-content">
        <div class="card o-hidden">
            <div class="row">
                <div class="col-md-11 mx-auto">
              
                    <div class="p-4">
                    <h3 class="mb-0 text-center">Login / Sign In</h3>
                        <div class="auth-logo text-center mb-4"><img src="<?=base_url() ?>Assets/images/logo.png" alt=""></div>
                      
                        <form id="Form" action=""  method="post" enctype="multipart/form-data" autocomplete="off">
                        <div id="errorLogin" class="text-danger" style="font-weight:bold;margin-bottom:10px"></div>

                            <div class="form-group">
                                <label for="email">Email address</label>
                                <input class="form-control form-control-rounded" name="email" id="email" type="email">
                            </div>
                            <span id="errorLemail" class="text-danger" style="font-weight:bold"></span>


                            <div class="form-group">
                                <label for="password">Password</label>
                                <input class="form-control form-control-rounded" name="password" id="password" type="password">
                            </div>

                            <span id="errorLpwd" class="text-danger" style="font-weight:bold"></span>

                            <button type="button" id="btn_login" name="btn_login" class="btn btn-rounded btn-primary text-center px-5 mx-auto d-block mt-2">Login</button>
                        </form>
                        <!-- <div class="mt-3 text-center"><a class="text-muted" href="forgot.html">
                                <u>Forgot Password?</u></a></div> -->
                    </div>
                </div>
              
            </div>
        </div>
    </div>
</div>
</body>
</html>

<script type="text/javascript" src="<?=base_url()  ?>WebAssets/assets/js/jquery.min.js"></script>

<script src="<?php echo base_url(); ?>web_resources/dist/js/sweetalert.min.js"></script>

<!-- <script  src="<?php echo base_url('web_resources');?>/dist/js/controllers/RegistrationCreate.js"></script> -->

<script  src="<?php echo base_url('web_resources');?>/dist/js/controllers/LoginCreate.js"></script>