function navHeader() {
        var nav = document.getElementById("burger-navigation");
        var burger = document.getElementById("fa-bars");
        nav.style.right = "-4%";
        nav.style.top = "0%";
        $( "#fa-bars" ).fadeOut( "500", function() {
        // Animation complete.
         });
    }
function croixHeader() {
        var nav = document.getElementById("burger-navigation");
        var burger = document.getElementById("fa-bars");
        nav.style.right = "-500px";
        burger.style.display = "block";
    }
