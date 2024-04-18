<?php
function getCommentaires($pdo)
{
    $sql = 'SELECT * FROM commentaires ORDER BY id DESC';
    $chargerMessage = $pdo->prepare($sql);
    $chargerMessage->execute();
    $messages = $chargerMessage->fetchAll(PDO::FETCH_ASSOC);
    return $messages;
}
