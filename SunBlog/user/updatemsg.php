<?php

$s = -1;
$r = -1;
$c = "";

if (isset($_POST["sender"]))
    $s = $_POST['sender'];
if (isset($_POST["receiver"]))
    $r = $_POST['receiver'];
if (isset($_POST["content"]))
    $c = $_POST['content'];


if ($s != -1 && $r != -1) {
    try {
        $con = new PDO("mysql:host=localhost;dbname=cms", "root", "");
        
        $stmt="select ifnull(max(id),0)+1 from message";
        $pdostmt=$con->query($stmt);
        $table=$pdostmt->fetchAll(PDO::FETCH_NUM);
        $id=$table[0][0];
        
        $date= date_create();
        
        $datetime= date_format($date,"Y/m/d H:i:s");
        echo $datetime;
        $stmt="insert into message values($id,'$datetime',$s,$r,'$c')";
        echo $stmt;
        $con->exec($stmt);
    } catch (PDOException $ex) {
        
    }
}
?>

