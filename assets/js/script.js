// JavaScript pour gérer l'affichage du menu déroulant sous l'élément "Evenements"
document.getElementById("evenements").addEventListener("mouseenter", function() {
    document.getElementById("evenements-menu").style.display = "block";
});

document.getElementById("evenements").addEventListener("mouseleave", function() {
    document.getElementById("evenements-menu").style.display = "none";
});