<div class="container">
    <div class="post">
        <h1 class="btn title" style="margin: 20px 0; width: 100%;"><?= $datas['post']->title; ?></h1>
        <div class="icerik-bilgi">
            <div class="jumbotron">
                <div class="thumbnail">
                    <img src="/root/img/thumb/<?= $datas['post']->thumb; ?>" alt="">
                </div>
                <p style="padding: 20px;">
                    <?= $datas['post']->content; ?>
                </p>
            </div>
        </div>
    </div>
</div>