<?php
    require_once(__DIR__ . "/../model/config.php");
    require_once(__DIR__ . "/../controller/login-verify.php");
    
    if(!authenticateUser()){
        header("Location: " . $path . "index.php");
        die();
    }
    
    //links to all google, css, and jquery files
    echo "<script src='//ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>";
    echo "<link rel='shortcut icon' type='image/x-icon' href='ico/b.ico'>";
    echo "<link type='text/css' rel='stylesheet' href='../css/bootstrap-theme.css'>";
    echo "<link type='text/css' rel='stylesheet' href='../css/bootstrap.css'>";
    echo "<link type='text/css' rel='stylesheet' href='../css/custom-css.css' />";
    echo "<link href='http://fonts.googleapis.com/css?family=Carme' rel='stylesheet' type='text/css'>";
    echo "<link href='http://fonts.googleapis.com/css?family=Raleway:600' rel='stylesheet' type='text/css'>";
    echo "<link href='http://fonts.googleapis.com/css?family=Poiret+One' rel='stylesheet' type='text/css'>";
    echo "<script src='//ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>";
    echo "<script src='https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js'></script>";
    echo "<link rel='stylesheet' href='https://ajax.googleapis.com/ajax/lids/jqueryui/1.11.2/themes/smoothness/juery-ui.css' />";
?>
<!--submits posts-->
<div class="jumbotron">
<h1>write your story</h1>
<form method="post" action="<?php echo $path . "controller/create-post.php"; ?>">
    <!--name your post-->
    <div>
        <label for="title">name </label>
        <input id="inp" type="text" name="title" />
    </div>
    <!--type your post-->
    <div>
        <label for="post">story </label>
        <textarea name="post"></textarea>
    </div>
    <!--submit your post-->
    <div>
        <button type="submit">submit</button>
    </div>
</form>
</div>


<!--jquery scripts-->
<?php
 echo "<script src='js/bootstrap.min.js'></script>";
 echo "<script type='text/javascript' src='scripts.js'></script>";
?>