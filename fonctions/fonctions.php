<?php
function AfficherListe ($PTABLE, $PCODE, $PlIBELLE)
{
    require ("bdd/connect.php");
    echo " <h2>Selectionner un(e) $PTABLE : </h2>";

    $MaRequete = "SELECT * FROM $PTABLE Order By $PCODE";
    $MaLigne = $BDD -> query ($MaRequete);
    echo '<select class="custom-select custom-select-lg mb-3" name = "'.$PTABLE.'" >';
    echo '<option selected> -- Choisir un item -- </option>';
    while ($Tuple = $MaLigne -> fetch())
    {
        echo "<option value='$Tuple[$PCODE]'>$Tuple[$PlIBELLE]</option>";
    }
    echo "</select>";
}

function AjouterQuestionnaire ($NBQUESTION,$CATEGORIE,$NIVEAU)
{
    require ("bdd/connect.php");

    $MaRequeteN_questionnaire = "SELECT N_questionnaire FROM QUESTIONNAIRE WHERE N_questionnaire = (SELECT MAX(N_questionnaire) FROM QUESTIONNAIRE)";
    $resultat = $BDD -> query ($MaRequeteN_questionnaire);
    $TabRetour = $resultat-> fetch();

    $NumLastQuestionnaire = $TabRetour[0];
    $nvNumQuestionnaire = $NumLastQuestionnaire + 1;

    $MaRequeteQuestionnaire = "INSERT INTO QUESTIONNAIRE VALUES ('$nvNumQuestionnaire','$NBQUESTION','0','1','$NIVEAU','$CATEGORIE')";
    $MaLigne = $BDD -> query ($MaRequeteQuestionnaire);

    return $nvNumQuestionnaire;
}


function AjouterQuestion ($QUESTION,$CATEGORIE,$NIVEAU)
{
    require ("bdd/connect.php");

    $MaRequeteN_question = "SELECT N_question FROM QUESTIONS WHERE N_question = (SELECT MAX(N_question) FROM QUESTIONS)";
    $resultat = $BDD -> query ($MaRequeteN_question);
    $TabRetour = $resultat-> fetch();

    $NumLastQuestion = $TabRetour[0];
    $nvNumQuestion = $NumLastQuestion + 1;

    $MaRequeteQuestion = "INSERT INTO QUESTIONS VALUES ('$nvNumQuestion','$QUESTION','$CATEGORIE','$NIVEAU')";
    $MaLigne = $BDD -> query ($MaRequeteQuestion);

    return $nvNumQuestion;
}

function AjouterReponse ($REPONSE,$STATUT,$N_QUESTION)
{
    require ("bdd/connect.php");

    $MaRequeteN_reponse = "SELECT N_reponse FROM REPONSES WHERE N_reponse = (SELECT MAX(N_reponse) FROM REPONSES)";
    $resultat = $BDD -> query ($MaRequeteN_reponse);
    $TabRetour = $resultat-> fetch();

    $NumLastReponse = $TabRetour[0];
    $nvNumReponse = $NumLastReponse + 1;

    $MaRequeteReponse = "INSERT INTO REPONSES VALUES ('$nvNumReponse','$REPONSE','$STATUT','$N_QUESTION')";
    $MaLigne = $BDD -> query ($MaRequeteReponse);
}

function ModifCompose ($N_QUESTION,$N_QUESTIONNAIRE)
{
    require ("bdd/connect.php");
    $MaRequeteCompose = "INSERT INTO COMPOSE VALUES ('$N_QUESTION','$N_QUESTIONNAIRE')";
    $MaLigne = $BDD -> query ($MaRequeteCompose);
}

function redirect($url) 
{
    header("Location: $url");
}