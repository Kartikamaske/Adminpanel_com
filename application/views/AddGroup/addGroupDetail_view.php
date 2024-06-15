

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
                            <h2 class="mb-0">&ensp; Group Details</h2>
                        </div>
                        <div class="d-flex justify-content-end mb-2 p-3">
                            <a href="<?=base_url() ?>AddGroup/create" class="text-white">
                                <button class="btn btn-primary"  type="button" name="" id="">Add New Group</button>
                            </a>            
                        </div>

                        <div class="table-responsive p-3">
                            <table class="display table table-striped table-bordered" id="example" style="width:100%">
                                <thead class="table-head-style">
                                    <tr><th style="width:7%">O/P</th>
                                        <th>Group Id</th>
                                        <th>Group Name</th>
                                        <th>Group Link</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                        $i=0;
                                        foreach($data as $rw=>$value){
                                            echo "<tr>";
                                            echo  '<td><a href="'.base_url().'AddGroup/update/'.$value->groupid.'"><i class="fas fa-eye" style="font-size: 16px;"></i></a> 
                                            </td>';
                                            echo "<td>".$value->groupid."</td>";
                                            echo "<td>".$value->groupname."</td>";
                                            echo "<td>".$value->grouplink."</td>";
                                            $i++;
                                            // echo "<td>".$value->fkregisterid."</td>";
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
                
