<?php
header('Content-type: text/css');
header('Cache-Control: no-cache');
header('Pragma: no-cache');
$list = array('https://dl.dropboxusercontent.com/s/wo3xo35jqjxures/malimages4.css', 'https://dl.dropboxusercontent.com/s/pa9wj1qdu4me3qp/malimages5.css');
shuffle($list);
echo '@\import "' . $list[array_rand($list, 1)] . '";';
?>