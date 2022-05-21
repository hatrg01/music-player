<?php include_once "templates/header.php"; ?>

<?php
  if(isset($_POST['add_song'])){
    $song_name = $_POST['song_name'];
    $album = $_POST['album'];

    // mp3--------------------------------------
    $song_mp3 = $_FILES['song_mp3']['name'];
    $song_temp_mp3 = $_FILES['song_mp3']['tmp_name'];

    

    move_uploaded_file($song_temp_mp3, "mp3/$song_mp3");

    $sql_song_insert = mysqli_query($con, "INSERT INTO songs(song_name, alb_id, song_mp3) 
                                                            VALUES('$song_name', '$album', '$song_mp3')");
    
    if($sql_song_insert){
      echo "<script>alert('Song inserted');</script>";
    }
    else{
      echo mysqli_error($con);
    }
  }

?>



<?php
    
    $sql_user_data = mysqli_query($con, "SELECT * FROM users WHERE name='".$_SESSION['user']."'");
    $final_result = mysqli_fetch_assoc($sql_user_data);

    $sql_get_album = mysqli_query($con, "SELECT * FROM albums");
    
?>


<div class="container mt-2 pb-3" style="background-color: white">
    <nav aria-label="breadcrumb" style="padding-top: 10px"">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.php">e)(o</a></li>
        <li class="breadcrumb-item active" aria-current="page"><i class="fa-solid fa-circle-plus"></i> Songs</li>
    </ol>
    </nav>
    <hr>

    <div class="row mb-5">
        <form action="" method="post" enctype="multipart/form-data">
            <div class="mx-5">
                <div class="mb-3">
                    <label for="song_name" class="form-label">Song Name:</label>
                    <input type="text" class="form-control" id="song_name" name="song_name" placeholder="">
                </div>

                <div class="mb-3">
                    <label for="album" class="form-label">Album:</label>
                    <select class="form-select" aria-label="Default select example" id="album" name="album">
                        <option value="">Select Album</option>
                        <?php while($list_album = mysqli_fetch_assoc($sql_get_album)): ?>
                        <option value="<?php echo $list_album['alb_id'] ?>"><?php echo $list_album['alb_name'] ?></option>
                        <?php endwhile ?>
                    </select>
                </div>

                <div class="mb-5">
                    <label for="song_mp3" class="form-label">Song mp3:</label>
                    <input class="form-control" type="file" id="song_mp3" name="song_mp3">
                </div>

                <hr>

                <div class="form-group mt-4" style="float: right;">
                    <button type="submit" name="add_song" class="btn btn-block red">Add Song</button>
                </div>
                
            </div>
            
        </form>
    </div>

    

</div>




<?php include_once "templates/footer.php"; ?>