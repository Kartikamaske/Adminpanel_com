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
    var taskname=$('#taskname').val();
    var IndivisualtaskId=$('#IndivisualtaskId').val();


    // var toastMixin = Swal.mixin({
    //   toast: true,
    //   icon: 'success',
    //   title: 'General Title',
    //   animation: false,
    //   position: 'center',
    //   showConfirmButton: false,
    //   timer: 3000,
    //   timerProgressBar: true,
    //   didOpen: (toast) => {
    //     toast.addEventListener('mouseenter', Swal.stopTimer)
    //     toast.addEventListener('mouseleave', Swal.resumeTimer)
    //   }
    // });

    // alert(IndivisualtaskId);


    if(taskname=="") 
    {
      // alert("requird");
        swal({
        title:"",
        text:"Please Enter Required Fields",
        type:"error",           
    });   

    // toastMixin.fire({
    //   title: 'Please Enter Required Fields',
    //   icon: 'error'
    // });


  }

    else
    {
    	if(IndivisualtaskId>0 )
    	{
            a=true;
            var form = $("#Form").closest("form");
            var formData = new FormData(form[0]);
    	
    		$.ajax({
        url:base_path+"Indivisualtask/updatetask",
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
        }); 
        
        // setTimeout(() => {

        //   window.location.href = base_path+"Indivisualtask";

        // }, 2000);
        
        
        a=false;

            window.location.href = base_path+"Indivisualtask";
          }
      });
    	}
        else
    	{a=true;

        
      var form = $("#Form").closest("form");
      var formData = new FormData(form[0]);
    		
    		$.ajax({
        url:base_path+"Indivisualtask/inserttask",
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

              //  for remove data after submit code
               $('#taskname').val('').trigger('change');
              
            //  alert("hi");
          swal({
            title:"",
            text:"Data Submitted Successfully",
            type:"success",
            showCancelButton: false, 
            showConfirmButton: false,
             width: '1000px',
            timer:2000
        });

        // toastMixin.fire({
        //   animation: true,
        //   title: 'Signed in Successfully'
        // });


           
           a=false;
           
           setTimeout(() => {

            window.location.href = base_path+"Indivisualtask";
  
          }, 2000);

                }
      });
    	}
      }
 }
