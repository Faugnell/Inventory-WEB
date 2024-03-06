document.addEventListener("DOMContentLoaded", function() {
    // Afficher le menu déroulant en dessous de l'élément "Evenements"
    var evenementsMenu = document.getElementById("evenements-menu");
    var evenementsLink = document.getElementById("evenements");

    evenementsLink.addEventListener("mouseenter", function() {
        evenementsMenu.style.display = "block";
    });

    evenementsLink.addEventListener("mouseleave", function() {
        evenementsMenu.style.display = "none";
    });
});