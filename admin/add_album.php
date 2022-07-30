<?php include_once "templates/header.php"; ?>

<?php
  if(isset($_POST['add_album'])){
    $album_name = $_POST['alb_name'];
    $album_artist = $_POST['artist'];
    $album_type = $_POST['alb_type'];
    $album_info = $_POST['alb_info'];

    // Album image--------------------------------------
    $album_image = $_FILES['alb_img']['name'];
    $album_temp_image = $_FILES['alb_img']['tmp_name'];

    // Album banner--------------------------------------
    $album_banner = $_FILES['alb_banner']['name'];
    $album_temp_banner = $_FILES['alb_banner']['tmp_name'];

    move_uploaded_file($album_temp_image, "img/$album_image");
    move_uploaded_file($album_temp_banner, "img/$album_banner");

    $sql_album_insert = mysqli_query($con, "INSERT INTO albums(alb_img, alb_banner, alb_name, alb_artist, alb_info, alb_type) 
                                        VALUES('$album_image', '$album_banner', '$album_name', '$album_artist', '$album_info', '$album_type')");
    
    if($sql_album_insert){
      echo "<script>alert('Inserted album');</script>";
    }
    else{
      echo mysqli_error($con);
    }
  }
?>


    <!-- Album Section----------------------------------------------- -->
    <div class="container mt-2" style="background-color: white">
        <nav aria-label="breadcrumb" style="padding-top: 10px"">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php" style="text-decoration:none;">e)(o admin</a></li>
            <li class="breadcrumb-item active" aria-current="page"><i class="fa-solid fa-circle-plus"></i> Add album</li>
        </ol>
        </nav>
        <hr>

        <div class="row mb-5">
            <form action="" method="post" enctype="multipart/form-data">
                <div class="mx-5">
                    <div class="mb-3">
                        <label for="alb_name" class="form-label">Album Name:</label>
                        <input type="text" class="form-control" id="alb_name" name="alb_name" placeholder="">
                    </div>

                    <div class="mb-3">
                        <label for="artist" class="form-label">Artist(s):</label>
                        <input type="text" class="form-control" id="artist" name="artist" placeholder="">
                    </div>

                    <div class="mb-3">
                        <label for="select" class="form-label">Album Type :</label>
                        <select class="form-select" aria-label="Default select example" id="select" name="alb_type">
                            <option value="new">New</option>
                            <option value="regular">Regular</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="alb_info" class="form-label">About Album:</label>
                        <textarea class="form-control" id="alb_info" name="alb_info" rows="10"></textarea>
                    </div>

                    <div class="mb-3">
                        <label for="formFile" class="form-label">Album Image</label>
                        <input class="form-control" type="file" id="formFile" name="alb_img">
                    </div>

                    <div class="mb-3">
                        <label for="formFile" class="form-label">Album Banner</label>
                        <input class="form-control" type="file" id="formFile" name="alb_banner">
                    </div>

                    <div class="form-group mt-4" style="float: right;">
                        <button type="submit" name="add_album" class="btn btn-block red">Add Album</button>
                    </div>
                    
                </div>
                
            </form>
        </div>

        

        <hr>

    </div>

    

<?php include_once "templates/footer.php"; ?>