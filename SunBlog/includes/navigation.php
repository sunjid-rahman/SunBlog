
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="home.php">SunBlog</a>
            </div>
            
             <?php
            $user_id=$_SESSION['user_id'];
            ?>
                            
                       
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                
                <ul class="nav navbar-nav navbar-center"> 
<!--
                  <div class="h3">
                        
                        <a class="nav-link" href="user/show_msg.php?user_id=<?php echo $user_id;?>"><span class="glyphicon glyphicon-comment"></span></a>
                        <a class="nav-link" href="#"><span class="glyphicon glyphicon-globe"></span></a>
                        
                    </div>
-->
                </ul>
                
            
  <!--                   <?php
                        
                       $query="SELECT * FROM categories";
                        $select_all_categories_query=mysqli_query($connection,$query);
                        while($row=mysqli_fetch_assoc($select_all_categories_query)){
                            $cat_title=$row['cat_title'];
                            echo "<li><a href='#'>{$cat_title}</a></li>";
                        }
                        
                    ?>
-->
                   <ul class="nav navbar-nav navbar-right">
                       <a class="navbar-brand" href="user/index.php"><?php echo $_SESSION['user_firstname'] . " ". $_SESSION['user_lastname'];?></a>
                       <li>
                            <a href="./includes/logout.php"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                          
                    
                </ul>
                    
            </div>
<!--
                    <li>
                        <a href="#">Services</a>
                    </li>
                    <li>
                        <a href="#">Contact</a>
                    </li>
-->

             
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>