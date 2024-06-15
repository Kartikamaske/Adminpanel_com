

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
                                <h2 class="mb-0">&ensp; Group & Status Report</h2>
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
                                <label for="">Status</label>

                                <div class="col-md-3 ">
                                    <select name="" id="statusBygroup" class="form-control" >
                                        <option value="0">--Select Status--</option>
                                        <option value="1">Verified</option>
                                        <option value="2">Not Verified</option>
                                        <option value="3">All</option>

                                    </select>
                                    
                                </div>
                                <div class="col-md-4 mt-2 mt-md-0">
                                    <button class="btn btn-primary"  type="button" name="" id="gr_search">Search</button>
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="table-responsive p-4">
                                    <table class=" table table-striped table-bordered"  id="example1" style="width:100%">
                                        <thead class="table-head-style">
                                            <tr>
                                                <th style="width:7%">O/P</th>
                                                 <th>User Id</th>
                                                <th>User Name</th>
                                               <th>Email Id</th>
                                                <th>Mobile No.</th>
                                                <th>Alternate Mobile No.</th>
                                                <th>Address</th>
                                                <th>Gender</th>
                                                <th>Enquiry For</th>
                                                    
                                            </tr>
                                        </thead>
                                        <tbody id="showUserByGroup">
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <hr>
                            <div class="row my-3 px-3">
                                <div class="col-md-6 ">
                                    <label for="picker1 ">Status </label>   
                                        <div class="d-flex mt-lg-1">
                                            <label class="radio radio-primary">
                                                <input type="radio" name="status" id="active_status" value="1"/>
                                                <span class="pr-1">Active</span><span class="checkmark"></span>
                                            </label>

                                            <label class="radio radio-primary">
                                                <input type="radio" name="status" id="deactive_status" value="0"/>
                                                <span class="pr-1">Deactive</span><span class="checkmark"></span>
                                            </label>
                                        </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="table-responsive p-4">
                                    <table class="display table table-striped table-bordered" id="example2" style="width:100%">
                                        <thead class="table-head-style">
                                            <tr>
                                                <th style="width:7%">O/P</th>
                                                <th>User Id</th>
                                                <th>User Name</th>
                                                <th>Email Id</th>
                                                <th>Mobile No.</th>
                                                <th>Alternate Mobile No.</th>
                                                <th>Address</th>
                                                <th>Gender</th>
                                                <th>Enquiry For</th>
                                                    
                                            </tr>
                                        </thead>
                                        <tbody id="showUserByStatus">

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        <!-- </div> -->
    <!-- </div> -->
</div>
                  

<script  src="<?php echo base_url(); ?>web_resources/dist/js/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>


    

<script>
 $(document).ready(function(){

    $("#gr_search").click(function(){
            //here we will run an ajax request
            var groupid = $('#groupid').val();  //selected country id
           var status= $('#statusBygroup').val();

            // alert(status);

            $.ajax({

                url:"<?php echo base_url();?>GroupStatusReport/UserByGroupid",
                method: "POST",

                data:{'groupid':groupid,'status':status},
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
                '<td class="pd">'+res[i].mobile_no2+'</td>'+
                '<td class="pd">'+res[i].address+'</td>'+
                '<td class="pd">'+gen+'</td>'+
                // '<td class="pd">'+res[i].fkEnquiryTypeId+'</td>'+
                // '<td class="pd">'+res[i].enquirytype+'</td>'+
                '<td class="pd">'+enquiry+'</td>'+

        
                
                '</tr>';
                // a++;
     }
            $('#showUserByGroup').html(html);
    $('#example1').dataTable();


                }
            });


        });
    });

</script>



<script>

$(document).ready(function() {

    $('#active_status').change(function(name){

        var act_status= $('#active_status').val();
        
                // alert(act_status);
                $.ajax({

            url:"<?php echo base_url();?>GroupStatusReport/activeUser",
            method: "POST",

            data:{'act_status':act_status},
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
            '<td class="pd">'+res[i].mobile_no2+'</td>'+
            '<td class="pd">'+res[i].address+'</td>'+
            // '<td class="pd">'+res[i].gender+'</td>'+
            // '<td class="pd">'+res[i].fkEnquiryTypeId+'</td>'+
                '<td class="pd">'+gen+'</td>'+
                '<td class="pd">'+enquiry+'</td>'+




            '</tr>';
            // a++;
            }
            $('#showUserByStatus').html(html);
            $('#example2').dataTable();


            }
            });
    });


    $('#deactive_status').change(function(name){

var deact_status= $('#deactive_status').val();
        // alert(deact_status);
        $.ajax({

    url:"<?php echo base_url();?>GroupStatusReport/deactiveUser",
    method: "POST",

    data:{'deact_status':deact_status},
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
    '<td class="pd">'+res[i].mobile_no2+'</td>'+
    '<td class="pd">'+res[i].address+'</td>'+
    // '<td class="pd">'+res[i].gender+'</td>'+
    // '<td class="pd">'+res[i].fkEnquiryTypeId+'</td>'+
        '<td class="pd">'+gen+'</td>'+
        '<td class="pd">'+enquiry+'</td>'+


    '</tr>';
    // a++;
    }
    $('#showUserByStatus').html(html);
    $('#example2').dataTable();


    }
    });
});

});

</script>


<script>
	$(document).ready(function() {

    // $('#example1').dataTable();
    // $('#example2').dataTable();
 
    
} );


</script>   



