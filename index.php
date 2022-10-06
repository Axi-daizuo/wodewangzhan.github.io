<?php
    $cityArr = array("广州市"=>"020",  //用一个数组来保存城市对应的区号，实际中应该从数据库获取
                   "深圳市"=>"0755", 
                   "北京市"=>"010", 
                   "上海市"=>"021" );

?>
<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf-8" />
		<title>php表单提交</title>
		<style>
			body{
				margin: 0;padding: 0;
				background-image: url(img/bk.png);
				background-repeat: repeat;
				
				}
			.main{
				margin-right:auto ;
				margin-left: auto;
				background-image: url(img/form1.png);
				background-repeat: no-repeat;
				width:  552px;
	            height: 552px;
			}
			.form{
				width: 510px;
				height: 410px;
				padding-top: 105px;
				
				position: relative;
			}
			label{
				display: inline-block;
				width: 160px;
				padding-left:20px ;
				text-align: right;
			}
		</style>
	</head>
	<body>
		
		<div class="main">
			<div class="form">
				<p><label>你的手机号：</label>
					<?php echo $_POST["tel"] ?>//获取提交的手机号，这里面的tel和input中的name相对应，下面都一样
				</p>
				<p><label>创建的密码：</label>
					<?php echo $_POST["pass"] ?>
				</p>
				<p><label>昵称：</label>
					<?php echo $_POST["name"] ?>
				</p>
				<p><label>性别：</label>
					<?php echo $_POST["sex"] ?>
				</p>
				<p><label>所在地：</label>
					<?php echo $_POST["select"] ?>
				</p>
				<p><label>所在区号：</label>
					<?php echo $cityArr[$_POST["select"]] ?>//这里的select也是一样，要个下拉框弄个name属性
				</p>
				<p><label>手机验证码：</label>
					<?php echo $_POST["code"] ?>
				</p>
			</div>
		</div>
	</body>
</html>
