var a=false;
$(document).ready(function(){
$("#btn_save").click(function(){
  if(a==false){
    
    saveperform();
   }
  }); 
});


 function saveperform() 
{ 
    var username=$('#username').val();
    var email=$('#email').val();
    var password=$('#password').val();
    var cpwd=$('#cpwd').val();
    

    var userId=$('#userId').val();
  
    var pat1=/^\d{6}$/;
var pattern=/^\d{10}$/;
var filter=/^([a-z A-Z 0-9 _\.\-])+\@(([a-z A-Z 0-9\-])+\.)+([a-z A-z 0-9]{3,3})+$/;

    if(username==""|| password=="" ) 
    {
      swal({
        title:"",
        text:"Please Enter Required Fields.",
        type:"error",           
    });
      
  }
  else if(!filter.test(email))
  {
    swal({
      title:"",
      text:"Please Enter Valid Email.",
      type:"error",           
  });
    
}



    else
    {
    	if(userId>0)
    	{
      //       a=true;
    	
    		// $.ajax({
      //   url:base_path+"Country/updateCountry",
      //   type: "POST",
      //   data: $('#Form').serialize(),
      //    beforeSend: function(){
      //          $('#btn_save').prop('disabled', true);
      //          $('#btn_save').html('Loading');
      //     }, 
      //   success: function(data) {
      //      $('#btn_save').prop('disabled', false);
      //      $('#btn_save').html('<img src="'+base_path+'assets/images/save.png" width="21"> Save');
             
      //       swal({
      //       title:"",
      //       text:"Data Submitted Successfully",
      //       type:"success",
      //       showCancelButton: true, 
      //       showConfirmButton: false,
      //       timer:10000
      //   }); a=false;
      //       window.location.href = base_path+"Country";
      //     }
      // });
    	}
        else
    	{a=true;
    		
    		$.ajax({
        url:base_path+"Register/insertUser",
        type: "POST",
        data: $('#Form').serialize(),
         beforeSend: function(){
               $('#btn_save').prop('disabled', true);
               $('#btn_save').html('Loading');
          }, 
        success: function(data) {
           console.log(data);
            $('#btn_save').prop('disabled', false);
           $('#btn_save').html('Save');
             $("#Form").trigger("reset");

             swal({
              title:"",
              text:"Data Submitted Successfully",
              type:"success",
              showCancelButton: false, 
              showConfirmButton: false,
              width: '1000px',
              timer:1000
          });
          

        //   setTimeout(function() {
        //     $('#myModalReg').modal('hide');
        // }, 1500);
            window.location.href = base_path+"Login";

           a=false;

                }
      });
    	}
      }
 }
