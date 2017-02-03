<?php
use App\App;
?>
<section class="slideshow">
    <div class="container">
        <div class="slideshow__slogant">
            <p>
                Voter pour <?= App::getTitle(); ?>, Server (FreeBuild, SkyBlock, Créatif)
                <br>
                est gagnier de récompence.
            </p>
            <a href="/vote" class="btn btn-info slideshow__btn">Voter</a>
        </div>
        <div class="slideshow__slider">
            <img class="slideshow__thumb" src="/root/img/slider/1.png" alt="">
        </div>
    </div>
    <span class="slideshow__timeline"></span>
</section>

<div class="container">
    <div class="row">
        <div class="col-xs-9">
            <?php foreach ($datas['posts'] as $post): ?>
                <div class="col-xs-6">
                    <post class="posts">
                        <img class="posts__thumb" src="/root/img/thumb/<?= $post->thumb; ?>" alt="">
                        <a class="btn btn-warning posts__title" href="/post/<?= App::toSlug($post->title); ?>-<?= $post->id; ?>"><h2><?= $post->title; ?></h2></a>
                        <p class="post__content">
                            <?= substr($post->description, 0, 230); ?>
                        </p>
                        <a class="btn btn-success" href="/post/<?= App::toSlug($post->title); ?>-<?= $post->id; ?>">
                            Lire plus
                        </a>
                    </post>
                </div>
            <?php endforeach; ?>
        </div>

        <div class="col-xs-3">
            <div class="best-vote">
                <span class="btn btn-warning" style="display: block; width: 100%; margin-bottom: 10px; font-weight: bold">Best vote</span>
                <ul>
                    <?php foreach ($datas['best-votes'] as $vote): ?>
                    <li><span class="text-warning"><strong><?= $vote->number; ?> votes</strong> /</span> <?= $vote->pseudo; ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
    </div>
</div>