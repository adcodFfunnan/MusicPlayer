<!DOCTYPE html>
<html>
    <head>
          
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/plyr/3.5.10/plyr.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/plyr/3.5.10/plyr.css">
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <link rel="stylesheet" href="//code.jquery.com/ui/1.11.0/themes/dark-hive/jquery-ui.css">
        <script src="//code.jquery.com/ui/1.11.0/jquery-ui.js"></script>
            
        <meta charset="UTF-8">
        <title></title>   
        <style>
            #play_list_tabela{
                width:100%;
            }

                

              #plyr-play, .plyr .plyr__play-large{
               
               display: none;
              
            }
         

         .plyr--full-ui.plyr--video .plyr__control--overlaid {

          display: none;
         }


            .celija0{
                width:40%;
                text-align: center;
            }
            .celija12{
                width:30%;
            }
            .naslov_enjoy{
                position:absolute;
                top:30%;
                left:38%;
                font-style:italic;
                font-size:200%;
                color:white;
                
            }
            .delete{
                border-top: 1px solid #96d1f8;
   background:#FF0000;
   
   padding: 2px 10px;
   -webkit-border-radius: 8px;
   -moz-border-radius: 8px;
   border-radius: 8px;
   -webkit-box-shadow: rgba(0,0,0,1) 0 1px 0;
   -moz-box-shadow: rgba(0,0,0,1) 0 1px 0;
   box-shadow: rgba(0,0,0,1) 0 1px 0;
   text-shadow: rgba(0,0,0,.4) 0 1px 0;
   color: white;
   font-size: 14px;
   font-family: Georgia, serif;
   text-decoration: none;
   vertical-align: middle;
   position:relative;
   left:40%;
   
            }
            .delete:hover {
   
   background:#780000 ;
   color: #ccc;
   }
   .music_hide:hover{
    cursor:pointer;
   }
            
            
            #naslov{
                 -webkit-border-radius: 8px;
   -moz-border-radius: 8px;
   border-radius: 8px;
            }
            .music_hide{
                width:10%;
                height:10%;
                position:relative;
                left:90%;
                top:-40%;
                
               
            }
            #playList{
                    -webkit-border-radius: 8px;
   -moz-border-radius: 8px;
   border-radius: 8px;
            }
                      body{
                background-color:#D2691E;
            
               
            }
            
            .text_strong{
                position:absolute;
                left:5%;
                top:10%;
                
            }
            .textt_strong{
                position:absolute;
                left:45%;
                top:10%;
            }
            
            .text{
                position:absolute;
                left:5%;
                top:40%;
                width:35%;
                height:20%;
                
            }
            .textt{
                position:absolute;
                left:45%;
                top:40%;
                width:35%;
                height:20%;
                
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
           
           #myDiv{
               position:absolute;
                 left:55%;
                 top:15%;
             width:35%;
             height:74%;
           
       overflow: scroll;
      overflow-x:hidden; 
      background-color:white ;}
            
            .removeCell{
                position:absolute;
                top:5%;
            }
            .add_music{
               width:40%;
                height:8%;
                position:absolute;
                top:90%;
                left:56%;
                background-color:#FFFACD;
                 -webkit-border-radius: 8px;
   -moz-border-radius: 8px;
   border-radius: 8px;
            }
           
            
            .name_song{
               
                border-color:#000000;
                vertical-align: top; 
                
            }
            .music{
                width:100%;
                height:100%;
            }
             
            #pozadina{
                color:red;
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

            #myTable{
                
                 position:absolute;
                 left:0%;
                 top:0%;
                 
   width:100%; 
   }
  .name_song:hover{
    cursor:pointer;
    background-color:rgb(255, 250, 205);
  }
.td_slika:hover{
  cursor:pointer;
}
   td {
    text-align: left;
}
 .play_dugme {
   border-top: 1px solid #96d1f8;
   background: #65a9d7;
   background: -webkit-gradient(linear, left top, left bottom, from(#3e779d), to(#65a9d7));
   background: -webkit-linear-gradient(top, #3e779d, #65a9d7);
   background: -moz-linear-gradient(top, #3e779d, #65a9d7);
   background: -ms-linear-gradient(top, #3e779d, #65a9d7);
   background: -o-linear-gradient(top, #3e779d, #65a9d7);
   padding: 2px 10px;
   -webkit-border-radius: 8px;
   -moz-border-radius: 8px;
   border-radius: 8px;
   -webkit-box-shadow: rgba(0,0,0,1) 0 1px 0;
   -moz-box-shadow: rgba(0,0,0,1) 0 1px 0;
   box-shadow: rgba(0,0,0,1) 0 1px 0;
   text-shadow: rgba(0,0,0,.4) 0 1px 0;
   color: white;
   font-size: 14px;
   font-family: Georgia, serif;
   text-decoration: none;
   vertical-align: middle;
   position:relative;
   left:40%;
   }
.play_dugme:hover {
   border-top-color: #28597a;
   background: #28597a;
   color: #ccc;
   }
.play_dugme:active {
   border-top-color: #1b435e;
   background: #1b435e;
   };
   #table_play_list{
       
   }
 </style>
     
    </head>
    <body>
        
        <div id='myDivv'>
       
        <div id="playList">
            <table id='play_list_tabela'>
                
            </table>  
        </div>
        <div class="add_music">  
          <strong class="text_strong">Song's URL: </strong>
              <input type="text" class='text'  value=""></input>
             <strong class="textt_strong">Song's name:</strong> 
                <input type="text" class='textt' value=""></input>
                <button class="send myButton" style="position:absolute;left:85%;top:32%;" >OK</button>
              </div>

        

        <div id='naslov'>
             <p><strong>YourPlayList</strong></p>
        </div>
            
        </div>
        
        <div id="pozadina">
            <strong class="naslov_enjoy">Music is the art of the soul</strong>   
        </div>
       
        <?php 
       include 'php_methods.php';
             $brojac_redova=0;
             if(isset($_POST["username"]) && !empty($_POST["username"])){
             if(isset($_POST["pasword"]) && !empty($_POST["pasword"])){
                 $database=test_input($_POST['username']);
                 $database.="_add_";
                 $database.=test_input($_POST['pasword']);
        $array_for_play_list=array();$i=0;
        $con=make_connect('3361977_users');
        $result=mysqli_query($con,"SELECT * FROM $database");
        if(!$result){
  echo" <form id='form_main_page' action='index.php' method='post'>
            <input  type='text'  name='return_from_main' value'=''></input>
            <input type='submit' value='Submit'></input>
        </form>";
                  echo"<script>document.getElementById('form_main_page').submit();</script>";
          
        }
             echo"<div id='myDiv' >";
    
        echo"<table  id='myTable' >";
        while($row=mysqli_fetch_array($result)){
            $name_song_help=$row['name_of_the_song'];
            $row_id=$row['id']."mainTable";
            echo"<tr id=$row_id>";
            echo"<td class='td_slika' onclick=createPlayList('$row[youtube_link]','$name_song_help');>";echo"<img class='music' src='https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcRtWay10ouhtvznqv2mP2CeIypyi6xABa72pbOfeYMZM4fQdENK'></img>";echo"</td>";
            echo"<td class='name_song' onclick=createPlayList('$row[youtube_link]','$name_song_help');>";echo $name_song_help;echo"</td>";
           echo"<td  class='td_slika_hide' >";echo"<img class='music_hide' onclick=DeleteButton('$row[id]','$database'); src='https://cdn1.iconfinder.com/data/icons/perfect-flat-icons-2/512/Close_delete_remove_exit_cross_x_button_error.png'></img>";echo"</td>";
            
            echo "</tr>";
            $brojac_redova++;
            
        } 
        echo"</table>";
     
         echo"</div>";
        while($row=mysqli_fetch_array($result)){
            echo $row['youtube_link']; 
        }
        mysqli_close($con);
  
             }
            }

            else{
                 echo" <form id='form_main_page' action='index.php' method='post'>
            <input  type='text'  name='return_from_main' value'=''></input>
            <input type='submit' value='Submit'></input>
        </form>";
                  echo"<script>document.getElementById('form_main_page').submit();</script>";
            }
            ?>
          <script>

          var security_for_search=0;
              var width_ekrana=$(window).width();
              var height_ekrana=$(window).height();
              var width_td_slika=0.125*width_ekrana;
               var width_td_slika_hide=0.1*width_ekrana;
              var height_td_slika=0.127*height_ekrana;
               
              
              
              $('.td_slika').css("width",width_td_slika);
              $('.td_slika').css("height",height_td_slika);
              $('.td_slika_hide').css("width",width_td_slika_hide);
              $('.td_slika_hide').css("height",height_td_slika);
              $('.name_song').css("width",width_td_slika);
              $('.name_song').css("height",height_td_slika);
           var width_playera=0.4*width_ekrana;
           var height_playera=0.456273764259*height_ekrana;
          
               
             var brojac_redova=0;var table;
             var arrayy=new Array();var array=new Array();var i=0;var create=new Array();var z;var r;
             var btn=new Array();var btnn=new Array();
             
             function createPlayList(a,b){
              table =document.getElementById('play_list_tabela');
              var row=table.insertRow(i);             
              var celija0=row.insertCell(0);
              var celija1=row.insertCell(1);
              var celija2=row.insertCell(2);
              celija0.setAttribute("class","celija0");
              celija1.setAttribute("class","celija12");
              celija2.setAttribute("class","celija12");
              var PlayList=document.getElementById('playList');
              array.push(a);arrayy.push(b);
              create[i]=document.createElement('p');
              create[i].id=i;
              var text=document.createTextNode(arrayy[i]);
              create[i].appendChild(text);
              btn[i]=document.createElement('BUTTON');
              btn[i].setAttribute("class","delete");
              btnn[i]=document.createElement('BUTTON');
              btnn[i].setAttribute("class","play_dugme");
              var texttt=document.createTextNode('Play');
              var textt=document.createTextNode('Delete');   

              btn[i].id=i;btnn[i].id=i;
              btn[i].onclick=function(){
                $(this).remove();
                btnn[this.id].remove();
                create[this.id].remove();
                forFor(this.id);
                
              };
                btnn[i].onclick=function(){
                         r=this.id;
                         loadVideo(r);
                       };
                 btn[i].appendChild(textt);
                 btnn[i].appendChild(texttt);
                 celija0.appendChild(create[i]);
                 celija1.appendChild(btnn[i]);
                 celija2.appendChild(btn[i]);          
                 i++;
                  if(i===1){
                    r=0;
                    loadVideo(r);
                  }
                }
    function forFor(x){
      
      
      x=parseInt(x);var xx=x;
        while(xx<array.length-1){

            array[xx]=array[xx+1];
            arrayy[xx]=arrayy[xx+1];
            create[xx]=create[xx+1];
            create[xx].id=xx;
            btn[xx]=btn[xx+1];
            btn[xx].id=xx;
            btnn[xx]=btnn[xx+1];
            btnn[xx].id=xx;
           
                          xx++;
                      }
                       array.splice(xx);
                       create.splice(xx);
                       btn.splice(xx);
                       btnn.splice(xx);
                       arrayy.splice(xx);needToLoad=0;
                       if(r>x){
                        
                           r--;WasPlaying--;
                         } 
                      else if(r==x){ 
                        needToLoad=1;
                        if(array.length>0){
                          if(r==0){r=0;}else if(r==array.length){r--;WasPlaying--;}
                          }
                          else{
                          destroy();needToLoad=0;
                        }       
                      }
                       i--;
                       document.getElementById("play_list_tabela").deleteRow(x); 
                       if (needToLoad==1){
                        loadVideo(r);
                       }
                     }
    madeDiv();
    player=new Plyr("#myElement");
    var WasPlaying=0;
    function loadVideo(catchR){
      
    myFile=array[catchR];
    destroy();
    madeDiv();
    boldText(catchR);
    WasPlaying=catchR;
    $("#myElement").attr('data-plyr-provider','youtube');
    $("#myElement").attr('data-plyr-embed-id',myFile);
    player=new Plyr("#myElement");
    
    $(".plyr").css({"position":"absolute","left":"3%","top":"3.5%","width":"50%","height":"55%"});

    player.on('ready', function() {

       player.play();

    });

      player.on('ended', function() {        
       if(r<i-1){
                r++;     
       }else{
        r=0;
       }
       loadVideo(r);
    });
    }
        
    function madeDiv(){
      $('#myDivv').append('<div id="myElement"></div>'); 
    }
     function destroy(){
      player.destroy();
      $("#myElement").remove();
      $(".plyr__controls").remove();
    }

function boldText(id){
        create[id].style.fontWeight="bold";
        if (WasPlaying!=id){

          create[WasPlaying].style.fontWeight="normal";
        }
      }


      brojac_redova=<?php echo $brojac_redova;?>;
      var jsdatabase=<?php echo json_encode($database);?>;
         
   $(document).ready(function(){

    

       $('.send').click(function(){
           
        sendd($('.text').val(),$('.textt').val(),jsdatabase);
        
         $('.text').val('');
         $('.textt').val('');
           
       });
   });


function DeleteButton(a,b){

   var dell=document.getElementById(a+"mainTable");
    var xmlhttp=new XMLHttpRequest();var thisresponseText;
    xmlhttp.onreadystatechange=function(){
      if(this.readyState==4 && this.status==200 )
    {

        thisresponseText=this.responseText;
        thisresponseText=thisresponseText.slice(2,thisresponseText.length);
        
        if (thisresponseText==""){
          dell.remove();brojac_redova--;}
        
    } }

        xmlhttp.open("GET","ajax_delete.php?name1="+a +"&name2="+b,true);
        xmlhttp.send();
        
}


function sendd(a,b,c){
  var xmlhttp=new XMLHttpRequest(); var thisresponseText;
  xmlhttp.onreadystatechange=function(){
    if(this.readyState==4 && this.status==200){
      thisresponseText=this.responseText;
      thisresponseText=thisresponseText.slice(2,thisresponseText.length);

      if(thisresponseText.slice(0,2)=="ok"){
      var id_of_inserted_song=thisresponseText.slice(2,thisresponseText.length);
      var table = document.getElementById("myTable");     
      var row = table.insertRow(brojac_redova);row.id=id_of_inserted_song+"mainTable";
      var first = row.insertCell(0);
      first.setAttribute("class","td_slika");
      var second=row.insertCell(1);
      second.setAttribute("class","td_slika");
      var third=row.insertCell(2);
      third.setAttribute("class","td_slika_hide");
      $('.td_slika').css("width",width_td_slika);
      $('.td_slika').css("height",height_td_slika);
      $('.td_slika_hide').css("width",width_td_slika_hide);
      $('.td_slika_hide').css("height",height_td_slika);
      $('.name_song').css("width",width_td_slika);
      $('.name_song').css("height",height_td_slika);
      var slika=document.createElement("img");
      slika.src='https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcRtWay10ouhtvznqv2mP2CeIypyi6xABa72pbOfeYMZM4fQdENK';
      first.onclick=function(){
        createPlayList(a,b);    
      }
      second.onclick=function(){
        createPlayList(a,b);}
      first.appendChild(slika);
      slika.style.width="100%";
      slika.style.height="100%";
      var slika_hide=document.createElement("img");
      slika_hide.src='https://cdn1.iconfinder.com/data/icons/perfect-flat-icons-2/512/Close_delete_remove_exit_cross_x_button_error.png';
      third.appendChild(slika_hide);
      third.onclick=function(){
       DeleteButton(id_of_inserted_song,jsdatabase);}
      slika_hide.setAttribute("class","music_hide");
      slika_hide.style.width="10%";
      slika_hide.style.height="10%";
      slika_hide.style.position="relative";
      slika_hide.style.left="90%";
      slika_hide.style.top="-40%";
      if(b.length==0){
        b="Undefined";
        second.innerHTML =b;}
        else{
          second.innerHTML =b;
        }
        second.setAttribute("class","name_song");
        brojac_redova++;}

        }  
      }

    xmlhttp.open("GET","ajax_send.php?name1="+a +"&name2="+b +"&name3="+c,true);
    xmlhttp.send();
}
var top_play_list=16+46;
var top_play_list_string=top_play_list+'%';
var top_play_listt=16+46+6;
var top_play_listt_string=top_play_listt+'%';

$(document).ready(function($){
$(".myButton").button();
$('#naslov').css("width","50%");
$('#naslov').css("height","5%");
$('#naslov').css("position","absolute");
$('#naslov').css("left","3%");
$('#naslov').css("top",top_play_list_string);
$('#naslov').css("background-color","#FFFACD");
$('#playList').css("width","50%");
$('#playList').css("height","30%");
$('#playList').css("position","absolute");
$('#playList').css("left","3%");
$('#playList').css("top",top_play_listt_string);
$('#playList').css("background-color","#FFFACD");
$('#playList').css("overflow","auto");

});

           
           


</script>
        
     
           
    </body>
</html>
