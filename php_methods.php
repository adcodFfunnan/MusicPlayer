<?php
function make_connect($database){
   $con=mysqli_connect("fdb20.awardspace.net","3361977_users","753159Ad",$database);
   if (mysqli_connect_errno()) {

 echo"<script>
 <form id='form_main_page' action='index.php' method='post'>
            <input  type='text'  name='return_from_main' value'=''></input>
            <input type='submit' value='Submit'></input>
        </form>
                 document.getElementById('form_main_page').submit(); 
                 </script>";
}else{
   
   
   return $con;
}
    
}
    function test_input($data){
    $data=trim($data);
    $data=stripslashes($data);
    $data=htmlspecialchars($data);
    return $data;
    
}

?>

