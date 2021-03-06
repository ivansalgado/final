<html>
    <head>
        <meta charset="UTF-8">
        <!--icon-->
        <link rel="shortcut icon" type="image/x-icon" href="ico/p.ico">
        <!--links to bootstrap files-->
        <link type='text/css' rel='stylesheet' href='css/bootstrap-theme.css'>
        <link type='text/css' rel='stylesheet' href='css/bootstrap.css'>
        <!--link to css file-->
        <link type='text/css' rel='stylesheet' href='css/custom-css.css'>
        <!--links to fonts-->
        <link href='http://fonts.googleapis.com/css?family=Poiret+One' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Aldrich' rel='stylesheet' type='text/css'>
        <!--jquery scripts-->
        <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>
        <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/lids/jqueryui/1.11.2/themes/smoothness/juery-ui.css" />
        <title>the phs experience</title>
        <style>
            //dimensions of the video
            body {margin: 0px;}
            #bg{width: 100%;}
            #content{position:absolute; top:0px; padding-top:50px; width: 1366px; margin-top:170px;}
            #bg_container{height:615px; overflow:hidden;}
        </style>
    </head>
    <body>





        <!--footage of the campus-->
        <div id="bg_container">
            <video id="bg" src="video/MOVIE.m4v" autoplay="true" loop="true" muted="true"></video>
        </div>

        <!--accordion-->
    <center>
        <div id="content">
            <div id="accordion">
                <h6 id="1">p</h6>
                <p>pasadena high school</p>
                <h6 id="2">h</h6>
                <p>hear our stories</p>
                <h6 id="3">s</h6>
                <p><a href="stories.html" id='see'>see who we are </a></p>
            </div>
        </div>
    </center>


    <!--link to about page-->
    <a href="about.html" id="about">
        about
    </a>


    <!--link to login page-->
    <a href="login.php" id="log">
        sign in
    </a>


    <!--background music-->
    <iframe width="0" height="0" src="https://www.youtube.com/embed/skJGjYtnFO8?autoplay=1&amp;loop=1&amp;controls=0&amp;showinfo=0&amp;disableannotaions=1&amp;disablekb=1&amp;enablejsapi=1&amp;playlist=bg" loop="true" frameborder="0" allowfullscreen></iframe>


    <!--bootstrap/java scripts-->
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="scripts.js"></script>
</body>
</html>
