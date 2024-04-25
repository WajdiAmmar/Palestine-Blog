<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Palestine Blog & Discussion Forum</title>
    <link rel="stylesheet" href="vendor/twbs/bootstrap/dist/css/bootstrap.min.css">



    <style>
        body {
            background-color #FFFFFF;
            background-size: cover;
            background-color: rgba(255, 255, 255, 0.5); /* Couleur d'arrière-plan avec opacité */
            margin: 0; /* Supprimer la marge par défaut du corps */
            padding: 0; /* Supprimer le rembourrage par défaut du corps */
        }
        .navbar-brand {
            font-size: 24px;
            font-weight: bold;
        }

        .navbar-nav .nav-link {
            font-size: 18px;
            padding: 10px 20px;
            border-bottom: 3px solid transparent;
            transition: border-color 0.3s ease;
        }

        .navbar-nav .nav-link:hover {
            border-color: #007bff;
        }

        .navbar-toggler {
            border-color: #e56d00;
        }

        .navbar-toggler-icon {
            background-color: #e56d00;
        }

        .video-background {
            width: 100%;
            height: 400px; /* Hauteur de la vidéo */
            overflow: hidden;
            position: relative;
        }

        .video-background video {
            min-width: 100%; /* Largeur minimum de la vidéo */
            min-height: 100%; /* Hauteur minimum de la vidéo */
            position: absolute;
            top: 50%; /* Positionner la vidéo au milieu */
            left: 50%; /* Positionner la vidéo au milieu */
            transform: translate(-50%, -50%); /* Centrer la vidéo horizontalement et verticalement */
        }

        .card {
            margin-bottom: 20px; /* Espace entre les cartes */
        }

        .card-body {
            height: 200px; /* Hauteur des cartes */
            overflow: auto; /* Ajout d'une barre de défilement si nécessaire */
        }
    
    
         .text{
            
         }
        .message-container {
            margin-bottom: 10px;
        }

        .message {
            padding: 10px;
            border-radius: 10px;
            margin-bottom: 10px;
            max-width: 70%;
            word-wrap: break-word;
            clear: both;
        }

        .message-text {
            font-size: 1rem;
            margin: 5px 0;
            padding: 10px;
            border-radius: 10px;
        }

        .message-me {
            background: #a45611;
            color: #fff;
            float: right;
        }

        .message-other {
            background: #ff983f;
            color: #fff;
            border: 1px solid #ddd;
            float: left;
        }

        .message-form {
            margin-top: 20px;
            display: flex;
            flex-direction: column;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-control {
            padding: 10px;
            border-radius: 10px;
            border: 1px solid #ddd;
        }

        .btn-primary {
            background-color:  #e56d00;  
            border: none;
            border-radius: 10px;
            padding: 10px 20px;
            color: #fff;
            cursor: pointer;
        }

.forum-container.frame {
    padding: 0; /* Remove padding for the frame */
}

.forum-container.frame .message-container:last-child {
    margin-bottom: 0; /* Remove margin bottom for the last message */
}
.forum-container {
    display: flex;
    flex-direction: column;
    max-height: 300px;
    max-width:650px; /* Reduce the height of the container */
    overflow-y: auto; /* Add vertical scroll if content exceeds container height */
    border: 4px solid #ccc; /* Add border */
    border-radius: 20px; /* Add border radius */
    padding: 20px; /* Adjust padding */
    margin-top: auto; /* Adjust margin */
}

.forum-container.frame {
    padding: 0; /* Remove padding for the frame */
}

.forum-container.frame .message-container:last-child {
    margin-bottom: 0; /* Remove margin bottom for the last message */
}

.message-form {
    margin-top: auto; /* Push the form to the bottom */
}
forum-container::-webkit-scrollbar {
    width: 8px; /* Width of the scrollbar */
}

.forum-container::-webkit-scrollbar-thumb {
    background-color: #888; /* Color of the scrollbar thumb */
    border-radius: 4px; /* Rounded corners */
}

.forum-container::-webkit-scrollbar-thumb:hover {
    background-color: #555; /* Color of the scrollbar thumb on hover */
}
.btn-envoyer{
    background-color: #e56d00; 
    color: #ffffff; /* Couleur du texte */
            border: none; /* Suppression de la bordure */
            padding: 10px 20px; /* Rembourrage */
            border-radius: 5px; /* Rayon de bordure */
            cursor: pointer; /* Curseur au survol */
            transition: linear-gradient(to bottom right,white, #e61919,#000000, #14b851);
}

        /* Changement de couleur au survol */
        .btn-envoyer:hover {

        }
        .btn-primary:hover {
           background:linear-gradient(to bottom right,white, #e61919,#000000, #14b851);
        }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark rounded" style="height: 90px; background-color: black;">
    <div class="container">
        <a class="navbar-brand" href="#" style="color: #e56d00;">
            <img src="img/free.jpg" alt="Logo" style="height: 90px; width: auto;"> 
            Palestine Blog
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-between align-items-center" id="navbarNav">
        <ul class="navbar-nav">
    <li class="nav-item">
        <a class="nav-link" href="blog.php" style="color: white; padding: 5px 10px;">Accueil</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="#blog" style="color: white; padding: 5px 10px;">Blog</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="#forum" style="color:white; padding: 5px 10px;">Forum</a>
    </li>
</ul>
<ul class="navbar-nav">
    <?php
    if (isset($_SESSION['user_id'])):
    ?>
    <li class="nav-item">
        <a class="nav-link btn btn-outline-light" href="deconnexion.php" style="color: #e56d00 ; padding: 5px 10px;">Se déconnecter</a>
    </li>
    <?php
    else:
    ?>
    <li class="nav-item">
        <a class="nav-link btn btn-outline-light" href="connexion.html" style="color: #e56d00 ; padding: 5px 10px;">Se connecter</a>
    </li>
    <?php
    endif;
    ?>
</ul>

        </div>
    </div>
</nav>


<div class="video-background">
    <video autoplay loop muted>
        <source src="img/vd3.mp4" type="video/mp4">
    </video>
</div>

<div class="container py-5" style="margin-bottom: -450px;">
    <div class="row">
        <div class="col-md-6">
            <h1 class="text-center mb-5">Palestine Blog</h1>
            <p> Palestine 
                La Palestine Écouter, en forme longue l'État de Palestine (arabe : دولة فلسطين, Dawlat Filasṭīn), est un État souverain de jure (loi palestinienne). Située au Moyen-Orient, elle est présente sur les territoires palestiniens occupés et revendique Jérusalem-Est et l'entièreté de la Cisjordanie. Ses frontières sont, de facto et depuis 1994 (accords d'Oslo),celles des zones A et B de la Cisjordanie, gouvernée par l'Autorité palestinienne, et celles de la bande de Gaza, sous contrôle du Hamas depuis 2007 mais revendiquée par l'Autorité palestinienne. Sa capitale est de jure Jérusalem, cependant le siège du gouvernement palestinien se situe à Ramallah en raison de l'annexion de Jérusalem-Est par Israël. Démographie palestinienne:

En 2017, la population des territoires palestiniens est de 4,9 millions d'habitants (3 millions en Cisjordanie - y compris à Jérusalem-Est - et 1,9 million dans la bande de Gaza)

Le taux de fécondité en Palestine en 2011-2013 est de 4,1 enfants par femme et la croissance démographique annuelle est de 2,8 %133.

Note : ces chiffres incluent uniquement les habitants palestiniens (dans l'acception contemporaine) et excluent donc les juifs israéliens habitant les territoires palestiniens.

Langue:
La langue palestinienne est l'arabe. Le dialecte variant de l'arabe littéral fait partie de la famille linguistique sémitique: l'arabe levantin septentrional ou syro-libano-palestinien.

Religions:
En 1922, les Britanniques avaient recensé 752 048 Palestiniens (au sens de l'époque), dont 589 177 musulmans, 83 790 juifs, 71 464 chrétiens et 7 617 personnes d'autres appartenances. Au xxie siècle, la population palestinienne est largement musulmane sunnite, avec une minorité chrétienne.

Un rapport établi en 2017 par le Bureau central des statistiques de l'État palestinien recense 46 850 chrétiens dans les Territoires palestiniens, soit 1,4 % de la population, mais plus de 600 000 dans le monde (orthodoxes grecs ou arméniens ; catholiques latins, grecs ; protestants luthériens ou anglicans). Le recensement de 2017 montre une présence chrétienne en constante diminution puisqu'elle s'élevait à 2 % en 2000



            </p>
        </div>
        <div class="col-md-6">
            <h2 class="mb-4">Blogs sur Palestine</h2>
            <div class="card mb-3">
                <img src="img/img4.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Histoire palestinien :</h5>
                    <p class="card-text">Les provinces (vilayet) de l'Empire ottoman (en jaune) en 1609, avec les états ...</p>
                    <a href="blog1.php" class="btn btn-primary">Read More</a>
                </div>
            </div>
            <div class="card mb-3">
                <img src="img/img2.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Conflit israélo-palestinien :</h5>
                    <p class="card-text">Le conflit israélo-palestinien oppose Palestiniens et Israéliens au Proche-Orient...</p>
                    <a href="blog2.php" class="btn btn-primary">Read More</a>
                </div>
            </div>
            <div class="card mb-3">
                <img src="img/img01.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Les territoires palestiniens occupés :</h5>
                    <p class="card-text">À partir des années 1970, l'ONU parle de « territoires palestiniens occupés »...</p>
                    <a href="blog3.php" class="btn btn-primary">Read More</a>
                </div>
            </div>
           
        </div>
    </div>
</div>

<h1 class="text-left" style="color:#e56d00 ">Forum de Discussion</h1>
    <div class="forum-container frame" style="margin-left: 10px;"id="forum-container"> <!-- Conteneur du forum avec cadre -->

        <!-- Affichage des messages du forum -->

        <?php require "message.php"; ?>
        <?php foreach ($messages as $index => $message): ?>
        <div class="message-container">
        <div class="message <?php echo $index % 2 == 0 ? 'message-me' : 'message-other'; ?>">
            <p class="message-text"><?php echo $message['prenom']. ':' . $message['contenu']; ?></p>
        </div>
        </div>
        <?php endforeach; ?>

   
     <!-- Formulaire pour ajouter un nouveau message -->
<form id="message-form" class="message-form" method="POST">
    <div class="form-group">
        <textarea class="form-control" id="contenu" name="contenu" rows="1" placeholder="Tapez un message..." required></textarea>
    </div>
    <?php
    // Vérifier si l'utilisateur est connecté
    $utilisateurConnecte = isset($_SESSION['user_id']);
    if (!$utilisateurConnecte):
    ?> 
      <p>Veuillez vous connecter pour envoyer un message.</p>
        
    <?php else: ?>
        <button type="submit"  id="envoyer-message" class="btn btn-primary">Envoyer</button>
      
    <?php endif; ?>

</form>
    </div>
<script>
    var forumContainer = document.getElementById('forum-container');
    forumContainer.scrollTop = forumContainer.scrollHeight;
</script>


<footer class="footer bg-dark text-white mt-5">
    <div class="container py-4">
        <div class="row">
            <div class="col-md-6">
                <h5>Adresse</h5>
                <p>123 Rue Principale, Ville, Pays</p>
            </div>
            <div class="col-md-6">
                <h5>Contact</h5>
                <p>Email: example@example.com</p>
                <p>Téléphone: +1234567890</p>
            </div>
        </div>
    </div>
    <div class="text-center py-3">
        <p>&copy; 2024 Votre Nom</p>
    </div>
</footer>
</body>
</html>