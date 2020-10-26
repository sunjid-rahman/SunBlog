 <table class="table table-bordered table-hover">
    <thead>
        <tr>
            <th style="text-align:center">Id</th>
            <th style="text-align:center">Author</th>
            <th style="text-align:center">Comment</th>
            <th style="text-align:center">Email</th>
            <th style="text-align:center">Status</th>
            <th style="text-align:center">In Respose To</th>
            <th style="text-align:center">Date</th>
            <th style="text-align:center">Approve</th>
            <th style="text-align:center">Unapprove</th>
            <th style="text-align:center">Delete</th>
        </tr>
    </thead>
    <tbody>

        <?php 
            $user_id=$_SESSION['user_id'];
            $query="SELECT c.* FROM comments AS c JOIN posts AS p ON c.comment_post_id=p.post_id WHERE p.post_author_id= $user_id ";
            $select_comments=mysqli_query($connection, $query);
            while($row=mysqli_fetch_assoc($select_comments)){
                $comment_id= $row['comment_id'];
                $comment_post_id= $row['comment_post_id'];              
                $comment_author= $row['comment_author'];
                $comment_email= $row['comment_email'];
                $comment_date= $row['comment_date'];
                $comment_content= $row['comment_content'];
                $comment_status=$row['comment_status'];

                echo "<tr>";
                echo "<td>$comment_id</td>";
                echo "<td>$comment_author</td>";
                echo "<td>$comment_content</td>";
                
//                $query="SELECT * FROM categories WHERE cat_id = {$post_category_id} ";
//                $edit_categories=mysqli_query($connection, $query);
//                while($row=mysqli_fetch_assoc($edit_categories)){
//                    $cat_id=$row['cat_id'];
//                    $cat_title=$row['cat_title'];
//                    echo "<td>{$cat_title}</td>";
//                    
//                }
                

                echo "<td>$comment_email</td>";
                echo "<td>$comment_status</td>";
                $query="SELECT * FROM posts WHERE post_id=$comment_post_id ";
                $select_post_id=mysqli_query($connection,$query);
                while($row=mysqli_fetch_assoc($select_post_id)){
                    $post_id=$row['post_id'];
                    $post_title=$row['post_title'];
                    echo "<td><a href='../post.php?p_id=$post_id'>$post_title</a></td>";
                    
                }
                echo "<td>$comment_date</td>";
                echo "<td><a href='comments.php?approve=$comment_id'>Approve</a></td>";
                echo "<td><a href='comments.php?unapprove=$comment_id'>Unapprove</a></td>";
                echo "<td><a href='comments.php?delete=$comment_id'>Delete</a></td>";
                echo "</tr>";

            }

        ?>


    </tbody>
</table>

<?php
if(isset($_GET['unapprove'])){
    
    $the_comment_id = $_GET['unapprove'];
    $query="UPDATE comments SET comment_status='unapproved' WHERE comment_id= {$the_comment_id} ";
    $unapproved_comment_query=mysqli_query($connection,$query);
    header("Location: comments.php");
    
}


?>
<?php
if(isset($_GET['approve'])){
    
    $the_comment_id = $_GET['approve'];
    $query="UPDATE comments SET comment_status='approved' WHERE comment_id= {$the_comment_id} ";
    $approved_comment_query=mysqli_query($connection,$query);
    header("Location: comments.php");
    
}


?>

<?php
if(isset($_GET['delete'])){
    
    $the_comment_id = $_GET['delete'];
    $query="DELETE FROM comments WHERE comment_id= {$the_comment_id} ";
    $delete_query=mysqli_query($connection,$query);
    header("Location: comments.php");
    
}


?>

