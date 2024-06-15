<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>Assets/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>Assets/select2.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>Assets/multiselect.css">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

  
        <!-- =============== Left side End ================-->
        <div class="main-content-wrap sidenav-open d-flex flex-column">
          <!-- ============ Body content start ============= -->
          <div class="main-content">
              <div class="breadcrumb">
                  <!-- <h1>User Creation</h1> -->
              </div>

              <div class="separator-breadcrumb border-top"></div>

              <div class="form-row mt-4">
                  <div class="col-md-12">
                      <div class="card mb-4">
                          <div class="card-body">
                        
                          <h3>&ensp;Project Management</h3>
                          <hr style="width:90%;text-align:left;margin-left:0;color:black">
                          <form role="form" id="Form" enctype="multipart/form-data" action="#" method="post">

                          <input type="hidden" class="form-control" id="projectId" placeholder="" name="projectId" value="<?php if(!empty($dataa[0]->projectId)){echo $dataa[0]->projectId;}?>">

                              <div class="form-row">
                                  <div class="col-12 col-sm-2 col-md-4">
                                      <div class="mb-3">
                                          <label for="projectName">Project Name<span class="text-danger">*</span> </label>
                                          <input type="text" onclick="return validation()" class="form-control" id="projectName" placeholder="" name="projectName" value="<?php if(!empty($dataa[0]->projectName)){echo $dataa[0]->projectName;}?>">
                                          <span id="username" class="text-danger font-weight-bold"></span>
                                      </div>
                                  </div>

                                  <div class="col-12 col-sm-2 col-md-4">
                                      <div class="mb-3">
                                        <label for="MarathiName">Project Marathi Name <span class="text-danger">*</span> </label>
                                        <input type="text" onclick="return validation()" class="form-control" id="MarathiName" placeholder="" name="MarathiName" value="<?php if(!empty($dataa[0]->MarathiName)){echo $dataa[0]->MarathiName;}?>">
                                        <span id="username1" class="text-danger font-weight-bold"></span>
                                      </div>
                                  </div>

                                  <div class="col-12 col-sm-2 col-md-4">
                                      <div class="mb-3">
                                          <label for="ShortName">Project Short Name<span class="text-danger">*</span> </label>
                                          <input type="text" onclick="return validation()" class="form-control" id="ShortName" name="ShortName" value="<?php if(!empty($dataa[0]->ShortName)){echo $dataa[0]->ShortName;}?>">
                                          <span id="username2" class="text-danger font-weight-bold"></span>
                                      </div>
                                  </div>

                                 <div class="col-12 col-sm-12 col-lg-12 col-md-12">
                                      <div class="mb-3">
                                          <label for="Tagname">Tag Name</label>
                                          <select class="select2 form-control form-control-sm" multiple id="fktagId" name="fktagId" style="width: 100%;">
                                                      <!-- <option value="">tag</option>
                                                      <option value="">tag2</option>
                                                      <option value="">tag3</option>
                                                      <option value="">tag4</option> -->

                                                      <?php

                                                                    foreach ($TTtype as $key => $value) {
                                                                      $selected="";
                                                                      if(!empty($dataa[0]->projectId)){
                                                                                        //if(2 == 1 )
                                                                      if ($value->tagmainId == $dataa[0]->fktagId) {
                                                                        $selected="selected='selected'";
                                                                      } 
                                                                    } 

                                                                    echo '<option value="'. $value->tagmainId.'"'.$selected.' >'. $value->tagmainname.'</option>';

                                                                    }
                                                                    
                                                                    ?>
                                                      </select>
                                          <!-- <input type="text" class="form-control" id="Tagname" placeholder="" name="Tagname" value="<?php if(!empty($dataa[0]->Tagname)){echo $dataa[0]->Tagname;}?>"> -->
                                      </div>
                                  </div>

                                </div>
                        </form>


                        <!-- adddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddd -->

                         <!-- Nav pills -->
  <div class="w-100" style="background-color:#ede3e3;">                       
  <ul class="nav nav-pills" role="tablist">
    <li class="nav-item">
      <a class="nav-link active" data-bs-toggle="pill" href="#home"><i class="fa-solid fa-circle-info"></i> Details</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-bs-toggle="pill" href="#menu1"><i class="fa-solid fa-book"></i> Overview</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-bs-toggle="pill" href="#menu2"><i class="fa-solid fa-location-arrow"></i> Location</a>
    </li>
  </ul></div>


   <!-- Tab panes -->
   <div class="tab-content">
  
  <div id="home" class="container tab-pane active"><br>
    <h3>Details</h3>
    <form role="form" id="Form" enctype="multipart/form-data" action="" method="post">
                                  <div class="form-row p-4">

                                  <div class="col-12 col-sm-12 col-lg-4 col-md-12">
                                      <div class="mb-3">
                                          <label for="projectstartDate">Start Date</label>
                                          <input type="date" class="form-control" id="projectstartDate" placeholder="" name="projectstartDate" value="<?php if(!empty($dataa[0]->projectstartDate)){echo $dataa[0]->projectstartDate;}?>">
                                      </div>
                                  </div>

                                  <div class="col-12 col-sm-12 col-lg-4 col-md-12">
                                      <div class="mb-3">
                                          <label for="projectendDate">End Date</label>
                                          <input type="date" class="form-control" id="projectendDate" placeholder="" name="projectendDate" value="<?php if(!empty($dataa[0]->projectendDate)){echo $dataa[0]->projectendDate;}?>">
                                      </div>
                                  </div>

                                  <div class="col-12 col-sm-12 col-lg-4 col-md-12">
                                  <div class="form-check pt-4 ms-3">
                                          <label class="form-check-label">Strict Flag:</label>
                                          <input class="form-check-input" type="checkbox" id="check1" name="option1" value="something" checked style="margin-left:10px">
                                  </div>
                                  </div>

                                </div></form>
  </div>


  <div id="menu1" class="container tab-pane fade"><br>
      <h3>Overview</h3>
      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut 
        aliquip ex ea commodo consequat.</p>
    </div>


    <div id="menu2" class="container tab-pane fade"><br>
      <h3>Location</h3>
      <form role="form" id="Form" enctype="multipart/form-data" action="" method="post">

                                    <div class="form-row">

                                    <div class="col-12 col-sm-12 col-lg-3 col-md-12">
                                        <div class="mb-3">
                                            <label for="url">Project Type Name</label>
                                            <select class="select2 form-control form-control-sm" id="fkprojectTypenameId" name="fkprojectTypenameId" style="width: 100%;">
                                                <!-- <option value="">Computer Software Development</option>
                                                <option value="">Management Project</option>
                                                <option value="">xyx</option>
                                                <option value="">dfdfdfd</option> -->

                                                <?php

                                                    foreach ($Ptype as $key => $value) {
                                                      $selected="";
                                                      if(!empty($dataa[0]->projectId)){
                                                                        //if(2 == 1 )
                                                      if ($value->Ptype == $dataa[0]->fkprojectTypenameId) {
                                                        $selected="selected='selected'";
                                                      } 
                                                    } 

                                                    echo '<option value="'. $value->typeId.'"'.$selected.' >'. $value->typeName.'</option>';

                                                    }
                                                    ?>
                                          </select>
                                        </div>
                                    </div>




                                    <div class="col-12 col-sm-12 col-lg-3 col-md-12">
                                        <div class="mb-3">
                                            <label for="url"> Client Name</label>
                                            <select class="select2 form-control form-control-sm" id="fkprojectTypenameId2" name="fkprojectTypenameId2" style="width: 100%;">
                                                <!-- <option value="">dfdfdfd</option>
                                                <option value="">abvcc</option>
                                                <option value="">dfdfdfd</option>
                                                <option value="">dfghgfd</option>
                                                <option value="">kfdkjhk</option> -->
                                                <?php

                                                    foreach ($Ctype as $key => $value) {
                                                      $selected="";
                                                      if(!empty($dataa[0]->projectId)){
                                                                        //if(2 == 1 )
                                                      if ($value->Ctype == $dataa[0]->fkprojectTypenameId2) {
                                                        $selected="selected='selected'";
                                                      } 
                                                    } 

                                                    echo '<option value="'. $value->clientId.'"'.$selected.' >'. $value->clientName.'</option>';

                                                    }
                                                    ?>
                                          </select>
                                        </div>
                                    </div>


                                    <div class="col-12 col-sm-12 col-lg-3 col-md-12">
                                        <div class="mb-3">
                                            <label for="url">Task Layout Name</label>
                                            <select class="select2 form-control form-control-sm" id="fkprojectTypenameId3" 
                                               name="fkprojectTypenameId3" style="width: 100%;">
                                                <!-- <option value="">dfdfdfd</option>
                                                <option value="">aretyt</option>
                                                <option value="">gnhfjhfj</option> -->
                                                <?php

                                                    foreach ($Ttype as $key => $value) {
                                                      $selected="";
                                                      if(!empty($dataa[0]->projectId)){
                                                                        //if(2 == 1 )
                                                      if ($value->Ttype == $dataa[0]->fkprojectTypenameId3) {
                                                        $selected="selected='selected'";
                                                      } 
                                                    } 

                                                    echo '<option value="'. $value->tasklayoutId.'"'.$selected.' >'. $value->tasklayoutName.'</option>';

                                                    }
                                                    ?>

                                          </select>
                                        </div>     
                                    </div>



                                    <div class="col-12 col-sm-12 col-lg-3 col-md-12">
                                        <div class="mb-3">
                                            <label for="url">Group Type Name</label>
                                            <select class="select2 form-control form-control-sm" id="fkprojectTypenameId4" name="fkprojectTypenameId4" style="width: 100%;">
                                                <!-- <option value="">dfdfdfd</option>
                                                <option value="">abvcc</option>
                                                <option value="">dfdfdfd</option> -->
                                                <?php

                                                    foreach ($Gtype as $key => $value) {
                                                      $selected="";
                                                      if(!empty($dataa[0]->projectId)){
                                                                        //if(2 == 1 )
                                                      if ($value->Gtype == $dataa[0]->fkprojectTypenameId4) {
                                                        $selected="selected='selected'";
                                                      } 
                                                    } 

                                                    echo '<option value="'. $value->groupId.'"'.$selected.' >'. $value->groupName.'</option>';

                                                    }
                                                    ?>
                                          </select>
                                        </div>     
                                    </div></div>


                                    <div class="form-row">
                                      
                                      <div class="col-12 col-sm-12 col-lg-3 col-md-12">
                                        <div class="mb-3">
                                            <label for="url">Project Access Type Name</label>
                                            <select class="select2 form-control form-control-sm" id="fkprojectTypenameId5" name="fkprojectTypenameId5" style="width: 100%;">
                                                <!-- <option value="">dfdfdfd</option>
                                                <option value="">abvcc</option>
                                                <option value="">dfdfdfd</option> -->
                                                <?php

                                                    foreach ($Atype as $key => $value) {
                                                      $selected="";
                                                      if(!empty($dataa[0]->projectId)){
                                                                        //if(2 == 1 )
                                                      if ($value->Atype == $dataa[0]->fkprojectTypenameId5) {
                                                        $selected="selected='selected'";
                                                      } 
                                                    } 

                                                    echo '<option value="'. $value->accessId.'"'.$selected.' >'. $value->accessName.'</option>';

                                                    }
                                                    ?>
                                          </select>
                                        </div>
                                    </div>




                                    <div class="col-12 col-sm-12 col-lg-3 col-md-12">
                                      <div class="mb-3">
                                          <label for="url">Budget Type Name</label>
                                          <select class="select2 form-control form-control-sm" id="fkpaymentDtlsId6" 
                                              name="fkpaymentDtlsId" style="width: 100%;">
                                            <!-- <option value="">dfdfdfd</option>
                                            <option value="">abvcc</option>
                                            <option value="">dfdfdfd</option> -->
                                            <?php

                                                    foreach ($Btype as $key => $value) {
                                                      $selected="";
                                                      if(!empty($dataa[0]->projectId)){
                                                                        //if(2 == 1 )
                                                      if ($value->Btype == $dataa[0]->fkprojectTypenameId6) {
                                                        $selected="selected='selected'";
                                                      } 
                                                    } 

                                                    echo '<option value="'. $value->budgetId.'"'.$selected.' >'. $value->budgetName.'</option>';

                                                    }
                                                    ?>
                                          </select>
                                      </div>
                                  </div>



                                  <div class="col-12 col-sm-12 col-lg-3 col-md-12">
                                    <div class="mb-3">
                                        <label for="url">Currency Type Name</label>
                                          <select class="select2 form-control form-control-sm" id="fkprojectTypenameId7" 
                                          name="fkprojectTypenameId7" style="width: 100%;">
                                                <!-- <option value="">dfdfdfd</option>
                                                <option value="">abvcc</option>
                                                <option value="">dfdfdfd</option> -->
                                                 <?php

                                                    foreach ($Utype as $key => $value) {
                                                      $selected="";
                                                      if(!empty($dataa[0]->projectId)){
                                                                        //if(2 == 1 )
                                                      if ($value->Utype == $dataa[0]->fkprojectTypenameId7) {
                                                        $selected="selected='selected'";
                                                      } 
                                                    } 

                                                    echo '<option value="'. $value->currentId.'"'.$selected.' >'. $value->currentName.'</option>';

                                                    }
                                                    ?>
                                                
                                          </select>
                                    </div>
                                  </div>
                        </div>    



                                  



                                  </form>
      <!-- <p>Sed ut perspiciatis unde omnis iste natustium, totam rem aperiam.</p> -->
    </div>
    
  </div>





                        <div class="col-md-12 text-right">
                                            <button class="btn btn-primary" type="button" name="btn_save" id="btn_save"><i class="fa-solid fa-book"></i>Submit</button>
                                            <button class="btn btn-warning text-white" type="button" name="cancle" id="cancle"> <a href="<?=base_url() ?>Project" class="text-white">
                                            <i class="fa-solid fa-pen-to-square"></i> Edit</a> </button>
                                 </div>   


                      </div></div></div></div></div></div>

        

                 

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

});

</script>


<script type="text/JavaScript">
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

  </script>