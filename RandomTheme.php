<?php
header('Content-type: text/css');
$list = file('list.txt');
echo '@import url(' . $list[array_rand($list, 1)] . ');';
?>