<?php session_start(); ?>
<doctype html>

    <?php require_once "fonctions/head.php"; ?>
    

    <body>
        <?php require_once "fonctions/header.php"; ?>

          <?php
          require_once "fonctions/fonctions.php";
          echo '<form method="POST" action="traitement_saisie_questions.php">';

          echo '<div class="container">';
          AfficherListe('NIVEAU','N_niveau','Lib_niveau');
          AfficherListe('CATEGORIE','N_categorie','Lib_categorie');
          echo '<h2>Indiquez le nombre de questions : </h2>';
          echo '<input type="number" id="Nombre de questions" name="nbQuestion" min="1" max="20">';

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