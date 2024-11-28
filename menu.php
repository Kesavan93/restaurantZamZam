<?php

include "conet.php";

$sql = "SELECT * FROM menu";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row


  while($row = $result->fetch_assoc()) {
	echo "<button id='menbtn' type='button' value=". $row['menu_id'] ." onclick='showCat(". $row['menu_id'] .")'>" . $row['menu_name'] . "</button><br/>";
  }
} else {
  echo "0 results";
}
$conn->close();




?>