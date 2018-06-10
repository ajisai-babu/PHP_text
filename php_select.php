<?php
$q = isset($_POST["q"])? htmlspecialchars($_POST["q"]) : '';
if ($q) {
	if ($q == 'RUNOOB') {
		echo '菜鸟教程<br/>http://www.runoob.com';
	}else if ($q == 'BAIDU') {
		echo "淘宝<br/>http://www.baidu.com";
	}
}else{
?>
<form method="post">
	<select name="q">
		<option value="">选择一个站点</option>
		<option value="RUNOOB">Runoob</option>
		<option value="BAIDU">Baidu</option>
	</select>
	<input type="submit" name="submit1" value="提交">
</form>
<?php

}
?>