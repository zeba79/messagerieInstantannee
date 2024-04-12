<?php
function getCommentaires(PDO $pdo)
{
    $sql = 'SELECT * FROM commentaires ORDER BY id ASC';
    $chargerMessage = $pdo->prepare($sql);
    $chargerMessage->execute();
    $message = $chargerMessage->fetchAll(PDO::FETCH_ASSOC);
    return $message;
}
