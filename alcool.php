<?php session_start(); ?>
<doctype html>
    <?php require_once "fonctions/head.php"; ?>
    <link href="css/style-accueil.css" rel="stylesheet">
    

    <body>
        <?php require_once "fonctions/header.php"; ?>

        <div class="container">
        <h1>Vous avez choisi la catégorie Alcool </h1>
        </div>

        <?php 
        $categorie = 1;
        require_once "choix_questionnaire.php";
        ?>
        

        <?php require_once "fonctions/footer.php"; ?>
        <?php require_once "fonctions/script.php"; ?>
    </body>
    
</doctype>