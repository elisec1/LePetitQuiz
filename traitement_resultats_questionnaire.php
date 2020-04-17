<?php session_start();
require_once "fonctions/head.php";
require_once "fonctions/header.php";
require "bdd/connect.php";
	?> 
	<div class="container">
	<?php
	
	$nQuestionnaire = $_POST ['nQuestionnaire'];
	$nbQuestions = $_POST['nbQuestions'];
	$niveau = $_POST['niveau'];
	
	$score_utilisateur = 0;
	$i=1;

	if ($niveau == 1)
	{
		foreach ($_POST as $key => $value)
		{
			if ($i<=$nbQuestions)
			{
				$MaRequete = "SELECT * FROM QUESTIONNAIRE, QUESTIONS, REPONSES, COMPOSE 
				WHERE COMPOSE.N_questionnaire = QUESTIONNAIRE.N_questionnaire
				AND COMPOSE.N_question = QUESTIONS.N_question
				AND REPONSES.N_question = QUESTIONS.N_question
				AND REPONSES.N_reponse ='$value'
				AND QUESTIONNAIRE.N_questionnaire = '$nQuestionnaire' ";
				$MaLigne = $BDD -> query ($MaRequete);
				$TabReponseRequete = $MaLigne -> fetchAll ();
                
				if ( $TabReponseRequete[0]['Statut_reponse'] == "V")
				{
					$score_utilisateur = $score_utilisateur + (100/$nbQuestions);
				}
				else
				{
					echo '<div class = "container"><div class="alert alert-danger" role="alert"> La réponse de la question '.$i.' est incorrecte  </div></div>';
				}

			$i++;
			}
		}
	}

	if ($niveau==2)
	{
		foreach ($_POST as $key => $value)
		{
			if ($i<=$nbQuestions)
			{
				$MaRequete = "SELECT * FROM QUESTIONNAIRE, QUESTIONS, REPONSES, COMPOSE 
				WHERE COMPOSE.N_questionnaire = QUESTIONNAIRE.N_questionnaire
				AND COMPOSE.N_question = QUESTIONS.N_question
				AND REPONSES.N_question = QUESTIONS.N_question
				AND QUESTIONS.N_question ='$key'
				AND QUESTIONNAIRE.N_questionnaire = '$nQuestionnaire' 
				AND REPONSES.Statut_reponse = 'V'
				ORDER BY REPONSES.N_reponse";
				$MaLigne = $BDD -> query ($MaRequete);
				$TabReponseRequete = $MaLigne -> fetchAll ();



				if (count($TabReponseRequete) == count($value))
				{
					for ($k = 0; $k< count($TabReponseRequete); $k++)
					{
						if ($TabReponseRequete[$k]['N_reponse'] == $value[$k])
						{
							$score_utilisateur = $score_utilisateur + (100/ $nbQuestions);
						}
						else
						{
							echo '<div class="alert alert-danger" role="alert"> La réponse de la question '.$i.' est incorrecte  </div>';
						}	
					}
				}
				else
				{
					echo '<div class="alert alert-danger" role="alert"> La réponse de la question '.$i.' est incorrecte  </div>';
				}

				$i++;
			}
		}
	}

	if ($niveau==3)
	{
		foreach ($_POST as $key => $value)
		{
			if ($i<=$nbQuestions)
			{
				$MaRequete = "SELECT * FROM QUESTIONNAIRE, QUESTIONS, REPONSES, COMPOSE 
				WHERE COMPOSE.N_questionnaire = QUESTIONNAIRE.N_questionnaire
				AND COMPOSE.N_question = QUESTIONS.N_question
				AND REPONSES.N_question = QUESTIONS.N_question
				AND QUESTIONNAIRE.N_questionnaire = '$nQuestionnaire' ";
				$MaLigne = $BDD -> query ($MaRequete);
				$TabReponseRequete = $MaLigne -> fetchAll ();

				if ( $value == $TabReponseRequete[0]['Lib_reponse'] )
				{
					$score_utilisateur = $score_utilisateur + (100/ $nbQuestions);
				}
				else
				{
					echo '<div class="alert alert-danger" role="alert"> La réponse de la question '.$i.' est incorrecte  </div>';
				}
				$i++;
			}
		}
	}
	
	echo '<div class = "container">';
	echo '<div class="alert alert-success" role="alert">';
  	echo'<h4 class="alert-heading">Resultats!</h4>';
  	echo"<p>Vous avez réussi à passer l'épreuve du questionnaire avec un score final de ".$score_utilisateur."%</p>";
  	echo '</div';

	

	$MaRequete2 = "SELECT * FROM QUESTIONNAIRE WHERE QUESTIONNAIRE.N_questionnaire = '$nQuestionnaire' ";
	$MaLigne2 = $BDD -> query ($MaRequete2);
	$TabReponseRequete2 = $MaLigne2 -> fetchAll ();

	echo '<div class = "container">';
	echo'<hr><p class="mb-0">Le score maximal de ce questionnaire est : '.$TabReponseRequete2[0]['Score_max_questionnaire'].'%</p></div>';
	echo '</div>';


	echo '<div class = "container">';
	if ( $score_utilisateur > $TabReponseRequete2[0]['Score_max_questionnaire'])
	{
		$MaRequete3 = "UPDATE QUESTIONNAIRE SET Score_max_questionnaire = '$score_utilisateur' WHERE N_questionnaire = '$nQuestionnaire' ";
		$MaLigne3 = $BDD->prepare($MaRequete3);

    	$MaLigne3->execute();

    	echo '<div class="alert alert-primary" role="alert"> Votre score est supérieur au record à ce jour. </br>Le nouveau record a été pris en compte </div>';
	}
	echo '</div>';
	?>

	<div class="container"><div class="button_inscription"><a href="categorie.php" class="btn btn-secondary btn-lg m-*-auto">Rejouer</a></div></div>

	</div>
	<?php require_once "fonctions/footer.php"; ?>
    <?php require_once "fonctions/script.php"; ?>