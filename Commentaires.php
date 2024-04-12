<?php
require_once './templates/header.php';
?>

<h1 class="shadow-lg p-3 mb-5 bg-body-tertiary rounded text-center">
    Bonjour et bienvenue sur notre page de commentaires
</h1>

<div class="container">
    <form action="POST" method="">
        <div class="mb-3">
            <label for="pseudo" class="form-label">Pseudo : </label>
            <input type="text" class="form-control" id="pseudo" placeholder="Remplir votre pseudo" required >
        </div>
        <div class="mb-3">
            <label for="message">Commentaire :</label>
            <textarea class="form-control" placeholder="Laissez votre message ici" id="message" required ></textarea>
        </div>
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