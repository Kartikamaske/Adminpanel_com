<!-- <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>Assets/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>Assets/select2.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>Assets/multiselect.css">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"> -->


  <!-- cdn for font family -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family='Poppins'">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
<!-- Select2 CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />

<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>Assets/select2.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>Assets/multiselect.css">

<style>
     .form-control:focus {
        border-color:#5a14c9;
        /* box-shadow: 0 0 0 0.2rem rgba(40, 167, 69, 0.25); */
        box-shadow: 0 0 0 0.2rem #9d89b5;

    } 

    body{
        font-family: 'Poppins', sans-serif;}

        .select2-container--default .select2-selection--single:focus{
                border:#5a14c9!important;
                box-shadow: 0 0 0 0.2rem #9d89b5!important;
        }

/* #preloader{
    background-color:black url('Assets\images\loader.svg');
    background-color:black;
    height:100vh;
    width:100%;
    position:fixed;
    z-index:100;
} */

<style>
      #loading{
        width:100%;
        height: 100vh;
        background: #fff url('Assets/images/loader.svg');
        position:fixed;
        z-index: 99999;
      }
    </style>
</style>
  <body onload="myfunction()">
    
  

<!-- <div id="preloader"></div> -->
<div id="loading">

  </div>

        <!-- =============== Left side End ================-->
<div class="main-content-wrap sidenav-open d-flex flex-column">
          <!-- ============ Body content start ============= -->
  <div class="main-content">
      <div class="breadcrumb"></div>
      <div class="separator-breadcrumb border-top"></div>
        <div class="form-row mt-4">
          <div class="col-md-12">
              <div class="card mb-4 card-style">

              <div class="card-title">
                        <h3>&ensp;Create Indivisual Task</h3>
                            </div>
                <div class="card-body p-3">
                
                  <!-- <hr style="width:100%;text-align:left;margin-left:0;color:black"> -->

                  <form role="form" id="Form" enctype="multipart/form-data" action="#" method="post">

                      <input type="text" class="form-control" id="IndivisualtaskId" name="IndivisualtaskId" value="<?php if(!empty($dataa[0]->IndivisualtaskId)){echo $dataa[0]->IndivisualtaskId;}?>">

                      <!-- <label for=""> registration id</label> -->
                      <input type="text" class="form-control" id="registrationId" name="registrationId" value="<?php if(!empty($getfkuser[0]->registrationId)){echo $getfkuser[0]->registrationId;}?>"><br>
                     
                      <!-- <input type="text" class="form-control" id="fkuserId" name="fkuserId" value="<?php if(!empty($getfkuser[0]->fkuserId)){echo $getfkuser[0]->fkuserId;}?>"> -->

                        <div class="form-row">
                                  <div class="col-12 col-sm-2 col-md-4">
                                      <div class="mb-3">
                                          <label for="taskdescription">Task Description</label><span class="text-danger">*</span>
                                          <input type="text" class="form-control overflow-scroll" id="taskdescription" placeholder="" autofocus="focus" name="taskdescription" value="<?php if(!empty($dataa[0]->taskdescription)){echo $dataa[0]->taskdescription;}?>">
                                          
                                      </div>

                                  </div>

                                  <div class="col-12 col-sm-2 col-md-4">
                                      <div class="mb-3">
                                          <label for="startdate">Start Date</label><span class="text-danger">*</span>
                                          <input type="date" class="form-control" id="startdate" placeholder="" name="startdate" value="<?php if(!empty($dataa[0]->startdate)){echo $dataa[0]->startdate;}?>">
                                         
                                      </div>

                                  </div>

                                  <div class="col-12 col-sm-2 col-md-4">
                                      <div class="mb-3">
                                          <label for="enddate">End Date</label>
                                          <input type="date" class="form-control" id="enddate" placeholder="" name="enddate" value="<?php if(!empty($dataa[0]->enddate)){echo $dataa[0]->enddate;}?>">
                                          
                                      </div>

                                  </div>

                              
                         </div>

                         <!-- 2 nd row -->
                         <div class="form-row">
                                  <div class="col-12 col-sm-2 col-md-4">
                                      <div class="mb-3">
                                          <label for="starttime">Start Time</label><span class="text-danger">*</span>
                                          <input type="datetime" class="form-control" id="starttime" placeholder="" name="starttime" value="<?php if(!empty($dataa[0]->starttime)){echo $dataa[0]->starttime;}?>">
                                          
                                      </div>

                                  </div>

                                  <div class="col-12 col-sm-2 col-md-4">
                                      <div class="mb-3">
                                          <label for="endtime">End Time</label>
                                          <input type="datetime" class="form-control" id="endtime" placeholder="expected time" name="endtime" value="<?php if(!empty($dataa[0]->endtime)){echo $dataa[0]->endtime;}?>">
                                         
                                      </div>

                                  </div>

                                  <div class="col-12 col-sm-2 col-md-4">
                                      <div class="mb-3">
                                          <label for="taskdate">Task Date</label>
                                          <input type="date" class="form-control" id="taskdate" placeholder="expected time" name="taskdate" value="<?php if(!empty($dataa[0]->taskdate)){echo $dataa[0]->taskdate;}?>">
                                         
                                      </div>

                                  </div>

                         </div>


                         <div class="form-row">
                          <div class="col-12 col-sm-2 col-md-4">
                                  <div class="mb-3">
                                          <label for="processflag">Status</label>
                                          <!-- <input type="text" onclick="return validation()" class="form-control" id="projectName" placeholder="" name="projectName" value="<?php if(!empty($dataa[0]->processflag)){echo $dataa[0]->processflag;}?>"> -->
                                          <select class="select2 form-control form-control-sm" id="processflag" name="processflag" style="width: 100%;"> 
                                                <!-- <option value="1">Completed</option> -->
                                                <option value="1">Running</option>
                                          </select>
                                      </div>

                                  </div>

                         </div>

                        
                                  </form>
    

                                <div class="col-md-12 text-right">
                                            <button class="btn btn-primary" type="button" name="btn_save" id="btn_save"><i class="fa-regular fa-circle-check"></i> Submit</button>
                                            <button class="btn btn-warning text-white" type="button" name="cancle" id="cancle"> <a href="<?=base_url() ?>Indivisualtask" class="text-white text-decoration-none">
                                            <i class="fa-solid fa-pen-to-square"></i> Edit</a></button>
                                 </div>  

                      </div></div>

                      
                      
                                 </div>
                                 </div>
                    <!-- </div></div> -->

 </body>
                 

       <script  src="<?php echo base_url('web_resources');?>/dist/js/jquery.min.js"></script>          
      <script  src="<?php echo base_url('web_resources');?>/dist/js/controllers/IndivisualtaskCreate.js"></script>
                 
                     
          <script src="<?php echo base_url();?>Assets/jquery-3.3.1.min.js"></script>
          <script src="<?php echo base_url();?>Assets/select2.min.js"></script>
          <script src="<?php echo base_url();?>Assets/select2.init.js"></script>




<script type="text/javascript">

$(document).ready(function(){
    $(".js-example-tags").select2({
tags: true
});


});



$(document).ready(function(){

var id = $('#IndivisualtaskId').val();

if(id==0){
  // to show current date 
  document.getElementById('startdate').valueAsDate = new Date();
  document.getElementById('enddate').valueAsDate = new Date();
  document.getElementById('taskdate').valueAsDate = new Date();

}

});

</script>




<script>
// to show current time
     $(document).ready(function(){
document.getElementById('startdate').valueAsDate = new Date();
var startTime=new Date();
document.getElementById('starttime').value = startTime.toLocaleTimeString();

document.getElementById('enddate').valueAsDate = new Date();
var endTime=new Date();
document.getElementById('endtime').value = endTime.toLocaleTimeString();



var id = document.getElementById('IndivisualtaskId').value ;

if(id==0||id==null){

document.getElementById('processflag') = true;
processFlagValue = "2"

// }else if(id>0){
//     processFlagValue = "1"
}


     });

</script>


<script>
  var preloader = document.getElementById("loading");
  function myfunction(){
    preloader.style.display="none";
  }
</script>





<!-- <script>
    document.addEventListener("DOMContentLoaded", function() {
        // Assuming you have a form submit event handler somewhere
        // Replace 'yourForm' with the actual ID or class of your form
        document.querySelector('#IndivisualtaskId').addEventListener('submit', function(event) {
            // Prevent the form from submitting
            event.preventDefault();

            // Get the selected value of the processflag dropdown
            var processFlagValue = document.getElementById("processflag").value;

            // Depending on the selected value, show or hide certain elements
            if (processFlagValue === "1") {
                // Code to show or perform actions for Completed
            } else if (processFlagValue === "2") {
                // Code to show or perform actions for Running
            }

            // Submit the form programmatically after processing
            // this line can be removed if you don't want to submit automatically
            event.target.submit();
        });
    });
</script> -->

<!-- 
<script>
    document.getElementById("processflag").addEventListener("change", function() {
        var processFlagValue = this.value;

        if (processFlagValue === "1") {
            // Code to show or perform actions for Completed
            console.log("Completed selected");
        } else if (processFlagValue === "2") {
            // Code to show or perform actions for Running
            console.log("Running selected");
        }
    });
</script> -->







