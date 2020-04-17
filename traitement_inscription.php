<?php session_start(); 
	  require "bdd/connect.php";
	  require "fonctions/fonctions.php";
	  
	  $prenom = $_POST['prenom'];
	  $nom = $_POST['nom'];
	  $login = $_POST['login'];
	  $email = $_POST['email'];
	  $password = $_POST['password'];
	  $verif = $_POST['verif_password'];
	  
	  if(empty($_POST['prenom']) or empty($_POST['login']) or empty($_POST['password']) or empty($_POST['nom']))
	  {
	  	print '<div class = "container"><div class="alert alert-danger" role="alert"> Veuillez saisir toutes les informations demandées </div></div>';
	  	echo '<div class="container"><div class="button_inscription"><a href="inscription.php" class="btn btn-secondary btn-lg m-*-auto">Réessayer ? </a></div></div>';
	  }
	  
	  
	  if($verif != $password)
	  {
	  	print '<div class = "container"><div class="alert alert-danger" role="alert"> Mot de passe non identiques </div></div>';
		echo '<div class="container"><div class="button_inscription"><a href="inscription.php" class="btn btn-secondary btn-lg m-*-auto">Réessayer ? </a></div></div>';
		}
	 
	  
	  
	  $MaRequeteVerif = "SELECT count(*) FROM UTILISATEUR WHERE Pseudo_utilisateur = '$login'";
	  $VerifPseudo = $BDD -> query($MaRequeteVerif);
	  $PseudoExist = $VerifPseudo -> fetchAll();
	  
	  if($PseudoExist[0][0] == 1)
	  {
	      echo '<div class = "container"><div class="alert alert-danger" role="alert"> Utilisateur déjà existant </div></div>';
	      echo '<div class="container"><div class="button_inscription"><a href="inscription.php" class="btn btn-secondary btn-lg m-*-auto">Réessayer ? </a></div></div>';
	  }
	  else
	  {
	    	$MaRequeteInscription = "INSERT INTO UTILISATEUR (Nom_utilisateur,Prenom_utilisateur,Pseudo_utilisateur,Mdp_utilisateur,Email_utilisateur) VALUES ('$nom','$prenom','$login','$password','$email')";
	  		$MaLigne = $BDD -> query ($MaRequeteInscription);
	  		$_SESSION["login"] = $login;
	  		redirect("index.php");

	  }
	  
	  ?>

	</div>
	  
	  <?php require_once "fonctions/footer.php"; ?>

    	<?php require_once "fonctions/script.php"; ?>
</body>
</html>