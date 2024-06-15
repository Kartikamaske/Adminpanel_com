<style>
    #Loading{
                    width: 100%;
                    height: 100vh;
                    background:white;
                    position: fixed;
                    z-index:99999;
                    display: flex;
                    justify-content: center;
                    align-items: center;
                }

                #Loading img{
                     /* height: 160px;
                     width: 160px; */
                     display: flex;
                     justify-content: center;
                     align-items: center;
                }
</style>

<body onload ="myfunction()">

<div id="Loading">
    <img src="<?php echo base_url(); ?>\Assets\images\giphy.gif" alt="">

    </div>
    
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
                                    <select class="form-control select2" id="registrationId"  name="registrationId" style="width: 100%;">
                                                
                                    <?php
                                        foreach ($username as $key => $value) {
                                        $selected="";      
                                            echo '<option value="'.$value->registrationId.'"'.$selected.' >'.$value->fname.'</option>';
                                        }
                                    ?>
                                    </select>      
                                </div>

                                <div class="col-md-4 ">
                                    <button class="btn btn-primary" type="button" name="btn_search" id="btn_search">Search</button>
                            
                                </div>
                            </div>


<!-- second -->

<h1 class="text-dark mx-4">Running</h1>

            <div class="table-responsive p-3 p-sm-3 p-md-3 p-lg-3">
                <table class="display table table-striped table-bordered" id="example1" style="width:100%">
                    <thead class="table-head-style">
                        <tr style="background-color:#e59525;color:white;">
                            
                                      <th style="width:9%">Sr No</th>
                                      <th>Status</th>
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
                    <tbody id="showUser">
                            
                                      
                            </tbody>
                        </table>
                    </div><br><br>

                
                        </div>
                </div>
            </div>
        <!-- </div> -->
    <!-- </div> -->
</div>
                  

<script  src="<?php echo base_url(); ?>web_resources/dist/js/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>



<script>
	$(document).ready(function() {

    // $('#example').dataTable();
 
    
    });


</script>   

<script>
 $(document).ready(function(){

    $("#btn_search").click(function(){

            //here we will run an ajax request
            var registrationId = $('#registrationId').val();  //selected country id

            // alert(registrationId);

            $.ajax({

                url:"<?php echo base_url();?>AdminTaskReport/showUserDetails",
                method: "POST",

                data:{'registrationId':registrationId},
                dataType:'JSON',
                success: function(res){
                    // alert('hello');
                    console.log(res);
                var html='';

               var i = 1;
               for(i=1; i<res.length; i++){

                var processflag=res[i].processflag;
                if(processflag==1){
                    var pf="Running";
                }else{
                    var pf="Complete";

                }


                var tasktype = res[i].IndivisualtaskId;
                if(tasktype==0){
                    var tt = "Company Assign";

                }else{
                    var tt = "Indivisual Task"
                }

           
                html +='<tr>'+
               
                
                '<td class="pd">'+i+'</td>'+
                '<td class="pd">'+pf+'</td>'+
                '<td class="pd">'+res[i].fname +'</td>'+
                '<td class="pd">'+tt+'</td>'+
                // '<td class="pd">'+$pf+'</td>'+
                // '<td class="pd">'+$a+'</td>'+
                '<td class="pd">'+res[i].created_date+'</td>'+
                '<td class="pd">'+res[i].startdate+'</td>'+
                '<td class="pd">'+res[i].expexteddatetime+'</td>'+
                // '<td class="pd">'+date('Y-m-d H:i:s')+'</td>'+
                // '<td class="pd">'+$d+'</td>'+
                // '<td class="pd">'+$ddiff+'</td>'+
                
                '</tr>';
                // i++;
            }
            $('#showUser').html(html);
    $('#example').dataTable();


                }

            });


        });

    });


     //    foreach($combinedArray as $rw=>$value){

                    // $flag=$value->processflag;

                    // if($flag==1){
                    //     $pf = "<span style='color:#663399;font-weight:bold;'>Running<span>";
                    // }
                    // else{
                    //     $pf = "<span style='color:rgb(43, 193, 86);font-weight:bold;'>Completed</span>";
                    // }
                               

                     // for task type
                    //  $task =$value->IndivisualtaskId;

                    // if($task==0){
                    //     $a = "company assign";
                    // }
                    // else{
                    //     $a = "Indiviusal";
                    // }

                    //     $sd = $value->created_date;
                    //     $cd = date('Y-m-d H:i:s');

                    //     $date1 = date_create($sd);
                    //     $date2 = date_create($cd);
                    //     $diff = date_diff($date1, $date2);

                    //     $daysDiff = $diff->days;
                    //     $hoursDiff = $diff->h;
                    //     $minutesDiff = $diff->i;
                    //     $ddiff = "$daysDiff days, $hoursDiff hours, $minutesDiff minutes";

                    //     for differance in start time and expected time
                    //     $startdate = new DateTime($value->startdate);
                    //      $expexteddatetime = new DateTime($value->expexteddatetime);
                    //      $interval = $startdate->diff($expexteddatetime);
                    //     $d =  $interval->format('%a days %h hours %i minutes %s seconds');
                


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

<script>
    var preloader = document.getElementById('Loading');
    function myfunction(){

        setTimeout(() => {
            preloader.style.display ="none";

}, "2000");
    }
</script>

</body>



