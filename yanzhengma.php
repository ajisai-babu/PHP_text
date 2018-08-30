<?php
check_code();
function check_code($width = 100, $height = 50, $num = 4,$type = 'jpeg')
{   
	//创建画布
	$img = imagecreate($width, $height);
	//初始化变量string
	$string = '';
	//生产验证码显示的文字
	for($i = 0;$i < $num;$i++){
		$rand = mt_rand(0,2);

		switch ($rand) {
			case 0:
				$ascii = mt_rand(48,57);//ASCII码 0-9
				break;
			case 1:
				$ascii = mt_rand(65,90);//ASCII码 A-Z
				break;
			case '2':
				$ascii = mt_rand(97,122);//ASCII码 a-z
				break;
				
		}
		$string .= sprintf('%c',$ascii);
	}


	//背景颜色
	imagefilledrectangle($img, 0, 0, $width, $height, randBg($img));
    
    
    //干扰元素
	for ($i=0; $i<50  ; $i++) { 
		imagesetpixel($img, mt_rand(0,$width), mt_rand(0,$height), randPix($img));
	}


	//写入四个文字
	for($i = 0;$i<$num;$i++){
		$x = floor($width / $num) * $i+2;
		$y = mt_rand(0, $height - 15);
		imagechar($img, 5, $x, $y, $string[$i], randPix($img));
	}

	//输出header头
	$func = 'image'.$type;
	$header = 'Content-type:image/'.$type;

	if(function_exists($func)){
		header($header);
		$func($img);
	}else{
		echo "图片类型不支持";
	}


	//销毁资源
	imagedestroy($img);

	//返回字符
	return $string;
}

//浅色的背景函数
function randBg($img){
	return imagecolorallocate($img, mt_rand(130,255), mt_rand(130,255), mt_rand(130,255));
}

//深色的背景函数（干扰元素）
function randPix($img){
	return imagecolorallocate($img, mt_rand(0,120), mt_rand(0,120),mt_rand(0,120));
}


?>