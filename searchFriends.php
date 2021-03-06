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

                    <p>Feed</p>
            </div>   
    
            <div class = "rightPane">
                    <h2>Friend Requests</h2>
                    <p>list of pending friendships</p>
        
                <section class = "bottomRightPane">
                        <h2>Find Friends</h2>
                        <p>search friends and send friend requests</p>
                        <form class = friendSearch action = "searchFriends.php" method = "post">
                            <input type = "text" id = "friendSearch" placeholder = "Find Friends" name = "friendSearchbar" /><br>      
                            <button type = "submit" class = "friendSearchButton">Search</button>                   
                        </form>
                        
                        <p>results</p>
                        <p>display search results here; somehow<p>
                        <?php
                        //display results
                        if($friendFound !== NULL){
                        echo "<table border='1'>\n";
                        $ncols = oci_num_fields($friendFound);
                        
                        echo "<tr>";

                        //build header
                        for ($i = 1; $i <= $ncols; $i++) {
                            $column_name  = oci_field_name($friendFound, $i);
                    
                            echo "<td><B>$column_name</B></td";
                        }
                        echo "</tr>\n";

                        //populate table, show search results
                        while ($row = oci_fetch_array($friendFound, OCI_ASSOC+OCI_RETURN_NULLS)) {
                            echo "<tr>\n";
                            foreach ($row as $item) {
                                echo "    <td>" . ($item !== null ? htmlentities($item, ENT_QUOTES) : "&nbsp;") . "</td>\n";
                            }
                            echo "</tr>\n";
                        }
                        echo "</table>\n";

                        }

                        else{
                            echo $_POST['searchQuery'], " not found.";
                        }
                
                        oci_close($friendFound);
                        ?>
                        
                        <form class = "addFriendForm" action = "addFriend.php" method = "post">
                            <button type = "submit" class= "addFriendButton">Add Friend</button>
                        </form>
                
                </section>
            </div>  
        </div>
</body>


</html>