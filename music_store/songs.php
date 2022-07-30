<?php include_once 'templates/header.php'; ?>


<div class="container mt-2 mb-5" style="background-color: white">
  <div class="container mt-2" style="background-color: white">
    <nav aria-label="breadcrumb" style="padding-top: 10px"">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="index.php">e)(o</a></li>
      <li class="breadcrumb-item active" aria-current="page"><i class="fa-solid fa-music"></i> Songs</li>
    </ol>
    </nav>
    <hr>
  </div>

  <?php   $id=1; ?>
  <table class="table">
      <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Song</th>
            <th scope="col">Album</th>
            <th scope="col">Artist</th>
            <th scope="col"></th>
        </tr>
      </thead>

    <?php
      $sql_get_albums = mysqli_query($con, "SELECT * FROM albums");
      while($list_albums = mysqli_fetch_assoc($sql_get_albums)):
        $alb_id = $list_albums['alb_id'];
    ?>
 
    <?php
      $sql_get_songs = mysqli_query($con, "SELECT * FROM songs WHERE alb_id='$alb_id'");
      while($list_songs = mysqli_fetch_assoc($sql_get_songs)):
        
    ?>
      <tbody>
        <tr>
          <th scope="row"><?php echo $id++; ?> </th>
          <td><a href="music_player.php?id=<?php echo $list_songs['song_id']; ?>" style="text-decoration: none;"><img src="../admin/img/<?php echo $list_albums['alb_img']; ?>" alt="" width="50px" style="border: 1px solid gray;"> <b><?php echo $list_songs['song_name']; ?></b></a></td>
          <td><?php echo $list_albums['alb_name']; ?></td>
          <td><?php echo $list_albums['alb_artist']; ?></td>
          <td><i class="fa-solid fa-heart" style="color:red"></i></td>
        </tr>
      </tbody>
      
      <?php  endwhile ?>

  <?php endwhile ?>


    </table>



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