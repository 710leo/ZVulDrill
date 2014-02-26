<?php
include_once('../sys/config.php');

if (isset($_SESSION['admin']) && !empty($_GET['id'])) {

	$clean_id = clean_input($_GET['id']);
	$query = "DELETE FROM comment WHERE comment_id = '$clean_id' LIMIT 1";
	mysqli_query($dbc,$query) or die('Error');
	mysqli_close($dbc);
	header('Location: manageCom.php');
}
else {
	not_find($_SERVER['PHP_SELF']);
}	
?>