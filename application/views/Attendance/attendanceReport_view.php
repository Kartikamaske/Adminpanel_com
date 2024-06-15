

        <!-- =============== Left side End ================-->
        <!-- <div class="main-content-wrap sidenav-open d-flex flex-column"> -->
        <div class="main-content-wrap sidenav-open d-flex flex-column">
            <!-- ============ Body content start ============= -->
    <div class="main-content">
                <!-- <div class="breadcrumb d-flex justify-content-end"></div> -->
        <div class="separator-breadcrumb border-top"></div>
        <div class="row">
            <div class="col-md-12">
                <div class="card mb-4"> 
                    <div class="card-body">
                        <div class="card-title mb-1 py-1">
                            <h2 class="mb-0">&ensp; Attendance Report</h2>
                        </div>

                        <input type="hidden" class="form-control" id="registrationId" name="registrationId" value="<?php if(!empty($user[0]->registrationId)){echo $user[0]->registrationId;}?>"><br>

                        <!-- <div class="d-flex justify-content-end mb-2 p-3">
                            <a href="<?=base_url() ?>Attendance/create" class="text-white">
                                <button class="btn btn-primary"  type="button" name="" id="">Attendance</button>
                            </a>            
                        </div> -->

                        <div class="table-responsive p-3">
                            <table class="display table table-striped table-bordered" id="example" style="width:100%">
                                <thead class="table-head-style">
                                    <tr><th style="width:7%">O/P</th>
                                        <th>Attendance Id</th>
                                        <th>User Id</th>
                                        <th>Start Date</th>
                                        <th>Start Time</th>
                                        <th>End Date</th>
                                        <th>End Time</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                        $i=0;
                                        foreach($data as $rw=>$value){

                                            echo "<tr>";
                                            $et=$value->endtime;
                                            if($et==null){
                                                echo  '<td><a href="'.base_url().'Attendance/update/'.$value->attendId.'"><i class="fas fa-eye" style="font-size: 16px;"></i></a> 
                                                </td>';
                                            }else{
                                                echo  '<td><a href="'.base_url().'Attendance/update/'.$value->attendId.'"><i class="fas fa-eye" style="font-size: 16px;display:none"></i></a> 
                                                </td>';
                                            }
                                           
                                            echo "<td>".$value->attendId."</td>";
                                            echo "<td>".$value->fname."</td>";
                                            echo "<td>".$value->startdate."</td>";
                                            echo "<td>".$value->starttime."</td>";
                                            echo "<td>".$value->enddate."</td>";
                                            echo "<td>".$value->endtime."</td>";
                                            $i++;
                                            echo "</tr>";                        
                                            }
                                        ?>  
                                </tbody>
                            </table>
                        </div>

                </div>
            <!-- </div>
        </div>
    </div>
</div> -->
         

                                        
<script  src="<?php echo base_url(); ?>web_resources/dist/js/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>

<script>
	$(document).ready(function() {
   

    $('#example').dataTable();
 
    
} );
</script>                
                
