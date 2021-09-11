<?php
    # get all todos from db
    $stmt = $pdo->prepare("SELECT * FROM Todo ORDER BY date");
    $stmt->execute();
    $todos = $stmt->fetchAll(PDO::FETCH_ASSOC);

    $done = [];
    $todayH = [];
    $todayL = [];
    $yesterday = [];
    $previous = [];

    foreach($todos as $todo) {

        # filter the date
        $date = strtotime($todo['date']);
        $now = strtotime(date('Y-m-d'));
        $dateDiff = $date - $now;
        $diff = floor($dateDiff/(60*68*24));

        if($diff == 0) {  # today
            if($todo['isDone'] == 1) { # undone
                array_push($done, $todo);
            } else {
                if($todo['priority'] == "high priority") {
                    array_push($todayH, $todo);
                } else {
                    array_push($todayL, $todo);
                }  
            }
        }
        else if($diff < -1) { # check previous undone todo
            if($todo['isDone'] == 1) {
                array_push($done, $todo);
            } else {
                array_push($previous, $todo);
            }
        }
        else { # check yesterday's undone todo
            if($todo['isDone'] == 1) {
                array_push($done, $todo);
            }
            array_push($yesterday, $todo);
        }
    }
    header("Refesh:0");
