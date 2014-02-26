<?php
$f = $_GET['f'];
include_once('sys/config.php');
include($f);
?>
<div class="row">
            <div class="span2">
            </div>
            <div class="span10">
                <div id="content">
					<div class="page-header">
                        <h4>关于 ZVulDrill</h4>
                        <hr>
						<p>
                            <b>[测试环境]</b><br />
							<ul>
								<li>Apache 2.2.22</li>
								<li>PHP 5.3.13</li>
								<li>MySQL 5.5.24</li>
							</ul>
							
							<ul>php配置文件中：
								<li>allow_url_include = on</li>
								<li>allow_url_fopen = on</li>
								<li>magic_quotes_gpc = off</li>
							</ul>
                        </p>
                        <hr>
                        <p>
                            <b>[联系]</b><br>
                            Email：710leo[at]gmail.com<br>
							欢迎一起交流学习：）
                        </p>    
                    </div>
                </div>
            </div>
        </div>
<?php 
require_once('footer.php');
?>