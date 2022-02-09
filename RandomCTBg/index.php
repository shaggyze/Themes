<?php
header('Content-type: text/css');
header('Cache-Control: no-cache');
header('Pragma: no-cache');
$list = array('https://dl.dropboxusercontent.com/s/g3930qdj6mvqfws/ct-bg-01.jpg', 'https://dl.dropboxusercontent.com/s/fa47xjdfonwvgg3/ct-bg-02.jpg', 'https://dl.dropboxusercontent.com/s/q1u7vbvsu5eoneu/ct-bg-03.jpg', 'https://dl.dropboxusercontent.com/s/78mx7632s20fnzn/ct-bg-04.jpg', 'https://dl.dropboxusercontent.com/s/2id6wt52glti2ro/ct-bg-05.jpg', 'https://dl.dropboxusercontent.com/s/r0kgyc6pyf2cnct/ct-bg-06.jpg');
shuffle($list);
echo 'body {--background: url(' . $list[array_rand($list, 1)] . ') !important;}';
?>