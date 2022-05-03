<?php
    require_once '../config/connection.php';

    $alb_id = $_POST['album_id'];

    $sql_list_album = mysqli_query($con, "SELECT * FROM albums WHERE alb_id='$alb_id'");
    $list_album = mysqli_fetch_assoc($sql_list_album);


    echo '  <div class="mb-3">
                <input type="hidden" class="form-control" id="album_id" name="album_id" value="'.$list_album['alb_id'].'" aria-describedby="emailHelp" placeholder="">
            </div>
            <div class="mb-3">
                <label for="alb_name" class="form-label">Album Name:</label>
                <input type="text" class="form-control" id="album_name" name="album_name" value="'.$list_album['alb_name'].'" aria-describedby="emailHelp" placeholder="">
                <span class="ch_error" id="album_name_error"></span>
            </div>
            <div class="mb-3">
                <label for="artist" class="form-label">Artist(s):</label>
                <input type="text" class="form-control" id="album_artist" name="album_artist" value="'.$list_album['alb_artist'].'" aria-describedby="emailHelp" placeholder="">
                <span class="ch_error" id="album_artist_error"></span>
            </div>
            <div class="mb-3">
                    <label for="select" class="form-label">Album Type :</label>
                    <select class="form-select" aria-label="Default select example" id="album_type" name="album_type">
                        <option value="new">New</option>
                        <option value="regular">Regular</option>
                    </select>
            </div>
            
        ';




?>