<?php
require_once '../connexion.php';
require_once '../functions/functions.php';

//print_r($_POST);

$query = "
    SELECT * FROM utilisateur
    WHERE pseudo = :pseudo
";
$statement = $connect->prepare($query);
$statement->execute(
    array(
        ':pseudo'	=>	$_POST["login-pseudo"]
    )
);
$count = $statement->rowCount();
if($count > 0) {
    $user = $statement -> fetch();

    if(password_verify($_POST["login-password"], $user["password_user"])) {
        if(user_session($connect,$user['id_user'])) {
            echo json_encode("Connexion OK");
        }
        else {
            echo json_encode("Une erreur est survenu lors de la tentative de connexion ! Veuillez réessayer");
        }
    }
    else {
        echo json_encode("Pseudo ou mot de passe incorrect");
    }
}
else {
    echo json_encode("Pseudo ou mot de passe incorrect");
}