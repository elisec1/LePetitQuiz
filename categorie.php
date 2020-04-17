<?php 
session_start();
require_once "fonctions/head.php";
        require_once "fonctions/header.php"; ?>
        <br/>
        <div class="container">
            <h3>Catégories</h3>
        </div>
        
        

		<div class="container">
        <div class="row">

            <div class="col-sm-3">
                <div class="card">
                  <img src="photos/Alcool3.jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Alcool</h5>
                    <p class="card-text">Boissons régulières, occasionnelles, alcoolémie,... Apprenez tout sur la consommation et les conséquence de l'alcool.</p>
                    <a href="alcool.php" class="btn btn-primary">Cliquer ici</a>
                  </div>
                </div>
            </div>

            <div class="col-sm-3">
                <div class="card" >
                  <img src="photos/Drogue3.jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Drogues</h5>
                    <p class="card-text">Découvrez la réalité sur la consommation de drogues et son accoutumance. Apprenez à faire les bons choix.</p>
                    <a href="drogues.php" class="btn btn-primary">Cliquer ici</a>
                  </div>
                </div>
            </div>

            <div class="col-sm-3">
                <div class="card">
                  <img src="photos/sexuality3.jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Sexualité</h5>
                    <p class="card-text">Orientations sexuelles, identités de genre, protection, fantasmes,... Vivez en liberté votre intimité.</p>
                    <a href="sexe.php" class="btn btn-primary">Cliquer ici</a>
                  </div>
                </div>
            </div>

            <div class="col-sm-3">
                <div class="card">
                  <img src="photos/Prevention_routiere1.jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Prévention routière</h5>
                    <p class="card-text">Tout apprendre sur les dangers de la route et ses usagers. Assurez sécurité pour soi-même mais aussi pour les autres.</p>
                    <a href="prevention.php" class="btn btn-primary">Cliquer ici</a>
                  </div>
                </div>
            </div>

        </div>
        </div>

        <div class="container">
            <div class="button_aleatoire"><a href="aleatoire.php" class="btn btn-primary btn-lg m-*-auto">Aléatoire ?</a></div>
        </div>

    	<?php require_once "fonctions/footer.php"; ?>
    	<?php require_once "fonctions/script.php"; ?>