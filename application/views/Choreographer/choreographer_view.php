
        <!-- =============== Left side End ================-->
        <div class="main-content-wrap sidenav-open d-flex flex-column">
            <!-- ============ Body content start ============= -->
            <div class="main-content" style="margin-top:-50px">
                <div class="breadcrumb">
                    <!-- <h1>Artist</h1> -->
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
                            <h3><img src="https://www.shutterstock.com/image-vector/happy-dlond-boy-wearing-sportswear-600w-2013536324.jpg" style="width: 25px">&ensp;Choreographer</h3>
                                <form role="form" id="Form" action="" method="post">
                                    <div class="form-row">
                                        <div class="col-md-3 form-group mb-3">
                                            <label for="firstName1">Name:</label>
                                            <input class="form-control" id="name" type="text" placeholder="" name="name" value="" />
                                        </div>

                                        
                                          
                                        <div class="col-md-2 form-group mb-3">
                                            <label for="job">BirthDate:</label>
                                          <input type="date" class="form-control" id="birthdate" placeholder="" name="birthdate" value="<?php echo date('Y-m-d'); ?>">
                                           
                                        </div>

                                        


                                        <div class="col-md-3 form-group mb-3">
                                            <label for="firstName1">Website:</label>
                                            <input class="form-control" id="website" type="text" placeholder="" name="website" value="" />
                                        </div>

                                        <div class="col-md-3 form-group mb-3">
                                            <label for="firstName1">Instagram ID:</label>
                                            <input class="form-control" id="insta_id" type="text" placeholder="" name="insta_id" value="" />
                                        </div>

                                        <div class="col-md-3 form-group mb-3">
                                            <label for="firstName1">Twitter ID:</label>
                                            <input class="form-control" id="twitter_id" type="text" placeholder="" name="twitter_id" value="" />
                                        </div>

                                        <div class="col-md-3 form-group mb-3">
                                            <label for="firstName1">Facebook ID:</label>
                                            <input class="form-control" id="fb_id" type="text" placeholder="" name="fb_id" value="" />
                                        </div>

                                        <div class="col-md-3 form-group mb-3">
                                            <label for="phone">Email:</label>
                                            <input class="form-control" id="email" type="email" placeholder="" name="email" value="" />
                                        </div>

                                        <div class="col-md-2 form-group mb-3">
                                        <label for="picker1">Gender:</label>
                                           <div class="d-flex">
                                           <label class="radio radio-primary">
                                         <input type="radio" name="gender" value="1"><span class="pr-1">Male</span><span class="checkmark"></span>
                                      </label>

                                      <label class="radio radio-primary">
                                    <input type="radio" name="gender" value="2"><span class="pr-1">Female</span><span class="checkmark"></span>
                                    </label>

                                   <label class="radio radio-primary">
                                    <input type="radio" name="gender" value="3"><span class="pr-1">Other</span><span class="checkmark"></span>
                                   </label>
                                    </div>

                                 </div>

                                        <div class="col-md-3 form-group mb-3">
                                            <label for="firstName1">Contact Person Name:</label>
                                            <input class="form-control" id="cperson_name" type="text" placeholder="" name="cperson_name" value="" />
                                        </div>

                                        <div class="col-md-2 form-group mb-3">
                                            <label for="firstName1">Contact Person No:</label>
                                            <input class="form-control" id="cperson_no" type="number" placeholder="" name="cperson_no" value="" />
                                        </div>
                            

                                        <div class="col-12 col-sm-2 col-lg-2 col-md-2">
                                           <div class="mb-3">
                                             <label for="file" style="cursor: pointer;">Photo:</label>
                                           <div class="mb-3">
                                             <img id="output" width="100" height="100px">
                                              <input type="file"  accept="image/*" class="form-control" name="photo" id="file"  onchange="loadFile(event)">
                                            </div></div>
                                        </div>

                                        


                                        <div class="col-md-12 text-right">
                                            <button class="btn btn-primary" type="button" name="btn_save" id="btn_save"><i class="nav-icon fa-regular fa-circle-check"></i>&nbsp;Submit</button>
                                            <a href="<?=base_url() ?>Lyrics"> <button class="btn btn-warning text-white" type="button" name="list" id="list"><i class="fa-sharp fa-solid fa-pen-to-square"></i>&nbsp;List</button></a>
                                            

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
<script  src="<?php echo base_url('web_resources');?>/dist/js/controllers/ChoreographerCreate.js"></script>
                   
                       
               
            