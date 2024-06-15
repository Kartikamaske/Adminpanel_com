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
    var projectName=$('#projectName').val();
    var MarathiName=$('#MarathiName').val();
    var ShortName=$('#ShortName').val();
    var projectstartDate=$('#projectstartDate').val();
    var projectendDate=$('#projectendDate').val();
   

    
    var projectId=$('#projectId').val();


    if(projectName==""|| projectstartDate==""||projectendDate==""||MarathiName==""||ShortName=="") 
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
    	if(projectId >0 )
    	{
            a=true;

            var form = $("#Form").closest("form");
            var formData = new FormData(form[0]);
    	
    		$.ajax({
        url:base_path+"Project/updateProject",
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
            window.location.href = base_path+"Project";
          }
      });
    	}
        else
    	{a=true;

        
      var form = $("#Form").closest("form");
      var formData = new FormData(form[0]);
    		
    		$.ajax({
        url:base_path+"Project/insertProject",
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

             //for remove data after submit code
             $('#fktagId').val('').trigger('change');
             $('#fkprojectTypenameId').val('').trigger('change');
             $('#fkprojectTypenameId2').val('').trigger('change');
             $('#fkprojectTypenameId2').val('').trigger('change');
             $('#fkprojectTypenameId3').val('').trigger('change');
             $('#fkprojectTypenameId4').val('').trigger('change');
             $('#fkprojectTypenameId5').val('').trigger('change');
             $('#fkprojectTypenameId6').val('').trigger('change');
             $('#fkprojectTypenameId7').val('').trigger('change');

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
 }
