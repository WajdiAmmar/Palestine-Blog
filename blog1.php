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
            <h1 class="text-center mb-5">Histoire palestinien:</h1>
            <!-- Introduction Section -->
            <p> Histoire:
Période ottomane:

Les provinces (vilayet) de l'Empire ottoman (en jaune) en 1609, avec les états vassaux musulmans (en vert) et les états vassaux chrétiens (en rose).
Lors de la victoire des Turcs ottomans sur les Mamelouks égyptiens en 1517, la région passa sous autorité turque et fit partie de l'Empire ottoman pendant 400 ans, jusqu'à l'hiver 1917-1918. La région de Palestine fit partie intégrante de la « province de Damas » (Dimashq al-Shâm), gouvernée depuis Istanbul et englobée dans les districts recouvrant la région moyen-orientale. Le turc était la langue officielle de l'administration, alors que l'arabe syro-libanais restait la langue de la majorité des populations locales. La province de Damas fut progressivement et informellement appelée par les Turcs Arz-i Filistin pour désigner la zone située entre la Méditerranée et le Jourdain.

Malgré la mainmise turque et musulmane sur la région, les communautés chrétiennes et juives conservèrent une certaine autonomie : les Capitulations assurent une certaine protection aux prêtres chrétiens, puis à l'ensemble des chrétiens de l'Empire ottoman, et la communauté juive de Jérusalem possède à sa tête un grand-rabbin, appelé en hébreu Rishon LeTzion (ראשון לציון - le premier à Sion) depuis le xviie siècle. La Palestine bénéficia de la prospérité de l’Empire ottoman au cours du premier siècle de l'occupation ottomane, mais déclina lentement à partir du xviie siècle. Ce déclin eut des répercussions sur le commerce, l’agriculture et la démographie, et il se prolongea jusqu’au xixe siècle. Au début du xixe siècle, la population de la Palestine avait été réduite de la moitié par rapport à ce qu'elle avait été au xvie siècle ; il ne restait environ que 280 000 habitants, pour passer à 470 000 en 1880, alors que commençaient à se développer l'immigration juive et les achats de terres.

Au cours des années 1880, des colons allemands et des immigrants juifs apportèrent des machines modernes et des capitaux nécessaires au développement du pays. On estime que la Palestine abritait quelque 24 000 Juifs et majoritairement à Jérusalem, alors que la population totale s'élevait à environ 470 000 habitants ; les langues les plus utilisées étaient l'arabe et le turc. Le gouvernement ottoman imposa de sévères restrictions à l'immigration et à l'achat de terres par les Juifs. À la fin du xixe siècle, la région est divisée en trois districts, ceux d'Acre, de Balqa et de Jérusalem, les deux premiers appartenant à la wilayet de Beyrouth.

Émergence du nationalisme palestinien

L'effondrement de l'Empire ottoman vers 1923 a été accompagné par l’émergence du nationalisme dans ses provinces arabes, particulièrement en Syrie, considérée à cette époque comme incluant le Liban et le nord de la Palestine. En 1917, la Déclaration Balfour prévoit l'établissement d'un « foyer national pour le peuple juif ». En 1919, est signé l'Accord Fayçal-Weizmann en tant qu'élément de la Conférence de paix de Paris. Dès 1920, le mufti Mohammed Amin al-Husseini, devient l'un des principaux dirigeants du nationalisme palestinien. Il s'oppose activement au sionisme et est considéré comme l'instigateur de 1921 à 1937 des émeutes en Palestine, dont le massacre d'Hébron en 1929.

En 1925, Izz al-Din al-Qassam prône la lutte armée comme action politique ; en 1930, il fonde une organisation paramilitaire, la Main noire qui se lance dans des attaques contre les juifs et les Britanniques. De 1921 à 1935, ses actions étaient coordonnées avec celles de Mohammed Amin al-Husseini. Le nationalisme palestinien est conforté par les déclarations antisionistes de l'ensemble des régions arabes limitrophes lors de la Conférence de Bloudan de 1937.
            </p>
        </div>
        <div class="col-md-6">
            <h2 class="mb-4">Blogs on Palestine</h2>
            <div class="card mb-3">
                <img src="img/flag.webp" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Palestine</h5>
                    <p class="card-text"> La Palestine Écouter, en forme longue l'État de Palestine (arabe : دولة فلسطين, Dawlat Filasṭīn)...</p>
                    <a href="blog.php" class="btn btn-primary">Read More</a>
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
