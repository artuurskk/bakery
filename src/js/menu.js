$(document).ready(function(){
    $("#menu-mobile-icon").click(function(){
        $("#topNav").toggleClass("responsive");
    });
    $("#recipe-btn").click(function(){
        $("#full-recipe").fadeToggle();
    });
});