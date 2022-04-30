<?php include_once "templates/header.php"; ?>

<?php
    session_start();
    // if(isset($_COOKIE['login_msg'])){
    // }
    // else{
    //   echo "Cookie not found";
    // }
    $sql_user_data = mysqli_query($con, "SELECT * FROM users WHERE name='".$_SESSION['user']."'");
    $final_result = mysqli_fetch_assoc($sql_user_data);
    ?>
    
    <!-- Narbar ----------------------------------------------- -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container">
        <a class="navbar-brand text-primary" href="index.php" style="width:80px"><i class="fa-solid fa-headphones"></i> e)(o</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="index.php"><i class="fa-solid fa-house"></i> Home</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="songs.php"><i class="fa-solid fa-music"></i> Songs</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="albums.php"><i class="fa-solid fa-compact-disc"></i> Albums</a>
            </li>
          </ul>
          
          

          <ul class="navbar-nav ml-auto" style="margin-left: 40px; margin-right: 90px;">
                        
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="fa-solid fa-bell "></i>
                <?php echo $_SESSION['user']; ?>
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="#"><i class="fa-solid fa-gear"></i> Settings</a></li>
                <li><a class="dropdown-item" href="#"><i class="fa-solid fa-user"></i> Account</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="../index.php"><i class="fa-solid fa-right-from-bracket"></i> Log out</a></li>
              </ul>
            </li>
          </ul>
          
        </div>
      </div>
    </nav>


    <div class="container mt-2" style="background-color: white">
        <nav aria-label="breadcrumb" style="padding-top: 10px"">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php">e)(o</a></li>
            <li class="breadcrumb-item active" aria-current="page"><i class="fa-solid fa-music"></i> Songs</li>
        </ol>
        </nav>
        <hr>
    </div>


<?php include_once "templates/footer.php"; ?>