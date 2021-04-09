<?php
create_image();
print"<img src=image.png?".date("U").">";
function create_image()
{
	$im=@imagecreate(200,200) or die("Cannot Initiilze new GD image stream");
	$background_color=imagecolorallocate($im,255,255,0);
	imagepng($im,"image.png");
	imagedestroy($im);
}

?>