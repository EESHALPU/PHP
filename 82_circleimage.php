<?php
create_image();
print"<img src=ecpinsquare.png?".date("U").">";

function create_image()
{
	$im=@imagecreate(200,200) or die("cannot initilize new GD image stream");
	$background_color=imagecolorallocate($im,0,255,0);

	$blue=imagecolorallocate($im,0,0,255);
	$red=imagecolorallocate($im,0,0,255);

	imageellipse($im,80,50,100,50,$red);
	imagefilledellipse($im,150,150,60,40,$blue);


	imagepng($im,"ecpinsquare.png");
	imagedestroy($im);

}
?>
