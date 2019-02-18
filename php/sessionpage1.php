<?php
session_start();

?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="styles/main.css">
<title>CSE 135</title>

</head>
<body>
        
        
        <form method="get" action="<?php session_start(); echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
                <label>first name: </label>
                <input id = "firstname" type = "text" name = "firstname"><br>
                <label>last name: </label>
                <input id = "lastname" type = "text" name = "lastname"><br>                
                
                <button id = "submit_btn" type="submit">submit</button>                                                                                
        </form>  
        <?php
        session_start();        
        $_SESSION["firstname"] = $_GET['firstname'];
        $_SESSION["lastname"] = $_GET['lastname'];
        ?>     
        <a id = "redirect_btn" href = "http://104.248.70.89:8081/sessionpage2">page2</a>

</body>
</html>
