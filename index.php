<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Enregistrement d'enfants à la pouponnière</title>
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
</head>

<style>

    
body {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
        }
        footer {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 10px 0;
            position: relative;
            bottom: 0;
            width: 100%;
            margin-top: auto;
        }

        footer a {
            color: #ffcc00;
            text-decoration: none;
            margin: 0 10px;
        }

        footer a:hover {
            text-decoration: underline;
        }

        main {
            text-align: center;
        }

        .form-container {
            background-color: white;
            padding: 20px;
            border: 2px solid #333;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 400px;
        }

        .form-container h1 {
            margin-top: 0;
        }

        .form-container input[type="text"],
        .form-container input[type="date"],
        .form-container input[type="tel"],
        .form-container input[type="submit"] {
            width: 60%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
</style>

<body data-bs-spy="scroll" data-bs-target="#myNavbar">
    
    <nav id="myNavbar" class="navbar navbar-expand-lg navbar-dark fixed-top">
        <div class="container-fluid">
          <a class="navbar-brand" href="#"></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
              <a class="nav-link active" aria-current="page" href="#about">Moi</a>
              <a class="nav-link" href="#skills">Compétences</a>
              <a class="nav-link" href="#experience">Expérience</a>
              <a class="nav-link" href="#recommandations">Recommandations</a>

            </div>
          </div>
        </div>
      </nav>

    <section id="about" style="background-color: #4e7ac7; color: white; padding: 50px 0; padding-bottom: 50px;">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 text-center profile-picture">
                    <img src="Sebeau.png" class="rounded-circle" alt="Sébastien Sébou DIOUF">
                </div>
            </div>
            <div class="row">
                <div class="col-12 text-center heading">
                    <h2 style="color: white; text-transform: uppercase; margin-bottom: 10px; padding: 10px; ">Hello, c'est Sébastien Sébou DIOUF</h2>
                    <h3 style="color: black;">Pouponièrer de Médina</h3> 
                    <a href="CV Sébo.pdf" class="button1" target="_blank">Télécharger la liste</a>
                </div>
            </div>
        </div>
    </section>

    <h1>Formulaire pour enregistrer un enfant</h1>
    <form action="enregistrer.php" method="post">
        <div class="form-container">
            <h3>Informations sur l'enfant</h3>

        <label for="Numéro_identification">Numéro d'identification :</label>
        <input type="number" id="Numéro_identification" name="Numéro_identification" min="1" max="100000" step="1" required><br><br>

        <label for="nom">Nom:</label>
        <input type="text" id="nom" name="nom" required><br><br>
        
        <label for="prénom">Prénom:</label>
        <input type="text" id="prénom" name="prénom" required><br><br>

        <label for="sexe">Sexe:</label>
        <select id="sexe" name="sexe" required>
            <option value=""></option>
            <option value="M">Masculin</option>
            <option value="F">Féminin</option>
        </select><br><br>

        <label for="date_naissance">Date de naissance:</label>
        <input type="date" id="date_naissance" name="date_naissance" required><br><br>

        <label for="situation">Situation:</label>
        <select id="situation" name="situation" required>
            <option value=""></option>
            <option value="Orphelin">Orphelin</option>
            <option value="Abandon">Abandon</option>
        </select><br><br>
        
        <label for="date_entrée">Date d'entrée:</label>
        <input type="date" id="date_entrée" name="date_entrée" required><br><br>

        <label for="adresse">Adresse:</label>
        <input type="text" id="adresse" name="adresse" required><br><br>

        <label for="tel">Téléphone:</label>
        <input type="tel" id="phone" name="phone" pattern="\d{9}" required><br><br>

        <label for="durée">Durée:</label>
        <input type="text" id="durée" name="durée" required><br><br>
        
        </div><br>
        <br>
        <input type="submit" value="Enregistrer">
    </form>
<br>

   <section id="recommandations">
    <div class="container">
        <div class="divider"></div>
        <div class="heading">
            <h2>Recommandations</h2>
        </div>

        <div id="myCarousel" class="carousel carousel-dark slide text-center">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active" data-bs-interval="10000">
                    <p>"Travailler avec Sebeau a été un plaisir du début à la fin. Sa communication claire et efficace nous a permis de rester informés à chaque étape du projet. Nous sommes très satisfaits du résultat final et nous recommandons vivement ses services à quiconque recherche un développeur web compétent et fiable."</p>
                    <h6>Sandrine de Carvalo, Responsable marketing.</h6>
              </div>
              <div class="carousel-item">
                    <p>"Nous avons fait appel à Sebeau pour développer notre site e-commerce et nous n'avons pas été déçus. Son respect des délais et sa capacité à livrer un travail de qualité dans les temps ont été très appréciés. Nous le recommandons vivement pour tout projet de développement web."</p>
                    <h6> François Biagui, Directeur général .</h6>
              </div>
              <div class="carousel-item" data-bs-interval="2000">
                <p>"Travailler avec Batien Sebeau a été une expérience très positive. Sa réactivité, son professionnalisme et sa capacité à résoudre rapidement les problèmes ont été impressionnants. Je n'hésiterais pas à le recommander à quiconque recherche un développeur web compétent."</p>
                <h6>Victorine Dasylva, Responsable des achats .</h6>
             </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
    </div>
   </section>
     
    
   <footer>
        <p>&copy; 2024 - Application d'enregistrement des enfants. Tous droits réservés.</p>
        <p>
            <a href="#">Mentions légales</a> |
            <a href="#">Politique de confidentialité</a> |
            <a href="#">Contactez-nous</a>
        </p>
    </footer>


    <script>
        // Function to check if an element is in viewport
        function isInViewport(element) {
          var rect = element.getBoundingClientRect();
          return (
            rect.top >= 0 &&
            rect.left >= 0 &&
            rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
            rect.right <= (window.innerWidth || document.documentElement.clientWidth)
          );
        }
    
        // Function to animate progress bars
        function animateProgressBar() {
          var progressBars = document.querySelectorAll('.progress-bar');
          progressBars.forEach(function(bar) {
            if (isInViewport(bar.parentNode)) {
              var progressValue = bar.parentNode.getAttribute('aria-valuenow');
              var label = bar.parentNode.getAttribute('aria-label'); // Ajout de la récupération du label
              bar.style.width = progressValue + '%';
              bar.textContent = label + ' ' + progressValue + '%'; // Changement ici
              bar.classList.add('progress-animate');
            }
          });
        }
    
        // Call the animation function when the page is scrolled
        window.addEventListener('scroll', animateProgressBar);
        // Call the animation function when the page loads
        window.addEventListener('load', animateProgressBar);
      </script>
    


</body>
</html>