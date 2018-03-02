<?php

	error_reporting(E_ALL);
	ini_set("display_errors", 1);

	$item1 = $_POST["item1"];
	$item2 = $_POST["item2"];
	$item3 = $_POST["item3"];
	$username = $_POST["username"];
	$password = $_POST["password"];
	$shipping = $_POST["shipping"];
	
	$shipping = explode(" ", $shipping);
	
	$cost = ($item1*5)+($item2*10)+($item3*20);
	
	if($shipping[0] == "$5.00")
	{
		$cost += 5;
	}
	else if($shipping[0] == "$50.00")
	{
		$cost += 50;
	}

	echo "<link href=\"style.css\" rel=\"stylesheet\" type=\"text/css\">";
	
	echo "Username: " . $username . "<br>";
	echo "Password: " . $password . "<br><br><br>";
	
	echo "<table>";
	
		echo "<tr>";
		
			echo "<th>";
			echo "</th>";
			
			echo "<th>";
				echo "Quantity";
			echo "</th>";
			
			echo "<th>";
				echo "Cost Per Item";
			echo "</th>";
			
			echo "<th>";
				echo "Sub Total";
			echo "</th>";
		
		echo "</tr>";
		
		echo "<tr>";
		
			echo "<th>";
				echo "Item 1";
			echo "</th>";
			
			echo "<td>";
				echo $item1;
			echo "</td>";
			
			echo "<td>";
				echo "$5.00";
			echo "</td>";
			
			echo "<td>";
				echo "$" . 5*$item1 . ".00";
			echo "</td>";
		
		echo "</tr>";
		
		echo "<tr>";
		
			echo "<th>";
				echo "Item 2";
			echo "</th>";
			
			echo "<td>";
				echo $item2;
			echo "</td>";
			
			echo "<td>";
				echo "$10.00";
			echo "</td>";
			
			echo "<td>";
				echo "$" . 10*$item2 . ".00";
			echo "</td>";
		
		echo "</tr>";
		
		echo "<tr>";
		
			echo "<th>";
				echo "Item 3";
			echo "</th>";
			
			echo "<td>";
				echo $item3;
			echo "</td>";
			
			echo "<td>";
				echo "$20.00";
			echo "</td>";
			
			echo "<td>";
				echo "$" . 20*$item3 . ".00";
			echo "</td>";
		
		echo "</tr>";
		
		echo "<tr>";
		
			echo "<th>";
				echo "Shipping";
			echo "</th>";
			
			if($shipping[0] == "Free")
			{
				echo "<td colspan=\"2\">";
					echo $shipping[1] . " " . $shipping[2];
				echo "</td>";
			
				echo "<td>";
					echo "$0";
				echo "</td>";
			}
			else
			{
				echo "<td colspan=\"2\">";
					echo $shipping[1] . " " . $shipping[2];
				echo "</td>";
			
				echo "<td>";
					echo $shipping[0];
				echo "</td>";
			}
		
		echo "</tr>";
		
		echo "<tr>";
		
			echo "<th colspan=\"3\">";
				echo "Total Cost";
			echo "</th>";
			
			echo "<th>";
				echo "<b>$" . $cost . ".00";
			echo "</th>";
		
		echo "</tr>";
	
	echo "</table>";
?>
