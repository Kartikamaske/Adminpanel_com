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
                          <div class="col-12 col-sm-2 col-lg-6 col-md-6">
                              <div class="mb-3">
                                   <label for="taskname">Task Name <span class="text-danger">*</span> </label>
                                   <input type="text" class="form-control" id="taskname" placeholder="" name="taskname" autofocus="autofocus" value="<?php if(!empty($dataa[0]->taskname)){echo $dataa[0]->taskname;}?>">
                              </div>
                          </div>

                          <div class="col-12 col-sm-2 col-lg-3 col-md-4">
                              <div class="mb-3">
                                <label for="groupname">Group Name</label>
                                <!-- <input type="text" class="form-control" id="fktaskTypenameId1" placeholder="" name="fktaskTypenameId1" value="<?php if(!empty($dataa[0]->fktaskTypenameId1)){echo$dataa[0]->fktaskTypenameId1;}?>"> -->
                                
                                  <select class="select2 form-control form-control-sm" id="fktaskTypenameId1"name="fktaskTypenameId1" style="width: 100%;">
                                     <?php
                                        foreach ($Gtype as $key => $value) {
                                          $selected="";
                                          if(!empty($dataa[0]->taskId)){
                                                                        //if(2 == 1 )
                                          if ($value->groupId == $dataa[0]->fktaskTypenameId1) {
                                            $selected="selected='selected'";
                                          } 
                                        }      
                                        echo '<option value="'.$value->groupId.'"'.$selected.' >'.$value->groupName.'</option>';

                                        }
                                      ?>
                                    </select>
                              </div>
                          </div>

                        <div class="col-12 col-sm-2 col-lg-3 col-md-4">
                             <div class="mb-3">
                                <label for="projectname">Project Name</label>
                                            
                                  <select class="select2 form-control form-control-sm" id="fktaskTypenameId2" name="fktaskTypenameId2" style="width: 100%;">
                                                
                                  
                                     <?php
                                        foreach ($showprojectname as $key => $value) {
                                          $selected="";
                                            if(!empty($dataa[0]->fkprojectTypenameId2)){
                                                                        //if(2 == 1 )
                                            if ($value->projectId == $dataa[0]->fkprojectTypenameId2) {
                                              $selected="selected='selected'";
                                            } 
                                          }
                                          echo '<option value="'.$value->projectId.'"'.$selected.' >'.$value->projectName.'</option>';

                                        }
                                      ?>
                                  </select>
                                </div>
                            </div>  

                                    <!-- <div class="col-12 mt-2">
                                        <div>
                                            <label for="employeename">Employee Name</label>
                                            <input type="text" class="form-control" id="employeename"  name="employeename" value="<?php if(!empty($dataa[0]->employeename)){echo $dataa[0]->employeename;}?>">
                                        </div>
                                    </div></br></br></br></br></br> -->

                                    <div class="col-12 col-sm-4 col-lg-4 col-md-6">
                                        <div>
                                          <label for="workhours">Work Hours</label>
                                          <input type="time" class="form-control" id="workhours" placeholder="" name="workhours" value="<?php if(!empty($dataa[0]->workhours)){echo $dataa[0]->workhours;}?>">
                                        </div>
                                    </div>
                                    
                                  <div class="col-12 col-sm-3 col-lg-4 col-md-6" style="margin-top:0px">
                                    <div class="mt-2">
                                         <label class="form-check-label ">Description</label> 
                                         <textarea class="form-control custom-control" rows="3" id="description" name="description" placeholder="Enter Description" onkeypress="return onlyAlphabets(event,this)" required="" data-parsley-id="3139"><?php if(!empty($dataa[0]->description)){echo $dataa[0]->description;}?></textarea>
                                         <!-- <ul class="parsley-errors-list" id="parsley-id-3139"></ul>                                            -->
                                    </div>
                                  </div>


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


                                    <div class="form-row">
                                        <div class="col-12 col-sm-5 col-md-4 col-lg-2 col-xl-2 mt-2">
                                            <div>
                                            <label for="startdate">Start Date</label>
                                            <input type="date" class="form-control" id="startdate" placeholder="" name="startdate" value="<?php if(!empty($dataa[0]->startdate)){echo $dataa[0]->startdate;}?>">
                                            </div>
                                        </div>
                                        

                                        <div class="col-12 col-sm-5 col-md-4 col-lg-2 col-xl-2 mt-2">
                                            <div>
                                            <label for="duedate">Due Date</label>
                                            <input type="date" class="form-control" id="duedate" placeholder="" name="duedate" value="<?php if(!empty($dataa[0]->duedate)){echo $dataa[0]->duedate;}?>">
                                            </div>
                                        </div>

                                        <div class="col-12 col-sm-5 col-md-4 col-lg-2 col-xl-2 mt-5">
                                            <div>
                                                <label class="form-check-label">Standard Flexible Flag:</label>
                                                <input class="form-check-input" type="checkbox" id="check1" name="" value="something" checked style="margin-left:10px">
                                            </div>
                                        </div>
                                        <!-- style="margin-left:15px;" control-label-->

                                        <div class="mx-2 mt-5">
                                          <label class=" form-check-label" >Reuses Task :</label>  
                                          <input type="checkbox" value="1" checked name="reusesTask" id="reusesTask" style="margin-left: 10px" data-parsley-multiple="reusesTask" data-parsley-id="2377"> reusesTask 
                                               
    
                                         </div>
                                      

                                    </div></br>


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


                        <!-- secondddddddddddddd row -->
                        <div class="form-row mt-2">
                                      
                                      <div class="col-12 col-sm-12 col-lg-4 col-md-12">
                                        <div class="mb-3">
                                            <label for="url">Priority Name</label>
                                            <select class="select2 form-control form-control-sm" id="fktaskTypenameId6" name="fktaskTypenameId6" style="width: 100%;">
                                              
                                                <?php

                                                    foreach ($Utype as $key => $value) {
                                                      $selected="";
                                                      if(!empty($dataa[0]->taskId)){
                                                                        //if(2 == 1 )
                                                      if ($value->priorityId == $dataa[0]->	fktaskTypenameId6) {
                                                        $selected="selected='selected'";
                                                      } 
                                                    } 

                                                    echo '<option value="'.$value->priorityId.'"'.$selected.' >'.$value->	priorityname.'</option>';

                                                    }
                                                    ?>
                                          </select>
                                        </div>
                                    </div>

                                    <div class="col-12 col-sm-12 col-lg-4 col-md-12">
                                      <div class="mb-3">
                                          <label for="url">Billing Type Name </label>
                                          <select class="select2 form-control form-control-sm" id="fktaskTypenameId7" 
                                              name="fktaskTypenameId7" style="width: 100%;">
                                            <?php

                                                    foreach ($Btype as $key => $value) {
                                                      $selected="";
                                                      if(!empty($dataa[0]->taskId)){
                                                                        //if(2 == 1 )
                                                      if ($value->billingtId == $dataa[0]->fktaskTypenameId7) {
                                                        $selected="selected='selected'";
                                                      } 
                                                    } 

                                                    echo '<option value="'.$value->billingtId.'"'.$selected.' >'.$value->billingtName.'</option>';

                                                    }
                                                    ?>
                                          </select>
                                      </div>
                                  </div>

                                  <div class="col-12 col-sm-12 col-lg-4 col-md-12">
                                    <div class="mb-3">
                                        <label for="url">Status Name</label>
                                          <select class="select2 form-control form-control-sm" id="fktaskTypenameId8" 
                                          name="fktaskTypenameId8" style="width: 100%;">
                                                 <?php

                                                    foreach ($Stype as $key => $value) {
                                                      $selected="";
                                                      if(!empty($dataa[0]->taskId)){
                                                                        //if(2 == 1 )
                                                      if ($value->statusId == $dataa[0]->fktaskTypenameId8) {
                                                        $selected="selected='selected'";
                                                      } 
                                                    } 

                                                    echo '<option value="'.$value->statusId.'"'.$selected.' >'.$value->statusname.'</option>';

                                                    }
                                                    ?>
                                                
                                          </select>
                                    </div>
                                  </div>
                        </div>    

 <!-- imagessssssss start---------------------------------------------------------- -->

             <div class="form-row mt-2">

                            <div class="col-12 col-sm-12 col-lg-4 col-md-10">
                            <label for="name">Document1<span class="text-danger">*</span> </label>
                            
                            <input type="file" class="form-control form-control-sm" id="photo1" name="photo1" placeholder="image" onchange="readimage1(this,'profile-img-tag1');" value="<?php if(!empty($dataa))echo $dataa[0]->photo1; ?>"  >
                                                
                            <?php if(!empty($dataa[0]->photo1)){
                            ?>
                                <img src="<?php echo base_url();?>upload/<?php echo $dataa[0]->photo1 ?>" id="profile-img-tag1" calss="img-thumbnail" style="height: 86px;margin: 10px 32px;"> 
                            <?php } ?>
                                    
                            <img src="" id="profile-img-tag1" calss="img-thumbnail" style="margin: 10px 32px;height: 86px" /> 
                            <input type="hidden" name="hidden_photo1" id="hidden_photo1" value="<?php if(!empty($dataa[0]->photo1)){echo $dataa[0]->photo1;} ?>"> 
                            
                            <input type="hidden" id="getphoto1" value="<?php if(!empty($dataa[0]->photo1)){echo $dataa[0]->photo1;} ?>">
                        </div>


                        <div class="col-12 col-sm-12 col-lg-4 col-md-10">
                            <label for="name"> Document2 <span class="text-danger">*</span> </label>

                            <input type="file" class="form-control form-control-sm" id="photo2" name="photo2" placeholder="image" onchange="readimage2(this,'profile-img-tag2');" value="<?php if(!empty($dataa))echo $dataa[0]->photo2; ?>"  >
                                                
                            <?php if(!empty($dataa[0]->photo2)){
                            ?>
                                <img src="<?php echo base_url();?>upload/<?php echo $dataa[0]->photo2 ?>" id="profile-img-tag2" calss="img-thumbnail" style="height: 86px;margin: 10px 32px;"> 
                            <?php } ?>
                                    
                            <img src="" id="profile-img-tag2" calss="img-thumbnail" style="margin: 10px 32px;height: 86px" /> 
                            <input type="hidden" name="hidden_photo2" id="hidden_photo2" value="<?php if(!empty($dataa[0]->photo2)){echo $dataa[0]->photo2;} ?>"> 
                            
                            <input type="hidden" id="getphoto2" value="<?php if(!empty($dataa[0]->photo2)){echo $dataa[0]->photo2;} ?>">
                        </div>


                        <div class="col-12 col-sm-12 col-lg-4 col-md-10">
                            <label for="name">Document3</label>
                            <input type="file" class="form-control form-control-sm" id="photo3" name="photo3" placeholder="image" onchange="readimage3(this,'profile-img-tag3');" value="<?php if(!empty($dataa))echo $dataa[0]->photo3; ?>"  >
                                                
                            <?php if(!empty($dataa[0]->photo3)){
                            ?>
                                <img src="<?php echo base_url();?>upload/<?php echo $dataa[0]->photo3 ?>" id="profile-img-tag3" calss="img-thumbnail" style="height: 86px;margin: 10px 32px;"> 
                            <?php } ?>
                                    
                            <img src="" id="profile-img-tag3" calss="img-thumbnail" style="margin: 10px 32px;height: 86px" /> 
                            <input type="hidden" name="hidden_photo3" id="hidden_photo3" value="<?php if(!empty($dataa[0]->photo3)){echo $dataa[0]->photo3;} ?>"> 
                            
                            <input type="hidden" id="getphoto3" value="<?php if(!empty($dataa[0]->photo3)){echo $dataa[0]->photo3;} ?>">
                        </div>

            </div> 

            <div class="form-row mt-2">
                    <div class="col-12 col-sm-12 col-lg-4 col-md-10">
                            <label for="name"> Document4</label>
                            <input type="file" class="form-control form-control-sm" id="photo4" name="photo4" placeholder="image" onchange="readimage4(this,'profile-img-tag4');" value="<?php if(!empty($dataa))echo $dataa[0]->photo4; ?>"  >
                                                
                            <?php if(!empty($dataa[0]->photo4)){
                            ?>
                                <img src="<?php echo base_url();?>upload/<?php echo $dataa[0]->photo4 ?>" id="profile-img-tag4" calss="img-thumbnail" style="height: 86px;margin: 50px 82px;"> 
                            <?php } ?>
                                    
                            <img src="" id="profile-img-tag4" calss="img-thumbnail" style="margin: 10px 32px;height: 86px" /> 
                            <input type="hidden" name="hidden_photo4" id="hidden_photo4" value="<?php if(!empty($dataa[0]->photo4)){echo $dataa[0]->photo4;} ?>"> 
                            
                            <input type="hidden" id="getphoto4" value="<?php if(!empty($dataa[0]->photo4)){echo $dataa[0]->photo4;} ?>">
                        </div>


                        <div class="col-12 col-sm-12 col-lg-4 col-md-10">
                            <label for="name"> Document5</label>
                            <input type="file" class="form-control form-control-sm" id="photo5" name="photo5" placeholder="image" onchange="readimage5(this,'profile-img-tag5');" value="<?php if(!empty($dataa))echo $dataa[0]->photo5; ?>"  >
                                                
                            <?php if(!empty($dataa[0]->photo5)){
                            ?>
                                <img src="<?php echo base_url();?>upload/<?php echo $dataa[0]->photo5 ?>" id="profile-img-tag5" calss="img-thumbnail" style="height: 86px;margin: 50px 82px;"> 
                            <?php } ?>
                                    
                            <img src="" id="profile-img-tag5" calss="img-thumbnail" style="margin: 10px 32px;height: 86px" /> 
                            <input type="hidden" name="hidden_photo5" id="hidden_photo5" value="<?php if(!empty($dataa[0]->photo5)){echo $dataa[0]->photo5;} ?>"> 
                            
                            <input type="hidden" id="getphoto5" value="<?php if(!empty($dataa[0]->photo5)){echo $dataa[0]->photo5;} ?>">
                        </div>

                        
                        <div class="col-md-12 text-right">
                          
                                            <button class="btn" type="button" name="btn_save" id="btn_save" style="background-color: #d41574;color:white">Submit</button>
                                            
                                            <button class="btn btn-primary text-white" type="button" name="cancle" id="cancle"> <a href="<?=base_url() ?>TaskCreation" class="text-white text-decoration-none">Cancel</a> </button>
                                    </div>

            </div>

                                        </div></div></div>


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


                   
                       
               
            