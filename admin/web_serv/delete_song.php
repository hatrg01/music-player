<?php
    require_once '../config/connection.php';
    
    $id = $_POST['song_id'];

    $sql_delete = mysqli_query($con, "DELETE FROM songs WHERE song_id='$id'");

    if($sql_delete){
        echo 'Song deleted!';
    }

?>