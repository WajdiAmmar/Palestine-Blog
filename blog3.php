<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Palestine Blog & Discussion Forum</title>
    <link rel="stylesheet" href="vendor/twbs/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendor/fontawesome/css/all.min.css">
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
    max-height: 300px; /* Reduce the height of the container */
    overflow-y: auto; /* Add vertical scroll if content exceeds container height */
    border: 4px solid #ccc; /* Add border */
    border-radius: 20px; /* Add border radius */
    padding: 20px; /* Adjust padding */
    margin-top: 20px; /* Adjust margin */
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
                <li class="nav-item">
                    <a class="nav-link btn btn-outline-light" href="connexion.html" style="color: #e56d00 ; padding: 5px 10px;">Se connecter</a>
                </li>
            </ul>
        </div>
    </div>
</nav>


<div class="video-background">
    <video autoplay loop muted>
        <source src="img/vd3.mp4" type="video/mp4">
    </video>
</div>

<div class="container py-5">
    <div class="row">
        <div class="col-md-6">
            <h1 class="text-center mb-5">Les territoires palestiniens occupés :</h1>
            <!-- Introduction Section -->
            <p> 
        
À partir des années 1970, l'ONU parle de « territoires palestiniens occupés ». Dans sa résolution 58/292 du 6 mai 2004, l'Assemblée générale des Nations unies avalise la notion de « territoire palestinien occupé, incluant Jérusalem-Est ». La plupart des Israéliens les dénomment brièvement « les territoires », en hébreu : השטחים. Le gouvernement israélien y voit un « territoire disputé » au statut non défini.

Le terme est utilisé par les Nations unies pour décrire les territoires sous le contrôle de l'Autorité palestinienne depuis 1993. Ceux-ci sont revendiqués pour devenir l'État de Palestine. Depuis 2017, les États-Unis ne décrivent plus les territoires palestiniens conquis par les forces israéliennes après la guerre des Six Jours comme étant « occupés ».

Les territoires palestiniens occupés en Cisjordanie et dans la bande de Gaza ont été divisés par les accords d'Oslo en trois aires administratives aux statuts différents. Ces zones ont été confirmées par les accords d'Oslo II :

la zone A (2 %) est la région sous contrôle palestinien total. Elle comprend l'essentiel des villes palestiniennes, à l'exception de Jérusalem-Est qui a été exclue des accords ;
la zone B (26 %) est la région sous contrôle palestinien civil mais sous contrôle militaire israélien ;
la zone C (72 %) est la région sous contrôle total israélien.
Ces territoires ont été divisés en seize gouvernorats (5 dans la bande de Gaza et 11 en Cisjordanie), sous la juridiction de l'Autorité palestinienne.

Dans la bande de Gaza :

Gouvernorat de Deir el-Balah,
Gouvernorat de Gaza,
Gouvernorat de Gaza-Nord,
Gouvernorat de Khan Younès,
Gouvernorat de Rafah et 
En Cisjordanie :

Gouvernorat de Bethléem,
Gouvernorat de Hébron,
Gouvernorat de Jénine,
Gouvernorat de Jéricho,
Gouvernorat de Jérusalem,
Gouvernorat de Naplouse,
Gouvernorat de Qalqilya,
Gouvernorat de Ramallah et Al-Bireh,
Gouvernorat de Salfit,
Gouvernorat de Tubas et
Gouvernorat de Tulkarem
            </p>
        </div>
        <div class="col-md-6">
            <h2 class="mb-4">Blogs on Palestine</h2>
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
                <img src="img/flag.webp" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Palestine</h5>
                    <p class="card-text"> La Palestine Écouter, en forme longue l'État de Palestine (arabe : دولة فلسطين, Dawlat Filasṭīn)...</p>
                    <a href="blog.php" class="btn btn-primary">Read More</a>
                </div>
            </div>
           
        </div>
    </div>
</div>

</body>
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
</html>
