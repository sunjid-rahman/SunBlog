<?php include "includes/header.php" ;?>
<?php include "includes/db.php" ;?>
    <!-- Navigation -->
    <?php include "includes/guest_navigation.php" ?>;

    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <!-- Blog Entries Column -->
            <div class="col-md-8">
                
                
                <?php
                        
                        $query="SELECT *,DATE_FORMAT(post_date,'%d %b %Y') AS df FROM posts WHERE post_status='published' AND post_type='guest' ORDER BY post_date DESC";
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
                        by <a href="index.php"><?php echo $post_author?></a>
                    </p>
                    <p><span class="glyphicon glyphicon-time"></span> <?php echo $post_d?></p>
                    <hr>
                    <img class="img-responsive" src="images/<?php echo $post_image?>" alt="">
                    <hr>
                    <p><?php echo $post_content?></p>
                    <a class="btn btn-primary" href="guest_post.php?p_id=<?php echo $post_id; ?>">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>

                    <hr>
                            
                     <?php }  ?>
                        
                  

                
                
                

            </div>

            <!-- Blog Sidebar Widgets Column -->
            <?php include "includes/sidebar.php"; ?>

        </div>
        <!-- /.row -->

        <hr>

       <?php include "includes/footer.php"; ?>