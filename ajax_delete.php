<?php
$id_for_delete=$_GET['name1'];
$database=$_GET['name2'];
include 'php_methods.php';
$con=make_connect('3361977_users');
mysqli_query($con,"DELETE FROM $database WHERE id=$id_for_delete");
mysqli_close($con);