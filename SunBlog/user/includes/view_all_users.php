
<table class="table table-bordered table-hover">
    <thead>
        <tr>
            <th style="text-align:center">Id</th>
            <th style="text-align:center">Username</th>
            <th style="text-align:center">Firstname</th>
            <th style="text-align:center">Lastname</th>
            <th style="text-align:center">Email</th>
            <th style="text-align:center">Role</th>
<!--            <th style="text-align:center">Date</th>-->
        </tr>
    </thead>
    <tbody>

        <?php 
            $query="SELECT * FROM users ";
            $select_users=mysqli_query($connection, $query);
            while($row=mysqli_fetch_assoc($select_users)){
                $user_id= $row['user_id'];
                $user_name= $row['username'];
                $user_password= $row['password'];
                $user_firstname= $row['user_firstname'];
                $user_lastname= $row['user_lastname'];
                $user_email= $row['user_email'];
                $user_image= $row['user_image'];
                $user_role= $row['user_role'];

                echo "<tr>";
                echo "<td>$user_id</td>";
                echo "<td>$user_name</td>";
                echo "<td>$user_firstname</td>";
                echo "<td>$user_lastname</td>";
                echo "<td>$user_email</td>";
                echo "<td>$user_role</td>";
//                $query="SELECT * FROM categories WHERE cat_id = {$post_category_id} ";
//                $edit_categories=mysqli_query($connection, $query);
//                while($row=mysqli_fetch_assoc($edit_categories)){
//                    $cat_id=$row['cat_id'];
//                    $cat_title=$row['cat_title'];
//                    echo "<td>{$cat_title}</td>";
//                    
//                }
                

//                $query="SELECT * FROM posts WHERE post_id=$comment_post_id ";
//                $select_post_id=mysqli_query($connection,$query);
//                while($row=mysqli_fetch_assoc($select_post_id)){
//                    $post_id=$row['post_id'];
//                    $post_title=$row['post_title'];
//                    echo "<td><a href='../post.php?p_id=$post_id'>$post_title</a></td>";
//                    
//                }

                echo "<td><a href='comments.php?approve='>Approve</a></td>";
                echo "<td><a href='comments.php?unapprove='>Unapprove</a></td>";
                echo "<td><a href='users.php?delete={$user_id}'>Delete</a></td>";
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
    
    $the_user_id = $_GET['delete'];
    $query="DELETE FROM users WHERE user_id= {$the_user_id} ";
    $delete_query=mysqli_query($connection,$query);
    header("Location: users.php");
    
}


?>

