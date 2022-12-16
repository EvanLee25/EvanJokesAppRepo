<head>

<?php
session_start();

error_reporting(E_ALL);
ini_set('display_errors',1);

include "db_connect.php";

$username = addslashes($_POST['username']);
echo "$username";
$password = addslashes($_POST['password']);
echo "$password";

//echo $keywordfromform;


//$sql = "SELECT id,username,password FROM users WHERE username = '$username' AND password = '$password'";

//echo "SQL = " . $sql . "<br>";

//$result = $mysqli->query($sql);

$stmt = $mysqli->prepare("SELECT id,username,password FROM users WHERE username = ?");
$stmt->bind_param("s", $username);
$stmt->execute();
$stmt->store_result();
$stmt->bind_result($userid,$uname, $pw);

if ($stmt->num_rows == 1){
	echo "Found 1 person with that username <br>";
	$stmt->fetch();
	if(password_verify($password,$pw)){
		echo "The password matches. Nice. <br>";
		echo "Login success<br>";
		$_SESSION['username'] = $username;
		$_SESSION['userid'] = $userid;
		exit;
	}
	else{
		$_SESSION = [];
		session_destroy();
		echo "Password incorrect";
	}
}

else{
  echo "0 results. Nobody found with that username and password.";
  $_SESSION = [];
  session_destroy();
}

echo "Login Failed<br>";

?>

</div>