
        <!-- =============== Left side End ================-->
        <div class="main-content-wrap sidenav-open d-flex flex-column">
            <!-- ============ Body content start ============= -->
            <div class="main-content">
                <div class="breadcrumb">
                    <h1><img src="https://img.icons8.com/color-glass/512/play-button-circled--v1.png" style="width:25px">&ensp;Deactive New Song</h1>
                   
                </div>
                <div class="separator-breadcrumb border-top"></div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card mb-4">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="display table table-striped table-bordered" id="example" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>Action</th>
                                                <th>Song Name</th>
                                                <th>Movie</th>
                                                <th>Language</th>
                                                <th>Song Type</th>
                                                
                                            </tr>

                                            
                                        </thead>
                                        <tbody>
                                        <!-- <?php 
                                 $i=0;
                                foreach($data as $rw=>$value){
                                 echo "<tr>";
                                //   echo  '<td><a href="'.base_url().'Registration/update/'.$value->memberId.'"><i class="fas fa-eye" style="font-size: 16px;"></i></a> 
                                //   </td>';
                                
                                 echo "<td>".$value->id."</td>";
                                 echo "<td>".$value->studentname."</td>";$i++;
                                 echo "<td>".$value->phone."</td>";
             
                              ;
                                 echo "</tr>";                        
                             }
                             ?>  -->
                             <tr>
                                <td><img src="https://img.icons8.com/windows/512/trash.png" style="width:25px"></td>
                                <td>xyz</td>
                                <td>abc</td>
                                <td>Marathi</td>
                                <td>Romantic</td>
                                
                             </tr>

                             <tr>
                                <td><img src="https://img.icons8.com/windows/512/trash.png" style="width:25px"></td>
                                <td>xyz</td>
                                <td>abc</td>
                                <td>Hindi</td>
                                <td>Hip-Hop</td>
                                
                             </tr>
                                                           
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
   

    $('#example').dataTable( {} );
 
    
} );
</script>
                   
                       
               
            