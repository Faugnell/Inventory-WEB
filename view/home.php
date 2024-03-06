<?php
require_once(realpath(__DIR__ . '/../view/part/header.php'));
?>
<div class="main-content">
        <!-- Premier bloc -->
        <div class="block">
            <img src="/../assets/img/image_floutee.webp" alt="Image floutée">
            <div class="overlay">
                <h2>Bienvenue au FabLab</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                <a href="histoire.html" class="button">Histoire</a>
            </div>
        </div>

        <!-- Deuxième bloc -->
        <div class="block">
            <h2>Nos équipements</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            <div class="cards">
                <!-- Card 1 -->
                <div class="card">
                    <img src="equipement1.jpg" alt="Equipement 1">
                    <h3>Nom de l'équipement 1</h3>
                    <p>Description de l'équipement 1.</p>
                </div>
                <!-- Card 2 -->
                <div class="card">
                    <img src="equipement2.jpg" alt="Equipement 2">
                    <h3>Nom de l'équipement 2</h3>
                    <p>Description de l'équipement 2.</p>
                </div>
                <!-- Ajouter d'autres cards ici -->
            </div>
        </div>

        <!-- Troisième bloc -->
        <div class="block">
            <h2>Projets réalisés</h2>
            <div class="projects">
                <!-- Projet 1 -->
                <a href="projet1.html" class="project-link">
                    <img src="projet1.jpg" alt="Projet 1">
                </a>
                <!-- Projet 2 -->
                <a href="projet2.html" class="project-link">
                    <img src="projet2.jpg" alt="Projet 2">
                </a>
                <!-- Ajouter d'autres projets ici -->
            </div>
        </div>
    </div>