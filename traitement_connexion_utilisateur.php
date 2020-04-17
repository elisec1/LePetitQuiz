<?php session_start();
	  require "bdd/connect.php";
      require "fonctions/fonctions.php";
      
      
	  
    if (empty($_POST["login"]) OR empty($_POST["password"])) 
    {
        require_once "fonctions/head.php";
      require_once "fonctions/header.php";
        print '<div class = "container"><div class="alert alert-danger" role="alert"> Veuillez saisir toutes les informations demandées </div></div>';
        echo '<div class="container"><div class="button_inscription"><a href="connexion_utilisateur.php" class="btn btn-secondary btn-lg m-*-auto">Réessayer</a></div></div>';
    }
    else
    {
        $login = $_POST['login'];
        $password = $_POST['password'];
        
        $MaRequete = "SELECT COUNT(*) FROM UTILISATEUR WHERE Pseudo_utilisateur='$login' and Mdp_utilisateur='$password'";
        $MaLigne = $BDD -> query ($MaRequete); 
        $NbCompteExistant = $MaLigne -> fetch ();
        
        //echo $NbCompteExistant[0];
        
        if ($NbCompteExistant[0] == 1) 
        {
            $_SESSION["login"] = $login;
            redirect("index.php");
        }
        else 
        {
            require_once "fonctions/head.php";
      require_once "fonctions/header.php";
        $error = "Utilisateur ou mot de passe non reconnu";
        echo '</br>';
        echo '<div class = "container"><div class="alert alert-danger" role="alert"> Utilisateur ou mot de passe non reconnu </div></div>';
        echo '<div class="container"><div class="button_inscription"><a href="connexion_utilisateur.php" class="btn btn-secondary btn-lg m-*-auto">Réessayer</a></div></div>';
        }
    }
	  
	  ?>
	  
	  <?php require_once "fonctions/footer.php"; ?>

    	<?php require_once "fonctions/script.php"; ?>