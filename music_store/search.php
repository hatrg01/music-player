<?php include_once 'templates/header.php'; ?>

<div class="container mt-2" style="background-color: white">
    <nav aria-label="breadcrumb" style="padding-top: 10px"">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.php">e)(o</a></li>
        <li class="breadcrumb-item active" aria-current="page"><i class="fa-solid fa-house"></i> Search</li>
    </ol>
    </nav>
    <hr>


    <?php
        $search_key = $_SESSION['key'];
        $sql_check = mysqli_query($con, "SELECT * FROM albums WHERE alb_name LIKE '%$search_key%' OR alb_artist LIKE '%$search_key%'");
        if(mysqli_num_rows($sql_check)>0):
    ?>

        <div class="row">

        <?php
            while($regular_result = mysqli_fetch_assoc($sql_check)):
        ?>

        <div class="col-sm-3 mb-3">
            <div class="card">
                <img src="../admin/img/<?php echo $regular_result['alb_img'] ?>" alt="" class="card-img">
                <div class="card-img-overlay text-white d-flex flex-column justify-content-center ch-back">
                    <h4><a href="" class="text-white"> <?php echo $regular_result['alb_name'] ?> </a></h4>
                    <h6><?php echo $regular_result['alb_artist'] ?></h6>
                    <div class="link d-flex">
                        <a href="" class="card-link text-white" style="text-decoration:none;"><i class="fa-solid fa-headphones"></i> / 0</a>
                        <a href="" class="card-link text-white" style="text-decoration:none;"><i class="fa-solid fa-heart"></i> / 0</a>
                        <a href="" class="card-link text-white" style="text-decoration:none;"><i class="fa-solid fa-comment-dots"></i> / 0</a>
                    </div>
                </div>
            </div>
        </div>

        <?php endwhile ?>

    <?php endif ?>

    <?php
        if(mysqli_num_rows($sql_check)<=0):
    ?>
    <div class="container p-5 mt-3" style="background-color:#51A5CA; text-align: center;">
        <h3 class="text-white">No results found for:</h3>        
        <h1 class="text-white"><?php echo $search_key; ?></h1>
        <img src="img/notfound.jpg" alt="">
    </div>

    <?php endif ?>
    


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