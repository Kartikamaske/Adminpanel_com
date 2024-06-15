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
  </style>



  <style>
    .label-style{
      display: inline-block;
    max-width: 100%;
    margin-bottom: 5px;
    /* font-weight: 700; */

    }

    .input-style{
      width: 100%;
    height: 34px;
    padding: 6px 12px;
    /* font-size: 14px; */
    line-height: 1.42857143;
    color: #555;
    background-color: #fff;
    background-image: none;
    border: 1px solid #ccc;
    border-radius: 4px;
    }

    .form-control:focus {
        border-color:#5a14c9;
        /* box-shadow: 0 0 0 0.2rem rgba(40, 167, 69, 0.25); */
        box-shadow: 0 0 0 0.2rem #9d89b5;

    } 

    /* select.decorated option:hover {
    box-shadow: 0 0 10px 100px #1882A8 inset;
} */

    /* input[type="select"]:focus,{
      box-shadow: 0 0 0 0.2rem #9d89b5;
      border-color:#5a14c9;

    } */
    .select2-container--default.select2-container--focus .select2-selection--multiple{
      border:#5a14c9!important;
      box-shadow: 0 0 0 0.2rem #9d89b5!important;

    }


    .select2-container--default .select2-selection--single:focus{
      border:#5a14c9!important;
      box-shadow: 0 0 0 0.2rem #9d89b5!important;
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
              <div class="card mb-4 card-style" >
              <div class="card-title mb-1 py-2">
                            <h3 class="mb-0 text-white">&ensp; Project Management</h3>
                        </div>
                <div class="card-body p-3">
     


                  <!-- <hr style="width:100%;text-align:left;margin-left:0;color:black"> -->
                  <form role="form" id="Form" enctype="multipart/form-data" action="#" method="post">
                      <input type="hidden" class="form-control" id="projectId" placeholder="" name="projectId" value="<?php if(!empty($dataa[0]->projectId)){echo $dataa[0]->projectId;}?>">

                        <div class="form-row">
                                  <div class="col-12 col-sm-2 col-md-4">
                                      <div class="mb-3">
                                          <label for="projectName" class="label-style">Project Name<span class="text-danger">*</span> </label>
                                          <input type="text" onclick="return validation()" class="form-control input-style" id="projectName" placeholder="" name="projectName" value="<?php if(!empty($dataa[0]->projectName)){echo $dataa[0]->projectName;}?>">
                                          <span id="username" class="text-danger font-weight-bold"></span>
                                      </div>
                                  </div>

                                  <div class="col-12 col-sm-2 col-md-4">
                                      <div class="mb-3">
                                        <label for="MarathiName" class="label-style">Project Marathi Name <span class="text-danger">*</span> </label>
                                        <input type="text" onclick="return validation()" class="form-control input-style" id="MarathiName" placeholder="" name="MarathiName" value="<?php if(!empty($dataa[0]->MarathiName)){echo $dataa[0]->MarathiName;}?>">
                                        <span id="username1" class="text-danger font-weight-bold"></span>
                                      </div>
                                  </div>

                                  <div class="col-12 col-sm-2 col-md-4">
                                      <div class="mb-3">
                                          <label for="ShortName" class="label-style">Project Short Name<span class="text-danger">*</span></label>
                                          <input type="text" onclick="return validation()" class="form-control input-style" id="ShortName" name="ShortName" value="<?php if(!empty($dataa[0]->ShortName)){echo $dataa[0]->ShortName;}?>">
                                          <span id="username2" class="text-danger font-weight-bold"></span>
                                      </div>
                                  </div> 

                                  <div class="col-12 col-sm-12 col-lg-12 col-md-12">
                                      <div class="mb-3">
                                          <label for="Tagname" class="label-style">Tag Name</label><span class="text-danger">*</span> </label>
                                          <select class="select2 form-control form-control-sm decorated" multiple id="fktagId" name="fktagId[]" style="width: 100%;"> 
                                                     <?php

                                                    foreach ($TTtype as $key => $TTtype) {
                                                      $selected="";
                                                     
                                                      foreach ($tagsdata as $key => $value) {
                                                        if($TTtype->tagmainId ==$value->fktagId)
                                                        {
                                                            $selected ="selected=selected";
                                                        }
                                                        
                                                    }

                                                    echo '<option value="'.$TTtype->tagmainId.'"'.$selected.' >'
                                                    .$TTtype->tagmainname.'</option>';

                                                    }
                                                    ?>
                                                      </select> 
                                      </div>
                                  </div>

                                </div>


                        <!-- adddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddd -->

                         <!-- Nav pills -->
  <div class="w-100">                       
  <ul class="nav nav-pills" role="tablist">
    <li class="nav-item">
      <a class="nav-link active" data-bs-toggle="pill" href="#home" style="color:black;"><i class="fa-solid fa-circle-info"></i> Details</a>
    </li>
    <!-- <li class="nav-item">
      <a class="nav-link" data-bs-toggle="pill" href="#menu1"><i class="fa-solid fa-book"></i> Overview</a>
    </li> -->
    <li class="nav-item">
      <a class="nav-link" data-bs-toggle="pill" href="#menu2" style="color:black;"><i class="fa-solid fa-location-arrow"></i> Location</a>
    </li>
  </ul></div>


   <!-- Tab panes -->
    <div class="tab-content">
  <div id="home" class="container tab-pane active"><br>
    <h4>Details</h4>
    
                                  <div class="form-row p-4">

                                  <div class="col-12 col-sm-12 col-lg-4 col-md-12">
                                      <div class="mb-3">
                                          <label for="projectstartDate" class="label-style">Start Date</label><span class="text-danger">*</span> </label>
                                          <input type="date" class="form-control input-style" id="projectstartDate" placeholder="" name="projectstartDate" value="<?php if(!empty($dataa[0]->projectstartDate)){echo $dataa[0]->projectstartDate;}?>">
                                      </div>
                                  </div>

                                  <div class="col-12 col-sm-12 col-lg-4 col-md-12">
                                      <div class="mb-3">
                                          <label for="projectendDate" class="label-style">End Date</label><span class="text-danger">*</span> </label>
                                          <input type="date" class="form-control input-style" id="projectendDate" placeholder="" name="projectendDate" value="<?php if(!empty($dataa[0]->projectendDate)){echo $dataa[0]->projectendDate;}?>">
                                      </div>
                                  </div>

                                  <div class="col-12 col-sm-12 col-lg-4 col-md-12">
                                  <div class="form-check pt-4 ms-3">
                                          <label class="form-check-label" class="label-style">Strict Flag:</label>
                                          <input class="form-check-input" type="checkbox" id="check1" name="option1" value="something" checked style="margin-left:10px">
                                  </div>
                                  </div>

                                </div>
                              
  </div> 


   <!-- <div id="menu1" class="container tab-pane fade"><br>
      <h3>Overview</h3>
      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut 
        aliquip ex ea commodo consequat.</p>
    </div> -->


    <div id="menu2" class="container tab-pane fade"><br>
      <h4>Location</h4>

    

                                    <div class="form-row">

                                    <div class="col-12 col-sm-12 col-lg-3 col-md-12">
                                        <div class="mb-3">
                                            <label for="url" class="label-style">Project Type Name</label>
                                            <select class="select2 form-control form-control-sm input-style" id="fkprojectTypenameId" name="fkprojectTypenameId" style="width: 100%;"> 
                                                <!-- <option value="">Computer Software Development</option>
                                                <option value="">Management Project</option>
                                                <option value="">xyx</option>
                                                <option value="">dfdfdfd</option> -->

                                               <?php

                                                    foreach ($Ptype as $key => $value) {
                                                      $selected="";
                                                      if(!empty($dataa[0]->projectId)){
                                                                        //if(2 == 1 )
                                                      if ($value->typeId == $dataa[0]->fkprojectTypenameId) {
                                                        $selected="selected='selected'";
                                                      } 
                                                    } 

                                                    echo '<option value="'.$value->typeId.'"'.$selected.' >'
                                                    .$value->typeName.'</option>';

                                                    }
                                                    ?>
                                          </select>
                                        </div>
                                    </div> 




                                   <div class="col-12 col-sm-12 col-lg-3 col-md-12">
                                        <div class="mb-3">
                                            <label for="url" class="label-style"> Client Name</label>
                                            <select class="select2 form-control form-control-sm input-style" id="fkprojectTypenameId2" name="fkprojectTypenameId2" style="width: 100%;"> 
                                                
                                              <?php

                                                    foreach ($Ctype as $key => $value) {
                                                      $selected="";
                                                      if(!empty($dataa[0]->projectId)){
                                                                        //if(2 == 1 )
                                                      if ($value->clientId == $dataa[0]->fkprojectTypenameId2) {
                                                        $selected="selected='selected'";
                                                      } 
                                                    } 

                                                    echo '<option value="'.$value->clientId.'"'.$selected.' >'
                                                    .$value->clientName.'</option>';

                                                    }
                                                    ?>
                                          </select>
                                        </div>
                                    </div> 


                                     <div class="col-12 col-sm-12 col-lg-3 col-md-12">
                                        <div class="mb-3">
                                            <label for="url" class="label-style">Task Layout Name</label>
                                            <select class="select2 form-control form-control-sm input-style" id="fkprojectTypenameId3" 
                                               name="fkprojectTypenameId3" style="width: 100%;"> 
                                                <?php

                                                    foreach ($Ttype as $key => $value) {
                                                      $selected="";
                                                      if(!empty($dataa[0]->projectId)){
                                                                      
                                                      if ($value->tasklayoutId == $dataa[0]->fkprojectTypenameId3) {
                                                        $selected="selected='selected'";
                                                      } 
                                                    } 

                                                    echo '<option value="'.$value->tasklayoutId.'"'.$selected.' >'.$value->tasklayoutName.'</option>';

                                                    }
                                                    ?>

                                          </select>
                                        </div>     
                                    </div> 



                                   <div class="col-12 col-sm-12 col-lg-3 col-md-12">
                                        <div class="mb-3">
                                            <label for="url" class="label-style">Group Type Name</label>
                                            <select class="select2 form-control form-control-sm input-style" id="fkprojectTypenameId4" name="fkprojectTypenameId4" style="width: 100%;"> 
                                                 <?php

                                                    foreach ($Gtype as $key => $value) {
                                                      $selected="";
                                                      if(!empty($dataa[0]->projectId)){
                                                                        //if(2 == 1 )
                                                      if ($value->groupId == $dataa[0]->fkprojectTypenameId4) {
                                                        $selected="selected='selected'";
                                                      } 
                                                    } 

                                                    echo '<option value="'.$value->groupId.'"'.$selected.' >'.$value->groupName.'</option>';

                                                    }
                                                    ?>
                                          </select>
                                        </div>     
                                    </div></div>


                                    <div class="form-row">
                                      
                                      <div class="col-12 col-sm-12 col-lg-3 col-md-12">
                                        <div class="mb-3">
                                            <label for="url" class="label-style">Project Access Type Name</label>
                                            <select class="select2 form-control form-control-sm input-style" id="fkprojectTypenameId5" name="fkprojectTypenameId5" style="width: 100%;"> 
                                                <?php

                                                    foreach ($Atype as $key => $value) {
                                                      $selected="";
                                                      if(!empty($dataa[0]->projectId)){
                                                                     
                                                      if($value->accessId == $dataa[0]->fkprojectTypenameId5) {
                                                        $selected="selected='selected'";
                                                      } 
                                                    } 

                                                    echo '<option value="'.$value->accessId.'"'.$selected.' >'
                                                    .$value->accessName.'</option>';

                                                    }
                                                    ?>
                                          </select>
                                        </div>
                                    </div> 




                                    <div class="col-12 col-sm-12 col-lg-3 col-md-12">
                                      <div class="mb-3">
                                          <label for="url" class="label-style">Budget Type Name</label>
                                          <select class="select2 form-control form-control-sm input-style" id="fkprojectTypenameId6" 
                                              name="fkprojectTypenameId6" style="width: 100%;"> 
                                            <?php

                                                    foreach ($Btype as $key => $value) {
                                                      $selected="";
                                                      if(!empty($dataa[0]->projectId)){
                                                                 
                                                      if ($value->budgetId == $dataa[0]->fkprojectTypenameId6) {
                                                        $selected="selected='selected'";
                                                      } 
                                                    } 

                                                    echo '<option value="'.$value->budgetId.'"'.$selected.' >'
                                                    .$value->budgetName.'</option>';

                                                    }
                                                    ?>
                                          </select>
                                      </div>
                                  </div> 
                                 <div class="col-12 col-sm-12 col-lg-3 col-md-12">
                                    <div class="mb-3">
                                        <label for="url" class="label-style">Currency Type Name</label>
                                          <select class="select2 form-control form-control-sm" id="fkprojectTypenameId7" 
                                          name="fkprojectTypenameId7" style="width: 100%;"> 
                                               
                                                <?php

                                                    foreach ($Utype as $key => $value) {
                                                      $selected="";
                                                      if(!empty($dataa[0]->projectId)){
                                                                       
                                                      if ($value->currentId == $dataa[0]->fkprojectTypenameId7) {
                                                        $selected="selected='selected'";
                                                      } 
                                                    } 

                                                    echo '<option value="'.$value->currentId.'"'.$selected.' >'.$value->currentName.'</option>';
 
                                                    }
                                                    ?>
                                                
                                          </select>
                                    </div>
                                  </div>

                        </div> 
                        
                                  </form>
      <!-- <p>Sed ut perspiciatis unde omnis iste natustium, totam rem aperiam.</p> -->
    <!-- </div>
    
  </div> --> 
                      </div></div>

                      
                      <div class="col-md-12 text-right">
                                            <button class="btn" type="button" name="btn_save" id="btn_save" style="background-color:#d41574; color:white;">
                                            <a href="<?=base_url() ?>Project" class="text-white text-decoration-none">
                                            <i class="fa-solid fa-book"></i> Submit</button>
                                            
                                            <button class="btn btn-primary text-white" type="button" name="cancle" id="cancle"> <a href="<?=base_url() ?>Project" class="text-white text-decoration-none">
                                            <i class="fa-solid fa-pen-to-square"></i> Edit</a> </button>
                                 </div>  
                                 </div>
                                 </div>
                    </div></div>

        

                 

       <script  src="<?php echo base_url('web_resources');?>/dist/js/jquery.min.js"></script>          
      <script  src="<?php echo base_url('web_resources');?>/dist/js/controllers/ProjectCreate2.js"></script>
                 
                     
          <script src="<?php echo base_url();?>Assets/jquery-3.3.1.min.js"></script>
          <script src="<?php echo base_url();?>Assets/select2.min.js"></script>
          <script src="<?php echo base_url();?>Assets/select2.init.js"></script>



<script type="text/javascript">

$(document).ready(function(){
    $(".js-example-tags").select2({
tags: true
});


});


// function readimage(input,valueid) {
//                                           // alert("hello");
//     if (input.files && input.files[0]) {
//       var reader = new FileReader();
//        reader.onload = function (e) {
//        $('#'+valueid+'').attr('src',e.target.result);
//       }
//       reader.readAsDataURL(input.files[0]);
//   }
// }  



$(document).ready(function(){

  var id = $('#projectId').val();

  if(id==0){
    // to show current date 
    document.getElementById('projectstartDate').valueAsDate = new Date();
    document.getElementById('projectendDate').valueAsDate = new Date();
  }

});

</script>

<script>
  

</script>


<!-- <script type="text/JavaScript">
    function validation() {
      var user = document.getElementById('projectName').value;  //value fetch
       
      var user1 = document.getElementById('MarathiName').value; 

      var user2 = document.getElementById('ShortName').value; 
      

      if(user== ""){
        document.getElementById('username').innerHTML =" ** Please fill the Project name field"; //username fill form span here
        return false;
      }


      // conditions
      else if((user.length <=2) || (user.length >20)){      
        document.getElementById('username').innerHTML =" ** user length must be in between 2 to 20"; 
        return false;

      }
      
      else if(!isNaN(user)){
        document.getElementById('username').innerHTML =" ** only characters are allow"; 
        return false;

      }

      else if(user1== ""){
        document.getElementById('username1').innerHTML =" ** Please fill the Project marathi name field"; 
        return false;
      }

      else if(user2== ""){
        document.getElementById('username2').innerHTML =" ** Please fill the Project short name field"; 
        return false;
      }

      else{

        //  alert("Form Submited Successfully");
        
      }
      
      // $('#btn_submit').click(function(){
      //   document.getElementById('#sub').innerHTML = " success";
      // })
    }

  

  </script> -->