<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />

<link rel="stylesheet" href="https://fonts.googleapis.com/css?family='Poppins'">
<style>
    body{
        font-family: 'Poppins', sans-serif;
    }
</style>
 <!-- =============== Left side End ================-->     
 <div class="main-content-wrap sidenav-open d-flex flex-column">
            <!-- ============ Body content start ============= -->
    <div class="main-content">
        <div class="separator-breadcrumb border-top"></div>
        <div class="row">
            <div class="col-md-12">
                <div class="card mb-4"> 
                    <div class="card-body">
                        <div class="card-title mb-1 py-1"><h2 class="mb-0">&ensp; User Report</h2></div>
                            <div class="row mb-4 px-4 py-2">
                                <label for="">Username</label>
                                <div class="col-md-3">
                                    <!-- dropdown fetch  -->
                                    <select class="form-control select2" id="registrationId" name="registrationId" style="width: 100%;">
                                           <option value="0">Select Data</option>     
                                    <?php
                                        $i=1;
                                        foreach ($username as $key => $value) {
                                            $selected="";      
                                                echo '<option  value="'.$value->registrationId.'"'.$selected.' >'.$value->fname.'</option>';
                                            }
                                        // foreach ($username as $key => $value) {
                                        // $selected="";      
                                        //     echo '<option value="'.$value->registrationId.'"'.$selected.' >'.$value->fname.'</option>';
                                        // }
                                    ?>
                                    </select>      
                                </div>

                                <div class="col-md-4 ">
                                <button class="btn btn-primary" type="button" name="btn_save" id="sss">Search</button>
                            
                                </div>
                            </div>


                            <h1 class="text-dark mx-4">Pending</h1>
                    
                    <div class="table-responsive p-3 p-sm-3 p-md-3 p-lg-3">
                        <table class="display table table-striped table-bordered" id="example" style="width:100%">
                            <thead class="table-head-style">

                            <tr style="background-color:#e59525;color:white;">
                            
                                      <th style="width:9%">Sr No</th>
                                      <th>Status</th>
                                      <th>Userid</th>
                                      <th>Username</th>
                                      <th>TaskName</th>
                                      <th>Assign Date</th>
                                      <th>Current Date</th>
                                      <th>Pending Days</th>

                                     
                                  </tr>

                            </thead>
                                 <tbody id="Pending">
                                    
                                 </tbody>
                        </table>
                    </div><br><br>


<!-- second -->

<h1 class="text-dark mx-4">Running</h1>

                    <div class="table-responsive p-3 p-sm-3 p-md-3 p-lg-3">
                        <table class="display table table-striped table-bordered" id="example1" style="width:100%">
                            <thead class="table-head-style">

                            <tr style="background-color:#e59525;color:white;">
                            
                                      <th style="width:9%">Sr No</th>
                                      <th>Status</th>
                                      <th>Userid</th>
                                      <th>Username</th>
                                      <th>Task Type</th>
                                      <th>TaskName</th>
                                      <th>Assign Date</th>
                                      <th>Start Date</th>
                                      <th>Expected Date & Time</th>
                                      <th>Current Date</th>
                                      <th>Diff</th>
                                      <th>Remaning  Days</th>
                                  </tr>

                            </thead>
                            <tbody id="Running">
                           
                                      
                            </tbody>
                        </table>
                    </div><br><br>

                    <!-- 3rd row -->

                <h1 class="text-dark mx-4">Completed</h1>


                    <div class="table-responsive p-3 p-sm-3 p-md-3 p-lg-3">
                        <table class="display table table-striped table-bordered" id="example2" style="width:100%">
                            <thead class="table-head-style">

                             <tr style="background-color:#e59525;color:white;">
                                      <th style="width:9%">Sr No</th>
                                      <th>Status</th>
                                      <th>Userid</th>
                                      <th>Username</th>
                                      <th>Task Type</th>
                                      <th>TaskName</th>
                                      <th>Start Date</th>
                                      <th>Expected Date & Time</th>
                                      <th>End Date</th>
                                      <th>Com&End diff</th>
                                      <th>Complete Days</th>
                                  </tr>
                            </thead>
                            <tbody id='completed'>
                            
                                      
                            </tbody>
                        </table>
                    </div>


                            

                        </div>
                </div>
            </div>
        <!-- </div> -->
    <!-- </div> -->
</div>
                  

<script  src="<?php echo base_url(); ?>web_resources/dist/js/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>

    <script src="<?php echo base_url();?>Assets/jquery-3.3.1.min.js"></script>
          <script src="<?php echo base_url();?>Assets/select2.min.js"></script>
          <script src="<?php echo base_url();?>Assets/select2.init.js"></script>

<script>
	$(document).ready(function() {

    // $('#example').dataTable();
 
    
    });


</script>   

<script>
 $(document).ready(function(){

    $("#sss").click(function(){

          getcomplete();

          getrunning();

          getpending();
            
        });

    });

function getcomplete(){
    var registrationId = $('#registrationId').val();  
            $('#completed').empty();
            // alert(registrationId)
            $.ajax({
                url:"<?php echo base_url();?>AdminTaskReport/getcompleteddata",
                method: "POST",
                data:{'registrationId':registrationId},
                success: function(data){
                    // alert('hello');
                    console.log(data);
                    $('#completed').append(data);
                    // $('#completed').DataTable().ajax.reload();

                    
                }
            });
}


function getrunning(){
    var registrationId = $('#registrationId').val(); 
            $('#Running').empty();
            $.ajax({
                url:"<?php echo base_url();?>AdminTaskReport/getRunningdata",
                method: "POST",
                data:{'registrationId':registrationId},
                success: function(data){
                    // alert('hello');
                    console.log(data);
                    $('#Running').append(data);

                }

            });
}

function getpending(){
    var registrationId = $('#registrationId').val();
    // alert(registrationId); 
            $('#Pending').empty();
            $.ajax({
                url:"<?php echo base_url();?>AdminTaskReport/getpendingdata",
                method: "POST",
                data:{'registrationId':registrationId},
                success: function(data){
                    // alert('hello');
                    console.log(data);
                    $('#Pending').append(data);

                }

            });
}
</script>


<!-- <script>
	$(document).ready(function() {

        $("#sss").click(function(){
            var registrationId = $('#registrationId').val();  //selected country id

            // alert(registrationId);
            // getalltaskcompleted();



        });
 
    
      
    });



</script>  -->



