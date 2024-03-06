<header>
    <div class="logo">Mon Logo</div>
    <nav>
        <ul>
            <li><a href="<?= SITE_URL; ?>/projets">Projets</a></li>
            <li><a href="<?= SITE_URL; ?>/equipements">Equipements</a></li>
            <li id="evenements">
                <a href="<?= SITE_URL; ?>/evenements">Evenements</a>
                <ul id="evenements-menu">
                    <li><a href="<?= SITE_URL; ?>/futurs-evenements">Futurs événements</a></li>
                    <li><a href="<?= SITE_URL; ?>/calendrier">Calendrier</a></li>
                    <li><a href="<?= SITE_URL; ?>/reserver-creneau">Réserver un créneau</a></li>
                </ul>
            </li>
            <li><a href="<?= SITE_URL; ?>/histoire">Histoire</a></li>
        </ul>
    </nav>
    <?php if ($userLoggedIn): ?>
    <div class="login-button">Mon compte</div>
    <?php else: ?>
    <div class="login-button">Connexion</div>
    <?php endif; ?>
</header>
