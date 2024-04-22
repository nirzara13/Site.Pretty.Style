<!doctype html>
<html lang="en" data-bs-theme="auto">
  <head><script src="assets/js/color-modes.js"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.118.2">

    <link rel="icon" href="photos/Logo_Cultural_Couture.png" type="image/x-icon">
    <link rel="shortcut icon" href="../photos/Logo_Cultural_Couture.png" type="image/x-icon">

    <title>Cultural Couture</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/blog/">

    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/carousel/">

    

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">

<link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        width: 100%;
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }

      .btn-bd-primary {
        --bd-violet-bg: #712cf9;
        --bd-violet-rgb: 112.520718, 44.062154, 249.437846;

        --bs-btn-font-weight: 600;
        --bs-btn-color: var(--bs-white);
        --bs-btn-bg: var(--bd-violet-bg);
        --bs-btn-border-color: var(--bd-violet-bg);
        --bs-btn-hover-color: var(--bs-white);
        --bs-btn-hover-bg: #6528e0;
        --bs-btn-hover-border-color: #6528e0;
        --bs-btn-focus-shadow-rgb: var(--bd-violet-rgb);
        --bs-btn-active-color: var(--bs-btn-hover-color);
        --bs-btn-active-bg: #5a23c8;
        --bs-btn-active-border-color: #5a23c8;
      }

      .bd-mode-toggle {
        z-index: 1500;
      }

      .bd-mode-toggle .dropdown-menu .active .bi {
        display: block !important;
      }


      .bouton-marge {
      margin-bottom: 15px;
      /* Vous pouvez ajuster la valeur selon l'espace souhaité */
    }

    main {
      flex: 1;
      /* Fait en sorte que le contenu de la page prenne tout l'espace disponible */
      padding: 30px;
    }




      .logo-title {
  font-size: 28px;
  font-family: 'Times New Roman', sans-serif; /* Choisissez votre police préférée */

}

    </style>

    
    <!-- Custom styles for this template -->
    <link href="https://fonts.googleapis.com/css?family=Playfair&#43;Display:700,900&amp;display=swap" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="blog.css" rel="stylesheet">
  </head>
  <body>
    <svg xmlns="http://www.w3.org/2000/svg" class="d-none">
      <symbol id="check2" viewBox="0 0 16 16">
        <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
      </symbol>
      <symbol id="circle-half" viewBox="0 0 16 16">
        <path d="M8 15A7 7 0 1 0 8 1v14zm0 1A8 8 0 1 1 8 0a8 8 0 0 1 0 16z"/>
      </symbol>
      <symbol id="moon-stars-fill" viewBox="0 0 16 16">
        <path d="M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278z"/>
        <path d="M10.794 3.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387a1.734 1.734 0 0 0-1.097 1.097l-.387 1.162a.217.217 0 0 1-.412 0l-.387-1.162A1.734 1.734 0 0 0 9.31 6.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387a1.734 1.734 0 0 0 1.097-1.097l.387-1.162zM13.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732l-.774-.258a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L13.863.1z"/>
      </symbol>
      <symbol id="sun-fill" viewBox="0 0 16 16">
        <path d="M8 12a4 4 0 1 0 0-8 4 4 0 0 0 0 8zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z"/>
      </symbol>
    </svg>

    <div class="dropdown position-fixed bottom-0 end-0 mb-3 me-3 bd-mode-toggle">
      <button class="btn btn-bd-primary py-2 dropdown-toggle d-flex align-items-center"
              id="bd-theme"
              type="button"
              aria-expanded="false"
              data-bs-toggle="dropdown"
              aria-label="Toggle theme (auto)">
        <svg class="bi my-1 theme-icon-active" width="1em" height="1em"><use href="#circle-half"></use></svg>
        <span class="visually-hidden" id="bd-theme-text">Toggle theme</span>
      </button>
      <ul class="dropdown-menu dropdown-menu-end shadow" aria-labelledby="bd-theme-text">
        <li>
          <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="light" aria-pressed="false">
            <svg class="bi me-2 opacity-50 theme-icon" width="1em" height="1em"><use href="#sun-fill"></use></svg>
            Light
            <svg class="bi ms-auto d-none" width="1em" height="1em"><use href="#check2"></use></svg>
          </button>
        </li>
        <li>
          <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="dark" aria-pressed="false">
            <svg class="bi me-2 opacity-50 theme-icon" width="1em" height="1em"><use href="#moon-stars-fill"></use></svg>
            Dark
            <svg class="bi ms-auto d-none" width="1em" height="1em"><use href="#check2"></use></svg>
          </button>
        </li>
        <li>
          <button type="button" class="dropdown-item d-flex align-items-center active" data-bs-theme-value="auto" aria-pressed="true">
            <svg class="bi me-2 opacity-50 theme-icon" width="1em" height="1em"><use href="#circle-half"></use></svg>
            Auto
            <svg class="bi ms-auto d-none" width="1em" height="1em"><use href="#check2"></use></svg>
          </button>
        </li>
      </ul>
    </div>

    
<svg xmlns="http://www.w3.org/2000/svg" class="d-none">
  <symbol id="aperture" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24">
    <circle cx="12" cy="12" r="10"/>
    <path d="M14.31 8l5.74 9.94M9.69 8h11.48M7.38 12l5.74-9.94M9.69 16L3.95 6.06M14.31 16H2.83m13.79-4l-5.74 9.94"/>
  </symbol>
  <symbol id="cart" viewBox="0 0 16 16">
    <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l.84 4.479 9.144-.459L13.89 4H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
  </symbol>
  <symbol id="chevron-right" viewBox="0 0 16 16">
    <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
  </symbol>
</svg>

<div class="container">
  <header class="border-bottom lh-1 py-3">
    <div class="row flex-nowrap align-items-center">

    <div class="col-auto pe-1 logo-container">
    
    <a href="./?action=defaut">
    <img src="photos/Logo_Cultural_Couture.png" alt="Logo" class="logo-medium" width="100" height="auto"tabindex="0">
    </a>
</div>

      <div class="col text-start">
        <a class="blog-header-logo text-body-emphasis text-decoration-none logo-title" href="#" aria-label="Cultural Couture">Cultural Couture</a>
      </div>

      <div class="col d-flex justify-content-end">
        <form action="recherche.php" method="GET" class="d-flex me-3">
          <input type="text" name="recherche" placeholder="Recherche par pays..." aria-label="Recherche par pays" class="form-control me-2">
          <button type="submit" class="btn btn-secondary" aria-label="Rechercher">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="mx-3" role="img" viewBox="0 0 24 24"><title>Recherche</title><circle cx="10.5" cy="10.5" r="7.5"/><path d="M21 21l-5.2-5.2"/></svg>
          </button>
        </form>
        <a class="btn btn-dark me-3" href="./?action=inscription" aria-label="Inscription">Inscription</a>
        <a class="btn btn-dark" href="./?action=connexion" aria-label="Connexion">Connexion</a>
        
      </div>

    </div>
  </header>
</div>


  <div class="nav-scroller py-1 mb-3 border-bottom">
    <nav class="nav nav-underline justify-content-between">
      <a class="nav-item nav-link link-body-emphasis active" href="#"> </a>
      <a class="nav-item nav-link link-body-emphasis" href="#"> </a>
      <a class="nav-item nav-link link-body-emphasis" href="#"> </a>
      <a class="nav-item nav-link link-body-emphasis" href="#"> </a>
      <a class="nav-item nav-link link-body-emphasis" href="#"> </a>
      <a class="nav-item nav-link link-body-emphasis" href="#"> </a>
      <a class="nav-item nav-link link-body-emphasis" href="#">  </a>
      <a class="nav-item nav-link link-body-emphasis" href="#">  </a>
      <a class="nav-item nav-link link-body-emphasis" href="#"> </a>
      <a class="nav-item nav-link link-body-emphasis" href="#"> </a>
      <a class="nav-item nav-link link-body-emphasis" href="#"> </a>
      <a class="nav-item nav-link link-body-emphasis" href="#"></a>
    </nav>
  </div>
</div>

  
<main class="container">
  <div class="row">
    <div class="col-lg-6 px-0">
      <!-- Utiliser la classe Bootstrap pour afficher l'image à 100% de la largeur -->
      <img src="photos/page_accueil.avif" class="img-fluid rounded-start w-100" alt="Featured image">
    </div>
    <div class="col-lg-6 px-0">
      <!-- Ajouter un cadre pour écrire du texte au milieu -->
      <div class="border p-3 text-center" style="font-family: 'Times New Roman', sans-serif;">
    <h1><strong>Bienvenue sur Cultural Couture</strong></h1>
    <br>
    <br>
    <h4>Découvrez la richesse culturelle du monde à travers une collection éblouissante de tenues traditionnelles provenant des quatre coins de la planète. Plongez dans un voyage fascinant à travers les traditions, les coutumes et les héritages uniques de chaque pays, incarnés dans leurs tenues traditionnelles distinctives.</h4>
</div>
    </div>
  </div>
  
</main>
  




    <hr>
    <div class="row featurette">
  <div class="col-md-7 text-center my-auto">
    <h3 class="featurette-heading fw-normal lh-1"><strong>Amérique du Nord </strong> <span class="text-body-secondary"> </span></h3>
    <p class="lead"><strong>Des costumes autochtones aux influences contemporaines, explorez la diversité des tenues traditionnelles d'Amérique du Nord</strong></p>
    <a class="btn btn-primary btn-lg mt-3" href="./?action=ConnexionAmeriqueduNord" aria-label="Découvrir">Découvrir</a>
  </div>
  <div class="col-md-5">
  <img src="photos/Photo_Amerique_du_Nord.avif" class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" alt="Description de votre image">
  </div>
</div>

<hr class="featurette-divider">

<div class="row featurette">
  <div class="col-md-7 order-md-2 text-center my-auto">
    <h2 class="featurette-heading fw-normal lh-1"><strong>Amerique Du Sud <span class="text-body-secondary"></strong></span></h2>
    <p class="lead"><strong>Embarquez pour un voyage visuel à travers les tenues traditionnelles envoûtantes de l'Amérique du Sud</strong></p>
    <a class="btn btn-primary btn-lg mt-3" href="./?action=ConnexionAmeriqueduSud" aria-label="Découvrir">Découvrir</a>
  </div>
  <div class="col-md-5 order-md-1">
  <img src="photos/Amerique_du_Sud.jpeg" class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" alt="Description de votre image">
  </div>
</div>

<hr class="featurette-divider">

<div class="row featurette">
  <div class="col-md-7 text-center my-auto">
    <h2 class="featurette-heading fw-normal lh-1"><strong> Afrique <span class="text-body-secondary"></strong></span></h2>
    <p class="lead"><strong>Explorez les couleurs vibrantes et les motifs envoûtants des tenues traditionnelles africaines</strong></p>
    <a class="btn btn-primary btn-lg mt-3" href="./?action=connexionAfrique" aria-label="Découvrir">Découvrir</a>
  </div>
  <div class="col-md-5">
  <img src="photos/Afrique_Accueil.webp" class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" alt="Description de votre image">
  </div>
</div>

<hr class="featurette-divider">

<div class="row featurette">
  <div class="col-md-7 order-md-2 text-center my-auto">
    <h2 class="featurette-heading fw-normal lh-1"><strong>Europe <span class="text-body-secondary"> </strong></span></h2>
    <p class="lead"><strong>Célébrez la richesse culturelle et la variété des traditions européennes à travers ses tenues traditionnelles, véritables trésors de son patrimoine </strong></p>
    <a class="btn btn-primary btn-lg mt-3" href="./?action=ConnexionEurope" aria-label="Découvrir">Découvrir</a>
  </div>
  <div class="col-md-5 order-md-1">
  <img src="photos/Drapeau_Europe.jpg" class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" alt="Description de votre image">
  </div>
</div>

<hr class="featurette-divider">

<div class="row featurette">
  <div class="col-md-7 text-center my-auto">
    <h2 class="featurette-heading fw-normal lh-1"><strong>Asie <span class="text-body-secondary"> </strong></span></h2>
    <p class="lead"><strong>Laissez-vous séduire par la grâce et la splendeur des tenues traditionnelles asiatiques, témoignages vivants de son héritage artistique</strong></p>
    <a class="btn btn-primary btn-lg mt-3" href="./?action=ConnexionAsie" aria-label="Découvrir">Découvrir</a>
  </div>
  <div class="col-md-5">
  <img src="photos/Asie_Accueil.jpeg" class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" alt="Description de votre image">
  </div>
</div>

<hr class="featurette-divider">

<div class="row featurette">
  <div class="col-md-7 order-md-2 text-center my-auto">
    <h2 class="featurette-heading fw-normal lh-1"><strong>Océanie <span class="text-body-secondary"></strong></span></h2>
    <p class="lead"><strong>Appréciez l'authenticité et la spiritualité des tenues traditionnelles océaniennes, symboles de la connexion profonde avec la nature</strong></p>
    <a class="btn btn-primary btn-lg mt-3" href="./?action=connexionOceanie" aria-label="Découvrir">Découvrir</a>
  </div>
  <div class="col-md-5 order-md-1">
  <img src="photos/Oceanie.avif" class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" alt="Description de votre image">
  </div>
</div>

<script>
function redirectToLoginPage(pageUrl) {
    // Récupérer l'URL de la page cible
    var redirectUrl = encodeURIComponent(pageUrl);
    // Rediriger l'utilisateur vers la page de connexion avec l'URL de redirection en tant que paramètre GET
    window.location.href = './vue/vueConnexion.php?redirect=' + redirectUrl;
}
</script>

<!-- /END THE FEATURETTES -->

</div><!-- /.container -->
<br>
<br>
<hr>

<footer class="py-5 text-center text-body-secondary bg-dark">
    <p><span class="text-white">Modèle de blog conçu pour</span> <a href="https://getbootstrap.com/">Bootstrap</a> by <a href="https://twitter.com/mdo"></a>.</p>
    <p class="mb-0">
        <a href="#">Retour en haut</a> | <!-- Lien vers le haut de la page -->
        <a href="./vue/vueMention.legales.php">Mentions légales</a> | <!-- Lien vers les mentions légales -->
        <a href="./vue/vueCGU.php" class="text-body-primary">CGU</a> | <!-- Lien vers les conditions générales d'utilisation -->
        <a href="./vue/vuePolitique_de_confidentialite.php" class="text-body-primary">Politique de confidentialité</a> 
    </p>
</footer>
<script src="assets/dist/js/bootstrap.bundle.min.js"></script>
    </body>

</html>
