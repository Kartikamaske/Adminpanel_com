

        <!-- =============== Left side End ================-->
       
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
                                <h2 class="mb-0">&ensp; Fees Report</h2>
                            </div>

                            <div class="row mb-4 px-4 py-2">
                                <label for="">Group</label>
                                <div class="col-md-3">
                                    <select class="form-control select2" id="groupid"  name="groupid" style="width: 100%;">
                                                
                                    <?php
                                        foreach ($group as $key => $value) {
                                        $selected="";      
                                            echo '<option value="'.$value->groupid.'"'.$selected.' >'.$value->groupname.'</option>';
                                        }
                                    ?>
                                    </select>      
                                </div>
                                <label for="">Fees Status</label>

                                <div class="col-md-3 ">
                                    <select name="" id="feeStatusBygroup" class="form-control">
                                        <option value="0">--Select Fees Status--</option>
                                        <option value="1">Completed</option>
                                        <option value="2">Pending</option>
                                        <option value="3">All</option>

                                    </select>
                                    
                                </div>
                                <div class="col-md-4 ">
                                    <button class="btn btn-primary" type="button" name="" id="gr_search">Search</button>
                                </div>
                            </div>
                            <div class="row">

                                <div class="table-responsive p-4">
                                    <table class=" table table-striped table-bordered"  id="example" style="width:100%">
                                        <thead class="table-head-style">
                                            <tr>
                                                <th style="width:7%">O/P</th>
                                                 <th>User Id</th>
                                                <th>User Name</th>
                                               <th>Email Id</th>
                                                <th>Mobile No.</th>
                                                <th>Total Amt.</th>
                                                <th>Paid Amt.</th>
                                                <th>Remaining Amt.</th>
                                                <th>Gender</th>
                                                <th>Enquiry For</th>
                                                    
                                            </tr>
                                        </thead>
                                        <tbody id="showUserByFeeStatus">
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <hr>
                            

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

    $("#gr_search").click(function(){
            //here we will run an ajax request
            var groupid = $('#groupid').val();  //selected country id
           var feestatus= $('#feeStatusBygroup').val();

            // alert(feestatus);

            $.ajax({

                url:"<?php echo base_url();?>FeesReport/UserByFeeStatus",
                method: "POST",

                data:{'groupid':groupid,'feestatus':feestatus},
                // dataType: 'json',
                dataType:'JSON',
                success: function(res){
                    // alert('hello');
                    console.log(res);
                var html='';
            //    var a=1;
               var i;
               for(i=0; i<res.length; i++){
                var g=res[i].gender;
                    if(g==1){
                        gen = "Female";
                     }else{
                        gen = "Male";
                    }
                    var enq=res[i].fkEnquiryTypeId;
                    var enquiry="";
                    if(enq==1){
                       enquiry= "Internship";
                    }else if(enq==1){
                        enquiry= "Job";
                    }else{
                        enquiry= "Other";
                    }
                

                html +='<tr>'+
                '<td><a href="UpdateUser/update/'+res[i].registrationId+'"> <i class="fas fa-eye" style="font-size: 16px;"></i> </a> </td>'+
                '<td class="pd">'+res[i].registrationId+'</td>'+
                '<td class="pd">'+res[i].fname+'</td>'+
                '<td class="pd">'+res[i].email+'</td>'+
                '<td class="pd">'+res[i].mobile_no+'</td>'+
                '<td class="pd">'+res[i].totalamt+'</td>'+
                '<td class="pd">'+res[i].paidamt+'</td>'+
                '<td class="pd">'+res[i].remainamt+'</td>'+
                '<td class="pd">'+gen+'</td>'+
                // '<td class="pd">'+res[i].fkEnquiryTypeId+'</td>'+
                '<td class="pd">'+enquiry+'</td>'+

        
                
                '</tr>';
                // a++;
            }
            $('#showUserByFeeStatus').html(html);
    $('#example').dataTable();


                }

            });


        });

    });

</script>

