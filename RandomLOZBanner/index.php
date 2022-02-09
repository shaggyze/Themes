<?php
header('Content-type: text/css');
header('Cache-Control: no-cache');
header('Pragma: no-cache');
$list = array('https://dl.dropboxusercontent.com/s/r2opb4dtyvtoor0/loz-banner-01.jpg', 'https://dl.dropboxusercontent.com/s/d2g8akbreoyd4q0/loz-banner-02.jpg?', 'https://dl.dropboxusercontent.com/s/5b2yoq91379b5v4/loz-banner-03.jpg', 'https://dl.dropboxusercontent.com/s/heaxxdxcnhq661a/loz-banner-04.jpg', 'https://dl.dropboxusercontent.com/s/4mjmkxvxf7f8var/loz-banner-05.jpg', 'https://dl.dropboxusercontent.com/s/aj75qdd0j01ygj0/loz-banner-06.jpg');
shuffle($list);
echo 'body {--banner: url(' . $list[array_rand($list, 1)] . ') !important;}';
?>