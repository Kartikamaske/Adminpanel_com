<!-- <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>Assets/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>Assets/select2.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>Assets/multiselect.css">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"> -->


  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
<!-- Select2 CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />

<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>Assets/select2.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>Assets/multiselect.css">

<link rel="stylesheet" href="https://fonts.googleapis.com/css?family='Poppins'">

<style>
     .form-control:focus {
        border-color:#5a14c9;
        /* box-shadow: 0 0 0 0.2rem rgba(40, 167, 69, 0.25); */
        box-shadow: 0 0 0 0.2rem #e1dde7;
    } 


    textarea:focus{
        border-color:#5a14c9!important;
        box-shadow: 0 0 0 0.2rem #e1dde7;
    }

    body{
        font-family: 'Poppins', sans-serif;}

        .select2-container--default .select2-selection--single:focus{
                border:#5a14c9!important;
                box-shadow: 0 0 0 0.2rem #e1dde7!important;
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
                  <form role="form" id="Form" enctype="multipart/form-data" action="#" method="post">

                      <input type="hidden" class="form-control" id="IndivisualtaskId" name="IndivisualtaskId" value="<?php if(!empty($dataa[0]->IndivisualtaskId)){echo $dataa[0]->IndivisualtaskId;}?>">

                     <input type="hidden" class="form-control" id="registrationId" name="registrationId" value="<?php if(!empty($getfkuser[0]->registrationId)){echo $getfkuser[0]->registrationId;}?>"><br>
                     

                        <div class="form-row">
                                  <div class="col-12 col-sm-2 col-md-6">
                                      <div class="mb-3">
                                          <label for="taskname"> Indivisual Task Description</label>
                                          <textarea type="text" name="taskname" id="taskname" cols="70" row="10" class="form-control" autofocus="focus" style="height:200px;"><?php if(!empty($dataa[0]->taskname)){echo $dataa[0]->taskname;}?></textarea>
                                          
                                      </div>

                                  </div>

                                  <div class="col-12 col-sm-2 col-md-4">
                                      <div class="mb-3" hidden>
                                          <label for="startdate">Start Date</label>
                                          <input type="datetime-local" class="form-control" id="startdate" placeholder="" name="startdate" value="<?php if(!empty($dataa[0]->startdate)){echo $dataa[0]->startdate;}?>">
                                         
                                      </div>

                                  </div>

                                  <div class="col-12 col-sm-2 col-md-4">
                                      <div class="mb-3" hidden>
                                          <label for="enddate">End Date</label>
                                          <input type="datetime-local" class="form-control" id="enddate" placeholder="" name="enddate" value="<?php if(!empty($dataa[0]->enddate)){echo $dataa[0]->enddate;}?>">
                                         
                                      </div>

                                  </div>

 
                         </div>

                         <!-- 2 nd row -->
                         <div class="form-row">
                         <div class="col-12 col-sm-2 col-md-4">
                                      <div class="mb-3" hidden >
                                          <!-- <label for="starttime">End Time</label> -->
                                          <input type="time" class="form-control" id="starttime" placeholder="expected time" name="starttime" value="<?php if(!empty($dataa[0]->starttime)){echo $dataa[0]->starttime;}?>">
                                      </div>
                                  </div>

                                  <div class="col-12 col-sm-2 col-md-4">
                                      <div class="mb-3" hidden >
                                          <!-- <label for="endtime">End Time</label> -->
                                          <input type="time" class="form-control" id="endtime" placeholder="expected time" name="endtime" value="<?php if(!empty($dataa[0]->endtime)){echo $dataa[0]->endtime;}?>">
                                      </div>
                                  </div>


                                  <div class="col-12 col-sm-2 col-md-4" hidden>
                                      <div class="mb-3">
                                          <!-- <label for="taskdate">Task Date</label> -->
                                          <input type="date" class="form-control" id="taskdate" placeholder="expected time" name="taskdate" value="<?php if(!empty($dataa[0]->taskdate)){echo $dataa[0]->taskdate;}?>">
                                      </div>
                                  </div>

                         </div>


                        <div class="form-row">
                            
                            <div class="col-12 col-sm-2 col-md-3">
                                  <div class="mb-3">
                                          <label for="expexteddatetime">Expected Task Completed data & Time</label>
                                          <input type="datetime-local" class="form-control" id="expexteddatetime" placeholder="expected time" name="expexteddatetime" value="<?php if(!empty($dataa[0]->expexteddatetime)){echo $dataa[0]->expexteddatetime;}?>">     
                                 </div>
                            </div>


                            <div class="col-12 col-sm-2 col-md-2">
                                  <div class="mb-3">
                                          <label for="processflag">Status</label>

                                          <select class="select2 form-control form-control-sm" id="processflag" name="processflag" style="width: 100%;"> 
                                                <!-- <option value="1">Completed</option> -->
                                                <option value="1" class="text-danger">Running</option>
                                          </select>
                                 </div>
                            </div>

                        </div>

                        
                                  </form>
    

                                <div class="col-md-12 text-right">
                                            <button class="btn" type="button" name="btn_save" id="btn_save" style="background-color: #d41574;color:white"><i class="fa-solid fa-book"></i> Submit </button>
                                                    
                                         <button class="btn btn-primary text-white" type="button" name="cancle" id="cancle">
                                                <a href="<?=base_url() ?>Indivisualtask" class="text-white">
                                                <i class="fa-solid fa-pen-to-square"></i> Edit </a></button>
                                       
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


          <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>





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

        document.getElementById('enddate').valueAsDate = new Date();
        var endTime=new Date();
        document.getElementById('endtime').value = endTime.toLocaleTimeString();


        document.getElementById('startdate').valueAsDate = new Date();
        var startTime=new Date();
        document.getElementById('starttime').value = startTime.toLocaleTimeString();



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


<script>
var now = new Date();
now.setMinutes(now.getMinutes() - now.getTimezoneOffset());
document.getElementById('expexteddatetime').value = now.toISOString().slice(0,16);
</script>

<script>
var now = new Date();
now.setMinutes(now.getMinutes() - now.getTimezoneOffset());
document.getElementById('startdate').value = now.toISOString().slice(0,16);
</script>


<script>
var now = new Date();
now.setMinutes(now.getMinutes() - now.getTimezoneOffset());
document.getElementById('enddate').value = now.toISOString().slice(0,16);
</script>











