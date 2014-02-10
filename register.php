<?php
require 'core/init.php';

# If form is submitted
if(isset($_POST['submit'])){

  if(empty($_POST['regUsername']) || empty($_POST['regUsername']) || empty($_POST['regEmail'])){

    $errors[] = 'All fields are required';

  } else {

    #validating user's input with functions
    if($users->user_exists($_POST['regUsername']) === true) {
      $errors[] = 'That username already exists';
    }
    if(!ctype_alnum($_POST['regUsername'])) {
      $errors[] = 'Please enter a username with only alphabets and numbers.';
    }
    if(strlen($_POST['regPassword']) < 6) {
      $errors[] = 'Your password must be at least 6 characters';
    } else if (strlen($_POST['regPassword']) > 18) {
      $errors[] = 'Your password cannot be more than 18 characters long';
    }
    if(filter_var($_POST['regEmail'], FILTER_VALIDATE_EMAIL) === false) {
      $errors[] = 'Please enter a valid email address';
    } else if ($users->email_exists($_POST['regEmail']) === true) {
      $errors[] = 'That email already exists';
    }
    if(!isset($_POST['gender'])) {
      $errors[] = 'You did not select a gender';
    }
  }

  if(empty($errors) === true) {

    $username   = htmlentities($_POST['regUsername']);
    $password   = $_POST['regPassword'];
    $email      = htmlentities($_POST['regEmail']);
    $gender     = $_POST['gender'];

    $users->register($username, $password, $email, $gender); //calling the register function
    header('Location: register.php?success');
    exit();
  }
}
?>
<!doctype html>
<html>
<head>
  <meta type="utf-8">
  <meta name="description" content="">
  <meta name="keywords" content="">
  <meta name="author" content="">

  <title>Life Bird</title>

  <!-- stylesheets -->

  <link rel="stylesheet" type="text/css" href="core/template/css/style.css">
  <link rel="stylesheet" type="text/css" href="core/template/css/font-awesome.css">
  <link rel="stylesheet" type="text/css" href="core/template/css/bootstrap.css">
</head>
<body>
  <div class="container">
    <div class="header">
      <ul class="nav nav-pills pull-right">
        <li><a href="index.html">Home</a></li>
        <li><a href="#">About</a></li>
        <li><a href="profile.html">Profile</a></li>
      </ul>
      <h3 class="text-muted">Life Bird</h3>
    </div>

<div class="container">
  <div class="row">
      <div class="span12">
        <div class="" id="loginModal">
              <div class="modal-body">
                <div class="well">
                  <ul class="nav nav-tabs">
                    <li class="active"><a href="#create" data-toggle="tab">Sign up</a></li>
                    <li><a href="#login" data-toggle="tab">Sign in</a></li>
                  </ul>
                  <div id="myTabContent" class="tab-content">
                    <div class="tab-pane active in" id="create">
                    <br />
                    
                    <?php
                      if(empty($errors) === false) {
                        echo '<div class="alert alert-danger">';
                        echo '<p>' . implode('</p><p>', $errors) . '</p>';
                        echo '</div>';
                      }
                    ?>

                    <?php
                      if(isset($_GET['success']) && empty($_POST['success'])) {
                        echo '<div class="alert alert-info">Marvelous, thanks for taking the time to register. Head over to your emails and have a butchers there for a confirmation email sent from us.</div>';
                      }
                    ?>

                     <form id="tab" action="" method="post">
                          <label>First Name</label><br />
                          <input type="text" name="regFirstName" value="" placeholder="First name..." class="input-xlarge"><br />
                          <label>Last Name</label><br />
                          <input type="text" name="regLastName" value="" placeholder="Last name..." class="input-xlarge"><br />
                          <label>Display Name</label><br />
                          <input type="text" name="regUsername" placeholder="Display name..." value="" class="input-xlarge"><br />
                          <label>Email</label><br />
                          <input type="text" name="regEmail" placeholder="Email..." value="" class="input-xlarge"><br />
                          <label>Password</label><br />
                          <input type="password" name="regPassword" value="" placeholder="Password..." class="input-xlarge"><br />
                          <label>Confirm your password</label><br />
                          <input type="password" name="regConfirmPassword" value="" placeholder="Password again..." class="input-xlarge"><br />
                          <label>Gender</label><br />
                          <input type="radio" name="gender" value="M">Male
                          <input type="radio" name="gender" value="F">Female
                          <br />
                          <label>Country</label><br />
                          <select>
                            <option>Option</option>
                            <option>Option</option>
                            <option>Option</option>
                            <option>Option</option>
                            <option>Option</option>
                            <option>Option</option>
                          </select><br />
                          <label>Age</label><br />
                          <select>
                            <option>MM</option>
                            <option>Option</option>
                            <option>Option</option>
                            <option>Option</option>
                            <option>Option</option>
                            <option>Option</option>
                          </select>
                          <select>
                            <option>DD</option>
                            <option>Option</option>
                            <option>Option</option>
                            <option>Option</option>
                            <option>Option</option>
                            <option>Option</option>
                          </select>
                          <select>
                            <option>YYYY</option>
                            <option>Option</option>
                            <option>Option</option>
                            <option>Option</option>
                            <option>Option</option>
                            <option>Option</option>
                          </select><br />
                          <label>Keywords</label>
                          <small>Community discussions that have keywords you enter here will show first.</small><br />
                          <textarea style="margin: 0px; width: 477px; height: 94px;"></textarea><br />
       
                          <div>
                            <input class="btn btn-primary" type="submit" name="submit"> <small>Have you read the <a href="">TOS</a>?</small>
                          </div>
                      </form>
                    </div>
                    <div class="tab-pane fade" id="login">
                      <form class="form-horizontal" action="" method="POST">
                        <fieldset>
                          <div id="legend">
                            <legend class="">Login</legend>
                          </div>
                          <div class="control-group">
                            <!-- Username -->
                            <label class="control-label" for="username">Username</label>
                            <div class="controls">
                              <input type="text" id="username" name="username" placeholder="" clas="input-xlarge">
                            </div>
                          </div>

                          <div class="control-group">
                            <!-- password -->
                            <label class="control-label" for="password">Password</label>
                              <div class="controls">
                                <input type="password" id="password" name="password" placeholder="" class="input-xlarge">
                              </div>
                              <br />
                          </div>

                          <div class="form-control">
                            <!-- button -->
                            <div class="controls">
                              <button class="btn btn-success">Login</button>
                            </div>
                          </div>
                        </fieldset>
                      </form>
                    </div>
                </div>
              </div>
            </div>
        </div>
  </div>
</div>
  <div class="footer">
    <p>&copy; lifebird.net 2014</p>
  </div>
</div>
      <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="core/template/js/bootstrap.min.js"></script>
</body>
</html>