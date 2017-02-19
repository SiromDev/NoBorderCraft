<?php
use App\App;
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title><?= App::getTitle(); ?></title>
    <link rel="stylesheet" href="/root/css/style.css">
</head>
<body>

<nav class="navbar">
    <div class="container">
        <a class="navbar__title" href="/"><?= App::getTitle(); ?></a>

        <div class="navbar__menu">
            <ul>
                <li class="navbar__menu__li"><a class="navbar__menu__link" href="/">Accueil</a></li>
                <li class="navbar__menu__li"><a class="navbar__menu__link" href="/vote">Voter</a></li>
                <li class="navbar__menu__li"><a class="navbar__menu__link" href="/forum">Forum</a></li>
            </ul>
        </div>
    </div>
</nav>

<div class="web-content">
    <?= $yield; ?>
</div>

<script type="text/javascript" src="/root/js/app.js"></script>
</body>
</html>