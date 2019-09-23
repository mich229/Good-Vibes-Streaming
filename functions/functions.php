<?php

function user_session($connect,$id_user) {
    try {

        $user_info = $connect -> query("SELECT * FROM utilisateur WHERE id_user = ". $id_user)
            -> fetch();

        if($user_info !== null) {
            $_SESSION['id_user'] = $user_info['id_user'];
            $_SESSION['pseudo'] = $user_info['pseudo'];
            $_SESSION['datenais'] = $user_info['datenais'];
            $_SESSION['sexe'] = $user_info['sexe'];
            $_SESSION['ville'] = $user_info['ville'];
            $_SESSION['password'] = $user_info['password'];
            return true;
        }
        else {
            return false;
        }
    }
    catch (PDOException $e) {
        echo $e -> getMessage();
    }

}

function list_categorie($connect) {
    $categories = $connect -> query("SELECT * FROM categorie")
        -> fetchall();
    $result = "";
    foreach ($categories as $categ) {
        $result .= '<option value="'. $categ['id_categ'] .'">'. $categ['lib_categ'] .'</option>';
    }
    return $result;
}
