<?php
$im = imagecreate(100, 100);
$background_color = imagecolorallocate($im, 0, 0, 0);
$text_color = imagecolorallocate($im, 233, 14, 91);
imagestring($im, 1, 5, 5,  "A Simple Text String", $text_color);

header('Content-type: image/png');

imagepng($im);
imagedestroy($im);

