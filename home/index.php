<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="iso-8859-1">

        <title>RedClouds Corp.</title>

        <!--CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/grayscale.css" rel="stylesheet">
        <!-- Custom Fonts -->
        <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link href="http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css">
        <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">

    </head>
    <body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

        <!-- Navigation -->
        <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                        <i class="fa fa-bars"></i>
                    </button>
                    <a class="navbar-brand page-scroll" href="#page-top">
                        <i class="fa fa-play-circle"></i>  <span class="light">RedClouds Corp.</span>
                    </a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                    <ul class="nav navbar-nav">
                        <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                        <li class="hidden">
                            <a href="#page-top"></a>
                        </li>
                        <li>
                            <a class="page-scroll" href="#about">A propos</a>
                        </li>
                        <li>
                            <a class="page-scroll" href="#download">Projets</a>
                        </li>
                        <li>
                            <a class="page-scroll" href="#contact">Contact</a>
                        </li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container -->
        </nav>

        <!-- Intro Header -->
        <header class="intro">
            <div class="intro-body">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <h1 class="brand-heading">RedClouds</h1>
                            <h1 class="brand-heading-under">Corp.</h1>
                            <p class="intro-text">Software / WebSite<br>Development.</p>
                            <a href="#about" class="btn btn-circle page-scroll">
                                <i class="fa fa-angle-double-down animated"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <!-- About Section -->
        <section id="about" class="container content-section text-center">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <h2>A propos :</h2>
                    <p>Je suis Pierre Deudon, étudiant en deuxième année d'un BTS SIO. J'étudie la programmation d'applications informatique tel que des Sites Internet, des application de gestion,...</p>
                    <p>Jusqu'à maintenant,j'ai plusieurs projets à mon inssu. Beaucoups de projets scolaire et trois gros <a href="http://redclouds-corp.net/Projects">projets</a>.</p>
                    <p>Projet 1 :<br>Application de gestion des ressources humaines pour l'entreprise <a href="http://www.societe.com/societe/societe-de-peinture-de-pieces-plastiqu-343244729.html">SPPP</a> (Société de Peinture de Pièces Plastiques), basée à St Berthevin, 53940.</p>
                    <p>Projet 2 :<br>Application d'enregistrement des resultats de tests de qualtitée pour l'entreprise <a href="http://www.societe.com/societe/societe-de-peinture-de-pieces-plastiqu-343244729.html">SPPP</a> (Société de Peinture de Pièces Plastiques), basée à St Berthevin, 53940.</p>
                    <p>Projet 3 :<br>Refonte complète d'un site de partage de documents pour le <a href="http://www.lhf53.eu/">lycée Haute Folis</a> et l'ISCAL, basés sur Laval, 53000.</p>
                    </div>
            </div>
        </section>

        <!-- Projects Section -->
        <section id="download" class="content-section text-center">
            <div class="download-section">
                <div class="container">
                    <div class="col-lg-8 col-lg-offset-2">
                        <h2 style="">Mes projets :</h2>
                        <p>Avec le lien ci-dessous, vous pouvez acceder à tous mes differents projets.</p>
                        <a href="../Projects" class="btn btn-default btn-lg">Tous les projets</a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Contact Section -->
        <section id="contact" class="container content-section text-center">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <h2>Me Contacter</h2>
                        <p>N'hesiter pas à me contacter pour plus d'informations :</p>
                        <p><a href="mailto:pierre.d53@live.fr">pierre.d53@live.fr</a></p>
                    </div>
                </div>
                <!-- Work in progress ...
                <div class="row">
                    <div class="col-lg-12">
                        <form name="sentMessage" id="contactForm" method="post" action="Mail/contact_me.php">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Votre nom ..." id="name" name="name" required data-validation-required-message="Merci d'entrer un nom valide.">
                                        <p class="help-block text-danger"></p>
                                    </div>
                                    <div class="form-group">
                                        <input type="email" class="form-control" placeholder="Votre adresse mail ..." id="email" name="email" required data-validation-required-message="Merci d'entrer une adresse mail valide.">
                                        <p class="help-block text-danger"></p>
                                    </div>
                                    <div class="form-group">
                                        <input type="tel" class="form-control" placeholder="Votre téléphone ..." id="phone" name="phone" required data-validation-required-message="Merci d'entrer un numeros valide.">
                                        <p class="help-block text-danger"></p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <textarea class="form-control" placeholder="Votre message ..." id="message" name="message" required data-validation-required-message="Merci d'entrer un message valide." style="height : 132px"></textarea>
                                        <p class="help-block text-danger"></p>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                                <div class="col-lg-12 text-center">
                                    <div id="success"></div>
                                    <button type="submit" class="btn btn-default btn-lg">Envoi d'un message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <br>
                <br>
                -->
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <p>Voila quelques sites pour me retrouver :</p>
                        <ul class="list-inline banner-social-buttons">
                            <li>
                                <a href="https://twitter.com/Atrimy" class="btn btn-default btn-lg"><span class="network-name">Twitter</span></a>
                            </li>
                            <li>
                                <a href="http://atrimy-redclouds.deviantart.com/" class="btn btn-default btn-lg"><span class="network-name">Deviant-Art</span></a>
                            </li>
                            <li>
                                <a href="https://www.facebook.com/pierre.deudon.3" class="btn btn-default btn-lg"><span class="network-name">Facebook</span></a>
                            </li>
                            <li>
                                <a href="http://steamcommunity.com/profiles/76561198040855541" class="btn btn-default btn-lg"><span class="network-name">Steam</span></a>
                            </li>
                        </ul>
                        <p>Ou même via Skype : "atrimy"</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Footer -->
        <footer>
            <div class="container text-center">
                <p>Copyright &copy; RedClouds Corp. 2015</p>
            </div>
        </footer>

        <!-- jQuery -->
        <script src="js/jquery.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="js/bootstrap.min.js"></script>

        <!-- Plugin JavaScript -->
        <script src="js/jquery.easing.min.js"></script>

        <!-- Custom Theme JavaScript -->
        <script src="js/grayscale.js"></script>

    </body>
</html>
