<?php
$original=imagecreatefrompng("arc1.png");
$new_image=imagecreate(200,200);

$red=imagecolorallocate($new_image, 255,0,0);
imagecopyresized($new_image,$original, 75,75,0, 0, 100, 100,100,100);
imagepng($new_image,"new_image1.png");
imagedestroy($new_image);
print"<img src=arc1.png><br>New Image<br><img src=new_image1.png>";
?>