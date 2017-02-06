<div class="container">
    <br>

    <?php if ($datas['logged']): ?>
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box__content">
                        <?php if ($datas['is_voted']): ?>
                            <p>
                                Voter permét de gagnier des clef en jeux vous pourai désormai les récuperer en votant et clicker sur <span class="text-bold">Récuperer</span>
                                <br>
                                Une foit avoir récuperer votre récompence aller sur Minecraft est faite <span class="text-bold">/vote</span> est vous aurez accée a vos 3 clef de vote
                                <br>
                                <span class="text-bold text-warning">Vous pouvez voter tout les 24h</span>
                            </p>

                            <br>

                            <a target="_blank" class="btn" href="http://www.serveurs-minecraft.org/vote.php?id=41778">Vote 1</a>
                            <a target="_blank" class="btn" href="http://serveurs-minecraft.com/serveur-minecraft.php?Classement=No%20Border%20Craft">Vote 2</a>
                            <a target="_blank" class="btn" href="http://www.serveursminecraft.org/serveur.php?id=1221">Vote 3</a>
                            <label for="btn-req" class="text-bold text-warning">Delay de 20 min pour récuperer votre récompence!</label>
                            <a class="btn btn-success btn-empty" id="btn-req" href="/vote/validate">Récuperer</a>
                        <?php else: ?>
                            <a class="btn btn-poke" href="/">Vous avez déja voter sur tout les lien :P</a>
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
                        <label for="pseudo" class="form-label">Pseudo in game</label>
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
                    <span class="box__title">Best vote</span>
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