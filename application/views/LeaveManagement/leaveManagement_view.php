<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
<!-- Select2 CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />

<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>Assets/select2.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>Assets/multiselect.css">

<link rel="stylesheet" href="https://fonts.googleapis.com/css?family='Poppins'">
<style>
    body{
        font-family: 'Poppins', sans-serif;
    }
</style>


        <!-- =============== Left side End ================-->
<div class="main-content-wrap sidenav-open d-flex flex-column">
            <!-- ============ Body content start ============= -->
    <div class="main-content mt-4">
        <div class="breadcrumb"></div>
        <div class="separator-breadcrumb border-top"></div>
            <div class="form-row ">
                <div class="col-md-12">
                    <div class="card my-4">
                        <div class="card-body ">


                            <div class="card-title mb-1 py-1">
                                <h2>&ensp;Leave Application</h2>
                            </div>

                            <form role="form" id="Form" enctype="multipart/form-data" action="" method="post">

                            <input type="hidden" class="form-control" id="leaveid" placeholder="" name="leaveid" value="<?php if(!empty($dataa[0]->leaveid)){echo $dataa[0]->leaveid;}?>"></br>

                            <input type="hidden" class="form-control" id="registrationId" placeholder="" name="registrationId" value="<?php if(!empty($user[0]->registrationId)){echo $user[0]->registrationId;}?>">

                            <div class="form-row p-5"> 
                                <div class=" col-md-3 mb-3 ">
                                    <label for="">Leave Start Date</label>
                                    <input type="date" name="leave_start_date" id="leave_start_date" value="<?php if(!empty($dataa[0]->leave_start_date)){echo $dataa[0]->leave_start_date;}?>">

                                </div>   
                                <!-- <label for="" class="col-md-1">To</label>  -->
                                <div class="col-md-3 mb-3">
                                    <label for="">Leave End Date</label>
                                    <input type="date" name="leave_end_date" id="leave_end_date" value="<?php if(!empty($dataa[0]->leave_end_date)){echo $dataa[0]->leave_end_date;}?>">

                                </div>
                            </div>

                            
                            <div class="form-row px-5"> 
                                <label for="">Leave Reason</label>
                               <textarea name="leave_reason" id="leave_reason" cols="70" rows="8" class="form-control"><?php if(!empty($dataa[0]->leave_reason)){echo $dataa[0]->leave_reason;}?></textarea>
                            </div><br>


                            <div class="col-12">

                                <button class="btn btn-success" style="margin-left:11px;"> 
                                    <input type="checkbox" id="verifyflag" name="verifyflag" value="1">&ensp;&ensp;&ensp;verify</button>

                            </div>



                                <div class="col-md-12 text-right p-5">
                                    <button class="btn btn-primary" type="button" name="btn_save" id="btn_save">
                                    <a href="<?=base_url() ?>LeaveManagement" class="text-white">Submit</a> </button>

                                    <button class="btn btn-warning text-white" type="button" name="cancel" id="cancel"> <a href="<?=base_url() ?>LeaveManagement" class="text-white">Cancel</a> </button>

                                </div>

            </div>
        </div>
    </div>
</div>

       <script  src="<?php echo base_url('web_resources');?>/dist/js/jquery.min.js"></script>          
        <script  src="<?php echo base_url('web_resources');?>/dist/js/controllers/LeaveManagementCreate.js"></script>
     
        <script src="<?php echo base_url();?>Assets/jquery-3.3.1.min.js"></script>
          <script src="<?php echo base_url();?>Assets/select2.min.js"></script>
          <script src="<?php echo base_url();?>Assets/select2.init.js"></script>
                       
   <script>
        $(document).ready(function(){

document.getElementById('leave_start_date').valueAsDate = new Date();
document.getElementById('leave_end_date').valueAsDate = new Date();


        });
   </script>
            