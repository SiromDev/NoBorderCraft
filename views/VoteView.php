<div class="container">
    <br>
    <h1>Vote</h1>
    <?php
    function get_ip() {
        // IP si internet partagé
        if (isset($_SERVER['HTTP_CLIENT_IP'])) {
            return $_SERVER['HTTP_CLIENT_IP'];
        }
        // IP derrière un proxy
        elseif (isset($_SERVER['HTTP_X_FORWARDED_FOR'])) {
            return $_SERVER['HTTP_X_FORWARDED_FOR'];
        }
        // Sinon : IP normale
        else {
            return (isset($_SERVER['REMOTE_ADDR']) ? $_SERVER['REMOTE_ADDR'] : '');
        }
    }
    echo get_ip();

    ?>
    <br>
    <p class="text-danger"><strong>Voter</strong></p>
    <?php if ($datas['logged']): ?>
        <br>
        <a target="_blank" class="btn" style="margin-right: 10px;" href="http://www.serveurs-minecraft.org/vote.php?id=41778">Vote 1</a>
        <a target="_blank" class="btn" style="margin-right: 10px;" href="http://serveurs-minecraft.com/serveur-minecraft.php?Classement=No%20Border%20Craft">Vote 2</a>
        <a target="_blank" class="btn" style="margin-right: 10px;" href="http://www.serveursminecraft.org/serveur.php?id=1221">Vote 3</a>
        <br><br>
        <a class="btn btn-success" style="margin-top: 10px; margin-bottom: 20px; display: block; width: 100%;" href="/nbc/vote/validate">Récuperer</a>
        <br>
    <?php else: ?>
        <form action="" method="post">
            <label for="pseudo">Pseudo in game</label>
            <br>
            <input type="text" id="pseudo" name="pseudo">
            <button type="submit">Voter</button>
        </form>
    <?php endif; ?>
    <br>
    <p class="text-danger"><strong>Best vote</strong></p>
    <ul>
        <?php $i = 0; ?>
        <?php foreach ($datas['votes'] as $vote): $i++; ?>
            <li><?= $i; ?> | <strong><?= $vote->pseudo; ?></strong> a <strong class="text-success"><?= $vote->number; ?></strong> votes! </li>
        <?php endforeach; ?>
    </ul>
</div>