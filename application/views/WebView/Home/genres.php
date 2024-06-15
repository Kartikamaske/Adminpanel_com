


            <!---Main Content Start--->
            <div class="ms_content_wrapper padder_top60">
             
              

            <div class="d-flex" style="gap:10px;margin: 20px 0px;padding-left:30px">
                     <button type="button" id="englishbtn" class="btn btn-success" style="font-size:16px!important;padding: 4px 20px;border-radius:20px;    background: #36174d;border: none!important;">Bengali</button>

                     <button type="button" id="hindibtn" class="btn btn-success" style="font-size:16px!important;padding: 4px 20px;border-radius:20px;    background: #36174d;border: none!important;">Hindi</button>

                </div>

            
                <div class="ms_heading">
                    <h1>Genres</h1>
                    <span class="veiw_all"></span>
                </div>
              <div class="row" id="hindibox">

            

               




                    <?php 
                                                   
                                                   foreach($GenresdataH as $rw=>$value){


                                                    echo' <div class="col-12 col-md-6 col-lg-3">
                                                         <div class="swiper-wrapper">
                                                         <div class="swiper-slide box">
                                                         <div class="ms_rcnt_box">
                                                        <div class="ms_rcnt_box_img"  style="margin:0px 15px!important">';

                                                        echo ' <img src="'.base_url().'upload/'.$value->photo.'" style="height:245px;">';

                                                        echo'    <div class="ms_main_overlay">
                                                        <div class="ms_box_overlay"></div>
                                                        
                                                      
                                                    </div>
                                                </div>';

                                                echo ' <audio class="ms_main_overlay audio2 " controls>
                                                <source src="'.base_url().'upload/'.$value->audio.'" type="audio/mpeg"></source>
                                          </audio> ';
                                       

                                                echo '
                                                <div class="ms_rcnt_box_text" style="padding-left:25px">
                                                    <h3><a href="#">"'.$value->songName.'"</a></h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                
                                </div>';


                              }
                              ?>



                
              </div>






              <div class="row" id="englishbox">

        <?php 
                               
                               foreach($GenresdataE as $rw=>$value){


                                echo' <div class="col-12 col-md-6 col-lg-3">
                                     <div class="swiper-wrapper">
                                     <div class="swiper-slide box">
                                     <div class="ms_rcnt_box">
                                    <div class="ms_rcnt_box_img"  style="margin:0px 15px!important">';

                                    echo ' <img src="'.base_url().'upload/'.$value->photo.'" style="height:245px;">';

                                    echo'    <div class="ms_main_overlay">
                                    <div class="ms_box_overlay"></div>
                                    
                                  
                                </div>
                            </div>';

                            echo ' <audio class="ms_main_overlay audio2 " controls>
                            <source src="'.base_url().'upload/'.$value->audio.'" type="audio/mpeg"></source>
                      </audio> ';
                   

                            echo '
                            <div class="ms_rcnt_box_text" style="padding-left:25px">
                                <h3><a href="#">"'.$value->songName.'"</a></h3>
                            </div>
                        </div>
                    </div>
                </div>

            </div>';


          }
          ?>




</div>
         
          
      <!---Recently Played Music--->

      <div class="ms_heading" style="margin-top:20px">
                    <h1>Pop Songs</h1>
                    <span class="veiw_all"></span>
                </div>
       <div class="row">


<?php 
                               
                               foreach($pop as $rw=>$value){


                                echo' <div class="col-12 col-md-6 col-lg-3">
                                     <div class="swiper-wrapper">
                                     <div class="swiper-slide box">
                                     <div class="ms_rcnt_box">
                                    <div class="ms_rcnt_box_img"  style="margin:0px 15px!important">';

                                    echo ' <img src="'.base_url().'upload/'.$value->photo.'" style="height:245px;">';

                                    echo'    <div class="ms_main_overlay">
                                    <div class="ms_box_overlay"></div>
                                    
                                  
                                </div>
                            </div>';

                            echo ' <audio class="ms_main_overlay audio2 " controls>
                            <source src="'.base_url().'upload/'.$value->audio.'" type="audio/mpeg"></source>
                      </audio> ';
                   

                            echo '
                            <div class="ms_rcnt_box_text" style="padding-left:25px">
                                <h3><a href="#">"'.$value->songName.'"</a></h3>
                            </div>
                        </div>
                    </div>
                </div>

            </div>';


          }
          ?>




</div>





<div class="ms_heading" style="margin-top:20px">
                    <h1>dance Songs</h1>
                    <span class="veiw_all"></span>
                </div>
       <div class="row">


<?php 
                               
                               foreach($dance as $rw=>$value){


                                echo' <div class="col-12 col-md-6 col-lg-3">
                                     <div class="swiper-wrapper">
                                     <div class="swiper-slide box">
                                     <div class="ms_rcnt_box">
                                    <div class="ms_rcnt_box_img"  style="margin:0px 15px!important">';

                                    echo ' <img src="'.base_url().'upload/'.$value->photo.'" style="height:245px;">';

                                    echo'    <div class="ms_main_overlay">
                                    <div class="ms_box_overlay"></div>
                                    
                                  
                                </div>
                            </div>';

                            echo ' <audio class="ms_main_overlay audio2 " controls>
                            <source src="'.base_url().'upload/'.$value->audio.'" type="audio/mpeg"></source>
                      </audio> ';
                   

                            echo '
                            <div class="ms_rcnt_box_text" style="padding-left:25px">
                                <h3><a href="#">"'.$value->songName.'"</a></h3>
                            </div>
                        </div>
                    </div>
                </div>

            </div>';


          }
          ?>




</div>



<div class="ms_heading" style="margin-top:20px">
                    <h1>Rock Songs</h1>
                    <span class="veiw_all"></span>
                </div>
       <div class="row">


<?php 
                               
                               foreach($rock as $rw=>$value){


                                echo' <div class="col-12 col-md-6 col-lg-3">
                                     <div class="swiper-wrapper">
                                     <div class="swiper-slide box">
                                     <div class="ms_rcnt_box">
                                    <div class="ms_rcnt_box_img"  style="margin:0px 15px!important">';

                                    echo ' <img src="'.base_url().'upload/'.$value->photo.'" style="height:245px;">';

                                    echo'    <div class="ms_main_overlay">
                                    <div class="ms_box_overlay"></div>
                                    
                                  
                                </div>
                            </div>';

                            echo ' <audio class="ms_main_overlay audio2 " controls>
                            <source src="'.base_url().'upload/'.$value->audio.'" type="audio/mpeg"></source>
                      </audio> ';
                   

                            echo '
                            <div class="ms_rcnt_box_text" style="padding-left:25px">
                                <h3><a href="#">"'.$value->songName.'"</a></h3>
                            </div>
                        </div>
                    </div>
                </div>

            </div>';


          }
          ?>




</div>


<div class="ms_heading" style="margin-top:20px">
                    <h1>Disco Songs</h1>
                    <span class="veiw_all"></span>
                </div>
       <div class="row">


<?php 
                               
                               foreach($disco as $rw=>$value){


                                echo' <div class="col-12 col-md-6 col-lg-3">
                                     <div class="swiper-wrapper">
                                     <div class="swiper-slide box">
                                     <div class="ms_rcnt_box">
                                    <div class="ms_rcnt_box_img"  style="margin:0px 15px!important">';

                                    echo ' <img src="'.base_url().'upload/'.$value->photo.'" style="height:245px;">';

                                    echo'    <div class="ms_main_overlay">
                                    <div class="ms_box_overlay"></div>
                                    
                                  
                                </div>
                            </div>';

                            echo ' <audio class="ms_main_overlay audio2 " controls>
                            <source src="'.base_url().'upload/'.$value->audio.'" type="audio/mpeg"></source>
                      </audio> ';
                   

                            echo '
                            <div class="ms_rcnt_box_text" style="padding-left:25px">
                                <h3><a href="#">"'.$value->songName.'"</a></h3>
                            </div>
                        </div>
                    </div>
                </div>

            </div>';


          }
          ?>




</div>


<div class="ms_heading" style="margin-top:20px">
                    <h1>Romantic Songs</h1>
                    <span class="veiw_all"></span>
                </div>
       <div class="row">


<?php 
                               
                               foreach($romantic as $rw=>$value){


                                echo' <div class="col-12 col-md-6 col-lg-3">
                                     <div class="swiper-wrapper">
                                     <div class="swiper-slide box">
                                     <div class="ms_rcnt_box">
                                    <div class="ms_rcnt_box_img"  style="margin:0px 15px!important">';

                                    echo ' <img src="'.base_url().'upload/'.$value->photo.'" style="height:245px;">';

                                    echo'    <div class="ms_main_overlay">
                                    <div class="ms_box_overlay"></div>
                                    
                                  
                                </div>
                            </div>';

                            echo ' <audio class="ms_main_overlay audio2 " controls>
                            <source src="'.base_url().'upload/'.$value->audio.'" type="audio/mpeg"></source>
                      </audio> ';
                   

                            echo '
                            <div class="ms_rcnt_box_text" style="padding-left:25px">
                                <h3><a href="#">"'.$value->songName.'"</a></h3>
                            </div>
                        </div>
                    </div>
                </div>

            </div>';


          }
          ?>




</div>




               

             
               
                <!----Main div close---->
            </div>

        




            <script  src="<?php echo base_url('web_resources');?>/dist/js/jquery.min.js"></script>

            <script>
    

    $(document).ready(function(){
        $('#hindibox').hide();
  $("#englishbtn").click(function(){
    $('#hindibox').hide('slow');
    $('#englishbox').show('slow');

  });

  $("#hindibtn").click(function(){
    $('#hindibox').show('slow');
    $('#englishbox').hide('slow');

  });
});

</script>
























  