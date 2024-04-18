
const messages = document.getElementById('messages');
console.log(messages);

// Afficher les commentaires
const afficherCommentaire = document.getElementById('afficherCommentaires');
console.log(afficherCommentaire);
afficherCommentaire.addEventListener("click", afficherCommentaires)

function afficherCommentaires(){
    messages.setAttribute("style","visibility:visible;  height: 100%;")
    cacherCommentaire.setAttribute("style","visibility:visible;");
    afficherCommentaire.setAttribute("style","visibility:hidden;");
}
// Cacher les commentaires
const cacherCommentaire = document.getElementById('cacherCommentaires');
console.log(cacherCommentaire);
cacherCommentaire.addEventListener("click", cacherCommentaires)

function cacherCommentaires(){
    messages.setAttribute("style","visibility:hidden;  height: 1px;");

    cacherCommentaire.setAttribute("style","visibility:hidden;");
    afficherCommentaire.setAttribute("style","visibility:visible;");
}