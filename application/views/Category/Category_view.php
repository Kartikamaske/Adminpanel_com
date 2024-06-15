
        <!-- =============== Left side End ================-->
        <div class="main-content-wrap sidenav-open d-flex flex-column">
            <!-- ============ Body content start ============= -->
            <div class="main-content">
                <div class="breadcrumb">
                    <h1><img src="https://cdn-icons-png.flaticon.com/512/718/718970.png" style="width:25px">&ensp;Category</h1>
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
                                            <label for="firstName1">Category Name:</label>
                                            <input class="form-control" id="category_name" type="text" placeholder="" name="category_name" value="" />
                                        </div>
                                        <div class="col-md-2 form-group mb-3">
                                            <label for="song_type">Song Type:</label>
</br>
                                            <select class="form-control" id="song_type" name="song_type">
                                                <option selected="disabled"></option>
                                                <option>Demo</option>
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

                                        <div class="col-md-2 form-group mb-3">
                                            <label for="date">Start Date:</label>
                                            <input class="form-control" type="date" id="start_date" name="start_date" value="" />
                                        </div>
                                        <div class="col-md-2 form-group mb-3">
                                            <label for="date">Start Time:</label>
                                            <input class="form-control" type="time" id="start_time" name="start_time" value="" />
                                        </div>

                                        <div class="col-md-2 form-group mb-3">
                                            <label for="date">End Date:</label>
                                            <input class="form-control" type="date" id="end_date" name="end_date" value="" />
                                        </div>
                                        <div class="col-md-2 form-group mb-3">
                                            <label for="date">End time:</label>
                                            <input class="form-control" type="time" id="end_time" name="end_time" value="" />
                                        </div>

                                        <div class="col-md-3 form-group mb-3">
                                            <label for="photo">Upload photo:</label>
</br>
                                            <input type="file" class="form-control">
                                           
                                        </div>

                                        <!-- <div class="col-md-2 form-group mb-3"> 
                                            <label for="phone">Logo</label>
                                            <input type="file" class="form-control" id="logo"    name="logo" value="" />
                                        </div>-->


                                        <div class="col-md-12 text-right">
                                        <button class="btn btn-primary" type="button" name="btn_save" id="btn_save"><i class="nav-icon fa-regular fa-circle-check"></i>&nbsp;Submit</button>
                                            <a href="<?=base_url() ?>Category"> <button class="btn btn-warning text-white" type="button" name="list" id="list"><i class="fa-sharp fa-solid fa-pen-to-square"></i>&nbsp;List</button></a>

                                        </div>
                                        
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
</div>
                  

<script  src="<?php echo base_url('web_resources');?>/dist/js/jquery.min.js"></script>          
<script  src="<?php echo base_url('web_resources');?>/dist/js/controllers/CategoryCreate.js"></script>
                   
                       
               
            