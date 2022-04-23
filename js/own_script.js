$(document).ready(function(){

    $("#snipper").hide();
    $("#pass_filed").hide();
    $("#pass_but").hide();
    $("#pass_incorrect").hide();

    // Register close----------------------------------------------------
    $("#model_close").on('click',function(){
        $("#msg").hide();
        $("#register_form")[0].reset();
        $("#name_error").hide();
        $("#email_error").hide();
        $("#pass_error").hide();
        location.reload();
    });

    // Forgot password close---------------------------------------------
    $("#model_close1").on('click',function(){
        $("#msg1").hide();
        $("#forgot_pass_form")[0].reset();
        $("#email_error1").hide();
        $("#pass_error1").hide();
        location.reload();
    });

    // Register-----------------------------------------------------------
    $("#verify_ajax").on('click',function(){
        // username-------------------------------------------------
        var name = $("#user_name").val();
        var reg_name = /^[a-zA-Z]{1,30}$/;

        if(name==""){
            $("#name_error").html('*Required Name');
            $("#name_error").css('color', 'red');
            return false;
        }
        if(!(name.match(reg_name))){
            $("#name_error").html('*Enter Valid Name');
            $("#name_error").css('color', 'red');
            return false;
        }
        $("#name_error").html('');

        // useremail-------------------------------------------------
        var email = $("#user_email").val();
        var reg_email = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

        if(email==""){
            $("#email_error").html('*Required Email');
            $("#email_error").css('color', 'red');
            return false;
        }
        if(!(email.match(reg_email))){
            $("#email_error").html('*Enter Valid Email');
            $("#email_error").css('color', 'red');
            return false;
        }
        $("#email_error").html('')

        // password--------------------------------------------------
        var pass = $("#user_pass").val();
        if(pass == ''){
            $("#pass_error").html('*Required Password');
            $("#pass_error").css('color', 'red');
            return false;
        }
        $("#pass_error").html('');
        $("#verify_ajax").hide();
        $("#snipper").show();

        // ajax operation----------------------------------------------
        $.ajax({
            type: 'POST',
            url: 'web_serv/register.php',
            data:$("#register_form").serialize(),
            success: function(result){
                if(result.status=='fail'){
                    $("#email_error").html('*Email Existed');
                    $("#email_error").css('color', 'red');
                    $("#verify_ajax").show();
                    $("#snipper").hide();
                }
                else {
                    if(result.status=='success'){
                        $("#msg").html('Created your account! ');
                        $("#register_form")[0].reset();
                        $("#verify_ajax").show();
                        $("#snipper").hide();

                    }
                }
            }
        });
    });


    // Forgot Password----------------------------------------------------
    // Verify Email--------------------------------------------------
    $("#next").on('click',function(){
        var verify_user_email = $("#verify_email").val();
        var reg_email1 = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

        if(verify_user_email==""){
            $("#email_error1").html('*Required Email');
            $("#email_error1").css('color', 'red');
            $("#msg1").html('');
            return false;
        }
        if(!(verify_user_email.match(reg_email1))){
            $("#email_error1").html('*Enter Valid Email');
            $("#email_error1").css('color', 'red');
            $("#msg1").html('');
            return false;
        }
        $("#email_error1").html('')

        $.ajax({
            type: 'POST',
            url: 'web_serv/verify_email.php',
            data: $("#forgot_pass_form").serialize(),
            success: function(result){
                if(result.status=='success'){
                    $("#pass_filed").show(200);
                    $("#pass_but").show();
                    $("#next").hide();
                    $("#msg1").html('');
                }
                else {
                    if(result.status=='fail'){
                        $("#msg1").html('Email Not Found');
                        $("#msg1").css('color','red');
                        
                    }
                }
            }
        })

    });

    // Change Password--------------------------------------------------
    $("#pass_but").on('click', function(){
        var pass1 = $("#verify_pass").val();
        if(pass1 == ''){
            $("#pass_error1").html('*Required Password');
            $("#pass_error1").css('color', 'red');
            return false;
        }
        $("#pass_error1").html('');

        $.ajax({
            type: 'POST',
            url: 'web_serv/update_password.php',
            data: $("#forgot_pass_form").serialize(),
            success: function(result){
                if(result.status=='success'){
                    $("#msg1").html('Password Updated Successfully');
                    $("#msg1").css('color','green');
                }
                else{
                    if(result.status=='fail'){
                        $("#msg1").html('Password Not Updated');
                        $("#msg1").css('color','red');
                    }                 
                    
                }
            }

        });

    });

    //  Login--------------------------------------------------------------
    $("#login_but").on('click',function(){

        // email------------------------------------------------------------
        var login_email = $("#login_email").val();
        var reg_email2 = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

        if(login_email==""){
            $("#login_email_error").html('*Required Email');
            $("#login_email_error").css('color', 'red');
            $("#msg1").html('');
            return false;
        }
        if(!(login_email.match(reg_email2))){
            $("#login_email_error").html('*Enter Valid Email');
            $("#login_email_error").css('color', 'red');
            $("#msg1").html('');
            return false;
        }
        $("#login_email_error").html('')


        // password-----------------------------------------------------------
        var login_password = $("#login_pass").val();

        if(login_password == ''){
            $("#login_pass_error").html('*Required Password');
            $("#login_pass_error").css('color', 'red');
            return false;
        }
        $("#login_pass_error").html('');


    });



})
