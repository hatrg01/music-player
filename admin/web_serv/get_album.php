<?php
    require_once '../config/connection.php';
    $id=1;
    $sql_get_album = mysqli_query($con, "SELECT * FROM albums");
    if(mysqli_num_rows($sql_get_album)>0){
        echo "aaa";
        while($list_album = mysqli_fetch_assoc($sql_get_album)){
            echo '<tr>
                    <th scope="row">'.$id++.' </th>
                    <td>'.$list_album['alb_name'].'</td>
                    <td>'.$list_album['alb_artist'].'</td>
                    <td>'.$list_album['alb_type'].'</td>
                    <td><a href="javascript:void(0)" rel='.$list_album['alb_id'].' class="edit"><i class="fa-solid fa-square-pen"></i></a></td>
                    <td><a href="javascript:void(0)" rel='.$list_album['alb_id'].' class="delete"><i class="fa-solid fa-trash-can"></i></a></td>
                </tr>';
        }
    }
    else{
        echo "No Albums Found";
    }
?>



<script type="text/javascript">
    $(document).ready(function(){

        $(".edit").on('click', function(){

            var alb_id = $(this).attr('rel');
            
            $("#edit_album").show()

            $.ajax({
                type: 'POST',
                url: 'web_serv/edit_album.php',
                data: {album_id: alb_id},
                success: function(result){
                    $("#edit_album_form").html(result);
                }
            });

            

        });

        $("#edit_button").on('click', function(){
            $.ajax({
                type:'POST',
                url: 'web_serv/update_album.php',
                data: $("#edit_album_form").serialize(),
                success: function(result){
                    $("#msg").html('Updated Album!')
                }
            });

            
        });


        $(".delete").on('click', function(){

            var alb_id = $(this).attr('rel');
            

            $.ajax({
                type: 'POST',
                url: 'web_serv/delete_album.php',
                data: {album_id: alb_id},
                success: function(result){
                    alert(result);
                    location.reload()
                }
            });

        });


    });

</script>