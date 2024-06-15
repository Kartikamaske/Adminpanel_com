
        <!-- =============== Left side End ================-->
        <div class="main-content-wrap sidenav-open d-flex flex-column">
            <!-- ============ Body content start ============= -->
            <div class="main-content">
                <div class="breadcrumb">
                    <h1>Book a Ticket</h1>
                
                </div>
                <div class="separator-breadcrumb border-top"></div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card mb-4">
                            <div class="card-body">
                                <form role="form" id="Form" action="" method="post">
                                    <div class="row">

                              
                                      
                                        <div class="col-md-3 form-group mb-3">
                                            <label for="picker1">Source</label>
                                            <select class="form-control" name="source" id="source">
                                                <option value="1">Kolhapur</option>
                                                <option value="1">Mumbai</option>
                                                <option value="1">Pune</option>
                                                <option value="1">Delhi</option>
                                                
                                              
                                            </select>
                                        </div>

                                        <div class="col-md-3 form-group mb-3">
                                            <label for="picker1">Destination</label>
                                            <select class="form-control" name="destination" id="destination">
                                            <option value="1">Kolhapur</option>
                                                <option value="1">Mumbai</option>
                                                <option value="1">Pune</option>
                                                <option value="1">Delhi</option>
                                                
                                              
                                            </select>
                                        </div>


                                        <div class="col-md-3 form-group mb-3">
                                            <label for="arrivaldate">Arrival Date</label>
                                            <input class="form-control" id="arrial_date" type="date" placeholder="Select arrival date" name="arrial_date" value="" />
                                        </div>

                                        <div class="col-md-3 form-group mb-3">
                                            <label for="departuredate">Departure Date</label>
                                            <input class="form-control" id="departure_date" type="date" placeholder="Select departure date" name="departure_date" value="" />
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
<script  src="<?php echo base_url('web_resources');?>/dist/js/controllers/BookCreate.js"></script>

<!-- <script>
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
</script> -->




                   
                       
               
            