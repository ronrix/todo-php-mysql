<?php 
    # error display
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
    
    require_once "model/connect.php";
    
    include_once "controller/getAll.php";
    include_once "controller/createTodo.php";
?>
<!DOCTYPE html>
<html>
    <head>
        <title>TODO</title>
        <style>
            <?php include 'style.css' ?>
        </style>
    </head>
    <body>
        <div class="grid">
            <?php require_once "view/header.php" ?>
            <?php require_once "view/aside.php" ?>
            <?php require_once "view/todos.php" ?>
        </div>
    </body>
    <script src="app.js"></script>
</html>
