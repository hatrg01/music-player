<?php require_once 'config/connection.php'; ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.css">

    <!-- Google font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">

    <!-- Custome styles -->
    <link rel="stylesheet" href="css/own_styles.css">

    <!-- Fonts awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    
    <title>e)(o</title>
  </head>
  <body>

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
      <div class="container-fluid">
        <a class="navbar-brand text-primary" href="index.php" style="width:80px"><i class="fa-solid fa-headphones"></i> e)(o</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="home.php"><i class="fa-solid fa-house"></i> Home</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="songs.php"><i class="fa-solid fa-music"></i> Songs</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="albums.php"><i class="fa-solid fa-compact-disc"></i> Albums</a>
            </li>
          </ul>
          
          <ul class="navbar-nav">
            <form class="d-flex">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-primary" type="submit"><i class="fa-solid fa-magnifying-glass"></i> </button>
            </form>
          </ul>

          <ul class="navbar-nav ml-auto" style="margin-left: 40px; margin-right: 90px;">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#"></a>
            </li>
            
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="fa-solid fa-bell "></i>
                <?php echo $_SESSION['user']; ?>
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="#"><i class="fa-solid fa-gear"></i> Settings</a></li>
                <li><a class="dropdown-item" href="#"><i class="fa-solid fa-user"></i> Account</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="../index.php"><i class="fa-solid fa-right-from-bracket"></i> Sign out</a></li>
              </ul>
            </li>
          </ul>
          
        </div>
      </div>
    </nav>