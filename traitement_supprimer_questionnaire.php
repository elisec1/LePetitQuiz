<?php session_start(); ?>
<doctype html>

    
    <?php require_once "fonctions/head.php"; ?>
    

    <body>
        <?php require_once "fonctions/header.php"; ?>

          <?php
          require_once "fonctions/fonctions.php";
          require_once "bdd/connect.php";
          $N_questionnaire = $_POST['QUESTIONNAIRE'];

          $MaRequete = "DELETE FROM QUESTIONNAIRE WHERE N_questionnaire = '$N_questionnaire'";
          $MaLigne = $BDD -> query ($MaRequete);

          echo '<div class = "container"><div class="alert alert-success" role="alert"> ravo ! Votre questionnaire a été supprimé </div></div>';

          ?>
        
        
        <?php require_once "fonctions/footer.php"; ?>
        <?php require_once "fonctions/script.php"; ?>
    </body>
    
</doctype>