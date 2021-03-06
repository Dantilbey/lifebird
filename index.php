<?php
require 'core/init.php';
$general->logged_in_protect();
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
<?php include 'includes/nav.php'; ?>


    <div class="jumbotron">
      <h1>And it all begins</h1>
      <p class="lead">Life Bird development has officialy started! We've begged, borrowed and stole (not literally) to make it to this point! We would like to hope that everyone that visits this page will stay around for the journey, it's going to be a bone breaking one, I can promise you that. Let's get started!</p>
      <p><a class="btn btn-lg btn-success" href="register.php" role="button"><i class="fa fa-truck"></i> Sign up today</a></p>
    </div>

    <div class="row marketing">
      <div class="col-lg-6">
        <h4>What is Life Bird?</h4>
        <p>Life Bird allows users to find, discuss, track and share their achievements with the life bird community.</p>
      </div>

      <div class="col-lg-6">
        <h4>How much is membership?</h4>
        <p>Absolutely nothing, you handsome devil.</p>

        <h4>Can I help you out?</h4>
        <p>Sure you can! Fork us on <a href="">Git Hub</a> or send us an <a href="">email</a> with a good word or two!</p>

        <h4>This doesn't work!</h4>
        <p>We're working on creating the best software out there, not everything will work because we're constantly upgrading the software. If you spot something dodgy, please don't be afraid to <a href="">contact us</a>.</p>
      </div>
    </div>

    <div class="footer">
      <p>&copy; lifebird.net 2014</p>
    </div>
  </div>
</body>
</html>