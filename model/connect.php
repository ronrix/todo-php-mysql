<?php   
    $dsn = "mysql:host=localhost;dbname=mysql";
    $pdo = new PDO($dsn, "root", "");
    if(!$pdo){
        die("Connection unsucessful");
    }

    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
