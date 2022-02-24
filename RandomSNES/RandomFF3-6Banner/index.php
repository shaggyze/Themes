<?php
header('Content-type: text/css');
header('Cache-Control: no-cache');
header('Pragma: no-cache');
$list = array('https://dl.dropboxusercontent.com/s/iki1jyrw1c0t71t/ff3-banner-01.jpg', 'https://dl.dropboxusercontent.com/s/s331e79h5o804f6/ff3-banner-02.jpg', 'https://dl.dropboxusercontent.com/s/0xh2osxdvbysf2x/ff3-banner-03.png', 'https://dl.dropboxusercontent.com/s/cutyag2lk4ved5b/ff6-banner-01.jpg', 'https://dl.dropboxusercontent.com/s/r6afllhgiu1byt5/ff6-banner-02.jpg', 'https://dl.dropboxusercontent.com/s/e23imxwqf598u9u/ff6-banner-03.png');
shuffle($list);
echo 'body {--banner: url(' . $list[array_rand($list, 1)] . ') !important;}';
?>