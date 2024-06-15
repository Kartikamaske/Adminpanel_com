
        <!-- =============== Left side End ================-->
        <div class="main-content-wrap sidenav-open d-flex flex-column">
            <!-- ============ Body content start ============= -->
            <div class="main-content">
                <div class="breadcrumb">
                    <h1>Employee Details</h1>
                   
                </div>
                <div class="separator-breadcrumb border-top"></div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card mb-4">
                            <div class="card-body">
                                <form role="form" id="Form" action="" method="post">
                                <div class="row">
         <div class="col-12 col-sm-1 col-md-2 col-lg-1 col-xl-1 col-xll-1">
         <div class="mb-3">
      <label for="empid">EmployeeID:</label>
      <input type="text" class="form-control" id="empid" placeholder="Enter employee id.." name="empid">
    </div>
    </div>
    <div class="col-12 col-sm-3 col-lg-3 col-md-3">
         <div class="mb-3">
      <label for="empname">EmployeeName:</label>
      <input type="text" class="form-control" id="empname" placeholder="Enter employee Name.." name="empname">
    </div>
    </div>
    <div class="col-12 col-sm-2 col-lg-2 col-md-3">
      <div class="mb-3">
      <label for="birth">BirthDate:</label>
      <input type="date" class="form-control" id="birth" placeholder="Enter BirthDate..." name="birth" value="<?php echo date('Y-m-d'); ?>">
      <!-- <input type="date" class="form-control" id="birth" placeholder="Enter BirthDate..." name="birth"> -->
    </div>
    </div>
    <div class="col-12 col-sm-2 col-lg-2 col-md-2">
    <label for="gender" class="radio-inline">Gender:</label><br>
     <!-- <div class="radio-inline"> -->
      <input type="radio" class="form-check-input" id="radio1" name="optradio" value="option1" checked>
      <label class="form-check-label" for="radio1">Male</label>&emsp;&emsp;
      <input type="radio" class="form-check-input" id="radio2" name="optradio" value="option2">
      <label class="form-check-label" for="radio2">Female</label>
    <!-- </div>  -->
</div>
    <!-- <div class="col-12 col-sm-2 col-lg-2 col-md-2">
    <label for="birth" class="radio-inline">Gender:</label><br>
      <input type="radio" name="optradio" checked>Male
      <input type="radio" name="optradio">Female
    </div> -->
    <div class="col-12 col-sm-2 col-md-2 col-lg-2">
    <div class="mb-3">
      <label for="desig">Designation:</label>
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
         <!-- <label for="photo">Photo:</label>
         <input type="file" class="form-control" id="file" name="file" placeholder="Upload your photograph here.."> -->
      <label for="file" style="cursor: pointer;">Photo:</label>
      <img id="output" width="100">
      <input type="file"  accept="image/*" class="form-control" name="image" id="file"  onchange="loadFile(event)">

<!-- <input type="file" class="form-control" id="file" name="file" placeholder="Upload your photograph here.."> -->
</div>
    </div>
      <div class="col-12 col-sm-4 col-lg-4 col-md-4">
         <div class="mb-3">
         <label for="address">Address:</label>
         <textarea name="address" id="address" class="form-control"></textarea>
         </div>
      </div>
         <div class="col-12 col-sm-2 col-lg-4 col-md-2">
      <div class="mb-3">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email..." name="email">
    </div>
    </div>
    <div class="col-12 col-sm-2 col=lg-2 col-md-2">
    <div class="mb-3">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pswd" placeholder="Enter password..." name="pswd" maxlength="8" minlength="5">
    </div>
    </div>
    <div class="col-12 col-sm-2 col-lg-2 col-md-2">
    <div class="mb-3">
      <label for="primary">Primarymobno:</label>
      <input type="number" class="form-control" id="primary" placeholder="Enter primary mobile number..." name="primary">
    </div>
    </div>
    <div class="col-12 col-sm-2 col-lg-2 col-md-2">
    <div class="mb-3">
      <label for="secondary">Secondarymobno:</label>
      <input type="number" class="form-control" id="secondary" placeholder="Enter secondary mobile number..." name="secondary">
    </div>
    </div>
    <div class="col-12 col-sm-2 col-lg-2 col-md-2">
    <div class="mb-3">
      <label for="aadhar">AdharCardNo:</label>
      <input type="number" class="form-control" onchange="AadharValidate();" id="aadhar" maxlength="12" required>                   
    </div>
    </div>
    <div class="col-12 col-sm-2 col-lg-2 col-md-2">
    <div class="mb-3">
      <label for="pan">PanCardNo:</label>
      <input type="text" class="form-control" id="pan" placeholder="Enter pan card number..." name="pan" maxlength="10">
    </div>
    </div>
    
    </div>
   </form>
  
   
<script>
var loadFile = function(event) {
	var image = document.getElementById('output');
	image.src = URL.createObjectURL(event.target.files[0]);
};
</script>

                                        <div class="col-md-12 text-right">
                                            <button class="btn btn-primary" type="button" name="btn_save" id="btn_save">Submit</button>
                                            <button class="btn btn-warning text-white" type="button" name="cancle" id="cancle">Cancel</button>

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
                   
                       
               
            