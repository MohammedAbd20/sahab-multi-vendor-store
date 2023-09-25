$(function(){
    $("div").not(".ignor,:has(*)");

    $("*:contains('REPLACE_ME')")

    $("div").children('.special');

    // $(':header') 
    // //or 
    // $("h1,h2,h3,h4,h5,h6");
    
    // $("li:visible");

    

    $(".random button").click(function(){
        $("#square").toggleClass("squareRandom");
        moveSquare();
    })

    function moveSquare() {
        var max_x = $(window).width() - $('#square').width();
        var max_y = $(window).height() - $('#square').height();
        var random_x = Math.random() * max_x;
        var random_y = Math.random() * max_y;
        
        $('.squareRandom').animate({
            left: random_x,
            top: random_y
        }, 1000, moveSquare);
    }

});