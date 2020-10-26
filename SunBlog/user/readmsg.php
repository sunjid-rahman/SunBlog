<?php

try {
    $sender_id=$_GET['sender_id'];
    $reciver_id=$_GET['reciver_id'];
    $con = new PDO("mysql:host=localhost;dbname=cms", "root", "");

    $stmt = "select * from message where (sender=$sender_id and receiver=$reciver_id) || (sender=$reciver_id && receiver=$sender_id) order by senttime asc";
    $pdostmt = $con->query($stmt);
    $table = $pdostmt->fetchAll(PDO::FETCH_NUM);

    $wholebody = "";
    foreach ($table as $row) {
        if ($row[2] == 1) {
            $wholebody = $wholebody . "<div style='width:100%;background-color:gray;'>$row[4]</div>";
        } else {
            $wholebody = $wholebody . "<div style='width:100%;background-color:white;text-align:right;'>$row[4]</div>";
        }
    }

    echo $wholebody;
} catch (PDOException $ex) {
    
}
?>

