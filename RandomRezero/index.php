<?php
header('Content-type: text/css');
header('Cache-Control: no-cache');
header('Pragma: no-cache');
$list = array('https://dl.dropboxusercontent.com/s/h3gezdr95dwmmcq/malimages2.css', 'https://dl.dropboxusercontent.com/s/o2gteffv6dl6lzu/malimages3.css');
echo '@\import "' . $list[array_rand($list, 1)] . '";';
?>