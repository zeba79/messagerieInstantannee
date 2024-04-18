<?php
foreach ($messages as $message) {?>
    <div class="container message">
        <h2><?=$message['pseudo'];?></h2>
        <p><?=$message['avis'];?></p>
    </div>
        <?php }?>