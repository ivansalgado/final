$("document").ready(function() {
    //box links on story page
    $('.photos img').css('opacity', 1);
    $('.photos li').hover(
            function() {
                $(this).find('img').stop().fadeTo('slow', 0);
            },
            function() {
                $(this).find('img').stop().fadeTo('slow', 1);
            });
    //link to login page
    $('#to-login').hover(
            function() {
                $(this).fadeTo('slow', 0);
            },
            function() {
                $(this).fadeTo('slow', 1);
            });
    //link to register
    $('#to-reg').hover(
            function() {
                $(this).fadeTo('slow', 0);
            },
            function() {
                $(this).fadeTo('slow', 1);
            });

    //link to about page
    $('#about').hover(
            function() {
                $(this).fadeTo('slow', 0);
            },
            function() {
                $(this).fadeTo('slow', 1);
            });

    //link to login page
    $('#log').hover(
            function() {
                $(this).fadeTo('slow', 0);
            },
            function() {
                $(this).fadeTo('slow', 1);
            });

    //link to stories page
    $('#see').hover(
            function() {
                $(this).fadeTo('slow', 0);
            },
            function() {
                $(this).fadeTo('slow', 1);
            });


    //back button
    $('#back').hover(
            function() {
                $(this).fadeTo('slow', 0);
            },
            function() {
                $(this).fadeTo('slow', 1);
            });

    //back button
    $('#back2').hover(
            function() {
                $(this).fadeTo('slow', 0);
            },
            function() {
                $(this).fadeTo('slow', 1);
            });






    //for when you click on the accordion
    $("#accordion").bind('mouseover', mouseOverMe4).bind('mouseout', mouseOutMe4);
    $("#accordian").bind('mouseover', mouseOverMe15).bind('mouseout', mouseOutMe15);


    //the accordion id is an accordion
    $('#accordion').accordion({header: "h6"});
    $('#accordian').accordion({header: "article"});


});


//when you click on the accordion, it slides
function mouseOverMe4() {
    $("#accordion");
}
//when you click on another part of the accordian, it slides again
function mouseOutMe4() {
    $("#accordion");
}
//I honestly don't know what this is or if it even serves a purpose, but my website seems to not work without it so I'm just gonna leave it here
function mouseOverMe15() {
    $("#accordian").css("background-color", "#e0e0e0");
}

function mouseOutMe15() {
    $("#accordian").css("background-color", "#e0e0e0");
}