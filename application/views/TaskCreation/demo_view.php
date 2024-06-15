<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
<!-- Select2 CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />

<link rel="stylesheet" href="https://fonts.googleapis.com/css?family='Poppins'">
<style>
  body{
font-family: 'Poppins', sans-serif;
}

.form-control:focus {
        border-color:#5a14c9;
        /* box-shadow: 0 0 0 0.2rem rgba(40, 167, 69, 0.25); */
        box-shadow: 0 0 0 0.2rem #9d89b5;

    } 

    .select2-container--default .select2-selection--single:focus {
      border:#5a14c9!important;
      box-shadow: 0 0 0 0.3rem #9d89b5!important;
    }
</style>


<!-- <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>Assets/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>Assets/select2.min.css">
-->


        <!-- =============== Left side End ================-->
<div class="main-content-wrap sidenav-open d-flex flex-column">
            <!-- ============ Body content start ============= -->
    <div class="main-content">
      <div class="breadcrumb"></div>
      <div class="separator-breadcrumb border-top"></div>
        <div class="form-row ">
          <div class="col-md-12 ">
            <div class="card card-style">
                <div class="card-title">
                  <h3 class="text-left">&ensp;<span class="fw-bolder">Task List</span></h3>
                </div>
                <div class="card-body">
                  <!-- <hr style="border:1px solid black"> -->
                  <form role="form" id="Form" enctype="multipart/form-data" action="" method="post" class="m-5">
                    <input type="hidden" class="form-control" id="taskId" placeholder="" name="taskId" value="<?php if(!empty($dataa[0]->taskId)){echo $dataa[0]->taskId;}?>">
                        <div class="form-row">
                        


                                    <div class="col-12 col-sm-4 col-lg-4 col-md-6">
                                        <div>
                                          <label for="workhours">Task Type</label>
                                          <select class="select2 form-control form-control-sm" id="tasktype" 
                                          name="tasktype" style="width: 100%;">
                                                 <?php

                                                    foreach ($tasktype as $key => $value) {
                                                      $selected="";
                                                      if(!empty($dataa[0]->taskId)){
                                                                    
                                                      if ($value->tasktypeid == $dataa[0]->tasktype) {
                                                        $selected="selected='selected'";
                                                      } 
                                                    } 

                                                    echo '<option value="'.$value->tasktypeid.'"'.$selected.' >'.$value->tasktypename.'</option>';

                                                    }
                                                    ?>
                                                
                                          </select>

                                        </div>
                                    </div>

                              </div>


                                


<!-- addddddddddddddddddddddddddddddddddd select -->

                                <div class="form-row mt-2">
                                      
                                      <div class="col-12 col-sm-12 col-lg-4 col-md-12">
                                        <div class="mb-3">
                                            <label for="tasklist">Task List Type Name</label>
                                            <select class="select2 form-control form-control-sm" id="fktaskTypenameId3" name="fktaskTypenameId3" style="width: 100%;">
                                                <!-- <option value="">dfdfdfd</option>
                                                <option value="">abvcc</option>
                                                <option value="">dfdfdfd</option> -->
                                                 <?php

                                                    foreach ($Ttype as $key => $value) {
                                                      $selected="";
                                                      if(!empty($dataa[0]->taskId)){
                                                                        //if(2 == 1 )
                                                      if ($value->tasklistId == $dataa[0]->fktaskTypenameId3) {
                                                        $selected="selected='selected'";
                                                      } 
                                                    } 

                                                    echo '<option value="'.$value->tasklistId.'"'.$selected.' >'.$value->tasklistname.'</option>';

                                                    }
                                                    ?>
                                          </select>
                                        </div>
                                    </div>




                                    <div class="col-12 col-sm-12 col-lg-4 col-md-12">
                                      <div class="mb-3">
                                          <label for="url"> WorkHoursTypeName</label>
                                          <select class="select2 form-control form-control-sm" id="fktaskTypenameId4" 
                                              name="fktaskTypenameId4" style="width: 100%;">

                                            <!-- <option value="">dfdfdfd</option>
                                            <option value="">abvcc</option>
                                            <option value="">dfdfdfd</option> -->

                                            <?php

                                                    foreach ($Wtype as $key => $value) {
                                                      $selected="";
                                                      if(!empty($dataa[0]->taskId)){
                                                                        //if(2 == 1 )
                                                      if ($value->workhourId == $dataa[0]->fktaskTypenameId4) {
                                                        $selected="selected='selected'";
                                                      } 
                                                    } 

                                                    echo '<option value="'.$value->workhourId.'"'.$selected.' >'.$value->workhourname.'</option>';

                                                    }
                                                    ?>
                                          </select>
                                      </div>
                                  </div>


                                  <div class="col-12 col-sm-12 col-lg-4 col-md-12">
                                    <div class="mb-3">
                                        <label for="url"> Reminder Type Name</label>
                                          <select class="select2 form-control form-control-sm" id="fktaskTypenameId5" 
                                          name="fktaskTypenameId5" style="width: 100%;">
                                                <!-- <option value="">dfdfdfd</option>
                                                <option value="">abvcc</option>
                                                <option value="">dfdfdfd</option> -->
                                                 <?php

                                                    foreach ($Rtype as $key => $value) {
                                                      $selected="";
                                                      if(!empty($dataa[0]->taskId)){
                                                                        //if(2 == 1 )
                                                      if ($value->reminderId == $dataa[0]->fktaskTypenameId5) {
                                                        $selected="selected='selected'";
                                                      } 
                                                    } 

                                                    echo '<option value="'.$value->reminderId.'"'.$selected.' >'.$value->remindername.'</option>';

                                                    }
                                                    ?>
                                                
                                          </select>
                                    </div>
                                  </div>
                        </div>    


                        
                                    </div></div>


         <script  src="<?php echo base_url('web_resources');?>/dist/js/jquery.min.js"></script>          
<script  src="<?php echo base_url('web_resources');?>/dist/js/controllers/TaskCreationCreate.js"></script>


          <script src="<?php echo base_url();?>Assets/jquery-3.3.1.min.js"></script>
          <script src="<?php echo base_url();?>Assets/select2.min.js"></script>
          <script src="<?php echo base_url();?>Assets/select2.init.js"></script>
                   
                       
               
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
 
    var id = $('#taskId').val();
  
 
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




<script type="text/javascript">

$(document).ready(function(){

var id = $('#taskId').val();

if(id==0){
  // to show current date 
  document.getElementById('startdate').valueAsDate = new Date();
  document.getElementById('duedate').valueAsDate = new Date();
}

});

</script>


                   
                       
               
            