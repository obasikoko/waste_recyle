<?php
error_reporting(0); 
?>


<?php
session_start();
include ('authenticate.php');


$userid_sess =  htmlentities(htmlentities($_SESSION['uid'], ENT_QUOTES, "UTF-8"));
$fullname_sess =  htmlentities(htmlentities($_SESSION['fullname'], ENT_QUOTES, "UTF-8"));
//$username_sess =   htmlentities(htmlentities($_SESSION['username'], ENT_QUOTES, "UTF-8"));
$photo_sess =  $_SESSION['photo'];
$email_sess =  htmlentities(htmlentities($_SESSION['email'], ENT_QUOTES, "UTF-8"));
$user_rank = strip_tags($_SESSION['user_rank']);

?>




<!DOCTYPE html>
<html lang="en">

<head>
 
<title> </title>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="keywords" content="landing page, website design" />

  <link rel="stylesheet" href="bootstrap.min.css">
    <script src="jquery.min.js"></script>
    <script src="bootstrap.min.js"></script>
<script src="moment.js"></script>
	<script src="livestamp.js"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">





<script>
$(document).ready(function(){






var userid_sess_data = '<?php echo $userid_sess ?>';
var fullname_sess_data = '<?php echo $fullname_sess ?>';
var username_sess_data = '<?php echo $userid_sess ?>';
var email_sess_data = '<?php echo $email_sess ?>';
var photo_sess_data = '<?php echo $photo_sess ?>';
var user_rank_sess_data = '<?php echo $user_rank ?>';



var rec = "<span>" +
"<img src='uploads/" + photo_sess_data +"'  style='text-align:left;border-radius:50%;width:60px;max-width:60px;height:60px;max-height:60px;border-style: solid; border-width:3px; border-color: orange;'>" +
 "</span>";

$('.myd_photo_sess').html(rec);
$('.myd_fullname_sess').html(fullname_sess_data);
$('.myd_userid_sess').html(userid_sess_data);
$('.myd_username_sess').html(username_sess_data);


//$('#myd_userid_sess_value').val(userid_sess_data).value;
//$('#myd_userid_sess_id').html(userid_sess_data);


//$('.myd_title_header').html(title_header);
//$('.myd_title_footer').html(title_footer);


});

</script>


<style>







/*ensure that category button does not jam about us or product section when on mobile ends here.*/




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

.dropdown_bgcolor{

background: #8B008B;
color:white;
}

.dropdown_dashedline{
 border-bottom: 2px dotted white;
}

.navgate101:hover{
background:purple;
color:white;

}





/* home starts */
  
.home_image {	
width:100%;
/*
height:500px;
max-height:500px;
*/
height:100vh;
max-height:100vh;
       
        
}



.creator_imagelogo_data{
 width:60px;
 height:60px;
}

/* make modal appear at center of the page */
.modal-appear-center {
margin-top: 25%;
//width:40%;
}


/* make modal appear at center of the page */
.modal-appear-center1 {
margin-top: 15%;
//width:40%;
}


.modal_head_color{
background-color: #8B008B;
padding: 6px;
color:white;
}


.modal_footer_color{
background-color: #8B008B;
padding: 6px;
color:white;
}

/*
modal_mobile_resize 

@media screen and (max-width: 600px) {
  .modal_mobile_resize {
    width: 100%;
    margin-top: 15%;
  }
}


*/



.btn_copyright{
//background: orange;
color:orange;
//padding:2px;
font-weight:200;
}


.btn_copyright:hover {
background: black;
color:pink;
font-weight:700;
}




/* footer */


  .navbar_footer {
letter-spacing: 1px;
    font-size: 14px;
    border-radius: 0;
    margin-bottom: 0;
    //background-color:#8B008B;
    color:white;
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



.left_shifting{

width:40%;
}

@media screen and (max-width: 768px) {
.left-column-all {
width:100%;

}

.home_resize_padding {
padding-top:100px;
}


}



@media screen and (max-width: 600px) {
.left-column-all {
width:100%;

}

.home_resize_padding {
padding-top:100px;
}

}

.modaling_sizing{
width:59%;
}


@media screen and (max-width: 768px) {
.modaling_sizing {
width:99%;

}

.home_content_head {       
margin-left:0px; 
padding-top:10px;
width:100%;
text-align:center;
}


}

@media screen and (max-width: 600px) {
.modaling_sizing {
width:99%;
}

.home_content_head {       
margin-left:0px; 
padding-top:10px;
width:100%;
text-align:center; 
}



}

.category_post{
background-color: #8B008B;
padding: 6px;
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



.category_post1{
background-color: #8B008B;
padding: 6px;
color:white;
font-size:14px;
border-radius: 15%;
border: none;
cursor: pointer;
text-align: center;
z-index: -999;
}
.category_post1:hover {
background: black;
color:white;
}	






.e_search_form{
width: 38vw;
height:60px;
padding:10px;
cursor:pointer;
border:none;
border-radius:15%;
color:black;
font-size:16px;
background:white;

//transform: skew(-22deg);
margin-left:-90px;

}

.e_search_form:hover{

border-style: solid; border-width:4px; border-color: #824c4e;
background: #dddddd;
color: black;
}



@media screen and (max-width: 768px) {
  .e_search_form{

  width: 100%;
  padding: 20px;
margin-left:0px;
  }
}



@media screen and (max-width: 600px) {
  .e_search_form{
  width: 100%;
  padding: 20px 
margin-left:0px; 
  }
}





.readmore_btn{
background-color: #8B008B;
padding: 6px;
color:white;
font-size:14px;
border-radius: 20%;
border: none;
cursor: pointer;
text-align: center;
//width:100%;
z-index: -999;
}
.readmore_btn:hover {
background: black;
color:white;
}	




</style>



<script>
// set post url

url_post_data ="";

</script>

    </head>
    <body>

 
</head>
<body>



<style>

.notify_count { color: #FFF; display: block; float: right; border-radius: 12px; border: 1px solid #2E8E12; background: green; padding: 2px 6px;font-size:14px; }
.notify_count1 { color:#FFF; display: block; float: right; border-radius: 12px; border: 1px solid #2E8E12; background: purple; padding: 2px 6px;font-size:14px; }

</style>



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








<li class="navgate"><button data-toggle="modal" data-target="#myModal_trash" class="category_post1"><i  style="color:white;font-size:10px;"></i>Publish Trash</button>

</li>



<li class="navgate"><button data-toggle="modal" data-target="#myModal_donation" class="category_post1"><i  style="color:white;font-size:10px;"></i>Donate Meal/Money</button>

</li>



<li class="navgate">

<span class="dropdown">
  <a style="color:white;font-size:14px;cursor:pointer;" title='View More Data' class="btn1 btn-default1 dropdown-toggle"  data-toggle="dropdown">
  <span class='myd_photo_sess'></span>

More<span class="caret"></span></a>

<ul class="dropdown-menu">
<b style='color:black;'>(<span class='myd_fullname_sess'></span>)</b><br><br>
<li><a title='Logout' href="logout.php"><span style='font-size:30px;color:#8B008B;' class='fa fa-sign-out'></span> Logout</a></li>

</ul></span>

</li>




      </ul>



    </div>





</nav>


    </div><br /><br />

<!-- end column nav-->







<style>


.support_css{
//border-radius:25%;min-width:25vw;background:#c1c1c1; border-bottom: 2px dashed purple;
}

.support_css:hover{
background:white;color:black;
}



.senddata1_css{
background:#8B008B;
color:white;
cursor:pointer;
border:none;
padding:2px;
border-radius:20%;
text-align:center

}


.senddata1_css:hover{
background:orange;color:white;

}

.chat_count { color: #FFF; display: block; float: right; border-radius: 12px; border: 1px solid #2E8E12; background: #34BB0C; padding: 2px 6px;font-size:14px; }
.chat_count1 { color:#FFF; display: block; float: right; border-radius: 12px; border: 1px solid #2E8E12; background: purple; padding: 2px 6px;font-size:14px; }


</style>



<!--load A ends here-->


<br><br>







<!--start right column all-->
    <div class="right-column-all_NO>




<style>
.post_padding{
padding-top:-70px;
   
}

.post_bgcolor{
background: #dddddd;
   
}


@media screen and (max-width: 600px) {
  .post_padding{
  padding-top:1px; 
 margin-top:-170px
  }
}

@media screen and (max-width: 700px) {
  .post_padding{
 padding-top:1px;
 margin-top:-170px
  }
}


.postbtn_dashedline{
  border-bottom: 2px dashed #ec5574;

}



/* restrict responsive image to max size of 400px */
.responsive_image1 {
  width: 100%;
  max-width: 400px;
  height: auto;
}

.responsive_image2{
  width: 100%;
  height: auto;
}

.responsive_video {
  width: 100%;
height: 400px;
  max-width: 500px;
  max-height: 600px;
  //height: auto;
}


</style>
<!-- all post Section start -->
<div  class="post_padding section_padding post_bgcolor">


<!--start blog post row-->
 <div class="row">



<style>
.c_counter {
 padding:10px;
color:white;
background:purple;
border:none;
cursor:pointer;
}

.c_counter:hover {
color:white;
background:black;
}

.social_all{
 padding:6px;
color:white;
background:red;
border:none;
cursor:pointer;
border-radius:15%;

}

.s_icon {
color:white;
//background:black;
font-size:20px;
//border-radius:50%;
cursor:pointer;
}


.s_icon:hover {
color:white;
background:red;
}


</style>





</div>
<!--end blog post row-->


<!--start form post row-->
<div class="row">

<!--post start-->
<div class="blog_post_form col-sm-12 alerts alert-warning hide_this_form_on_submit_post" id="blog_tab1">

<!--form 1 starts-->
<div style="text-align:left;font-size:14px;font-family:verdana;color:black">


<style>
.map_css{
background: #8B008B;
color:white;
padding:4px;
cursor:pointer;
border:none;
border-radius:10%;
}

.map_css:hover{
background: black;
color:white;

}


.map_css1{
background: #ec5574;
color:white;
padding:6px;
cursor:pointer;
border:none;

}


.map_css1:hover{
background: #800000;
color:white;

}





.title_css{
//background: green;
color:#0088cc;
cursor:pointer;
font-size:24px;

}


.title_css:hover{
//background: purple;
color:purple;

}



.seeking_css{
background: #c1c1c1;
color:black
padding:10px;
cursor:pointer;
border:none;
border-radius:25%;
font-size:16px;
}

.seeking_css:hover{
background: black;
color:white;

}



.offering_css{
background: #c1c1c1;
color:black;
padding:10px;
cursor:pointer;
border:none;
border-radius:25%;
font-size:16px;
}

.offering_css:hover{
background: black;
color:white;

}



.cat_cssa{
background: #ec5574;
color:white;
padding:10px;
cursor:pointer;
border:none;
border-radius:25%;
font-size:16px;
}

.cat_cssa:hover{
background: black;
color:white;

}




.cat_cssax{
background: #ddd;
color:black;
padding:10px;
cursor:pointer;
border:none;
border-radius:25%;
font-size:16px;
}

.cat_cssa:hover{
background: black;
color:white;

}



</style>
      
</div>
<!--form 1 ends-->


</div>

<!--post end-->


</div>
<!--end form post row-->









<!-- Main Post Database query starts here -->


<!--start loading post-->

<script>

$(document).ready(function(){

var dt = 'data';
$("#loader-dashboard_post").fadeIn(400).html('<br><div style="color:black;background:white;padding:10px;"><i class="fa fa-spinner fa-spin" style="font-size:20px"></i> &nbsp;Please Wait,Loading post...</div>');
var datasend = {dt_send:dt};


	
		$.ajax({
			
			type:'POST',
			url:'dashboard_loads.php',
			data:datasend,
                        crossDomain: true,
			cache:false,
			success:function(msg){

$("#loader-dashboard_post").hide();
$("#result-dashboard_post").html(msg);
//setTimeout(function(){ $('#result-dashboard_post').html(''); }, 5000);				
	
}
			
		});
		
		

});





$(document).ready(function(){

var dtxx = 'data';
$("#loader-dashboard_postxx").fadeIn(400).html('<br><div style="color:black;background:white;padding:10px;"><i class="fa fa-spinner fa-spin" style="font-size:20px"></i> &nbsp;Please Wait,Loading post...</div>');
var datasend = {dt_sendxx:dtxx};


	
		$.ajax({
			
			type:'POST',
			url:'dashboard_loads_others.php',
			data:datasend,
                        crossDomain: true,
			cache:false,
			success:function(msg){

$("#loader-dashboard_postxx").hide();
$("#result-dashboard_postxx").html(msg);
//setTimeout(function(){ $('#result-dashboard_postx').html(''); }, 5000);				
	
}
			
		});
		
		

});

</script>
<br>
<div class='rows'>
<div class='col-sm-6'>
<div id="loader-dashboard_post"></div>
<div id="result-dashboard_post"></div>
</div>

<div class='col-sm-6'>
<div id="loader-dashboard_postxx"></div>
<div id="result-dashboard_postxx"></div>
</div>

</div>

<!--End loading posts-->




<!-- Main Post Database query ends here-->





</div>
<!--all post section ends-->







	




<div>
  <!--end right column all-->    





















<!-- Trash modal starts here -->


<div class="container_trash">

  <div class="modal fade " id="myModal_trash" role="dialog">
    <div class="modal-dialog modal-lg modal-appear-center1 pull-right1 modaling_sizing1">
      <div class="modal-content">
        <div class="modal-header" style="color:black;background:#c1c1c1">
 <button type="button" class="pull-right btn btn-default" data-dismiss="modal">Close</button>
      <h4 class="modal-title">Publish Plastic Trash</h4>
        </div>
        <div class="modal-body">




<div class='col-sm-6' style='background:#ddd;color:black;padding:10px;border-style: dashed; border-width:2px; border-color: orange;'>
<!--start form-->

<script>

$(document).ready(function(){
$('#post_btn').click(function(){


var qty = $('#qty').val();
if(qty==""){
alert('Quantity of Plastic cans, Bottles cannot be Empty');
//return false;
}


else if(isNaN(qty)){
alert('Quantity of Plastic cans, Bottle must be number');
}

else{
$('#loader_l2').fadeIn(400).html('<br><div style="color:black;background:#c1c1c1;padding:10px;"><i class="fa fa-spinner fa-spin" style="font-size:24px"></i>  &nbsp;Please Wait, Data is being sent...</div>');
var datasend = {qty:qty};		
		$.ajax({
			
			type:'POST',
			url:'post_trash.php',
			data:datasend,
                        crossDomain: true,
			cache:false,
			success:function(msg){








if(msg == 1){
alert('Trash Successfully Submitted');			
$('#loader_l2').hide();
$('#result_l2').html("<div style='color:white;background:green;padding:10px;'>Trash Successfully Submitted</div>");
setTimeout(function(){ $('#result_l2').html(''); }, 5000);


$('#qty').val('');



//window.location='report.html';
location.reload();
			
}
else if(msg == 4){
alert('Data could not be sent. Ensure there is network. and try again.');
$('#loader_l2').hide();
$('#result_l2').html("<div style='color:white;background:green;padding:10px;'>Data could not be sent. Ensure there is network. and try again.</div>");
}




else{

alert('Error: Encountered Processing your Data');			
$('#loader_l2').hide();
$('#result_l2').html("<div style='color:white;background:red;padding:10px;'>Error: Encountered Processing your Data</div>");
setTimeout(function(){ $('#result_l2').html(''); }, 5000);				
	

}




			
			}
			
		});
		
		}
		
	})
					
});








</script>




<div class="col-sm-12 form-group">
<h3>Option A</h3>
<label>Enter Quantity of Plastic Cans/Bottles to be Disposed </label>
<input  class="form-control " id="qty" name="qty" placeholder="Enter Quantity of Plastic Cans to be Disposed" type="text" required>
</div>






<div class="col-sm-12 form-group">
                        <div id="loader_l2"></div>
                        <div id="result_l2"></div>
</div>


<button type="button" id="post_btn" class="category_post"  /> Publish Trash Now</button>
</div>





<div class='col-sm-6' style='background:#ddd;color:black;padding:10px;border-style: dashed; border-width:2px; border-color: orange;'>



<style>
.upload_progress{
padding:10px;
background:green;
color:white;
cursor:pointer;
min-width:30px;
}

#imageupload_preview
{
max-height:200px;
max-width:200px;
}
</style>


        <script>
		
		
		
$(document).ready(function(){
$('#post_btn1').click(function(){


var image_url = $('#image_url').val();
if(image_url==""){
alert('Image Url cannot be Empty');
//return false;
}


else{
$('#loader_l2x').fadeIn(400).html('<br><div style="color:black;background:#c1c1c1;padding:10px;"><i class="fa fa-spinner fa-spin" style="font-size:24px"></i>  &nbsp;Image is being Processed by Azure AI</div>');
var datasend = {image_url:image_url};		
		$.ajax({
			
			type:'POST',
			url:'post_trash_azureai.php',
			data:datasend,
                        crossDomain: true,
			cache:false,
			success:function(msg){
		
$('#loader_l2x').hide();
$('#result_l2x').html(msg);	

$('#post_btn1').hide();
			}
			
		});
		
		}
		
	})
					
});






function imagePreview(e) 
{
 var readImage = new FileReader();
 readImage.onload = function()
 {
  var displayImage = document.getElementById('imageupload_preview');
  displayImage.src = readImage.result;
 }
 readImage.readAsDataURL(e.target.files[0]);
}


            $(function () {
                $('#save_btn').click(function () {
                    var file_fname = $('#file_content').val();
                    

// start if validate
if(file_fname==""){
alert('please Select Image to Upload');
}

else{

var fname=  $('#file_content').val();
var ext = fname.split('.').pop();
//alert(ext);

// add double quotes around the variables
var fileExtention_quotes = ext;
fileExtention_quotes = "'"+fileExtention_quotes+"'";

 var allowedtypes = ["PNG", "png", "gif", "GIF", "jpeg", "JPEG", "BMP", "bmp","JPG","jpg"];
    if(allowedtypes.indexOf(ext) !== -1){
//alert('Good this is a valid Image');
}else{
alert("Please Upload a Valid image. Only Images Files are allowed");
return false;
    }

          var form_data = new FormData();
          form_data.append('file_content', $('#file_content')[0].files[0]);
          form_data.append('file_fname', file_fname);
          
                    $('.upload_progress').css('width', '0');
                    $('#btn').attr('disabled', 'disabled');
                    $('#loader').fadeIn(400).html('<br><span class="well" style="color:black"><img src="ajax-loader.gif">&nbsp;Image is being Processed by Azure AI...</span>');
                    $.ajax({
                        url: 'post_trash_azureai2.php',
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
                                $('#box').val('');
				$('#loader').hide();
				//$('.result_data').fadeIn('slow').prepend(msg);
				$('.result_data').html(msg);
				$('#alertdata_uploadfiles').delay(5000).fadeOut('slow');
                                $('#alerts_reg').delay(5000).fadeOut('slow');
                                $('#alertdata_uploadfiles2').delay(20000).fadeOut('slow');
                                $('#save_btn').removeAttr('disabled');

								$('#save_btn').hide();

//strip all html elemnts using jquery
var html_stripped = jQuery(msg).text();
//alert(html_stripped);

//check occurrence of word (successfully) from backend output already html stripped.
var Frombackend = html_stripped;
var bcount = (Frombackend.match(/successfully/g) || []).length;
//alert(bcount);

if(bcount > 0){
$('#file_fname').val('');
}




                        }
                    });
} // end if validate
                });
            });

			
			
			</script>







<h3>Option B(Azure Objects Detection AI)</h3>
<label>Upload Image Containing the Trashed Plastic Cans/Bottles </label><br>


<span style='color:red'><i>You can either enter Image Url or Browse/Upload the Image one at a time</i></span><br><br>

<div class="col-sm-12 form-group">

<label>Enter Image URL Eg. </label><br>
https://www.fredjarsoft.com/trash1.jpg <br>
https://www.fredjarsoft.com/trash2.jpg <br>
<input  class="form-control " id="image_url" name="image_url" placeholder="Enter Image URL" type="text" required>
</div>


<div class="col-sm-12 form-group">
                        <div id="loader_l2x"></div>
                        <div id="result_l2x"></div>
</div>


<button type="button" id="post_btn1" class="category_post"  /> Process Trash via Azure Objects Detection AI</button>




<center> <h2>OR</h2></center>


<form id="" method="post">

<div class="form-group">
<label style="">Upload Image containing Trash Cans/Bottles: </label>
<input style="background:#c1c1c1;" class="col-sm-12 form-control" type="file" id="file_content" name="file_content" accept="image/*" onchange="imagePreview(event)" />
 <img id="imageupload_preview"/>
</div><br>

                    <div class="form-group">
                            <div class="upload_progress" style="width:0%">0%</div>

                        <div id="loader"></div>
                        <div class="result_data"></div>
                    </div>

                    <input type="button" id="save_btn" class="category_post" value="Process Trash via Azure Objects Detection AI" />
    </form>

</div>



<!--end form-->



</div><br><br>

<br><br>

<!--form ENDS-->


        </div>
        <div class="modal-footer" style="color:black;background:#c1c1c1">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
</div>



<!--  Trash modal ends here -->










<!-- Donation modal starts here -->


<div class="container_trash">

  <div class="modal fade " id="myModal_donation" role="dialog">
    <div class="modal-dialog modal-lg modal-appear-center1 pull-right1 modaling_sizing1">
      <div class="modal-content">
        <div class="modal-header" style="color:black;background:#c1c1c1">
 <button type="button" class="pull-right btn btn-default" data-dismiss="modal">Close</button>
      <h4 class="modal-title">Donate Meal/Money</h4>
        </div>
        <div class="modal-body">




<div class='col-sm-6' style='background:#ddd;color:black;padding:10px;border-style: dashed; border-width:2px; border-color: orange;'>
<!--start form-->

<script>

$(document).ready(function(){
$('#post_btn_meal').click(function(){


var qty = $('#qty_meal').val();
if(qty==""){
alert('Quantity of Meal to Donate cannot be Empty');
//return false;
}


else if(isNaN(qty)){
alert('Quantity of Meal must be number');
}

else{
$('#loader_l2_meal').fadeIn(400).html('<br><div style="color:black;background:#c1c1c1;padding:10px;"><i class="fa fa-spinner fa-spin" style="font-size:24px"></i>  &nbsp;Please Wait, Data is being sent...</div>');
var datasend = {qty:qty};		
		$.ajax({
			
			type:'POST',
			url:'post_meal.php',
			data:datasend,
                        crossDomain: true,
			cache:false,
			success:function(msg){








if(msg == 1){
alert('Meal Successfully Submitted');			
$('#loader_l2_meal').hide();
$('#result_l2_meal').html("<div style='color:white;background:green;padding:10px;'>Meal Successfully Submitted</div>");
setTimeout(function(){ $('#result_l2_meal').html(''); }, 5000);


$('#qty_meal').val('');



//window.location='report.html';
location.reload();
			
}
else if(msg == 4){
alert('Data could not be sent. Ensure there is network. and try again.');
$('#loader_l2_meal').hide();
$('#result_l2_meal').html("<div style='color:white;background:green;padding:10px;'>Data could not be sent. Ensure there is network. and try again.</div>");
}




else{

alert('Error: Encountered Processing your Data');			
$('#loader_l2_meal').hide();
$('#result_l2_meal').html("<div style='color:white;background:red;padding:10px;'>Error: Encountered Processing your Data</div>");
setTimeout(function(){ $('#result_l2_meal').html(''); }, 5000);				
	

}




			
			}
			
		});
		
		}
		
	})
					
});









$(document).ready(function(){
$('#post_btn_money').click(function(){


var qty = $('#qty_money').val();
if(qty==""){
alert('Amount of Money to Donate cannot be Empty');
//return false;
}


else if(isNaN(qty)){
alert('Amount of Money must be number');
}

else{
$('#loader_l2_money').fadeIn(400).html('<br><div style="color:black;background:#c1c1c1;padding:10px;"><i class="fa fa-spinner fa-spin" style="font-size:24px"></i>  &nbsp;Please Wait, Data is being sent...</div>');
var datasend = {qty:qty};		
		$.ajax({
			
			type:'POST',
			url:'post_money.php',
			data:datasend,
                        crossDomain: true,
			cache:false,
			success:function(msg){








if(msg == 1){
alert('Money Donation Successfully Submitted');			
$('#loader_l2_money').hide();
$('#result_l2_money').html("<div style='color:white;background:green;padding:10px;'>Money Donation Successfully Submitted</div>");
setTimeout(function(){ $('#result_l2_money').html(''); }, 5000);


$('#qty_money').val('');



//window.location='report.html';
location.reload();
			
}
else if(msg == 4){
alert('Data could not be sent. Ensure there is network. and try again.');
$('#loader_l2_money').hide();
$('#result_l2_money').html("<div style='color:white;background:green;padding:10px;'>Data could not be sent. Ensure there is network. and try again.</div>");
}




else{

alert('Error: Encountered Processing your Data');			
$('#loader_l2_money').hide();
$('#result_l2_money').html("<div style='color:white;background:red;padding:10px;'>Error: Encountered Processing your Data</div>");
setTimeout(function(){ $('#result_l2_money').html(''); }, 5000);				
	

}




			
			}
			
		});
		
		}
		
	})
					
});








</script>




<div class="col-sm-12 form-group">
<h3>Option A (Donate Meals)</h3><br>
<label>Enter Quantity/Number of Plates of Meal to Donate </label>
<input  class="form-control " id="qty_meal" name="qty_meal" placeholder="Enter number of Plates of Meals to Donate" type="text" required>
</div>






<div class="col-sm-12 form-group">
                        <div id="loader_l2_meal"></div>
                        <div id="result_l2_meal"></div>
</div>


<button type="button" id="post_btn_meal" class="category_post"  /> Donate Meal</button>
</div>





<div class='col-sm-6' style='background:#ddd;color:black;padding:10px;border-style: dashed; border-width:2px; border-color: orange;'>










<h3>Option B (Donate Money)</h3>
<br>



<div class="col-sm-12 form-group">

<label>Enter Amount of Money to Donate. (USD)</label><br>
<input  class="form-control " id="qty_money" name="qty_money" placeholder="Enter Amount of Money to Donate" type="text" required>
</div>


<div class="col-sm-12 form-group">
                        <div id="loader_l2_money"></div>
                        <div id="result_l2_money"></div>
</div>


<button type="button" id="post_btn_money" class="category_post"  /> Donate Money</button>




</div>



<!--end form-->



</div><br><br>

<br><br>

<!--form ENDS-->


        </div>
        <div class="modal-footer" style="color:black;background:#c1c1c1">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
</div>



<!--  Donation modal ends here -->





   
</body>
</html>



















