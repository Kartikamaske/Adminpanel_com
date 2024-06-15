


            <!---Main Content Start--->
            <div class="ms_content_wrapper padder_top60">
                <!---Recently Played Music--->
                <div class="ms_rcnt_slider">
                    <div class="ms_heading">
                        <h1>Top  10</h1>
                        <span class="veiw_all"></span>
                    </div>
                    <div class="swiper-container">
                        <div class="swiper-wrapper">

                          

                        <?php 
                              $a=0;
                                                   
                                                   foreach($data as $rw=>$value){

                                                    $y=$value->songId;
                                                    $a=$a+1;
                                                  
                                                     echo ' <div class="swiper-slide box" >
                                                     <div class="ms_rcnt_box song" >
                                                         <div class="ms_rcnt_box_img ">';
                                                        
                                                     echo ' <img  src="'.base_url().'upload/'.$value->photo.'" style="height:245px;">';
                                                     

                                                         echo ' <div class="ms_main_overlay">
                                                         <div class="ms_box_overlay"></div>


                                                     <div class="ms_more_icon">
                                                              <img src="'.base_url().'WebAssets/assets/images/svg/more.svg" alt="">
                                                          </div>
                                                          <ul class="more_option" id="bg">
                                                            
                                                            
                                                             
                                                              <li><a href="javascript:void(0)" onclick="requestAddList('.$y.','.$a.')"    name="btn_save" id="requestsongLable'.$y.'" ><span class="opt_icon"><span
                                                                              class="icon icon_playlst"></span></span>Add To
                                                                      Playlist</a>
                                                              </li>
                                                          
                                                          </ul>
                                                           
                                                       
                                                     </div>

                                                 </div>';

                                                 echo '<audio onplay="recentPlayList('.$y.','.$a.')"  class="  playback  ms_main_overlay audio1 " id="mp'.$y.'" controls>
                                                          <source   src="'.base_url().'upload/'.$value->audio.'" type="audio/mpeg"></source>
                                                     </audio> ';

                                     
                                                 
                                           echo '
                                                 <div class="ms_rcnt_box_text">
                                                     <h3><a href="#"  >"'.$value->songName.'" </a></h3>
                                                     <p>"'.$value->singer.'"</p> 
                                                     </div>
                                                     </div>
                                                     <span class="is-hidden"></span>
                                                 </div>';
                                
                 



                                               $a++;

                                                    
                                                 } ?>


                        </div>
                    </div>
                    <!-- Add Arrows -->
                    <div class="swiper-button-next slider_nav_next"></div>
                    <div class="swiper-button-prev slider_nav_prev"></div>
                </div>





               






                <!---Weekly Top 15--->
              

                <div class="d-flex" style="gap:10px;margin: 20px 0px;padding-left:30px">
                     <button type="button" id="englishbtn" class="btn btn-success" style="font-size:16px!important;padding: 4px 20px;border-radius:20px;    background: #36174d;border: none!important;">Bangali</button>

                     <button type="button" id="hindibtn" class="btn btn-success" style="font-size:16px!important;padding: 4px 20px;border-radius:20px;    background: #36174d;border: none!important;">Hindi</button>

                </div>

            
                <div class="ms_heading">
                    <h1>Genres</h1>
                    <span class="veiw_all"></span>
                </div>
              <div class="row" id="hindibox">

            

               




                     <?php 
                             $b=0;
                                                            
                                                   foreach($GenresdataH as $rw=>$value){

                                                    $y=$value->songId;
                                                    $b=$b+1;


                                                    echo' <div class="col-12 col-md-6 col-lg-3">
                                                         <div class="swiper-wrapper">
                                                         <div class="swiper-slide box">
                                                         <div class="ms_rcnt_box">
                                                        <div class="ms_rcnt_box_img"  style="margin:0px 15px!important">';

                                                        echo ' <img src="'.base_url().'upload/'.$value->photo.'" style="height:245px;">';

                                                        echo'    <div class="ms_main_overlay">
                                                        <div class="ms_box_overlay"></div>

                                                        <div class="ms_more_icon">
                                                              <img src="'.base_url().'WebAssets/assets/images/svg/more.svg" alt="">
                                                          </div>
                                                          <ul class="more_option" id="bg">
                                                            
                                                            
                                                             
                                                              <li><a href="javascript:void(0)" onclick="requestAddList('.$y.','.$b.')"    name="btn_save" id="requestsongLable'.$y.'" ><span class="opt_icon"><span
                                                                              class="icon icon_playlst"></span></span>Add To
                                                                      Playlist</a>
                                                              </li>
                                                          
                                                          </ul>
                                                        
                                                      
                                                    </div>
                                                </div>';

                                                echo ' <audio onplay="recentPlayList('.$y.','.$b.')" class="ms_main_overlay audio2 " controls>
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
<!--                         
                        <div class="ms_play_icon">
                                                            <img src="'.base_url().'WebAssets/assets/images/svg/play.svg" alt="">
                                                        </div> -->


                
              </div>






              <div class="row" id="englishbox">

            

               




<?php 
$c=0;
                               
                               foreach($GenresdataE as $rw=>$value){
                                $y=$value->songId;
                                $c=$c+1;


                                echo' <div class="col-12 col-md-6 col-lg-3">
                                     <div class="swiper-wrapper">
                                     <div class="swiper-slide box">
                                     <div class="ms_rcnt_box">
                                    <div class="ms_rcnt_box_img"  style="margin:0px 15px!important">';

                                    echo ' <img src="'.base_url().'upload/'.$value->photo.'" style="height:245px;">';

                                    echo'    <div class="ms_main_overlay">
                                    <div class="ms_box_overlay"></div>

                                    <div class="ms_more_icon">
                                                              <img src="'.base_url().'WebAssets/assets/images/svg/more.svg" alt="">
                                                          </div>
                                                          <ul class="more_option" id="bg">
                                                            
                                                            
                                                             
                                                              <li><a href="javascript:void(0)" onclick="requestAddList('.$y.','.$c.')"    name="btn_save" id="requestsongLable'.$y.'" ><span class="opt_icon"><span
                                                                              class="icon icon_playlst"></span></span>Add To
                                                                      Playlist</a>
                                                              </li>
                                                          
                                                          </ul>
                                    
                                  
                                </div>
                            </div>';

                            echo ' <audio onplay="recentPlayList('.$y.','.$c.')" class="ms_main_overlay audio2 " controls>
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
<!--                         
    <div class="ms_play_icon">
                                        <img src="'.base_url().'WebAssets/assets/images/svg/play.svg" alt="">
                                    </div> -->



</div>



         
              
                <!----Featured Albumn Section Start  <a href="#">view more</a>--->
                <div class="ms_fea_album_slider">
                    <div class="ms_heading">
                        <h1>Recently Played</h1>
                        <span class="veiw_all"></span>
                    </div>
                    <div class="ms_album_slider swiper-container">
                        <div class="swiper-wrapper" id="swiperBox">
                        

                      
                         
                        
                        </div>
                    </div>

                   
      
        <!-- Put any keywords here -->
        <!-- <span class="is-hidden">secret</span> -->
      

                    <!-- Add Arrows -->
                    <div class="swiper-button-next3 slider_nav_next"></div>
                    <div class="swiper-button-prev3 slider_nav_prev"></div>
                </div>
            
             
               
                <!----Main div close---->
            </div>

        

            <script  src="<?php echo base_url('web_resources');?>/dist/js/jquery.min.js"></script>
             <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
            


            <script>



let cards = document.querySelectorAll('.box')

function liveSearch() {
let search_query = document.getElementById("searchbox").value;

//Use innerText if all contents are visible
//Use textContent for including hidden elements
for (var i = 0; i < cards.length; i++) {
    if(cards[i].textContent.toLowerCase()
            .includes(search_query.toLowerCase())) {
        cards[i].classList.remove("is-hidden");
    } else {
        cards[i].classList.add("is-hidden");
    }
}
}

//A little delay
let typingTimer;               
let typeInterval = 500;  
let searchInput = document.getElementById('searchbox');

searchInput.addEventListener('keyup', () => {
clearTimeout(typingTimer);
typingTimer = setTimeout(liveSearch, typeInterval);
});
</script>

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

<script>
// save apply request
document.addEventListener('play', function(e){
    var audios = document.getElementsByTagName('audio');
    for(var i = 0, len = audios.length; i < len;i++){
        if(audios[i] != e.target){
            audios[i].pause();
        }
    }
}, true);




recentPlayList= function (value)
        {
     
    $('#audio1').stop();
    var myAudio1 = document.getElementById("mp"+value);
myAudio1.play();
  var fkuserId =<?php echo $_SESSION["userId"] ?>;
  var fksongId = value;
//   alert(fksongId);

 $.ajax({

          url:"<?php echo base_url(); ?>Home/insertRecentPlayList",
          method:"POST",
          data:{'fkuserId':fkuserId,'fksongId':fksongId},
     
          dataType:'JSON',
          success:function(res)
          {
        //     swal({
        //     title:"",
        //     text:"Song Added Playlist",
        //     type:"success",
        //     showCancelButton: false, 
        //     showConfirmButton: false,
        //      width: '1000px',
        //     timer:1000
        // });
        getRecentlist();
            
           }
         });
      }



       // get vehicle list
     function getRecentlist()
      {
    
        $.ajax({
                            url:base_path+'Home/getRecentlist',
                            // dataType: 'json',
                            success: function(data){
                                console.log(data);
                                $('#swiperBox').empty();
                                $('#swiperBox').append(data);
                                                        
                            }
                        });
                      
    
      }

      getRecentlist();



    //   save apply request

    
    requestAddList= function (value)
        {
  var fkuserIds =<?php echo $_SESSION["userId"] ?>;
  var fksongIds = value;
 $.ajax({

          url:"<?php echo base_url(); ?>Home/insertAddList",
          method:"POST",
          data:{'fkuserIds':fkuserIds,'fksongIds':fksongIds},
     
          dataType:'JSON',
          success:function(res)
          {
            swal({
            title:"",
            text:"Recent Playlist Added",
            type:"success",
            showCancelButton: false, 
            showConfirmButton: false,
             width: '1000px',
            timer:1000
        });

        $('#requestsongLable'+value+'').html('Song Added').css({
            "color": "black","font-size":"16px"
        });
            
           }
         });
      }
      
 </script>
























  