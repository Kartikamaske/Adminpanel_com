<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
     <!-- Latest compiled and minified CSS -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<div class="container">

<form action="">
<div class="row">
            <div class="col-md-12">
              
                <div class="form-group">
                    <label for="">GroupType</label>
                    <!-- <input type="text" name="name" id="name" value="" class="form-control"> -->
                    <select class="form-select form-" id="groupname" name="groupname">
                                <option>select group</option>
                                <!-- <option>2</option>
                                <option>3</option>
                                <option>4</option> -->

                                <?php 
                                if(!empty($group)){
                                    foreach($group as $value){
                                        ?>
                                        <option value="<?php echo $value['groupid'];?>"><?php echo $value['groupname'];?></option>
                                        <?php
                                    }
                                }
                            ?>


                         </select>

                </div></br>

                <div class="form-group">
                    <label for="">Select User</label>
                    <input type="text" name="selectuser" id="selectuser" value="" class="form-control">
                  
                </div></br>

                <div class="form-group">
                    <label for="">Task Type</label>
                    <input type="text" name="tasktype" id="tasktype" value="" class="form-control">
                    
                </div></br>

            </div>
     </div>


</form>


</div>



    <!-- jquery CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>

<script>

$(document).ready(function(){
    $("#name").change(function(){
        //here we will run an ajax request
        var groupType = $(this).val();  //selected country id

        alert(groupType);

        $.ajax({

            url:"<?php echo base_url();?>GroupType/selectUser",
            method: "POST",

            data:{'groupid':groupid},
            dataType: 'json',
            success: function(response){

                // console.log(response);
                
                if(response['states']){

                    $("#statesBox").html(response['states']);
                }


            }
        });


    });

  

    $(document).on("change","#state",function(){
        var state_id = $(this).val(); 

        // alert(state_id);

        $.ajax({
            url:"<?php echo base_url();?>GGrouptype/getCities",

            type: "POST",
            data:{'state_id':state_id},
            dataType: 'json',
            success: function(response){
                // console.log(response);

                if(response['cities']){
                    $("#citiesBox").html(response['cities']);
                }


            }
        });
    });

});


</script>


</body>
</html>