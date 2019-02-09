<?php
/*****************************************************************
Created :  2019-02-10
Author : Ahmad Saugi (zuramai)
E-mail : ahmadsaugigis@gmail.com
Website : https://www.zuramai.net
Facebook : https://www.facebook.com/ahmadsaugi.gis
*****************************************************************/
include_once("instagram-photo-video-upload-api.class.php");

$username = ''; // ISI USERNAME MU
$password = ''; // ISI PASSWORD MU
$nama_foto = 'square-image.jpg';
$caption = 'Halo'; // ISI CAPTION MU

$obj = new InstagramUpload();
$obj->Login($username, $password);
$obj->UploadPhoto($nama_foto, $caption);


 	
?>	