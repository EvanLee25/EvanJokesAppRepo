<head>

<link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
  <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#accordion" ).accordion();
  } );
  </script>
  
  <style>
	* {
		font-family:Arial, Helvetica, sans-serrif;
	}
	</style>
  
  
</head>

<?php

include "db_connect.php";

$keywordfromform = addslashes($_GET["keyword"]);
//echo $keywordfromform;

//search for chicken
echo "<h1> Show all jokes with the word $keywordfromform. <h1>";
$sql = "SELECT JokeID, Joke_question, Joke_answer, user_id, username FROM joke_table JOIN users ON users.id = joke_table.user_id WHERE Joke_question LIKE '%" .$keywordfromform. "%'";
$result = $mysqli->query($sql);
?>

<div id="accordion">

<?php
if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    //echo "Joke ID: " . $row["JokeID"]. " - Joke Question: " . $row["Joke_question"]. " " . $row["Joke_answer"]. "<br>";
	echo "<h4> $row[Joke_question] </h4>";
	echo "<div><p>$row[Joke_answer] --Submitted by user $row[username]</p></div>";
  }
} else {
  echo "0 results";
}


?>

</div>