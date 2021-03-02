<?php require "../function/fonction.php"; ?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.1.1">
    <title>Portfolio</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/album/">

    <!-- Bootstrap core CSS -->
    <link href="/docs/4.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <!-- Favicons -->
    <link rel="apple-touch-icon" href="/docs/4.5/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
    <link rel="icon" href="/docs/4.5/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
    <link rel="icon" href="/docs/4.5/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
    <link rel="manifest" href="/docs/4.5/assets/img/favicons/manifest.json">
    <link rel="mask-icon" href="/docs/4.5/assets/img/favicons/safari-pinned-tab.svg" color="#563d7c">
    <link rel="icon" href="/docs/4.5/assets/img/favicons/favicon.ico">
    <meta name="msapplication-config" content="/docs/4.5/assets/img/favicons/browserconfig.xml">
    <meta name="theme-color" content="#563d7c">
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>
    <script type="text/javascript" src="../zoombox/zoombox.js"></script>
    <link href="../zoombox/zoombox.css" rel="stylesheet" type="text/css" media="screen" />
    <script type="text/javascript">
        jQuery(function($) {
            $('a.zoombox').zoombox();

        });

    </script>


    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }

    </style>
    <!-- Custom styles for this template -->
    <link href="album.css" rel="stylesheet">
</head>

<body>
    <header>

        <div class="navbar navbar-dark bg-dark shadow-sm">
            <div class="container d-flex justify-content-between">
                <a class="navbar-brand d-flex align-items-center" href="accueil.php">

                    <image src='../images/logo.png' width='30' height='30'></image>
                    <strong>Mon Portfolio</strong>

                </a>
                <a href="cv.php"><strong>Mon CV</strong></a>
                <a href="bts.php"><strong>Mon BTS</strong></a>
                <a href="cv.php"><strong>Mes projets</strong></a>
                <a href="connexion.php"><button type="button" class="btn btn-secondary">Se connecter</button></a>
            </div>
        </div>
    </header>
<main role="main">

        <section class="jumbotron text-center">
            <div class="container">
                <h1>Mes projets</h1>
                <p class="lead text-muted">Vous pouvez retrouver ici tous les projets que j'ai réalisé jusqu'à maintenant dans un cadre scolaire ou professionnel.</p>
            </div>
        </section>

        <div class="album py-5 bg-light">
            <div class="container">
                <div class="col-lg-6 mb-2">
                    <h2>Les projets :</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="container">

                <div class="row">
                    <div class="col-md-4">

                        <div class="card mb-4 shadow-sm">
                            <a class="zoombox w400 h400" href='../images/paris.png'><image  src='../images/paris.png' width='350' height='175'></image></a>
                            <div class="card-body">
                                <p class="card-text">Mon premier site réalisé à ma première année de BTS SIO avec une base de donnée interactive </p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <a href="paris.php"><button  type="button" class="btn btn-sm btn-outline-secondary">Voir</button></a>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card mb-4 shadow-sm">
                           <a class="zoombox w400 h400" href='../images/forum.png'><image  src='../images/forum.png' width='350' height='175'></image></a> 
                            <div class="card-body">
                                <p class="card-text">Mon premier projet de deuxième année où on a appliqué toutes les nouvelles fonctionnalités apprises.</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <a href="forum.php"><button type="button" class="btn btn-sm btn-outline-secondary">Voir</button></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card mb-4 shadow-sm">
                            <a class="zoombox w400 h400" href='../images/villiers.png'><image  src='../images/villiers.png' width='350' height='175'></image></a>
                            <div class="card-body">
                                <p class="card-text">Mon PPE réalisé avec deux autre camarades qui sera mon projet pour l'examen final.</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                       <a href="villiers.php"><button type="button" class="btn btn-sm btn-outline-secondary">Voir</button></a> 
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>

    </main>





    <footer class="text-muted">
        <div class="container">
            <p class="float-right">
                <a href="#">Back to top</a>
            </p>
        </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script>
        window.jQuery || document.write('<script src="/docs/4.5/assets/js/vendor/jquery.slim.min.js"><\/script>')

    </script>
    <script src="/docs/4.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>

</html>
