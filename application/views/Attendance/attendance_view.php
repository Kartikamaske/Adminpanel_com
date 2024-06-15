<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
<!-- Select2 CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />

<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>Assets/select2.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>Assets/multiselect.css">

<style>
.btn_style{
    width: 30%;
}
@media screen and (min-width:768px) and (max-width:1023px) {
    .btn_style{
    width: 50%;
}
}
@media screen and (max-width:767px) {
    .btn_style{
    width: 100%;
}
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
                        <div class="card-title mb-1 py-1">
                                <h2>&ensp;Attendance</h2>
                        </div>
                        <div class="card-body ">

                            <form role="form" id="Form" enctype="multipart/form-data" action="" method="post">

                            <input type="hidden" class="form-control" id="attendId" name="attendId" value="<?php if(!empty($dataa[0]->attendId)){echo $dataa[0]->attendId;}?>">
                            

                            <div hidden>
                           fkregistration id<input type="text" class="form-control" id="fkregisterid" name="fkregisterid" value="<?php if(!empty($dataa[0]->fkregisterid)){echo $dataa[0]->fkregisterid;}?>">
                           </div>

                           <div hidden>
                           registration id<input type="text" class="form-control" id="registrationId" name="registrationId" value="<?php if(!empty($user[0]->registrationId)){echo $user[0]->registrationId;}?>">
                           </div>

                                <div class="form-row px-5 my-3">

                                        <div class="col-md-2 py-3"  hidden>
                                            <label for="">Today</label>
                                            <input type="date" name="startdate" id="startdate">
                                        </div>
                                        <div class="col-md-3 py-3" hidden>
                                            <label for="" >Current Time</label>
                                            <input type="datetime" name="starttime" id="starttime">
                                        </div>
                                        <div class="col-md-12 py-3">
                                            <button class="btn btn-primary btn_style" type="button" name="btn_start" id="btn_start" >Start</button>
                                        </div>

                                </div>

                                <div class="form-row px-5 my-3">

                                    <div class="col-md-2 py-3" hidden>
                                            <label for="">Today</label>
                                            <input class=" " type="date" name="enddate" id="enddate">
                                        </div>
                                        <div class="col-md-3 py-3" hidden>
                                            <label for="">Current Time</label>
                                            <input type="datetime" name="endtime" id="endtime">
                                        </div>

                                    <div class="col-md-12 py-3">
                                        <button class="btn btn-warning text-white btn_style" type="button" name="btn_end" id="btn_end"> End</button>
                                        
                                        <input type="hidden" value="1" id="attendFlag" name="attendFlag" readonly> 
                                    </div>


                                </div>

            </div>
        <!-- </div> -->
    </div>
</div>

       <script  src="<?php echo base_url('web_resources');?>/dist/js/jquery.min.js"></script>          
        <script  src="<?php echo base_url('web_resources');?>/dist/js/controllers/Attendance.js"></script>

                       
            
<script>
    $(document).ready(function(){
document.getElementById('startdate').valueAsDate = new Date();
// ----------------------------------
// var starttime=new Date();
// document.getElementById('starttime').value = starttime.toLocaleTimeString();
// ------------------------------------------------------------------------------
var starttime=new Date();
            var st=starttime.toLocaleString('en-GB');
            s=st.slice(12);
            document.getElementById('starttime').value=s;
// ---------------------------------------------------------------------------

document.getElementById('enddate').valueAsDate = new Date();
// ----------------------------------
// var endTime=new Date();
// document.getElementById('endtime').value = endTime.toLocaleTimeString();

// -----------------------------------------------------------------
var endTime=new Date();
var et=endTime.toLocaleString('en-GB');
var endt=et.slice(12);
document.getElementById('endtime').value = endt;
// ------------------------------------------------------------------------------
;

var id=document.getElementById('attendId').value ;
if(id==0||id==null){
document.getElementById('btn_end').hidden = true;
}else if(id>0){
document.getElementById('btn_start').hidden = true;
}else{
document.getElementById('btn_end').hidden = true;
document.getElementById('btn_start').hidden = true;
}

});
</script>