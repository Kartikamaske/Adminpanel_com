a=false;
$(document).ready(function(){
    $("#login_link").click(function(){
        if(a==false){
   // alert('login');
   loginform();
}
}); 
});

function loginform(){
    var flag = 0;
    var uname = $('#username').val();
    var password = $('#password').val();
    if (uname == '') {
           document.getElementById("erroruname").innerHTML=" Enter Email.";
           flag = 1;
       }
       if (password == '') {
           document.getElementById("errorpassword").innerHTML=" Enter  password.";
           flag = 1;
       }
       myFunction();
       if (flag == 0) {
   // alert();
                  
      
           $.ajax({

               url: base_path+"ComLogin/login_validation",
               method: 'POST',
               data: $('#Form').serialize(),
               dataType:'json',
               beforeSend: function(){
               $('#login_link').prop('disabled', true);
               $('#login_link').css('color','white');
               $('#login_link').html('<i class="fa fa-spinner fa-spin"></i>Loading');
           },
               success: function (result) {
                   $('#login_link').prop('disabled', false);
                    $('#login_link').css('color','white');
                   console.log("result",result);
                   // console.log(typeof(parseInt(result)));

                  
                   if(parseInt(result) == 1) {
                       $('#login_link').prop('disabled', true);
                    $('#login_link').html('Login successfully');

                    window.location.href = base_path+"Attendance/create";
                              
                      
                       
                   }else if(parseInt(result) == 2) {
                       document.getElementById("errorLogin").innerHTML="Invalid Username & Password !";
                   }
                       else{
                       document.getElementById("errorLogin").innerHTML="Something went wrong!";
                   }
               }
           });
       }  
       
   }

   function myFunction() {
       var a=document.getElementById("errorusername");
       var b=document.getElementById("errorpassword");
   
       setTimeout(function(){ a.innerHTML="" }, 3000);
       setTimeout(function(){ b.innerHTML="" }, 3000);
   }
   