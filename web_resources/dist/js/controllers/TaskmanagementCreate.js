var a=false;
$(document).ready(function(){
$("#btn_save").click(function(){
    // alert("hi");
  if(a==false){
    
    saveperform();
   }Taskmanagement
  }); 
});


 function saveperform() 
{ 
    var taskname=$('#taskname').val();
    var fktaskTypenameId1=$('#fktaskTypenameId1').val();
    var fktaskTypenameId2=$('#fktaskTypenameId2').val();
    var employeename=$('#employeename').val();
    var workhours=$('#workhours').val();
   

    
    var taskId=$('#taskId').val();


    if(taskname==""|| fktaskTypenameId1==""||fktaskTypenameId2==""||employeename==""||workhours=="") 
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
    	if(taskId>0 )
    	{
            a=true;
            var form = $("#Form").closest("form");
            var formData = new FormData(form[0]);
    	
    		$.ajax({
        url:base_path+"Taskmanagement/updatetask",
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
            window.location.href = base_path+"Taskmanagement";
          }
      });
    	}
        else
    	{a=true;

        
      var form = $("#Form").closest("form");
      var formData = new FormData(form[0]);
    		
    		$.ajax({
        url:base_path+"Taskmanagement/inserttask",
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
             document.getElementById("profile-img-tag1").src = "";
             document.getElementById("profile-img-tag2").src = "";
             document.getElementById("profile-img-tag3").src = "";
             document.getElementById("profile-img-tag4").src = "";
             document.getElementById("profile-img-tag5").src = "";

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

                }
      });
    	}
      }
 }
