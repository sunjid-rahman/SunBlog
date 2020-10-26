<?php include "db.php";?>

<?php session_start();?>
<?php

    if(isset($_POST['login'])){
        $username=$_POST['username'];
        $password=$_POST['password'];
        
        $username=mysqli_real_escape_string($connection,$username);
        $password=mysqli_real_escape_string($connection,$password);
        
        $query="SELECT * FROM users WHERE username = '{$username}' ";
        $select_user_query=mysqli_query($connection,$query);
        if(!$select_user_query){
            die("Query Failed".mysqli_error($connection));
        }
        while($row=mysqli_fetch_array($select_user_query)){
            $db_user_id=$row['user_id'];
            $db_username=$row['username'];
            $db_password=$row['password'];
            $db_user_firstname=$row['user_firstname'];
            $db_user_lastname=$row['user_lastname'];
            $db_user_email=$row['user_email'];
            $db_user_role=$row['user_role'];
            
        }
        
        if($username!==$db_username && $password!==$db_password){
            header("Location: ../index.php");
        }
        else if($username==$db_username && $password==$db_password){
                $_SESSION['user_id']=$db_user_id;
                $_SESSION['username']=$db_username;
                $_SESSION['user_firstname']=$db_user_firstname;
                $_SESSION['user_lastname']=$db_user_lastname;
                $_SESSION['user_role']=$db_user_role;
                $_SESSION['email']=$db_user_email;
                $_SESSION['password']=$db_password;
            if($db_user_role=='admin'){
                
                header("Location: ../admin/index.php?u_id=$db_user_id");
            }
            else if($db_user_role=='user'){
                header("Location: ../home.php?u_id=$db_user_id");
            }
            
        }
        else{
            header("Location: ../index.php");
        }
    }



?>