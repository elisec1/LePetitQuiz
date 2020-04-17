<?php session_start(); ?>
<html>
	<?php require_once "fonctions/head.php"; ?>
<body>
	  <?php require_once "fonctions/header.php"; ?>

	  <?php
	  require "bdd/connect.php";
	  require "fonctions/fonctions.php";

	  $nbQuestion = $_POST['nbQuestion'];
	  $niveau = $_POST ['niveau'];
	  $categorie = $_POST ['categorie'];

	  
	  $NvxNumQuestionnaire = AjouterQuestionnaire ($nbQuestion,$categorie,$niveau);

	  if ($niveau == 1)
	  {
	  	for ($i=1; $i<=$nbQuestion;$i++)
	  	{
	  	    require "fonctions/fonctions.php";
	  		$question = $_POST['question'.$i];
	  		$reponse1 = $_POST['reponse1'.$i];
	  		$reponse2 = $_POST['reponse2'.$i];
	  		$statutreponse1 = $_POST['statut1'.$i];
	  		$statutreponse2 = $_POST['statut2'.$i];

	  		$NvxNumQuestion = AjouterQuestion ($question,$categorie,$niveau);
	  		AjouterReponse ($reponse1,$statutreponse1,$NvxNumQuestion);
	  		AjouterReponse ($reponse2,$statutreponse2,$NvxNumQuestion);
	  		ModifCompose ($NvxNumQuestion,$NvxNumQuestionnaire);
	  	}
	  }

	  if ($niveau == 2)
	  {
	  	for ($i=1; $i<=$nbQuestion;$i++)
	  	{
	  	    require "fonctions/fonctions.php";
	  		$question = $_POST['question'.$i];
	  		$reponse1 = $_POST['reponse1'.$i];
	  		$reponse2 = $_POST['reponse2'.$i];
	  		$reponse3 = $_POST['reponse3'.$i];
	  		$reponse4 = $_POST['reponse4'.$i];
	  		$statutreponse1 = $_POST['statut1'.$i];
	  		$statutreponse2 = $_POST['statut2'.$i];
	  		$statutreponse3 = $_POST['statut3'.$i];
	  		$statutreponse4 = $_POST['statut4'.$i];

	  		$NvxNumQuestion = AjouterQuestion ($question,$categorie,$niveau);
	  		AjouterReponse ($reponse1,$statutreponse1,$NvxNumQuestion);
	  		AjouterReponse ($reponse2,$statutreponse2,$NvxNumQuestion);
	  		AjouterReponse ($reponse3,$statutreponse3,$NvxNumQuestion);
	  		AjouterReponse ($reponse4,$statutreponse4,$NvxNumQuestion);
	  		ModifCompose ($NvxNumQuestion,$NvxNumQuestionnaire);
	  	}
	  }

	  if ($niveau == 3)
	  {
	  	for ($i=1; $i<=$nbQuestion;$i++)
	  	{
	  	    require "fonctions/fonctions.php";
	  		$question = $_POST['question'.$i];
	  		$reponse = $_POST['reponse'.$i];

	  		echo $question;
	  		echo $reponse;

	  		$NvxNumQuestion = AjouterQuestion ($question,$categorie,$niveau);
	  		AjouterReponse ($reponse,'V',$NvxNumQuestion);
	  		ModifCompose ($NvxNumQuestion,$NvxNumQuestionnaire);
	  	}
	  }
	
	  echo '<div id="container">Bravo ! Votre questionnaire a été enregistré </div>';
	?>

</body>
</html>