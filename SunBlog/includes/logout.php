<?php include "db.php";?>

<?php session_start();?>
<?php


    $_SESSION['username']=null;
    $_SESSION['user_firstname']=null;
    $_SESSION['user_lastname']=null;
    $_SESSION['db_user_role']=null;
    header("Location: ../index.php");



?>