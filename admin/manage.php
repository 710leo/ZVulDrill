<?php 
include_once('../sys/config.php');

if (isset($_SESSION['admin'])) {
include_once('../header.php');

?>
<table class="items table">
<thead>
<tr>
<th id="yw0_c0">管理</th>
<th id="yw0_c1">入口</th>
</thead>
<tbody>
	<tr class="odd">
		<td>用户</td>
		<td><a href="manageUser.php">进入</a></td>
	</tr>
	<tr class="odd">
		<td>评论</td>
		<td><a href="manageCom.php">进入</a></td>
	</tr>
</tbody>
</table>
<?php
require_once('../footer.php');
}
else {
	not_find($_SERVER['PHP_SELF']);
}
?>
