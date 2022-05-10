<?php include_once 'templates/header.php'; ?>

<?php

    $song_id = $_GET['id'];

    $sql_get_song = mysqli_query($con, "SELECT * FROM songs WHERE song_id='$song_id'");
    $song = mysqli_fetch_assoc($sql_get_song);
    $album_id = $song['alb_id'];

    $sql_album_name = mysqli_query($con, "SELECT * FROM albums WHERE alb_id='$album_id'");
    $album = mysqli_fetch_assoc($sql_album_name);

    $sql_list_songs = mysqli_query($con, "SELECT * FROM songs WHERE alb_id='$album_id'");


?>

<div class="container mt-2 pb-5" style="background-color: white">
    <nav aria-label="breadcrumb" style="padding-top: 10px"">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php">e)(o</a></li>
            <li class="breadcrumb-item"><a href="albums.php"><i class="fa-solid fa-compact-disc"></i> Albums</a></li>
            <li class="breadcrumb-item"><a href="list_songs.php?id=<?php echo $album['alb_id']; ?>"><i class="fas fa-list"></i> <?php echo $album['alb_name']; ?></a></li>
            <li class="breadcrumb-item active" aria-current="page"><i class="fa-solid fa-music"></i> <?php echo $song['song_name']; ?></li>
        </ol>
    </nav>
    <hr class="mb-5">

    <!-- Music Player---------------------------------------------------------------------- -->
    <div class="music">
        <div class="music-thumb">
            <img src="../admin/img/<?php echo $album['alb_img'];?>" alt="">
        </div>
        <h3 class="text-center mb-3 music-name"><?php echo $song['song_name']; ?> - <?php echo $album['alb_artist']; ?></h3>
        <input type="range" name="range" class="range" id="range">
        <audio src="../admin/mp3/<?php echo $song['song_mp3']; ?>" id="song"></audio>
        <div class="timer">
            <div class="remaining">00:00</div>
            <div class="duration">00:00</div>
        </div>
        <div class="controls">
            <i class="fa-solid fa-shuffle play-shuffle"></i>
            <i class="fa-solid fa-backward-step play-back"></i>
            <div class="play">
                <div class="play-inner">
                    <i class="fa-solid fa-play play-icon"></i>
                </div>
            
            </div>
            <i class="fa-solid fa-forward-step play-forward"></i>
            
            <i class="fa-solid fa-repeat play-repeat"></i>
            
            
        </div>

    </div>

    <!-- Playlist----------------------------------------------------------------------- -->
    <h3 class="mt-5"><i class="fa-solid fa-caret-right mx-2" style="color: #6C757D;"></i> <i class="fas fa-list"></i> Playlist</h3>
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
        $id=1;
      while($list_songs = mysqli_fetch_assoc($sql_list_songs)):
        
    ?>
      <tbody>
        <tr>
          <th scope="row"><?php echo $id++; ?> </th>
          <td><a href="music_player.php?id=<?php echo $list_songs['song_id']; ?>" style="text-decoration: none;"><b><?php echo $list_songs['song_name']; ?></b></a></td>
          <td><?php echo $album['alb_artist']; ?></td>
          <td><i class="fa-solid fa-heart" style="color:red"></i></td>
        </tr>
      </tbody>
      
      <?php  endwhile ?>


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


<script>

const song = document.getElementById("song");
const play_btn = document.querySelector(".play-inner");
const nextBtn = document.querySelector(".play-forward");
const prevBtn = document.querySelector(".play-back");
const durationTime = document.querySelector(".duration");
const remainingTime = document.querySelector(".remaining");
const rangeBar = document.querySelector(".range");
const musicName = document.querySelector(".music-name");
const musicThumbnail = document.querySelector(".music-thumb");
const musicImage = document.querySelector(".music-thumb img");
const playRepeat = document.querySelector(".play-repeat");
const playShuffle = document.querySelector(".play-shuffle");

let is_playing = true;
let indexSong = 0;
let is_repeat = false;
let is_shuffle = false;

const musics = [];

let mp3_url;
let img_url;
<?php 
$sql_list = mysqli_query($con, "SELECT * FROM songs WHERE alb_id='$album_id'");
while($list = mysqli_fetch_assoc($sql_list)): 
?>
    mp3_url = "../mp3/" + `<?php echo $list['song_mp3'];?>`;
    img_url = "../img/" + `<?php echo $album['alb_img'];?>`;
    console.log(mp3_url);
    musics.push({
        id    : `<?php echo $list['song_id'];?>`,
        tittle: `<?php echo $list['song_name'];?>`,
        artist: `<?php echo $album['alb_artist'];?>`,
        album : `<?php echo $album['alb_name'];?>`,
        mp3   : mp3_url,
        image : img_url
    });

<?php endwhile ?> 

let ID = `<?php echo $song_id; ?>`
indexSong = getID();
function getID(){
    for(var i = 0; i < musics.length; i++) {
        if(musics[i].id == ID) {
            return i;
        }
    }
}

let timer;

playShuffle.addEventListener("click", function() {
    if(is_shuffle) {
        is_shuffle = false;
        playShuffle.removeAttribute("style");
    } else {
        is_shuffle = true;
        playShuffle.style.color = "rgb(58, 140, 233)";
    }
});
playRepeat.addEventListener("click", function() {
    if(is_repeat) {
        is_repeat = false;
        playRepeat.removeAttribute("style");
    } else {
        is_repeat = true;
        playRepeat.style.color = "rgb(58, 140, 233)";
    }
});
nextBtn.addEventListener("click", function() {
    is_playing = true;
    changeSong(1);
});
prevBtn.addEventListener("click", function() {
    is_playing = true;
    changeSong(-1);
});
song.addEventListener("ended", handleEndedSong);
function handleEndedSong() {
    if(is_repeat) {
        is_playing = true;
        play_pause();
    } else if(is_shuffle){
        indexSong = Math.floor(Math.random() * musics.length)
        init(indexSong);
        play_pause();
    } else{
        changeSong(1);
    }
}
function changeSong(dir) {
    if (dir == 1) {
        // next song
        indexSong++;
        if (indexSong == musics.length) {
            indexSong = 0
        }
    } else if (dir == -1) {
        //prev song
        indexSong--;
        if (indexSong < 0) {
            indexSong = musics.length - 1;
        }
        is_playing = true;
    }
    init(indexSong);
    play_pause();
}


play_btn.addEventListener("click", play_pause);
function play_pause() {
    if(is_playing){
        musicThumbnail.classList.add("is-playing");
        song.play();
        is_playing = false;
        play_btn.innerHTML = '<i class="fa-solid fa-pause"></i>';
        timer = setInterval(displayTimer, 500);
    } else {
        musicThumbnail.classList.remove("is-playing");
        song.pause();
        is_playing = true;
        play_btn.innerHTML = '<i class="fa-solid fa-play"></i>';
        clearInterval(timer);
    }
}

function displayTimer() {
    const {duration, currentTime} = song;
    rangeBar.max = duration;
    rangeBar.value = currentTime;
    remainingTime.textContent = formatTimer(currentTime);
    if (!duration) {
        durationTime.textContent = "00:00";
    } else {
        durationTime.textContent = formatTimer(duration);
    }
}
function formatTimer(num) {
    const min = Math.floor(num / 60);
    const sec = Math.floor(num - min * 60);
    return `${min < 10 ? '0' + min : min}:${sec < 10 ? '0' + sec : sec}`;
}

rangeBar.addEventListener("change", handleChangeBar);
function handleChangeBar() {
    song.currentTime = rangeBar.value;
}

function init(indexSong){
    is_playing = true;
    song.setAttribute("src", `../admin/mp3/${musics[indexSong].mp3}`);
    musicName.textContent = musics[indexSong].tittle + " - " + musics[indexSong].artist;
    musicImage.setAttribute("src", `../admin/img/${musics[indexSong].image}`);
}
displayTimer();
init(indexSong);

</script>