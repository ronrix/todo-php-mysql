<?php
    require_once "../model/connect.php";

    echo $_GET['id'];
    
    try {
         if(isset($_GET['id'])){
                $id = $_GET['id'];
                $stmt = $pdo->prepare('DELETE FROM Todo WHERE id=:id');
                $stmt->bindValue(':id', $id);
                $stmt->execute();
        } 
    }
    catch(PDOException $e) {
        echo $e;
    }
    header('Location: ../index.php');
