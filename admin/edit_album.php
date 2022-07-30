<?php include_once "templates/header.php"; ?>

<?php $album_id = 0; ?>

<div class="container mt-2" style="background-color: white">
    <nav aria-label="breadcrumb" style="padding-top: 10px"">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php" style="text-decoration:none;">e)(o admin</a></li>
            <li class="breadcrumb-item active" aria-current="page"><i class="fa-solid fa-square-pen"></i> Edit album</li>
        </ol>
    </nav>
    <hr>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Artist</th>
                <th scope="col">Type</th>
                <th scope="col">Edit</th>
                <th scope="col">Delete</th>
            </tr>
        </thead>
        <tbody id="album_data">            
        </tbody>
    </table>

</div>


<div class="modal" id="edit_album" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title"><i class="fa-solid fa-square-pen"></i> Album</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="album_model_close"></button>
        </div>
        <div class="modal-body">
            <div class="container">
                <form method="post" id="edit_album_form">
                    
                </form>
            </div>
        </div>
        <div class="modal-footer">
            <p class="float-left" id="msg"></p>
            <button type="submit" class="btn red" id="edit_button">Edit</button>
        </div>
        </div>
    </div>
</div>




<?php include_once "templates/footer.php"; ?>