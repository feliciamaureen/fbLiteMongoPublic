<html>


<head>
    <link rel = "stylesheet" href ="FBLiteStyle.css">
</head>

<body>



        <div class = "banner">
        <a href = "main.php"> <h1>Facebook Lite</h1> </a>
        </div>
     
        <div class = "mainPage"> 
            <div class = "leftPane">
                    <h2>Manage Profile</h2>
                    <p>Logged in as <?php echo $_POST['userID']; ?> </p>
                <div class = accountButtons>
                    <a href="profileMaintenence.php">Profile</a>
                    <button type = "submit" formaction = "deleteAccount.php" class = "deleteAccButton" onsubmit = "accDelete()">Delete Account</button>
                    <p id = "accDel"></p>
                </div>
            </div>  
            
            <div class = "middle">
                <h2>New Post</h2>
                    <form class = newPost action = "addPosts.php" method = "post">
                            <textarea name = "postBody" placeholder = "Write Something" rows="4" cols="50"></textarea><br><br>
                            <button type = "submit" class = "postButton">Post</button>
                    </form>
            </div>   
    
            <div class = "rightPane">
                    <h2>Friend Requests</h2>
                        <form class = "acceptFriend" action = "acceptFriendReq.php" method = "post">
                            <button type = "submit" class= "addFriendButton">Accept</button>
                        </form>
                        
                        <form class = "rejectFriend" action = "deleteFriendReq.php" method = "post">
                            <button type = "submit" class= "addFriendButton">Delete</button>
                        </form>
        
                <section class = "bottomRightPane">
                        <h2>Find Friends</h2>
                        <p>search friends and send friend requests</p>
                        <form class = friendSearch action = "searchFriends.php" method = "post">
                            <input type = "text" id = "friendSearch" placeholder = "Find Friends" name = "friendSearchbar" /><br>      
                            <button type = "submit" class = "friendSearchButton">Search</button>                   
                        </form>

                </section>
            </div>  
        </div>   
    </body>
</html>
