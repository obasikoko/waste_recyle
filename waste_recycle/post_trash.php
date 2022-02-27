<?php
error_reporting(0);

$timer = time();
include("time/now.fn");
$created_time=strip_tags($now);
$dt2=date("Y-m-d H:i:s");


$qty = trim($_POST['qty']);
session_start();

$userid_sess =  htmlentities(htmlentities($_SESSION['uid'], ENT_QUOTES, "UTF-8"));
$fullname_sess =  htmlentities(htmlentities($_SESSION['fullname'], ENT_QUOTES, "UTF-8"));
$photo_sess =  $_SESSION['photo'];
$email_sess =  htmlentities(htmlentities($_SESSION['email'], ENT_QUOTES, "UTF-8"));


include('data6rst.php');


//create table posts(id int primay key auto_increment,
//title varchar(100), description text, timing varchar(100),fullname  varchar(100),photo varchar(100),userid varchar(100),
//post_type varchar(100),quantity varchar(100));



$statement = $db->prepare('INSERT INTO posts(
title, 
description,
timing,
fullname,
photo,
userid,
post_type,
quantity
)

  values
(:title, 
:description,
:timing,
:fullname,
:photo,
:userid,
:post_type,
:quantity
)');

$statement->execute(array( 

':title' => 'Plastic and Bottle Trash', 
':description' => 'Plastic and Bottle Trash Waste Management and Recyling',
':timing' => $timer, 
':fullname' => $fullname_sess,
':photo' => $photo_sess,
':userid' =>$userid_sess,
':post_type' =>  'plastic',
':quantity' =>  $qty

));



$res = $db->query("SELECT LAST_INSERT_ID()");
$lastId_post = $res->fetchColumn();

$result = $db->prepare('SELECT * FROM posts where post_type =:post_type');
$result->execute(array(':post_type' => 'plastic'));

$nosofrows = $result->rowCount();

$row = $result->fetch();

$total_plastic = $row['total'];
$total_final = $total_plastic + $qty;



$update = $db->prepare('UPDATE posts SET total =:total where post_type =:post_type');
$update->execute(array(':post_type' => 'plastic', ':total' => $total_final));




if($statement){
echo 1;	

}
else{
//echo "post could not be submitted";
echo 2;
}






?>








