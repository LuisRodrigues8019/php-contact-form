<!-- definir 4 constantes, une constante c'est comme une variable-->
<!-- try catch c'est un block pour se connecter a la db permet d'effectuer une action d'essayer-->

<?php

    define('HOST', 'localhost');
    define('DB_NAME', 'siteweb');
    define('USER', 'root');
    define ('PASS', '');

    try{
        $db = new PDO("mysql:host=" . HOST . ";dbname=" . DB_NAME, USER, PASS);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }catch(PDOException $e){
        echo $e;
    }

    

?>