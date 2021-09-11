<?php
    # error display 
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    require_once "../model/connect.php";
    $id = $_GET['id'];

    echo "id: ". $id . "<br>";

    try {
        # for priority list
        if(isset($_GET['priority'])) {
            if(isset($_GET['isDone'])) {
                $priority = $_GET['priority'];
                $isDone = $_GET['isDone'];
                $stmt = $pdo->prepare("UPDATE Todo SET priority=:priority, isDone=:isDone WHERE id=:id");
                $stmt->bindValue(":priority", $priority);
                $stmt->bindValue(":isDone", $isDone);
                $stmt->bindValue(":id", $id);
                $stmt->execute();

                echo "isDone:".$isDone;
                echo "priority:".$priority;
            }
            else {
                $priority = $_GET['priority'];
                $stmt = $pdo->prepare("UPDATE Todo SET priority=:priority WHERE id=:id");
                $stmt->bindValue(":priority", $priority);
                $stmt->bindValue(":id", $id);
                $stmt->execute();
            }
        }
        else {
            # for done and undone
            if(isset($_GET['isDone'])) {
                $isDone = $_GET['isDone'];
                $stmt = $pdo->prepare("UPDATE Todo SET isDone=:isDone WHERE id=:id");
                $stmt->bindValue(":isDone", $isDone);
                $stmt->bindValue(":id", $id);
                $stmt->execute();
                echo "isDone:".$isDone;
            }
        }
    } catch(PDOException $e) {
        echo "failed";
        die($e);
    }
    header("Location: ../index.php");
