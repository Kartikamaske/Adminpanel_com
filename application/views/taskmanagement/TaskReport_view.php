<link rel="stylesheet" href="https://fonts.googleapis.com/css?family='Poppins'">
<style>
    body{

font-family: 'Poppins', sans-serif;

}

.form-control:focus {
        border-color:#5a14c9;
        /* box-shadow: 0 0 0 0.2rem rgba(40, 167, 69, 0.25); */
        box-shadow: 0 0 0 0.2rem #9d89b5;

    } 
</style>
        <!-- =============== Left side End ================-->
<div class="main-content-wrap sidenav-open d-flex flex-column">
            <!-- ============ Body content start ============= -->
    <div class="main-content">
        <div class="breadcrumb d-flex justify-content-end">  </div>
        <div class="separator-breadcrumb border-top"></div>
        <div class="row">
            <div class="col-md-12">
                <div class="card mb-4 card-style">
                    <div class="card-body">
                        <div class="card-title mb-1 py-2">
                            <h3 class="mb-0">&ensp; Task Assign Details</h3>
                        </div>

                        <!-- <label for="">registration id</label> -->
                    <input type="hidden" class="form-control" id="registrationId" name="registrationId" value="<?php if(!empty($user[0]->registrationId)){echo $user[0]->registrationId;}?>"><br>

                    
                        <div class="table-responsive p-3 p-sm-3 p-md-3 p-lg-3">
                            <table class="display table table-striped table-bordered" id="example" style="width:100%">
                                <thead class="table-head-style">

                                <tr style="background-color:#e59525;color:white;">
                                
                                          <th style="width:9%">Opration</th>
                                          
                                          <th>Member Name</th>

                                          <th>TaskName</th>

                                          <th>TaskDescription</th>

                                          <!-- <th>StartDate</th> -->

                                          <!-- <th>EndDate</th> -->

                                          <th>Status</th>
                                         
                                      </tr>

                                </thead>
                                <tbody>
                                <?php 
                                            $i=1;
                                            // $a=1;

                                            foreach($pending as $rw=>$value){

                                                $flag=$value->processflag;

                                                if($flag==0){
                                                    $pf = "<span class='text-danger'>Pending</span>";
                                                }
                                                else{
                                                     $pf = "<span class='text-primary'>Running</span>";
                                                }

                                            echo "<td>".$i."</td>";
                                            echo "<td>".$value->fname."</td>";
                                            echo "<td>".$value->taskname."</td>";
                                            echo "<td>".$value->description."</td>";
                                            echo "<td>".$pf."</td>";

                                            
                                            $i++;
                        
                                        
                                            echo "</tr>";                        
                                            }
                                        ?>  
                                          
                                </tbody>
                            </table>
                        </div><br><br>


<!-- second -->


                        <div class="table-responsive p-3 p-sm-3 p-md-3 p-lg-3">
                            <table class="display table table-striped table-bordered" id="example1" style="width:100%">
                                <thead class="table-head-style">

                                <tr style="background-color:#e59525;color:white;">
                                
                                          <th style="width:9%">Opration</th>
                                          
                                          <th>Member Name</th>

                                          <th>TaskName</th>

                                          <th>TaskDescription</th>

                                          <th>Status</th>
                                         
                                      </tr>

                                </thead>
                                <tbody>
                                <?php 
                                            $i=1;
                                            // $a=1;

                                            foreach($running as $rw=>$value){

                                                $flag=$value->processflag;

                                                if($flag==1){
                                                    $pf = "<span class='text-primary'>Running</span>";
                                                }
                                                else{
                                                     $pf = "<span class='text-success'>completed</span>";
                                                }

                                
                                            // echo '<td><a href="'.base_url().'taskcreationEdit/update/'.$value->taskassignsubId.'"><i class="fa-solid fa-pen-to-square" style="font-size:18px;"></i></a> 
                                            //  </td>';
                                            echo "<td>".$i."</td>";
                                            echo "<td>".$value->fname."</td>";
                                            echo "<td>".$value->taskname."</td>";
                                            echo "<td>".$value->description."</td>";
                                            // echo "<td>".$value->startdate."</td>";
                                            // echo "<td>".$value->duedate."</td>";
                                            echo "<td>".$pf."</td>";

                                            
                                            $i++;
                        
                                        
                                            echo "</tr>";                        
                                            }
                                        ?>  
                                          
                                </tbody>
                            </table>
                        </div><br><br>

                        <!-- 3rd row -->

                        <div class="table-responsive p-3 p-sm-3 p-md-3 p-lg-3">
                            <table class="display table table-striped table-bordered" id="example2" style="width:100%">
                                <thead class="table-head-style">

                                <tr style="background-color:#e59525;color:white;">
                                
                                          <th style="width:9%">Opration</th>
                                          
                                          <th>Member Name</th>

                                          <th>TaskName</th>

                                          <th>TaskDescription</th>

                                          <!-- <th>StartDate</th> -->

                                          <!-- <th>EndDate</th> -->

                                          <th>Status</th>
                                         
                                      </tr>

                                </thead>
                                <tbody>
                                <?php 
                                            $i=1;
                                            // $a=1;

                                            foreach($alltask as $rw=>$value){

                                                $flag=$value->processflag;

                                                if($flag==1){
                                                    $pf = "<span class='text-primary'>Running</span>";
                                                }
                                                else{
                                                     $pf = "<span class='text-success'>completed</span>";
                                                }

                                            echo "<td>".$i."</td>";
                                            echo "<td>".$value->fname."</td>";
                                            echo "<td>".$value->taskname."</td>";
                                            echo "<td>".$value->description."</td>";
                                            // echo "<td>".$value->startdate."</td>";
                                            // echo "<td>".$value->duedate."</td>";
                                            echo "<td>".$pf."</td>";
                                            $i++;
                                            echo "</tr>";                        
                                            }
                                        ?>  
                                          
                                </tbody>
                            </table>
                        </div>

                        
                    </div>
                </div>
            </div>
</div>
                  

<script  src="<?php echo base_url(); ?>web_resources/dist/js/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>

<script>
	$(document).ready(function() {
   

    $('#example').dataTable();
    $('#example1').dataTable();
 
    $('#example2').dataTable();
 
 
    
} );
</script>


<script>

$(document).ready(function(){
        $("#search").click(function(){
            //here we will run an ajax request
            
            var taskid = $('#taskassignsubId').val(); 

        });
    });
</script>



                   
                       
               
            