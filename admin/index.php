<?php include_once "templates/header.php"; ?>

<div class="container mt-2 mb-5" style="background-color: white">
  <div class="container mt-2" style="background-color: white">
    <nav aria-label="breadcrumb" style="padding-top: 10px"">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="index.php">e)(o</a></li>
      <li class="breadcrumb-item active" aria-current="page"><i class="fa-solid fa-house"></i> Home</li>
    </ol>
    </nav>
    <hr>
  </div>
 
  <?php
    $sql_get_albums = mysqli_query($con, "SELECT * FROM albums");
    while($list_albums = mysqli_fetch_assoc($sql_get_albums)):
      $alb_id = $list_albums['alb_id'];
      $id=1;
  ?>
    <h4 class="mt-5 text-primary"><i class="fa-solid fa-caret-right mx-2" style="color: #6C757D;"></i> <i class="fa-solid fa-compact-disc" style="color: black;"></i> <?php echo $list_albums['alb_name']; ?></h4>
    <hr>

    <table class="table">
      <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Song</th>
            <th scope="col">Artist</th>
            <th scope="col">Delete</th>
        </tr>
      </thead>

    <?php
      $sql_get_songs = mysqli_query($con, "SELECT * FROM songs WHERE alb_id='$alb_id'");
      while($list_songs = mysqli_fetch_assoc($sql_get_songs)):
        
    ?>
      <tbody>
        <tr>
          <th scope="row"><?php echo $id++; ?> </th>
          <td><?php echo $list_songs['song_name']; ?></td>
          <td><?php echo $list_albums['alb_artist']; ?></td>
          <td><a href="javascript:void(0)" rel="<?php echo $list_songs['song_id']; ?>" class="delete_song"><i class="fa-solid fa-trash-can"></i></a></td>
        </tr>
      </tbody>
      
      <?php  endwhile ?>

    </table>

  <?php endwhile ?>



</div>


<?php include_once "templates/footer.php"; ?>



<script type="text/javascript">
    $(document).ready(function(){

        $(".delete_song").on('click', function(){

            var song_id = $(this).attr('rel');
           

            $.ajax({
                type: 'POST',
                url: 'web_serv/delete_song.php',
                data: {song_id: song_id},
                success: function(result){
                    alert(result);
                    location.reload()
                }
            });

        });


    });

</script>
    