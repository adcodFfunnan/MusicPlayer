<?php
include 'php_methods.php';
$youtubeLink= $_GET['name1'];
$nameSong=$_GET['name2'];
$database=$_GET['name3'];
$con=make_connect('3361977_users');
mysqli_query($con,"INSERT INTO $database(youtube_link,name_of_the_song)VALUES('$youtubeLink','$nameSong')");
$last_id=mysqli_insert_id($con);
mysqli_close($con);
echo "ok";
echo $last_id;


