<?php require "../function/fonction.php"; 
session_start();
ob_start();
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
    <script type="text/javascript" src="/zoombox/zoombox.js"></script>


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
    <link href="/zoombox/zoombox.css" rel="stylesheet" type="text/css" media="screen" />
</head>
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
<div class="container" id="form">

    <div class="row">
        <div class="col-md-12 mt-4">
            <h2>Espace de connexion administrateur :</h2>

        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <form class="mt-5" action="#" method="post">
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Email :</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="email" id="inputEmail3" required pattern="^[a-z0-9._-]+@[a-z0-9._-]+\.[a-z]{2,6}$">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Mot de passe :</label>
                    <div class="col-sm-10">
                        <input type="password" class="form-control" name="mdp" id="inputPassword3" required pattern="^[A-Za-z0-9]+$">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-2">
                        <button type="submit" name="submit" class="btn btn-primary">Connexion</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<?php
                if(isset($_POST['submit']))
                {
                    $post['email']= $_POST['email'];
                    $post['mdp']= $_POST['mdp'];
                    
                    $error = [];
                    $mdpValide = false;
                    $errorSession = false;
                    if(!empty($_POST))
                    {
                        $post = array_map('strip_tags', $_POST);
                        $post = array_map('trim', $post);

                        
                        $select = $bdd->prepare('SELECT idad,email, mdp FROM user WHERE email = :email');

                        $select->bindValue(':email', $post['email']);
                        if($select->execute())
                        {
                           $user = $select->fetch();//contient notre utilisateur relatif au le nom
                            if(!empty($user))
                            {
                                // on vérifie le mot de passe saisi et le mot de passe hashé
                                if($post['mdp'] == $user['mdp'])
                                {
                                    //ici le mot de passe est valide
                                    $mdpValide = true;
                                    
                                    $_SESSION['idad'] =$user['idad'];
                                    $_SESSION['email'] =$user['email'];
                                    $_SESSION['mdp']=$user['mdp'];
                                  
                                    
                                    //je redirige vers la page "accueil.php"
                                    header('Location:../admin/accueil-a.php');
                                    ob_enf_fluch();
                                    die;                                                                                    
                                }
                                else 
                                {
                                    // Le mot de passe est invalide
                                    $error[] = '<div class="alert alert-danger text-center"><center></br>Utilisateur ou mot de passe incorrect(s).</center></div>';
                                }                           
                            }
                            else 
                            {
                                //utilisateur inconnu
                                $error[] = '<div class="alert alert-danger text-center"><center></br>Utilisateur ou mot de passe incorrect(s).</center></div>';
                            }
                        }
                        if(count($error)!=0)
                        {
                            foreach ($error as $key => $value)
                            {
                                echo $value.'<br>';
                            }
                        }
                    }
                }
            ?>
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
