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


echo $fileurl1 =strip_tags($_POST['image_url']);



$data_param = "{\"url\":\"$fileurl1\"}";
$url ='https://computervisionapp101.cognitiveservices.azure.com/vision/v3.2/detect?model-version=latest';

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_POST, TRUE);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json', "Ocp-Apim-Subscription-Key: your azure api key goes here"));  
curl_setopt($ch, CURLOPT_POSTFIELDS, $data_param);
//curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
$output = curl_exec($ch); 
//echo $output;

print_r($output);
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


?>