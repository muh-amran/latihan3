<?php
session_start();

require './../layout/auth_header.php';
if (isset($_SESSION['login'])) {
  header("Location: ../dashboard/index.php");
  exit;
}


if (isset($_POST['login'])) {
  $login = login($_POST);
}

?>


<div id="content-wrapper" class="d-flex flex-column">
  <div id="layoutAuthentication">
    <div id="layoutAuthentication_content">
      <main>
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-5">
              <div class="card shadow-lg border-0 rounded-lg mt-5">
                <div class="card-header">
                  <h3 class="text-center font-weight-light my-4">Login Page</h3>
                </div>
                <div class="card-body">
                  <?php if (isset($login['error'])) : ?>
                    <p style="color: red; font-style:italic "><?= $login['pesan']; ?></p>
                  <?php endif; ?>
                  <form method="POST" action="">

                    <div class="form-group"><label class="small mb-1" for="inputUsername">Username</label><input class="form-control py-4" id="username" type="text" placeholder="Enter Username" name="username" value="" autofocus autocomplete="off" /></div>

                    <div class="form-group"><label class="small mb-1" for="inputPassword">Password</label><input class="form-control py-4" id="password" type="password" placeholder="Enter password" name="password" autofocus autocomplete="off" /></div>

                    <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0"><a class="small" href="password.html">Forgot Password?</a><button class="btn btn-primary" type="submit" name="login">Login</button></div>
                  </form>
                  </>
                  <div class="card-footer text-center">
                    <div class="small"><a href="<?= $base_url; ?>auth/registeration">Need an account? Sign up!</a></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
      </main>
    </div>
    <?php
    require './../layout/auth_footer.php';

    ?>