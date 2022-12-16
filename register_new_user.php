<html>
<head>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<h1> Please register <h2>

<?php
include "db_connect.php";


?>


<form class="form-horizontal" action="process_new_user.php">
<fieldset>

<!-- Form Name -->
<legend>Form Name</legend>

<!-- Search input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="username">Username</label>
  <div class="col-md-4">
    <input id="keyword" name="username" type="text" placeholder="your name" class="form-control input-md" required="">
    <p class="help-block">Enter a username</p>
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="password1">Password</label>
  <div class="col-md-4">
    <input id="keyword" name="password1" type="password" placeholder="Password" class="form-control input-md" required="">
    <p class="help-block">Enter a password</p>
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="password2">Confirm Password</label>
  <div class="col-md-4">
    <input id="keyword" name="password2" type="password" placeholder="Re-enter password" class="form-control input-md" required="">
    <p class="help-block">Confirm the password</p>
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="submit"></label>
  <div class="col-md-4">
    <button id="submit" name="submit" class="btn btn-primary">Create new user</button>
  </div>
</div>

</fieldset>
</form>


<?php
//include "search_keyword.php";
$mysqli->close();

?>
</body>
</html>
