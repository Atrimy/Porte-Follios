<?php 
    ini_set("display_errors",0);error_reporting(0); 

    if (isset($_POST['Login']) && isset($_POST['Password'])) {
        session_start ();
        $_SESSION['ProjectSelect'] = $file;
        header ('location: ./_Page_Infos+');
    }
?>

<html lang="fr">
    <head>
        <meta charset="iso-8859-1">

        <title>Portfolio - RedClouds Corp.</title>

        <!-- Bootstrap Core CSS -->
        <link href="_css/bootstrap.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="_css/1-col-portfolio.css" rel="stylesheet">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

    </head>
    <body>
        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="../home/">RedClouds Corp.</a>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li>
                            <a href="../home/#about">A propos</a>
                        </li>
                        <li>
                            <a href="../Projects/">Projets</a>
                        </li>
                        <li>
                            <a href="../home/#contact">Contact</a>
                        </li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container -->
        </nav>

        <!-- Page Content -->
        <div class="container">

            <!-- Page Heading -->
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Projets :
                        <small>RedClouds Corp.</small>
                    </h1>
                </div>
            </div>
            <!-- /.row -->
            <?php
                // récupération des projets
                $handle=opendir(".");
                $projectContents = '';
                while (($file = readdir($handle))!==false) 
                {
                    // répertoires à  ignorer dans les projets
                    $projectsListIgnore = null;
                    $projectsListIgnore = array ('.','..',  stristr($file, "_"));
                    if (is_dir($file) && !in_array($file,$projectsListIgnore)) 
                    {
                        $projectContents .= $file.' / ';
                        echo '<div class="row">'
                                .'<div class="col-md-7">'
                                    .'<a href='.($suppress_localhost ? '.' : '').$file.'>';
                                        if(file_exists('./'.$file.'/Infos/MainPage.png')){
                                            echo '<img class="img-responsive" src="./'.$file.'/Infos/MainPage.png" alt="">';
                                        }
                                        else{
                                            echo '<img class="img-responsive" src="./_Infos/MainPage.png" alt="">';
                                        }
                                    echo '</a>'
                                .'</div>'
                                .'<div class="col-md-5">';
                                    echo '<h3>'. str_replace("_", " ",$file) .'</h3>'
                                    .'<h4>Description :</h4>';
                                        if(file_exists('./'.$file.'/Infos/Infos.arc')){
                                            echo '<p>'.file_get_contents('./'.$file.'/Infos/Infos.arc').'</p>';
                                        }
                                        else{
                                            echo '<p>'.file_get_contents('./_Infos/Infos.arc').'</p>';
                                        }
                                        echo'<a id="ProjetSelect" name="ProjetSelect" class="btn btn-primary" href="./_Page_Infos+/?Projects='.$file.'">Voir le projet --></a>'
                                .'</div>'
                            .'</div>';
                    }
                }
                closedir($handle);
                if (empty($projectContents))
                {
                    $projectContents = "<li>Aucun projet n'est disponible.</li>\n";
                    echo $projectContents;
                }
            ?>

            <hr>

            <!-- Pagination 
            <div class="row text-center">
                <div class="col-lg-12">
                    <ul class="pagination">
                        <li>
                            <a href="1">&laquo;</a>
                        </li>
                        <li class="active">
                            <a href="1">1</a>
                        </li>
                        <li>
                            <a href="2">2</a>
                        </li>
                        <li>
                            <a href="3">3</a>
                        </li>
                        <li>
                            <a href="4">4</a>
                        </li>
                        <li>
                            <a href="5">5</a>
                        </li>
                        <li>
                            <a href="5">&raquo;</a>
                        </li>
                    </ul>
                </div>
            </div>
             /.row -->

            <hr>

            <!-- Footer -->
            <footer>
                <div class="row">
                    <div class="col-lg-12">
                        <p>Copyright &copy; RedClouds Corp. 2015</p>
                    </div>
                </div>
                <!-- /.row -->
            </footer>

        </div>
        <!-- /.container -->

        <!-- jQuery -->
        <script src="_js/jquery.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="_js/bootstrap.min.js"></script>

    </body>
</html>
