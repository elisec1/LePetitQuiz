<?php session_start(); ?>
<doctype html>

    
    <?php require_once "fonctions/head.php"; ?>
    

    <body>
        <?php require_once "fonctions/header.php"; ?>

        <div class="container">
            <?php 
            $nbQuestion = $_POST['nbQuestion'];
            $niveau = $_POST['NIVEAU'];
            $categorie = $_POST['CATEGORIE'];

            echo '<form method="POST" action="traitement_ajout_questions.php">';

            if ($niveau == 1)
            {
                for ($i=1;$i<=$nbQuestion;$i++)
                {
                    echo '<div class= "container">';

                    echo '<div class="form-group">';
                    echo '<label for="question'.$i.'">Question : </label>';
                    echo '<input type="text" class="form-control form-control-lg" id="question'.$i.'" name="question'.$i.'" rows="3" >';
                    echo '</div>';

                    echo '</div>';
                    echo '<div class= "container">';

                    echo '<div class="form-group">';
                    echo '<label for="reponse1'.$i.'">Réponse 1 : </label>';
                    echo '<input type="text" class="form-control form-control-lg" id="reponse1'.$i.'" name="reponse1'.$i.'" rows="3">';
                    echo '</div>';

                    echo '<div class="form-group">';
                    echo '<label for="statut1'.$i.'">Statut de la réponse 1 : </label>';
                    echo '<input type="text" class="form-control form-control-lg" id="statut1'.$i.'" name="statut1'.$i.'" >';
                    echo '</div>';

                    echo '<div class="form-group">';
                    echo '<label for="reponse2'.$i.'">Réponse 2 : </label>';
                    echo '<input type="text" class="form-control form-control-lg" id="reponse2'.$i.'" name="reponse2'.$i.'" >';
                    echo '</div>';

                    echo '<div class="form-group">';
                    echo '<label for="statut2'.$i.'">Statut de la réponse 2: </label>';
                    echo '<input type="text" class="form-control form-control-lg" id="statut2'.$i.'" name="statut2'.$i.'" >';
                    echo '</div>';

                    echo '</div>';
                }
            }

            if ($niveau == 2)
            {
              for ($i=1;$i<=$nbQuestion;$i++)
                {
                    echo '<div class= "container">';

                    echo '<div class="form-group">';
                    echo '<label for="question'.$i.'">Question : </label>';
                    echo '<input type="text" class="form-control form-control-lg" id="question'.$i.'" name="question'.$i.'" >';
                    echo '</div>';

                    echo '</div>';
                    echo '<div class= "container">';

                    echo '<div class="form-group">';
                    echo '<label for="reponse1'.$i.'">Réponse 1 : </label>';
                    echo '<input type="text" class="form-control form-control-lg" id="reponse1'.$i.'" name="reponse1'.$i.'">';
                    echo '</div>';

                    echo '<div class="form-group">';
                    echo '<label for="statut1'.$i.'">Statut de la réponse 1 : </label>';
                    echo '<input type="text" class="form-control form-control-lg" id="statut1'.$i.'" name="statut1'.$i.'" >';
                    echo '</div>';

                    echo '<div class="form-group">';
                    echo '<label for="reponse2'.$i.'">Réponse 2 : </label>';
                    echo '<input type="text" class="form-control form-control-lg" id="reponse2'.$i.'" name="reponse2'.$i.'" >';
                    echo '</div>';

                    echo '<div class="form-group">';
                    echo '<label for="statut2'.$i.'">Statut de la réponse 2: </label>';
                    echo '<input type="text" class="form-control form-control-lg" id="statut2'.$i.'" name="statut2'.$i.'" >';
                    echo '</div>';

                    echo '<div class="form-group">';
                    echo '<label for="reponse3'.$i.'">Réponse 3 : </label>';
                    echo '<input type="text" class="form-control form-control-lg" id="reponse3'.$i.'" name="reponse3'.$i.'" >';
                    echo '</div>';

                    echo '<div class="form-group">';
                    echo '<label for="statut3'.$i.'">Statut de la réponse 3: </label>';
                    echo '<input type="text" class="form-control form-control-lg" id="statut3'.$i.'" name="statut3'.$i.'" >';
                    echo '</div>';

                    echo '<div class="form-group">';
                    echo '<label for="reponse4'.$i.'">Réponse 4 : </label>';
                    echo '<input type="text" class="form-control form-control-lg" id="reponse4'.$i.'" name="reponse4'.$i.'" >';
                    echo '</div>';

                    echo '<div class="form-group">';
                    echo '<label for="statut4'.$i.'">Statut de la réponse 4: </label>';
                    echo '<input type="text" class="form-control form-control-lg" id="statut4'.$i.'" name="statut4'.$i.'" >';
                    echo '</div>';

                     echo '</div>';
                }  
            }

            if ($niveau == 3)
            {

                for ($i=1;$i<=$nbQuestion;$i++)
                {
                    echo '<div class = "container">';

                    echo '<div class="form-group">';
                    echo '<label for="question'.$i.'">Question : </label>';
                    echo '<input type="text" class="form-control form-control-lg" id="question'.$i.'" name="question'.$i.'" rows="3" >';
                    echo '</div>';

                    echo '</div>';
                    echo '<div class= "container">';

                    echo '<div class="form-group">';
                    echo '<label for="reponse'.$i.'">Réponse : </label>';
                    echo '<input type="text" class="form-control form-control-lg" id="reponse'.$i.'" name="reponse'.$i.'" rows="3">';
                    echo '</div>';

                    echo '</div>';

                }
            }

            echo '<div class= "container">';
            echo '<input type = "Submit" class="btn btn-success" value ="Valider">';
            echo'<input id="categorie" name="categorie" type="hidden" value = "'.$categorie.'">';
            echo'<input id="niveau" name="niveau" type="hidden" value = "'.$niveau.'">';
            echo'<input id="nbQuestion" name="nbQuestion" type="hidden" value = "'.$nbQuestion.'">';
            echo '</div>';
            ?>
        </form>
            

        </div>
        <?php require_once "fonctions/footer.php"; ?>
        <?php require_once "fonctions/script.php"; ?>
    </body>
    
</doctype>