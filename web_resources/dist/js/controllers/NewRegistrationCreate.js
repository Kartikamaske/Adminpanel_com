var a=false;
$(document).ready(function(){
  
$("#btn_save").click(function(){
    // alert("hi");
  if(a==false){
    
    saveperform();

   }
  //  location.reload();

  });


  $('#cancel').click(function(){
    $('#Form')[0].reset();
    location.reload();
});

});


 function saveperform() 
{ 
    var fname=$('#fname').val();
    var email=$('#email').val();
    var expr = /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;
    var mobile=$('#mobile').val();
    var enquirytype=$('#enquirySelect option:selected').val();
    var registrationId=$('#registrationId').val();

    
    if(fname==""||fname.length <= 6) 
    {
      // alert("fname required");
        swal({
        title:"",
        text:"Please Enter Your Full Name",
        type:"error",           
    });   
    
  }
  else if(email==""||!expr.test(email)||email==null){

    // alert("hii");
    swal({
      title:"",
      text:"Please Enter Valid Email Id",
      type:"error",           
  });  
  }else if(mobile.length != 10 || isNaN(mobile)||  mobile==""){

    // alert("hii");
    swal({
      title:"",
      text:"Please Enter Valid Mobile Number",
      type:"error",           
  });  
  }
//   else 
//   if($("#gender:checked").length > 1 || $("#gender:checked").length == 0){

//     // alert("hii");
//     swal({
//       title:"",
//       text:"Please Select Your Gender",
//       type:"error",           
//   });  
// }
else 
if( enquirytype == null || enquirytype == 0){

  // alert("hii");
  swal({
    title:"",
    text:"Please Choose Your Enquiry For ",
    type:"error",           
}); 

}

  else
    {
    	if(registrationId>0)
    	{
            a=true;
    	
    		$.ajax({
        url:base_path+"NewRegistration/updateUser",
        type: "POST",
        data: $('#Form').serialize(),
         beforeSend: function(){
               $('#btn_save').prop('disabled', true);
               $('#btn_save').html('Loading');
          }, 
        success: function(data) {
           $('#btn_save').prop('disabled', false);
           $('#btn_save').html('<img src="'+base_path+'assets/images/save.png" width="21"> Save');
             
            swal({
            title:"",
            text:"Data Updated Successfully",
            type:"success",
            showCancelButton: true, 
            showConfirmButton: false,
            timer:1000
        }); a=false;
            window.location.href = base_path+"NewRegistration";
          }
      });
    	}
    
        else
    	{a=true;
    		
    		$.ajax({
        url:base_path+"NewRegistration/insertNewRegister",
        type: "POST",
        data: $('#Form').serialize(),
         beforeSend: function(){
               $('#btn_save').prop('disabled', true);
               $('#btn_save').html('Loading');
               
          }, 
        success: function(data) {

            $('#btn_save').prop('disabled', true);
           $('#btn_save').html('Submitted');
             $("#Form").trigger("reset");
            //  $('#Form')[0].reset();
            // $('#enquirySelect').val('').trigger();

            swal({
              title:"",
              text:"Data Submitted Successfully",
              type:"success",
              showCancelButton: true, 
              showConfirmButton: false,
              timer:1000
          });

             // alert("hi");
       
            //  swal({
            //   title: "Are you sure?",
            //   text: "Do you want to submit your details and go to login page ?",
            //   type: "warning",
            //   showCancelButton: true,
            //   confirmButtonColor: "#DD6B55",
            //   confirmButtonText: "Yes",
            //   cancelButtonText: "No",
            //   closeOnConfirm: false,
            //   closeOnCancel: false, 
            //   timer:50000
              
            // },
            // function(isConfirm){
            //   if (isConfirm) {
            //     swal({
            //       title:"",
            //       text:"Data Submitted Successfully... Wait for admin message...",
            //       type:"success", 
            //       timer:50000
            //     });
            //     window.location.href = base_path+"ComLogin";
            //   } else {
            //     swal({
            //       title:"",
            //       text:"Data Submitted Successfully... Wait for admin message...",
            //       type:"success", 
            //       timer:10000
            //     });
            //   }
            // });

        

        // location.reload();
           
           a=false;
          //  window.location.href = base_path+"ComLogin";

      }
      });
    	}

      }
 }


 $("#fname").on('click',function(){
  // alert("hi");
 
  $("#fname").on('input',function(){

    var fname=$('#fname').val();
  if(fname==""||fname.length <= 6){
// alert('fname empty');
$("#error_fname").html(" <p style='color:red;'>Please enter full name!</p>");
  }
  else{
    $("#error_fname").html(" ");
  }

  });
  
});

$("#email").on('click',function(){

  $('#email').on('input', function() {
  
  var email=$('#email').val();
  var expr = /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;

  if(email==""||!expr.test(email)||email==null){
// alert('email empty');
$("#error_email").html(" <p style='color:red;'>Please enter valid email id!</p>");
  }
  else{
    $("#error_email").html(" ");
  }
});
});


$("#mobile").on('click',function(){

  $('#mobile').on('input', function() {
  var mobile=$('#mobile').val();

  if(mobile.length != 10 || isNaN(mobile)||  mobile==""){
    $("#error_mob").html(" <p style='color:red;'>Please enter 10 digit mobile number!</p>");
  }
  else{
    $("#error_mob").html(" ");
  }
});
});


$("#mobile2").on('click',function(){

  $('#mobile2').on('input', function() {
  // alert("mob2");
  var mobile2=$('#mobile2').val();

  if(mobile2.length != 10 || isNaN(mobile2)||  mobile2==""){
    $("#error_mob2").html(" <p style='color:red;'>Please enter 10 digit mobile number!</p>");
  }
  else{
    $("#error_mob2").html(" ");
  }

});
});


$('#fname').on('blur', function() {
     $("#error_fname").html(" ");
});


$('#email').on('blur', function() {
     $("#error_email").html(" ");
});

$('#mobile').on('blur', function() {
     $("#error_mob").html(" ");
});

$('#mobile2').on('blur', function() {
     $("#error_mob2").html(" ");
});
