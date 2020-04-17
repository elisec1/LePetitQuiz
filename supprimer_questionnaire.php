<?php session_start(); ?>
<doctype html>

    <?php require_once "fonctions/head.php"; ?>
    

    <body>
        <?php require_once "fonctions/header.php"; ?>

          <?php
          require_once "fonctions/fonctions.php";
          echo '<form method="POST" action="traitement_supprimer_questionnaire.php">';

          echo '<div class="container">';
          require ("bdd/connect.php");
          echo " <h2>Selectionner un numéro de questionnaire : </h2>";

          $MaRequete = "SELECT * FROM QUESTIONNAIRE Order By N_questionnaire";
          $MaLigne = $BDD -> query ($MaRequete);
          echo '<select class="custom-select custom-select-lg mb-3" name = "QUESTIONNAIRE" >';
          echo '<option selected> -- Choisir un item -- </option>';
          while ($Tuple = $MaLigne -> fetch())
          {
              echo "<option value=".$Tuple['N_questionnaire'].">".$Tuple['N_questionnaire']."</option>";
          }
          echo "</select>";
          echo '</div>';

          echo '<div class= "container">';
          echo '<input type = "Submit" class="btn btn-success" value ="Valider">';
          echo '</div>';
          echo '</form>';
          ?>
        
        
        <?php require_once "fonctions/footer.php"; ?>
        <?php require_once "fonctions/script.php"; ?>
    </body>
    
</doctype>