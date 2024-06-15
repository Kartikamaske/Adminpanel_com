


            <!---Main Content Start--->
            <div class="ms_content_wrapper padder_top60">
             
              

                <!-- <div class="d-flex" style="gap:10px;margin: 20px 0px;padding-left:30px">
                     <button type="button" class="btn btn-success" style="font-size:16px!important;padding: 4px 20px;border-radius:20px;    background: #36174d;border: none!important;">English</button>
                     <button type="button" class="btn btn-success" style="font-size:16px!important;padding: 4px 20px;border-radius:20px;    background: #36174d;border: none!important;">Hindi</button>

                </div> -->

            
                <div class="ms_heading">
                    <h1>Karaoke</h1>
                    <span class=""><a href="#"></a></span>
                </div>
              <div class="row">

            

               




                    <?php 
                                                   
                                                   foreach($Genresdata as $rw=>$value){


                                                    echo' <div class="col-12 col-md-6 col-lg-3">
                                                         <div class="swiper-wrapper">
                                                         <div class="swiper-slide">
                                                         <div class="ms_rcnt_box">
                                                        <div class="ms_rcnt_box_img"  style="margin:0px 15px!important">';

                                                        echo ' <img src="'.base_url().'upload/'.$value->photo.'" style="height:245px;">';

                                                        echo'    <div class="ms_main_overlay">
                                                        <div class="ms_box_overlay"></div>
                                                        <div class="ms_more_icon">
                                                            <img src="'.base_url().'WebAssets/assets/images/svg/more.svg" alt="">
                                                        </div>
                                                        <ul class="more_option">
                                                            <li><a href="#"><span class="opt_icon"><span
                                                                            class="icon icon_fav"></span></span>Add To
                                                                    Favourites</a>
                                                            </li>
                                                            <li><a href="#"><span class="opt_icon"><span
                                                                            class="icon icon_queue"></span></span>Add To Queue</a>
                                                            </li>
                                                            <li><a href="#"><span class="opt_icon"><span
                                                                            class="icon icon_dwn"></span></span>Download Now</a>
                                                            </li>
                                                            <li><a href="#"><span class="opt_icon"><span
                                                                            class="icon icon_playlst"></span></span>Add To
                                                                    Playlist</a>
                                                            </li>
                                                            <li><a href="#"><span class="opt_icon"><span
                                                                            class="icon icon_share"></span></span>Share</a></li>
                                                        </ul>
                                                      
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

        





























  