<?php
require_once './lib/pdo.php';
require_once './lib/tools.php';

$message = getCommentaires($pdo);

while ($message) {?>
    <div class="container">
        <h2><?=$message['pseudo']?></h2>
        <p><?=$message['avis']?></p>
    </div>
    <?php }
?>




<h1>Bonjour !</h1>
