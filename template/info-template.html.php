<div class="position-relative m-4">
    <h3><?= $reponse["titre"]; ?></h3>
    <h4><?= $reponse["typeRecette"] ?></h4>
    <button class="btn btn-danger btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">supprimer</button>
    <a class="btn btn-warning" href="modifierRecette.php?id=<?= $reponse['id'] ?> ">modifier</a>
    <p><?= $reponse["recette"] ?></p>
</div>
<div class="position-relative m-4">
    <form method="post" action="traiteur/create-newCommentaire.php">
        <div class="input-group input-group-sm mb-3">
            <span class="input-group-text" id="inputGroup-sizing-sm">commentaire</span>
            <input type="text" name="commentaire" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
            <input type="hidden" name="id_recette" value="<?= $reponse['id'] ?>">
        </div>
        <div class="mb-3">
            <button type="submit" class="btn btn-info">envoyer</button>
        </div>
    </form>
</div>
<?php
require_once ("template/commentaire-template.html.php");
?>
<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">supprimer</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                voulez vous vraiment supprimer cette recette
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                    non
                </button>
                <button type="button" class="btn btn-primary">
                    <a href="traiteur/supprimer.php?id=<?= $reponse['id'] ?>" style="text-decoration: none ; color: white">
                        oui
                    </a>
                </button>
            </div>
        </div>
    </div>
</div>
<!-- Modal -->