<?php
	error_reporting(E_ALL);
	ini_set("display_errors", 1);

	echo "<table>";

	for($i = 0;  $i <= 100; $i++)
	{
		echo "<tr>";
		
		for($j = 0; $j <=100; $j++)
		{
			if(($i == 0) && ($j == 0))
			{
				echo "<td style=\"text-align: center; padding: 4px\"> </td>";
			}
			else if($i == 0)
			{
				echo "<th style=\"text-align: center; padding: 4px\">" . $j . "</th>";
			}
			else if($j == 0)
			{
				echo "<th style=\"text-align: center; padding: 4px\">" . $i . "</th>";
			}
			else
			{
				echo "<td style=\"text-align: center; padding: 4px\">" . ($i*$j) . "</td>";
			}
		}
		
		echo "</tr>";
	}
	
	echo "</table>";
?>
