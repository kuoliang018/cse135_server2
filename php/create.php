<?php
session_start();
$fullname = $_POST['fullname'];
$login = $_POST['login'];
$admin = $_POST['admin'];
$msg = '';
if(!$_SESSION["users"][$fullname]){
  $_SESSION["users"][$fullname] = ["fullname" => $fullname, "login" => $login, "admin" => $admin];
  $msg = $_SESSION["users"][$fullname]["fullname"] . ' added!';
}else{
  $msg = 'user exists!';
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