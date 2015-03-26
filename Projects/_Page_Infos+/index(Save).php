<?php
$file = $_GET['Projects']
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="iso-8859-1">

    <title>Portfolio Item - Start Bootstrap Template</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/portfolio-item.css" rel="stylesheet">

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
                <a class="navbar-brand" href="../../">RedClouds Corp.</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="../../home/#about">A propos</a>
                    </li>
                    <li>
                        <a href="../">Projets</a>
                    </li>
                    <li>
                        <a href="../../home/#contact">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container">

        <!-- Portfolio Item Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header"><?php echo str_replace("_", " ",$file); ?> :</h1>
            </div>
        </div>
        <!-- /.row -->

        <!-- Portfolio Item Row -->
        <div class="row">

            <div class="col-md-8">
                <img class="img-responsive" src="<?php if(file_exists('../'.$file.'/Infos/MainPage.png')){echo '../'.$file.'/Infos/MainPage.png';}else{echo './_Infos/MainPage.png';} ?>" alt="">
            </div>

            <div class="col-md-4">
                <h3>Description :</h3>
                <p><?php if(file_exists('../'.$file.'/Infos/Infos.arc')){echo file_get_contents('../'.$file.'/Infos/Infos.arc');}else{echo file_get_contents('../_Infos/Infos.arc');} ?></p>
                <h3>Details :</h3>
                <ul>
                    <?php if(file_exists('../'.$file.'/Infos/Infos+.arc')){echo file_get_contents('../'.$file.'/Infos/Infos+.arc');}else{echo file_get_contents('../_Infos/Infos+.arc');} ?>
                </ul>
                <a class="btn btn-primary" href="../<?php echo $file; ?>/index.php">View Project --></a>
            </div>

        </div>
        <!-- /.row -->

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
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
