<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>

<title>CSE 135</title>

<style>
    body {
        width: 35em;
        margin: 0 auto;
        font-family: Tahoma, Verdana, Arial, sans-serif;
    }
</style>
</head>
<body>
        <?php
        session_start();                                
        $res = '';
        if($_SESSION["firstname"] != null && $_SESSION["lastname"] != null && $_SESSION["firstname"] != "" && $_SESSION["lastname"] != ""){
          $res = '<h1>Hello ';
          $res .= $_SESSION["firstname"];
          $res .= ' ';
          $res .=  $_SESSION["lastname"];
          $res .= ' nice to meet you!</h1>';
          $res .='<form action="clear" method="post">
                    <input type="submit" value="clear session" name="clear" id="clear_btn" />
                    </form>';
          
          }else{
          $res = '<h1>Howdy stranger. Please tell me your name on page1!</h1>';
           $res .= '<form action="clear" method="post">
                    <input type="submit" value="clear session" name="clear" id="clear_btn" />
                   </form><a id = "redirect_btn" href = "http://104.248.70.89:8081/sessionpage1">page1</a>'; 
                   
          }
          echo $res;
        ?>
 
</body>
</html>
