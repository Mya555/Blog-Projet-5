<?php
header('Content-type: text/html; charset=UTF-8');
?>


<div class="container">

    <div class="bg-faded p-4 my-4">
        <hr class="divider">
        <h2 class="text-center text-lg text-uppercase my-0"><\ Ajouter un
            <strong>Post</strong> >
        </h2>
        <hr class="divider">
        <div class="row">
            <div class="col-lg-3">
                <img class="img-fluid mb-4 mb-lg-0" src="img/co.png" alt="">
            </div>
            <div class="col-lg-7 text">
                <form method="post">

                <?= $form->input('titre', '<strong>Titre</strong>'); ?>

                <?= $form->input('chapo', '<strong>Chapô</strong>'); ?>

                <?= $form->input('contenu', '<strong>Contenu</strong>', ['type' => 'textarea']); ?>

                <?= $form->input('auteur', '<strong>Auteur</strong>'); ?>

                <button class="btn btn-secondary jaune">Sauvegarder</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- /.container -->