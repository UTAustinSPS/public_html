$(document).ready(function(){
    $("#Drop").on("mouseenter mouseleave", function(){
        var x = document.getElementById("navbarDropdownMenuLink").getAttribute("aria-expanded"); 
        if (x == "true") 
        {
            x = "false"
        } else {
            x = "true"
        }
        document.getElementById("navbarDropdownMenuLink").setAttribute("aria-expanded", x);
        var element = document.getElementById("drop");
        element.classList.toggle("show");
        var element = document.getElementById("Drop");
        element.classList.toggle("show");
    });
    $("#Nav").click(function(){
        var x = document.getElementById("Nav").getAttribute("aria-expanded"); 
        if (x == "true") 
        {
            x = "false"
        } else {
            x = "true"
        }
        document.getElementById("Nav").setAttribute("aria-expanded", x);
        var element = document.getElementById("navbarSupportedContent");
        element.classList.toggle("show");
        var element = document.getElementById("Nav");
        element.classList.toggle("collapsed");
    });
});
