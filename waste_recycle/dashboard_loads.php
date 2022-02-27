

<?php
error_reporting(0);
ini_set('max_execution_time', 300); //300 seconds = 5 minutes
// temporarly extend time limit
set_time_limit(300);


?>
       








<!--start loading post-->








        <div class="content">

<h2><center> Plastic Trash Removal Volunteers Sections</center></h2>


            <?php


include('data6rst.php');

$resultx = $db->prepare('SELECT * FROM posts where post_type=:post_type order by id desc');
$resultx->execute(array(':post_type' => 'plastic'));
$rowx = $resultx->fetch();
$totalx = $rowx['total'];


$result = $db->prepare('SELECT * FROM posts where post_type=:post_type order by id desc');
$result->execute(array(':post_type' => 'plastic'));



$nosofrows = $result->rowCount();



if($nosofrows == 0){
echo "<div style='background:red;color:white;padding:10px;'>No Plastic Cans/Bottle Trash has been published yet..</div>";
exit();
}

echo "<br><b style='color:#824c4e;font-size:18px;' >Overall Total Published by all Users so far:
($totalx) Plastic Cans/Bottles  </b><br>";



//create table posts(id int primay key auto_increment,
//title varchar(100), description text, timing varchar(100),fullname  varchar(100),photo varchar(100),userid varchar(100),post_type varchar(100),quantity varchar(100));

while($row = $result->fetch()){

                $id= $row['id'];
                $postid = $row['id'];
                $title = $row['title'];
                $description = $row['description'];
                $timing = $row['timing'];
                $fullname =$row['fullname'];
                $photo = $row['photo'];
                $userid = $row['userid'];
                $post_type = $row['post_type'];
                $quantity = $row['quantity'];
				$total = $row['total'];
             
          
                

   // }





            ?>
                
                <div class="post well" id="post_<?php echo $postid; ?>">


<style>
.post_css1{
background:#ddd;
color:black;
border:none;
padding:10px;
border-radius:20%;
}


.post_css1:hover{
background:orange;
color:black;


}



.help_css{
background:#ddd;
color:black;
border:none;
padding:10px;
border-radius:20%;
font-size:20px;
}


.help_css:hover{
background:orange;
color:black;


}




</style>

<div>

<?php
if($title){
?>

<img class='' style='border-style: solid; border-width:3px; border-color:#8B008B; width:50px;height:50px; 
max-width:50px;max-height:50px;border-radius: 50%;' src='uploads/<?php echo $photo; ?>' title='Image'>
<b style='color:#8B008B;font-size:14px;' >Name: <?php echo $fullname; ?> </b>

<img class='pull-right img-rounded' style='border-style: solid; border-width:3px; border-color:#8B008B; width:100px;height:100px; 
max-width:100px;max-height:100px;' src='images/trash1.jpg' title='Image'>
<br>
<b style='color:;font-size:14px;' > Trash Submitted by the user: (<?php echo $quantity; ?> Plastic Cans/Bottles)</b><br>
<b style='color:green;font-size:16px;' >Earnings/Benefits: <?php echo $quantity; ?> Plates of Meals or (<?php echo $quantity; ?> USD) </b><br>


<span><b> <span style='color:#8B008B;' class='fa fa-calendar'></span>Time:</b>  <span data-livestamp="<?php echo $timing;?>"></span></span>

<?php } ?>

</div>









</div>




                </div>

            <?php
            }
            ?>



        </div>




<!--End loading posts-->

















