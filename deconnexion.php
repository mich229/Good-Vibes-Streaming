<?php

session_start();
session_destroy();

//setcookie('id_user', false, time() - 3600,'/');unset($_COOKIE["id_user"]);

header('location:index.php');
?>