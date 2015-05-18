$("document").ready(function(){
    
//    $("#accordion").css("background-color", "black");
//    $("#accordian").css("background-color", "#e0e0e0");
//    $("#1").css("background-color", "black");
//    $("#2").css("background-color", "black");
//    $("#3").css("background-color", "black");
    
    
    
    
    $('.photos img').css('opacity', 1);
    $('.photos li').hover(
            function() {
                $(this).find('img').stop().fadeTo('slow', 0);
            },
            function() {
                $(this).find('img').stop().fadeTo('slow', 1);
            });
    
    
    
    
    
    $("#accordion").bind('mouseover', mouseOverMe4).bind('mouseout', mouseOutMe4);
//    $("#1").bind('mouseover', mouseOverMe5).bind('mouseout', mouseOutMe5);
//    $("#2").bind('mouseover', mouseOverMe6).bind('mouseout', mouseOutMe6);
//    $("#3").bind('mouseover', mouseOverMe7).bind('mouseout', mouseOutMe7);
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

//function mouseOverMe5(){
//$("#1").css("background-color", "black");
//}
//
//function mouseOutMe5(){
//$("#1").css("background-color", "black");
//}
//
//function mouseOverMe6(){
//$("#2").css("background-color", "black");
//}
//
//function mouseOutMe6(){
//$("#2").css("background-color", "black");
//}
//
//function mouseOverMe7(){
//$("#3").css("background-color", "black");
//}
//
//function mouseOutMe7(){
//$("#3").css("background-color", "black");
//}

function mouseOverMe15(){
$("#accordian").css("background-color", "#e0e0e0");
}

function mouseOutMe15(){
$("#accordian").css("background-color", "#e0e0e0");
}
