<div class="container">
    <div class="post">
        <h1 class="btn title" style="margin-bottom: 20px;"><?= $datas['post']->title; ?></h1>
        <div class="icerik-bilgi">
            <div class="jumbotron">
                <div class="thumbnail">
                    <img src="/nbc/root/img/thumb/<?= $datas['post']->thumb; ?>" alt="">
                </div>
                <?= $datas['post']->content; ?>
            </div>
        </div>
    </div>
</div>