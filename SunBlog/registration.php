<?php  include "includes/db.php"; ?>
 <?php  include "includes/header.php"; ?>


<?php
    if(isset($_POST['submit'])){
        $user_firstname=$_POST['user_firstname'];
        $user_lastname=$_POST['user_lastname'];
        $username=$_POST['username'];
        $user_email=$_POST['email'];
        $user_password=$_POST['password'];
        
        
        if(!empty($user_firstname)&&!empty($user_lastname)&&!empty($username)&&!empty($user_email)&&!empty($user_password)){
            
            
            $user_firstname=mysqli_real_escape_string($connection,$user_firstname);
            $user_lastname=mysqli_real_escape_string($connection,$user_lastname);
            $username=mysqli_real_escape_string($connection,$username);       
            $user_email=mysqli_real_escape_string($connection,$user_email);
            $user_password=mysqli_real_escape_string($connection,$user_password);
            $user_role="user";
            
            
            $query="INSERT INTO users (username,password,user_firstname,user_lastname,user_email,user_role ) ";
            $query .= " VALUES ('{$username}','{$user_password}','{$user_firstname}','{$user_lastname}','{$user_email}','{$user_role}' ) ";
            $reg_query=mysqli_query($connection,$query);
            if(!$reg_query){
                die("QUERY FAILED" . mysqli_error($connection));
            }
        
            header("Location: index.php");
            $message="Your registration is completed";
            echo '<script language="javascript">';
            echo 'alert("Your registration is completed")'; 
            echo '</script>';
            exit;
        }
        else{
            $message="Fields can not be empty";
            echo '<script language="javascript">';
            echo 'alert("Fields can not be empty")';
            echo '</script>';
            
            exit;
          
        }
        
        
        
    }
    else{
        $message="";
    }


?>


    <!-- Navigation -->
    
    <?php  include "includes/reg_navigation.php"; ?>
    
 
    <!-- Page Content -->
    <div class="container">
    
<section id="login">
    <div class="container">
        <div class="row">
            <div class="col-xs-6 col-xs-offset-3">
                <div class="form-wrap">
                <h1>Register</h1>
                    <form role="form" action="registration.php" method="post" id="login-form" autocomplete="off">
                        <h6 class="text-center" style="color:red" font-size="14px"><?php echo $message; ?></h6>
                        <div class="form-group">
                            <label for="user_firstname" class="sr-only">First Name</label>
                            <input type="text" name="user_firstname" id="user_firstname" class="form-control" placeholder="Enter Desired Firstname">
                        </div>
                        <div class="form-group">
                            <label for="user_lastname" class="sr-only">Last Name</label>
                            <input type="text" name="user_lastname" id="user_lastname" class="form-control" placeholder="Enter Desired Lastname">
                        </div>
                        <div class="form-group">
                            <label for="username" class="sr-only">username</label>
                            <input type="text" name="username" id="username" class="form-control" placeholder="Enter Desired Username">
                        </div>
                         <div class="form-group">
                            <label for="email" class="sr-only">Email</label>
                            <input type="email" name="email" id="email" class="form-control" placeholder="somebody@example.com">
                        </div>
                         <div class="form-group">
                            <label for="password" class="sr-only">Password</label>
                            <input type="password" name="password" id="key" class="form-control" placeholder="Password">
                        </div>
                
                        <input type="submit" name="submit" id="btn-login" class="btn btn-custom btn-lg btn-block" value="Register">
                    </form>
                 
                </div>
            </div> <!-- /.col-xs-12 -->
        </div> <!-- /.row -->
    </div> <!-- /.container -->
</section>


        <hr>



<?php include "includes/footer.php";?>
