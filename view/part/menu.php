<header>
    <div class="logo">Mon Logo</div>
    <nav>
        <ul>
            <li><a href="<?= USER_URL; ?>projets">Projets</a></li>
            <li><a href="<?= USER_URL; ?>equipements">Equipements</a></li>
            <li id="evenements">
                <a href="<?= USER_URL; ?>evenements">Evenements</a>
                <ul id="evenements-menu">
                    <li><a href="<?= USER_URL; ?>futurs-evenements">Futurs événements</a></li>
                    <li><a href="<?= USER_URL; ?>calendrier">Calendrier</a></li>
                    <li><a href="<?= USER_URL; ?>reserver-creneau">Réserver un créneau</a></li>
                </ul>
            </li>
            <li><a href="<?= USER_URL; ?>histoire">Histoire</a></li>
        </ul>
    </nav>
    <?php if ($userLoggedIn): ?>
    <div class="login-button">Mon compte</div>
    <?php else: ?>
    <div class="login-button">Connexion</div>
    <?php endif; ?>
</header>
