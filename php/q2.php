<?php
  print "saj";
  $string = $_SERVER['QUERY_STRING'];
  if( $string == "XML") {
    print "<?xml version='1.0' encoding='UTF-8'?> Hello Data it's some-date";
    print "ssss";
  }

  if( $string == "JSON") {
    print " {"msg": "Hello Data it's some-date"} ";
  } 
 
?>



