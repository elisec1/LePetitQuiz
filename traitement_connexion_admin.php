<?php session_start();
      require "bdd/connect.php";
      require "fonctions/fonctions.php";
      
      
    if (empty($_POST["login_admin"]) OR empty($_POST["password"])) 
    {
        require_once "fonctions/head.php";
      require_once "fonctions/header.php";
        print '</br>';
        print '<div class = "container"><div class="alert alert-danger" role="alert"> Veuillez saisir toutes les informations demandées </div></div>';
        echo '<div class="container"><div class="button_inscription"><a href="connexion_admin.php" class="btn btn-secondary btn-lg m-*-auto">Réessayer</a></div></div>';
    }
    else
    {
        $login = $_POST['login_admin'];
        $password = $_POST['password'];
        
        $MaRequete = "SELECT COUNT(*) FROM ADMINISTRATEUR WHERE Pseudo_admin='$login' and Mdp_admin='$password'";
        $MaLigne = $BDD -> query ($MaRequete); 
        $NbCompteExistant = $MaLigne -> fetch ();

        if ($NbCompteExistant[0] == 1) 
        {
            $_SESSION['login_admin'] = $login;
            redirect("admin.php");
        }
        else 
        {
        $error = "Utilisateur ou mot de passe non reconnu";
        require_once "fonctions/head.php";
      require_once "fonctions/header.php";
        print '</br>';
        echo '<div class = "container"><div class="alert alert-danger" role="alert"> Utilisateur ou mot de passe non reconnu </div></div>';
        echo '<div class="container"><div class="button_inscription"><a href="connexion_admin.php" class="btn btn-secondary btn-lg m-*-auto">Réessayer</a></div></div>';
        }
    }
      
      ?>
      
      <?php require_once "fonctions/footer.php"; ?>

        <?php require_once "fonctions/script.php"; ?>