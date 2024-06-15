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

    textarea:focus {
        border-color:#5a14c9;
        /* box-shadow: 0 0 0 0.2rem rgba(40, 167, 69, 0.25); */
        box-shadow: 0 0 0 0.2rem #e1dde7;
    } 

    .select2-container--default .select2-selection--single:focus{
        border:#5a14c9!important;
      box-shadow: 0 0 0 0.2rem #e1dde7!important;
    }
  </style>

  
        <!-- =============== Left side End ================-->
<div class="main-content-wrap sidenav-open d-flex flex-column">
          <!-- ============ Body content start ============= -->
  <div class="main-content">
      <div class="breadcrumb"></div>
      <div class="separator-breadcrumb border-top"></div>
        <div class="form-row mt-4">
          <div class="col-md-12">
              <div class="card mb-4 card-style">
              <div class="card-title mb-1 py-2">
                        <h3 class="text-white">&ensp;Update Task</h3>
                            </div>
                <div class="card-body">
                 
                  
                  <!-- <hr style="width:100%;text-align:left;margin-left:0;color:black"> -->

                  <form role="form" id="Form" enctype="multipart/form-data" action="#" method="post">

                      <input type="text" class="form-control" id="taskassignsubId" name="taskassignsubId" value="<?php if(!empty($dataa[0]->taskassignsubId)){echo $dataa[0]->taskassignsubId;}?>">

                        <div class="form-row">
                                  <div class="col-12 col-sm-2 col-md-4">
                                      <div class="mb-3">
                                          <label for="fname">Member Name</label>
                                          <input type="text" class="form-control" id="fname" placeholder="" readonly name="fname" value="<?php if(!empty($dataa[0]->fname)){echo $dataa[0]->fname;}?>">
                                      </div>
                                  </div>

                                  <div class="col-12 col-sm-2 col-md-4">
                                      <div class="mb-3">
                                          <label for="taskname">Task Name</label>
                                          <input type="text" class="form-control" id="taskname" placeholder="" readonly name="taskname" value="<?php if(!empty($dataa[0]->taskname)){echo $dataa[0]->taskname;}?>">
                                      </div>
                                  </div>

                                  <div class="col-12 col-sm-2 col-md-4">
                                      <div class="mb-3">
                                          <label for="processflag">Process Flag</label>
                                          
                                          <!-- <input type="text" onclick="return validation()" class="form-control" id="projectName" placeholder="" name="projectName" value="<?php if(!empty($dataa[0]->processflag)){echo $dataa[0]->processflag;}?>"> -->
                                          <select class="select2 form-control form-control-sm" id="processflag" name="processflag" style="width: 100%;"> 
                                                <option value="1">Completed</option>
                                                <!-- <option value="1">Running</option>
                                                <option value="2">Continue</option> -->
                                          </select>
                                      </div>

                                  </div>

                              
                         </div>

                         <!-- 2 nd row -->
                         <div class="form-row">
                                  <div class="col-12 col-sm-2 col-md-4">
                                      <div class="mb-3">
                                          <label for="description">Task Description</label>
                                          <input type="text" class="form-control overflow-scroll" id="description" placeholder="" readonly name="description" value="<?php if(!empty($dataa[0]->description)){echo $dataa[0]->description;}?>">
                                          
                                      </div>

                                  </div>

                                  <div class="col-12 col-sm-2 col-md-4">
                                      <div class="mb-3">
                                          <label for="expexteddatetime">Expected Time</label>
                                          <input type="text" class="form-control" id="expexteddatetime" placeholder="expected time" name="expexteddatetime" value="<?php if(!empty($dataa[0]->expexteddatetime)){echo $dataa[0]->expexteddatetime;}?>">
                                         
                                      </div>

                                  </div>

                                  <div class="col-12 col-sm-2 col-md-4">
                                      <div class="mb-3">
                                          <label for="photo1">File Attached</label>

                                          <!-- <input type="file" onclick="return validation()" class="form-control" id="projectName" placeholder="" name="projectName" value="<?php if(!empty($dataa[0]->projectName)){echo $dataa[0]->projectName;}?>"> -->
                                          

                                          <input type="file" class="form-control form-control-sm" id="photo1" name="photo1"  readonly placeholder="image" onchange="readimage1(this,'profile-img-tag1');" value="<?php if(!empty($dataa))echo $dataa[0]->photo1; ?>"  >
                                                
                            <?php if(!empty($dataa[0]->photo1)){
                            ?>
                                <img src="<?php echo base_url();?>upload/<?php echo $dataa[0]->photo1 ?>" id="profile-img-tag1" calss="img-thumbnail" style="height: 86px;margin: 10px 32px;"> 
                            <?php } ?>
                                    
                            <img src="" id="profile-img-tag1" calss="img-thumbnail" style="margin: 10px 32px;height: 86px" /> 
                            <input type="hidden" name="hidden_photo1" id="hidden_photo1" value="<?php if(!empty($dataa[0]->photo1)){echo $dataa[0]->photo1;} ?>"> 
                            
                            <input type="hidden" id="getphoto1" value="<?php if(!empty($dataa[0]->photo1)){echo $dataa[0]->photo1;} ?>">
                            

                                      </div>

                                  </div>

                              
                         </div>

                        
                                  </form>
      <!-- <p>Sed ut perspiciatis unde omnis iste natustium, totam rem aperiam.</p> -->
    <!-- </div>

  </div> --> 

                                <div class="col-md-12 text-right">
                                            <button class="btn btn-primary" type="button" name="btn_save" id="btn_save"><i class="fa-solid fa-book"></i> Submit</button>
                                            <button class="btn btn-warning text-white" type="button" name="cancle" id="cancle"> <a href="<?=base_url() ?>Taskdetails" class="text-white text-decoration-none">
                                            <i class="fa-solid fa-pen-to-square"></i> Edit</a> </button>
                                 </div>  

                      </div></div>

                      
                      
                                 </div>
                                 </div>
                    <!-- </div></div> -->


       <script  src="<?php echo base_url('web_resources');?>/dist/js/jquery.min.js"></script>          
      <script  src="<?php echo base_url('web_resources');?>/dist/js/controllers/taskcreation_Edit.js"></script>
                 
                     
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
 
});

</script>


