<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>Educa - Accueil</title>
        <?php require('head.php'); ?>
    </head>
    <body>
        <header>
            <?php require ('header.php'); ?>
        </header>

        <?php require ('nav.php'); ?>

        <section>
            <div id="owl-demo" class="owl-carousel owl-theme">
                <div class="item">
                    <img src="_images/slider1.png" alt="The Last of us">
                    <div class="caption">
                        <div class="container">
                            <div class="col-lg-12">
                                <h3>Devenez un as de l'école</h3>
                                <p>De nombreux jeux et quizzs proposées sur la plate-forme vous donneront tout le plaisir
                                    de jouer en apprenant de nouvelles choses. 
                                    Dépassez-vous fasse à vos amis ! </p>
                                <a href="#" class="btn">Voir les jeux</a>
                                <a href="#" class="btn">Commencer à jouer</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <img src="_images/slider1.png" alt="The Last of us">
                    <div class="caption">
                        <div class="container">
                            <div class="col-lg-12">
                                <h3>Devenez un as de l'école</h3>
                                <p>De nombreux jeux et quizzs proposées sur la plate-forme vous donneront tout le plaisir
                                    de jouer en apprenant de nouvelles choses. 
                                    Dépassez-vous fasse à vos amis ! </p>
                                <a href="#" class="btn">Voir les jeux</a>
                                <a href="#" class="btn">Commencer à jouer</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">  
                    <img src="_images/slider1.png" alt="The Last of us">
                    <div class="caption">
                        <div class="container">
                            <div class="col-lg-12">
                                <h3>Devenez un as de l'école</h3>
                                <p>De nombreux jeux et quizzs proposées sur la plate-forme vous donneront tout le plaisir
                                    de jouer en apprenant de nouvelles choses. 
                                    Dépassez-vous fasse à vos amis ! </p>
                                <a href="#" class="btn">Voir les jeux</a>
                                <a href="#" class="btn">Commencer à jouer</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <main>
            <section id="pub_game" class="container">
                <h1 class="text-center">Les meilleurs jeux pour apprendre !</h1>
                <article class="col-lg-12">
                    <img src="http://placehold.it/1200x250">
                    <div class="caption">
                        <div class="container">
                            <div class="col-lg-12">
                                <h3>Découvrez le jeu de la semaine</h3>
                                <div class="space"></div>
                                <a href="#" class="btn">Jouer</a>
                            </div>
                        </div>
                    </div>
                </article>
                <article class="col-lg-4">
                    <img src="http://placehold.it/350x250">
                    <div class="caption">
                        <div class="container">
                            <div class="col-lg-12">
                                <h3>Top 1 de la semaine</h3>
                                <div class="space"></div>
                                <a href="#" class="btn">Jouer</a>
                            </div>
                        </div>
                    </div>
                </article>
                <article class="col-lg-4">
                    <img src="http://placehold.it/350x250">
                    <div class="caption">
                        <div class="container">
                            <div class="col-lg-12">
                                <h3>Top 2 de la semaine</h3>
                                <div class="space"></div>
                                <a href="#" class="btn">Jouer</a>
                            </div>
                        </div>
                    </div>
                </article>
                <article class="col-lg-4">
                    <img src="http://placehold.it/350x250">
                    <div class="caption">
                        <div class="container">
                            <div class="col-lg-12">
                                <h3>Top 3 de la semaine</h3>
                                <div class="space"></div>
                                <a href="#" class="btn">Jouer</a>
                            </div>
                        </div>
                    </div>
                </article>
            </section>

            <section id="niveaux" class="container">
                <h1 class="text-center">En quelle classe es-tu ?</h1>
                <div class="cp">
                    <a href="#">
                        <div class="caption img-cp">
                            <h3>CP</h3>
                        </div>
                    </a>
                </div>
                <div class="ce1">
                    <a href="#">
                        <div class="caption img-ce1">
                            <h3>CE1</h3>
                        </div>
                    </a>
                </div>
                <div class="ce2">
                    <a href="#">
                        <div class="caption img-ce2">
                            <h3>CE2</h3>
                        </div>
                    </a>
                </div>
                <div class="cm1">
                    <a href="#">
                        <div class="caption img-cm1">
                            <h3>CM1</h3>
                        </div>
                    </a>
                </div>
                <div class="cm2">
                    <a href="#">
                        <div class="caption img-cm2">
                            <h3>CM2</h3>
                        </div>
                    </a>
                </div>
            </section>
        </main>



        <footer>
            <?php require('footer.php'); ?>
        </footer>


        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="_js/bootstrap.min.js"></script>

        <script type="text/javascript">
            $(document).ready(function() {

                $("#owl-demo").owlCarousel({

                    navigation : false, // Show next and prev buttons
                    slideSpeed : 300,
                    paginationSpeed : 400,
                    singleItem:true,

                    // "singleItem:true" is a shortcut for:
                    // items : 1, 
                    itemsDesktop : false
                    // itemsDesktopSmall : false,
                    // itemsTablet: false,
                    // itemsMobile : false

                });

            });
        </script>
    </body>
</html>