document.addEventListener("DOMContentLoaded", function() {
    // Votre code JavaScript ici
    document.getElementById("evenements").addEventListener("mouseenter", function() {
        document.getElementById("evenements-menu").style.display = "block";
    });

    document.getElementById("evenements").addEventListener("mouseleave", function() {
        document.getElementById("evenements-menu").style.display = "none";
    });
});