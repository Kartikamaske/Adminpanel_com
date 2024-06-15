var a=false;
$(document).ready(function(){
$("#btn_start").click(function(){
    // alert("hi");
  if(a==false){
    
    saveperform();
   }
  }); 


 function saveperform() 
{ 
    var registrationId =$('#registrationId').val();
// alert(registrationId)
  
        a=true;
        var startdate=$('#startdate').val();
        var attendId=$('#attendId').val();

      var form = $("#Form").closest("form");
      var formData = new FormData(form[0]);
    		
    $.ajax({
        url:base_path+"Attendance/insertAttendance",
        type: "POST",
        data:formData,
        // dataType:'json',
        processData: false,
        contentType: false,

        // data: $('#Form').serialize(),
         beforeSend: function(){
               $('#btn_start').prop('disabled', true);
              //  $('#btn_start').html('Loading');
          }, 
        success: function(res) {
          console.log(res);
            $('#btn_start').prop('disabled', false);
            
          //  $('#btn_end').html('');
            //  $("#Form").trigger("reset");

             // alert("hi");

              if(res==1){
                
                swal({
                  title:"",
                  text:"You are Already started",
                  type:"warning",
                });
                $('#btn_start').prop('disabled', true);
              }else{
                swal({
                  title:"",
                  text:"Your Work Started... Have A Nice Day!!",
                  type:"success",
                  showCancelButton: false, 
                  showConfirmButton: false,
                   width: '1000px',
                  timer:1000
                });
                $('#btn_start').prop('disabled', true);
                $('#btn_start').html('Attendance Started');
              }
           a=false;
          //  window.location.href = base_path+"Attendance";

                }
    });
    }
// }
    
//  }



$("#btn_end").click(function(){
  // alert("hi");
if(a==false){
  
  updateperform();
 }
}); 
});

function  updateperform(){
  // alert("this is updated");

  var attendId=$('#attendId').val();

  if(attendId>0){
    // alert(attendId);
    a=true;
            var form = $("#Form").closest("form");
            var formData = new FormData(form[0]);

    $.ajax({
        
            url:base_path+"Attendance/updateAttendance",
            type: "POST",
            data: formData,
            processData: false,
            contentType: false,
            // data: $('#Form').serialize(),
            //  beforeSend: function(){
            //        $('#btn_save').prop('disabled', true);
            //        $('#btn_save').html('Loading');
            //   }, 
            success: function(data) {
              console.log(data);
              //  $('#btn_save').prop('disabled', false);
              //  $('#btn_save').html('Save');
                 
              if(data==1){
                // alert("condition true");
                swal({
                  title:"",
                  text:"You are successfully ended",
                  type:"success",
                  showCancelButton: true, 
                  showConfirmButton: false,
                  timer:2000
                });
                
              }
              else{
                // alert("condition false");

                swal({
                  title:"",
                  text:"You are already ended",
                  type:"warning"
                  
                });

              }
               
            a=false;
                // window.location.href = base_path+"AddGroup";
              }
          });

  }

}





    