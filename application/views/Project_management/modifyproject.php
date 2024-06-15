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
                            <h3 class="mb-0">&ensp; Project Details</h3>
                        </div>
                        <div class="d-flex justify-content-end m-3">
                            <a href="<?=base_url() ?>Project/create" class="text-white">
                                <button class="btn" type="button" name="" id="" style="background-color: #d41574;color:white">Add New Project </button>
                            </a>
                        </div>
                        <div class="table-responsive p-2">
                            <table class="display table table-striped table-bordered" id="example" style="width:100%">
                                <thead class="table-head-style">
                                    <tr>
                                        <th style="width:7%">Opration</th>
                                        <th>Project Id</th>
                                        <th>Project Name</th>
                                        <th>Project Start Date</th>
                                        <th>Group Name</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                        $i=0;
                                        foreach($data as $rw=>$value){
                                        echo "<tr>";
                                        echo  '<td><a href="'.base_url().'Project/update/'.$value->projectId.'"><i class="fas fa-eye" style="font-size: 16px;"></i></a> 
                                        </td>';
                                
                                        echo "<td>".$value->projectId."</td>";
                                        echo "<td>".$value->projectName."</td>";
                                        echo "<td>".$value->projectstartDate."</td>";
                                        echo "<td>".$value->typeName."</td>";
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
                   
                       
               
            