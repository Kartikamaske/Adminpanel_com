
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">


  <style>
    .enquiry-opt {
    /* display:none; */
    /* display: flex; */
    display: content;

}

/* input[type="radio"].readonly {
    pointer-events: none;
}

label.readonly {
    pointer-events: none;
} */
  </style>
  
        <!-- =============== Left side End ================-->
<div class="main-content-wrap sidenav-open d-flex flex-column">
          <!-- ============ Body content start ============= -->
    <div class="main-content">
    <div class="breadcrumb"></div>
        <div class="separator-breadcrumb border-top"></div>
        <div class="form-row mt-4 mb-3">
            <div class="col-md-12">
                <div class="card mb-4">
                    <div class="card-body ">
                    <div class="card-title mb-1 py-1"><h2>&ensp;Edit/Update User</h2></div>
                        
                    <form role="form" id="Form" action="" enctype="multipart/form-data" method="post" class="p-5">
                            <input type="hidden" class="form-control mb-3" id="registrationId" placeholder="" name="registrationId" value="<?php if(!empty($dataa[0]->registrationId)){echo $dataa[0]->registrationId;}?>">
                                <div class="row">
                                    <div class="col-md-3">
                                        <label for="firstName1">Full Name<span style="color: red;">*</span></label>
                                        <input class="form-control" id="fname" type="text" placeholder="Enter your first name" name="fname" autocomplete="off" value="<?php if(!empty($dataa[0]->fname)){echo $dataa[0]->fname;}?>" readonly/>
                                            <p id="error_fname"></p>
                                    </div>
                                       
                                    <div class="col-md-3  ">
                                        <label for="email">Email address<span style="color: red;">*</span></label>
                                        <input class="form-control " placeholder="Enter your email address" id="email" name="email" type="email" autocomplete="off" value="<?php if(!empty($dataa[0]->email)){echo $dataa[0]->email;}?>" readonly>
                                            <p id="error_email"></p>
                                    </div>

                                    <div class="col-md-3  ">
                                        <label for="mobile">Mobile No.<span style="color: red;">*</span></label>
                                        <input class="form-control " type="tel" maxlength="10" placeholder="Enter mobile no." id="mobile" name="mobile_no" autocomplete="off" value="<?php if(!empty($dataa[0]->mobile_no)){echo $dataa[0]->mobile_no;}?>" readonly>
                                            <p id="error_mob"></p>
                                    </div>

                                    <div class="col-md-3  ">
                                        <label for="phone">Alternate Mobile No.</label>
                                        <input class="form-control"  type="tel" id="mobile2" maxlength="10" placeholder="Enter alternate mobile no." name="mobile_no2" autocomplete="off" value="<?php if(!empty($dataa[0]->mobile_no2)){echo $dataa[0]->mobile_no2;}?>" readonly/>
                                            <p id="error_mob2"></p>
                                    </div>
                                    <div class="col-md-3  ">
                                        <label for="phone">Address</label>
                                        <textarea class="form-control" id="address" type="text" placeholder="Enter address" name="address" value="" autocomplete="off" readonly><?php if(!empty($dataa[0]->address)){echo $dataa[0]->address;}?></textarea>
                                    </div>
                                       
                                    <div class="col-md-4 col-lg-3 mt-3 mt-md-0 mt-lg-2">
                                        <label for="picker1 ">Gender </label>
                                        <div class="d-flex mt-1" >
                                            <label class="radio radio-primary">
                                                <input type="radio" name="gender" id="gender" value="0" <?php if($dataa[0]->gender== "0") { echo 'checked'; }?> disabled='disabled'/><span class="pr-1">Male</span><span class="checkmark"></span>
                                            </label>

                                            <label class="radio radio-primary mt-3">
                                                <input type="radio" name="gender" id="gender" value="1" <?php if($dataa[0]->gender== "1") { echo 'checked'; }?> disabled='disabled'/><span class="pr-1">Female</span><span class="checkmark"></span>
                                            </label>
                                        </div>
                                    </div>
                                    
                            <div class="col-md-2 mt-1 mb-3">
                                <label for="">Date Of Birth</label>
                                <input type="date" name="dob" id="dob" class="form-control" value="<?php if(!empty($dataa[0]->dob)){echo $dataa[0]->dob;}?>" readonly>
                            </div>
                                
                            <div class="col-md-2  mt-1 mb-3">
                            <label for="picker1">Enquiry For</label>
                                <select class="form-control enquiry-drop" name="enquirytype" id="enquirySelect" disabled>
                                
                                            <option value="">--Enquiry For-- </option>
                                            <?php                                                    
                                                foreach ($enquiry as $key => $value) {
                                                    $selected="";
                                                    if(!empty($dataa[0]->fkEnquiryTypeId)){
                                                        if ($value->enquiryid == $dataa[0]->fkEnquiryTypeId) {
                                                            $selected="selected='selected'";
                                                        } 
                                                    } 
                                                    echo '<option value="'. $value->enquiryid.'"'.$selected.' >'.$value->enquirytype.'</option>';
                                                }
                                            ?>
                                </select>
                            </div>

                            <div class="col-md-12 col-lg-12 my-3 enquiry-opt" id="showInternship" >
                                <div  class="col-md-2 ">
                                    <label for="">Which Technology</label>
                                    <select class="form-control " name="technology" id="whichtech" disabled>
                                        <option value="0">--Select Technology-- </option>
                                        <?php
                                            foreach ($tech as $key => $value) {
                                                $selected="";
                                                if(!empty($dataa[0]->fkTechnologyId	)){
                                                    if ($value->technologyId == $dataa[0]->fkTechnologyId	) {
                                                        $selected="selected='selected'";
                                                    } 
                                                }
                                                echo '<option value="'. $value->technologyId.'"'.$selected.' >'.$value->technologyname.'</option>';
                                            }
                                        ?>
                                    </select>
                                </div>
                                    
                                    <div  class="col-md-2  ">
                                        <label for="">Duration</label> 
                                        
                                        <select class="form-control " name="duration" id="duration" disabled>
                                            <option value="0">--Select Duration-- </option>
                                            <?php
                                                foreach ($duration as $key => $value) {
                                                    $selected="";
                                                    if(!empty($dataa[0]->fkDurationId)){
                                                        if ($value->durationId == $dataa[0]->fkDurationId) {
                                                            $selected="selected='selected'";
                                                        } 
                                                    }
                                                    
                                                    echo '<option value="'. $value->durationId.'"'.$selected.' >'.$value->durationname.'</option>';
                                                }
                                            ?>
                                        </select>
                                        <p id="error_duration"></p>
                                    </div>
                                    <div  class="col-md-2  mb-3 ">
                                            <label for="">Expect Starting Date</label>
                                            <input type="date" name="ex_starting_date" id="" class="form-control " autocomplete="off" value="<?php if(!empty($dataa[0]->ex_starting_date)){echo $dataa[0]->ex_starting_date;}?>" readonly>
                                    </div>
                                    <div  class="col-md-2 mb-3  ">
                                        <label for="">College Name</label>
                                        <select class="form-control " name="college" disabled>
                                            <option value="0">--Select College-- </option>
                                            <?php
                                                    
                                                foreach ($college as $key => $value) {
                                                    $selected="";
                                                    if(!empty($dataa[0]->fkCollageId)){
                                                        if ($value->collageId == $dataa[0]->fkCollageId) {
                                                            $selected="selected='selected'";
                                                        } 
                                                    }
                                                     
                                                    echo '<option value="'. $value->collageId.'"'.$selected.' >'.$value->collagename.'</option>';
                                                }
                                            ?>
                                        </select>
                                    </div>
                                    <div  class="col-md-2 mb-3  ">
                                        <label for="">Last Qualification</label>
                                        <select class="form-control " name="qualification" disabled>
                                            <option value="0">--Select Qualification-- </option>
                                            <?php
                                                    
                                                foreach ($qualification as $key => $value) {
                                                    $selected="";
                                                    if(!empty($dataa[0]->fkQualificationId)){
                                                        if ($value->qualificationId == $dataa[0]->fkQualificationId) {
                                                            $selected="selected='selected'";
                                                        } 
                                                    }
                                                    
                                                    echo '<option value="'. $value->qualificationId.'"'.$selected.' >'.$value->qualificationname.'</option>';
                                                }
                                            ?>
                                        </select>
                                            
                                    </div>
                                    <div  class="col-md-2 mb-3  ">
                                        <label for="">Last Semister</label>
                                        <select class="form-control " name="sem" disabled>
                                            <option value="0">--Select Semister-- </option>
                                            <?php
                                                    
                                                foreach ($sem as $key => $value) {
                                                    $selected="";
                                                    if(!empty($dataa[0]->fkSemId)){
                                                        if ($value->semId == $dataa[0]->fkSemId) {
                                                            $selected="selected='selected'";
                                                        } 
                                                    }
                                                    
                                                    echo '<option value="'. $value->semId.'"'.$selected.' >'.$value->semname.'</option>';
                                                }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                           
                        
                            <div id="showJob" class="col-md-12 enquiry-opt ">

                                <div class="col-md-3 col-sm-12 col-12  mb-3 " >
                                    <label for="">Which Role</label>
                                    <select class="form-control " name="jobrole" disabled>
                                        <option value="0">--Select Job Role-- </option>
                                        <?php
                                            foreach ($jobRole as $key => $value) {
                                                $selected="";
                                                if(!empty($dataa[0]->fkRoleId)){
                                                    if ($value->roleId == $dataa[0]->fkRoleId) {
                                                        $selected="selected='selected'";
                                                    } 
                                                }
                                               
                                                echo '<option value="'. $value->roleId.'"'.$selected.' >'.$value->rolename.'</option>';
                                            }
                                        ?>
                                    </select>
                                </div> 

                                <div  class="col-md-3 col-sm-12 col-12  mb-3 job-area " > 
                                    <label for="picker1">Work Expericence</label>    
                                    <div class="d-flex mt-2">
                                        <label class="radio radio-primary">
                                            <input type="radio" disabled name="jobexpRadio" value="0" <?php if($dataa[0]->fkWorkExperienceId== "0") { echo 'checked'; }?>disabled><span class="pr-1">Experienced</span><span class="checkmark"></span>
                                        </label>

                                        <label class="radio radio-primary mt-3">
                                            <input type="radio" disabled name="jobexpRadio" value="1" <?php if($dataa[0]->fkWorkExperienceId== "1") { echo 'checked'; }?>disabled><span class="pr-1">Fresher</span><span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                                    <div  class="col-md-4 col-sm-12 col-12  mb-3 "> 
                                        <label for="">Any Internship Details</label>
                                        <textarea readonly name="expdetails" id="" cols="15" rows="2" class=" form-control mb-3" autocomplete="off"><?php if(!empty($dataa[0]->detail)){echo $dataa[0]->detail;}?></textarea>
                                    </div>
                            </div> 
                        
                                <div class="col-md-6 enquiry-opt" id="showOther">
                                    <!-- <div class=" mb-3"> -->
                                        <label for="">Purpose</label> 
                                        <textarea readonly class="form-control" id="" type="text"  name="purpose" value="" autocomplete="off"><?php if(!empty($dataa[0]->purpose)){echo $dataa[0]->purpose;}?></textarea>
                                    <!-- </div> -->
                                </div>

                            </div>


                            <hr style="width:100%;text-align:left;margin-left:0;color:black">

                            <form role="form" id="Form" action="" enctype="multipart/form-data" method="post">

                                <div class="row my-5">

                                    <div class="col-md-6 ">
                                        <label for="picker1 ">Status </label>   
                                            <div class="d-flex mt-lg-1">
                                                <label class="radio radio-primary">
                                                <input type="radio" name="status" id="status" value="1" <?php if($dataa[0]->status== "1") { echo 'checked'; }?> checked/>
                                                    <span class="pr-1">Active</span><span class="checkmark"></span>
                                                </label>

                                                <label class="radio radio-primary mt-3">
                                                    <input type="radio" name="status" id="status" value="2" <?php if($dataa[0]->status== "0") { echo 'checked'; }?>/>
                                                    <span class="pr-1">Deactive</span><span class="checkmark"></span>
                                                </label>
                                            </div>
                                    </div>
                                    
                                    <div class="col-md-6 text-right">
                                        <button class="btn btn-primary" type="button" name="" id="auto_gbtn" onclick="autoGenerate()">Auto Generate Username & Password</button>
                                    </div>

                                </div>
                                
                                <div class="row my-2">
                                    
                                    <div class="col-md-2">
                                        <label for="username">Username</label>
                                        <input type="text" class="form-control" id="username" name="username" autocomplete="off" value="<?php if(!empty($dataa[0]->username)){echo $dataa[0]->username;}?>" readonly/>    
                                    </div>

                                    <div class="col-md-2">
                                        <label for="password">Password</label>
                                        <input type="text" class="form-control" id="password" name="password" autocomplete="off" value="<?php if(!empty($dataa[0]->password)){echo $dataa[0]->password;}?>" readonly/>    
                                    </div>

                                    <div class="col-md-2">
                                        <label for="totalamt">Total Amount</label>
                                        <input type="text" class="form-control" id="totalamt" name="totalamt" autocomplete="off" value="<?php if(!empty($dataa[0]->totalamt)){echo $dataa[0]->totalamt;}?>"/>    
                                    </div>
                                    <div class="col-md-2   ">
                                        <label for="paidamt">Paid Amount</label>
                                        <input type="number" class="form-control" id="paidamt" name="paidamt" value="<?php if(!empty($dataa[0]->paidamt)){echo $dataa[0]->paidamt;}?>" readonly />    
                                    </div>
                                    <div class="col-md-2   ">
                                        <label for="remainamt">Remaining Amount</label>
                                        <input type="text" class="form-control" id="remainamt" onclick="" name="remainamt" autocomplete="off" value="<?php if(!empty($dataa[0]->remainamt)){echo $dataa[0]->remainamt;}?>" readonly/>    
                                    </div>
                                </div>
                                <div class="row my-3">
                                    <div class="col-md-2">
                                        <label for="">1st Instalment</label>
                                        <input type="text" class="form-control" autocomplete="off" id="exactInst1" name="exactInst1" value="<?php if(!empty($dataa[0]->exactInst1)){echo $dataa[0]->exactInst1;}?>">
                                    </div>
                                    <div class="col-md-2">
                                        <label for="">Fee</label>
                                        <input type="text" class="form-control" oninput="pamt() + RemainAmt()" id="firstfee" name="firstfee" class="firstfee" value="<?php if(!empty($dataa[0]->firstfee)){echo $dataa[0]->firstfee;}?>">
                                    </div>
                                    <div class="col-md-2">
                                        <label for="">Date</label>
                                        <input type="date" class="form-control" id="instDate1" name="instDate1" autocomplete="off" value="<?php if(!empty($dataa[0]->instDate1)){echo $dataa[0]->instDate1;}?>">
                                    </div>
                                    <div class="col-md-2">
                                        <label for="">Registration Fee</label>
                                        <input type="text" class="form-control" id="regfee" name="regfee" autocomplete="off" value="<?php if(!empty($dataa[0]->regfee)){echo $dataa[0]->regfee;}?>">
                                    </div>
                                    <div class="col-md-2">
                                        <label for="">Registration Date</label>
                                        <input type="date" class="form-control" id="regDate" name="regDate" autocomplete="off" value="<?php if(!empty($dataa[0]->regDate)){echo $dataa[0]->regDate;}?>">
                                    </div>

                                </div>

                                <div class="row my-3">
                                    <div class="col-md-2">
                                        <label for="">2nd Instalment</label>
                                        <input type="text" class="form-control" id="exactInst2" name="exactInst2" autocomplete="off" value="<?php if(!empty($dataa[0]->exactInst2)){echo $dataa[0]->exactInst2;}?>">
                                    </div>
                                    <div class="col-md-2">
                                        <label for="">Fee</label>
                                        <input type="text" class="form-control" oninput="pamt() + RemainAmt()" name="secondfee" id="secondfee" value="<?php if(!empty($dataa[0]->secondfee)){echo $dataa[0]->secondfee;}?>">
                                    </div>
                                    <div class="col-md-2">
                                        <label for="">Date</label>
                                        <input type="date" class="form-control" id="instDate2" name="instDate2" autocomplete="off" value="<?php if(!empty($dataa[0]->instDate2)){echo $dataa[0]->instDate2;}?>">
                                    </div>
                                </div>

                                <div class="row my-3">
                                    <div class="col-md-2">
                                        <label for="">3rd Instalment</label>
                                        <input type="text" class="form-control" id="exactInst3" name="exactInst3" autocomplete="off" value="<?php if(!empty($dataa[0]->exactInst3)){echo $dataa[0]->exactInst3;}?>">
                                    </div>
                                    <div class="col-md-2">
                                        <label for="">Fee</label>
                                        <input type="text" class="form-control" oninput="pamt() + RemainAmt()" name="thirdfee" id="thirdfee" autocomplete="off" value="<?php if(!empty($dataa[0]->thirdfee)){echo $dataa[0]->thirdfee;}?>">
                                    </div>
                                    <div class="col-md-2">
                                        <label for="">Date</label>
                                        <input type="date" class="form-control" id="instDate3" name="instDate3" autocomplete="off" value="<?php if(!empty($dataa[0]->instDate3)){echo $dataa[0]->instDate3;}?>">
                                    </div>
                                </div>

                                <div class="row my-3">
                                    <div class="col-md-2">
                                        <label for="">4th Instalment</label>
                                        <input type="text" class="form-control" id="exactInst4" name="exactInst4" autocomplete="off" value="<?php if(!empty($dataa[0]->exactInst4)){echo $dataa[0]->exactInst4;}?>">
                                    </div>
                                    <div class="col-md-2">
                                        <label for="">Fee</label>
                                        <input type="text" class="form-control" oninput="pamt() + RemainAmt()" name="fourthfee" id="fourthfee" autocomplete="off" value="<?php if(!empty($dataa[0]->fourthfee)){echo $dataa[0]->fourthfee;}?>">
                                    </div>
                                    <div class="col-md-2">
                                        <label for="">Date</label>
                                        <input type="date" class="form-control" id="instDate4" name="instDate4" autocomplete="off" value="<?php if(!empty($dataa[0]->instDate4)){echo $dataa[0]->instDate4;}?>">
                                    </div>
                                </div>
                                <div class="row my-3">
                                        <div class=" col-md-6">
                                            <label for="groupname">Group Name </label>
                                            <select class="form-control select2" multiple id="fkgroupid" name="fkgroupid[]" style="width: 100%;">
                                           
                                                <?php
                                                    foreach ($group as $key => $group) {
                                                        $selected ="";
                                                        foreach ($groupmain as $key => $value) {
                                                            if($group->groupid==$value->fkgroupid)
                                                            {
                                                                $selected ="selected=selected";
                                                            }
                                                        }
                                                        echo '<option value="'.$group->groupid.'"'.$selected.' >'.$group->groupname.'</option>';
                                                    }
                                                ?>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-12 text-right my-3">
                                        <button class="btn btn-primary" type="button" name="btn_save" id="btn_save">Submit</button>
                                        <button class="btn btn-warning text-white" type="button" name="cancel" id="cancel">Cancel</button>

                                    </div>
                            </form>

                           
                        </form>
                    </div>
                </div>
            </div> 
                 
            <!-- </div>
    </div>                
</div> -->
    <script  src="<?php echo base_url('web_resources');?>/dist/js/jquery.min.js"></script>          
 
    <script  src="<?php echo base_url('web_resources');?>/dist/js/controllers/UpdateUser_Create.js"></script>
                     
          <script src="<?php echo base_url();?>Assets/jquery-3.3.1.min.js"></script>
          <script src="<?php echo base_url();?>Assets/select2.min.js"></script>
          <script src="<?php echo base_url();?>Assets/select2.init.js"></script>

<script type="text/javascript">

    
$(document).ready(function(){

    var id = $('#registrationId').val();

    
  if(id>=0){
    // to show current date 
    document.getElementById('regDate').valueAsDate = new Date();
    document.getElementById('instDate1').valueAsDate = new Date();
    document.getElementById('instDate2').valueAsDate = new Date();
    document.getElementById('instDate3').valueAsDate = new Date();
    document.getElementById('instDate4').valueAsDate = new Date();

  }



});

// $('#enquirySelect').select2({
// selectOnClose: true;
// });


// function selectEnquiry(select){

// if(select.value==1){

// document.getElementById('showInternship').style.display = "contents";

// document.getElementById('showJob').style.display = "none";
// document.getElementById('showOther').style.display = "none";
// }else{
// document.getElementById('showInternship').style.display = "none";

// }
// if(select.value==2){

// document.getElementById('showJob').style.display = "contents";

// document.getElementById('showInternship').style.display = "none";
// document.getElementById('showOther').style.display = "none";
// } else{
// document.getElementById('showJob').style.display = "none";

// }
// if(select.value==3){
// document.getElementById('showOther').style.display = "contents";
// document.getElementById('showInternship').style.display = "none";
// document.getElementById('showJob').style.display = "none";
// } else{
// document.getElementById('showOther').style.visibility = "none";

// }


// }


function autoGenerate(){
    // alert("clicked auto generate");
    let fname=document.getElementById('fname').value;
    let mob=document.getElementById('mobile').value;
    let upass;
   
    for (let x = 0; x < 5; x++) {
        upass= fname.charAt(0) + fname.charAt(1) + fname.charAt(2) + mob.charAt(0) + mob.charAt(1) + mob.charAt(8) + mob.charAt(9);
    }
    document.getElementById('username').value=upass;
    document.getElementById('password').value=upass;

}


function pamt(){

var first_fee=  document.getElementById('firstfee').value ;
var sec_fee= document.getElementById('secondfee').value ;
var third_fee= document.getElementById('thirdfee').value ;
var fourth_fee= document.getElementById('fourthfee').value ;
var tPaid = 0 ;


if(first_fee >0){
  tPaid= parseInt(first_fee);
  document.getElementById('paidamt').value=tPaid;
}

if (sec_fee>0){
    tPaid += parseInt(sec_fee);
    document.getElementById('paidamt').value=tPaid;
}

if(third_fee >0){
      tPaid += parseInt(third_fee);
    document.getElementById('paidamt').value=tPaid;
}

if(fourth_fee >0){
        tPaid += parseInt(fourth_fee);
        document.getElementById('paidamt').value=tPaid;
}

}

function RemainAmt(){
    var total_amt=document.getElementById('totalamt').value ;
    var paid_amt=document.getElementById('paidamt').value ;
    var remain_amt= parseInt(total_amt) - parseInt(paid_amt) ;
    document.getElementById('remainamt').value=remain_amt;
}



$(document).ready(function(){

  var id = $('#projectId').val();

});

</script>


<script  src="<?php echo base_url('web_resources');?>/dist/js/jquery.min.js"></script>          

<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

<script type="text/javascript">

  
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