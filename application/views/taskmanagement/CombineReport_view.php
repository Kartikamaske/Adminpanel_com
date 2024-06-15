<link rel="stylesheet" href="https://fonts.googleapis.com/css?family='Poppins'">
<style>
    body{
font-family: 'Poppins', sans-serif;
}

.form-control:focus {
        border-color:#5a14c9;
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

                    <h1 class="text-dark mx-4">Pending</h1>
                    
                        <div class="table-responsive p-3 p-sm-3 p-md-3 p-lg-3">
                            <table class="display table table-striped table-bordered" id="example" style="width:100%">
                                <thead class="table-head-style">

                                <tr style="background-color:#e59525;color:white;">
                                
                                          <th style="width:9%">Sr No</th>
                                          <th>Status</th>
                                          <th>User Name</th>
                                          <th>TaskName</th>
                                          <th>Assign Date</th>
                                          <th>Current Date</th>
                                          <th>Pending Days</th>

                                         
                                      </tr>

                                </thead>
                                <tbody>
                                <?php 
                                            $i=1;


                                            foreach($pending as $rw=>$value){

                                                $flag=$value->processflag;

                                                if($flag==0){
                                                    $pf = "<span style='color:red;font-weight:bold;'>Pending</span>";
                                                }
                                                else{
                                                     $pf = "<span style='color:blue;font-weight:bold;'>Running<span>";
                                                }

                                                $sdate = $value->created_date;
                                                $cdate= date('Y-m-d H:i:s');
                                                $diffData = abs(strtotime($sdate) - strtotime($cdate));
                                                $daysDiff = floor($diffData / (60*60*24));
                                                $hoursDiff = floor(($diffData - $daysDiff * 60*60*24) / (60*60));
                                                $minutesDiff = floor(($diffData - $daysDiff * 60*60*24 - $hoursDiff * 60*60) / 60);

                                                $daysDiff =  "$daysDiff days, $hoursDiff hours, $minutesDiff minutes";

                                          
                                            echo "<td>".$i."</td>";
                                            echo "<td>".$pf."</td>";
                                            echo "<td>".$value->fname."</td>";
                                            echo "<td>".$value->taskname."</td>";
                                            echo "<td>".$value->created_date."</td>";
                                            echo "<td>".date('Y-m-d')."</td>";
                                            echo "<td>".$daysDiff."</td>";
                                            $i++;
                        
                                        
                                            echo "</tr>";                        
                                            }
                                        ?>  
                                          
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
                                          <th>User Name</th>
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
                                <tbody>
                                <?php 
                                            $i=1;
                                            // $a=1;

                                            foreach($combinedArray as $rw=>$value){

                                                $flag=$value->processflag;

                                                if($flag==1){
                                                    $pf = "<span style='color:blue;font-weight:bold;'>Running<span>";
                                                }
                                                else{
                                                     $pf = "<span style='color:green;font-weight:bold;'>Completed</span>";
                                                }

                                                // for task type
                                                $task =$value->IndivisualtaskId;

                                                if($task==0){
                                                    $a = "company assign";
                                                }
                                                else{
                                                    $a = "Indiviusal";
                                                }

                                                $sd = $value->created_date;
                                                $cd = date('d-m-y h:i:s A');

                                                $date1 = date_create($sd);
                                                $date2 = date_create($cd);
                                                $diff = date_diff($date1, $date2);

                                                $daysDiff = $diff->days;
                                                $hoursDiff = $diff->h;
                                                $minutesDiff = $diff->i;

                                                $ddiff = "$daysDiff days, $hoursDiff hours, $minutesDiff minutes";



                                                // for differance in start time and expected time
                                                $startdate = new DateTime($value->startdate);
                                                $expexteddatetime = new DateTime($value->expexteddatetime);

                                                $interval = $startdate->diff($expexteddatetime);

                                                $d =  $interval->format('%a days %h hours %i minutes %s seconds');


                                            echo "<td>".$i."</td>";
                                            echo "<td>".$pf."</td>";
                                            echo "<td>".$value->fname."</td>";
                                            echo "<td>".$a."</td>";
                                            echo "<td>".$value->taskname."</td>";
                                            echo "<td>".$value->created_date."</td>";
                                            echo "<td>".$value->startdate."</td>";
                                            echo "<td>".$value->expexteddatetime."</td>";
                                            echo "<td>".date('d-m-y h:i:s A')."</td>";

                                            echo "<td>".$d."</td>";
                                            echo "<td>".$ddiff."</td>";
                                            $i++;
                                            echo "</tr>";                        
                                            }
                                        ?>  
                                          
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
                                <tbody>
                                <?php 
                                            $i=1;
                                            // $a=1;

                                            foreach($completed as $rw=>$value){

                                                $flag=$value->processflag;

                                                if($flag==1){
                                                    $pf = "<span style='color:blue;font-weight:bold;'>Running<span>";
                                                }
                                                else{
                                                     $pf = "<span style='color:green;font-weight:bold;'>Completed</span>";
                                                }

                                                // for task type
                                                $task =$value->IndivisualtaskId;

                                                if($task==0){
                                                    $a = "company assign";
                                                }
                                                else{
                                                    $a = "Indiviusal";
                                                }


                                                // for difference
                                                
                                                $expexteddatetime = new DateTime($value->expexteddatetime);
                                                $startdate = new DateTime($value->enddate);

                                                $diff_interval = $startdate->diff($expexteddatetime);

                                                $End_com=  $diff_interval->format('%a days %h hours %i minutes %s seconds');

                                                // $sd = $value->startdate;
                                                // $cd= $value->enddate;

                                                // $date1 = date_create($value->startdate);
                                                // $date2 = date_create($value->enddate);
                                                // $diff1 = date_diff($date1,$date2);
                                                // $daysdiff = $diff1->format("%R%a");
                                                // $days_diff = abs($daysdiff) + 1 ;

                                                $date1 = date_create($value->startdate);
                                                $date2 = date_create($value->enddate);
                                                $diff = date_diff($date1, $date2);

                                                $daysDiff = $diff->days;
                                                $hoursDiff = $diff->h;
                                                $minutesDiff = $diff->i;

                                                $days_diff = "$daysDiff days, $hoursDiff hours, $minutesDiff minutes";

                                                echo "<td>".$i."</td>";
                                                echo "<td>".$pf."</td>";
                                                echo "<td>".$value->fname."</td>";
                                                 // show task type
                                                echo "<td>".$a."</td>";
                                                echo "<td>".$value->taskname."</td>";
                                                echo "<td>".$value->startdate."</td>";
                                                echo "<td>".$value->expexteddatetime."</td>";
                                                echo "<td>".$value->enddate."</td>";
                                                echo "<td>".$End_com."</td>";

                                                echo "<td>".$days_diff."</td>";

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



<!-- 
<script>

$(document).ready(function(){

var id = $('#taskassignsubId').val();

if(id==0){
  // to show current date 
//   document.getElementById('projectstartDate').valueAsDate = new Date();
  document.getElementById('currentdate').valueAsDate = new Date();
}

});

</script> -->

<script>



$(document).ready(function(){
$(".enddate").change(function(){
//    alert("1");

var sd=$('.startdate').val();
var ed=$('.enddate').val();


// alert(ed);

        const dateOne = new Date(sd);
        const dateTwo = new Date(ed);
        const time = Math.abs(dateTwo - dateOne);
        const days = Math.ceil(time/(1000 * 60 * 60 * 24));
        $('#output').html(days);

  }); 
});

    //  function calculateDays(){
    //     var d1 = document.getElementById("startdate").value;
    //     var d2 = document.getElementById("enddate").value;
    //     const dateOne = new Date(d1);
    //     const dateTwo = new Date(d2);
    //     const time = Math.abs(dateTwo - dateOne);
    //     const days = Math.ceil(time/(1000 * 60 * 60 * 24));
    //     document.getElementById("output").innerHTML = days;



    //  }

     
</script> 





<!-- 
$(document).ready(function() {
    $(".enddate").change(function() {
        var $row = $(this).closest("tr"); // Find the parent row
        var sd = $row.find(".startdate").val(); // Find start date within this row
        var ed = $(this).val(); // End date from the changed input

        const dateOne = new Date(sd);
        const dateTwo = new Date(ed);
        const time = Math.abs(dateTwo - dateOne);
        const days = Math.ceil(time / (1000 * 60 * 60 * 24));

        $row.find(".output").html(days); // Update the output in this row
    });
}); -->



                   
                       
               
            