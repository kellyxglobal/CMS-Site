<?php

function escape($string){

    global $connection;
    return mysqli_real_escape_string($connection, trim($string));
}

function users_online() {//PHP Users Online Session Ends

if(isset($_GET['onlineusers'])){//Javascript Users Online Get request script starts

global $connection;

if(!$connection){
    session_start();

    include("includes/db.php");

    $session = session_id();
    $time = time();
    $time_out_in_seconds = 05;
    $time_out = $time - $time_out_in_seconds;

    $query = "SELECT * FROM users_online WHERE u_session = '$session'";
    $send_query = mysqli_query($connection, $query);
    $count = mysqli_num_rows($send_query);

        if($count == NULL){
            mysqli_query($connection, "INSERT INTO users_online(u_session, u_time) VALUES('$session', '$time')");
        }else{
            mysqli_query($connection, "UPDATE users_online SET u_time = '$time' WHERE u_session = '$session'");
        }
    $users_online_query = mysqli_query($connection, "SELECT * FROM users_online WHERE u_time > $time_out");
    echo $count_users = mysqli_num_rows($users_online_query);
}

}//Javascript Users Online Get request script ends
}//PHP Users Online Session Ends
users_online();



function confirm($result) {
    global $connection;
    if(!$result ) {
        die("QUERY FAILED ." . mysqli_error($connection));
    }
}

function insert_categories() {

    global $connection;
    if(isset($_POST['submit'])) {
        $cat_title = $_POST['cat_title'];

        if($cat_title == "" || empty($cat_title)){
            echo "This field sshould not be empty";
        } else {

            $query = "INSERT INTO categories(cat_title) ";
            $query .= "VALUE('{$cat_title}')";

            $create_categories_query = mysqli_query($connection, $query);

            if(!$create_categories_query){
                die('QUERY FAILED' . mysqli_error($connection));
            }
        }
    } 
}

function FindAllCategories(){

    global $connection;
    $query = "SELECT * from categories";
    $select_categories = mysqli_query($connection,$query);

    while($row = mysqli_fetch_assoc($select_categories)){
    $cat_id =  $row['cat_id'];
    $cat_title =  $row['cat_title'];
    echo "<tr>";
    echo "<td>{$cat_id}</td>";
    echo "<td>{$cat_title}</td>";
    echo "<td><a href='categories.php?delete={$cat_id}'>Delete</a></td>";
    echo "<td><a href='categories.php?edit={$cat_id}'>Edit</a></td>";
    echo "</tr>";
}
}

function DeleteCategories(){
    global $connection;    
    if(isset($_GET['delete'])){
        $the_cat_id = $_GET['delete'];

            $query = "DELETE FROM categories WHERE cat_id = {$the_cat_id}";
            $delete_query = mysqli_query($connection,$query);
            //Once the above is done, make a page refreshment immediately once a delete button is clicked one time
            header("Location: categories.php");
    } 

}
                                                                                                                 
?>

