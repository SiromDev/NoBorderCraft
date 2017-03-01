<?php
use App\App;
?>

<div class="container">
    <div class="row">
        <div class="col-sm-8">

            <section class="slideshow">
                <img class="slideshow__thumb" src="/root/img/slider/2017-02-22_11.44.43.png" alt="">
                <h2 class="slideshow__slogan">
                    Votez pour <?= App::getTitle(); ?> afin de
                    <br>
                    gagner des récompenses sur nos serveurs !
                </h2>
            </section>

            <?php foreach ($datas['posts'] as $post): ?>
                <post class="post">
                    <a class="post__title" href="/post/<?= App::toSlug($post->title); ?>-<?= $post->id; ?>"><h2><?= $post->title; ?></h2></a>
                    <p class="post__content">
                        <?= substr($post->content, 0, 100); ?>
                    </p>
                    <a class="post__link" href="/post/<?= App::toSlug($post->title); ?>-<?= $post->id; ?>">
                        <span class="icon-read left"></span>
                        Lire l'article
                    </a>
                </post>
            <?php endforeach; ?>

        </div>
        <div class="col-sm-3">

            <div>

                <section class="sidebar">
                    <h3 class="sidebar__title"> <span class="icon-vote left"></span> Meilleurs voteurs</h3>
                    <div class="sidebar__content">
                        <ul>
                            <?php foreach ($datas['best-votes'] as $vote): ?>
                                <li class="vote-link"><?= $vote->pseudo; ?> <span class="right text-bold"><?= $vote->votes; ?></span></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </section>

                <section class="sidebar">
                    <h3 class="sidebar__title"> <span class="icon-server left"></span> Statut des serveurs</h3>
                    <div class="sidebar__content">
                        <ul>
                            <li class="vote-link">Skyblock <span class="right text-bold">
                                <?php
                                $playeronline = file_get_contents('http://minecraft-api.com/api/ping/playeronline.php?ip=nobordercraft.fr&port=25571');
                                $playeronline == false ? $playeronline = "<span class='text-danger'>Éteint</span>" : $playeronline = "<span class='text-success'>$playeronline</span>";
                                echo $playeronline;
                                ?>
                            </span></li>
                            <li class="vote-link">Créatif <span class="right text-bold">
                                <?php
                                $playeronline = file_get_contents('http://minecraft-api.com/api/ping/playeronline.php?ip=nobordercrayft.fr&port=25569');
                                $playeronline == false ? $playeronline = "<span class='text-danger'>Éteint</span>" : $playeronline = "<span class='text-success'>$playeronline</span>";
                                echo $playeronline;
                                ?>
                            </span></li>
                            <li class="vote-link">Freebuild <span class="right text-bold">
                                 <?php
                                 $playeronline = file_get_contents('http://minecraft-api.com/api/ping/playeronline.php?ip=nobordercraft.fr&port=25567');
                                 $playeronline == false ? $playeronline = "<span class='text-danger'>Éteint</span>" : $playeronline = "<span class='text-success'>$playeronline</span>";
                                 echo $playeronline;
                                 ?>
                            </span></li>
                            <li class="vote-link">Total <span class="right text-bold">
                                 <?php
                                 $playeronline = file_get_contents('http://minecraft-api.com/api/ping/playeronline.php?ip=nobordercraft.fr&port=25565');
                                 $playeronline == false ? $playeronline = "<span class='text-danger'>Éteint</span>" : $playeronline = "<span class='text-success'>$playeronline</span>";
                                 echo $playeronline;
                                 ?>
                            </span></li>
                        </ul>
                    </div>
                </section>

            </div>

        </div>
    </div>
</div>