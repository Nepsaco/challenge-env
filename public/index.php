<?php
require_once('include/dbfunctions.php');
$db = new dbfunctions();
$numberIds = $db->getNumberIds();

$sum = 0;
$count = 0;

foreach($numberIds as $numberId) {
	$number = $db->getNumberById($numberId);
	$sum += $number;
	$count++;
}

echo "Average: " . $sum / $count;
?>
