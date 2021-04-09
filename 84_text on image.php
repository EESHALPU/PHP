<?php
create_image();
print "<img src=workwitharcs.png?".date("U").">";

function create_image(){
$im = @imagecreate(200, 200) or die("Cannot Initialize new GD image stream");
$background_color = imagecolorallocate($im, 255, 255, 0); // yellow

$red = imagecolorallocate($im, 255, 0, 0); // red


imagestring($im,2,5,50,"Hello!",$red);
imagestring($im,3,5,90,"Hello!",$red);
imagestring($im,4,5,130,"Hello!",$red);
imagestring($im,5,5,170,"Hello!",$red);



imagestringup($im, 5, 140, 150,"Hello!",$red);
imagepng($im,"image.png");
imagedestroy($im);
} ?>