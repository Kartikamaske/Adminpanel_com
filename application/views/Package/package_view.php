
        <!-- =============== Left side End ================-->
        <div class="main-content-wrap sidenav-open d-flex flex-column">
            <!-- ============ Body content start ============= -->
            <div class="main-content" style="margin-top:-50px">
                <div class="breadcrumb">
                    <!-- <h1>Composer</h1> -->
                    <!-- <ul>
                        <li><a href="href.html">Form</a></li>
                        <li>Basic</li>
                    </ul> -->
                </div>
                <div class="separator-breadcrumb border-top"></div>
                <div class="form-row">
                    <div class="col-md-12">
                        <div class="card mb-4">
                            <div class="card-body">
                            <h3><img src="https://img.icons8.com/color/512/package.png" style="width: 25px">&ensp;Package Creation</h3>

                                <form role="form" id="Form" action="" method="post">
                                    <div class="row">
                                        <div class="col-md-3 form-group mb-3">
                                            <label for="firstName1">Package Type Name:</label>
                                            <input class="form-control" id="package_name" type="text" placeholder="" name="package_name" value="" />
                                        </div>

                                        <div class="col-md-2 form-group mb-3">
                                            <label for="projectname">Amount:</label>
                                            <input class="form-control" id="amount" type="number" name="amount" value="" />
                                        </div>

                                        <div class="col-md-2 form-group mb-3">
                                            <label for="projectname">Discount:</label>
                                            <input class="form-control" id="discount" type="number" name="discount" value="" />
                                        </div>

                                  
                                        <div class="col-md-2 form-group mb-3">
                                            <label for="job">Start Date:</label>
                                           <input type="date" class="form-control" id="start_date" placeholder="" name="start_date" value="<?php echo date('Y-m-d'); ?>">
                                        </div>

                                        <div class="col-md-2 form-group mb-3">
                                            <label for="job">End Date:</label>
                                            <input type="date" class="form-control" id="end_date" placeholder="" name="end_date" value="<?php echo date('Y-m-d'); ?>">
                                        </div>

                                        <div class="col-md-3 form-group mb-3">
                                            <label for="picker1">Package Type:</label>
                                            <select class="form-control" name="cname" id="cname">
                                            <option selected="disabled">---select package type---</option>
                                                <option value="1">India</option>
                                                <option value="1">India</option>
                                                <option value="1">India</option>
                                                <option value="1">India</option>
                                              
                                            </select>
                                        </div>

                                        <div class="col-md-3 form-group mb-3">
                                            <label for="phone">Features:</label>
                                            <textarea class="form-control" id="features" type="text" placeholder="" name="features" value="" ></textarea>
                                        </div>



                                        
                                    
                                        <div class="col-md-12 text-right">
                                            <button class="btn btn-primary" type="button" name="btn_save" id="btn_save"><i class="nav-icon fa-regular fa-circle-check"></i>&nbsp;Submit</button>
                                            <a href="<?=base_url() ?>Package"> <button class="btn btn-warning text-white" type="button" name="list" id="list"><i class="fa-sharp fa-solid fa-pen-to-square"></i>&nbsp;List</button></a>
                                            

                                        </div>
                                        
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
</div>
                  
<script>
var loadFile = function(event) {
	var image = document.getElementById('output');
	image.src = URL.createObjectURL(event.target.files[0]);
};
</script>


<script  src="<?php echo base_url('web_resources');?>/dist/js/jquery.min.js"></script>          
<script  src="<?php echo base_url('web_resources');?>/dist/js/controllers/PackageCreate.js"></script>
                   
                       
               
            