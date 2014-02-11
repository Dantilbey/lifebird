  <?php if($general->logged_in()) { ?>
    <?php
    $username   = $user['username']; // using the $user variable defined in init.php and getting the username.
    ?> 
  <div class="container">
    <div class="header">
      <ul class="nav nav-pills pull-right">
        <li><a href="index.php">Home</a></li>
        <li><a href="/logout.php">logout</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo $username; ?> <b class="caret"></b></a>
        <ul class="dropdown-menu">
          <li><a href="/profile/settings">Settings</a></li>
          <li><a href="/logout.php">Logout</a></li>
        </ul>
        </li>
      </ul>
      <h3 class="text-muted">Life Bird</h3>
    </div>
    <?php } else {?>
  <div class="container">
    <div class="header">
      <ul class="nav nav-pills pull-right">
        <li><a href="index.php">Home</a></li>
        <li><a href="#">About</a></li>
        <li><a href="profile.php">Profile</a></li>
      </ul>
      <h3 class="text-muted">Life Bird</h3>
    </div>
    <?php } ?>