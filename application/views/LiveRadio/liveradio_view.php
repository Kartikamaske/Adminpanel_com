
        <!-- =============== Left side End ================-->
        <div class="main-content-wrap sidenav-open d-flex flex-column">
            <!-- ============ Body content start ============= -->
            <div class="main-content">
                <div class="breadcrumb">
                    <h1><img src="https://cdn-icons-png.flaticon.com/512/1186/1186562.png" style="width:25px" >&ensp;Live Radio</h1>
                    <!-- <ul>
                        <li><a href="href.html">Form</a></li>
                        <li>Basic</li>
                    </ul> -->
                </div>
                <div class="separator-breadcrumb border-top"></div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card mb-4">
                            <div class="card-body">
                                <form role="form" id="Form" action="" method="post">
                                    <div class="row">
                                        <div class="col-md-4 form-group mb-3">
                                            <label for="firstName1">Radio Stations online:</label>
                                            <!-- <input class="form-control" id="songtname" type="text" placeholder="" name="" value="" /> -->
                                            <select class="form-control" id="radio_stations" name="radio_stations">
                                                <option selected="disabled">---select radio stations---</option>
                                                <option>Marathi</option>
                                                <option>Demo</option>
                                                <option>Demo</option>
                                                <option>Demo</option>
                                                <option>Demo</option>
                                            </select>
                                        </div>

                                        <div class="col-md-4 form-group mb-3">
                                            <label for="firstName1">Language:</label>
                                            <!-- <input class="form-control" id="songtname" type="text" placeholder="" name="" value="" /> -->
                                            <select class="form-control" id="language" name="language">
                                                <option selected="disabled">---select Language ----</option>
                                                <option>Marathi</option>
                                                <option>Demo</option>
                                                <option>Demo</option>
                                                <option>Demo</option>
                                                <option>Demo</option>
                                            </select>
                                        </div>
                          

                                       <!-- <div class="col-md-2 form-group mb-3">
                                            <label for="phone">Mobile No.</label>
                                            <input class="form-control" id="phone" type="number" maxlength="10" placeholder="Enter phone" name="phone" value="" />
                                        </div>-->

                                        <!-- <div class="col-md-2 form-group mb-3">
                                            <label for="date">Start Date</label>
                                            <input class="form-control" type="date" id="startdt" name="startdt" value="" />
                                        </div> -->
                                        <div class="col-md-2 form-group mb-3">
                                            <label for="date">Start Time:</label>
                                            <input class="form-control" type="time" id="start_time" name="start_time" value="" />
                                        </div>

                                        <!-- <div class="col-md-2 form-group mb-3">
                                            <label for="date">End Date</label>
                                            <input class="form-control" type="date" id="edndt" name="edndt" value="" />
                                        </div> -->
                                        <div class="col-md-2 form-group mb-3">
                                            <label for="date">End time:</label>
                                            <input class="form-control" type="time" id="end_time" name="end_time" value="" />
                                        </div>

                            

                                        <!-- <div class="col-md-2 form-group mb-3"> 
                                            <label for="phone">Logo</label>
                                            <input type="file" class="form-control" id="logo"    name="logo" value="" />
                                        </div>-->


                                        <div class="col-md-12 text-right">
                                        <button class="btn btn-primary" type="button" name="btn_save" id="btn_save"><i class="nav-icon fa-regular fa-circle-check"></i>&nbsp;Submit</button>
                                            <a href="<?=base_url() ?>LiveRadio"> <button class="btn btn-warning text-white" type="button" name="list" id="list"><i class="fa-sharp fa-solid fa-pen-to-square"></i>&nbsp;List</button></a>

                                        </div>
                                        
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
</div>
                  

<script  src="<?php echo base_url('web_resources');?>/dist/js/jquery.min.js"></script>          
<script  src="<?php echo base_url('web_resources');?>/dist/js/controllers/LiveradioCreate.js"></script>
                   
                       
               
            