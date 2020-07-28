<!DOCTYPE html>
<html lang="en">
<head><meta charset="utf-8" /></head><body>
	<style>
		#one{
			background-color: green;
		}
	</style>
<?php
echo "<div id='one'>";
echo "Data Type in PHP";
//php strings
$fname = "jagriti";
$lname = "srivastava";
echo $fname." ".$lname."<br>";
echo var_dump($fname)."<br>";

//php integer
$x = 5985;
echo $x;
echo var_dump($x);

//php float
$x = 10.365;
echo $x." ".var_dump($x);

//php boolean
$x = true;
$y = false;
echo $x." ".var_dump($x);
echo $y." ".var_dump($y);

//php array
$values = array("jags","abc",123,12.333);
echo $values." ".var_dump($values);
echo "</div>";
?>

</body></html>