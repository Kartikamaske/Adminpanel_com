<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>Assets/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>Assets/select2.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>Assets/multiselect.css">

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

    .select2-container--default.select2-container--focus .select2-selection--multiple:focus{
      border:#5a14c9!important;
      box-shadow: 0 0 0 0.2rem #9d89b5!important;
    }
</style>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">

  <link rel="stylesheet" type="text/css" href="<?=base_url();?>Assets/css/loader.min.css">
  
   <!-- Start preloader -->
   <div id="preloader">
        <div id="ctn-preloader" class="ctn-preloader">
            <div class="animation-preloader">

                <img src="<?=base_url();?>Assets\images\loader.svg" alt="">
               
            </div>

            <div class="loader-section section-left"></div>
            <div class="loader-section section-right"></div>
        </div>
    </div>
    <!-- End preloader -->

        <!-- =============== Left side End ================-->
<div class="main-content-wrap sidenav-open d-flex flex-column">
          <!-- ============ Body content start ============= -->
  <div class="main-content">
    <div class="breadcrumb"></div>

      <div class="form-row mt-4">
        <div class="col-md-12">
          <div class="card mb-4 card-style">
            <div class="card-title"><h3>&ensp;Task Assign Management</h3></div>
            <div class="card-body">
              <form role="form" id="Form" enctype="multipart/form-data" action="#" method="post">

                <input type="hidden" class="form-control" id="taskassignId" placeholder="" name="taskassignId" value="<?php if(!empty($taskassignId)){echo $taskassignId;}?>">
                  <div class="form-row">
                    <div class="col-12 col-sm-12 col-lg-12 col-md-12">
                      <div class="mb-3" id="usertypeBox">
                        <label for="Grouptype">Group Name</label>
                        <select class="select2 form-control form-control-sm" multiple id="grouptypeid" name="grouptypeid[]" style="width: 100%;"> 

                          <?php

                            foreach ($getgroup as $key => $TTtype) {
                              $selected="";
                              // foreach ($dataa as $key => $value) {
                              //   if($TTtype->registrationId ==$value->fkuserId)
                              //   {$selected ="selected=selected";}
                              // }
                              
                                echo '<option value="'.$TTtype->groupid.'"'.$selected.' >'.$TTtype->groupname.'</option>';

                            }


                            // foreach ($TTtype as $key => $TTtype) {
                            //   $selected="";
                            //   foreach ($dataa as $key => $value) {
                            //     if($TTtype->groupid ==$value->fkgroupId)
                            //       {$selected ="selected=selected";}
                            //     }
                            //     echo '<option value="'.$TTtype->groupid.'"'.$selected.' >'.$TTtype->groupname.'</option>';

                            // }
                          ?>

                        </select> 
                      </div>
                    </div>
                    <div class="col-12 col-sm-12 col-lg-12 col-md-12">
                      <div class="mb-3">
                        <label for="selectuser">Select User</label>
                        <select class="select2 form-control form-control-sm" multiple id="selectuserid" name="selectuserid[]" style="width: 100%;"> 
                          <?php
                            foreach ($Stype as $key => $Stype) {
                              $selected="";
                              foreach ($dataaa as $key => $value) {
                                if($Stype->registrationId ==$value->fkuserId)
                                {$selected ="selected=selected";}
                              }
                              echo '<option id="DropDownUser" value="'.$Stype->registrationId.'"'.$selected.' >'.$Stype->fname.'</option>';
                            }
                          ?>
                        </select> 
                      </div>
                    </div>
                  </div> 
                  <div class="row">
                    <div class=" col-md-6">
                      <label for="Tagname">Task Type</label>
                      <select class="select2 form-control form-control-sm" multiple  id="tasktypeid" name="tasktypeid[]" style="width: 100%;"> 
                        <?php
                          foreach ($STtype as $key => $STtype) {
                            $selected="";
                            if(!empty($tasktypeName)){
                              for ($i=0; $i <count($tasktypeName) ; $i++) { 
                                if($STtype->tasktypeid ==$tasktypeName[$i]->tasktypeid)
                                {$selected ="selected=selected";}
                              }
                            }
                            echo '<option value="'.$STtype->tasktypeid.'"'.$selected.' >'.$STtype->tasktypename .'</option>';
                          }
                        ?>
                      </select> 
                    </div>
                    <div class="col-md-6">
                      <button id="search" type="button" class="btn" style="margin-top:26px;background-color: #d41574;color:white">Search</button>
                    </div>
                  </div><br>
                  <table class="table table-bordered m-0 text-center" id="tableItems" style="vertical-align: middle;"> 
                  <thead style="background-color: #454f58; color: white!important;  ">
                    <tr class="family_member">
                      <th style="width:5%;" >Action</th>
                      <th>Task ID</th>
                      <th style="width:20%;">Task list</th>
                      <th>Task Type</th>
                    </tr>
                  </thead>
                  <tbody id="tabledata">
                    <?php 
                      $i=1;
                      if (!empty($dataa)) {
                        foreach($itemsa as $rw=>$value){
                          echo "<tr>";

                                // echo "<td style='font-size:16px;color:black;font-family: 'Poppins';padding: 0px 5px!important;'>".$i."</td>";

                                // echo '<td><input type="checkbox" id="chkbox'+i+'" value="1" onclick="mycheck('+i+')"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="hidden" class="checktask" id="inputchk'+i+'" name='".$value->fkcheck."' id='".$value->fkcheck."' value='".$value->fkcheck."'></td>';

                                // condition for only checked input update 
                                        $a='';
                                        if($value->fkcheck==1){
                                          $a='checked';
                                        }

                          echo "<td><input type='checkbox' ".$a." id='chkbox".$i. "' value='".$value->fkcheck. "' onclick='mycheck(".$i. ")'> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type='hidden' class='checktask'  name='checktask[]' id='inputchk".$i. "' value='".$value->fkcheck. "'></td>";

                                // echo '<td><input type="checkbox" name="selected[]" value="' .$value->fkcheck. '" ';
                                //   echo $isSelected ? 'checked' : '';
                                //   echo '></td>';


                                // echo "<td style='padding: 0px 5px!important;font-size:16px;color:black;font-family: 'Poppins';'><input class='form-control addinput fkcheck' style='font-family: 'Poppins';'  readonly type='checkbox' name='fkcheck' id='fkcheck' value='".$value->fkcheck."'></td>";

                          echo "<td style='padding: 0px 5px!important;font-size:16px;color:black;font-family: 'Poppins';'><input class='form-control addinput fktaskID' style='font-family: 'Poppins';'  readonly type='text' name='fktaskID[]' id='fktaskID' value='".$value->fktaskID."'></td>";
                                
                          echo "<td style='padding: 0px 5px!important;font-size:16px;color:black;font-family: 'Poppins';'><input class='form-control addinput fktasklist' style='font-family: 'Poppins';'  readonly type='text' name='task_list[]' id='task_list[]' value='".$value->fktasklist."'></td>";
                                
                          echo "<td style='padding: 0px 5px!important;font-size:16px;color:black;font-family: 'Poppins';'><input class='form-control addinput tasktypename' style='font-family: 'Poppins';'  readonly type='text' name='task_type[]' id='task_type' value='".$value->fktasktype."'></td>";
                          
                          echo "</tr>";
                          $i++;
                        }
                      }

                    ?>
                  </tbody>
                </table><br>
                <div class="col-md-12 text-right">
                  <button class="btn" type="button" name="btn_save" id="btn_save" style="background-color: #d41574;color:white"><i class="fa-solid fa-book"></i> Submit</button>

                  <button class="btn btn-primary text-white" type="button" name="cancle" id="cancle">
                    <a href="<?=base_url() ?>Grouptype" class="text-white"><i class="fa-solid fa-pen-to-square"></i> Edit </a> </button>
                </div>
              </div>
                    
                      
                    <!-- </div></div></div> -->

        </form>
      

<script  src="<?php echo base_url('web_resources');?>/dist/js/jquery.min.js"></script>          
<script  src="<?php echo base_url('web_resources');?>/dist/js/controllers/groupCreate.js"></script>
                 
                     
<script src="<?php echo base_url();?>Assets/jquery-3.3.1.min.js"></script>
<script src="<?php echo base_url();?>Assets/select2.min.js"></script>
<script src="<?php echo base_url();?>Assets/select2.init.js"></script>

<script type="text/javascript">

$(document).ready(function(){
    $(".js-example-tags").select2({
tags: true
});
});


$(document).ready(function(){
  var id = $('#taskassignId').val();

});
</script>







<!-- for table show -->
<script>
 $(document).ready(function(){
        $("#search").click(function(){
            //here we will run an ajax request
            
            var taskid = $('#tasktypeid').val();    //selected country id
            // var taskname = $('#tasktypename').val();
            // var edate = $('#edate').val();

            // alert(taskid);

            $.ajax({

                url:"<?php echo base_url();?>Grouptype/gettaskbyID",
                method: "POST",

                data:{'taskid':taskid
                // 'tasktypename':taskname,
                // 'edate':edate,
                },
                // dataType: 'json',
                dataType:'JSON',
                success: function(res){
                    // alert('hello');
                    // console.log("result",res);

                var html='';
               var a=1;
               var i;
               for(i=0; i<res.length; i++){
               

                html +='<tr>'+
                // '<td class="pd"><input type="checkbox" name="checktask[]" value="checked" checked></td>'+

                '<td><input type="checkbox" id="chkbox'+i+'" value="1" onclick="mycheck('+i+')"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="hidden" class="checktask" id="inputchk'+i+'" value="0" name="checktask[]"></td>'+

                // '<td><input type="hidden" name="fktaskID[]" value="'+a+'">'+a+'</td>'+

                '<td><input type="hidden" name="fktaskID[]" value="'+res[i].taskId+'">'+res[i].taskId+'</td>'+

               '<td><input type="hidden" name="task_list[]" value="'+res[i].taskname+'">'+res[i].taskname+'</td>'+

               '<td><input type="hidden" name="task_type[]" value="'+res[i].tasktype+'">'+res[i].tasktypename+'</td>'+

                // '<td class="pd">'+a+'</td>'+
                // '<td class="pd">'+res[i].taskname+'</td>'+
                // '<td class="pd">'+res[i].tasktypename+'</td>'+
               
                
                '</tr>';
                a++;
     }
            $('#tabledata').html(html);

                }
            });


        });
    });


     function mycheck(p){
      
    if($("#chkbox" +p).is(':checked')){
     $('#inputchk'+p).val(1);
     // Code in the case checkbox is checked.
    } else {  
      $('#inputchk'+p).val(0);
     // Code in the case checkbox is NOT checked.
    }

    }
     </script>   


<!-- for multiple dropdown dependancy ajax code -->
<script>

$(document).ready(function(){
  $("#selectuserid").empty();
    $("#grouptypeid").change(function(){
        //here we will run an ajax request
        var grouptypeid = $(this).val();  //selected country id

        // alert(country_id);

        if(grouptypeid==""||grouptypeid==null){
          // alert("hi");
          $('#selectuserid').empty();
          // $('#selectuserid').hide();
          $("#DropDownUser").val('');
          $("#DropDownUser").html("");
         
        }
  else{
        $.ajax({

            url:base_path+"Grouptype/selectuser",
            method: "POST",

            data:{'grouptypeid':grouptypeid},
            // dataType: 'json',
            success: function(data){

                $('#selectuserid').empty();
                var xys=JSON.parse(data);
                
                var result='';
                for(i=0;i<xys.length;i++){
                    result+='<option value="'+xys[i]['registrationId']+'" selected>'+xys[i]['fname']+'</option>';

                }
                // console.log(result);
                $('#selectuserid').append(result);
                


            }
        });
      }


    });

  

    // $(document).on("change","#selectuserid",function(){
    //     var state_id = $(this).val(); 

    //     // alert(state_id);

    //     $.ajax({
    //         url:"<?php echo base_url();?>HomGrouptypee/getCities",

    //         type: "POST",
    //         data:{'state_id':state_id},
    //         dataType: 'json',
    //         success: function(response){
    //             // console.log(response);

    //             // if(response['cities']){
    //             //     $("#citiesBox").html(response['cities']);
    //             // }


    //         }
    //     });
    // });

});


</script>

               

                   

                    

                    

             

    















