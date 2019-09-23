<?php
require_once '../connexion.php';
require_once '../functions/functions.php';

//print_r($_POST);

$data = array();
if (sizeof($_POST) === 2) {
    if(!empty($_POST['login-pseudo']) && !empty($_POST['login-password'])) {

        $action = $_POST['action'];
        switch ($action) {
            case "connexion" :
                $data = array();

                $pseudo = htmlspecialchars($_POST['login-pseudo']);
                $password = htmlspecialchars($_POST['login-password']);

                $utilisateur = $connect-> query("SELECT * FROM utilisateur WHERE pseudo = '". $pseudo ."'")
                    ->fetch();

                if(!empty($utilisateur)) {
                    if(password_verify($password,$utilisateur["password"])) {
                        if(user_session($connect,$utilisateur["id_user"])) {
                            $data['type'] = "success";
                            $data['message'] = "Connexion OK";
                        }

                        else {
                            $data['type'] = "error";
                            $data['message'] = "Une erreur est survenue lors de la connexion à votre compte ! Veuillez réessayer";
                        }
                    }
                    else {
                        $data['type'] = "warning";
                        $data['message'] = "Pseudo ou mot de passe incorrect";
                    }
                }
                else {
                    $data['etat_connexion'] = "Vous n'avez pas de compte. Veuillez créer un compte svp !.";
                }

                echo json_encode($data);

                break;
        }


    }
}
