<html>
<body>

<?php 



$payRate = $_POST["payRate"];
$shiftDiff= $_POST["shiftDiff"];
$hoursWorked = $_POST["hoursWorked"];
$overtimeHours = $_POST["overtimeHours"];
$incentive = $_POST["incentive"];



	$basePay  = $payRate * $hoursWorked;
	$difCalc  = $shiftDiff * $payRate;
	$difTotal = $difCalc * $hoursWorked;



	$overtimerate = 1.5;
	$overtimePerHour = $overtimerate * $payRate;
	$overtimeTotal = $overtimePerHour * $overtimeHours; 
	
	$otIncentive = $incentive * $overtimeHours; 


$grandTotal = $basePay + $overtimeTotal + $otIncentive; 


print 'Total Gross Base Pay is: $' . $basePay . '. ';

print 'Total Shift Dif for hours base pay is: $' . $difTotal . '. ';

print 'The total amount of money made in overtime is: $' . $overtimeTotal . '. ';

print 'The total amount of overtime incentive made was $' . $otIncentive . '. ';

print 'The grand total of your pacheck was $' . $grandTotal . '. ';

?>
</body>
</html>
