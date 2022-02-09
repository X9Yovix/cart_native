/* $(document).ready(function(){
    owl = $(".owl-carousel").owlCarousel({
      autoplay: true,
      autoplaySpeed: 300,
      loop: true,
      navSpeed: 300,
      items: 1,
      margin: 2
    });
    owl.on('changed.owl.carousel', function(e) {
      console.log("test");
    });
  }); */
$(document).ready(function() {
    $('#example').DataTable();

    // banner 
    owl = $("#banner-area .owl-carousel").owlCarousel({
        autoplay: true,
        autoplaySpeed: 300,
        loop: true,
        navSpeed: 300,
        items: 1,
        margin: 2
      });

      owl2 = $("#promo .owl-carousel").owlCarousel({
        autoplay: false,
        autoplaySpeed: 300,
        loop: true,
        navSpeed: 300,
        dots : false,
        nav: true,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 2
            },
            1000: {
                items: 3
            }
        }
      });
    /* $("#banner-area .owl-carousel").owlCarousel({
        
        dots: true,
        items: 1
    }); */

    // promo
    /* $("#promo .owl-carousel").owlCarousel({
        loop: true,
        nav: true,
        dots: false,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 3
            },
            1000: {
                items: 5
            }
        }
    }); */
    //tabledata

    //filter isotop :init section
    var $grid = $(".grid").isotope({
        itemSelector: '.grid-item',
        layoutMode:'fitRows'
    });
    //filter items while pressing button
    $(".button-group").on("click","button",function(){
        var filterValue = $(this).attr("data-filter"); //.samasung .oppo ect
        $grid.isotope({
            filter:filterValue
        });
    })
});


/* login */
var x = document.getElementById('partlogin');
var y = document.getElementById('partRegister');

var a = document.getElementById("visLogin");
var b = document.getElementById("visRegister");

var j = document.getElementById("btn-color-log");
var h = document.getElementById("btn-color-reg");
//var e = document.getElementById('btnlog');

function login() {
    x.style.left = "50px";
    y.style.left = "450px";

    a.style.visibility = "visible";
    b.style.visibility = "hidden";

    a.style.opacity = "1";
    b.style.opacity = "0";

    j.style.backgroundColor = "#ffc107";
    j.style.boxShadow = "0 0 20px 9px #ff61241f";
    j.style.border = "2px solid white";

    h.style.backgroundColor = "white";
    h.style.boxShadow = "none";
    h.style.border = "2px solid white";
}

function register() {
    x.style.left = "-400px";
    y.style.left = "50px";

    a.style.visibility = "hidden";
    b.style.visibility = "visible";

    a.style.opacity = "0";
    b.style.opacity = "1";

    j.style.backgroundColor = "white";
    j.style.boxShadow = "none";
    j.style.border = "2px solid white";

    h.style.backgroundColor = "#ffc107";
    h.style.border = "2px solid white";
    h.style.boxShadow = "0 0 20px 9px #ff61241f";
}


/* $(document).ready(function () {
    $("#myModal").modal('show');
}); */