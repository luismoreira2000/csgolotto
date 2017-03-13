<?php 
if (isset($_GET['string'])) {
	$rand = $_GET['string'] / 56.5;
	echo md5($rand);
}
else {
	echo 'Error: Unknown hash rounds! Sorry!';
}
 ?>