<html>

<head>
    <link rel = "stylesheet" href ="FBLiteStyle.css">
</head>

<?php
    //connect to mongoAtlas
    echo "hello";
    include_once("../../app/vendor/autoload.php");
    try {
        echo "Check point 1 -- before connection established<BR>";
        $client = new MongoDB\Client(
        $db = $client->test;
        echo "Check point 2 -- after connection established<BR>";
    } 
    
    catch (MongoDB\Driver\Exception\Exception $e) {
    
        $filename = basename(__FILE__);
    
        echo "The $filename script has experienced an error.\n";
        echo "It failed with the following exception:\n";
    
        echo "Exception:", $e->getMessage(), "\n";
        echo "In file:", $e->getFile(), "\n";
        echo "On line:", $e->getLine(), "\n";
    }

?>

<body>

    <div class = appHome>
        <div class = "loginBanner">
                <h1>Welcome to Facebook Lite</h1>
        </div>

        <div class = "loginForm">
            <h3>Login</h3>
            <form class = "login" action = "main.php" method = "post">
                <div>
                    Username: <input type = "text" class = "formControl" placeholder = "username" name = "userID" /> <br>
                    Password: <input type = "password" class = "formControl" placeholder = "password" name = "password" /><br><br>
                
                    <button type = "submit" class= "loginButton">Login</button><br><br>
                    <a href="register.php">Register</a>
                </div>
            </form> 
        </div>
        
    </div>    

   
</body>

</html>