
        <!-- =============== Left side End ================-->
        <div class="main-content-wrap sidenav-open d-flex flex-column">
            <!-- ============ Body content start ============= -->
            <div class="main-content">
                <div class="breadcrumb">
                    <h1>Order</h1>
                    
                </div>
                <div class="separator-breadcrumb border-top"></div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card mb-4">
                            <div class="card-body">
                                <form role="form" id="Form" action="" method="post">
                                    <div class="row">
                                        <div class="col-md-4 form-group mb-3">
                                            <label for="itemname">Item Name</label>
                                            <input class="form-control" id="item_name" type="text" placeholder="Enter Item name" name="item_name" value="" />
                                        </div>

                                        <div class="col-md-4 form-group mb-3">
                                            <label for="quantity">Quantity</label>
                                            <input class="form-control" id="quantity" type="text" placeholder="Enter quantity" name="quantity" value="" />
                                        </div>

                                        <div class="col-md-4 form-group mb-3">
                                            <label for="rate">Rate</label>
                                            <input class="form-control" id="rate" type="text" placeholder="Enter price" name="rate" value="" />
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
<script  src="<?php echo base_url('web_resources');?>/dist/js/controllers/OrderCreate.js"></script>
                   
                       
               
            