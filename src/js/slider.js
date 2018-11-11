$(document).ready(function () {
    var switched = false;
    $("#slide-left").click(function(){
        if(switched){
            $("#second-img").before($("#third-img"));
            $("#first-img").before($("#second-img"));
        } else{
            $("#first-img").before($("#second-img"));
            $("#second-img").before($("#third-img"));
            switched = true;
        }
    });
    $("#slide-right").click(function(){
        if(switched){
            $("#second-img").before($("#first-img"));
            $("#third-img").before($("#second-img"));
        } else{
            $("#second-img").before($("#third-img"));
            $("#first-img").before($("#second-img"));
            switched = true;
        }
    });

});