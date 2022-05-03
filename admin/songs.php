<?php include_once "templates/header.php"; ?>

<?php
    
    $sql_user_data = mysqli_query($con, "SELECT * FROM users WHERE name='".$_SESSION['user']."'");
    $final_result = mysqli_fetch_assoc($sql_user_data);
    ?>


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