$("#gif1").hover(
    function() {
        $(this).attr("src", "animate1.gif");
    },
    function() {
        $(this).attr("src", "static1.jpg");
    }                         
);