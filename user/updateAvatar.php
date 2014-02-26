<?php
include_once('../sys/config.php');
$uploaddir = '../images';

if (isset($_POST['submit']) && isset($uploaddir)) {
	
    if (move_uploaded_file($_FILES['upfile']['tmp_name'], $uploaddir . '/' . $_FILES['upfile']['name'])) {
        echo '文件上传成功，保存于：' . $uploaddir . '/' . $_FILES['upfile']['name'] . "\n";
		//更新用户信息
		$clean_user_avatar = $uploaddir . '/' . clean_input($_FILES['upfile']['name']);
		$query = "UPDATE users SET user_avatar = '$clean_user_avatar' WHERE user_id = '{$_SESSION['user_id']}'";
		mysqli_query($dbc,$query) or die('updata error!');
		mysqli_close($dbc);
		//刷新缓存
		$_SESSION['avatar'] = $clean_user_avatar;
		header('Location: edit.php');
    }
	else {
		echo '图片上传失败！<br />';
		echo '<a href="edit.php">返回</a>';
	}
}
else {
	not_find($_SERVER['PHP_SELF']);
}
?>