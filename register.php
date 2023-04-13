<?php
include_once('connection.php');

if (isset($_POST['register'])) {
  $username = $_POST['username'];
  $email = $_POST['email'];
  $country = $_POST['country'];
  $password = $_POST['password'];
  $Erorrs = [];

  function isSelected($value)
  {
    if ($_POST['country'] == $value) {
      echo "selected";
    } else {
    }
  }
  if (empty($username)) {
    $Erorrs['user_required'] = "username Is Required";
  }
  if (empty($email)) {
    $Erorrs['email_required'] = "email Is Required";
  }
  if (empty($country)) {
    $Erorrs['country_required'] = "country Is Required";
  }
  if (empty($password)) {
    $Erorrs['password_required'] = "password Is Required";
  }
  if (strlen($password) < 5) {
    $Erorrs['strong_pass'] = "Password Must Be Greater Than 5 character or number";
  }
  if (!empty($username)) {
    $rep = $connection->query("select * from users where username='$username'");
    // $rep=$rep->fetch(PDO::FETCH_ASSOC);
    if ($rep->rowCount() > 0) {
      $Erorrs['repeat_username'] = "Username Is Repeated ,please Enter Anther Username";
    }
  }
  if (empty($Erorrs)) {
    $connection->query("INSERT INTO `users` (`id`, `username`, `email`, `password`, `country`) VALUES (NULL, '$username', '$email', '$password', '$country');");
  } else {
    // echo "<pre>";
    // print_r($Erorrs);
    // echo "</pre>";
  }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Register</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="vendors/base/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="images/favicon.png" />
</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth px-0">

        <div class="row w-100 mx-0">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left py-5 px-4 px-sm-5">
              <?php
              if ((isset($_POST['register']) and empty($Erorrs))) {
                echo "<p class='alert alert-success'>User $username Is Added </p>";
              }
              ?>
              <h4>New here?</h4>
              <h6 class="font-weight-light">Signing up is easy. It only takes a few steps</h6>
              <form class="pt-3" method="POST" name="register">
                <div class="form-group">
                  <input type="text" name="username" class="form-control form-control-lg" value="<?php echo (!empty($Erorrs) and !empty($username)) ? $username : ''; ?>" id="username" placeholder="Username">
                </div>
                <?php
                if (isset($Erorrs['user_required'])) {
                  echo "<p class='alert alert-danger'> " . $Erorrs['user_required'] . "</p>";
                }
                if (isset($Erorrs['repeat_username'])) {
                  echo "<p class='alert alert-danger'> " . $Erorrs['repeat_username'] . "</p>";
                }
                ?>
                <div class="form-group">
                  <input type="email" name="email" class="form-control form-control-lg" value="<?php echo (!empty($Erorrs) and !empty($email)) ? $email : ''; ?>" id="email" placeholder="Email">
                </div>
                <?php
                if (isset($Erorrs['email_required'])) {
                  echo "<p class='alert alert-danger'> " . $Erorrs['email_required'] . "</p>";
                }
                ?>
                <div class="form-group">
                  <select name="country" class="form-control form-control-lg" id="country">
                    <option value="">Country</option>
                    <option <?php isset($_POST['register']) ? isSelected("United States of America") : ''; ?> value="United States of America">United States of America</option>
                    <option <?php isset($_POST['register']) ? isSelected("United Kingdom") : ''; ?> value="United Kingdom">
                      UnitedKingdom</option>
                    <option <?php isset($_POST['register']) ? isSelected("Egypt") : ''; ?> value="Egypt">Egypt</option>
                    <option <?php isset($_POST['register']) ? isSelected("India") : ''; ?> value="India">India</option>
                    <option <?php isset($_POST['register']) ? isSelected("Germany") : ''; ?> value="Germany">Germany</option>
                    <option <?php isset($_POST['register']) ? isSelected("Argentina") : ''; ?> value="Argentina">Argentina
                    </option>
                  </select>
                </div>
                <?php
                if (isset($Erorrs['country_required'])) {
                  echo "<p class='alert alert-danger'> " . $Erorrs['country_required'] . "</p>";
                }
                ?>
                <div class="form-group">
                  <input type="password" name="password" class="form-control form-control-lg" value="<?php echo (!empty($Erorrs) and !empty($password)) ? $password : ''; ?>" id="password" placeholder="Password">
                </div>
                <?php
                if (isset($Erorrs['password_required'])) {
                  echo "<p class='alert alert-danger'> " . $Erorrs['password_required'] . "</p>";
                }
                if (isset($Erorrs['strong_pass']) and !empty($password)) {
                  echo "<p class='alert alert-danger'> " . $Erorrs['strong_pass'] . "</p>";
                }
                ?>
                <div class="mb-4">
                  <div class="form-check">
                    <label class="form-check-label text-muted">
                      <input type="checkbox" name="iagree" value="1" class="form-check-input">
                      I agree to all Terms & Conditions
                    </label>
                  </div>
                </div>
                <div class="mt-3">
                  <input type="submit" name="register" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" value="SIGN UP" />
                </div>
                <div class="text-center mt-4 font-weight-light">
                  Already have an account? <a href="login.php" class="text-primary">Login</a>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="vendors/base/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- inject:js -->
  <script src="js/off-canvas.js"></script>
  <script src="js/hoverable-collapse.js"></script>
  <script src="js/template.js"></script>
  <!-- endinject -->
</body>

</html>