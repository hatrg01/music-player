<?php
    require_once '../config/connection.php';
    
    $id = $_POST['album_id'];

    $sql_delete = mysqli_query($con, "DELETE FROM albums WHERE alb_id='$id'");

    if($sql_delete){
        echo 'Deleted album!';
    }

?>

