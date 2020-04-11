<?php
function make_connect($database){
   $con=mysqli_connect("fdb20.awardspace.net","3361977_users","753159Ad",$database);
   return $con;

    
}
    function test_input($data){
    $data=trim($data);
    $data=stripslashes($data);
    $data=htmlspecialchars($data);
    return $data;
    
}

?>

