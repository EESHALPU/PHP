<?php
create_image();
print"<img src=insertrectinsqu.png?".date("U").">";

function create_image()
{
	$im=@imagecreate(200,200) or die("cannot initilize new GD image stream");
	$background_color=imagecolorallocate($im,0,255,0);

	$blue=imagecolorallocate($im,0,0,255);
	$red=imagecolorallocate($im,0,0,255);

	imagerectangle($im,5,10,195,50,$red);
	imagefilledrectangle($im,5,100,195,140,$blue);


	imagepng($im,"insertrectinsqu.png");
	imagedestroy($im);

}
?>
