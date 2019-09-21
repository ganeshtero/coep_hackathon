<?php
include 'db.php';
$q1 = "SELECT * FROM `time_saved` WHERE 1";
$r1 = mysqli_query($con,$q1);
while($row1 = mysqli_fetch_array($r1))
{
	$time_saved = $row1['Time_saved'];
	$id = $row1['PC_ID'];
	$power_saved_per_sec = 130; //Watts
	$total_energy_saved = $power_saved_per_sec*$time_saved; //Watts * second
	$co2_emitted_per_hour = 0.95; //kilogram
	$total_co2_saved = $co2_emitted_per_hour*$time_saved/3600; //in kg 
	$rounded_co2_saved = round($total_co2_saved,2);
	$per_watt_cost = 9; // in rupees
	$total_money_saved = $per_watt_cost * $total_energy_saved;
	// $q2 = "UPDATE `time_saved` SET `total_energy_saved_in_joules`=$total_energy_saved,`total_co2_saved_in_kgs`=$rounded_co2_saved,`total_money_saved_in_rupees`=$total_money_saved WHERE `PC_ID`='$id'";
	// $r2 = mysqli_query($con, $q2);
}
?>