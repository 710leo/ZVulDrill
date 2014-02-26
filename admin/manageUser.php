<?php 
include_once('../sys/config.php');

if (isset($_SESSION['admin'])) {
	include_once('../header.php');
	$query = "SELECT * FROM users ORDER BY user_id";
	$data = mysqli_query($dbc,$query) or die('Error');
	mysqli_close($dbc);
?>
<table class="items table">
	<thead>
	<tr>
		<th id="yw0_c0">Name</th>
		<th id="yw0_c4">Manege</th>
	</thead>
	<tbody>
<?php while ($users = mysqli_fetch_array($data)) {
	$html_user_name = htmlspecialchars($users['user_name']);
?>
	<tr class="odd">
		<td><?php echo $html_user_name;?></td>
		<td><a href="delUser.php?id=<?php echo $users['user_id'];?>">删除</a></td>
	</tr>
<?php } ?>
</tbody>
</table>
<a href="manage.php">返回</a>
<?php 
require_once('../footer.php');
}
else {
	not_find($_SERVER['PHP_SELF']);
}
 ?>