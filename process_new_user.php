<?php
include "db_connect.php";

$new_username = addslashes($_GET['username']);
$new_password1 = addslashes($_GET['password1']);
$new_password2 = addslashes($_GET['password2']);

$hashed_password = password_hash($new_password1,PASSWORD_DEFAULT);

echo "$new_username . $new_password1 . $new_password2";

if ($new_password1 != $new_password2){
	echo "Passwords don't match. Try again.";
	exit;
}

$sql = "SELECT * FROM users where username = '$new_username'";
$result = $mysqli->query($sql) or die(mysqli_error($mysqli));

if ($result->num_rows > 0){
	echo "The username " . $new_username . " already exists.";
	exit;
}

	
//$sql = "INSERT INTO users (id,username,password) VALUES (null,'$new_username','$hashed_password')";

$stmt = $mysqli->prepare("INSERT INTO users (id,username,password) VALUES (null,?,?)");
$stmt->bind_param("ss", $new_username, $hashed_password);
$result = $stmt->execute();

//$result = $mysqli->query($sql) or die(mysqli_error($mysqli));

if($result){
	echo "Registration successfull.";
}
else{
	echo "Something went wrong. Not Registered";
}


echo "<br><a href= 'index.php'>Return to main</a>";
?>