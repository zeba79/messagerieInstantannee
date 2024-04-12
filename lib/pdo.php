<?php
try {
    $pdo = new PDO('mysql:host=localhost;dbname=messagerieinstantannee;', 'root', '');
} catch (PDOException $e) {
    echo 'Erreur de connexion à la Base de données' . $e->getMessage();
}
