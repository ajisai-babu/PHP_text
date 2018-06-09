<form   method="post" enctype="multipart/form-data">
	用户名：
	<input type="text" name="userName" size="20" maxlength="15" value="必须填写用户名"/>
	@
	<select name="domain">
		<option value="@163.com" selected>163.com</option>
		<option value="@126.com">126.com</option>
	</select>
	<br/>
	登录密码：
	<input type="password" name="password" size="20" maxlength="15"/>
	<br/>
	确认密码：
	<input type="password" name="confirmPassword" size="20" maxlength="15"/>
	<br/>
	选择性别：
	<input type="radio" name="sex" value="male" checked/>男
	<input type="radio" name="sex" value="female"/>女
	<br/>
	个人爱好：
	<input type="checkbox" name="interests[]" value="music" checked/>音乐
	<input type="checkbox" name="interests[]" value="game" checked/>游戏
	<input type="checkbox" name="interests[]" value="film"/>电影
	<br/>
	个人相片：
	<input type="hidden" name="MAX_FILE_SIZE" value="1024">
	<input type="file" name="myPicture" size="25" maxlength="100">
	<br/>
	备注信息：
	<textarea name="remark" cols="30" rows="4">请填写备注信息</textarea>
	<br/>
	提交按钮：
	<input type="submit" name="submit1" value="普通提交按钮"/>
	<br/>
	图片按钮：
	<input type="image" name="submit2" src="http://mpic.tiankong.com/4d1/b0e/4d1b0ee1ec6aac3e689feb6d47c54e2e/640.jpg@!670w" height="500" />
	<br/>
	重置按钮：
	<input type="reset" name="cancel" value="重新填写"/>
	<br/>
</form>

<?php
echo "您填写的用户名为：".$_POST["userName"];
echo "<br/>";
echo "您注册的邮箱域名为：".$_POST["domain"];
echo "<br/>";
echo "您填写的登录密码为：".$_POST["password"];
echo "<br/>";
echo "您填写的确认密码为：".$_POST["confirmPassword"];
echo "<br/>";
echo "您填写的性别为：".$_POST['sex'];
echo "<br/>";
echo "您填写的个人爱好为：";
foreach ($_POST["interests"] as $interest ) {
	echo $interest." ";
}
echo "<br/>";
echo "您的个人相片为：".$_POST["myPicture"];
echo "<br/>";
echo "长传文件大小不能超过：".$_POST["MAX_FILE_SIZE"],"字节";
echo "<br/>";
echo "您填写的备注信息为：".$_POST["remark"];
echo "<br/>";
echo "您单击的提交按钮为：";
echo isset($_POST["sublim1"])?"普通提交按钮":"图像提交按钮";

?>