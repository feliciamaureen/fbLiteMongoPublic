<html>

<head>
    <link rel = "stylesheet" href ="FBLiteStyle.css">
</head>

<?php
    //connect to mongoAtlas
    echo"hello";

?>


    <body>
            <div class = "register">
                <h1>Create New Account</h1>
                
                <div class = regForm>
                    <form class = "registerForm" method = "post">
                    <span class = "registerError"><?php echo $registerError;?></span>
                        <div>
                            E-Mail: <input type = "email" id = "email" placeholder = "email" name = "email" /> <br>
                            Full Name: <input type = "text" id = "fullName" placeholder = "Full Name" name = "fullName" /><br>
                            Username: <input type = "text" id = "username" placeholder = "Username" name = "username" /><br>
                            Date of Birth: <input type = "date" id = "DOB" placeholder = "dd/mm/yy" name = "DOB" /><br>
                            Status: <input type = "text" id = "status" placeholder = "Status" name = "status" /><br>
                            Location: <input type = "text" id = "location" placeholder = "Location" name = "location" /><br><br>
                    
                            Gender:<br>
                            <input type="radio" name="gender" value="male" value="male"> 
                            <label for="male">Male</label><br>
                            <input type="radio" name="gender" value="female" value="female">
                            <label for="female">Female</label><br>
                            <input type="radio" name="gender" value="other" value="other"> 
                            <label for="other">Other</label><br><br>
        
                            Visibility:<br>
                            <input type="radio" name="visibility" value="private">
                            <label for="private">Private</label><br>
                            <input type="radio" name="visibility" value="friends-only">
                            <label for="friends-only">Friends Only</label><br>
                            <input type="radio" name="visibility" value="everyone">
                            <label for="everyone">everyone</label><br>
                            </div>
                
                            <div class = "regButton">
                                <button type = "submit" class = "registerButton">Register</button>
                            </div>
                        </form>    
                    </div>
            
                </div>
        </body>

</html>