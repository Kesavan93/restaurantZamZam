<?php

include "conet.php";

$q = $_GET['q'];

$sql = "SELECT * FROM category WHERE cat_menu_id=$q";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row


  while($row = $result->fetch_assoc()) {
	echo "<button id='catbtn' type='button' value=". $row['cat_id'] ." onclick='addItem(". $row['cat_id'] .")'>" . $row['cat_name'] . "</button><br/>";
  }
} else {
  echo "0 results";
}
$conn->close();




?>