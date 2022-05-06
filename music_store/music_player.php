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