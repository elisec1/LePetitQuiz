<?php session_start();
require_once "fonctions/head.php";
require_once "fonctions/header.php"; ?>

        <div class="container">
        <h1> Que voulez-vous faire aujourd'hui ?</h1>
        </div>

        <div class="container"> 
        <div class="button_aleatoire"><a href="ajout_questionnaire.php" class="btn btn-primary btn-lg m-*-auto">Ajouter un questionnaire</a></div>
        </div>
        <!--<div class="container">
        <div class="button_aleatoire"><a href="modifier_questionnaire.php" class="btn btn-primary btn-lg m-*-auto">Modifier un questionnaire</a></div>
        </div> -->
        <div class="container">
        <div class="button_aleatoire"><a href="supprimer_questionnaire.php" class="btn btn-primary btn-lg m-*-auto">Supprimer un questionnaire</a></div>
        </div>

        <div class="container"> 
        <div class="button_aleatoire"><a href="deconnexion.php" class="btn btn-primary btn-lg m-*-auto">Se déconnecter</a></div>
        </div>
        

        <?php require_once "fonctions/footer.php"; ?>
        <?php require_once "fonctions/script.php"; ?>