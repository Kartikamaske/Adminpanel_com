<!doctype html>
<html lang="en" class="h-100">


<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="generator" content="">
    <title>Dadhichi Agro</title>

    <!-- manifest meta -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <!-- <link rel="manifest" href="manifest.json" /> -->

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="<?=base_url() ?>Assets/img/favicon.jpg" sizes="180x180">
    <link rel="icon" href="<?=base_url() ?>Assets/img/favicon.jpg" sizes="32x32" type="image/png">
    <link rel="icon" href="<?=base_url() ?>Assets/img/favicon.jpg" sizes="16x16" type="image/png">

    <!-- Google fonts-->

    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700&amp;display=swap" rel="stylesheet">

    <!-- bootstrap icons -->
    <!-- <link rel="stylesheet" href="../../../../cdn.jsdelivr.net/npm/bootstrap-icons%401.5.0/font/bootstrap-icons.css"> -->

    <!-- style css for this template -->
    <link href="<?=base_url() ?>Assets/css/style.css" rel="stylesheet" id="style">
    

     <link href="<?=base_url() ?>Assets/css/fontawesome.min.css" rel="stylesheet" id="style">
     <link href="<?=base_url() ?>Assets/css/all.min.css" rel="stylesheet" id="style">

     <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <script>
   
        var base_path="<?php echo base_url();?>";
     </script>
</head>

<body class="body-scroll d-flex flex-column h-100" data-page="signin">

    <!-- loader section -->
    <div class="container-fluid loader-wrap">
        <div class="row h-100">
            <div class="col-10 col-md-6 col-lg-5 col-xl-3 mx-auto text-center align-self-center">
                <p class="mt-4"><span class="text-secondary"> 
                  <img src="<?=base_url() ?>Assets/img/nwlogo.png" alt="" style="height: 130px;width: 200px;"  /></span></p>

            </div>
        </div>
    </div>
    <!-- loader section ends -->

    <!-- Begin page content -->
    <main class="container-fluid h-100 ">
        <div class="row h-100">
            <div class="col-11 col-sm-11 mx-auto">
                <!-- header -->
              <!--   <div class="row">
                    <header class="header">
                        <div class="row">
                            <div class="col">
                                <div class="logo-small">
                                     <img src="<?=base_url() ?>Assets/img/nwlogo.png" alt="" />
                                  
                                </div>
                            </div>
                           
                        </div>
                    </header>
                </div> -->
                <!-- header ends -->
            </div>

              <div class="col-10 col-md-6 col-lg-5 col-xl-3 mx-auto text-center align-self-center">
                <p class="mt-3"><span class="text-secondary"> 
                  <img src="<?=base_url() ?>Assets/img/nwlogo.png" alt="" style="height: 130px;width: 200px;"  /></span></p>

            </div>
            <div class="col-11 col-sm-11 col-md-6 col-lg-5 col-xl-3 mx-auto align-self-center py-1">
                <h1 class="mb-4 text-center"style="color: #404447;">Login to your Account</h1>

                  <form id="Form" action=""  method="POST"  >

                     <div class="text-center " style="color:red;font-size:16px;font-weight: bold;" id="errorLogin"></div>

                <div class="form-group form-floating mb-2 is-valid">

                    <input type="text" class="form-control" value="" id="mobileNo" placeholder="mobileNo" name="mobileNo" maxlength="10" onkeypress="return isNumberKey(event,this)">
                    <label class="form-control-label" for="mobileNo">Dealer Code</label>
                </div>
                <p style="color:red;font-size:14px;" id="errormobileNo"></p>

                <div class="form-group form-floating is-invalid mb-2">
                    <input type="password" class="form-control " id="password" name="password" placeholder="Password">

                    <label class="form-control-label" for="password">Password</label>
                    <div id="toggle_pwd"  class="fa fa-fw fa-eye field-icon toggle-password"></div>
                    
                </div>
                  <p id="errorpassword" style="color:red;font-size:14px;"></p>

                <p class="mb-3 text-end">
                   <button type="button"onclick="document.getElementById('id01').style.display='block'" class="border-0 outline-0" style="background: transparent;" > <a href="javascript:void(0)" class="" data-bs-toggle="modal" data-bs-target="#myModal">
                        Forgot your password?
                    </a></button>
                </p>
            </div>

            <!-- Button to Open the Modal -->

<!-- The Modal -->
<div class="modal w3-modal" id="id01" class="w3-modal" style="z-index: 99999;">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
    <!--   <div class="modal-header" style="padding: 5px 18px;">
        <h4 class="modal-title mt-0" style="font-family: Georgia;
    font-weight: 700; color: #f6b606;">Contact To Admin</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal" onclick="document.getElementById('id01').style.display='none'"></button>
      </div> -->

      <!-- Modal body -->
      <div class="modal-body text-right " style="padding: 6px 10px;">
        <div class="d-flex justify-content-end">
            <button type="button" class="btn-close text-danger" data-bs-dismiss="modal" onclick="document.getElementById('id01').style.display='none'"></button>

        
        </div>
         <h4 class="modal-title mt-0" style="font-family: Georgia;
    font-weight: 700; color: #f6b606;">Contact To Admin&nbsp;<span>(9854845452)</span></h4>
       
                 
                 
                
      </div>

    

    </div>
  </div>
</div>
            <div class="col-9 col-sm-9 mt-auto mx-auto py-4">
                <div class="row ">
                    <div class="col-12 d-grid">
                         <button type="button" class="btn btn-default btn-lg shadow-sm" id="btn_save" name="btn_save" style="font-size: 25px;">Log In</button>
                        <!-- <a href="<?=base_url() ?>Home" class="btn btn-default btn-lg shadow-sm">Sign In</a> -->
                    </div>
                </div>
            </div></form>
        </div>
    </main>


    <!-- Required jquery and libraries -->
    <script src="<?=base_url() ?>Assets/js/jquery-3.3.1.min.js"></script>

     <script  src="<?php echo base_url('web_resources');?>/dist/js/controllers/LoginCreate.js"></script>

     <script  src="<?php echo base_url('web_resources');?>/dist/js/common/common_validations.js"></script>


    <!-- <script src="<?=base_url() ?>Assets/js/popper.min.js"></script> -->
    <!-- <script src="<?=base_url() ?>Assets/vendor/bootstrap-5/js/bootstrap.bundle.min.js"></script> -->

    <!-- Customized jquery file  -->
    <script src="<?=base_url() ?>Assets/js/main.js"></script>
    <script src="<?=base_url() ?>Assets/js/color-scheme.js"></script>

    <!-- PWA app service registration and works -->
    <!-- <script src="<?=base_url() ?>Assets/js/pwa-services.js"></script> -->

    <!-- page level custom script -->
    <!-- <script src="<?=base_url() ?>Assets/js/app.js"></script> -->



<!--  ******* Hide Show Password *********** -->

                    
    <script type="text/javascript">
        $(function () {
            $("#toggle_pwd").click(function () {
                $(this).toggleClass("fa-eye fa-eye-slash");
               var type = $(this).hasClass("fa-eye-slash") ? "text" : "password";
                $("#password").attr("type", type);
            });
        });
    </script>


</body>



</html>