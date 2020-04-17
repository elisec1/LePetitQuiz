<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="index.php">LePetitQuiz</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Accueil <span class="sr-only"></span></a>
      </li>
      <?php
      require "fonctions/fonctions_connexion.php";
      if (EstConnecte() == true )
      {
        echo '<li class="nav-item active">
        <a class="nav-link" href="categorie.php">Catégories<span class="sr-only"></span></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">View more
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="alcool.php">Alcool</a>
          <a class="dropdown-item" href="drogues.php">Drogues</a>
          <a class="dropdown-item" href="sexe.php">Sexe</a>
          <a class="dropdown-item" href="prevention.php">Prévention routière</a>

          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="aleatoire.php">Quiz aléatoire</a>
        </div>
      </li></ul>';
        echo '<ul class="navbar-nav ml-auto"><li class="nav-item active "><a class="nav-link" href="user.php">Bonjour '.$_SESSION["login"].'<span class="sr-only"></span></a></li>';
        echo '<li class="nav-item"><a class="nav-link js-scroll-trigger" href="deconnexion.php">Se déconnecter</a></li></ul>';
      }
      else if (AdminConnecte()==true)
      {
        echo '<li class="nav-item active">
        <a class="nav-link" href="categorie.php">Catégories<span class="sr-only"></span></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">View more
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="alcool.php">Alcool</a>
          <a class="dropdown-item" href="drogues.php">Drogues</a>
          <a class="dropdown-item" href="sexe.php">Sexe</a>
          <a class="dropdown-item" href="prevention.php">Prévention routière</a>

          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="aleatoire.php">Quiz aléatoire</a>
        </div>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="admin.php">Espace Administrateur<span class="sr-only"></span></a>
      </li></ul>';
        echo '<ul class="navbar-nav ml-auto"><li class="nav-item active "><a class="nav-link" href="admin.php">Bonjour '.$_SESSION["login_admin"].'<span class="sr-only"></span></a></li>';
        echo '<li class="nav-item"><a class="nav-link js-scroll-trigger" href="deconnexion.php">Se déconnecter</a></li></ul>';
      }
      else
      {
        echo '</ul><ul class="navbar-nav ml-auto">';
        echo '<li class="nav-item active"><a class="nav-link" href="inscription.php">Inscription<span class="sr-only"></span></a></li>';
        echo '<li class="nav-item active"><a class="nav-link" href="connexion_utilisateur.php">Connexion<span class="sr-only"></span></a></li>';
        echo '</ul>';
      }
      ?>

    </ul>

    
  </div>
</nav>