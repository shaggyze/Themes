<?php
header('Content-type: text/css');
header('Cache-Control: no-cache');
header('Pragma: no-cache');
$list = array('https://dl.dropboxusercontent.com/s/3mxabezm5hs7u07/ff3-bg-01.jpg', 'https://dl.dropboxusercontent.com/s/0rxxuox8job2va8/ff3-bg-02.png', 'https://dl.dropboxusercontent.com/s/h8o00fa358rtted/ff3-bg-03.png', 'https://dl.dropboxusercontent.com/s/53qfkv8hjxy11nj/ff6-bg-01.jpg', 'https://dl.dropboxusercontent.com/s/mk0u5r2qaamn6dk/ff6-bg-02.jpg', 'https://dl.dropboxusercontent.com/s/9mkdwc2g27kdipe/ff6-bg-03.jpg', 'https://dl.dropboxusercontent.com/s/d7b3m1hblmxplrd/ff6-bg-04.jpg');
shuffle($list);
echo 'body {--background: url(' . $list[array_rand($list, 1)] . ') !important;}';
?>