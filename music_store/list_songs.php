<?php include_once 'templates/header.php'; ?>

<?php

    $album_id = $_GET['id'];

    $sql_get_song = mysqli_query($con, "SELECT * FROM songs WHERE alb_id='$album_id'");

    $sql_album_name = mysqli_query($con, "SELECT * FROM albums WHERE alb_id='$album_id'");
    $album = mysqli_fetch_assoc($sql_album_name);

?>

<div class="container mt-2" style="background-color: white">
    <nav aria-label="breadcrumb" style="padding-top: 10px"">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.php">e)(o</a></li>
        <li class="breadcrumb-item"><a href="albums.php"><i class="fa-solid fa-compact-disc"></i> Albums</a></li>
        <li class="breadcrumb-item active" aria-current="page"><i class="fas fa-list"></i> <?php echo $album['alb_name']; ?></li>
    </ol>
    </nav>
    <hr>

    <h1 class="mt-3"><i class="fa-solid fa-compact-disc"></i> <?php echo $album['alb_name']; ?></h1>
    <img src="../admin/img/<?php echo $album['alb_banner']; ?>" alt="" width="100%" class="mt-3">


    <h3 class="mt-5"><i class="fa-solid fa-caret-right mx-2" style="color: #6C757D;"></i> <i class="fas fa-list"></i> List songs</h3>
    <hr>
    <table class="table">
      <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Song</th>
            <th scope="col">Artist</th>
            <th scope="col"></th>
        </tr>
      </thead>

    <?php
        $id = 1;
      while($list_songs = mysqli_fetch_assoc($sql_get_song)):
        
    ?>
      <tbody>
        <tr>
          <th scope="row"><?php echo $id++; ?> </th>
          <td><a href="music_player.php?id=<?php echo $list_songs['song_id']; ?>"><?php echo $list_songs['song_name']; ?></a></td>
          <td><?php echo $album['alb_artist']; ?></td>
          <td><i class="fa-solid fa-heart " style="color:red"></i></td>
        </tr>
      </tbody>
      
      <?php  endwhile ?>

    </table>
    
 
    <h3 class="mt-5"><i class="fa-solid fa-caret-right mx-2" style="color: #6C757D;"></i> <i class="fa-solid fa-circle-info"></i> About album:</h3>
    <hr>
    <table>
    <tr>
          
          <td><p class="mx-4"><?php echo $album['alb_info']; ?></p></td>
          <td><img src="../admin/img/<?php echo $album['alb_img']; ?>" alt="" width="300px" class="mx-4"></td>
        </tr>
    </table>
    

</div>





<hr class="my-4">

<div class="ch-jumbotron p-5 mb-5">
    <p class="lead">© EXO-L. All rights reserved</p>
    <hr class="my-3">
    <cite class="lead" title="Source Title" style="color:gray;">Let's listen to music and chill with us!</cite>
    <div class="ml-auto float-right mt-3">
        <p>Contact us:</p>
        <div class="m-2" style="display: inline"><i class="fa-brands fa-facebook-square fa-2x "></i></div>
        <div class="m-2" style="display: inline"><i class="fa-brands fa-instagram fa-2x"></i></div>
        <div class="m-2" style="display: inline"><i class="fa-brands fa-youtube fa-2x"></i></div>
        <div class="m-2" style="display: inline"><i class="fa-brands fa-twitter fa-2x "></i></div>
        <div class="m-2" style="display: inline"><i class="fa-brands fa-google fa-2x"></i></div>
    </div>
    <hr class="my-3">

</div>



<?php include_once 'templates/footer.php'; ?>