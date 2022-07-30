$(document).ready(function(){

   

    // Edit close----------------------------------------------------
    $("#album_model_close").on('click',function(){
        $("#edit_album_form")[0].reset();
        $("#album_name_error").hide();
        $("#album_artist_error").hide();
        location.reload();
    });

    // Edit-----------------------------------------------------------
    $("#edit_button").on('click',function(){
        // Album name-------------------------------------------------
        var alb_name = $("#album_name").val();
        if(alb_name==""){
            $("#album_name_error").html('*Required Album Name');
            $("#album_name_error").css('color', 'red');
            return false;
        }
        $("#album_name_error").html('');

        // Album artist-------------------------------------------------
        var alb_artist = $("#album_artist").val();
        if(alb_artist==""){
            $("#album_artist_error").html('*Required Album Artist');
            $("#album_artist_error").css('color', 'red');
            return false;
        }
        $("#album_artist_error").html('')
        
    });


// function get_data(){
    // ajax operation----------------------------------------------
    $.ajax({
        type: 'POST',
        url: 'web_serv/get_album.php',
        success: function(result){
            $("#album_data").html(result);
        }
    });
// }
})
