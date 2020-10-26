<?php include "includes/header.php";?>
<?php include "functions.php";?>
<!--<?php session_start();?>-->

<?php
    if(isset($SESSION['username'])){
        
        
    }

?>

    <div id="wrapper">

        <!-- Navigation -->
        
        <?php include "includes/navigation.php";?>
        
        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        
                        <h1 class="page-header">
                            Welcome to Timeline
                            <small><?php echo $_SESSION['username'];?></small>
                        </h1>
                       
                        
                        <form action="" method="post" enctype="multipart/form-data">
    
    
    
    <div class="form-group">
    <label for="title">FirstName</label>
        <input value="<?php echo $_SESSION['user_firstname'];?>" type="text" class="form-control" name="user_firstname">
    
    </div>
    
    <div class="form-group">
    <label for="post_status">Lastname</label>
        <input value="<?php echo $_SESSION['user_lastname'];?>" type="text" class="form-control" name="user_lastname">
    
    </div>
                            
     <div class="form-group">
    <label for="post_status">Username</label>
        <input value="<?php echo $_SESSION['username'];?>" type="text" class="form-control" name="username">
    
    </div>
    
     <div class="form-group">
    <label for="post_status">Email</label>
        <input value="<?php echo $_SESSION['email'];?>" type="text" class="form-control" name="user_email">
    
    </div>
    
    <div class="form-group">
<!--    <label for="post_image">Post Image</label>-->
        <img width="100" src="../images/<?php echo $post_image ;?>" alt="">
        <input type="file" name="image">
    
    </div>
    
    <div class="form-group">
    <label for="post_tags">Password</label>
        <input value="<?php echo $_SESSION['password'];?>" type="text" class="form-control" name="user_password">
    
    </div>

   
    
    <div class="form-group">
        <input class="btn btn-primary" type="submit" name="update_post" value="Update">

        </div>

</form>
                        
                        
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    <?php include "includes/footer.php" ;?> 
                            