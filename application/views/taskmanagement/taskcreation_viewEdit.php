<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>Assets/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>Assets/select2.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>Assets/multiselect.css">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family='Poppins'">
  <style>
    body{
          font-family: 'Poppins', sans-serif;
          font-size:15px;
          }

.form-control:focus {
        border-color:#5a14c9;
        /* box-shadow: 0 0 0 0.2rem rgba(40, 167, 69, 0.25); */
        box-shadow: 0 0 0 0.2rem #e1dde7;

    } 

    textarea:focus{
        border-color:#5a14c9!important;
        box-shadow: 0 0 0 0.2rem #e1dde7;
    }


    .select2-container--default .select2-selection--single:focus{
        border:#5a14c9!important;
      box-shadow: 0 0 0 #e1dde7!important;
    }
  </style>

  
 <?php $url='http://localhost/PMS_Comtranse/upload/'; ?>
        <!-- =============== Left side End ================-->
<div class="main-content-wrap sidenav-open d-flex flex-column">
          <!-- ============ Body content start ============= -->
  <div class="main-content">
      <div class="breadcrumb"></div>
      <div class="separator-breadcrumb mt-0"></div>
        <div class="form-row">
          <div class="col-md-12">
              <div class="card mb-4 card-style">

              <div class="card-title mb-1">
                        <h3 class="text-white">&ensp;Task Create</h3>
                            </div>
                <div class="card-body">
                 
                
                  <!-- <hr style="width:100%;text-align:left;margin-left:0;color:black"> -->

                  <form role="form" id="Form" enctype="multipart/form-data" action="#" method="post">

                      <input type="hidden" class="form-control" id="taskassignsubId" name="taskassignsubId" value="<?php if(!empty($dataa[0]->taskassignsubId)){echo $dataa[0]->taskassignsubId;}?>">

                        <div class="form-row">
                                  <div class="col-12 col-sm-2 col-md-4">
                                      <div class="mb-3">
                                          <label for="fname">Member Name</label>
                                          <input type="text" class="form-control" id="fname" placeholder="" name="fname" readonly value="<?php if(!empty($dataa[0]->fname)){echo $dataa[0]->fname;}?>">
                                      </div>
                                  </div>

                                  <div class="col-12 col-sm-12 col-md-3 col-lg-3">
                                      <div class="mb-3">
                                          <label for="taskname">Task Name</label>
                                          <input type="text" class="form-control" id="taskname" placeholder="" name="taskname" readonly value="<?php if(!empty($dataa[0]->taskname)){echo $dataa[0]->taskname;}?>">
                                      </div>
                                  </div>

                                  <div class="col-12 col-sm-12 col-md-2 col-lg-2">
                                      <div class="mb-3">
                                          <label for="processflag" class="p-4 text-bold" style="margin-top:12px;">Status
                                             <?php 
                                          if(empty($dataa[0]->processflag)){
                                            echo "Running";
                                            
                                            }
                                            else{
                                                echo "Completed";
                                            }
                                            ?></label>
                                         
                                          <input type="hidden" id="processflag"  name="processflag" class="form-control" value="<?php 
                                          if(empty($dataa[0]->processflag)){
                                            echo "1";
                                            
                                            }
                                            else{
                                                echo "2";
                                            }
                                            ?>"
                                             >
                                      </div>
                                  </div>


                                  <div class="col-12 col-sm-2 col-md-2">
                                      <div class="mb-3">
                                          <label for="expexteddatetime">Expected Time</label>
                                          <input type="datetime-local" class="form-control" id="expexteddatetime" placeholder="expected time" name="expexteddatetime" value="<?php if(!empty($dataa[0]->expexteddatetime)){echo $dataa[0]->expexteddatetime;}?>">
                                      </div>
                                  </div>
                         </div>

                        
                         <div class="col-12 col-sm-12 col-md-12">
                                <div >
                                    <label for="description ms--2">Task Description</label>
                                    <textarea name="description" readonly class="form-control" id="description" cols="90" row="20" Disabled style="margin-left:-13px;height:200px;"><?php if(!empty($dataa[0]->description)){echo $dataa[0]->description;}?></textarea>    
                                    </div>
                            </div><br>
                        

                              <div class="form-row">
                                  <div class="col-12 col-sm-12 col-md-3 col-lg-2">
                                      <div class="mb-3">
                                          <!-- <label for="photo1">File Attahced</label> -->

                                          <input type="hidden" class="form-control form-control-sm" id="photo1" name="photo1" placeholder="image" onchange="readimage1(this,'profile-img-tag1');" value="<?php if(!empty($dataa))echo $dataa[0]->photo1; ?>"  >
                                                
                                                <?php if(!empty($dataa[0]->photo1)){
                                                ?>
                                                  <a target="_blank" href="<?=$url  ?><?php echo $dataa[0]->photo1 ?>">  <img src="<?=$url  ?><?php echo $dataa[0]->photo1 ?>" id="profile-img-tag1" calss="img-thumbnail" style="height: 86px;width:100%;"> </a>
                                                <?php } ?>
                                                        
                                                <img src="" id="profile-img-tag1" calss="img-thumbnail" style="height: 86px;" /> 
                                                <input type="hidden" name="hidden_photo1" id="hidden_photo1" value="<?php if(!empty($dataa[0]->photo1)){echo $dataa[0]->photo1;} ?>"> 
                                      </div>
                                  </div>


                                 


                                  <div class="col-12 col-sm-12 col-md-3 col-lg-2">
                                      <div class="mb-3">
                                          <!-- <label for="photo2">File Attahced</label> -->

                                          <input type="hidden" class="form-control form-control-sm" id="photo2" name="photo2" placeholder="image" onchange="readimage1(this,'profile-img-tag1');" value="<?php if(!empty($dataa))echo $dataa[0]->photo2; ?>"  >
                                                
                                                <?php if(!empty($dataa[0]->photo2)){
                                                ?>
                                                  <a target="_blank" href="<?=$url  ?><?php echo $dataa[0]->photo2 ?>">  <img src="<?=$url  ?><?php echo $dataa[0]->photo2 ?>" id="profile-img-tag1" calss="img-thumbnail" style="height: 86px;width:100%;"> </a>
                                                <?php } ?>
                                                        
                                                <img src="" id="profile-img-tag1" calss="img-thumbnail" style="height:86px;" /> 
                                                <input type="hidden" name="hidden_photo2" id="hidden_photo2" value="<?php if(!empty($dataa[0]->photo2)){echo $dataa[0]->photo2;} ?>"> 
                                                
                                                <input type="hidden" id="getphoto2" value="<?php if(!empty($dataa[0]->photo2)){echo $dataa[0]->photo2;} ?>">
                                      </div>
                                  </div>


                                  <div class="col-12 col-sm-12 col-md-3 col-lg-2">
                                      <div class="mb-3">
                                          <!-- <label for="photo3">File Attahced</label> -->

                                          <input type="hidden" class="form-control form-control-sm" id="photo3" name="photo3" placeholder="image" onchange="readimage1(this,'profile-img-tag1');" value="<?php if(!empty($dataa))echo $dataa[0]->photo3; ?>"  >
                                                
                                                <?php if(!empty($dataa[0]->photo3)){
                                                ?>
                                                  <a target="_blank" href="<?=$url  ?><?php echo $dataa[0]->photo3 ?>">  <img src="<?=$url  ?><?php echo $dataa[0]->photo3 ?>" id="profile-img-tag1" calss="img-thumbnail" style="height: 86px;width:100%;"> </a>
                                                <?php } ?>
                                                        
                                                <img src="" id="profile-img-tag1" calss="img-thumbnail" style="height: 86px;" /> 
                                                <input type="hidden" name="hidden_photo3" id="hidden_photo3" value="<?php if(!empty($dataa[0]->photo3)){echo $dataa[0]->photo3;} ?>"> 
                                                
                                                <input type="hidden" id="getphoto3" value="<?php if(!empty($dataa[0]->photo3)){echo $dataa[0]->photo3;} ?>">
                                      </div>
                                  </div>


                                  <div class="col-12 col-sm-12 col-md-3 col-lg-2">
                                      <div class="mb-3">
                                          <!-- <label for="photo4">File Attahced</label> -->

                                          <input type="hidden" class="form-control form-control-sm" id="photo4" name="photo4" placeholder="image" onchange="readimage1(this,'profile-img-tag1');" value="<?php if(!empty($dataa))echo $dataa[0]->photo4; ?>"  >
                                                
                                                <?php if(!empty($dataa[0]->photo4)){
                                                ?>
                                                  <a target="_blank" href="<?=$url  ?><?php echo $dataa[0]->photo4 ?>">  <img src="<?=$url  ?><?php echo $dataa[0]->photo4 ?>" id="profile-img-tag1" calss="img-thumbnail" style="height: 86px;width:100%;"> </a>
                                                <?php } ?>
                                                        
                                                <img src="" id="profile-img-tag1" calss="img-thumbnail" style="height: 86px;"/> 
                                                <input type="hidden" name="hidden_photo4" id="hidden_photo4" value="<?php if(!empty($dataa[0]->photo4)){echo $dataa[0]->photo4;} ?>"> 
                                                
                                                <input type="hidden" id="getphoto4" value="<?php if(!empty($dataa[0]->photo4)){echo $dataa[0]->photo4;} ?>">
                                      </div>
                                  </div>



                                  <div class="col-12 col-sm-12 col-md-3 col-lg-2">
                                      <div class="mb-3">
                                          <!-- <label for="photo5">File Attahced</label> -->

                                          <input type="hidden" class="form-control form-control-sm" id="photo5" name="photo5" placeholder="image" onchange="readimage1(this,'profile-img-tag1');" value="<?php if(!empty($dataa))echo $dataa[0]->photo5; ?>"  >
                                                
                                                <?php if(!empty($dataa[0]->photo5)){
                                                ?>
                                                  <a target="_blank" href="<?=$url  ?><?php echo $dataa[0]->photo5 ?>">  <img src="<?=$url  ?><?php echo $dataa[0]->photo5 ?>" id="profile-img-tag1" calss="img-thumbnail" style="height: 86px;width:100%;"> </a>
                                                <?php } ?>
                                                        
                                                <img src="" id="profile-img-tag1" calss="img-thumbnail" style="height: 86px" /> 
                                                <input type="hidden" name="hidden_photo5" id="hidden_photo5" value="<?php if(!empty($dataa[0]->photo5)){echo $dataa[0]->photo5;} ?>"> 
                                                
                                                <input type="hidden" id="getphoto5" value="<?php if(!empty($dataa[0]->photo5)){echo $dataa[0]->photo5;} ?>">
                                      </div>
                                  </div>
                         </div>
                                  </form>
     
    <!-- </div>

  </div> --> 

                                <div class="col-md-12 text-right">
                                      <button class="btn" type="button" name="btn_save" id="btn_save" style="background-color: #d41574;color:white"><i class="fa-solid fa-book"></i> Submit</button>
                                            
                                       <button class="btn btn-primary text-white" type="button" name="cancle" id="cancle">
                                          <a href="<?=base_url() ?>Taskdetails" class="text-white text-decoration-none">
                                            <i class="fa-solid fa-pen-to-square"></i> Edit </a>
                                        </button>
                                </div>  

                      </div>
                    </div>

                      
                      
                                 </div>
                                 </div>
                    <!-- </div></div> -->

        

                 

       <script  src="<?php echo base_url('web_resources');?>/dist/js/jquery.min.js"></script>          
      <script  src="<?php echo base_url('web_resources');?>/dist/js/controllers/ChangeStatusByUser.js"></script>
                 
                     
          <script src="<?php echo base_url();?>Assets/jquery-3.3.1.min.js"></script>
          <script src="<?php echo base_url();?>Assets/select2.min.js"></script>
          <script src="<?php echo base_url();?>Assets/select2.init.js"></script>



<script type="text/javascript">

$(document).ready(function(){
    $(".js-example-tags").select2({
tags: true
});


});


</script>

<!-- image javascript code -->
<script type="text/javascript">
  function readimage1(input,valueid) {
                                            // alert("hello");
      if (input.files && input.files[0]) {
        var reader = new FileReader();
         reader.onload = function (e) {
         $('#'+valueid+'').attr('src',e.target.result);
        }
        reader.readAsDataURL(input.files[0]);
    }
  }

  function readimage2(input,valueid) {
                                            // alert("hello");
      if (input.files && input.files[0]) {
        var reader = new FileReader();
         reader.onload = function (e) {
         $('#'+valueid+'').attr('src',e.target.result);
        }
        reader.readAsDataURL(input.files[0]);
    }
  }
  
  function readimage3(input,valueid) {
                                            // alert("hello");
      if (input.files && input.files[0]) {
        var reader = new FileReader();
         reader.onload = function (e) {
         $('#'+valueid+'').attr('src',e.target.result);
        }
        reader.readAsDataURL(input.files[0]);
    }
  }

  function readimage4(input,valueid) {
                                            // alert("hello");
      if (input.files && input.files[0]) {
        var reader = new FileReader();
         reader.onload = function (e) {
         $('#'+valueid+'').attr('src',e.target.result);
        }
        reader.readAsDataURL(input.files[0]);
    }
  }

  function readimage5(input,valueid) {
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
 
 var id = $('#taskassignsubId').val();


 if(id==0){
     // $('#audio').change(function(e){
     //     var fileName = e.target.files[0].name;


     //     $('#getaudio').val(fileName);
     // });



     $('#photo').change(function(e){
         var filePhoto = e.target.files[0].name;


         $('#getphoto').val(filePhoto);
     });
 }



//  var a = <?php if(!empty($dataa[0]->processflag)){echo $dataa[0]->processflag;}?>;
 
//  alert(a);


//  if(a=='Running'){
//     a='Complted';
//     $('#processflag').val(a);
 

//  }
 
});

</script>



<script>

$(document).ready(function(){

var id = $('#taskassignsubId').val();

if(id==0){
  // to show current date 
  document.getElementById('startdate').valueAsDate = new Date();
  document.getElementById('enddate').valueAsDate = new Date();
}

});

</script>


<script>
var now = new Date();
now.setMinutes(now.getMinutes() - now.getTimezoneOffset());
document.getElementById('expexteddatetime').value = now.toISOString().slice(0,16);
</script>






