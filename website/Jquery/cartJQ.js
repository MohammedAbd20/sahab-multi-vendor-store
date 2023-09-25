$(function(){
    
    findPrice();
    $(".increment").click(incrementCounter);
    $(".decrement").click(decrementCounter);





    function findPrice(){
        $(".price").text($('[data-source="price"]').html())
    }


    var number = $('[data-source="price"]').html().match(/\d+/) ;
    function incrementCounter() {
        event.preventDefault();
        var currentValue = parseInt($(".counter").val());
        $(".counter").val(currentValue + 1);
        $(".decrement").prop("disabled", false);
        $(".price").text($(".counter").val() * number[0] + "₪");
    }
    function decrementCounter() {
        event.preventDefault();
        var currentValue = parseInt($(".counter").val());
        if (currentValue > 1) {
            $(".counter").val(currentValue - 1);
        } else {
            $(".decrement").prop("disabled", true);
        }
        $(".price").text($(".counter").val() * number[0] + "₪");
    }
    $(".counter").on("input", function () {
        if($(".counter").val() == 0 || $(".counter").val() ==""){
            $(".price").text(number[0]+ "₪");
        }else{
            $(".price").text($(".counter").val() * number[0] + "₪");
            
        }
    });
});