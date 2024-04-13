<?php
function getCommentaires(PDO $pdo)
{
    $sql = 'SELECT * FROM commentaires ORDER BY id ASC';
    $chargerMessage = $pdo->prepare($sql);
    $chargerMessage->execute();
    $message = $chargerMessage->fetchAll(PDO::FETCH_ASSOC);
    return $message;
}

function saveCommentaire(PDO $pdo, string $pseudo, string $avis): array
{
    $sql = 'INSERT INTO commentaires(pseudo, avis) VALUES(:pseudo, :avis)';
    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(":pseudo", $pseudo);
    $stmt->bindValue(":avis", $avis);
    $commentaireInserre = $stmt->execute();
    return $commentaireInserre;

}
