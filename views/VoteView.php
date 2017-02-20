<div class="container">

    <br>

    <?php if ($datas['logged']): ?>
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box__content">
                        <?php if (!$datas['is_voted']): ?>
                            <p>
                                Voter permet de gagner des clés en jeu, pour les récupérer il suffit de cliquer sur  <span class="text-bold">récupérer</span> !
                                <br>
                                Une fois que vous aurez récupérer connectez-vous et faites <span class="text-bold">/vote</span> afin de gagner une récompense sur l'un des serveurs !
                                <br>
                                <span class="text-bold text-warning">Vous pouvez voter tout les 24h</span>
                            </p>

                            <br>


                            <a target="_blank" class="btn" href="http://www.serveurs-minecraft.org/vote.php?id=41778">Vote 1</a>
                            <a target="_blank" class="btn" href="http://serveurs-minecraft.com/serveur-minecraft.php?Classement=No%20Border%20Craft">Vote 2</a>
                            <label for="#" class="text-bold text-danger">Ce lien est instable, <span class="text-success">il est donc possible que vous ne gagniez pas votre clé !</span> </label>
                            <a target="_blank" class="btn" href="http://www.serveursminecraft.org/serveur.php?id=1221">Vote 3</a>
                            <a class="btn btn-success btn-empty" id="btn-req" href="/vote/validate">Récuperer</a>
                        <?php else: ?>
                            <a class="btn btn-poke" href="/">Vous avez déjà voté sur tous les liens, merci ! :P</a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    <?php else: ?>
        <div class="row">
            <div class="col-xs-12">
                <form class="form" action="" method="post">
                    <div class="form-group">
                        <label for="pseudo" class="form-label">Pseudo Minecraft</label>
                        <input class="form-control" type="text" id="pseudo" name="pseudo">
                    </div>
                    <button type="submit" class="btn btn-success">Voter</button>
                </form>
            </div>
        </div>
    <?php endif; ?>

    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box__content">
                    <span class="box__title">Meilleurs voteurs</span>
                    <ul>
                        <?php $i = 0; ?>
                        <?php foreach ($datas['votes'] as $vote): $i++; ?>
                            <li><?= $i; ?> | <strong><?= $vote->pseudo; ?></strong> a <strong class="text-success"><?= $vote->votes; ?></strong> votes! </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>