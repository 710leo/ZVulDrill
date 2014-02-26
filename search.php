<?php
include_once('sys/config.php');
include_once('header.php');
if (!empty($_GET['search'])) {
	$query = "SELECT * FROM comment WHERE comment_text LIKE '%{$_GET['search']}%'";
	$data = mysqli_query($dbc,$query);	
?>
<div class="bs-example table-responsive">
	<?php echo 'The result for'.$_GET['search'].'is:'?>
	<table class="table table-striped table-hover ">
	<tr>
		<th>#</th>
		<th>Column heading</th>
	</tr>
<?php
while($com = mysqli_fetch_array($data)) {
	//净化输出变量
	$html['username'] = htmlspecialchars($com['user_name']);
	$html['comment_text'] = htmlspecialchars($com['comment_text']);
	
	echo '<tr>';
	echo '<td>'.$html['username'].'</td>';
	echo '<td>'.$html['comment_text'].'</td>';
	echo '</tr>';
}
if (isset($_SESSION['username']))
{?>
	
	</table>
</div>
<form action="messageSub.php" method="post" name="message">
	<div class="col-lg-10">
        <textarea class="form-control" rows="3" id="textArea" name="message"></textarea>
    </div>
    <input type="submit" name="submit" value="留言"/>
</form>
<a href="user/user.php">返回</a><br /><br /><br /><br /><br />
<?php 
}
}
require_once('footer.php');
?>