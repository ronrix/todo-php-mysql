<?php
    # save todo in db 
    if(($_SERVER['REQUEST_METHOD']=== "POST")) {
        $todo = $_POST["todo"];
        if(!empty($todo)) {

            $priority = isset($_POST["priority"]) ? $_POST['priority'] : 'less priority';
            $query = "INSERT INTO Todo(todo, priority) VALUES(:todo, :priority)";

            $stmt = $pdo->prepare($query);
            $stmt->bindParam(":todo", $todo, PDO::PARAM_STR);
            $stmt->bindParam(":priority", $priority, PDO::PARAM_STR);
            $stmt->execute();

            # refresh the page
            header("Refresh:0");
        }
}
