<?php
        $msg = '';
        $color = '';
        $random = rand(1, 3);
        if($random == 1){
          $color = 'blue';
          $msg = "Hello Web World from Language Javascript on " .  date("l jS \of F Y h:i:s A") . " enjoy my blue page!";
        }
        else if ($random  == 2){
          $color = 'yellow';
          $msg = "Hello Web World from Language Javascript on " .  date("l jS \of F Y h:i:s A") . " enjoy my YELLOW page!";
        }
        else if ($random == 3){
          $color = 'white'; 
          $msg = "Hello Web World from Language Javascript on " .  date("l jS \of F Y h:i:s A") . " enjoy my white page!";
        }
        $res ='';
        
        $res .= '<!DOCTYPE html>
                  <html>
                  <head>
                  <title>CSE 135</title>
                  </head>
                  <body bgcolor = ';
        $res .= $color;
        $res .= '><p>';
        $res .= $msg;
        $res .= '</p></body></html>';
        echo $res;
        ?>