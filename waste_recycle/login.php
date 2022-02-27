﻿<!DOCTYPE html>
<html lang="en">

<head>
 <title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="keywords" content="" />


<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="bootstrap.min.css">
<script src="jquery.min.js"></script>
<script src="bootstrap.min.js"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">



<style>


.login_btn{
padding:10px;
color:white;
background:#8B008B;
border:none;
cursor;pointer;

}


.login_btn:hover{
background:black;
color:orange;
}




.login_btn1{
padding:10px;
color:white;
background:#8B008B;
border:none;
cursor;pointer;

}


.login_btn1:hover{
background:black;
color:orange;
}




.section_padding {
padding: 60px 40px;
}

.imagelogo_li_remove {
list-style-type: none;
margin: 0;
 padding: 0;
}

.imagelogo_data{
 width:120px;
 height:80px;
}



  .navbar {
    letter-spacing: 1px;
    font-size: 14px;
    border-radius: 0;
    margin-bottom: 0;
   background-color:#8B008B;

    z-index: 9999;
    border: 0;
    font-family: comic sans ms;
//color:white;
  }



  
.navbar-toggle {
background-color:orange;
  }

.navgate {
padding:16px;color:white;

}



.navgate:hover{
 color: black;
 background-color: orange;

}


.navbar-header{
height:60px;
}

.navbar-header-collapse-color {
background:white;
}

.navgate101:hover{
background:#ec5574;
color:black;

}






/* footer */


  .navbar_footer {
letter-spacing: 1px;
    font-size: 14px;
    border-radius: 0;
    margin-bottom: 0;
    //background-color:#8B008B;
    //color:white;
    padding:20px;
    border: 0;
    font-family: comic sans ms;
  }


.footer_bgcolor{
background: black;
}

.footer_text1{
color:white;
font-size:20px;
border:none;
cursor:pointer;
}

.footer_text2{
color:grey;
font-size:14px;
border:none;
cursor:pointer;
}

.footer_text1:hover{
color:grey;
}


.footer_text2:hover{
color:orange;
}


.footer_dashedline{
 border-top: 1px dashed white;
}


.contact_info{

background:#8B008B;
color:white;
cursor: pointer;
padding:16px;
border-radius: 10%;

}
.contact_info:hover{
background: orange;
color:black;

}


.contact_info_dashedline{
  border-bottom: 5px dashed #8B008B;

}


.category_post{
background-color: #8B008B;
padding: 16px;
color:white;
font-size:14px;
border-radius: 15%;
border: none;
cursor: pointer;
text-align: center;
width:100%;
z-index: -999;
}
.category_post:hover {
background: black;
color:white;
}	


.access{
border-style: solid; border-width:4px; border-color:white;color:white;font-size:14px;
}

.access:hover{
color:black;

}


</style>





        <script>


//login starts
$(document).ready(function(){
                $('#login_btn').click(function () {
                 
                    var email = $('#email').val();
                    var password = $('#password').val();
                    var emailaddress_pot = $('#emailaddress_pot').val();
                  

                    //preparing Email for validations
                    var atemail = email.indexOf("@");
                    var dotemail = email.lastIndexOf(".");

if(email==""){
alert('please Enter Email Address');
}

else  if (atemail < 1 || ( dotemail - atemail < 2 )){
alert("Please enter valid email Address")
}

else if(password==""){
alert('please Enter Password');
}

else{


          var form_data = new FormData();
          form_data.append('email', email);
          form_data.append('password', password);
          form_data.append('emailaddress_pot', emailaddress_pot);

                    $('.upload_progress').css('width', '0');
                    $('#btn').attr('disabled', 'disabled');
                    $('#loader').fadeIn(400).html('<br><span class="well" style="color:black"><img src="ajax-loader.gif">&nbsp;Please Wait, Your Data is being Processed...</span>');
                    $.ajax({
                        url: 'login_action.php',
                        data: form_data,
                        processData: false,
                        contentType: false,
                        ache: false,
                        type: 'POST',
                        xhr: function () {
                      //var xhr = new window.XMLHttpRequest();
                            var xhr = $.ajaxSettings.xhr();
                            xhr.upload.addEventListener("progress", function (event) {
                                var upload_percent = 0;
                                var upload_position = event.loaded;
                                var upload_total  = event.total;

                                if (event.lengthComputable) {
                                    var upload_percent = upload_position / upload_total;
                                    upload_percent = parseInt(upload_percent * 100);
                                  //upload_percent = Math.ceil(upload_position / upload_total * 100);
                                    $('.upload_progress').css('width', upload_percent + '%');
                                    $('.upload_progress').text(upload_percent + '%');
                                }
                            }, false);
                            return xhr;
                        },
                        success: function (msg) {
                                
				$('#loader').hide();
				$('.result_data').fadeIn('slow').prepend(msg);
                                $('#alerts_login').delay(10000).fadeOut('slow');
                                $('#login_btn').removeAttr('disabled');


$('#email').val('');
$('#password').val('');


                        }
                    });
} // end if validate
                });
            });


// login ends here







        </script>


        
</head>
<body>


<!-- start column nav-->


<div class="text-center">
<nav class="navbar navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navgator">
        <span class="navbar-header-collapse-color icon-bar"></span>
        <span class="navbar-header-collapse-color icon-bar"></span>
        <span class="navbar-header-collapse-color icon-bar"></span> 
        <span class="navbar-header-collapse-color icon-bar"></span>                       
      </button>
     
<li class="navbar-brand home_click imagelogo_li_remove" ><img class="img-rounded imagelogo_data" src="logo.png"></li>
    </div>
    <div class="collapse navbar-collapse" id="navgator">

      <ul class="nav navbar-nav navbar-right">

<li class="navgate img-rounded"><a  class="img-rounded access" href="index.php">Home</a></li>
<li class="navgate img-rounded"><a  class="img-rounded access" href="signup.php">Signup</a></li>

      </ul>

    </div>
  </div>



</nav>


    </div><br /><br />

<!-- end column nav-->






    <div class="">


<div  class="about section_padding aboutus_bgcolor" style=''>

<br>


<p class="" style='font-size:36px;color:#8B008B;font-family:comic sans ms;'>Waste Recycle Login Form</p>


<div class='row'>
<div class='col-sm-12' style='font-size:18px;'>
</div>
</div><br>




<div class='row'>


<div class='col-sm-6'>
<img style="width:100%;min-width:100%;max-width:100%;height:600px;" src="waste.png">
</div>


<div class='col-sm-6' style='background:#ddd;'>

  <h2 class="text-center"><span class="contact_name_color" style='font-size:20px;color:#8B008B;font-family:comic sans ms;'>
Users Login</span></h2>


<!--start form-->

<form id="" method="post">
 <div class="form-group">
              <label style="color:#ec5574;text-align:left;font-size:16px;" for="email">
<span class="fa fa-envelope-o"></span>Email</label>
              <input type="text" class="col-sm-12 form-control" id="email" name="email" placeholder="Enter email" value="test@gmail.com">
            </div>


 <div class="form-group">
              <label style="color:#ec5574;text-align:left;font-size:16px;" for="psw">
<span class="fa fa-eye"></span> Password</label>
              <input type="password" class="col-sm-12 form-control" id="password" name="password" placeholder="Enter password" value="123">
            </div>


<style>
.secured_pot{ display:none; } /* hide because is spam protection */
</style>
<input class="secured_pot" type="text" name="emailaddress_pot" id="emailaddress_pot" />

<div id="loader"></div>
                        <div class="result_data"></div>

                    <input type="button" id="login_btn" class="pull-right login_btn1" value="login Now" />
                </form>

<!--end form-->



</div>




</div>





</div>








<!-- footer Section start -->

<footer class=" navbar_footer text-center footer_bgcolor">

<div class="row">

        <div class="col-sm-12">
<p class="footer_text1"></p>
<p class="footer_text2"></p>
<br>


        </div>

 
</div>



</div>

<div class="footer_text1">
<p class="footer_text1"></p>
</div>


<div class="footer_dashedline"></div>

 </footer>

<!-- footer Section ends -->
	




<div>
 

   
</body>
</html>



















