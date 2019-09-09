<?php

try {

    $connect = new PDO('mysql:host=localhost;dbname=good_vibes;charset=utf8','root','',[PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);

    session_start();
}
catch (PDOException $e) {
    echo $e -> getMessage();
}