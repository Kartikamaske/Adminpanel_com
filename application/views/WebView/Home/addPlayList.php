


            <!---Main Content Start--->
            <div class="ms_content_wrapper padder_top60">
             


          
            
                <div class="ms_heading">
                    <h1>Play List Songs</h1>
                    <span class="veiw_all"></span>
                </div>
              <div class="row" id="hindibox">

            

               




                    <?php 
                                                   
                                                   foreach($data as $rw=>$value){


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
    

  
































  