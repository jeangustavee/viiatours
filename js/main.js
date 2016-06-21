/**
 * Created by Kenold Beauplan on 6/21/2016.
 */

$(".slide img").hover(function(){
    $(this).stop().animate({"opacity": "1"});
},function(){
    $(this).stop().animate({"opacity": "0.6"});
});