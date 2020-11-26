<?php
require_once('include/dbfunctions.php');
$db = new dbfunctions();

echo "building table...";
for ($i = 0; $i < 20000; $i++) {
	$db->insertNumber(rand(1, 1000));
}
echo "done!";

?>
