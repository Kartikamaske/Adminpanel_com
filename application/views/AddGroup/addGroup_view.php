<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
<!-- Select2 CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />

<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>Assets/select2.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>Assets/multiselect.css">


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
                                <h2>&ensp;Add Group</h2>
                            </div>

                            <form role="form" id="Form" enctype="multipart/form-data" action="" method="post">

                            <input type="hidden" class="form-control" id="groupid" placeholder="" name="groupid" value="<?php if(!empty($dataa[0]->groupid)){echo $dataa[0]->groupid;}?>">

                            <div class="form-row p-3"> 
                                <div class=" col-md-4 mb-3 ">
                                    <label for="groupname">Enter Group Name <span class="text-danger">*</span> </label>
                                    <input type="text" class="form-control" id="groupname" placeholder="" name="groupname" value="<?php if(!empty($dataa[0]->groupname)){echo $dataa[0]->groupname;}?>">
                                </div>    
                                <div class=" col-md-4 mb-3">
                                    <label for="">Group Link</label>
                                    <textarea name="grouplink" id="grouplink" cols="20" rows="3" class="form-control"><?php if(!empty($dataa[0]->grouplink)){echo $dataa[0]->grouplink;}?></textarea>
                                </div>
                            </div>

                            
                            <div class="form-row px-3"> 
                                <div class=" col-md-4 mb-3">
                                    <label for="">Select Leader</label>
                                    <select class="select2 form-control form-control-sm" multiple id="allgroupleader" name="allgroupleader[]" style="width:100%;">
                                    <?php               
                                            foreach ($leader as $key => $leader) {
                                                $selected ="";
                                                foreach ($alladdedleader as $key => $value) {
                                                    if($leader->registrationId==$value->fkregisterid)
                                                    {
                                                        $selected ="selected=selected";
                                                    }
                                                }
                                                echo '<option value="'.$leader->registrationId.'"'.$selected.' >'.$leader->fname.'</option>';
                                            }
                                        ?>
                                    </select>
                                </div>

                            </div>


                            <!-- <div class="form-row px-3"> 

                                <div class=" col-md-4 mb-3">
                                    <label for="">Select User</label>
                                    <select class="select2 form-control form-control-sm" multiple id="allgroupuser" name="allgroupuser[]" style="width: 100%;"> 
                                    <?php               
                                            foreach ($user as $key => $user) {
                                                $selected ="";
                                                foreach ($alladdeduser as $key => $value) {
                                                    if($user->registrationId==$value->fkregisterid)
                                                    {
                                                        $selected ="selected=selected";
                                                    }
                                                }
                                                echo '<option value="'.$user->registrationId.'"'.$selected.' >'.$user->fname.'</option>';
                                            }
                                        ?>
                                    </select>
                                </div>
                            </div> -->



                                <div class="col-md-12 text-right p-5">
                                    <button class="btn btn-primary" type="button" name="btn_save" id="btn_save">Submit</button>
                                    <button class="btn btn-warning text-white" type="button" name="cancel" id="cancel"> <a href="<?=base_url() ?>AddGroup" class="text-white">Cancel</a> </button>

                                </div>

            </div>
        </div>
    </div>
</div>

       <script  src="<?php echo base_url('web_resources');?>/dist/js/jquery.min.js"></script>          
        <script  src="<?php echo base_url('web_resources');?>/dist/js/controllers/AddGroup_Create.js"></script>
     
        <script src="<?php echo base_url();?>Assets/jquery-3.3.1.min.js"></script>
          <script src="<?php echo base_url();?>Assets/select2.min.js"></script>
          <script src="<?php echo base_url();?>Assets/select2.init.js"></script>
                       
               
<script type="text/javascript">
// function readimage(input,valueid) {
//                                             // alert("hello");
//       if (input.files && input.files[0]) {
//         var reader = new FileReader();
//          reader.onload = function (e) {
//          $('#'+valueid+'').attr('src',e.target.result);
//         }
//         reader.readAsDataURL(input.files[0]);
//     }
//   }  


  $(document).ready(function(){
    
    var id = $('#collageId').val();

//     $('.userSelect').select2({
// selectOnClose: true;
// });
   
});

</script>  
            