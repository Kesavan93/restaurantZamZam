<?php

include "conet.php";

$q = $_GET['q'];




$sql = "SELECT * FROM calc WHERE calc_cat_id=$q";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row


  while($row = $result->fetch_assoc()) {
	
	$sql2 = "UPDATE calc SET calc_qty=calc_qty+1, calc_total=calc_total+calc_price WHERE calc_cat_id=$q";

	if ($conn->query($sql2) === TRUE) {
		
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
					echo "0 results";
				}
		
		
		
		
		
		
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
		
		$calc1 = $row3['cat_id'];
		$calc2 = $row3['cat_name'];
		$calc3 = $row3['cat_price'];
		
		$sql4 = "INSERT INTO calc (calc_cat_id, calc_name, calc_price, calc_qty, calc_total)
		VALUES('$calc1', '$calc2', '$calc3', 1,'$calc3')";

		if ($conn->query($sql4) === TRUE) {
		
		
		
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
					echo "0 results";
				}
		
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