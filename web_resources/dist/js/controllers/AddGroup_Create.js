var a=false;
$(document).ready(function(){
$("#btn_save").click(function(){
    // alert("hi");
  if(a==false){
    
    saveperform();
   }
  }); 
});

$('#cancel').click(function(){
  $('#Form')[0].reset();
  location.reload();
});

 function saveperform() 
{ 
    var groupname=$('#groupname').val();
    var groupid =$('#groupid').val();

    if(groupname=="") 
    {
      // alert("requird");
        swal({
        title:"",
        text:"Please Enter Required Fields",
        type:"error",           
    });   
  }
    else
    {
    	if(groupid >0 )
    	{
        // alert('this is updation');
            a=true;
            var form = $("#Form").closest("form");
            var formData = new FormData(form[0]);
    	
    		$.ajax({
        
        url:base_path+"AddGroup/updateGroup",
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
          console.log(data);
           $('#btn_save').prop('disabled', false);
           $('#btn_save').html('Save');
             
            swal({
            title:"",
            text:"Data Updated Successfully",
            type:"success",
            showCancelButton: true, 
            showConfirmButton: false,
            timer:2000
        }); a=false;
            window.location.href = base_path+"AddGroup";
          }
      });
    	}
        else
    	{a=true;

      var form = $("#Form").closest("form");
      var formData = new FormData(form[0]);
    		
    		$.ajax({
        url:base_path+"AddGroup/insertGroup",
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

            $('#btn_save').prop('disabled', false);
           $('#btn_save').html('Save');
             $("#Form").trigger("reset");
             

             // alert("hi");
          swal({
            title:"",
            text:"Data Submitted Successfully",
            type:"success",
            showCancelButton: false, 
            showConfirmButton: false,
             width: '1000px',
            timer:1000
        });
           
           a=false;
           window.location.href = base_path+"AddGroup/create";

                }
      });
    	}
      }
    
 }
