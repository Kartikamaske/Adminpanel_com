
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title> User Registration</title>
    <link href="https://fonts.googleapis.com/css?family=Nunito:300,400,400i,600,700,800,900" rel="stylesheet" />

    <link href="<?=base_url();?>Assets/css/for_new_registration.css" rel="stylesheet" />


    <link href="<?=base_url();?>Assets/css/plugins/perfect-scrollbar.min.css" rel="stylesheet" />

    <link rel="stylesheet" href="<?=base_url();?>Assets/css/plugins/dropzone.min.css" />
    <link rel="stylesheet" href="<?=base_url();?>Assets/css/plugins/datatables.min.css" />


    
    <link rel="icon" href="<?=base_url() ?>Assets/images/studentlogo.png" sizes="32x32" type="image/png">
   
    <!-- ******* Added New Links***** -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>web_resources/dist/css/sweetalert.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.1/css/all.min.css"/>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family='Poppins'">
    <style>
        body{
            font-family: 'Poppins', sans-serif;
        }
    </style>
    <script>
        var base_path="<?php echo base_url();?>";
     </script>


</head>


<style>
    /* .body-style{
    font-family:'Open Sans', sans-serif;
    background-image: url("<?=base_url();?>Assets/images/login-bg.jpg");
    background-repeat: no-repeat;
    background-size: 90rem;
    background-position: center;
} */


.enquiry-opt {
    display:none;
}

</style>
        <!-- =============== Left side End ================-->
        <!-- <div class="main-content-wrap sidenav-open d-flex flex-column"> -->
<div class="main-content-wrap mt-0 d-flex flex-column body-style">

            <!-- ============ Body content start ============= -->
    <div class="main-content ">
        <div class="row ">
            <div class="card mb-4 p-4" >
                <div class="" style="">
                        <h1 class="heading-style">
                            <img src="<?=base_url() ?>Assets/images/logocom.png" alt="" class="logo-img">
                        Comtranse Technology Pvt.Ltd.</h1>
                        <hr class="horizontal-line">
                </div>

                <div class="card-body mt-2" >
                    <form role="form" id="Form" action="" enctype="multipart/form-data" method="post">
                        <input type="hidden" class="form-control mb-3" id="registrationId"  name="registrationId" value="0">
                        <div class="row">
                            <div class="col-md-3 ">
                                <label for="firstName1">Full Name<span style="color:red">*</span></label>
                                <input class="form-control" id="fname" type="text" placeholder="Surname Firstname Middlename" name="fname" autocomplete="off" value=""/>
                                <p id="error_fname"></p>
                            </div>
                                       
                            <div class="col-md-3 ">
                                <label for="email">Email Address<span style="color: red;">*</span></label>
                                <input class="form-control " placeholder="example@gmail.com" id="email" name="email" type="email" autocomplete="off" value="">
                                <p id="error_email"></p>
                            </div>

                            <div class="col-md-3 ">
                                <label for="mobile">Mobile No.<span style="color: red;">*</span></label>
                                <input class="form-control " type="number" maxlength="10" placeholder="+91-0000000000" id="mobile" name="mobile_no" autocomplete="off" value="">
                                <p id="error_mob" class="text-danger"></p>
                                <p id="error_msgMob"></p>

                            </div>

                            <div class="col-md-3 ">
                                <label for="phone">Alternate Mobile No.</label>
                                <input class="form-control"  type="number" id="mobile2" maxlength="10" placeholder="+91-0000000000" name="mobile_no2" value="" autocomplete="off" value=""/>
                                <p id="error_mob2"></p>
                            </div>
                            <div class="col-md-3 ">
                                <label for="">Address</label>
                                <textarea class="form-control" id="address" type="text" placeholder="Address..." name="address" value="" autocomplete="off"></textarea>
                            </div>
                                       
                            <div class=" col-md-3 ol-lg-3 mt-3  mt-md-1 mt-lg-1">
                                <label for="picker1 ">Gender </label>
                                <div class="d-flex mx-3 mx-sm-2 mt-lg-2 px-2">
                                    <label class="radio radio-primary mx-3">
                                        <input type="radio" name="gender" id="male" value="0" checked/><span class="pr-1">Male</span><span class="checkmark"></span>
                                    </label>

                                    <label class="radio radio-primary ">
                                        <input type="radio" name="gender" id="female" value="1" /><span class="pr-1">Female</span><span class="checkmark "></span>
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-3 mt-1 mb-3">
                                <label for="">Date Of Birth</label>
                                <input type="date" name="dob" id="dob" class="form-control">
                            </div>

                            <div class="col-md-3 mt-1 mb-3">
                                <label for="">Reference By</label>
                                <input type="text" name="reference" id="reference" class="form-control" placeholder="Reference By">
                            </div>
                                
                            <div class=" col-md-3 mb-3 my-md-3 my-lg-3">
                            <label for="picker1">Enquiry For<span style="color: red;">*</span></label>
                                <select class="form-control enquiry-drop" name="enquirytype" id="enquirySelect"
                                onchange="selectEnquiry(this)">
                                            <option value="">--Enquiry For-- </option>
                                            <?php
                                                    
                                                foreach ($enquiry as $key => $value) {
                                                    $selected="";
                                                   
                                                    echo '<option value="'. $value->enquiryid.'"'.$selected.' >'.$value->enquirytype.'</option>';
                                                }
                                            ?>
                                </select>
                            </div>

                            <div class="col-md-12 col-lg-12 mt-lg-3 enquiry-opt" id="showInternship" >
                                <div  class=" col-md-2 mt-lg-3 mt-md-3 ">
                                    <label for="">Which Technology</label>
                                    <select class="form-control " name="technology" id="whichtech" style="display:block;">
                                        <option value="0">--Select Technology-- </option>
                                            <?php
                                                foreach ($tech as $key => $value) {
                                                    $selected="";
                                                    echo '<option value="'. $value->technologyId.'"'.$selected.' >'.$value->technologyname.'</option>';
                                                }
                                            ?>
                                    </select>
                                    <p id="error_tech"></p>
                                </div>
                                    
                                <div  class=" col-md-2 mt-lg-3 mt-md-3">
                                        <label for="">Duration</label> 
                                        
                                        <select class="form-control " name="duration" id="duration">
                                            <option value="0">--Select Duration-- </option>
                                            <?php
                                                    
                                                foreach ($duration as $key => $value) {
                                                    $selected="";
                                                    
                                                    echo '<option value="'. $value->durationId.'"'.$selected.' >'.$value->durationname.'</option>';
                                                }
                                            ?>
                                        </select>
                                        <p id="error_duration"></p>
                                    </div>
                                    <div  class="col-md-2  mb-3 mt-lg-3 mt-md-3 ">
                                            <label for="">Expect Starting Date</label>
                                            <input type="date" name="ex_starting_date" id="ex_starting_date" class="form-control " autocomplete="off">
                                    </div>
                                    <div  class="col-md-2 mb-3 mt-lg-3 mt-md-3 ">
                                        <label for="">College Name</label>
                                        <select class="form-control " name="college" >
                                            <option value="0">--Select College-- </option>
                                            <?php
                                                    
                                                foreach ($college as $key => $value) {
                                                    $selected="";
                                                     
                                                    echo '<option value="'. $value->collageId.'"'.$selected.' >'.$value->collagename.'</option>';
                                                }
                                            ?>
                                        </select>
                                    </div>
                                    <div  class="col-md-2 mb-3 mt-lg-3 mt-md-3">
                                        <label for="">Last Qualification</label>
                                        <select class="form-control " name="qualification" >
                                            <option value="0">--Select Qualification-- </option>
                                            <?php
                                                    
                                                foreach ($qualification as $key => $value) {
                                                    $selected="";
                                                    
                                                    echo '<option value="'. $value->qualificationId.'"'.$selected.' >'.$value->qualificationname.'</option>';
                                                }
                                            ?>
                                        </select>
                                            
                                    </div>
                                    <div  class="col-md-2 mb-3 mt-lg-3 mt-md-3">
                                        <label for="">Last Semister</label>
                                        <select class="form-control " name="sem" >
                                            <option value="0">--Select Semister-- </option>
                                            <?php
                                                    
                                                foreach ($sem as $key => $value) {
                                                    $selected="";
                                                    
                                                    echo '<option value="'. $value->semId.'"'.$selected.' >'.$value->semname.'</option>';
                                                }
                                            ?>
                                        </select>
                                          
                                    </div>
                                </div>
                           
                        
                            <div id="showJob" class="col-md-12 enquiry-opt ">
                                <div class="col-md-2 col-sm-12 col-12 mt-lg-3 mt-md-3 mb-3 " >
                                        <label for="">Which Role</label>
                                        <select class="form-control " name="jobrole" >
                                            <option value="0">--Select Job Role-- </option>
                                            <?php
                                                foreach ($jobRole as $key => $value) {
                                                    $selected="";
                                                   
                                                    echo '<option value="'. $value->roleId.'"'.$selected.' >'.$value->rolename.'</option>';
                                                }
                                            ?>
                                        </select>
                                               
                                    </div> 

                                <div  class="col-md-3 col-sm-12 col-12 mt-lg-3 mt-md-3 mb-3 job-area " > 
                                    <label for="picker1">Work Expericence</label>    
                                    <div class="d-flex mt-2 px-2">
                                        <label class="radio radio-primary mx-3">
                                            <input type="radio" name="jobexpRadio" value="0"><span class="pr-1">Experienced</span><span class="checkmark"></span>
                                        </label>

                                        <label class="radio radio-primary">
                                            <input type="radio" name="jobexpRadio" value="1"><span class="pr-1">Fresher</span><span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                                                
                                <div  class="col-md-4 col-sm-12 col-12 mb-3 mt-lg-3 mt-md-3"> 
                                    <label for="">Any Internship Details</label>
                                        <textarea name="expdetails" id="" cols="15" rows="3" class=" form-control mb-3" autocomplete="off"></textarea>
                                </div>
                            </div> 
                        
                            <div class="enquiry-opt " id="showOther">
                                <div class="col-md-3 mb-3 mt-lg-3 mt-md-3">
                                <label for="">Purpose</label> 
                                <textarea class="form-control" id="" type="text"  name="purpose" value="" autocomplete="off"></textarea>
                                </div>
                            </div>

                            </div>
                            <!-- col-10 col-md-10 -->
                            <div class="col-12  col-md-12 justify-content-center text-center ">
                                <button class="btn btn-primary mx-3 mx-lg-2" type="button" name="btn_save" id="btn_save">
                                    <i class="fa fa-check-circle" style="font-size: 16px;color: #FFF;"></i>&nbsp;Save
                                </button>

                                <a href="<?=base_url() ?>" class="mx-3">
                                    <button class="btn btn-warning" type="button" name="goBack" id="goBack">
                                        <i class="fas fa-arrow-circle-up"></i>&nbsp;Go Back
                                    </button>
                                </a>
                                
                            </div>
                              
                        </div>

                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
</div>
                  

<script  src="<?php echo base_url('web_resources');?>/dist/js/jquery.min.js"></script>          
<script  src="<?php echo base_url('web_resources');?>/dist/js/controllers/NewRegistrationCreate.js"></script>

<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>



<script type="text/javascript">

$(document).ready(function(){
    $('#mobile').change(function(){
    //    alert('aaa')
      var mobile_no=$(this).val();

      if ( $.trim($('#mobile').val()) != '') {
        // alert(mobile_no);
       $.ajax({
                url:base_path+'NewRegistration/checkuserexist',
                method: 'post',
                data: {mobile_no: mobile_no},
                // dataType:'json',
                success: function(data){
                // console.log(data);
                              
              if(data==1)
            {
            //   $('#error_msgMob').html('<p class="text-danger">error</p>');
              swal({
                    title:"",
                    text:"Mobile No. Already Exists!",
                    type:"error",           
                }); 

                $('#mobile').val("");
            }
            // else{
            //     $('#error_msgMob').html('This Mobile no. is not exist');
            // }
    }
                    });
      }
    });
}) 
</script>

<!-- <script>
 $(document).ready(function(){

    $("#mobile").on("input",function(){
        var mobile = $('#mobile').val();  
        
            // alert(mobile);

            $.ajax({
                url:"<?php echo base_url();?>NewRegistration/checkEnteredMobile",
                method: "POST",
                data:{'mobile':mobile},
                dataType:'json',

                success: function(result) {
                
                    console.log("result",result);
                    // alert(result);
                    if (parseInt(result) == 1) {
                        document.getElementById("error_mob").innerHTML="already exist.";
                    } 
                    // else if (parseInt(result) == 2)  {
                    //     document.getElementById("error_mob").innerHTML="continue";
                    // }
                    else{
                        document.getElementById("error_mob").innerHTML="ok";
                    }
                }

            });

        });
    });

</script> -->

<script>        
          $(document).on('keypress','#mobile',function(e){
                if($(e.target).prop('value').length>=10){
                if(e.keyCode!=32)
                {return false} 
                }})
</script>

<script type="text/javascript">
$(document).on('keypress','#mobile2',function(e){
                if($(e.target).prop('value').length>=10){
                if(e.keyCode!=32)
                {return false} 
                }})





function selectEnquiry(select){

    if(select.value==1){
    
    document.getElementById('showInternship').style.display = "contents";
    
    document.getElementById('showJob').style.display = "none";
    document.getElementById('showOther').style.display = "none";
   }else{
    document.getElementById('showInternship').style.display = "none";
    
   }
   if(select.value==2){

    document.getElementById('showJob').style.display = "contents";
   
    document.getElementById('showInternship').style.display = "none";
    document.getElementById('showOther').style.display = "none";
   } else{
    document.getElementById('showJob').style.display = "none";

   }
   if(select.value==3){
    document.getElementById('showOther').style.display = "contents";
    document.getElementById('showInternship').style.display = "none";
    document.getElementById('showJob').style.display = "none";
   } else{
    document.getElementById('showOther').style.visibility = "none";

   }
//    $('#enquirySelect').select2({
//   selectOnClose: true
// });
}
  
</script>         
    <script src="<?=base_url();?>Assets/js/plugins/bootstrap.bundle.min.js"></script>
    <script src="<?=base_url();?>Assets/js/plugins/perfect-scrollbar.min.js"></script>
    <script src="<?=base_url();?>Assets/js/scripts/script.min.js"></script>
    <script src="<?=base_url();?>Assets/js/scripts/sidebar.large.script.min.js"></script>
    <script src="<?=base_url();?>Assets/js/plugins/echarts.min.js"></script>
    <script src="<?=base_url();?>Assets/js/scripts/echart.options.min.js"></script>
    <script src="<?=base_url();?>Assets/js/scripts/dashboard.v1.script.min.js"></script>

    <!-- ***** Added New Scripts*********** -->
      <!--This page JavaScript -->
     
      <script src="<?php echo base_url(); ?>web_resources/dist/js/sweetalert.min.js"></script>
      <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.min.css'></link>  
      <script>
        
$(document).ready(function(){

var id = $('#registrationId').val();

if(id>=0){
// to show current date 
document.getElementById('dob').valueAsDate = new Date();
document.getElementById('ex_starting_date').valueAsDate = new Date();
}



});
      </script>