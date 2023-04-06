<?php

    define('HOST','sql108.epizy.com');
    define('DB_NAME','epiz_33957889_account');
    define('USER', 'epiz_33957889');
    define('PASS', '3aqBAk1Y7yipVSH');

    try{
        $db = new PDO("mysql:host=" . HOST . ";dbname=" . DB_NAME, USER, PASS);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Connect > OK !";
    }catch(PDOException $e){ //Erreur de connexion
        echo $e;
    }

?>