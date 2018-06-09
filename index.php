<form  method="post" enctype="multipart/form-data">
	垃圾计算器<br/>
请输入第一个数<input type="text" name="number1" />

<select name="op" size="1">
	<option value="+" selected>加&nbsp;</option>
	<option value="-" >减</option>
	<option value="*" >乘</option>
	<option value="/" >除</option>

</select>
请输入第二个数<input type="text" name="number2" />
=
<input type="submit" name="sub" value="计算结果">
<input type="reset" name="re" value="重置">
<br/>
上传文件<input type="file" name="text" size="20">

</form>

<?php
$number1=$_POST["number1"];
$number2=$_POST["number2"];
$op=$_POST["op"];
$end;
switch ($op) {
	case '+':
		$end=$number1+$number2;
		break;
	
	case '-':
		$end=$number1-$number2;
		break;

	case '*':
		$end=$number1*$number2;
		break;

    case '/':
    	$end=$number1/$number2;
    	break;
}
echo "$number1","$op","$number2","=","$end";

?>