
<?php
$res = "";

if(empty($_GET["response"])){
  $res = '<h1>Error: Specify response paramter</h1>';
  echo $res;
}elseif($_GET["response"] == "XML"){
header('Content-Type: application/xml');
$res = "<msg>Hello Date is ";
$res .=  date("l jS \of F Y h:i:s A");
$res .= ".</msg>";
print ($res);
}elseif($_GET["response"] == "JSON"){
  header('Content-Type: application/json');
  $res = [ msg => "Hello Date is" .  date("l jS \of F Y h:i:s A") ];
  echo json_encode($res);
}

?>
