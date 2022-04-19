<?php include_once "templates/header.php"; ?>
    
<div class="container text-center">
    <div class="row">
        <div class="col-sm-5">
            
        </div>
        <div class="col-sm-2 ch_position">
            <i class="fa-solid fa-headphones fa-4x mb-3"></i>
            <h2 class="mb-3">Login To e)(o</h2>
            <form>
                <div class="mb-3">
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                    <div id="emailHelp" class="form-text"><i class="fa-solid fa-lock"></i> We'll never share your email with anyone.</div>
                </div>
                <div class="mb-3">
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div>
                <button type="button" class="btn blue btn-block" style="width: 100%">Submit</button>
            </form>
            <span style="float:left"><a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#register" style="text-decoration:none">New To Here?</a></span>
            <span style="float:right"><a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#forgot" style="text-decoration:none">Forgot Password!</a></span>
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
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="container">
            <form id="forgot_pass_form">
                <div class="mb-3">
                    <input type="email" class="form-control" id="verify_email" name="verify_email" aria-describedby="emailHelp" placeholder="Enter email">
                    <span class="ch_error" id="email_error1"></span>
                  </div>
                <div class="mb-3" id="pass_filed">
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="New password">
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

    