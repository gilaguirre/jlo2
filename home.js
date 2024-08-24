//Responsive off canvas menu

$(document).ready(function() {
    $(window).trigger('resize');
});



$(window).resize(function() {


    if ($(window).width() > 768){

        

        document.getElementById("mainNavMenu").classList.remove("offcanvas");
        document.getElementById("mainNavMenu").classList.remove("offcanvas");
        document.getElementById("btnClose").style.display = "none";
        document.getElementById("mainNavMenu").style.overflowY = "visible";
        document.querySelector(".about-us-menu ul").style.backgroundColor = "#bda819";


    }
    else{

        document.getElementById("mainNavMenu").classList.add("offcanvas");
        document.getElementById("btnClose").style.display = "block";
        document.getElementById("mainNavMenu").style.overflowY = "scroll";

        document.querySelector(".about-us-menu ul").style.backgroundColor = "white";

    }
    
});


//Code for about-us previous/next button hover

$("#about-box1").mouseover(function(){
    $("#carousel-control-prev-icon").css("visibility", "visible");
    $("#carousel-control-next-icon").css("visibility", "visible");
  });

$("#about-box1").mouseout(function(){
    $("#carousel-control-prev-icon").css("visibility", "hidden");
    $("#carousel-control-next-icon").css("visibility", "hidden");
});

//Code for services previous/next button hover

$("#carouselServices").mouseover(function(){
    $("#carousel-control-next-icon-service").css("visibility", "visible");
    $("#carousel-control-prev-icon-service").css("visibility", "visible");
  });

$("#carouselServices").mouseout(function(){
    $("#carousel-control-next-icon-service").css("visibility", "hidden");
    $("#carousel-control-prev-icon-service").css("visibility", "hidden");
});
<<<<<<< HEAD
=======


>>>>>>> a811cf2111ee18cb446145d327dd75f854e9b590
