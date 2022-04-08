<table class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Author</th>
                                    <th>Comment</th>
                                    <th>Email</th>
                                    <th>Status</th>
                                    <th>In Response to</th>
                                    <th>Date</th>
                                    <th>Approve</th>
                                    <th>Unapproved</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>

                            <tbody>

                            <?php
                                $query = "SELECT * from comments";
                                $select_comments = mysqli_query($connection,$query);
                            
                                while($row = mysqli_fetch_assoc($select_comments)){
                                $comment_id =  escape($row['comment_id']);
                                $comment_post_id =  escape($row['comment_post_id']);
                                $comment_author =  escape($row['comment_author']);
                                $comment_content =  escape($row['comment_content']);
                                $comment_email =  escape($row['comment_email']);
                                $comment_status =  escape($row['comment_status']);
                                $comment_date =  escape($row['comment_date']);

                                    echo "<tr>";
                                    echo "<td>$comment_id</td>";
                                    echo "<td>$comment_author</td>";
                                    echo "<td>$comment_content</td>";

                                 //$query = "SELECT * from categories WHERE cat_id = {$post_category_id}";
                                 //$select_category_id = mysqli_query($connection, $query);
                            
                                 //while($row = mysqli_fetch_assoc($select_category_id)){
                                 //$cat_id =  $row['cat_id'];
                                 //$cat_title =  $row['cat_title'];

                                  //  echo "<td>$cat_title</td>";
                                 //}

                                    echo "<td>$comment_email</td>";
                                    echo "<td>$comment_status</td>";

                                    $query = "SELECT * FROM posts WHERE post_Id = $comment_post_id";
                                    $select_post_id_query = mysqli_query($connection, $query);
                                    while($row = mysqli_fetch_assoc($select_post_id_query)){
                                        $post_id = $row['post_id'];
                                        $post_title = $row['post_title'];

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

                            if(isset($_GET['approve'])){
                                $the_comment_id = $_GET['approve'];

                                $query = "UPDATE comments SET comment_status = 'approved' WHERE comment_id = $the_comment_id ";
                                $unapprove_comment_query = mysqli_query($connection, $query);
                                header("Location: comments.php");
                            }


                            if(isset($_GET['unapprove'])){
                                $the_comment_id = $_GET['unapprove'];

                                $query = "UPDATE comments SET comment_status = 'unapproved' WHERE comment_id = $the_comment_id  ";
                                $unapprove_comment_query = mysqli_query($connection, $query);
                                header("Location: comments.php");
                            }


                            if(isset($_GET['delete'])){

                                if(isset($_SESSION['user_role'])){
                                    if($_SESSION['user_role'] == 'admin') {


                                $the_comment_id = mysqli_real_escape_string($_GET['delete']);

                                $query = "DELETE FROM comments WHERE comment_id = {$the_comment_id} ";
                                $delete_query = mysqli_query($connection, $query);
                                header("Location: comments.php");
                            }
                        }
                    }
                        ?>