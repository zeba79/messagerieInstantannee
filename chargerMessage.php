<?php
require_once './lib/pdo.php';

$sql = 'SELECT * FROM commentaires ORDER BY id DESC';
$chargerMessage = $pdo->prepare($sql);
$chargerMessage->execute();

while ($message = $chargerMessage->fetch(PDO::FETCH_ASSOC)) {?>

    <div class="container message">
        <h2><?=$message['pseudo'];?></h2>
        <p><?=$message['avis'];?></p>
    </div>
        <?php }?>