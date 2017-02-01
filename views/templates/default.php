<?php
use App\App;
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title><?= App::getTitle(); ?></title>
    <link rel="stylesheet" href="/nbc/root/css/style.css">
</head>
<body>

<nav class="navbar">
    <div class="container">
        <a class="navbar__title" href="/nbc"><?= App::getTitle(); ?></a>

        <div class="navbar__menu">
            <ul>
                <li class="navbar__menu__li"><a class="navbar__menu__link" href="/nbc">Accueil</a></li>
                <li class="navbar__menu__li"><a class="navbar__menu__link" href="/nbc/vote">Voter</a></li>
            </ul>
        </div>
    </div>
</nav>

<div class="web-content">
    <?= $yield; ?>
</div>

<script type="text/javascript" src="/nbc/root/js/app.js"></script>
</body>
</html>