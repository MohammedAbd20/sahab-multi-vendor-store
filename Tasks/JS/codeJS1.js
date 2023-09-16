

// var par = document.querySelector("p")
// var plus = document.querySelector(".plus")
// var minus = document.querySelector(".minus")
// var reset = document.querySelector(".reset")
// var counter = 16;
// plus.addEventListener("click",()=>{
//     counter++;
//     par.style.fontSize = counter + "px"
//     par.innerHTML = (counter - 16) + 1
// })
// minus.addEventListener("click",()=>{
//     counter--;
//     par.style.fontSize = counter + "px"
//     par.innerHTML = (counter - 16) - 1
// })
// reset.addEventListener("click",()=>{
//     counter = 16;
//     par.style.fontSize = counter + "px"
//     par.innerHTML = 0
// })


$(function(){
    var par = $("p");
    var counter = 16;
    $('.plus').click(function(){
        counter++;
        par.css("font-size",`${counter}px`)
        par.html(`${(counter - 17) + 1}`)
    });
    $('.minus').click(function(){
        counter--;
        par.css("font-size",`${counter}px`)
        par.html(`${(counter - 15) - 1}`)
    });
    $('.reset').click(function(){
        counter = 16
        par.css("font-size",`${counter}px`)
        par.html(`${0}`)
    });
});



















// author way to answor home work 

// var button = document.querySelectorAll(".btn button");
// button.forEach(e=>{
//     e.addEventListener("click",function(ee){
//         if (e.className == "plus") {
//             counter++;
//             par.style.fontSize = counter + "px"
//             par.innerHTML = (counter - 16)
//         }else if(e.className == "minus"){
//             counter--;
//             par.style.fontSize = counter + "px"
//             par.innerHTML = (counter - 16)
//         }else{
//             counter = 16;
//             par.style.fontSize = counter + "px"
//             par.innerHTML = 0
//         }
//     })
// })


