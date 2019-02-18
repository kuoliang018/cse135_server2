<?php
session_start();
$fullname = $_GET['fullname'];
$msg = '';
if(!$_SESSION["users"][$fullname]){
  
  $msg = 'user does not exist';
}else{
  $msg = $_SESSION["users"][$fullname]["fullname"] . ' with name: ' . $_SESSION["users"][$fullname]["fullname"] . ' login: ' . $_SESSION["users"][$fullname]["login"] . ' admin: ' . $_SESSION["users"][$fullname]["admin"];
  
}
$res = "";

$res .= '<!DOCTYPE html>
        <html>
        <head>
          <title>CSE 135</title>
        </head>
        <body>  ';      
$res .= '<p>';
$res .= $msg;
$res .='</p>';
$res .=
         
       ' </body>
        </html>';
        
echo $res;

?>