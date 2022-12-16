<?php
$sql = "SELECT JokeID, Joke_question, Joke_answer FROM Joke_table";
$result = $mysqli->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Joke ID: " . $row["JokeID"]. " - Joke Question: " . $row["Joke_question"]. " " . $row["Joke_answer"]. "<br>";
  }
} else {
  echo "0 results";
}
?>