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
                    <div class="card mb-4 card-style">
                        <div class="card-body">
                            <div class="card-title mb-1 py-2">
                                <h3 class="mb-0">&ensp; Task Assign Details</h3>
                            </div>
                            <div class="d-flex justify-content-end m-3">
                                <a href="<?=base_url() ?>Grouptype/create" class="text-white">
                                    <button class="btn" type="button" name="" id="" style="background-color: #d41574;color:white">New Assign Task </button>
                                </a>
                            </div>
                            <div class="table-responsive p-2">
                                <table class="display table table-striped table-bordered" id="example" style="width:100%">
                                    <thead>
                                        <tr style="background-color:#e59525;color:white;"><th style="width:7%">Opration</th>
                                            <th>Id</th>
                                            <!-- <th>groupname</th> -->
                                           
                                        </tr>
                                    </thead>
                                    <tbody>

                                         <?php 
                                            $i=0;
                                            foreach($data as $rw=>$value){
                                            echo "<tr>";
                                            echo  '<td><a href="'.base_url().'Grouptype/update/'.$value->taskassignId.'"><i class="fas fa-eye" style="font-size: 16px;"></i></a> 
                                            </td>';
                                            
                                            echo "<td>".$value->taskassignId."</td>";
                                            // echo "<td>".$value->groupname."</td>";
                                            // echo "<td>".$value->fktaskTypenameId1."</td>";
                                            // echo "<td>".$value->fktaskTypenameId2."</td>";
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
            <!-- </div>
    </div> -->
</div>
                  

<script  src="<?php echo base_url(); ?>web_resources/dist/js/jquery.min.js"></script>

    <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>

<script>
	$(document).ready(function() {
   

    $('#example').dataTable();
 
    
} );
</script>
                   
                       
               
            