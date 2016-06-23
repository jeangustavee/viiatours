/**
 * Fade in/out carousel image
 */

$(".slide img").hover(function(){
    $(this).stop().animate({"opacity": "1"});
},function(){
    $(this).stop().animate({"opacity": "0.6"});
});