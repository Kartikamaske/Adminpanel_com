<!DOCTYPE html>

<!--[if !IE]><!-->
<html lang="en">


<head>
    <title> Online Music</title>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta name="description" content="Music">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <meta name="MobileOptimized" content="320">
    <!--Start Style -->
    <link rel="stylesheet" type="text/css" href="<?=base_url()  ?>WebAssets/assets/css/fonts.css">
    <link rel="stylesheet" type="text/css" href="<?=base_url()  ?>WebAssets/assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?=base_url()  ?>WebAssets/assets/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="<?=base_url()  ?>WebAssets/assets/js/plugins/swiper/css/swiper.min.css">
    <link rel="stylesheet" type="text/css" href="<?=base_url()  ?>WebAssets/assets/js/plugins/nice_select/nice-select.css">
    <link rel="stylesheet" type="text/css" href="<?=base_url()  ?>WebAssets/assets/js/plugins/player/volume.css">
    <link rel="stylesheet" type="text/css" href="<?=base_url()  ?>WebAssets/assets/js/plugins/scroll/jquery.mCustomScrollbar.css">
    <link rel="stylesheet" type="text/css" href="<?=base_url()  ?>WebAssets/assets/css/style.css">
    <!-- Favicon Link -->
    <link rel="shortcut icon" type="image/png" href="<?=base_url()  ?>Assets/images/logo.png">

    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>web_resources/dist/css/sweetalert.css">
    <link rel="stylesheet" type="" href="<?=base_url() ?>Assets/css/bulma.min.css">

    <script>
   
        var base_path="<?php echo base_url();?>";
     </script>




<script type="text/javascript" src="<?=base_url()  ?>WebAssets/assets/js/jquery.min.js"></script>

  <script>
    $(document).ready(function(){
        $("#shows").css("display", "none");

        var userIdss =<?php echo $_SESSION["userId"] ?>;
        if(userIdss){
            $("#shows").css("display", "block");
       
        }
        

        
    })
  </script>





     <style>
    
        .ms_rcnt_box_img {
            position:relative;
            overflow:hidden;
        }
    
      .audio1 {
        filter: sepia(20%) saturate(70%) grayscale(1) contrast(99%) invert(12%);
    width: 190px;
    height: 30px;
    position: absolute;
    left: 0;
    bottom: 65px;
    transition:all 0.5s linear;
    
}
.audio2 {
    filter: sepia(20%) saturate(70%) grayscale(1) contrast(99%) invert(12%);
    width: 270px;
    height: 30px;
    position: absolute;
    left: 15px;
    bottom: 42px;
    transition: all 0.5s linear;
    
}

.audio3 {
        filter: sepia(20%) saturate(70%) grayscale(1) contrast(99%) invert(12%);
    width: 190px;
    height: 30px;
    position: absolute;
    left: 0;
    bottom: 65px;
    transition:all 0.5s linear;
    
}
audio::-webkit-media-controls-panel {
  background-color: rgba(0,0,255,0.0);
}

/* audio::-webkit-media-controls-volume-slider {
  background-color: #B1D4E0;
  border-radius: 2px;
  padding-left: 8px;
  padding-right: 8px;
} */


     </style>
</head>

<body>
    <!----Loader Start---->
    <div class="ms_loader">
        <div class="wrap">
            <img src="<?=base_url()  ?>WebAssets/assets/images/loader.gif" alt="">
        </div>
    </div>
    <!----Main Wrapper Start---->
    <div class="ms_main_wrapper">
        <!---Side Menu Start--->
        <div class="ms_sidemenu_wrapper">
            <div class="ms_nav_close">
                <i class="fa fa-angle-right" aria-hidden="true"></i>
            </div>
            <div class="ms_sidemenu_inner">
                <div class="ms_logo_inner">
                    <div class="ms_logo">
                        <a href="index.html"><img src="<?=base_url()  ?>Assets/images/logo.png" alt="" class="img-fluid" /></a>
                    </div>
                    <div class="ms_logo_open">
                        <a href="index.html"><img src="<?=base_url()  ?>Assets/images/logo.png" alt="" class="img-fluid" /></a>
                    </div>
                </div>
                <div class="ms_nav_wrapper">
                    <ul>
                        <li><a href="<?=base_url("Home") ?>" class="active" title="Home">
                                <span class="nav_icon">
                                    <span class="fa fa-home iconss"></span>
                                </span>
                                <span class="nav_text">
                                    Home
                                </span>
                            </a>
                        </li>
                       
                        <li><a href="<?=base_url() ?>Genres" title="Genres">
                                <span class="nav_icon">
                                    <span class="fa fa-volume-up iconss"></span>
                                </span>
                                <span class="nav_text">
                                    Genres
                                </span>
                            </a>
                        </li>
                        <li id="shows" style="display:none!important" ><a href="<?=base_url() ?>Profile" title="Profile">
                                <span class="nav_icon"  >
                                    <span class="fa fa-user-circle iconss"></span>
                                </span>
                                <span class="nav_text">
                                  Profile
                                </span>
                            </a>
                        </li>
                        <li><a href="<?=base_url() ?>AddPlayList" title="AddPlayList">
                                <span class="nav_icon">
                                    <span class="fa fa-list iconss"></span>
                                </span>
                                <span class="nav_text">
                                AddPlayList
                                </span>
                            </a>
                        </li>

                        <li><a href="<?=base_url("Login/logout") ?>" title="Logout">
                            <span class="nav_icon">
                                <span class="fa fa-sign-out iconss"></span>
                            </span>
                            <span class="nav_text">
                               Logout
                            </span>
                        </a>
                    </li>
                    </ul>
                   
                   
                </div>
            </div>
        </div><!--end of side menu-->
        <!---Header--->
        <div class="ms_header">
            <div class="ms_top_left">
                <div class="ms_top_search">
                    <input type="text" id="searchbox"  class="form-control" placeholder="Search Music Here..">
                   
                </div>
               
            </div>
            <!-- <div class="ms_top_right">
              
                <div class="ms_top_btn" id="hideshowbox">
                    <a id="hideregisterbtn" href="javascript:;" class="ms_btn reg_btn" data-bs-toggle="modal" data-bs-target="#myModalReg"><span>register</span></a>

                    <a href="javascript:;" class="ms_btn login_btn" data-bs-toggle="modal"
                    data-bs-target="#myModals"><span>login</span></a>
                </div>
            </div> -->
        </div>

    

          
            </div>


           