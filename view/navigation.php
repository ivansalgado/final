<?php
    require_once(__DIR__ . "/../model/config.php");
    require_once(__DIR__ . "/../controller/login-verify.php");
    
    if(!authenticateUser()){
        header("Location: " . $path . "index.php");
        die();
    }
?>

<!--allows users to post (when logged in)-->

        
<a href="<?php echo $path . "post.php" ?>"><button type="button" class="btn btn-default"><h3>begin writing</3></button></a>
        
  
            <a href="<?php echo $path . "/../controller/logout-user.php" ?>"><button type="button" class="btn btn-default"><h3>sign out</h3></button></a>
       