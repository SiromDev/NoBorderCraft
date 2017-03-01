<?php
use App\App;
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title><?= App::getTitle(); ?></title>
    <link rel="stylesheet" href="/root/css/reset.css">
    <link rel="stylesheet" href="/root/css/responsive.css">
    <link rel="stylesheet" href="/root/css/style.css">
    <link rel="stylesheet" href="/root/css/tabs.css">
</head>
<body>

<header class="header">

    <nav class="top-bar">
        <div class="container">
            <a class="top-bar__title" href="/"><?= App::getTitle(); ?></a>
            <div class="right">
                <a class="top-bar__desc" href="/shop/register">Acheter des Iris</a>
            </div>
        </div>
    </nav>

    <nav class="navbar">
        <div class="container">
            <div class="navbar__menu">
                <ul>
                    <li class="navbar__menu__li"><a class="navbar__menu__link" href="/">Accueil</a></li>
                    <li class="navbar__menu__li"><a class="navbar__menu__link" href="/vote">Voter</a></li>
                    <li class="navbar__menu__li"><a class="navbar__menu__link" href="/shop/register">Boutique</a></li>
                    <li class="navbar__menu__li"><a class="navbar__menu__link" href="/forum">Forum</a></li>
                </ul>
            </div>
        </div>
    </nav>

</header>

<div class="web-content">
    <?= $yield; ?>
</div>

<script src="//api.dedipass.com/v1/pay.js"></script>
<script type="text/javascript" src="/root/js/app.js"></script>
<script type="text/javascript" src="/root/js/tabs.js"></script>
</body>
</html>