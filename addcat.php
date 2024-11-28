<?php

include "conet.php";

$q = $_GET['q'];

$sql = "SELECT * FROM calc WHERE calc_cat_id=$q";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row


  while($row = $result->fetch_assoc()) {
	
	$sql2 = "UPDATE calc SET calc_qty+1, calc_total=calc_total+calc_price WHERE calc_cat_id=$q";

	if ($conn->query($sql2) === TRUE) {
	  echo "Record updated successfully";
	} else {
	  echo "Error updating record: " . $conn->error;
	}
	
		  
#	echo "<button id='catbtn' type='button' value=". $row['cat_id'] ." onclick='addItem()'>" . $row['cat_name'] . "</button><br/>";
  }
} else {
	
	$sql3 = "SELECT * FROM category WHERE cat_id=$q";
	$result3 = $conn->query($sql3);

	if ($result3->num_rows > 0) {
	// output data of each row
	while($row3 = $result3->fetch_assoc()) {
		
		$sql4 = "INSERT INTO calc (calc_cat_id, calc_name, calc_price, calc_qty, calc_total)
		VALUES (".$row3['cat_id'].", ". $row3['cat_name'] .", ". $row3['cat_price'] .", '1',". $row3['cat_price'] .")";

		if ($conn->query($sql4) === TRUE) {
		echo "New record created successfully";
		} else {
		echo "Error: " . $sql4 . "<br>" . $conn->error;
		}		
	}
	} else {
	echo "0 results";
	}
	
}
$conn->close();


?>