<?php
/*****************************************************************
Created :  2019-02-10
Author : Ahmad Saugi (zuramai)
E-mail : ahmadsaugigis@gmail.com
Website : https://www.zuramai.net
Facebook : https://www.facebook.com/ahmadsaugi.gis
*****************************************************************/
include_once("instagram-photo-video-upload-api.class.php");

$username = ''; // YOUR INSTAGRAM USERNAME
$password = ''; // YOUR INSTAGRAM PASSWORD
$photo_name = 'square-image.jpg';
$caption = 'Halo'; // YOUR CAPTION

$obj = new InstagramUpload();
$obj->Login($username, $password);
$obj->UploadPhoto($photo_name, $caption);


 	
?>	
