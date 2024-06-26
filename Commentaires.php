<?php
require_once './lib/pdo.php';
require_once './lib/tools.php';
require_once './templates/header.php';

if (isset($_POST['envoyer'])) {
    if (!empty($_POST['pseudo']) && !empty($_POST['avis'])) {
        $pseudo = htmlentities($_POST['pseudo']);
        $avis = nl2br(htmlentities($_POST['avis']));

        insertCommenatires($pdo, $pseudo, $avis);

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

        <div class="container">
  <div class="row">
    <div class="col">
        <button type="button" name="afficherCommentaires" id="afficherCommentaires"
        class=" p-3 mb-2 bg-primary text-white  rounded text-center">
            Afficher les commentaires
        </button>
        <button type="button" name="cacherCommentaires" id="cacherCommentaires"
        class=" cacherCommentaires p-3 mb-2 bg-primary text-white  rounded text-center">
            Cacher les commentaires
        </button>
      </div>
  </div>
</div>


</div>
</div>
</form>
    <div class="container messages" id="messages">
        <div class="row">


    <?php
$messages = getCommentaires($pdo);
require_once './templates/chargerMessage.php';
?>
        </div>
    </div>

    <div class="container d-flex flex-row">
    <a href="index.php"  class=" nav-link p-3 mb-2 mt-3 bg-primary text-white shadow-lg p-3 mb-5 rounded text-center">
        Retour à la page d'accueil
    </a>
    </div>

<script src="/script.js"></script>


<?php
require_once './templates/footer.php';
?>
<h1