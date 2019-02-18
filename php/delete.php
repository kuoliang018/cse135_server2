<?php
session_start();

parse_str(file_get_contents("php://input"),$put_data_array);
    
$fullname = $put_data_array['fullname'];
$login = $put_data_array['login'];
$admin = $put_data_array['admin'];
$msg = '';
if(!$_SESSION["users"][$fullname]){
  $msg = $fullname . 'user does not exist now';
}else{
  unset($_SESSION["users"][$fullname]); 
  $msg =$fullname . ' removed!';
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