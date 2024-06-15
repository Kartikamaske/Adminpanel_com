var a=false;
$(document).ready(function(){
$("#btn_save").click(function(){
    // alert("hi");
  if(a==false){
    
    saveperform();
   }
  }); 
});


 function saveperform() 
{ 
    // var projectName=$('#projectName').val();
    // var MarathiName=$('#MarathiName').val();
   
   

    
    var taskassignId=$('#taskassignId').val();


  
    
    	if(taskassignId >0 )
    	{
            a=true;

            var form = $("#Form").closest("form");
            var formData = new FormData(form[0]);
    	
    		$.ajax({
        url:base_path+"Grouptype/updategroup",
        type: "POST",
        data: formData,
        processData: false,
        contentType: false,
        // data: $('#Form').serialize(),
         beforeSend: function(){
               $('#btn_save').prop('disabled',true);
               $('#btn_save').html('Loading');
          }, 
        success: function(data) {
          console.log(data);
           $('#btn_save').prop('disabled',false);
           $('#btn_save').html('Save');
             
            swal({
            title:"",
            text:"Data Updated Successfully",
            type:"success",
            showCancelButton: true, 
            showConfirmButton: false,
            timer:2000
        });

         a=false;
            window.location.href = base_path+"Grouptype";
          }
      });
    	}
        else
    	{
        a=true;

        
      var form = $("#Form").closest("form");
      var formData = new FormData(form[0]);
    		
    		$.ajax({

        url:base_path+"Grouptype/insertProject",
        type: "POST",

        data: formData,
        processData: false,
        contentType: false,

        // data: $('#Form').serialize(),
         beforeSend: function(){
               $('#btn_save').prop('disabled', true);
               $('#btn_save').html('Loading');
          }, 
        success: function(data) {

          console.log("result",data);

                
            $('#btn_save').prop('disabled', false);
           $('#btn_save').html('Save');
             $("#Form").trigger("reset");

             //for remove data after submit code
             $('#grouptypeid').val('').trigger('change');
             $('#selectuserid').val('').trigger('change');
             $('#tasktypeid').val('').trigger('change');
             $('#fkcheck').val('').trigger('change');
             $('#fktaskID').val('').trigger('change');
             $('#fktasklist').val('').trigger('change');
             $('#tasktypename').val('').trigger('change');
             $('#tabledata').empty();

             
            //  for image remove after sumbit
            //  document.getElementById("profile-img-tag1").src = "";

            //  alert("hi");
          swal({
            title:"",
            text:"Data Submitted Successfully",
            type:"success",
            showCancelButton: false, 
            showConfirmButton: false,
             width:'1000px',
            timer:1000
        });
           
           a=false;
          //  window.location.href = base_path+"Project/create";


                }
      });
    	}
      
 }


 // extra code


//  $(document).on("change","#selectuserid",function(){
//   var state_id = $(this).val(); 

//   // alert(state_id);

//   $.ajax({
//       url:"<?php echo base_url();?>HomGrouptypee/getCities",

//       type: "POST",
//       data:{'state_id':state_id},
//       dataType: 'json',
//       success: function(response){
          // console.log(response);

          // if(response['cities']){
          //     $("#citiesBox").html(response['cities']);
          // }


  //     }
  // });
// });



 
// function readimage(input,valueid) {
//                                           // alert("hello");
//     if (input.files && input.files[0]) {
//       var reader = new FileReader();
//        reader.onload = function (e) {
//        $('#'+valueid+'').attr('src',e.target.result);
//       }
//       reader.readAsDataURL(input.files[0]);
//   }
// }  



//  <script type="text/JavaScript">
    // function validation() {
      // var user = document.getElementById('projectName').value;  //value fetch
       
      // var user1 = document.getElementById('MarathiName').value; 

      // var user2 = document.getElementById('ShortName').value; 
      

      // if(user== ""){
      //   document.getElementById('username').innerHTML =" ** Please fill the Project name field"; //username fill form span here
      //   return false;
      // }


      // // conditions
      // else if((user.length <=2) || (user.length >20)){      
      //   document.getElementById('username').innerHTML =" ** user length must be in between 2 to 20"; 
      //   return false;

      // }
      
      // else if(!isNaN(user)){
      //   document.getElementById('username').innerHTML =" ** only characters are allow"; 
      //   return false;

      // }

      // else if(user1== ""){
      //   document.getElementById('username1').innerHTML =" ** Please fill the Project marathi name field"; 
      //   return false;
      // }

      // else if(user2== ""){
      //   document.getElementById('username2').innerHTML =" ** Please fill the Project short name field"; 
      //   return false;
      // }

      // else{

      //   //  alert("Form Submited Successfully");
        
      // }
      
      // $('#btn_submit').click(function(){
      //   document.getElementById('#sub').innerHTML = " success";
      // })
    // }

  // </script>