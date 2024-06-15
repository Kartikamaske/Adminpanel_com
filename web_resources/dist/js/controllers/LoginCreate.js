a=false;
$(document).ready(function(){
    $("#btn_login").click(function(){
        if(a==false){
   loginform();
}
}); 
});

function loginform(){
    var flag = 0;
    var email = $('#email').val();
    var password = $('#password').val();
    if (email == '' || email == undefined) {
           
           document.getElementById("errorLemail").innerHTML=" Enter Email.";
           flag = 1;
       }
       if (password == '' || password == undefined) {
          
           document.getElementById("errorLpwd").innerHTML=" Enter  password.";
           flag = 1;
       }
       myFunction();
       if (flag == 0) {
   // alert();
                  
          
           $.ajax({

               url: base_path+"Login/login_validation",
               method: 'POST',
               data: $('#Form').serialize(),
               // dataType:'json',
               beforeSend: function(){
               $('#btn_login').prop('disabled', true);
               $('#btn_login').css('color','white');
               $('#btn_login').html('<i class="fa fa-spinner fa-spin"></i>Loading');
           },
               success: function (result) {
                   $('#btn_login').prop('disabled', false);
                    $('#btn_login').css('color','white');
                   $('#btn_login').html('Login');
                   console.log(typeof(parseInt(result)));

                  
                   if(parseInt(result) == 1) {
                       $('#btn_login').prop('disabled', true);
                        window.location.href = base_path+"Home";
                       
                   }else if(parseInt(result) == 2) {
                       document.getElementById("errorLogin").innerHTML="Invalid Mobile No & Password !";
                   }else{
                       document.getElementById("errorLogin").innerHTML="Something went wrong!";
                   }
               }
           });
       }  
       
   }

   function myFunction() {
       var a=document.getElementById("errorLemail");
       var b=document.getElementById("errorLpwd");
     
       setTimeout(function(){ a.innerHTML="" }, 3000);
       setTimeout(function(){ b.innerHTML="" }, 3000);
   }
    
 
 
 
 
 