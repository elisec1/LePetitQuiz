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
      <img src="photos/logo-admin.png" id="icon" alt="User Icon" />
    </div>

    <!-- Login Form -->
    
    <form method="POST" action="traitement_connexion_admin.php">
      <input type="text" id="login_admin" class="fadeIn second" name="login_admin" placeholder="Pseudo">
      <input type="password" id="password" class="fadeIn third" name="password" placeholder="Mot de passe">
      <input type="submit" class="fadeIn fourth" value="Connectez-vous">
      <div id="dejaInscrit">
          Vous n'êtes pas inscrit.e ?
        <a class="underlineHover" href="inscription.php">  Inscrivez-vous</a>
    </div>
    <div id="admin">
          Vous n'êtes pas administrateur ?
        <a class="underlineHover" href="connexion_utilisateur.php">  Connectez-vous</a>
    </div>
    </form>

    <!-- Remind Passowrd -->
    <div id="formFooter">
      <a class="underlineHover" href="#">Mot de passe oublié ?</a>
    </div>

  </div>
</div>

      <?php require_once "fonctions/footer.php"; ?>
      <?php require_once "fonctions/script.php"; ?>
  </body>
  
</doctype>
