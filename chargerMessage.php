<?php
require_once './lib/pdo.php';
require_once './lib/tools.php';

$messages = getCommentaires($pdo);

foreach ($messages as $message) {?>

    <div class="container message">
        <h2><?=$message['pseudo'];?></h2>
        <p><?=$message['avis'];?></p>
    </div>
        <?php }?>