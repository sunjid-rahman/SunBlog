<?php include "includes/header.php" ;?>
<?php include "includes/db.php" ;?>
<?php session_start();?>
    <!-- Navigation -->
    <?php include "includes/navigation.php" ?>;

    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <!-- Blog Entries Column -->
            <div class="col-md-8">
                
                
                <?php
                        $user_id=$_SESSION['user_id'];
                        
                        $query="SELECT *,DATE_FORMAT(post_date,'%d %b %Y') AS df FROM posts WHERE post_status='published' ORDER BY post_date DESC";
                        $select_all_posts_query=mysqli_query($connection,$query);
                        while($row=mysqli_fetch_assoc($select_all_posts_query)){
                            $post_id=$row['post_id'];
                            $post_title=$row['post_title'];
                            $post_author=$row['post_author'];
                            $post_date=$row['post_date'];
                            $post_image=$row['post_image'];
                            $post_content=substr($row['post_content'],0,200);
                            $post_d=$row['df'];
                            $post_status=$row['post_status'];
                            $post_author_id=$row['post_author_id'];
                            
//                            if($post_status!=='published'){
//                                echo "<h1 class='text-center'>NO POST SORRY</h1>";
//                            }
//                            else{
                                
                        
                     ?>         
                            <h1 class="page-header" style="color:blue">
                        Blog Site
                      <small>for Programmers</small>
                    </h1>

                    <!-- First Blog Post -->
                    <h2>
                        <h1><?php echo $post_title?></h1>
                    </h2>
                    <p class="lead">
                        by <a href="user/msg_index.php?sender_id=<?php echo $user_id;?>&&reciver_id=<?php echo $post_author_id;?>"><?php echo $post_author?></a>
                    </p>
                    <p><span class="glyphicon glyphicon-time"></span> <?php echo $post_d?></p>
                    <hr>
                    <img class="img-responsive" src="images/<?php echo $post_image?>" alt="">
                    <hr>
                    <p><?php echo $post_content?></p>
                    <a class="btn btn-primary" href="post.php?p_id=<?php echo $post_id; ?>">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>

                    <hr>
                            
                     <?php }  ?>
                        
                  

                
                
                

            </div>

            <!-- Blog Sidebar Widgets Column -->
            <?php include "includes/home_sidebar.php"; ?>

        </div>
        <!-- /.row -->

        <hr>

       <?php include "includes/footer.php"; ?>