
        <!-- =============== Left side End ================-->
        <div class="main-content-wrap sidenav-open d-flex flex-column">
            <!-- ============ Body content start ============= -->
            <div class="main-content">
                <div class="breadcrumb">
                    <h1>Employee</h1>
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
                                        <div class="col-md-2 form-group mb-3">
                                            <label for="firstName1"> first Name</label>
                                            <input class="form-control" id="firstname" type="text" placeholder="Enter your first name" name="firstname" value="" />
                                        </div>

                                        <div class="col-md-2 form-group mb-3">
                                            <label for="firstName1"> Last Name</label>
                                            <input class="form-control" id="lastName" type="text" placeholder="Enter your first name" name="lastName" value="" />
                                        </div>

                                        <div class="col-md-3 form-group mb-3">
                                            <label for="job">Job Title</label>
                                            <input class="form-control" id="jobtitle" type="text" placeholder="Enter your job title" name="jobtitle" value="" />
                                        </div>
                                          
                                        <div class="col-md-2 form-group mb-3">
                                            <label for="job">Joining Date</label>
                                            <input class="form-control" id="workday" type="date"  name="workday" value="" />
                                        </div>
                                    
                                        <div class="col-md-2 form-group mb-3">
                                        <label for="picker1">Gender</label>
                                           <div class="d-flex">
                                           <label class="radio radio-primary">
                                         <input type="radio" name="radio" value="0"><span class="pr-1">Male</span><span class="checkmark"></span>
                                      </label>

                                      <label class="radio radio-primary">
                                    <input type="radio" name="radio" value="1"><span class="pr-1">Female</span><span class="checkmark"></span>
                                    </label>

                                   <label class="radio radio-primary">
                                    <input type="radio" name="radio" value="1"><span class="pr-1">Other</span><span class="checkmark"></span>
                                   </label>
                                    </div>

                                 </div>

                                 <div class="col-md-3 form-group mb-3">
                                            <label for="phone">Email</label>
                                            <input class="form-control" id="email" type="text" placeholder="Enter email" name="email" value="" />
                                        </div>

                                        <div class="col-md-2 form-group mb-3">
                                            <label for="picker1">Department</label>
                                            <select class="form-control" name="department" id="department">
                                                <option value="1">English</option>
                                                <option value="2">Marathi</option>
                                                <option value="3">Hindi</option>
                                            </select>
                                        </div>

                                        <div class="col-md-2 form-group mb-3">
                                            <label for="picker1">Branch</label>
                                            <select class="form-control" name="department" id="department">
                                                <option value="1">English</option>
                                                <option value="2">Marathi</option>
                                                <option value="3">Hindi</option>
                                            </select>
                                        </div>

                                        <div class="col-md-3 form-group mb-3">
                                            <label for="phone">Address.</label>
                                            <textarea class="form-control" id="address" type="text" placeholder="Enter address" name="address" value="" ></textarea>
                                        </div>

                                        <div class="col-md-2 form-group mb-3">
                                            <label for="picker1">State</label>
                                            <select class="form-control" name="subject">
                                                <option value="1">English</option>
                                                <option value="2">Marathi</option>
                                                <option value="3">Hindi</option>
                                            </select>
                                        </div>
                                     
                                        <div class="col-md-2 form-group mb-3">
                                            <label for="picker1">City</label>
                                            <select class="form-control" name="subject">
                                                <option value="1">English</option>
                                                <option value="2">Marathi</option>
                                                <option value="3">Hindi</option>
                                            </select>
                                        </div>
                                       
                                        <div class="col-md-2 form-group mb-3">
                                            <label for="phone">Pincode.</label>
                                            <input class="form-control" id="pincode" type="number" maxlength="6" placeholder="Enter pincode" name="pincode" value="" />
                                        </div>
                                        
                                        <div class="col-md-2 form-group mb-3">
                                            <label for="phone">Primary Mobile No.</label>
                                            <input class="form-control" id="phone" type="number" maxlength="10" placeholder="Enter mobile" name="phone" value="" />
                                        </div>

                                        <div class="col-md-2 form-group mb-3">
                                            <label for="phone">Secondary Mobile No.</label>
                                            <input class="form-control" id="sphone" type="number" maxlength="10" placeholder="Enter Mobile" name="sphone" value="" />
                                        </div>

                                        <div class="col-md-2 form-group mb-3">
                                            <label for="phone">Driver Licence</label>
                                            <input class="form-control" id="licence" type="text"  placeholder="Enter licence" name="licence" value="" />
                                        </div>

                                        <div class="col-md-2 form-group mb-3">
                                            <label for="phone">Photo</label>
                                            <input type="file" class="form-control" id="photo"    name="photo" value="" />
                                        </div>

                                        <div class="col-md-3 form-group mb-3">
                                            <label for="phone">Skill Description</label>
                                            <textarea class="form-control" id="skills" type="text" placeholder="Enter skills" name="address" value="" ></textarea>
                                        </div>


                                        <div class="col-md-12 text-right">
                                            <button class="btn btn-primary" type="button" name="btn_save" id="btn_save">Submit</button>
                                            <button class="btn btn-warning text-white" type="button" name="cancle" id="cancle">Cancle</button>

                                        </div>
                                        
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
</div>
                  

<script  src="<?php echo base_url('web_resources');?>/dist/js/jquery.min.js"></script>          
<script  src="<?php echo base_url('web_resources');?>/dist/js/controllers/StudentCreate.js"></script>
                   
                       
               
            