<?php require "../function/fonction.php"; 
session_start();
auth(1);
if(isset($_GET['disconnect']))
    {
        session_unset();
        session_destroy();
        header('Location: ../vue/accueil.php');
    }
?>
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
                <a class="navbar-brand d-flex align-items-center" href="accueil-a.php">

                    <image src='../images/logo.png' width='30' height='30'></image>
                    <strong>Mon Portfolio</strong>

                </a>
                <a href="cv-a.php"><strong>Mon CV</strong></a>
                <a href="bts-a.php"><strong>Mon BTS</strong></a>
                <a href="projets-a.php"><strong>Mes projets</strong></a>
                <a href="?disconnect"><button type="button" class="btn btn-secondary">Se déconnecter</button></a>
            </div>
        </div>
    </header>
    <section class="jumbotron text-center">
        <div class="container">
            <h1>Le BTS SIO</h1><br>
            <p class="lead text-muted">Le Brevet de Technicien Supérieur Services informatique aux Organisations (SIO) s’adresse à ceux qui souhaitent se former en deux ans aux métiers d’administrateur réseau ou de développeur pour intégrer directement le marché du travail ou continuer des études dans le domaine de l’informatique.</p>
            <p class="lead text-muted">Le BTS Services informatique aux Organisations est un diplôme reconnu par l’état de niveau Bac+2. Il remplace depuis septembre 2011 l’ancien BTS informatique de Gestion (BTS IG). En effet, cette nouvelle formule répond aux attentes de la profession en matière de qualification. Le programme a évolué en fonction de la place et du rôle des TIC (Technologies d’Information Communication) et propose deux spécialités bien distinctes : le BTS SIO SISR et le BTS SIO SLAM.</p><br>
            <h3>Le BTS SIO option SISR :</h3>
            <p class="lead text-muted">L’option Solutions d’infrastructure, systèmes et réseaux forme des professionnels des réseaux et équipements informatiques (installation, maintenance, sécurité). En sortant d’un BTS SIO SISR, vous serez capables de gérer et d’administrer le réseau d’une société et d’assurer sa sécurité et sa maintenance.</p><br>
            <h3>Le BTS SIO option SLAM :</h3>
            <p class="lead text-muted">L’option Solutions logicielles et applications métiers forme des spécialistes des logiciels (rédaction d’un cahier des charges, formulation des besoins et spécifications, développement, intégration au sein de la société).</p><br>
            <center>
            <a class="zoombox w400 h400" href='../images/bts.png'>
                <image src="../images/bts.png" width="650" height="350"></image>
            </a>
        </center><br>
            <h3>Les débouchés métiers :</h3>
            <p class="lead text-muted">Exemples de métiers que peuvent faire les titulaires du BTS Services informatiques aux Organisations :

                <li class="lead text-muted">analyste d’applications</li>
                <li class="lead text-muted">analyste d’études</li>
                <li class="lead text-muted">analyste programmeur</li>
               <li class="lead text-muted"> développeur informatique</li>
                <li class="lead text-muted">technicien réseaux</li>
                <li class="lead text-muted">administrateur réseaux</li>
                <li class="lead text-muted">chargé(e) d’études informatiques</li>
                <li class="lead text-muted">développeur (se) d’applications informatiques</li>
                <li class="lead text-muted">concepteur développeur informatique</li>
                <li class="lead text-muted">développeur d’applications mobiles</li>
               <li class="lead text-muted"> programmateur d’applications</li>
                <li class="lead text-muted">technico-commercial en informatique</li>
                <li class="lead text-muted">technicien(ne) de maintenance en informatique</li>
                <li class="lead text-muted">technicien en informatique</li>
                </p>
        </div><br>
        
        <h3>Les poursuites d’études :</h3>
        
        <p class="lead text-muted">
        Après les formations BTS SIO SLAM ou le BTS SIO SISR, il est possible de continuer son cursus à l’université en :

            <li class="lead text-muted">licence professionnelle (licence pro développement d’applications réparties ; licence pro génie logiciel, système d’information ; licence pro nouvelles technologies de l’informatique ; licence pro technologies de l’information et de la communication)</li>
        <li class="lead text-muted">école d’ingénieurs bac+3 à bac+5</li>
        <li class="lead text-muted">écoles d’ingénieurs en informatique, écoles spécialisées en informatique</li>
        <li class="lead text-muted">Bachelor, directement en entrant en troisième année</li>
            </p><br>
            
            <h3>Choix personnel :</h3>
        
        <p class="lead text-muted">
        J'ai personnellement opté pour un BTS SIO après avoir décidé d'arrêter ma licence MIPI (ingénierie) par manque de matières informatiques. Mon option ISN au Bac S m'a confirmé que ce BTS allait me plaire puisque cette option permettait de développer un site web grâce aux bases de HTML et CSS et de se familiariser avec le java via la création d'un jeu via Eclipse.
        
    </section>
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
