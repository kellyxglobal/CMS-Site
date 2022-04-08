
<?php include "includes/admin_header.php"; ?>

    <div id="wrapper">


<?php if($connection) echo "Conn"; ?>

        <!-- Navigation -->
            <?php include "includes/admin_navigation.php"; ?>
            <!-- /.navbar-collapse -->

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Weelcome to Admin
                            <small><?php echo $_SESSION['username']; ?></small>
                        </h1>
                       
                    </div>
                </div>
                <!-- /.row -->

                       
                <!-- /.row -->



                
<div class="row">
    <div class="col-lg-3 col-md-6">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-file-text fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">

                    <?php 
                    
                    $query = "SELECT * FROM posts";
                    $select_all_post = mysqli_query($connection,$query);
                    $post_count = mysqli_num_rows($select_all_post);
                        echo "<div class='huge'>{$post_count}</div>"
                    ?>

                  
                        <div>All Posts</div>
                    </div>
                </div>
            </div>
            <a href="posts.php">
                <div class="panel-footer">
                    <span class="pull-left">View Details</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>
    <div class="col-lg-3 col-md-6">
        <div class="panel panel-green">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-comments fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                    <?php
                    $query = "SELECT * FROM comments";
                    $select_all_comments = mysqli_query($connection,$query);
                    $comments_count = mysqli_num_rows($select_all_comments);
                        echo "<div class='huge'>{$comments_count}</div>"
                    ?>
                
                      <div>All Comments</div>
                    </div>
                </div>
            </div>
            <a href="comments.php">
                <div class="panel-footer">
                    <span class="pull-left">View Details</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>
    <div class="col-lg-3 col-md-6">
        <div class="panel panel-yellow">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-user fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                        <?php
                    $query = "SELECT * FROM users";
                    $select_all_users = mysqli_query($connection,$query);
                    $users_count = mysqli_num_rows($select_all_users);
                        echo "<div class='huge'>{$users_count}</div>"
                    ?>
                        <div>All Users</div>
                    </div>
                </div>
            </div>
            <a href="users.php">
                <div class="panel-footer">
                    <span class="pull-left">View Details</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>
    <div class="col-lg-3 col-md-6">
        <div class="panel panel-red">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-list fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                        <?php
                        $query = "SELECT * FROM categories";
                        $select_all_categories = mysqli_query($connection,$query);
                        $categories_count = mysqli_num_rows($select_all_categories);
                            echo "<div class='huge'>{$categories_count}</div>"
                        ?>
                         <div>Total Categories</div>
                    </div>
                </div>
            </div>
            <a href="categories.php">
                <div class="panel-footer">
                    <span class="pull-left">View Details</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>
</div>
                <!-- /.row -->


    <?php

        $query = "SELECT * FROM posts WHERE post_status = 'published' ";
        $select_all_published_post = mysqli_query($connection,$query);
        $post_published_count = mysqli_num_rows($select_all_published_post);

        $query = "SELECT * FROM posts WHERE post_status = 'draft' ";
        $select_all_draft_post = mysqli_query($connection,$query);
        $post_draft_count = mysqli_num_rows($select_all_draft_post);

        $query = "SELECT * FROM comments WHERE comment_status = 'approved' ";
        $approved_comments_query = mysqli_query($connection,$query);
        $approved_comments_count = mysqli_num_rows($approved_comments_query);

        $query = "SELECT * FROM comments WHERE comment_status = 'unapproved' ";
        $unapproved_comments_query = mysqli_query($connection,$query);
        $unapproved_comments_count = mysqli_num_rows($unapproved_comments_query);

        $query = "SELECT * FROM users WHERE user_role = 'admin' ";
        $admin_user_query = mysqli_query($connection,$query);
        $admin_user_count = mysqli_num_rows($admin_user_query);

        $query = "SELECT * FROM users WHERE user_role = 'subscriber' ";
        $subscribed_user_query = mysqli_query($connection,$query);
        $subscribed_user_count = mysqli_num_rows($subscribed_user_query);

    ?>


            <div class = "row">

            <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Data', 'Count'],

            <?php

                $element_text = ['All Posts', 'Active Post', 'Draft Posts', 'All Comments', 'Approved Comments', 'Pending Comments', 'All Users', 'Admin Users', 'Subscribed Users', 'Categories'];
                $element_count = [$post_count, $post_published_count, $post_draft_count, $comments_count, $approved_comments_count, $unapproved_comments_count, $users_count, $admin_user_count, $subscribed_user_count, $categories_count];

                for($i = 0; $i < 9; $i++){
                    echo "['{$element_text[$i]}'" . "," . "{$element_count[$i]}],";
                }

            ?>

          //['Posts', 1030],
        ]);

        var options = {
          chart: {
            title: '',
            subtitle: '',
          }
        };

        var chart = new google.charts.Bar(document.getElementById('columnchart_material'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
      }
    </script>

<div id="columnchart_material" style="width: 'auto'; height: 500px;"></div>

            </div>

            </div>
            <!-- /.container-fluid -->

        </div>

        
        <!-- /#page-wrapper -->

        </div>
    <!-- /#wrapper -->
<?php include "includes/admin_footer.php"; ?>