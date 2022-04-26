<?php include_once "templates/header.php"; ?>
    
<?php
  
  if(isset($_POST['login_button'])){
    $user_email = $_POST['email'];
    $user_pass = $_POST['password'];

    require_once './config/connection.php';
    $sql_check = mysqli_query($con, "SELECT * FROM users WHERE email='$user_email' AND password='$user_pass'");
    if(mysqli_num_rows($sql_check)>0){
      $user_data = mysqli_fetch_assoc($sql_check);
      if($user_data['role'] == 'user'){
        session_start();
        $_SESSION['user'] = $user_data['name'];
        setcookie("login_msg", $_SESSION['user'], time()+(10));
        header('location: music_store/index.php');
      }
      elseif($user_data['role'] == 'admin'){
        header('location: admin/index.php');
      }
    }
    else{
      $msg = '<div class="alert alert-danger mt-5" role="alert"> Your password is incorrect. </div>';

    }
  }
?>

<div class="container text-center">
    <div class="row">
        <div class="col-sm-5">
            
        </div>
        <div class="col-sm-2 ch_position">
            <i class="fa-solid fa-headphones fa-4x mb-3"></i>
            <h2 class="mb-3">Login To e)(o</h2>
            <form method="post">
                <div class="mb-3">
                    <input type="email" class="form-control" id="login_email" name="email" aria-describedby="emailHelp" placeholder="Enter email">
                    <span class="ch_error" id="login_email_error" style="display:block" "></span>
                    <div id="emailHelp" class="form-text"><i class="fa-solid fa-lock"></i> We'll never share your email with anyone.</div>
                </div>
                <div class="mb-3">
                    <input type="password" class="form-control" id="login_pass" name="password" placeholder="Password">
                    <span class="ch_error" id="login_pass_error"></span>
                </div>
                <button type="submit" class="btn blue btn-block" id="login_but" name="login_button" style="width: 100%">Log in</button>
            </form>
            <span style="float:left"><a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#register" style="text-decoration:none">New To Here?</a></span>
            <span style="float:right"><a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#forgot" style="text-decoration:none">Forgot Password!</a></span>
            <?php echo @$msg; ?>
        </div>
        <div class="col-sm-5">
            
        </div>
    </div>
</div>

<!-- Register modal -->
<div class="modal" id="register" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title"><i class="fa-solid fa-headphones "></i> Register To e)(o</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="model_close"></button>
      </div>
      <div class="modal-body">
        <div class="container">
            <form id="register_form">
                <div class="mb-3">
                    <input type="text" class="form-control" id="user_name" name="user_name" aria-describedby="emailHelp" placeholder="Enter your username">
                    <span class="ch_error" id="name_error"></span>
                </div>
                <div class="mb-3">
                    <input type="email" class="form-control" id="user_email" name="user_email" aria-describedby="emailHelp" placeholder="Enter email">
                    <span class="ch_error" id="email_error"></span>
                </div>
                <div class="mb-3">
                    <input type="password" class="form-control" id="user_pass" name="user_pass" placeholder="Password">
                    <span class="ch_error" id="pass_error"></span>
                </div>
            </form>
        </div>
      </div>
      <div class="modal-footer">
        <p class="float-left" id="msg"></p>
        <button type="button" class="btn red" id="verify_ajax">Register</button>
        <button class="btn red" type="button" disabled id="snipper">
          <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
          Please Wait...
        </button>
      </div>
    </div>
  </div>
</div>

<!-- Forgot password modal -->
<div class="modal" id="forgot" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title"><i class="fa-solid fa-key"></i> Forgot Password</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="model_close1"></button>
      </div>
      <div class="modal-body">
        <div class="container">
            <form id="forgot_pass_form">
                <div class="mb-3">
                    <input type="email" class="form-control" id="verify_email" name="verify_email" aria-describedby="emailHelp" placeholder="Enter email">
                    <span class="ch_error" id="email_error1"></span>
                  </div>
                <div class="mb-3" id="pass_filed">
                    <input type="password" class="form-control" id="verify_pass" name="verify_pass" placeholder="New password">
                    <span class="ch_error" id="pass_error1"></span>
                </div>
            </form>
        </div>
      </div>
      <div class="modal-footer">
        <p class="float-left" id="msg1"></p> 
        <button type="button" class="btn red" id="next">Next</button>
        <button type="button" class="btn red" id="pass_but">Change Password</button>
      </div>
    </div>
  </div>
</div>

<?php include_once "templates/footer.php"; ?>

    