function navHeader() {
        var nav = document.getElementById("burger-navigation");
        $( "#burger-navigation" ).fadeIn( "2000", function() {
        // Animation complete.
         });
        $( "#fa-bars" ).fadeOut( "500", function() {
        // Animation complete.
         });
    }
function croixHeader() {
        $( "#fa-bars" ).fadeIn( "500", function() {
        // Animation complete.
         });
        $( "#burger-navigation" ).fadeOut( "2000", function() {
        // Animation complete.
         });
    }
