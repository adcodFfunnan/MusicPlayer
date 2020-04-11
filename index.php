<!DOCTYPE html>

<html>
    <head>
         
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <meta charset="UTF-8">
        <title></title>
        <style>
            .blijedo{
                color:#B8B8B8 ;
            }
            .naslov_enjoy{
                position:absolute;
                top:30%;
            left:38%;
                font-style:italic;
                font-size:200%;
                color:white;
                
            }
            .alert{
                background-color:#FF9999;
                 border-style: solid;
    border-color: red;
                
            }
           
            #faildd{
                position:absolute;
                left:20%;
                top:10%;
                width:60%;
                border-style:dashed;
                border-width:1px;
                border-color:#E0E0E0 ; 
            }
            #faild{
                position:absolute;
                width:60%;
               
                top:5%;
                left:20%;
               background-color:#FF9999;
                 border-style: solid;
    border-color: red;
                
            }
            
            #faild_red{
                position:absolute;
                width:60%;
               
                top:5%;
                left:20%;
               background-color:#FF9999;
                 border-style: solid;
    border-color: red;
                
            }
             #faild_green{
                position:absolute;
                width:60%;
               
                top:5%;
                left:20%;
               background-color:greenyellow;
        
                
            }
            
            
            
            
            body{
                background-color:#D2691E;
            
                
                
            }
            #myDivv{
                position:absolute;
                left:10%;
                top:12%;
                width:80%;
                height:87%;
                background-color:#FFFFFF;
                -webkit-border-radius: 8px;
   -moz-border-radius: 8px;
   border-radius: 8px;
            }
             #pozadina{
               
                background:#000000;
                 width:80%;
                 height:10%;
                 position:absolute;
                 top:1%;
                 left:10%;
                 -webkit-border-radius: 8px;
   -moz-border-radius: 8px;
   border-radius: 8px;
   
            }
            #dugme{
                background-color:red;
            }
            .Sing_IN{
                position:absolute;               
                left:20%;
                top:40%;
                width:25%;
                height:30%;
                
               
            }
            .Sing_IN2{
                position:absolute;               
                left:55%;
                top:40%;
                width:25%;
                height:60%;
                
               
            }
            .sing_in_user{
                position:absolute;
                left:10%;
                top:12%;
                width:50%;
                height:10%;
            }
            
            .sing_in_userUp{
                position:absolute;
                left:10%;
                top:6%;
                width:50%;
                height:5%;
            }
            
            
            .sing_in_input{
                position:absolute;
                left:10%;
                top:20%;
                width:70%;
                
               
                
            }
            .sing_in_inputUp{
                position:absolute;
                left:10%;
                top:10%;
                width:70%;
                
            }
                 
            .sing_in_pasword{
                position:absolute;
                left:10%;
                top:37%;
                
                width:50%;
                height:10%;
            }
            .sing_in_paswordUp{
                position:absolute;
                left:10%;
                top:18.5%;
                
                width:50%;
                height:5%;
            }
            
            .retype{
                position:absolute;
                left:10%;
                top:31%;
                
                width:50%;
                height:5%;
            }
            
   
            .sing_in_inputp{
                position:absolute;
            left:10%;
            top:45%;
            width:70%;
            }
            
              .sing_in_inputpUp{
                position:absolute;
            left:10%;
            top:22.5%;
            width:70%;
              }
              
              .retype_paswordUp{
                position:absolute;
            left:10%;
            top:35%;
            width:70%;
              }
              #confirm_password{
                  position:absolute;
                  left:10%;
                  top:41%;
                  color:red;
                  font-family: "Times New Roman";
                  font-size:80%;
                   visibility:hidden;
              }
                #no_passwordC{
                  position:absolute;
                  left:10%;
                  top:41%;
                  color:red;
                  font-family: "Times New Roman";
                  font-size:80%;
                  visibility:hidden;
              }
    
                  #no_password{
                  position:absolute;
                  left:10%;
                  top:28.5%;
                  color:red;
                  font-family: "Times New Roman";
                  font-size:80%;
                   visibility:hidden;
              }
               #no_username{
                  position:absolute;
                  left:10%;
                  top:16%;
                  color:red;
                  font-family: "Times New Roman";
                  font-size:80%;
                   visibility:hidden;
              }
              
              
               #no_usernameIn{
                  position:absolute;
                  left:10%;
                  top:32%;
                  color:red;
                  font-family: "Times New Roman";
                  font-size:80%;
                   visibility:hidden;
              }
                #no_passwordIn{
                  position:absolute;
                  left:10%;
                  top:57%;
                  color:red;
                  font-family: "Times New Roman";
                  font-size:80%;
                   visibility:hidden;
              }
              
  
            
            .dugme_signin{
                position:absolute;
                left:10%;
                top:70%;
                width:30%;
                height:20%;
                background-color:#B00000 ;
                  color:white;
                  cursor:pointer;
            }
            .dugme_signup{
                position:absolute;
                left:10%;
                top:47.5%;
                width:30%;
                height:10%;
                background-color:#B00000 ;
                  color:white;
                  cursor:pointer;
            }
            .dugme_signin:hover{
                background-color:#500000 ;
            }
            .dugme_signup:hover{
                background-color:#500000 ;
                
            }
            .align{
             position:relative;
             top:25%;
             height:50%;
             
            }
            #canvas_signin{
                position:absolute;
                left:20%;
                top:30%;
                background-color:white;
                width:25%;
                height:10%; 
            }
            #canvas_signinn{
                position:absolute;
                left:55%;
                top:30%;
                background-color:white;
                width:25%;
                height:10%; 
            }
            #signin_naslov{
                position:absolute;
                left:20%;
                top:29%;
                width:25%;
                height:5%;
                
            }
             #signup_naslov{
                position:absolute;
                left:55%;
                top:29%;
                width:25%;
                height:5%;
                
            }
            .font{
                font-size:150%;
            }
            #form{
                visibility:hidden;
            }
            #formUp{
                visibility:hidden;
              
            }
        </style>
    </head>
    <body>
        
       
        <div id="pozadina">
              <strong class="naslov_enjoy"> Music is the art of the soul</strong>
           
        </div>
        <div id='myDivv'>
            <canvas id='canvas_signin' width=100 height=100></canvas>
            <canvas id='canvas_signinn' width=100 height=100></canvas>
           
            <div id='faildd'><center class="blijedo">Create playlist of youtube videos</center> </div>
            <form id='form' action="main_page.php" method="post">
                  
            
               
                <input class="for_username" type="text" name="username" value=""></input>    
           
            
               
                <input class="for_pasword" type="text" name="pasword" value=""></input>
            
            <input type="submit" value="Submit">
        </form>
            <div id="signup_naslov">
                    <center  class="align" ><b class="font">Member Sign Up</b></center>
                </div>
            <div id="signin_naslov">
                    <center  class="align"><b class="font">Member Sign In</b></center>
                </div> 
            <div class="Sing_IN">  
          <a class="sing_in_user">User name:</a>
              <input type="text" class='sing_in_input'  placeholder=" "></input>
             <a class="sing_in_pasword">Password:</a> 
                <input type="password" class='sing_in_inputp' value=""></input>
                   <div id='no_passwordIn'><a>Please enter a password</a> </div>
                  <div id='no_usernameIn'><a>Please enter a username</a> </div>
                <div class='dugme_signin'><center class='align'>SIGN IN</center></div>
                
        </div>
            
             <div class="Sing_IN2">  
          <a class="sing_in_userUp">User name:</a>
              <input type="text" class='sing_in_inputUp'  value=""></input>
             <a class="sing_in_paswordUp">Password:</a> 
             <input type="password" class='sing_in_inputpUp' value=""></input>
              <a class="retype">Confirm Password:</a> 
              <input type="password" class='retype_paswordUp' value=""></input>
                 <div id='confirm_password'><a>Please enter the same password as above.</a> </div>
                 <div id='no_password'><a>Please enter a password</a> </div>
                 <div id='no_passwordC'><a>Please enter a password</a> </div>
                  <div id='no_username'><a>Please enter a username</a> </div>
                <div  class="dugme_signup"><center class='align'>SIGN UP</center></div>
                
        </div>
 
        </div>
  
        <?php
        
       if(isset($_POST["SingUpUsername"]) && !empty($_POST["SingUpUsername"])){
           if(isset($_POST["SingUpPasword"])&& !empty($_POST["SingUpPasword"])){
               
               $database_for_create=test_input($_POST['SingUpUsername']);
              $string="_add_";
              $database_for_create.=$string;
               $pasword=  test_input($_POST['SingUpPasword']);
               $database_for_create.=$pasword;
         
               $con=mysqli_connect("fdb20.awardspace.net","3361977_users","753159Ad","3361977_users");
       
               $sql="CREATE TABLE $database_for_create(id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,youtube_link TEXT,name_of_the_song TEXT)DEFAULT CHARACTER SET utf8 ENGINE=InnoDB";
               $create_table=mysqli_query($con,$sql);
               if(!$create_table){
                  echo"<div id='faild_red'><center>Sorry,we can't SingUp you, try again with no space in username.</center> </div>";
                     echo"<script>$('#myDivv').append($('#faild_red'));</script>";
                      mysqli_close($con);
                 }else{
                  mysqli_query($con,"INSERT INTO $database_for_create(youtube_link,name_of_the_song) VALUES('https://www.youtube.com/watch?v=ekzHIouo8Q4','WhenIWasYourMan')");
               mysqli_query($con,"INSERT INTO $database_for_create(youtube_link,name_of_the_song) VALUES('https://www.youtube.com/watch?v=k9e157Ner90','MissingYou')");
               mysqli_close($con);
               echo"<div id='faild_green'><center>Thank you and welcome, Sign In and enjoy music.</center> </div>";
                     echo"<script>$('#myDivv').append($('#faild_green'));</script>";

                 }
               }
               
           }
   
       
              if(isset($_POST["return_from_main"])){
            echo"<div id='faild'><center>Sorry, we do not recognize the User name or Password entered. Please double check your entry and try again.</center> </div>";
           echo"<script>$('#myDivv').append($('#faild'));</script>";
        }
        
        function test_input($data){
    $data=trim($data);
    $data=stripslashes($data);
    $data=htmlspecialchars($data);
    return $data;
    
}
 
        
        ?>  
          
             <form id='formUp' action='index.php' method='post'>
<input class='for_usernameUp'type='text' name=SingUpUsername>
<input class='for_paswordUp' type='text' name=SingUpPasword>
        <input type='submit' value='GO'></input>
</form>
          
            
    </body>
    <script>

   var canvas = document.getElementById("canvas_signin"); 
   var context = canvas.getContext("2d");


context.beginPath();
context.moveTo(0, 50); 
context.lineTo(100, 50);
context.strokeStyle = "#E0E0E0"; 
context.lineWidth = 5;
context.stroke();
 canvas = document.getElementById("canvas_signinn"); 
 context = canvas.getContext("2d");
context.beginPath();
context.moveTo(0, 50); 
context.lineTo(100, 50);
context.strokeStyle = "#E0E0E0"; 
context.lineWidth = 5;
context.stroke();


$('.dugme_signin').click(function(){
    $('#faild').css("visibility","hidden");
     $('#faild_red').css("visibility","hidden");
    var osigurac=0;
     $('#confirm_password').css("visibility","hidden");
 $('#no_password').css("visibility","hidden");
  $('#no_passwordC').css("visibility","hidden");
   $('#no_username').css("visibility","hidden");
       $('.sing_in_inputUp').val("");
   $('.sing_in_inputpUp').val("");
   $('.retype_paswordUp').val("");
   
   $('.sing_in_inputUp').removeClass("alert");
   $('.sing_in_inputpUp').removeClass("alert");
   $('.retype_paswordUp').removeClass("alert");
   
    if($('.sing_in_input').val()==''){
          $('#no_usernameIn').css("visibility","visible");
          $('.sing_in_input').addClass("alert");
          osigurac=1;
      }else{
               $('#no_usernameIn').css("visibility","hidden");
          $('.sing_in_input').removeClass("alert");
          
      }
       if( $('.sing_in_inputp').val()==''){
          $('#no_passwordIn').css("visibility","visible");
          $('.sing_in_inputp').addClass("alert");
          osigurac=1;
      }
      else{
          $('#no_passwordIn').css("visibility","hidden");
          $('.sing_in_inputp').removeClass("alert");
      }
    
     

    if(osigurac==0){
        $('.for_username').val($('.sing_in_input').val());
$('.for_pasword').val($('.sing_in_inputp').val());
$('.sing_in_input').val("");
$('.sing_in_inputp').val("");
document.getElementById("form").submit();
         
    }

});
 
$('.dugme_signup').click(function(){
   $('#faild').css("visibility","hidden");
    $('#faild_red').css("visibility","hidden");
    var osigurac=0;
        $('#no_passwordIn').css("visibility","hidden");
   $('#no_usernameIn').css("visibility","hidden");
   $('.sing_in_input').val("");
   $('.sing_in_inputp').val("");
   $('.sing_in_inputp').removeClass("alert");
   $('.sing_in_input').removeClass("alert");
    if($('.sing_in_inputUp').val()==''){
        osigurac=1;
         $('.sing_in_inputUp').addClass("alert");
         $('#no_username').css("visibility","visible");
          $('#confirm_password').css("visibility","hidden");
       
    }else{
        $('.sing_in_inputUp').removeClass("alert");
         $('#no_username').css("visibility","hidden");
    }

   if($('.sing_in_inputpUp').val()=='' ){
        osigurac=1;
        $('#no_password').css("visibility","visible");
          $('#confirm_password').css("visibility","hidden");
          $('.sing_in_inputpUp').addClass("alert");
         }else {
              $('#no_password').css("visibility","hidden");
              $('.sing_in_inputpUp').removeClass("alert");
         }
         if($('.retype_paswordUp').val()==''){
             osigurac=1;
                $('#no_passwordC').css("visibility","visible");
                  $('#confirm_password').css("visibility","hidden");
                $('.retype_paswordUp').addClass("alert");
         }else{
              $('.retype_paswordUp').removeClass("alert");
                $('#no_passwordC').css("visibility","hidden");
         }
         if(osigurac==0){
     if($('.sing_in_inputpUp').val()==$('.retype_paswordUp').val()){
    $('.for_usernameUp').val($('.sing_in_inputUp').val());
    $('.for_paswordUp').val($('.sing_in_inputpUp').val());
    $('.sing_in_inputUp').val("");
    $('.sing_in_inputpUp').val("");
    document.getElementById("formUp").submit();
    }
    else {
         $('.retype_paswordUp').addClass("alert");
       $('#confirm_password').css("visibility","visible");
       $('#no_passwordC').css("visibility","hidden");
    }
         }
});

    </script>
</html>


