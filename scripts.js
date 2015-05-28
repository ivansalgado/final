$("document").ready(function(){
    //for stories page
    $('.photos img').css('opacity', 1);
    $('.photos li').hover(
            function() {
                $(this).find('img').stop().fadeTo('slow', 0);
            },
            function() {
                $(this).find('img').stop().fadeTo('slow', 1);
            });


    //login link
    $('#to-login').hover(
            function() {
                $(this).fadeTo('slow', 0);
            },
            function() {
                $(this).fadeTo('slow', 1);
            });
    //register link
    $('#to-reg').hover(
            function() {
                $(this).fadeTo('slow', 0);
            },
            function() {
                $(this).fadeTo('slow', 1);
            });

    //about link
    $('#about').hover(
            function() {
                $(this).fadeTo('slow', 0);
            },
            function() {
                $(this).fadeTo('slow', 1);
            });

    //
    $('#log').hover(
            function() {
                $(this).fadeTo('slow', 0);
            },
            function() {
                $(this).fadeTo('slow', 1);
            });


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
            
            
    //index accordian
    $("#accordion").bind('mouseover', mouseOverMe4).bind('mouseout', mouseOutMe4);
    $("#accordian").bind('mouseover', mouseOverMe15).bind('mouseout', mouseOutMe15);
       
    $('#accordion').accordion({header: "h6"});
    $('#accordian').accordion({header: "article"});
    
});

function mouseOverMe4(){
$("#accordion");
}

function mouseOutMe4(){
$("#accordion");
}