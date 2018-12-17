
<!-- CARROUSELE -->

<div class="container">

    <div class="bg-faded p-4 my-4">
        <!-- Image Carousel -->
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>

            </ol>
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active">
                    <img class="d-block img-fluid w-100" src="img/films.png" alt="">
                    <div class="carousel-caption d-none d-md-block">
                        <p class="text-shadow btn btn-secondary jaune "><a href="http://site2.bella-web.eu/">Accéder</a></p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block img-fluid w-100" src="img/chalet.png" alt="">
                    <div class="carousel-caption d-none d-md-block">
                        <p class="text-shadow btn btn-secondary "><a href="http://site1.bella-web.eu/">Accéder</a></p>
                    </div>
                </div>

            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <!-- Welcome Message -->
        <div class="text-center mt-4">
            <div class="text-heading text-muted text-lg">Visitez</div>
            <h2 class="my-2">Mes réalisations</h2>
            <p class="text-shadow btn btn-secondary lien btn-sm ">
                <a class="jaune" href="http://site1.bella-web.eu/">Chalets&Caviar</a></p>
                <p class="text-shadow btn btn-secondary lien btn-sm ">
                    <a class="jaune" href="http://site2.bella-web.eu/">Films de plain Air</a></p>
            <div class="text-heading text-muted text-lg">

            </div>
        </div>
    </div>
    <!-- FPRESENTATION -->
    <div class="bg-faded p-4 my-4 text">

        <div class="row">
            <div class="col-lg-3">
                <img class="img-fluid float-left mr-4 d-none d-lg-block" src="img/co.png" alt="">
            </div>
            <div class="col-lg-8">
                <hr class="divider">
                <h2 class="text-center text-lg text-uppercase my-0"><strong>P</strong>RESENTATION</h2>
                <hr class="divider">

                <p>
                    Actuellement en formation de développeuse d'applications PHP/Symphony,
                    j'ai créé ce blog pour partager ma passion vers le monde du web.
                    Il est dédié au partage des actualités du monde de l'informatique et ceux de
                    mes avancements personnels dans mon parcours de développeuse. Bonne lecture à tous.
                </p>
            </div>
        </div>
    </div>

</div>


<!-- FORMULAIRE DE CONTACT -->

<div class="container">
    <div class="bg-faded p-4 my-4">
        <hr class="divider">
             <h2 class="text-center text-lg text-uppercase my-0"><\ Me Contacter ></h2>
        <hr class="divider">
        <form id="contact-form" method="post" action="?p=posts.contact" role="form">
            <!-- Contact -->
            <section id="contact">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 text-center">
                            <h3 class="section-subheading text-muted">Je reste à votre disposition pour toute question</h3>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <form id="contactForm" name="sentMessage" novalidate>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input name="name" class="form-control" id="name" type="text" placeholder="Votre Nom *" required data-validation-required-message="Veuillez saisir votre nom.">
                                            <p class="help-block text-danger"></p>
                                        </div>
                                        <div class="form-group">
                                            <input name="email" class="form-control" id="email" type="email" placeholder="Votre Email *" required data-validation-required-message="Veuillez saisir votre email.">
                                            <p class="help-block text-danger"></p>
                                        </div>
                                        <div class="form-group">
                                            <input name="phone" class="form-control" id="phone" type="tel" placeholder="Votre Numero de téléphone *" required data-validation-required-message="Veuillez saisir votre numéro de téléphone.">
                                            <p class="help-block text-danger"></p>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <textarea name="message" class="form-control" id="message" placeholder="Votre Message *" required data-validation-required-message="Veuillez saisir votre message."></textarea>
                                            <p class="help-block text-danger"></p>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="col-lg-12 text-center">
                                        <div id="success"></div>
                                        <button id="sendMessageButton" class="btn btn-xl btn-secondary jaune" type="submit">Envoyer</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </section>

        </form>
    </div>

</div>




