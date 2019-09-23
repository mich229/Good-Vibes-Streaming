<?php
require_once '../connexion.php';
require_once '../functions/functions.php';

//print_r($_POST); die;

$tab_retour = array();

if(isset($_POST['action']) && !empty($_POST['action'])) {

    $action = $_POST['action'];

    switch ($action) {
        case "ajout" :

            $tab_retour = array();

            if(($_POST['conf-password']) !== ($_POST['password'])) {
                $tab_retour['type'] = "warning";
                $tab_retour['message'] = "Mot de passe incorrect";
                echo json_encode($tab_retour);
                die;
            }

            //===== Etape 1 : Inscription d'un utilisateur
            $insertion_query1 = "INSERT INTO utilisateur (pseudo, datenais, sexe, ville, password) VALUES (:pseudo, :datenais, :sexe, :ville, :password)";

            $password =  password_hash($_POST['password'], PASSWORD_DEFAULT);

            $insertion_exec = $connect -> prepare($insertion_query1)
                -> execute(array(
                    ":pseudo" => $_POST["pseudo"],
                    ":datenais" => $_POST["datenais"],
                    ":sexe" => $_POST["sexe"],
                    ":ville" => $_POST["ville"],
                    ":password" => $password
                ));

            $id_user = $connect -> lastInsertId();


            //On met les infos en session
            if(user_session($connect,$id_user)) {
                $tab_retour['type'] = "success";
                $tab_retour['message'] = "Inscription OK";
            }

            else {
                $tab_retour['type'] = "error";
                $tab_retour['message'] = "Une erreur est survenue lors de la création de votre compte ! Veuillez réessayer";
            }

            echo json_encode($tab_retour);
            break;

        case "modifier" :
            $tab_retour = array();

            //===== Etape 3 : Modification d'un utilisateur dans la base
            $update_query = "UPDATE utilisateur SET pseudo = :pseudo,
                                               datenais = :datenais,
                                               ville = :ville
                             WHERE id_user = :id_user";

            $update_exec = $la_connexion -> prepare($update_query)
                -> execute(array(
                    ":pseudo" => $_POST["recipient-pseudo"],
                    ":datenais" => $_POST["recipient-datenais"],
                    ":ville" => $_POST["recipient-ville"],
                    ":id_user" => $_POST["id_user"]
                ));
            if($update_exec) {
                $tab_retour['type'] = "success";
                $tab_retour['message'] = "Les informations de l'utilisateur ont bien été mis à jour";
            }
            else {
                $tab_retour['type'] = "error";
                $tab_retour['message'] = "Une erreur est survenue lors de la modification";
            }

            echo json_encode($tab_retour);
            break;
    }
}