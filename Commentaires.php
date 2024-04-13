<?php
require_once './lib/pdo.php';
// require_once './lib/tools.php';
require_once './templates/header.php';

if (isset($_POST['envoyer'])) {
    if (!empty($_POST['pseudo']) && !empty($_POST['avis'])) {
        $pseudo = htmlentities($_POST['pseudo']);
        $avis = nl2br(htmlentities($_POST['avis']));

        $sql = 'INSERT INTO commentaires(pseudo, avis) VALUES(:pseudo, :avis)';
        $stmt = $pdo->prepare($sql);
        $stmt->bindValue(":pseudo", $pseudo);
        $stmt->bindValue(":avis", $avis);
        $stmt->execute();

        echo 'Commentaire posté';

    } else {
        echo 'Veuillez remplir les champs ...';
    }
}

?>

<h1 class="shadow-lg p-3 mb-5 bg-body-tertiary rounded text-center">
    Bonjour et bienvenue sur notre page de commentaires
</h1>

<div class="container">
    <form action="" method="POST">
        <div class="mb-3">
            <label for="pseudo" class="form-label">Pseudo : </label>
            <input type="text" name="pseudo" class="form-control" id="pseudo" placeholder="Remplir votre pseudo" required >
        </div>
        <div class="mb-3">
            <label for="avis">Commentaire :</label>
            <textarea class="form-control" name="avis" placeholder="Laissez votre avis ici" id="avis" required ></textarea>
        </div>
        <input type="submit" name="envoyer"  value="Envoyer commentaire" class="btn btn-dark mb-5">
</div>
</div>
</form>

<div class="container">
    <a href="index.php" class="nav-link p-3 mb-2 bg-primary text-white shadow-lg p-3 mb-5 rounded text-center">
        Retour à la page d'accueil
    </a>
</div>
<div class="container  ">
    <section class="messages" id="messages"></section>

</div>

<?php
require_once './templates/footer.php';
?>
<h1