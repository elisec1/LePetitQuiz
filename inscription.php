<doctype html>

  <?php require_once "fonctions/head.php"; ?>
  <link href="css/style_login-up.css" rel="stylesheet">
  
  <body>
      <?php require_once "fonctions/header.php"; ?>
      
      


<div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->

    <!-- Icon -->
    <div class="fadeIn first">
      <img src="photos/login.png" id="icon" alt="User Icon" />
    </div>

    <!-- Login Form -->
    <form method="POST" action="traitement_inscription.php">
      <input type="text" id="prenom" class="fadeIn second" name="prenom" placeholder="Prénom">
      <input type="text" id="nom" class="fadeIn second" name="nom" placeholder="Nom">
      <input type="text" id="login" class="fadeIn second" name="login" placeholder="Pseudo">
      <input type="text" id="email" class="fadeIn third" name="email" placeholder="E-mail">
      <input type="password" id="password" class="fadeIn third" name="password" placeholder="Mot de passe">
      <input type="password" id="verif_password" class="fadeIn third" name="verif_password" placeholder="Vérification mot de passe">
      <input type="submit" class="fadeIn fourth" value="S'inscrire">
      <div id="dejaInscrit">
          Vous êtes déjà inscrit.e ?
        <a class="underlineHover" href="connexion_utilisateur.php">  Connectez-vous</a>
    </div>
    </form>
    

    <!-- Remind Password -->
    <div id="formFooter">
      <a class="underlineHover" href="#">Mot de passe oublié ?</a>
    </div>

  </div>
</div>

      <?php require_once "fonctions/footer.php"; ?>
      <?php require_once "fonctions/script.php"; ?>
  </body>
  
</doctype>
