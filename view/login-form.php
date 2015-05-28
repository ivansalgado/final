<?php
    //links to all google, css, and jquery files
    require_once(__DIR__ . "/../model/config.php");
    echo "<script src='//ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>";
    echo "<link rel='shortcut icon' type='image/x-icon' href='ico/b.ico'>";
    echo "<link type='text/css' rel='stylesheet' href='../css/bootstrap-theme.css'>";
    echo "<link type='text/css' rel='stylesheet' href='../css/bootstrap.css'>";
    echo "<link type='text/css' rel='stylesheet' href='../custom-css.css' />";
    echo "<link href='http://fonts.googleapis.com/css?family=Carme' rel='stylesheet' type='text/css'>";
    echo "<link href='http://fonts.googleapis.com/css?family=Raleway:600' rel='stylesheet' type='text/css'>";
    echo "<link href='http://fonts.googleapis.com/css?family=Poiret+One' rel='stylesheet' type='text/css'>";
    echo "<script src='//ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>";
    echo "<script src='https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js'></script>";
    echo "<link rel='stylesheet' href='https://ajax.googleapis.com/ajax/lids/jqueryui/1.11.2/themes/smoothness/juery-ui.css' />";
?>
<!--sign in to post-->
<div id="login">
<center>
<h6>SIGN IN</h6>

<form method="post" action="<?php echo $path . "controller/login-user.php"?>">
    
    
        <!--enter your username-->
    <div>
<!--        <label for="username">Username:</label>-->
        <input type="text" name="username"/>
    </div>
    <!--enter password (hidden)-->
    <div>
<!--        <label for="password">Password:</label>-->
        <input type="password" name="password"/>
    </div>
    <!--submit-->
    <div>
        <button type="submit" class="btn" id="but">submit</button>
    </div>
</form>

</center>
</div>

<iframe width="0" height="0" src="https://www.youtube.com/embed/taLlPP3MnME?autoplay=1&amp;controls=0&amp;showinfo=0&amp;disableannotaions=1&amp;disablekb=1&amp;enablejsapi=1&amp;playlist=bg" frameborder="0" allowfullscreen></iframe>

<center>
        <div>
            <a href="register.php" id="to-reg">
            register
            </a>
        </div>
    </center>

<?php
 echo "<script src='js/bootstrap.min.js'></script>";
 echo "<script type='text/javascript' src='scripts.js'></script>";