<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
<!-- Select2 CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />

        <!-- =============== Left side End ================-->
<div class="main-content-wrap sidenav-open d-flex flex-column">
            <!-- ============ Body content start ============= -->
    <div class="main-content">
        <div class="breadcrumb"></div>
        <div class="separator-breadcrumb border-top"></div>
        <div class="form-row">
            <div class="col-md-12">
                <div class="card my-4">
                    <div class="card-body">
                    <div class="card-title mb-1 py-1"><h2>&ensp;Add Role </h2></div>
                         
                        <form role="form" id="Form" enctype="multipart/form-data" action="" method="post">

                            <input type="hidden" class="form-control" id="roleId" placeholder="" name="roleId" value="<?php if(!empty($dataa[0]->roleId)){echo $dataa[0]->roleId;}?>">

                                <div class="form-row p-3">
                                    <div class="col-12 col-sm-2 col-md-4">
                                        <div class="mb-3">
                                            <label for="rolename">Role Name <span class="text-danger">*</span> </label>
                                            <input type="text" class="form-control" id="rolename" placeholder="" name="rolename" value="<?php if(!empty($dataa[0]->rolename)){echo $dataa[0]->rolename;}?>">
                                        </div>
                                    </div>
                                    <div class="col-md-12 text-right">
                                        <button class="btn btn-primary" type="button" name="btn_save" id="btn_save">Submit</button>

                                        <button class="btn btn-warning text-white" type="button" name="Cancel" id="Cancel"> <a href="<?=base_url() ?>Role_Controller" class="text-white">Cancel</a> </button>

                                    </div>
                                    </form>
                            </div>
                        </div>
        </div>                                              
</div>

<script  src="<?php echo base_url('web_resources');?>/dist/js/jquery.min.js"></script>          
<script  src="<?php echo base_url('web_resources');?>/dist/js/controllers/RoleCreate.js"></script>
                                 
<script type="text/javascript">

  $(document).ready(function(){
 
    var id = $('#roleId').val();
   
});


</script>
                   
                       
               
            