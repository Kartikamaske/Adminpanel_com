

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
    <link rel="shortcut icon" type="image/png" href="<?=base_url()  ?>WebAssets/assets/images/favicon.png">

    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>web_resources/dist/css/sweetalert.css">

    <script>
   
        var base_path="<?php echo base_url();?>";
     </script>




     <style>
        .ms_rcnt_box_img {
            position:relative;
            overflow:hidden;
        }
    
      .audio1 {
        filter: sepia(20%) saturate(70%) grayscale(1) contrast(99%) invert(12%);
    width: 264px;
    height: 30px;
    position: absolute;
    left: 0;
    bottom: 65px;
    transition:all 0.5s linear;
    
}
.audio2 {
    filter: sepia(20%) saturate(70%) grayscale(1) contrast(99%) invert(12%);
    width: 255px;
    height: 30px;
    position: absolute;
    left: 15px;
    bottom: 42px;
    transition: all 0.5s linear;
    
}

.audio3 {
        filter: sepia(20%) saturate(70%) grayscale(1) contrast(99%) invert(12%);
    width: 264px;
    height: 30px;
    position: absolute;
    left: 0;
    bottom: 65px;
    transition:all 0.5s linear;
    
}
audio::-webkit-media-controls-panel {
  background-color: rgba(0,0,255,0.0);
}

.side-bar-st-1 {
    background: #d4e6ff;
    padding: 30px;
    border-radius: 10px;
}
.twm-candidate-profile-pic {
    position: relative;
    display: block;
    max-width: 200px;
    margin: 0px auto 5px;
    border: 1px solid #fff;
    border-radius: 10px;
}

input[type="file"]::file-selector-button {
  border: none!important;
  padding: 0.2em 0.4em;
  border-radius: 8px;
  background-color: #1967d2;
  transition: 1s;
  color:white;
  cursor: pointer;
}

input[type="file"]::file-selector-button:hover {
  background-color: #be0cad;
  /* border: 2px solid #00cec9; */
}


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
                        <a href="index.html"><img src="<?=base_url()  ?>WebAssets/assets/images/logo.png" alt="" class="img-fluid" /></a>
                    </div>
                    <div class="ms_logo_open">
                        <a href="index.html"><img src="<?=base_url()  ?>WebAssets/assets/images/logo.png" alt="" class="img-fluid" /></a>
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
                        <li  ><a href="<?=base_url() ?>Profile" title="Profile">
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
              
            </div>
            <div class="ms_top_right">
             
            
            </div>
        </div>

    

          
            </div>

<div class="ms_content_wrapper padder_top60">
              <div class="container">
                <div class="row ">
                  <div class="col-xl-4  mx-auto col-lg-4 col-md-12 rightSidebar m-b30">
                    <div class="side-bar-st-1">
                      <div class="">

                       <div class="twm-candidate-profile-pic" >
                        <div class="img_blockp">
          
                               <label class="newbtn" style="padding:22px">
                           <img id="imgpreview1" name="imgpreview1"   style="height: 150px!important;
    border-radius: 10px;
    border: 3px solid white;"  src="<?php 
                                      if(!empty($data[0]->AttachFile)){echo base_url().'upload/'.$data[0]->AttachFile;}
                                      else 
                                        echo base_url().'WebAssets/assets/images/bannergif.gif'
                                      
                                      ?>" style="cursor: pointer;" width="150"  alt="user"  style="height: 150px!important;
                                      border-radius: 10px;
                                      border: 3px solid white;">

                   <div class="text-center">
                       <input type="file" class="button-sm" class="form-control-sm " id="AttachFile" name="AttachFile" onchange="readURL(this);" style="display: block;
    display: block;
    width: 94px;
    margin: 9px auto 10px auto;">

                        <input type="hidden" name="hiddenphoto1"> 

          
                    </div>   
                      </label>
                      </div></div>





                      </div>
                      <div class="twm-mid-content twm-candidate-profile-pic " style="border:none!important" >
                      <p style="font-size:18px;color:black"><b>UserName :</b><?php if(!empty($data))echo $data[0]->username; ?></p>
                        
                      <p style="font-size:18px;color:black"><b>Password </b> <?php if(!empty($data))echo $data[0]->password; ?></p>

                     
                        <p style="font-size:18px;color:black"><b>Email </b> <?php if(!empty($data))echo $data[0]->email; ?></p>
                        
                        <!-- <p style="font-size:18px;color:black"><b>Add to Favourite </b> </p>
                        <p style="font-size:18px;color:black"><b>PlayList </b> </p> -->

                       
                        
                      </div>
    
                      <!-- <div class="twm-nav-list-1">
                        <ul>
                          <li>
                            <a href="<?=base_url() ?>JobList"
                              ><i class="fa fa-th-large"></i> Job List</a
                            >
                          </li>
                          <li class="active">
                            <a href="<?=base_url() ?>Profile"
                              ><i class="fa fa-user"></i> My Profile</a
                            >
                          </li>
                         
                          
                        </ul>
                      </div> -->


                    </div>
                  </div>
                  </div>
                  </div>
                  </div>
                  </div>
                  </div>


          <!----Footer Start---->
          <div class="ms_footer_wrapper">
                <!-- <div class="ms_footer_logo">
                    <a href="index.html"><img src="<?=base_url()  ?>Assets/assets/images/open_logo.png" alt=""></a>
                </div> -->
                <div class="ms_footer_inner">
                    <div class="row">
                        <div class="col-lg-4 col-md-6">
                            <div class="footer_box">
                                <h1 class="footer_title">music station</h1>
                                <p>Enjoy the most popular songs of Arijit Singh @symphonic. We have a collection of all the new, old & hit songs of Arijit Singh. Play & Download now!</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="footer_box footer_app">
                                <h1 class="footer_title">
                            
                               
                            </div>
                        </div>
                        <!-- <div class="col-lg-3 col-md-6">
                            <div class="footer_box footer_subscribe">
                                <h1 class="footer_title">subscribe</h1>
                                <p>Subscribe to our newsletter and get latest updates and offers.</p>
                                <form>
                                    <div class="form-group">
                                        <input type="text"  class="form-control" placeholder="Enter Your Name">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Enter Your Email">
                                    </div>
                                    <div class="form-group">
                                        <a href="#" class="ms_btn">sign me up</a>
                                    </div>
                                </form>
                            </div>
                        </div> -->
                        
                                        
                                    </li>
                                </ul>
                                
                            </div>
                        </div>
                    </div>
                </div>
                <!----Copyright---->
                <div class="col-lg-12">
                    <div class="ms_copyright">
                        <div class="footer_border"></div>
                        <p>Copyright &copy; 2023 <a href="#">symphonic</a>
                    </p>
                    </div>
                </div>
            </div>
            <!----Audio Player Section---->
            <!-- <div class="ms_player_wrapper"> -->
                <!-- <div class="ms_player_close">
                    <i class="fa fa-angle-up" aria-hidden="true"></i>
                </div> -->
                <!-- <div class="player_mid">
                    <div class="audio-player">
                        <div id="jquery_jplayer_1" class="jp-jplayer"></div>
                        <div id="jp_container_1" class="jp-audio" role="application" aria-label="media player"> -->
                            <!-- <div class="player_left"> -->
                                <!-- <div class="ms_play_song">
                                    <div class="play_song_name">
                                        <a href="javascript:void(0);" id="playlist-text">
                                            <div class="jp-now-playing flex-item">
                                                <div class="jp-track-name"></div>
                                                <div class="jp-artist-name"></div>
                                            </div>
                                        </a>
                                    </div>
                                </div> -->
                                <!-- <div class="play_song_options">
                                    <ul>
                                        <li><a href="#"><span class="song_optn_icon"><i
                                                        class="ms_icon icon_download"></i></span>download now</a></li>
                                        <li><a href="#"><span class="song_optn_icon"><i
                                                        class="ms_icon icon_fav"></i></span>Add To Favourites</a></li>
                                        <li><a href="#"><span class="song_optn_icon"><i
                                                        class="ms_icon icon_playlist"></i></span>Add To Playlist</a>
                                        </li>
                                        <li><a href="#"><span class="song_optn_icon"><i
                                                        class="ms_icon icon_share"></i></span>Share</a></li>
                                    </ul>
                                </div> -->
                                <!-- <span class="play-left-arrow"><i class="fa fa-angle-right"
                                        aria-hidden="true"></i></span> -->
                            <!-- </div> -->
                            <!----Right Queue---->



                            <!-- <div class="jp_queue_wrapper"> -->
                                <!-- <span class="que_text" id="myPlaylistQueue"><i class="fa fa-angle-up"
                                        aria-hidden="true"></i> queue</span> -->
                                <!-- <div id="playlist-wrap" class="jp-playlist">
                                    <div class="jp_queue_cls"><i class="fa fa-times" aria-hidden="true"></i></div> -->
                                    <!-- <h2>queue</h2> -->
                                    <!-- <div class="jp_queue_list_inner">
                                        <ul>
                                            <li>&nbsp;</li>
                                        </ul>
                                    </div> -->
                                    <!-- <div class="jp_queue_btn">
                                        <a href="javascript:;" class="ms_clear" data-toggle="modal"
                                            data-target="#clear_modal">clear</a>
                                        <a href="clear_modal.html" class="ms_save" data-toggle="modal"
                                            data-target="#save_modal">save</a>
                                    </div> -->
                                <!-- </div>
                            </div> -->
                            <!-- <div class="jp-type-playlist">
                                <div class="jp-gui jp-interface flex-wrap"> -->
                                    <!-- <div class="jp-controls flex-item">
                                        <button class="jp-previous" tabindex="0">
                                            <i class="ms_play_control"></i>
                                        </button>
                                        <button class="jp-play" tabindex="0">
                                            <i class="ms_play_control"></i>
                                        </button>
                                        <button class="jp-next" tabindex="0">
                                            <i class="ms_play_control"></i>
                                        </button>
                                    </div> -->
                                    <!-- <div class="jp-progress-container flex-item"> -->
                                        <!-- <div class="jp-time-holder">
                                            <span class="jp-current-time" role="timer" aria-label="time">&nbsp;</span>
                                            <span class="jp-duration" role="timer" aria-label="duration">&nbsp;</span>
                                        </div> -->
                                        <!-- <div class="jp-progress">
                                            <div class="jp-seek-bar">
                                                <div class="jp-play-bar">
                                                    <div class="bullet">
                                                    </div>
                                                </div>
                                            </div>
                                        </div> -->
                                    <!-- </div> -->
                                    <!-- <div class="jp-volume-controls flex-item">
                                        <div class="widget knob-container">
                                            <div class="knob-wrapper-outer">
                                                <div class="knob-wrapper">
                                                    <div class="knob-mask">
                                                        < <div class="knob d3"><span></span></div>
                                                        <div class="handle"></div> -->
                                                        <!-- <div class="round">
                                                            <img src="<?=base_url()  ?>WebAssets/assets/images/svg/volume.svg" alt="">
                                                        </div> -->
                                                    <!-- </div>
                                                </div>
                                               
                                            </div>
                                        </div>
                                    </div> --> 
                                    <!-- <div class="jp-toggles flex-item">
                                        <button class="jp-shuffle" tabindex="0" title="Shuffle">
                                            <i class="ms_play_control"></i></button>
                                        <button class="jp-repeat" tabindex="0" title="Repeat"><i
                                                class="ms_play_control"></i></button>
                                    </div> -->
                                    <!-- <div class="jp_quality_optn custom_select">
                                        <select>
                                            <option>quality</option>
                                            <option value="1">HD</option>
                                            <option value="2">High</option>
                                            <option value="3">medium</option>
                                            <option value="4">low</option>
                                        </select>
                                    </div> -->
                                <!-- </div>
                            </div> -->
                        <!-- </div> -->
                    <!-- </div>
                </div> -->
                <!--main div-->
            <!-- </div>
        </div> -->
      



        






</form>
        <!--Main js file Style-->
        <script type="text/javascript" src="<?=base_url()  ?>WebAssets/assets/js/jquery.min.js"></script>
        <script type="text/javascript" src="<?=base_url()  ?>WebAssets/assets/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="<?=base_url()  ?>WebAssets/assets/js/plugins/swiper/js/swiper.min.js"></script>
        <script type="text/javascript" src="<?=base_url()  ?>WebAssets/assets/js/plugins/player/jplayer.playlist.min.js"></script>
        <script type="text/javascript" src="<?=base_url()  ?>WebAssets/assets/js/plugins/player/jquery.jplayer.min.js"></script>
        <script type="text/javascript" src="<?=base_url()  ?>WebAssets/assets/js/plugins/player/audio-player.js"></script>
        <script type="text/javascript" src="<?=base_url()  ?>WebAssets/assets/js/plugins/player/volume.js"></script>
        <script type="text/javascript" src="<?=base_url()  ?>WebAssets/assets/js/plugins/nice_select/jquery.nice-select.min.js"></script>
        <script type="text/javascript" src="<?=base_url()  ?>WebAssets/assets/js/plugins/scroll/jquery.mCustomScrollbar.js"></script>
        <script type="text/javascript" src="<?=base_url()  ?>WebAssets/assets/js/custom.js"></script>
        <!-- <script  src="<?php echo base_url('web_resources');?>/dist/js/jquery.min.js"></script>  -->


        <script src="<?php echo base_url(); ?>web_resources/dist/js/sweetalert.min.js"></script>

       <!-- <script  src="<?php echo base_url('web_resources');?>/dist/js/controllers/RegistrationCreate.js"></script>

       <script  src="<?php echo base_url('web_resources');?>/dist/js/controllers/LoginCreate.js"></script> -->



<!--     

<script>
    $(document).ready(function(){
   



$("#email").oninput(function(){

    var user_id=document.getElementById("email").value;
    alert(user_id);

var pat1=/^\d{6}$/;
var pattern=/^\d{10}$/;
var filter=/^([a-z A-Z 0-9 _\.\-])+\@(([a-z A-Z 0-9\-])+\.)+([a-z A-z 0-9]{3,3})+$/;
if(!filter.test(user_id.value))
{
 $('#Emaileerror').fadeIn().html("Email is in @example.com format");
                                 setTimeout(function(){$('#Emaileerror').fadeOut('slow') }, 5000);
return false;
}
else{
    $('#Emaileerror').hide();
}

});
});




var userIds =<?php echo $_SESSION["userId"] ?>;

if(userIds){
    $('#hideshowbox').hide();
}
else{
    $('#hideshowbox').show();

}







</script>  -->


</body>



</html>



                  <script  src="<?php echo base_url('web_resources');?>/dist/js/jquery.min.js"></script>
             <!-- <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script> -->


             


<script>
      function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#imgpreview1').attr('src', e.target.result);
                };
                 $('#hiddenphoto1').val('');
                reader.readAsDataURL(input.files[0]);
            }
        }

        $("#AttachFile").change(function(){
           
  
  saveperform();
 
});

function saveperform() {
             var input = document.getElementById("AttachFile");
  file = input.files[0];
  if(file != undefined){
    formData= new FormData();
    if(!!file.type.match(/image.*/)){
      formData.append("image", file);
      $.ajax({
        url: base_path+"Profile/photoupdate",
        type: "POST",
        data: formData,
        processData: false,
        contentType: false,
        success: function(data){
            // alert("saveed");
            swal({
            title:"",
            text:"Profile Updated",
            type:"success",
            showCancelButton: false, 
            showConfirmButton: false,
             width: '1000px',
            timer:1000
        });
          window.location.href = base_path+"Profile";  
        }
      });
    }else{
      alert('Not a valid image!');
    }
  }else{
    alert('Input something!');
  }
        }



</script>
