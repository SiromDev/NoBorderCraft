<div class="container">

    <?php if ($datas['logged']): ?>
        <div class="row">
            <div class="col-sm-12">
                <section class="sidebar">
                    <h3 class="sidebar__title">Différents liens de votes</h3>
                    <div class="sidebar__content">
                        <?php if (!$datas['is_voted']): ?>
                            <ul>
                                <li class="vote-link"><a target="_blank" href="http://www.serveurs-minecraft.org/vote.php?id=41778">Vote 1</a></li>
                                <li class="vote-link"><a target="_blank" href="http://serveurs-minecraft.com/serveur-minecraft.php?Classement=No%20Border%20Craft">Vote 2</a></li>
                                <li class="vote-link"><a target="_blank" href="http://www.serveursminecraft.org/serveur.php?id=1221">Vote 3</a></li>
                            </ul>
                            <a class="btn" id="btn-req" href="/vote/validate">Récupérer</a>
                        <?php else: ?>
                            <a class="btn" href="/">Vous avez déjà voté sur tous les liens, merci ! :P</a>
                        <?php endif; ?>
                    </div>
                </section>
            </div>
        </div>
    <?php else: ?>
        <div class="row">
            <div class="col-sm-12">
                <section class="sidebar">
                    <h3 class="sidebar__title">Votez pour gagner des récompenses !</h3>
                    <div class="sidebar__content">
                        <form class="form" action="" method="post" autocomplete="off">
                            <div class="form-group">
                                <input class="form-control" type="text" id="pseudo" name="pseudo" placeholder="Pseudo Minecraft">
                            </div>
                            <button type="submit" class="btn btn-success">Voter</button>
                        </form>
                    </div>
                </section>
            </div>
        </div>
    <?php endif; ?>

    <div class="row">
        <div class="col-sm-12">
            <section class="sidebar">
                <h3 class="sidebar__title"> <span class="icon-vote left"></span> Top 10 des meilleurs voteurs</h3>
                <div class="sidebar__content">
                    <ul>
                        <?php $i = 0; ?>
                        <?php foreach ($datas['votes'] as $vote): $i++; ?>
                            <li class="vote-link"><?= $vote->pseudo; ?> <span class="right text-bold"><?= $vote->votes; ?></span></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </section>
        </div>
    </div>
</div>