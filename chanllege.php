<?php
include_once('sys/config.php');
require_once('header.php');
?>
<table class="table">
	<thead>
	<tr>
		<th id="yw0_c0">Chanllege</th>
	</tr>
	</thead>
	<tbody>
		<tr class="odd">
			<td><span style="padding-right:200px">1</span><span>SQL注入获取数据库信息</span></td>
		</tr>
		<tr class="odd">
			<td>
				<span style="padding-right:200px">2</span><span style="padding-right:100px">SQL注入绕过管理后台登陆</span>
				<a href="https://github.com/SpiderLabs/SQLol" target="_blank">拓展练习</a>
			</td>
		</tr>
		<tr class="odd">
			<td><span style="padding-right:200px">3</span><span>反射型XSS</span></td>
		</tr>
		<tr class="odd">
			<td>
				<span style="padding-right:200px">4</span><span style="padding-right:200px">储存型XSS</span>
				<a href="http://xss-quiz.int21h.jp/" target="_blank">拓展练习</a>
			</td>
		</tr>
		<tr class="odd">
			<td><span style="padding-right:200px">5</span><span>CSRF</span></td>
		</tr>
		<tr class="odd">
		<td><span style="padding-right:200px">6</span><span>文件上传</span></td>
		</tr>
		<tr class="odd">
			<td>
				<span style="padding-right:200px">7</span><span>暴力破解</span>
			</td>
		</tr>
		<tr class="odd">
		<td><span style="padding-right:200px">8</span><span>目录遍历</span></td>
		</tr>
		<tr class="odd">
			<td>
				<span style="padding-right:200px">9</span><span style="padding-right:215px">权限跨越</span>
				<a href="http://drops.wooyun.org/tips/727" target="_blank">拓展阅读</a>
			</td>
		</tr>
		<tr class="odd">
			<td>
				<span style="padding-right:192px">10</span><span style="padding-right:215px">文件包含</span>
				<a href="http://zone.wooyun.org/content/2196" target="_blank">拓展阅读</a>
			</td>
		</tr>
		<tr class="odd">
		<td><span style="padding-right:200px">X</span><span>我也没有意识到的漏洞 <b>:-)</b></span></td>
		</tr>
	</tbody>
</table>

<?php 
require_once('footer.php');
?>