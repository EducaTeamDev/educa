<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>Educa - Accueil</title>
        <?php require('header.php'); ?>
    </head>
    <body>
        <header>
            <div class="container">
                <div class="col-lg-12">
                    <a href="index.php"><img src="_images/Logo.png" alt="Logo Educa" class="img-responsive"></a>
                </div>
            </div>
        </header>

        <nav class="navbar navbar-default">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div id="navbar" class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li><a href="#">Accueil</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Les niveaux <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">CP</a></li>
                                <li><a href="#">CE1</a></li>
                                <li><a href="#">CE2</a></li>
                                <li><a href="#">CM1</a></li>
                                <li><a href="#">CM2</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Les jeux <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Mathématiques</a></li>
                                <li><a href="#">Français</a></li>
                                <li><a href="#">Science</a></li>
                            </ul>
                        </li>
                        <li><a href="#about">Mes scores</a></li>
                        <li><a href="contact.php">Contact</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#">Connexion</a></li>
                        <li><a href="#">Inscription</a></li>
                    </ul>
                </div><!--/.nav-collapse -->
            </div>
        </nav>
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="_js/bootstrap.min.js"></script>
    </body>
</html>