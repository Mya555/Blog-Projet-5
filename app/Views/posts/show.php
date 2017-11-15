
        <?php
        header('Content-type: text/html; charset=UTF-8');
        ?>


        <div class="container">

            <div class="bg-faded p-4 my-4">
                <hr class="divider">
                <h2 class="text-center text-lg text-uppercase my-0">
                    <strong><\ <?= $article->titre; ?> ></strong>
                </h2>
                <hr class="divider">
                <div class="row">
                    <div class="col-lg-3">
                        <img class="img-fluid mb-4 mb-lg-0" src="img/co.png" alt="">
                    </div>
                    <div class="col-lg-7 text">
                            <h3><?= $article->chapo; ?></h3>

                            <p><?= $article->contenu; ?></p>

                            <p><strong>L'auteur : <?= $article->auteur; ?></strong></p>

                            <p class="jaune">* Date de la dernière modification : <?= $article->dateDernierModif; ?> </p>

                            <a class="btn btn-secondary jaune" href="?p=posts.edit&id=<?= $article->id; ?>">Editer</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.container -->




