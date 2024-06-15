<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
<!-- Select2 CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
        <!-- =============== Left side End ================-->
        <div class="main-content-wrap sidenav-open d-flex flex-column">
            <!-- ============ Body content start ============= -->
            <div class="main-content " style="margin-top:-50px">
                <div class="breadcrumb">
                    <!-- <h1>User Creation</h1> -->
                   
                </div>
                <div class="separator-breadcrumb border-top"></div>
                <div class="form-row">
                    <div class="col-md-12">
                        <div class="card mb-4">
                            <div class="card-body">
                          
                            <h3><img src="https://img.icons8.com/fluency/512/add-song.png" style="width:25px" >&ensp;Add New Song</h3>
                            <form role="form" id="Form" enctype="multipart/form-data" action="" method="post">

                            <input type="hidden" class="form-control" id="songId" placeholder="" name="songId" value="<?php if(!empty($dataa[0]->songId)){echo $dataa[0]->songId;}?>">

                                <div class="form-row">
                                    <div class="col-12 col-sm-2 col-md-4">
                                        <div class="mb-3">
                                            <label for="songName">Song Name <span class="text-danger">*</span> </label>
                                            <input type="text" class="form-control" id="songName" placeholder="" name="songName" value="<?php if(!empty($dataa[0]->songName)){echo $dataa[0]->songName;}?>">
                                        </div>
                                    </div>

                                    <div class="col-12 col-sm-2 col-lg-2 col-md-2">
                                        <div class="mb-3">
                                          <label for="duration">Duration Time:</label>
                                          <input type="time" class="form-control" id="duration" placeholder="" name="duration" value="<?php if(!empty($dataa[0]->duration)){echo $dataa[0]->duration;}?>">
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-2 col-md-4">
                                        <div class="mb-3">
                                            <label for="movie">Movie:</label>
                                            <input type="text" class="form-control" id="movie"  name="movie" value="<?php if(!empty($dataa[0]->movie)){echo $dataa[0]->movie;}?>">
                                        </div>
                                    </div>

                                    <div class="col-12 col-sm-2 col-md-4">
                                        <div class="mb-3">
                                            <label for="artist">Artist <span class="text-danger">*</span> </label>
                                            <input type="text" class="form-control" id="artist"  name="artist" value="<?php if(!empty($dataa[0]->artist)){echo $dataa[0]->artist;}?>">
                                        </div>
                                    </div>

                                    <div class="col-12 col-sm-2 col-md-4">
                                        <div class="mb-3">
                                            <label for="">Musician:</label>
                                            <input type="text" class="form-control" id="musician" placeholder="" name="musician" value="<?php if(!empty($dataa[0]->musician)){echo $dataa[0]->musician;}?>">
                                        </div>
                                    </div>


                                    

                                    

                                
                                     <div class="col-12 col-sm-2 col-lg-2 col-md-2">
                                        <div class="mb-3">
                                        <label for="purchase">Song Type:</label>
                                            <select class="form-control" id="fksongtype" name="fksongtype">
                                            <option value="0">---choose song type---</option>
                                            <option value="1">Top 10</option>
                                              <option value="2">Genres</option>
                                              <option value="3">Pop</option>
                                              <option value="4">Dance</option>
                                              <option value="5">Rock</option>
                                              <option value="6">Disco</option>
                                              <option value="7">Romantic</option>


                                             
                                            </select>
                                        </div>
                                     </div>
                                     <div class="col-12 col-sm-2 col-lg-2 col-md-2">
                                        <div class="mb-3">
                                        <label for="purchase">Language <span class="text-danger">*</span> </label>
                                            <select class="form-control" id="language" name="language">
                                            <option value="0">---choose language---</option>
                                            <option value="1">Hindi</option>
                                              <option value="2">bengali</option>
                                             
                                            </select>
                                        </div>
                                     </div>
                                     
                              

                                    <div class="col-12 col-sm-2 col-md-4">
                                        <div class="mb-3">
                                            <label for="Lyrics">Lyrics:</label>
                                            <input type="text" class="form-control" id="lyrics" placeholder="" name="lyrics" value="<?php if(!empty($dataa[0]->lyrics)){echo $dataa[0]->lyrics;}?>">
                                        </div>
                                    </div>

                                    <div class="col-12 col-sm-2 col-md-4">
                                        <div class="mb-3">
                                            <label for="Singer">Singer:</label>
                                            <input type="text" class="form-control" id="singer" placeholder="" name="singer" value="<?php if(!empty($dataa[0]->singer)){echo $dataa[0]->singer;}?>">
                                        </div>
                                    </div>




                                   
                                    <div class="col-12 col-sm-2 col-lg-3 col-md-3">
                                        <div class="mb-3">
                                            <label for="songlyrics">Song Lyrics:</label>
                                            <input type="text" class="form-control" id="songlyrics" placeholder="" name="songlyrics" value="<?php if(!empty($dataa[0]->songlyrics)){echo $dataa[0]->songlyrics;}?>">
                                        
                                        </div>
                                    </div>
                                   
                                    <div class="col-md-2 ">
                    <label for="name">Upload song Photo <span class="text-danger">*</span> </label>
                    <input type="file" class="form-control form-control-sm" id="photo" name="photo" placeholder="image" onchange="readimage(this,'profile-img-tag1');" value="<?php if(!empty($dataa))echo $dataa[0]->photo; ?>"  >
                                         
                      <?php if(!empty($dataa[0]->photo)){
                       ?>
                        <img src="<?php echo base_url();?>upload/<?php echo $dataa[0]->photo ?>" id="profile-img-tag1" calss="img-thumbnail" style="height: 86px;margin: 10px 32px;"> 
                      <?php } ?>
                            
                      <img src="" id="profile-img-tag1" calss="img-thumbnail" style="margin: 10px 32px;height: 86px" /> 
                      <input type="hidden" name="hidden_photo" id="hidden_photo" value="<?php if(!empty($dataa[0]->photo)){echo $dataa[0]->photo;} ?>"> 
                      
                      <input type="hidden" id="getphoto" value="<?php if(!empty($dataa[0]->photo)){echo $dataa[0]->photo;} ?>">
                  </div>




                  <div class="col-md-2 ">
                    <label for="name">Upload song <span class="text-danger">*</span> </label>




                    <input type="file" class="form-control form-control-sm" id="audio" name="audio" placeholder="image"  value="<?php if(!empty($dataa))echo $dataa[0]->audio; ?>"      >
                                         
                      <?php if(!empty($dataa[0]->audio)){
                       ?>

                      <input type="text" name="hidden_audio" id="hidden_audio" class="border-0 my-1"   value="<?php if(!empty($dataa[0]->audio)){echo $dataa[0]->audio;} ?>">  
                    
                      <?php } ?>

                      <input type="hidden" id="getaudio" value="<?php if(!empty($dataa[0]->audio)){echo $dataa[0]->audio;} ?>">
                            








                                         
                   
                  </div>


                  <div class="col-12 col-sm-2 col-lg-3 col-md-3">
                                        <div class="mb-3">
                                            <label for="url">Url:</label>
                                            <input type="text" class="form-control" id="url" placeholder="" name="url" value="<?php if(!empty($dataa[0]->url)){echo $dataa[0]->url;}?>">
                                        
                                        </div>
                                    </div>
                                    
                                   
                                    

                                    
         </div>

         <div class="col-md-12 text-right">
                                            <button class="btn btn-primary" type="button" name="btn_save" id="btn_save">Submit</button>
                                            <button class="btn btn-warning text-white" type="button" name="cancle" id="cancle"> <a href="<?=base_url() ?>Addnewsong" class="text-white">Cancle</a> </button>

                                        </div>
                                        </div></div></div>
         <script  src="<?php echo base_url('web_resources');?>/dist/js/jquery.min.js"></script>          
<script  src="<?php echo base_url('web_resources');?>/dist/js/controllers/SongCreate.js"></script>
                   
                       
               
<script type="text/javascript">
function readimage(input,valueid) {
                                            // alert("hello");
      if (input.files && input.files[0]) {
        var reader = new FileReader();
         reader.onload = function (e) {
         $('#'+valueid+'').attr('src',e.target.result);
        }
        reader.readAsDataURL(input.files[0]);
    }
  }  


  
  

  $(document).ready(function(){
 
    var id = $('#songId').val();
  
 
    if(id==0){
        $('#audio').change(function(e){
            var fileName = e.target.files[0].name;


            $('#getaudio').val(fileName);
        });



        $('#photo').change(function(e){
            var filePhoto = e.target.files[0].name;


            $('#getphoto').val(filePhoto);
        });
    }
    
  






 


if(id > 0){

  var fksongtype="<?php if(!empty($dataa[0]->fksongtype)){echo $dataa[0]->fksongtype;}?>";
  var language="<?php if(!empty($dataa[0]->language)){echo $dataa[0]->language;}?>";
  var getaudios="<?php if(!empty($dataa[0]->audio)){echo $dataa[0]->audio;} ?>";



if(fksongtype==1){
  $('#fksongtype').val(1).trigger("change");
}
else {
  $('#fksongtype').val(2).trigger("change");
   
}

if(language==1){
  $('#language').val(1).trigger("change");
}
else {
  $('#language').val(2).trigger("change");
   
}


if(getaudios==""){{
    $('#getaudio').val('fileName');
}}


}





  

   



   
});
// function todaysTimes(){
//     var date = new Date();
//     var currentDate = date.toISOString().slice(0,10);
//     var currentTime = date.getHours() + ':' + date.getMinutes()+ ':' + date.getSeconds();
//     document.getElementById('duration').value = currentTime;

// } todaysTimes();




</script>
                   
                       
               
            