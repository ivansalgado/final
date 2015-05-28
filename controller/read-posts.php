<!--format of the displayed posts-->
<?php
    require_once(__DIR__ . "/../model/config.php");
    
    $query = "SELECT * FROM posts";
    $result = $_SESSION["connection"]->query($query);
    
    if($result){
        while ($row = mysqli_fetch_array($result)){
            //format of the displayed posts
            echo "<div class='post'>";
            echo "<h6>" . $row['title'] . "</h6>";
            echo "<br />";
            echo "<p>" . $row['post'] . "</p>";
            echo "<br />";
            echo "</div";
        }
        
    }