<?php

function user_session($connect,$id_user) {
    try {

        $user_info = $connect -> query("SELECT * FROM utilisateur WHERE  AND utilisateur.id_user = ". $id_user)
            -> fetch();

        if($user_info !== null) {
            $_SESSION['id_user'] = $user_info['id_user'];
            $_SESSION['pseudo'] = $user_info['pseudo'];
        }
        else {
            return false;
        }
    }
    catch (PDOException $e) {
        echo $e -> getMessage();
    }

}