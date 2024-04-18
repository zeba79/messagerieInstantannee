<?php
function getCommentaires($pdo)
{
    $sql = 'SELECT * FROM commentaires ORDER BY id DESC';
    $chargerMessage = $pdo->prepare($sql);
    $chargerMessage->execute();
    $messages = $chargerMessage->fetchAll(PDO::FETCH_ASSOC);
    return $messages;
}

function insertCommenatires(PDO $pdo, string $pseudo, string $avis)
{
    $sql = 'INSERT INTO commentaires(pseudo, avis) VALUES(:pseudo, :avis)';
    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(":pseudo", htmlspecialchars($pseudo));
    $stmt->bindValue(":avis", htmlspecialchars($avis));
    $stmt->execute();
}
