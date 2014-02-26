<?php
include_once('../sys/config.php');

if (isset($_POST['submit']) && !empty($_POST['user']) && !empty($_POST['passwd'])) {
	//过滤输入变量
	$clean_name = clean_input($_POST['user']);
	$clean_pass = clean_input($_POST['passwd']);
	$avatar = '../images/default.jpg';
	
	//判断用户名已是否存在
	$query = "SELECT * FROM users WHERE user_name = '$clean_name'";
    $data = mysqli_query($dbc, $query);
	if (mysqli_num_rows($data) == 1) {
		$_SESSION['error_info'] = '用户名已存在';
		header('Location: reg.php');
	}
	//添加用户
	else {
		$_SESSION['username'] = $clean_name;
		$_SESSION['avatar'] = $avatar;
		$date = date('Y-m-d');
		
		$query = "INSERT INTO users(user_name,user_pass,user_avatar,join_date) VALUES ('$clean_name',SHA('$clean_pass'),'$avatar','$date')";
		mysqli_query($dbc,$query) or die("Error!!");
		mysqli_close($dbc);
		header('Location: user.php');
	}
	
}
else {
	not_find($_SERVER['PHP_SELF']);
}
?>