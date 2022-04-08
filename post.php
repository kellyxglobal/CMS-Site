<?php include "include/db.php"; ?>
<?php include "include/header.php"; ?>



    <!-- Navigation -->
    <?php include "include/navigation.php"; ?>

    <!-- Page Content -->

    <div class="container">

        <div class="row">

            <!-- Blog Entries Column -->


            <div class="col-md-8">


            <?php
            if(isset($_GET['p_id'])){
                $the_post_id = $_GET['p_id'];

                if($_SERVER['REQUEST_METHOD'] !== 'POST'){

                $view_query = "UPDATE posts SET post_views_count = post_views_count + 1 WHERE post_id = $the_post_id";
                $send_query = mysqli_query($connection, $view_query);

                if(!$send_query) {
                    die("Query Failed");
                }
            }
                $query = "SELECT * FROM posts WHERE post_id='$the_post_id'";
                $select_all_posts_query = mysqli_query($connection,$query);

                while($row = mysqli_fetch_assoc($select_all_posts_query)){
                    $post_id = $row['post_id'];
                    $post_title =  $row['post_title'];
                    $post_author =  $row['post_author'];
                    $post_date =  $row['post_date'];
                    $post_image =  $row['post_image'];
                    $post_content =  $row['post_content'];
                   
                   
                   ?>
                <marquee>
                <h1 class="page-header">
                    Welcome to my
                    <small>Content Management Site</small>
                </h1>
                </marquee>

                <!-- First Blog Post -->
                <h2>
                    <a href="#"><?php echo $post_title; ?></a>
                </h2>
                <p class="lead">
                    by <a href="author_posts.php?author=<?php echo $post_author ?>&p_id=<?php echo $the_post_id; ?>"><?php echo $post_author; ?></a>
                    <!--<a href="index.php"><?php echo $post_author; ?></a>-->
                </p>
                <p><span class="glyphicon glyphicon-time"></span> <?php echo $post_date; ?></p>
                <hr>
                <img class="img-responsive" src="images/<?php echo $post_image; ?>" alt="">
                <hr>
                <p><?php echo $post_content; ?></p>
                

                <hr>

                <?php }
            
                } else {
                    header("Location: index.php");

                }
                
                ?>

                
                <!-- Blog Comments -->

                <?php
                    if($_SERVER['REQUEST_METHOD'] === 'POST'){ //isset check

                    if(isset($_POST['create_comment'])){
                        $the_post_id = $_GET['p_id'];
                        $comment_author = $_POST['comment_author'];
                        $comment_email = $_POST['comment_email'];
                        $comment_content = $_POST['comment_content'];

                            if(!empty($comment_author) && empty(!$comment_email) && empty(!$comment_content)) {

                                $query = "INSERT INTO comments (comment_post_id, comment_author, comment_email, comment_content, comment_status, comment_date)";

                                $query .= "VALUES ($the_post_id , '{$comment_author}', '{$comment_email}', '{$comment_content }', 'unapproved', now())";

                                $create_comment_query = mysqli_query($connection, $query);
                                if(!$create_comment_query){
                                    die('QUERY Failed' . mysqli_error($connection));
                                    }
                                //$query = "UPDATE posts SET post_comment_count = post_comment_count + 1 ";
                                //$query .= "WHERE post_id = $the_post_id ";
                                //$update_comment_count = mysqli_query($connection,$query);
                                
                                
                            }  else {
                                echo "<script>alert('All Fields Cannot be empty!')</script>";
                                
                                }
                                //header("Location: " . "post.php?p_id=$the_post_id");
                                
                        }
                         
                        //header("Location: index.php");
                        //$location = "post.php?p_id=$the_post_id";
                        //header("Location: " . "post.php?p_id=$the_post_id");  
                        //redirect("post.php?p_id=$the_post_id");
                    } //End of Isset Check
                    

                ?>


                <!-- Comments Form -->
                <div class="well">
                    <h4>Leave a Comment:</h4>
                    <form action="" method="post" role="form">
                        <input type="hidden" value="<?= isset($the_post_id) ?? null ?>">
                        <div class="form-group">
                            <label for="Author">Author</label>
                            <input type="text" class="form-control" name="comment_author">
                        </div>

                        <div class="form-group">
                            <label for="Email">Email</label>
                            <input type="text" class="form-control" name="comment_email">
                        </div>

                        <div class="form-group">
                        <label for="comment">Your Comment</label>
                            <textarea class="form-control" name="comment_content" rows="3"></textarea>
                        </div>
                        <button type="submit" name="create_comment" class="btn btn-primary">Submit</button>
                    </form>
                </div>

                <hr>

                <!-- Posted Comments -->
                    <?php 
                    $query = "SELECT * FROM comments WHERE comment_post_id = {$the_post_id} AND comment_status='approved' ORDER BY comment_id DESC ";
                    $select_comment_query = mysqli_query($connection,$query);
                    if(!$select_comment_query){
                        die('Query Failed' . mysqli_error($connection));
                    }
                    while ($row = mysqli_fetch_array($select_comment_query)) {
                        $comment_date = $row['comment_date'];
                        $comment_content = $row['comment_content'];
                        $comment_author = $row['comment_author'];



                        ?>
                 <!-- Comment -->
                 <div class="media">
                    <a class="pull-left" href="#">
                        <img class="media-object" src="http://placehold.it/64x64" alt="">
                    </a>
                    <div class="media-body">
                        <h4 class="media-heading"><?php echo $comment_author; ?>
                            <small><?php echo $comment_date; ?></small>
                        </h4>
                        <?php echo $comment_content; ?>
                    </div>
                </div>

                   <?php } ?>

            </div>

            <!-- Blog Sidebar Widgets Column -->
            <?php include "include/sidebar.php";?>

        </div>
        <!-- /.row -->

        <hr>

        <?php include "include/header.php"; ?>