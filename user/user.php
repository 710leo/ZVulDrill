<?php
include_once('../sys/config.php');
if (isset($_SESSION['username'])) {
	include_once('../header.php');
	if (!isset($SESSION['user_id'])) {
		$query = "SELECT * FROM users WHERE user_name = '{$_SESSION['username']}'";
		$data = mysqli_query($dbc,$query) or die('Error!!');
		mysqli_close($dbc);
		$result = mysqli_fetch_array($data);
		$_SESSION['user_id'] = $result['user_id'];
	}

	//净化输出变量
	$html_avatar = htmlspecialchars($_SESSION['avatar']);

	//print_r($_SESSION);
?>
<div class="row">
	<div style="float:left;">
		<img src="<?php echo $html_avatar?>" width="100" height="100" class="img-thumbnail" >
		<div><?php echo $_SESSION['username']?></div>
	</div>
	
	<div style="float:right;padding-right:900px">
		<div><a href="logout.php"><button type="button" class="btn btn-primary">退出</button></a></div>
		<br />
		<div><a href="edit.php"><button type="button" class="btn btn-primary">编辑</button></a></div>
		<br />
		<div><a href="../message.php"><button type="button" class="btn btn-primary">发留言</button></a></div><br /><br /><br /><br />
	</div>
</div>
<?php 
	require_once('../footer.php');
}
else {
	not_find($_SERVER['PHP_SELF']);
}
?>