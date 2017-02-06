<div class="container">
    <div class="post">
        <h1 class="btn title"><?= $datas['post']->title; ?></h1>
        <div class="icerik-bilgi">
            <div class="jumbotron">
                <div class="thumbnail">
                    <img src="/root/img/thumb/<?= $datas['post']->thumb; ?>" alt="">
                </div>
                <p> <?= $datas['post']->content; ?> </p>
            </div>
        </div>
    </div>
</div>