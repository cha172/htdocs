<?php
header('Content-Type: image/jpeg');
imagejpeg($image);
imagedestroy($image);
?>