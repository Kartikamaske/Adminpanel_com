<link rel="stylesheet" href="https://fonts.googleapis.com/css?family='Poppins'">
<style>
    body{

font-family: 'Poppins', sans-serif;

}

.form-control:focus {
        border-color:#5a14c9;
        /* box-shadow: 0 0 0 0.2rem rgba(40, 167, 69, 0.25); */
        box-shadow: 0 0 0 0.2rem #e1dde7;

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

                        <div class="table-responsive p-3">
                            <table class="display table table-striped table-bordered" id="example" style="width:100%">
                                <thead class="table-head-style">
                                <tr style="background-color:#e59525;color:white;">
                                
                                          <th style="width:9%">Sr No</th>
                                          <th>ID</th>
                                          <th>Member Name</th>
                                          <th>TaskName</th>
                                          <th>TaskDescription</th>
                                          <th>Expected Time</th>
                                          <th>Status</th>
                                         
                                 </tr>

                                </thead>
                                <tbody>
                                <?php 
                                    $i=1;

                                    foreach($alltask as $rw=>$value){

                                        $flag=$value->processflag;
                                        if($flag==0){
                                            $processflag = "<span style='color:red;font-weight:bold;'>Pending</span>";
                                        }else if($flag==1){
                                            $processflag = "<span style='color:blue;font-weight:bold;'>Running<span>";
                                        }
                                        else{
                                            $processflag = "<span style='color:green;font-weight:bold;'>Completed</span>";
                                        }

                                        if($flag=="2"){
                                                
                                            echo '<td class="text-center"><a href="'.base_url().'taskcreationEdit/update/'.$value->taskassignsubId.'">
                                            <i class="fa-solid fa-square-pen flag" style="font-size: 23px;  display:none"></i></a> 
                                            </td>';
        
                                        }else{
                                                    
                                            echo '<td class="text-center"><a href="'.base_url().'taskcreationEdit/update/'.$value->taskassignsubId.'">
                                            <i class="fa-solid fa-square-pen flag" style="font-size: 23px; "></i></a> 
                                            </td>';
                                        }
                                        
                                        echo "<td>".$i."</td>";
                                            echo "<td>".$value->fname."</td>";
                                            echo "<td>".$value->taskname."</td>";
                                            echo "<td>".$value->description."</td>";
                                            echo "<td>".$value->expexteddatetime."</td>";
                                            echo "<td>".$processflag."</td>";

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
 
    
} );
</script>
                   
                       
               
            