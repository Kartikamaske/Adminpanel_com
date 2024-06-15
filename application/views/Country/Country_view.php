
        <!-- =============== Left side End ================-->
        <div class="main-content-wrap sidenav-open d-flex flex-column">
            <!-- ============ Body content start ============= -->
            <div class="main-content">
                <div class="breadcrumb">
                    <h1>Country</h1>
                   
                </div>
                <div class="separator-breadcrumb border-top"></div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card mb-4">
                            <div class="card-body">
                                <form role="form" id="Form" action="" method="post">
                                    <div class="row">
                                        <div class="col-md-4 form-group mb-3">
                                            <label for="countryname">Country name</label>
                                            <input class="form-control" id="cname" type="text" placeholder="Enter your country name" name="cname" value="" />
                                        </div>
                                        <div class="col-md-2 col-sm-2 col-lg-2 form-group mb-3">
                                            <label for="countrycode">Country Code</label>
                                            <input class="form-control" id="ccode" type="text" placeholder="Enter your country code" name="ccode" value="" />
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
<script  src="<?php echo base_url('web_resources');?>/dist/js/controllers/CountryCreate.js"></script>

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

                   
                       
               
            