  <?php if($general->logged_in()) { ?>
    <?php
    $username   = $user['username']; // using the $user variable defined in init.php and getting the username.
    ?> 
  <div class="container">
    <div class="header">
      <ul class="nav nav-pills pull-right">
        <li><a href="index.php">Home</a></li>
        <li><a href="../logout.php">logout</a></li>
        <li><a href="profile.html">Welcome, <?php echo $username; ?></a></li>
      </ul>
      <h3 class="text-muted">Life Bird</h3>
    </div>
    <?php } else {?>
  <div class="container">
    <div class="header">
      <ul class="nav nav-pills pull-right">
        <li><a href="index.php">Home</a></li>
        <li><a href="#">About</a></li>
        <li><a href="profile.html">Profile</a></li>
      </ul>
      <h3 class="text-muted">Life Bird</h3>
    </div>
    <?php } ?>