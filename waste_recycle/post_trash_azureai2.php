 <script>
 
 $(document).ready(function(){
$('#refresh').click(function(){
	
	
//window.location='report.html';
location.reload();


	
		})
					
});




			
$(document).ready(function(){
$('#post_btn_trashxx').click(function(){


var qty = $('#trash_qty').val();
if(qty==""){
alert('Quantity of Plastic cans, Bottles Extracted from Images via Azure AI cannot be Empty');
//return false;
}


else if(isNaN(qty)){
alert('Quantity of Plastic cans, Bottle must be number');
}

else{
$('#loader_trash').fadeIn(400).html('<br><div style="color:black;background:#c1c1c1;padding:10px;"><i class="fa fa-spinner fa-spin" style="font-size:24px"></i>  &nbsp;Please Wait, Data is being sent...</div>');
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
$('#loader_trash').hide();
$('#result_trash').html("<div style='color:white;background:green;padding:10px;'>Trash Successfully Submitted</div>");
setTimeout(function(){ $('#result_trash').html(''); }, 5000);


$('#qty').val('');



//window.location='report.html';
location.reload();
			
}
else if(msg == 4){
alert('Data could not be sent. Ensure there is network. and try again.');
$('#loader_trash').hide();
$('#result_trash').html("<div style='color:white;background:green;padding:10px;'>Data could not be sent. Ensure there is network. and try again.</div>");
}




else{

alert('Error: Encountered Processing your Data');			
$('#loader_trash').hide();
$('#result_trash').html("<div style='color:white;background:red;padding:10px;'>Error: Encountered Processing your Data</div>");
setTimeout(function(){ $('#result_trash').html(''); }, 5000);				
	

}




			
			}
			
		});
		
		}
		
	})
					
});

</script>

<?php


ini_set('max_execution_time', 300); //300 seconds = 5 minutes
// temporarly extend time limit
set_time_limit(300);



//error_reporting(0);

if (isset($_POST) and $_SERVER['REQUEST_METHOD'] == "POST") {

$file_content = strip_tags($_POST['file_fname']);


if ($file_content == ''){
echo "<div class='alert alert-danger' id='alerts_reg'><font color=red>Files Upload is empty</font></div>";
exit();
}


$upload_path = "trash_image/";

$filename_string = strip_tags($_FILES['file_content']['name']);
// thus check files extension names before major validations

$allowed_formats = array("PNG", "png", "gif", "GIF", "jpeg", "JPEG","JPG","jpg");
$exts = explode(".",$filename_string);
$ext = end($exts);

if (!in_array($ext, $allowed_formats)) { 
echo "<div id='alertdata_uploadfiles' class='alerts alert-danger'>File Formats not allowed. Only Images are allowed.<br></div>";
exit();
}


$fsize = $_FILES['file_content']['size']; 
$ftmp = $_FILES['file_content']['tmp_name'];

//give file a random names
$mt_id=rand(0000,9999);
$uname = rand(0000,9999);
$filecontent_name = $uname.time();


$allowed_types=array(
'image/gif',
    'image/jpeg',
    'image/png',
'image/jpg',
'image/GIF',
    'image/JPEG',
    'image/PNG',
'image/JPG'
);
if ( ! ( in_array($_FILES["file_content"]["type"], $allowed_types) ) ) {

  echo "<div id='alertdata_uploadfiles' class='alerts alert-danger'>Only Images are allowed bro..<br><br></div>";

exit();

}




// Calling getimagesize() function 
//$image_info = getimagesize("team1.png"); 
//print_r($image_info); 

$image_info =getimagesize($_FILES['file_content']['tmp_name']);

    $width = $image_info[0];
    $height = $image_info[1];
    $mime_image = $image_info['mime'];
/*
//validate file dimension eg 400 by 250
if ($width > "400" || $height > "250") {
       echo "<div id='alertdata_uploadfiles' class='alerts alert-danger'>file upload dimension must not be more than 400(width) by 250(height)</div>";
exit();

}
*/


// check file validation using getimagesizes
 if ($image_info === FALSE) {
           echo "<div id='alertdata_uploadfiles' class='alerts alert-danger'>cannot determine the image type</div>";
exit();
        }




if ( ! ( in_array($mime_image, $allowed_types) ) ) {

  echo "<div id='alertdata_uploadfiles' class='alerts alert-danger'>Only Image types are allowed..<br><br></div>";

exit();

}



if (($image_info[2] !== IMAGETYPE_GIF) && ($image_info[2] !== IMAGETYPE_JPEG) && ($image_info[2] !== IMAGETYPE_PNG)) {
           echo "<div id='alertdata_uploadfiles' class='alerts alert-danger'>only image format gif,jpg, png are allowed..</div>";
exit();
        }


//validate image using file info  method
$finfo = finfo_open(FILEINFO_MIME_TYPE);
$mime = finfo_file($finfo, $_FILES['file_content']['tmp_name']);


if ( ! ( in_array($mime, $allowed_types) ) ) {

  echo "<div id='alertdata_uploadfiles' class='alerts alert-danger'>Only Images are allowed...<br></div>";

exit();

}
finfo_close($finfo);


if (move_uploaded_file($ftmp, $upload_path . $filecontent_name.'.'.$ext)) {

$final_filename =  $filecontent_name.'.'.$ext;



// Process image url link via Azure Objects Detection AI..
$fileurl1 = "https://www.fredjarsoft.com/$final_filename";

//$fileurl1 ='https://www.fredjarsoft.com/trash1.jpg';

$data_param = "{\"url\":\"$fileurl1\"}";
$url ='https://computervisionapp101.cognitiveservices.azure.com/vision/v3.2/detect?model-version=latest';

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_POST, TRUE);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json', "Ocp-Apim-Subscription-Key: Your azure api key goes here"));  
curl_setopt($ch, CURLOPT_POSTFIELDS, $data_param);
//curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
$output = curl_exec($ch); 
//echo $output;


$http_status = curl_getinfo($ch, CURLINFO_HTTP_CODE);

// catch error message before closing
if (curl_errno($ch)) {
    //echo $error_msg = curl_error($ch);
}

curl_close($ch); 


$json = json_decode($output, true);

$count = 0;
$count1 = 1;
foreach($json['objects'] as $row1){
$x_axis = $row1['rectangle']['x'];
$y_axis = $row1['rectangle']['y'];
$w_axis = $row1['rectangle']['w'];
$h_axis = $row1['rectangle']['h'];


$object = $row1['object'];

$confidence = $row1['confidence'];

$parent = $row1['parent']['object'];

$parent_confidence = $row1['parent']['confidence'];

echo "<div class='well'><b>$count1:) Objects Detected: </b>$object (Confidence: $confidence)

</div>";

$count1++;

//$count = 1;


if($object =='person'){
$ct = $count++;
}


if($object !='person'){
$ct = $count++;

}


}


echo "<div style='background:green;color:white;padding:10px;border:none'> There are Only  $count $object(s) in the Image</div>";
echo "<input Disabled class='form-control' type='text' name='trash_qty' id='trash_qty' value='$count'><br>";


echo "<div class='col-sm-12 form-group'>
                        <div id='loader_trash'></div>
                        <div id='result_trash'></div>
</div>

<div class='col-sm-12 form-group'>
<button type='button' id='post_btn_trashxx' class='cat_cssa pull-left'> Submit Trash Now</button>

<!--button type='button' id='refresh' class='cat_cssax pull-right'> Refresh Page</button-->
</div>";


}

}

?>