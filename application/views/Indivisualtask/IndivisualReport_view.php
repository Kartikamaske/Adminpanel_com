
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
        <div class="breadcrumb d-flex justify-content-end">  </div>
        <div class="separator-breadcrumb border-top"></div>
        <div class="row">
            <div class="col-md-12">
                <div class="card mb-4">
                    <div class="card-body">
                        <div class="card-title mb-1 py-2">
                            <h3 class="mb-0">&ensp; Indivisual task Details</h3>
                        </div>
                        <!-- <div class="d-flex justify-content-end m-3">
                            <a href="<?=base_url() ?>Indivisualtask/create" class="text-white">
                                <button class="btn btn-primary" type="button" name="" id="" style="background-color: #d41574;color:white">Add Indivisual Task </button>
                            </a>
                        </div> -->
                         <input type="hidden" class="form-control" id="registrationId" name="registrationId" value="<?php if(!empty($getfkuser[0]->registrationId)){echo $getfkuser[0]->registrationId;}?>"><br>

                        <div class="table-responsive p-2">
                            <table class="display table table-striped table-bordered" id="example" style="width:100%">
                                <thead class="table-head-style">
                                    <tr>
                                        <th style="width:7%">Opration</th>
                                        <th>Id</th>
                                        <th>Task Description</th>
                                        <th>Start Date</th>
                                        <th>End Date</th>
                                        <th>Status</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                        $i=1;
                                       
                                        foreach($data as $rw=>$value){

                                            $flag=$value->processflag;
                                            if($flag==1){
                                                $pf = "<span style='color:#663399;font-weight:bold;'>Running<span>";
                                            }
                                            else{
                                                 $pf = "<span style='color:rgb(43, 193, 86);font-weight:bold;'>Completed</span>";
                                            }
                                            echo "<tr>";
                                           
                                        echo "<td>".$i."</td>";
                                        echo "<td>".$value->IndivisualtaskId."</td>";
                                        echo "<td>".$value->taskname."</td>";
                                        echo "<td>".$value->startdate."</td>";
                                        echo "<td>".$value->enddate."</td>";
                                        echo "<td>".$pf."</td>";
                                        $i++;
                              
                                        echo "</tr>";                        
                                        }
                                    ?>
                                          
                                </tbody>
                            </table>
                        </div>

<!-- second -->
                        <div class="table-responsive p-2">
                            <table class="display table table-striped table-bordered" id="example1" style="width:100%">
                                <thead class="table-head-style">
                                    <tr>
                                        <th style="width:7%">Opration</th>
                                        <th>Id</th>
                                        <th>Task Description</th>
                                        <th>Start Date</th>
                                        <th>End Date</th>
                                        <th>Status</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                        $i=1;
                                       
                                        foreach($dataa as $rw=>$value){

                                            $flag=$value->processflag;

                                            if($flag==1){
                                                $pf = "<span style='color:#663399;font-weight:bold;'>Running<span>";
                                            }
                                            else{
                                                 $pf = "<span style='color:rgb(43, 193, 86);font-weight:bold;'>Completed</span>";
                                            }
                                            echo "<tr>";

                                       
                                        echo "<td>".$i."</td>";
                                        echo "<td>".$value->IndivisualtaskId."</td>";
                                        echo "<td>".$value->taskname."</td>";
                                        echo "<td>".$value->startdate."</td>";
                                        echo "<td>".$value->enddate."</td>";
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
 
    
} );
</script>
                   
                       
               
            