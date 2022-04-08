<?php 

include "includes/admin_header.php"; 

?>
<?php
if(isset($_SESSION['username'])){
     $username = $_SESSION['username'];

     $query = "SELECT * FROM users WHERE username = '{$username}' ";

     $select_user_profile_query = mysqli_query($connection, $query);

     while($row = mysqli_fetch_array($select_user_profile_query)){
        $user_id =  $row['user_id'];
        $username =  $row['username'];
        $user_password =  $row['user_password'];
        $user_firstname =  $row['user_firstname'];
        $user_lastname =  $row['user_lastname'];
        $user_email =  $row['user_email'];
        $user_role =  $row['user_role'];
     }
}
?>


<?php
    
       if(isset($_POST['update_profile'])) {
        
    
        $user_firstname = $_POST['user_firstname'];
        $user_lastname  = $_POST['user_lastname'];
        //$user_role      = $_POST['user_role'];
    
       // $post_image        = $_FILES['image']['name'];
       // $post_image_temp   = $_FILES['image']['tmp_name'];
    
        $username         = $_POST['username'];
        $user_email      = $_POST['user_email'];
        $user_password      = $_POST['user_password'];
        //$post_date         = date('d-m-y');
        //$post_comment_count = 4;
    
        //move_uploaded_file($post_image_temp, "../images/$post_image" );
    
        //$query = "INSERT INTO users(user_firstname, user_lastname, user_role, username, user_email, user_password ) ";
        //$query .= "VALUES('{$user_firstname}','{$user_lastname}','{$user_role}','{$username}','{$user_email}','{$user_password}') "; 
            
        
    
        $query = "UPDATE users set ";
        $query .= "user_firstname = '{$user_firstname}', ";
        $query .= "user_lastname = '{$user_lastname}', ";
        //$query .= "user_role = '{$user_role}', ";
        $query .= "username = '{$username}', ";
        $query .= "user_email = '{$user_email}', ";
        $query .= "user_password = '{$user_password}' ";
        $query .= "WHERE username = '{$username}' ";
     
        $create_user_query = mysqli_query($connection,$query);
        confirm($create_user_query);
       }
?>
    <div id="wrapper">

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
                            <small>Kelechi Anyaegbu</small>
                        </h1>
                        
<form action="" method="post" enctype="multipart/form-data">    
     
      <div class="form-group">
         <label for="title">Firstname</label>
          <input type="text" value="<?php echo $user_firstname; ?>" class="form-control" name="user_firstname">
      </div>

      <div class="form-group">
         <label for="title">Lastname</label>
          <input type="text" value="<?php echo $user_lastname; ?>" class="form-control" name="user_lastname">
      </div>
      
      <div class="form-group">
        <label for="category">User Role</label>
        <select name="user_role" id="user_role">
            
            <option value="subscriber"><?php echo $user_role; ?></option>

            <?php
                if($user_role == 'admin'){
                    echo "<option value='subscriber'>subscriber</option>";
                }else {
                    echo "<option value='admin'>sdmin</opton>";
                }
            ?>

 
 
        </select>
 
    </div>

        <!--<div class="form-group">
       <label for="category">Category</label>
       <select name="post_category" id=""> -->
           
<?php
/*
        $query = "SELECT * FROM categories";
        $select_categories = mysqli_query($connection,$query);
        
        confirmQuery($select_categories);


        while($row = mysqli_fetch_assoc($select_categories )) {
        $cat_id = $row['cat_id'];
        $cat_title = $row['cat_title'];
            
            
            echo "<option value='$cat_id'>{$cat_title}</option>";
         
            
        }

        */
?>
           
        
       </select>
      
      </div>

    
      <!--<<div class="form-group">
       <label for="users">Users</label>
       <select name="post_user" id=""> -->
    
           
<?php
/*
        $users_query = "SELECT * FROM users";
        $select_users = mysqli_query($connection,$users_query);
        
        confirmQuery($select_users);


        while($row = mysqli_fetch_assoc($select_users)) {
        $user_id = $row['user_id'];
        $username = $row['username'];
            
            
            echo "<option value='{$username}'>{$username}</option>";
         
            
        }*/

?>   
        
       </select>
      
      </div>

       <!--<div class="form-group">
         <select name="post_status" id="">
             <option value="draft">Post Status</option>
             <option value="published">Published</option>
             <option value="draft">Draft</option>
         </select>
      </div> -->

<!-- <div class="form-group">
         <label for="post_image">Post Image</label>
          <input type="file"  name="image">
      </div>
    -->
      <div class="form-group">
         <label for="post_tags">username</label>
          <input type="text" value="<?php echo $username; ?>" class="form-control" name="username">
      </div>
      
      <div class="form-group">
         <label for="post_content">Email</label>
         <input type="email" value="<?php echo $user_email; ?>" class="form-control "name="user_email" id="">
      </div>

      <div class="form-group">
         <label for="post_content">Password</label>
         <input type="password" autocomplete="off" class="form-control "name="user_password">
      </div>

       <div class="form-group">
          <input class="btn btn-primary" type="submit" name = "update_profile" value="Update Profile">
      </div>


</form>
                    
</div>
</div>
<!-- /.row -->
</div>
<!-- /.container-fluid -->
</div>
 <!-- /#page-wrapper -->
</div>
    <!-- /#wrapper -->
<?php include "includes/admin_footer.php"; ?>