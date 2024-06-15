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
    var employee_name=$('#employee_name').val();
    var mob_no=$('#mob_no').val();
    var gender=$('#gender').val();
    var address=$('#address').val();
    var birthdate=$('#birthdate').val();
    var age=$('#age').val();
    var photo=$('#photo').val();
    var country=$('#country').val();
    var state=$('#state').val();
    var city=$('#city').val();
    var cast=$('#cast').val();
    var subcast=$('#subcast').val();
    var department=$('#department').val();
    var branch=$('#branch').val();
    var aadhar_no=$('#aadhar_no').val();
    var aadhar_photo=$('#aadhar_photo').val();
    var pincode=$('#pincode').val();
    var qualification=$('#qualification').val();
    var employee_type=$('#employee_type').val();
    var blood_group=$('#blood_group').val();
    var email=$('#email').val();
    

    


    if(employee_name==""|| mob_no==""|| gender==""||  address==""||  birthdate==""||  age==""|| photo==""|| country==""||  state==""||  city==""||  cast==""|| subcast==""|| department==""||  branch==""||  aadhar_no==""||  aadhar_photo==""|| pincode==""|| qualification==""||  employee_type==""||  blood_group==""||  email=="") 
    {
        alert("requird");
        swal({
        title:"",
        text:"Please Enter Required Fields",
        type:"error",           
    });   
  }

    // else
    // {
    // 	if(userId>0)
    	// {
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
    	// }
        else
    	{a=true;
    		
    		$.ajax({
        url:base_path+"Employee2/insertEmployee",
        type: "POST",
        data: $('#Form').serialize(),
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
           $('#Form').parsley().destroy();
           $('#Form').parsley();
           a=false;

                }
      });
    	}
      }
 // }
