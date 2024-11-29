<?php

include "conet.php";

if(!empty($_GET['r'])) {
	$r = $_GET['r'];
	$sql = "DELETE FROM calc WHERE calc_cat_id=$r";

	if ($conn->query($sql) === TRUE) {
	  
	  	$sql = "SELECT * FROM calc ORDER BY calc_id DESC;";
		$result = $conn->query($sql);

		if ($result->num_rows > 0) {
		// output data of each row
		$kaunter = 1;
		
		echo "<table id='customers' border='1'>
		<tr>
		<th>BILL.NO</th>
		<th>ORDER</th>
		<th>PRICE (RM)</th>
		<th>QTY</th>
		<th>SUBTOTAL (RM)</th>
		</tr>";
		while($row = $result->fetch_assoc()) {
			
			
			echo "<tr>";
			echo "<td><button id='rembtn' type='button' value=". $row['calc_cat_id'] ." onclick='remItem(". $row['calc_cat_id'] .")'>" . $kaunter . "</button></td>";
			echo "<td>" . $row['calc_name'] . "</td>";
			echo "<td align='right'>" . $row['calc_price'] . "</td>";
			echo "<td align='center'>" . $row['calc_qty'] . "</td>";
			echo "<td align='right'>" . $row['calc_total'] . "</td>";
			echo "</tr>";					
			
			$kaunter++;
		}
		echo "</table>";
		
		} else {
			echo "";
		}
	  
	  
	} else {
	  echo "Error deleting record: " . $conn->error;
	}
}else{
	
	
	$sql = "SELECT * FROM calc ORDER BY calc_id DESC;";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
	// output data of each row
	$kaunter = 1;
	
	echo "<table id='customers' border='1'>
	<tr>
	<th>BILL.NO</th>
	<th>ORDER</th>
	<th>PRICE (RM)</th>
	<th>QTY</th>
	<th>SUBTOTAL (RM)</th>
	</tr>";
	while($row = $result->fetch_assoc()) {
		
		
		echo "<tr>";
		echo "<td><button id='rembtn' type='button' value=". $row['calc_cat_id'] ." onclick='remItem(". $row['calc_cat_id'] .")'>" . $kaunter . "</button></td>";
		echo "<td>" . $row['calc_name'] . "</td>";
		echo "<td align='right'>" . $row['calc_price'] . "</td>";
		echo "<td align='center'>" . $row['calc_qty'] . "</td>";
		echo "<td align='right'>" . $row['calc_total'] . "</td>";
		echo "</tr>";					
		
		$kaunter++;
	}
	echo "</table>";
	
	} else {
		echo "";
	}
	
	
}

?>