<?php
header('Content-type: text/css');
header('Cache-Control: no-cache');
header('Pragma: no-cache');
$list = array('https://dl.dropboxusercontent.com/s/jnsh079a6hnuunc/loz-bg-01.jpg', 'https://dl.dropboxusercontent.com/s/m634owfzrzlcnym/loz-bg-02.jpg', 'https://dl.dropboxusercontent.com/s/chmxvwsymqgg01l/loz-bg-03.png', 'https://dl.dropboxusercontent.com/s/5uwrjytluxfhvkf/loz-bg-04.jpg', 'https://dl.dropboxusercontent.com/s/ucscfr2pa678g81/loz-bg-05.png', 'https://dl.dropboxusercontent.com/s/m6tb4ooo59gjjez/loz-bg-06.jpg');
shuffle($list);
echo 'body {--background: url(' . $list[array_rand($list, 1)] . ') !important;}';
?>