var a=false;
$(document).ready(function(){
  
$("#btn_save").click(function(){
    // alert("hi");
  if(a==false){
    // alert(registrationId)
    saveperform();

   }
  });


  $('#cancel').click(function(){
    $('#Form')[0].reset();
    location.reload();
});

});


 function saveperform() 
{ 
  
// alert('hh')
    var fname=$('#fname').val();
    var email=$('#email').val();
    var expr = /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;
    var mobile=$('#mobile').val();
    var enquirytype=$('#enquirySelect option:selected').val();
    var registrationId=$('#registrationId').val();
    var fkgroupid=$('#fkgroupid').val();
    
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
  }else if($("#gender:checked").length > 1 || $("#gender:checked").length == 0){

    // alert("hii");
    swal({
      title:"",
      text:"Please Select Your Gender",
      type:"error",           
  });  
}
else 
if( enquirytype == null || enquirytype == 0){

  // alert("hii");
  swal({
    title:"",
    text:"Please Choose Your Enquiry For ",
    type:"error",           
}); 

}
// else 
// if( fkgroupid == null || fkgroupid == 0){

//   // alert("hii");
//   swal({
//     title:"",
//     text:"Please Choose Group Name",
//     type:"error",           
// }); 

// }
  else
    {
    	if(registrationId>0)
    	{
            a=true;
    	
    		$.ajax({
        url:base_path+"UpdateUser/updateUser",
        type: "POST",
        data: $('#Form').serialize(),
        
         beforeSend: function(){
               $('#btn_save').prop('disabled', true);
               $('#btn_save').html('Loading');
          }, 
          
        success: function(data) {
          console.log(data)
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
    
      //   else
    	// {a=true;
    		
    	// 	$.ajax({
      //   url:base_path+"NewRegistration/insertUserDetails",
      //   type: "POST",
      //   data: $('#Form').serialize(),
      //    beforeSend: function(){
      //          $('#btn_save').prop('disabled', true);
      //          $('#btn_save').html('Loading');
               
      //     }, 
      //   success: function(data) {

      //       $('#btn_save').prop('disabled', false);
      //      $('#btn_save').html('Submit');
      //        $("#Form").trigger("reset");

      //        // alert("hi");
      //     swal({
      //       title:"",
      //       text:"Data Submitted Successfully",
      //       type:"success",
      //       showCancelButton: false, 
      //       showConfirmButton: false,
      //        width: '1000px',
      //       timer:1000
      //   });
      //   // location.reload();
           
      //      a=false;

      //           }
      // });
    	// }

      }
 }

 


 $("#fname").on('click',function(){
  // alert("hi");
 
  $("#fname").on('input',function(){

    var fname=$('#fname').val();
  if(fname==""||fname.length <= 6){
// alert('fname empty');
$("#error_fname").html(" <b style='color:red;'>Please enter full name!</b>");
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
$("#error_email").html(" <b style='color:red;'>Please enter valid email id!</b>");
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
    $("#error_mob").html(" <b style='color:red;'>Please enter valid mobile number!</b>");
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
    $("#error_mob2").html(" <b style='color:red;'>Please enter valid mobile number!</b>");
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
