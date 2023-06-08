<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/bootstrap.css">
    <link rel="stylesheet" href="/css/style_main_noire.css">
    <title>La main noire</title>
    <link rel="icon" type="image/png" href="/image/black_hand.png" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <?= $css ; ?>
</head>

<body class="custom-scrollbar">
    <header>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
          <div class="container-fluid ">
            <a class="navbar-brand" target="_blank" href="https://puginarug.com/"><img src="../../image/black_hand.png" style="width:20%;">La main noire</a>
           
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>

           
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav">
              <li class="nav-item">
                  <a class="nav-link text-dark" href="/Main">Accueil</a>
                </li>  
              <li class="nav-item">
                  <a class="nav-link text-dark" href="/sanglantes">Sanglantes</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-dark" href="/propres">Propre</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-dark" href="/maladies">Maladies</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-dark" href="/autres">Autres</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-dark" href="/extras">Extra</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" href="/backoffice">Backoffice</a>
                </li>
                <?php 
                if ($user == null){
                    ?>
                <li class="nav-item">
                  <button class="button-1" role="button"><a class="nav-link text-dark cnxn" href="/login">Se connecter</a></button>
                </li>
                <?php 
                } else {
                    ?>
                <li class="nav-item">
                  <button class="button-1" role="button"><a class="nav-link text-dark cnxn" href="/login/deconnexion"><?= $user ?> Me déconnecter</a></button>
                </li>
                <?php } ?>
              </ul>
            </div>
          </div>

            <a href="/paniers"> <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="#000000" class="bi bi-cart" viewBox="0 0 16 16">
              <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
            </svg></a>
            <span id="cart" class="chiffre">0</span>            
        </nav>
    </header>

        <main>
            <?= $content ?>
        </main>

        <br/>
  <footer class="footer bg-dark text-light">
  <div class="container">
    <div class="row">
      <div class="col-md-8  pt-2">
      <p>SAE 301 Réalisé par Camille Prothin et Naoki Clément BUT MMI 2023</p>
      <p>Toutes les données présentes sur ce site web sont fictives.</p>
      <a href="/CGVs" class="link-underline-light link-offset-2 link-underline-opacity-25 text-light">Conditions générales de vente</a>
      </div>
      <div class="col-md-3">
        <h5>Nous contacter</h5>
        <ul class="list-unstyled">
          <li><i class="fas fa-envelope"></i> contact@lamainnoire.nc</li>
          <li><i class="fas fa-phone"></i> +687 85 58 65</li>
          <li><i class="fas fa-map-marker-alt"></i> Rue Bouquet de la Grye, Nouméa, Nouvelle-Calédonie</li>
        </ul>
      </div>
    </div>
  </div>
</footer>

    <?= $js ; ?>
</body>
</html>