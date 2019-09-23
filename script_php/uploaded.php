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

            $id_user = $_SESSION['id_user'];
            $profileVideoName = $_FILES["import_file"]["name"];
            $profileImageName = $_FILES["import_poster"]["name"];

            if(isset($_POST['categorie']) && empty($_POST['categorie'])) {
                $tab_retour['type'] = "warning";
                $tab_retour['message'] = "Veuillez entrer la categorie de la video svp !";
                echo json_encode($tab_retour);
                die;
            }

            // Testons si les fichiers ont bien été envoyés et s'il n'y a pas d'erreur
            if (isset($_FILES['import_file']) AND $_FILES['import_file']['error'] == 0) {
                if (isset($_FILES['import_poster']) AND $_FILES['import_poster']['error'] == 0) {
                    // Testons si le fichier n'est pas trop gros
                    if (($_FILES['import_file']['size'] <= 50000000) AND ($_FILES['import_poster']['size'] <= 10000000)) {
                        // Testons si l'extension est autorisée
                        $infosvideo = pathinfo($_FILES['import_file']['name']);
                        $extension_video_upload = $infosvideo['extension'];
                        $extensions_video_autorisees = array('mp4', 'webm');

                        $infosposter = pathinfo($_FILES['import_file']['name']);
                        $extension_poster_upload = $infosposter['extension'];
                        $extensions_poster_autorisees = array('jpg', 'jpeg', 'png');

                        if (in_array($extension_video_upload, $extensions_video_autorisees) AND in_array($extension_poster_upload, $extensions_poster_autorisees))
                        {
                            // On peut valider le fichier et le stocker définitivement
                            move_uploaded_file($_FILES['import_file']['tmp_name'], 'video/' . basename($_FILES['import_file']['name']));

                            move_uploaded_file($_FILES['import_poster']['tmp_name'], 'img-upload/' . basename($_FILES['import_poster']['name']));

                            //===== Etape 1 : Inscription d'un utilisateur
                            $insertion_query1 = "INSERT INTO video (sources, titre, image_poster, id_categ, id_user) VALUES (:sources, :titre, :image_poster, :id_categ, :id_user)";

                            $insertion_query2 = "INSERT INTO tags (tag, id_video) VALUES (:tag, :id_video)";

                            $insertion_exec = $connect -> prepare($insertion_query1)
                                -> execute(array(
                                    ":sources" => $profileVideoName,
                                    ":titre" => $_POST["titre"],
                                    ":image_poster" => $profileImageName,
                                    ":id_categ" => $_POST["categorie"],
                                    ":id_user" => $id_user
                                ));

                            $id_video = $connect -> lastInsertId();

                            if($insertion_exec) {
                                $insertion_exec = $connect -> prepare($insertion_query2)
                                    -> execute(array(
                                        ":tag" => $_POST["tags"],
                                        ":id_video" => $id_video
                                    ));

                                $tab_retour['type'] = "success";
                                $tab_retour['message'] = "La video a bien été chargée";
                            }
                            else {
                                $tab_retour['type'] = "error";
                                $tab_retour['message'] = "Une erreur est survenue lors du chargement de la video ! Veuillez réessayer";
                            }


                        }
                    }
                }
            }
            echo json_encode($tab_retour);
            break;
    }
}