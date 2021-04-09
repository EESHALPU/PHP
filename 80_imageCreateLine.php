<?php
create_image();
print"<img src=linesinsquare.png?".date("U").">";
function create_image()
{
	$im=@imagecreate(200,200) or die("Cannot Initiilze new GD image stream");
	$background_color=imagecolorallocate($im,255,255,0);

	$red=imagecolorallocate($im,255,0,0);
	$blue=imagecolorallocate($im,0,0,255);
	imageline($im,5,5,195,5,$red);
	imageline($im,5,5,195,5,$blue);

	imageline($im,5,5,195,195,$blue);
	imageline($im,5,195,5,5,$red);

	imagepng($im,"linesinsquare.png");
	imagedestroy($im);
}

?>