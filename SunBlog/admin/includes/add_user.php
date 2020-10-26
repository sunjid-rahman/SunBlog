


<?php
if(isset($_POST['create_user'])){
   // $user_id=$_POST['user_id'];
    $user_firstname=$_POST['users_firstname'];
    $user_lastname=$_POST['user_lastname'];
    $username=$_POST['username'];
    $user_email=$_POST['user_email'];
    $user_role=$_POST['user_role'];
    $user_password=$_POST['user_password'];
//    move_uploaded_file($post_image_temp, "../images/$post_image");
    $query="INSERT INTO users (username,password,user_firstname,user_lastname,user_email,user_role ) ";
    $query .= " VALUES ('{$username}','{$user_password}','{$user_firstname}','{$user_lastname}','{$user_email}','{$user_role}' ) ";
    
    $create_post_query=mysqli_query($connection,$query);
    confirmQuery($create_post_query);
    echo "User Created: " . " " . "<a href='users.php'>View Users</a>";
}

?>

<form action="" method="post" enctype="multipart/form-data">
    
      <div class="form-group">
    <label for="users_firstname">First Name</label>
        <input type="text" class="form-control" name="users_firstname">
    
    </div>
    
    <div class="form-group">
    <label for="user_lastname">Last Name</label>
        <input type="text" class="form-control" name="user_lastname">
    
    </div>
    
    
    <div class="form-group">
    <select name="user_role" id="">
        <option value="user">Select Options</option>
        <option value="admin">admin</option>
        <option value="user">user</option>
        
        
        </select>
    </div>
    
 
    
<!--
    <div class="form-group">
    <label for="post_image">Post Image</label>
        <input type="file" name="image">
    
    </div>
-->
    
    <div class="form-group">
    <label for="username">Username</label>
        <input type="text" class="form-control" name="username">
    
    </div>

    <div class="form-group">
    <label for="user_email">Email</label>
        <input type="email" class="form-control" name="user_email">
        
    
    </div>
     <div class="form-group">
    <label for="user_password">Password</label>
        <input type="password" class="form-control" name="user_password">
        
    
    </div>
    
    <div class="form-group">
        <input class="btn btn-primary" type="submit" name="create_user" value="Add User">

        </div>

</form>