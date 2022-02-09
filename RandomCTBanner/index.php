<?php
header('Content-type: text/css');
header('Cache-Control: no-cache');
header('Pragma: no-cache');
$list = array('https://dl.dropboxusercontent.com/s/yxpxc40wdqzvn71/ct-banner-01.png', 'https://dl.dropboxusercontent.com/s/l81w99mqp6tzc3w/ct-banner-02.png', 'https://dl.dropboxusercontent.com/s/jjp2zmc56fu1fv0/ct-banner-03.png', 'https://dl.dropboxusercontent.com/s/exzs0o596rqntfs/ct-banner-04.png', 'https://dl.dropboxusercontent.com/s/iie1641b2y4jk2b/ct-banner-05.png', 'https://dl.dropboxusercontent.com/s/xx6xsacallb5s6s/ct-banner-06.png');
shuffle($list);
echo 'body {--banner: url(' . $list[array_rand($list, 1)] . ') !important;}';
?>