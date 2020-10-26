<?php

try {
    $user=$_GET['user_id'];
    $con = new PDO("mysql:host=localhost;dbname=cms", "root", "");

    $stmt = "select * from message where (sender=$user) || (reciver=$user ) order by senttime asc";
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

