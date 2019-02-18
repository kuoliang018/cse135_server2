<?php
session_start();


?>
<!DOCTYPE html>
        <html>
        <head>
          <title>CSE 135</title>
        </head>
        <body>        
          <p><?php print_r($_SESSION["users"])?></p>
          <form id = "rest" action="create" method = "POST">
                <label>fullname: </label>
                <input id = "fullname" type = "text" name = "fullname"><br>
                <label>login: </label>
                <input id = "login" type = "text" name = "login"><br>                
                <label>admin: </label>
                <input id = "admin" type = "text" name = "admin"><br>                                 
                
                <button id = "submit_btn" type="submit">submit</button>                                                                                
          </form>    
          <form id = "rest" action="read" method = "GET">
                <label>fullname: </label>
                <input id = "fullname" type = "text" name = "fullname"><br>                             
                <button id = "submit_btn" type="submit">submit</button>                                                                                
          </form>               
        </body>
        </html>