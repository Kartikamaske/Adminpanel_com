
        <!-- =============== Left side End ================-->
        <div class="main-content-wrap sidenav-open d-flex flex-column">
            <!-- ============ Body content start ============= -->
            <div class="main-content " style="margin-top:-50px">
                <div class="breadcrumb">
                    <!-- <h1>User Creation</h1> -->
                   
                </div>
                <div class="separator-breadcrumb border-top"></div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card mb-4">
                            <div class="card-body">
                                <!-- <div class="card1 bg-danger fa-2x">User Creation</div> -->
                            <!-- <img height="50px" width="280px" src="<?php echo base_url() ?>Assets\images\banner.png "> -->
                            <h3>Verification User</h3>
                                <form role="form" id="Form" action="" method="post">
                                <div class="form-row">
                                    <div class="col-12 col-sm-2 col-md-3 col-lg-3 col-xl-3 col-xll-3">
                                        <div class="mb-3">
                                            <label for="username">User Name:</label>
                                            <input type="text" class="form-control" id="username" placeholder="" name="username">
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-2 col-lg-2 col-md-2">
                                        <div class="mb-3">
                                        <label for="usertype">User Type:</label>
                                            <select class="form-control">
                                              <option>HR</option>
                                              <option>Manager</option>
                                              <option>Assistant</option>
                                              <option>HOD</option>
                                            </select>
                                        </div>
                                     </div>

                                     <div class="col-12 col-sm-2 col-lg-2 col-md-2">
                                        <div class="mb-3">
                                          <label for="regdate">Registration Date:</label>
                                          <input type="date" class="form-control" id="regdate" placeholder="" name="regdate" value="<?php echo date('Y-m-d'); ?>">
                                        </div>
                                    </div>

                                    <!-- <div class="col-12 col-sm-2 col-lg-2 col-md-2">
                                        <div class="mb-3">
                                          <label for="birth">BirthDate:</label>
                                          <input type="date" class="form-control" id="birth" placeholder="Enter BirthDate..." name="birth" value="<?php echo date('Y-m-d'); ?>">
                                        </div>
                                    </div> -->
                                    
                                    

                                    <div class="col-12 col-sm-2 col-lg-2 col-md-2">
                                        <div class="mb-3">
                                          <label for="mobno">Mobile No:</label>
                                          <input type="number" class="form-control" id="mobno" placeholder="" name="mobno">
                                        </div>
                                    </div>

                                    <div class="col-md-2 form-group mb-3">
                                        <label for="picker1">Gender:</label>
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
                                    <div class="col-12 col-sm-2 col=lg-2 col-md-2">
                                        <div class="mb-3">
                                           <label for="pwd">Password:</label>
                                           <input type="password" class="form-control" id="pswd" placeholder="" name="pswd" maxlength="8" minlength="5">
                                        </div>
                                    </div>

                                    <div class="col-12 col-sm-2 col-lg-2 col-md-2">
                                        <div class="mb-3">
                                        <label for="purchase">Package Type:</label>
                                            <select class="form-control">
                                            <option>HR</option>
                                              <option>Manager</option>
                                              <option>Assistant</option>
                                              <option>HOD</option>
                                            </select>
                                        </div>
                                     </div>
                                     <div class="col-12 col-sm-2 col-lg-2 col-md-3">
                                        <div class="mb-3">
                                          <label for="expdate">Expired Date:</label>
                                          <input type="date" class="form-control" id="expdate" placeholder="" name="expdate" value="<?php echo date('Y-m-d'); ?>">
                                        </div>
                                    </div>
                                    <!-- <div class="col-12 col-sm-2 col-lg-2 col-md-2">
                                        <div class="mb-3">
                                           <label for="file" style="cursor: pointer;">Photo:</label>
                                           <img id="output" width="100">
                                           <input type="file"  accept="image/*" class="form-control" name="image" id="file"  onchange="loadFile(event)">
                                        </div>
                                    </div>

                                    <div class="col-12 col-sm-4 col-lg-4 col-md-4">
                                       <div class="mb-3">
                                           <label for="address">Address:</label>
                                           <textarea name="address" id="address" class="form-control"></textarea>
                                       </div>
                                    </div> -->

                                    <div class="col-md-2 form-group mb-3">
                                            <label for="picker1">Country</label>
                                            <select class="form-control" name="fkcountry">
                                                <option value="1">India</option>
                                                <option value="1">America</option>
                                                <option value="1">Africa</option>
                                               <option value="1">newzaland</option>
                                            </select>
                                        </div>

                                        <div class="col-md-2 form-group mb-3">
                                            <label for="picker1">State</label>
                                            <select class="form-control" name="fkstate">
                                                <option value="1">Maharashtra</option>
                                                <option value="1">Gujarat</option>
                                                <option value="1">Kerala</option>
                                                <option value="1">Chattisgarh</option>
                                              
                                            </select>
                                        </div>

                                        <div class="col-md-2 form-group mb-3">
                                            <label for="picker1">District</label>
                                            <select class="form-control" name="fkdist">
                                                <option value="1">Sangli</option>
                                                <option value="1">Satara</option>
                                                <option value="1">Kolhapur</option>
                                                <option value="1">Pune</option>
                                              
                                            </select>
                                        </div>

                                        <div class="col-md-2 form-group mb-3">
                                            <label for="picker1">Village</label>
                                            <select class="form-control" name="fkvil">
                                                <option value="1">Walwa</option>
                                                <option value="1">Shirala</option>
                                                <option value="1">Karavir</option>
                                                <option value="1">Karad</option>
                                              
                                            </select>
                                        </div>

                                        <div class="col-md-2 col-sm-2 col-lg-2 form-group mb-3">
                                            <label for="countrycode">Pincode</label>
                                            <input class="form-control" id="ccode" type="number" placeholder="" name="ccode" value="" />
                                        </div>

                                        <div class="col-md-2 form-group mb-3">
                                            <label for="picker1">Reference</label>
                                            <select class="form-control" name="fkvil">
                                                <option value="1">Walwa</option>
                                                <option value="1">Shirala</option>
                                                <option value="1">Karavir</option>
                                                <option value="1">Karad</option>
                                              
                                            </select>
                                        </div>

                                        <div class="col-12 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-xll-2">
                                            <div class="mb-3">
                                               <label for="purchaseamt">Package Amount:</label>
                                               <input type="number" class="form-control" id="purchaseamt" placeholder="" name="purchaseamt">
                                            </div>
                                        </div>

                                        <div class="col-12 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-xll-2">
                                            <div class="mb-3">
                                               <label for="discount">Discount Type:</label>
                                               <input type="number" class="form-control" id="discount" placeholder="" name="discount">
                                            </div>
                                        </div>

                                        <div class="col-12 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-xll-2">
                                            <div class="mb-3">
                                               <label for="discount">Discount Amount:</label>
                                               <input type="number" class="form-control" id="discount" placeholder="" name="discount">
                                            </div>
                                        </div>

                                        <div class="col-12 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-xll-2">
                                            <div class="mb-3">
                                               <label for="totalamt">Total Amount:</label>
                                               <input type="number" class="form-control" id="totalamt" placeholder="" name="totalamt">
                                            </div>
                                        </div>
                                        
                                       
                                        

                                    <div class="col-12 col-sm-4 col-lg-4 col-md-4">
                                       <div class="mb-3">
                                           <label for="address">Address:</label>
                                           <textarea name="address" id="address" class="form-control"></textarea>
                                       </div>
                                    </div>
                                    <div class="col-12 col-sm-2 col-lg-2 col-md-2">
                                        <div class="mb-3">
                                           <label for="file" style="cursor: pointer;">Photo:</label>
                                           <img id="output" width="100px" height="100px">
                                           <input type="file"  accept="image/*" class="form-control" name="image" id="file"  onchange="loadFile(event)">
                                        </div>
                                    </div>&emsp;
                                    <div class="col-12 col-sm-1 col-md-2 col-lg-1 col-xl-1 col-xll-1">
                                            <div class="mb-3 p-1 ">
                                                <input class="form-check-input" type="checkbox" id="check1" name="option1" value="something">
                                                <label class="form-check-label">Advertisement Flag</label> 
                                            </div>
                                    </div>

         </div>
   
  
   
<script>
var loadFile = function(event) {
	var image = document.getElementById('output');
	image.src = URL.createObjectURL(event.target.files[0]);
};
</script>

                                        <div class="col-md-12 text-right">

                                           <input type="radio" name="radio" value="1"><span class="p-1">Active</span><span class="checkmark"></span>
                                           <input type="radio" name="radio" value="1"><span class="p-1">Deactive</span><span class="checkmark"></span>

                                            <!-- <button class="btn btn-primary" type="button" name="btn_save" id="btn_save">Submit</button> -->
                                            <!-- <button class="btn btn-warning text-white" type="button" name="cancle" id="cancle">Cancel</button> -->

                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
</div>
                  

<script  src="<?php echo base_url('web_resources');?>/dist/js/jquery.min.js"></script>          
<script  src="<?php echo base_url('web_resources');?>/dist/js/controllers/BranchCreate.js"></script>

<script type="text/javascript">
    function AadharValidate() {
        // alert('kk');
        var aadhar = document.getElementById("aadhar").value;
        var adharcardTwelveDigit = /^\d{12}$/;
        var adharSixteenDigit = /^\d{16}$/;
        if (aadhar != '') {
            if (aadhar.match(adharcardTwelveDigit)) {
                return true;
            }
            
            else {
                alert("Enter valid Aadhar Number");
                return false;
            }
        }
    }
</script>
                   
                       
               
            