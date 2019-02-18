<?php
echo  " <!doctype html>
   <html>\n<head>\n<title>Hello Node!</title>\n</head>";
$res = "";
$color = $firstname = $lastname = "";
if($_REQUEST['choose_method'] == "post"){
  $color = $_POST['choose_color'];
  $firstname = $_POST['firstname'];
  $lastname = $_POST['lastname'];
  
}else if($_REQUEST['choose_method'] == "get"){
  $color = $_GET['choose_color'];
  $firstname = $_GET['firstname'];
  $lastname = $_GET['lastname'];
}
$res .= '<body bgcolor=';
$res .= $color;
$res .= '><h1>Hello ';
$res .= $firstname;
$res .=  ' ';
$res .= $lastname;
$res .= ' from a Web app written in PHP on ';
$res .= date("h:i:sa");
$res .= '</h1></body></html>';
echo $res;

?>
