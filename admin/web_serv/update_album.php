<?php
    require_once '../config/connection.php';
    
    $id = $_POST['album_id'];
    $name = $_POST['album_name'];
    $artist = $_POST['album_artist'];
    $type = $_POST['album_type'];

    $sql_update = mysqli_query($con, "UPDATE albums SET alb_name='$name', alb_artist='$artist', alb_type='$type' WHERE alb_id='$id'");

    if($sql_update){
        echo 'Album updated!';
    }

?>