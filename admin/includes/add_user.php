<?php
   if(isset($_POST['create_user'])) {
    

    $user_firstname         = $_POST['user_firstname'];
    $user_lastname  = $_POST['user_lastname'];
    $user_role       = $_POST['user_role'];

   // $post_image        = $_FILES['image']['name'];
   // $post_image_temp   = $_FILES['image']['tmp_name'];

    $username         = $_POST['username'];
    $user_email      = $_POST['user_email'];
    $user_password      = $_POST['user_password'];
    //$post_date         = date('d-m-y');
    //$post_comment_count = 4;

    //move_uploaded_file($post_image_temp, "../images/$post_image" );

    $query = "INSERT INTO users(user_firstname, user_lastname, user_role, username, user_email, user_password ) ";
    $query .= "VALUES('{$user_firstname}','{$user_lastname}','{$user_role}','{$username}','{$user_email}','{$user_password}') "; 
        
    $create_user_query = mysqli_query($connection, $query);

    confirm($create_user_query);

    echo "User Created: " . " " . "<a href='users.php'>View Users</a> ";
   }
?>

<form action="" method="post" enctype="multipart/form-data">    
     
      <div class="form-group">
         <label for="title">Firstname</label>
          <input type="text" class="form-control" name="user_firstname">
      </div>

      <div class="form-group">
         <label for="title">Lastname</label>
          <input type="text" class="form-control" name="user_lastname">
      </div>
      
      <div class="form-group">
        <label for="category">User Role</label>
        <select name="user_role" id="user_role">
            <option value="subscriber">Select Options</option>
            <option value="admin">Admin</opton>
            <option value="subscriber">Subscriber</option>
 
 
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
         
            
        }
*/
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
          <input type="text" class="form-control" name="username">
      </div>
      
      <div class="form-group">
         <label for="post_content">Email</label>
         <input type="email" class="form-control "name="user_email" id="">
      </div>

      <div class="form-group">
         <label for="post_content">Password</label>
         <input type="password" class="form-control "name="user_password">
      </div>

       <div class="form-group">
          <input class="btn btn-primary" type="submit" name="create_user" value="Add User">
      </div>


</form>
    