
<table class="table table-bordered table-hover">
    <thead>
        <tr>
            <th style="text-align:center">Id</th>
            <th style="text-align:center">Author</th>
            <th style="text-align:center">Title</th>
            <th style="text-align:center">Category</th>
            <th style="text-align:center">Status</th>
            <th style="text-align:center">Image</th>
            <th style="text-align:center">Tags</th>
            <th style="text-align:center">Comments</th>
            <th style="text-align:center">Date</th>
            <th style="text-align:center">View</th> 
            <th style="text-align:center">Edit</th>
            <th style="text-align:center">Delete</th>
        </tr>
    </thead>
    <tbody>

        <?php 
            $user_id=$_SESSION['user_id'];
            $query="SELECT * FROM posts WHERE post_author_id = $user_id ";
            $select_posts=mysqli_query($connection, $query);
            while($row=mysqli_fetch_assoc($select_posts)){
                $post_id= $row['post_id'];
                $post_category_id= $row['post_category_id'];
                $post_title= $row['post_title'];
                $post_author= $row['post_author'];
                $post_date= $row['post_date'];
                $post_image= $row['post_image'];
                $post_tags= $row['post_tags'];
                $post_status=$row['post_status'];
                $post_comment_count= $row['post_comment_count'];

                echo "<tr>";
                echo "<td>$post_id</td>";
                echo "<td>$post_author</td>";
                echo "<td>$post_title</td>";
                
                $query="SELECT * FROM categories WHERE cat_id = {$post_category_id} ";
                $edit_categories=mysqli_query($connection, $query);
                while($row=mysqli_fetch_assoc($edit_categories)){
                    $cat_id=$row['cat_id'];
                    $cat_title=$row['cat_title'];
                    echo "<td>{$cat_title}</td>";
                    
                }
                

                echo "<td>$post_status</td>";
                echo "<td><img width='100' class='img-responsive' src='../images/$post_image' alt='image'></td>";
                echo "<td>$post_tags</td>";
                echo "<td>$post_comment_count</td>";
                echo "<td>$post_date</td>";
                echo "<td><a href='../post.php?p_id={$post_id}'>View</a></td>";
                echo "<td><a href='posts.php?source=edit_post&p_id={$post_id}'>Edit</a></td>";
                echo "<td><a href='posts.php?delete={$post_id}'>Delete</a></td>";
                echo "</tr>";

            }

        ?>
    </tbody>
</table>



<?php
if(isset($_GET['delete'])){
    
    $the_post_id = $_GET['delete'];
    $query="DELETE FROM posts WHERE post_id= {$the_post_id} ";
    $delete_query=mysqli_query($connection,$query);
    header("Location: posts.php");
    
}


?>

