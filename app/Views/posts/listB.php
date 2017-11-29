
<?php foreach ($posts as $post): ?>

       <div class="container">

           <div class="bg-faded p-4 my-4">

               <div class="row container-fluid">
                   <div class=" text-center col-lg-3">
                       <img class="img-fluid mb-4 mb-lg-0 text-center" src="img/co.png" alt="">
                   </div>

                   <div class="col-lg-9 text ">

                           <hr class="divider">
                           <h2 class="text-center text-lg text-uppercase my-0"><\ <?= $post->titre; ?></strong> >
                           </h2>
                           <hr class="divider">
                           <p class="jaune" style="color: orange">Mis à jour : <?= $post->dateDernierModif; ?></h4></p>
                           <p><?= $post->chapo; ?></p>
                           <p ><a  href="<?= $post->url ?>" class=" btn btn-secondary text-lg-right jaune">Lire le Post</a></p>
                   </div>
                </div>
               </div>
           </div>
       </div>

<?php endforeach; ?>