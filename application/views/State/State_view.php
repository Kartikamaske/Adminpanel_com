
        <!-- =============== Left side End ================-->
        <div class="main-content-wrap sidenav-open d-flex flex-column">
            <!-- ============ Body content start ============= -->
            <div class="main-content">
                <div class="breadcrumb">
                    <h1>State</h1>
                
                </div>
                <div class="separator-breadcrumb border-top"></div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card mb-4">
                            <div class="card-body">
                                <form role="form" id="Form" action="" method="post">
                                    <div class="row">

                              
                                      
                                        <div class="col-md-3 form-group mb-3">
                                            <label for="picker1">Country</label>
                                            <select class="form-control" name="cname" id="cname">
                                                <option value="1">India</option>
                                              
                                            </select>
                                        </div>


                                        <div class="col-md-3 form-group mb-3">
                                            <label for="firstName1">state name</label>
                                            <input class="form-control" id="sname" type="text" placeholder="Enter state name" name="sname" value="" />
                                        </div>
                                       
                                      
                                     
                                        
                                        
                                        
                                     
                                        <div class="col-md-12">
                                            <button class="btn btn-primary" type="button" name="btn_save" id="btn_save">Submit</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
</div>
                  

<script  src="<?php echo base_url('web_resources');?>/dist/js/jquery.min.js"></script>          
<script  src="<?php echo base_url('web_resources');?>/dist/js/controllers/StateCreate.js"></script>

<script>
    $('#Form').bind('keydown', function(event) {
    if (event.ctrlKey || event.metaKey) {
    switch (String.fromCharCode(event.which).toLowerCase()) {
    case 's':
    event.preventDefault();
    // alert('ctrl-s');
    saveperform();
    break;

    }
    $(function(){
    $("#sname").focus();
    });

    }
    });
</script>




                   
                       
               
            