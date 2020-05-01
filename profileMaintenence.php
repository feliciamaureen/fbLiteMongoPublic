<html>
<head>
    <link rel = "stylesheet" href ="FBLiteStyle.css">
</head>

<body>

<div class = profileMaintenence>
    <h1>Update Profile</h1>
    <div class = "updateForm">
        <p>Logged in as: <?php echo $_POST['userID']; ?></p>
        <form class = "profileEditForm" action = "profileMaintenence.php" method = "post">
                Username: <input type = "text" class = "formControl" placeholder = "username" name = "userID" /> <br>
                New Username: <input type = "text" class = "formControl" placeholder = "New Username" name = "newUsername" /> <br>
                Status: <input type = "text" id = "status" placeholder = "New Status" name = "newStatus" /><br>
                Location: <input type = "text" id = "location" placeholder = "New Location" name = "newLocation" /><br><br>
                Visibility:<br>
                    <input type="radio" name="newVisibility" value="private">
                    <label for="private">Private</label><br>
                    <input type="radio" name="newVisibility" value="friends-only">
                    <label for="friends-only">Friends Only</label><br>
                    <input type="radio" name="newVisibility" value="everyone">
                    <label for="everyone">everyone</label><br><br>
                   
                    <button type = "submit" class= "updateButton">Update Profile</button>
        </form>
        </div>
            
    <div>
</body>

</html>