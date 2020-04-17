<?php  session_start(); 
	require_once "fonctions/head.php";?>
	<html>
	<link href="css/style.css" rel="stylesheet">
<body>
	<?php require_once "fonctions/header.php"; ?>

	<div class="container">

	<?php
	  require "bdd/connect.php";

	  $categorie = $_POST['categorie'];
	  $niveau = $_POST['NIVEAU'];

	  $MaRequete1 = "SELECT N_questionnaire FROM `QUESTIONNAIRE` WHERE N_niveau='$niveau' AND N_categorie='$categorie'" ;
	  $EnsembleNumerosQuestionnaires = $BDD -> query ($MaRequete1);
	  $TabNumerosQuestionnaire = $EnsembleNumerosQuestionnaires -> fetchAll();
	  $N_questionnaire_choisi = $TabNumerosQuestionnaire [array_rand($TabNumerosQuestionnaire)] ['N_questionnaire']; //choisi une case aléatoire de Tab Numeros Questionnaires et prend la valeur de Tab au rang aléatoire
	  
	  $MaRequete2 = "SELECT * FROM QUESTIONNAIRE, QUESTIONS, REPONSES, COMPOSE 
	  WHERE COMPOSE.N_questionnaire = QUESTIONNAIRE.N_questionnaire
	  AND COMPOSE.N_question = QUESTIONS.N_question
	  AND REPONSES.N_question = QUESTIONS.N_question
	  AND QUESTIONNAIRE.N_niveau ='$niveau' 
	  AND QUESTIONNAIRE.N_categorie = '$categorie'
	  AND QUESTIONNAIRE.N_questionnaire = '$N_questionnaire_choisi' ";
	  $MaLigne2 = $BDD -> query ($MaRequete2);
	  $TabReponseRequete2 = $MaLigne2 -> fetchAll ();

	  // Traitement du form
		echo '<form action="traitement_resultats_questionnaire.php" method="POST">';
		echo "<fieldset>";
		echo "<legend>Questionnaire</legend>";

	  if ($niveau == 1)
	  {
		//initialisation
		echo '<div class = question>';
		$id_question = $TabReponseRequete2 [0] ['N_question'];
		echo "<br/>".$TabReponseRequete2[0]['Lib_question'];
		echo '<br/> <input type="radio" name="'.$TabReponseRequete2[0]['N_question'].'" id="radio" value = "'.$TabReponseRequete2[0]['N_reponse'].'" checked> <label for="radio">'.$TabReponseRequete2[0]['Lib_reponse'].'</label>';
		  
		  //boucle
		for ($i = 1; $i < count($TabReponseRequete2); $i++)
		{
		  	if ($TabReponseRequete2[$i]['N_question'] != $id_question)
		  	{
				echo '</div>';
				echo '<div class = "question">';
		  		echo '<br/>'.$TabReponseRequete2[$i]['Lib_question'];
		  		echo '<br/> <input type="radio" name="'.$TabReponseRequete2[$i]['N_question'].'" id="radio" value = "'.$TabReponseRequete2[$i]['N_reponse'].'" checked> <label for="radio">'.$TabReponseRequete2[$i]['Lib_reponse'].'</label>';
		  	}
		  	else
		  	{
		  		echo '<br/> <input type="radio" name="'.$TabReponseRequete2[$i]['N_question'].'" id="radio" value = "'.$TabReponseRequete2[$i]['N_reponse'].'"> <label for="radio">'.$TabReponseRequete2[$i]['Lib_reponse'].'</label>';
		  	}
		  	$id_question = $TabReponseRequete2 [$i] ['N_question'] ;
		}
		echo '</div>';
	  }
	  
	  if ($niveau == 2)
	  {
		//initialisation
		echo '<div class = question>';
		$id_question = $TabReponseRequete2 [0] ['N_question'];
		echo "<br/>".$TabReponseRequete2[0]['Lib_question'];
		echo '<br/> <input type="checkbox" name="'.$TabReponseRequete2[0]['N_question'].'[]" id="checkbox" value = "'.$TabReponseRequete2[0]['N_reponse'].'"> <label for="checkbox">'.$TabReponseRequete2[0]['Lib_reponse'].'</label>';
		  //boucle
		for ($i = 1; $i < count($TabReponseRequete2); $i++)
		{
		  	if ($TabReponseRequete2[$i]['N_question'] != $id_question)
		  	{
		  		echo '</div>';
				echo '<div class = "question">';
		  		echo '<br/>'.$TabReponseRequete2[$i]['Lib_question'];
		  		echo '<br/> <input type="checkbox" name="'.$TabReponseRequete2[$i]['N_question'].'[]" id="checkbox" value = "'.$TabReponseRequete2[$i]['N_reponse'].'"> <label for="checkbox">'.$TabReponseRequete2[$i]['Lib_reponse'].'</label>';
		  	}
		  	else
		  	{
		  		echo '<br/> <input type="checkbox" name="'.$TabReponseRequete2[$i]['N_question'].'[]" id="checkbox" value = "'.$TabReponseRequete2[$i]['N_reponse'].'"> <label for="checkbox">'.$TabReponseRequete2[$i]['Lib_reponse'].'</label>';
		  	}
		  	$id_question = $TabReponseRequete2 [$i] ['N_question'] ;
		}
		echo '</div>';
	  }

	  if ($niveau == 3)
	  {
	  	for ($i = 0; $i < count($TabReponseRequete2); $i++)
		{
			echo '<div class = question>';
		  	echo '<br/>'.$TabReponseRequete2[$i]['Lib_question'];
		  	echo '<br/> <input type="text" name="'.$TabReponseRequete2[$i]['N_question'].'" id="text" > <label for="text"></label>';
		  	echo '</div';
		}
	  }
	  

	  	echo '<div class="container">';
		echo '<input type = "Submit" class="btn btn-success" value = "Soumettre"> </div>'; 
		
		echo '<input id="nQuestionnaire" name="nQuestionnaire" type="hidden" value = "'.$N_questionnaire_choisi.'">';
		echo '<input id="niveau" name="niveau" type="hidden" value = "'.$niveau.'">';

		echo '<input type="hidden" id="nbQuestions" name="nbQuestions" value = "'.$TabReponseRequete2[0]['Nb_question'].'">';
		echo "</fieldset></form>";

		echo "</div>";


	 
	?>     

	</div>

	<?php require_once "fonctions/footer.php"; ?>

    	<?php require_once "fonctions/script.php"; ?>

</body>
</html>