<?php
header('Content-type: text/css');
header('Cache-Control: no-cache');
header('Pragma: no-cache');
$list = array('https://shaggyze.website/RandomSNES/CTImages.css', 'https://shaggyze.website/RandomSNES/LOZImages.css', 'https://shaggyze.website/RandomSNES/FF3-6Images.css');
shuffle($list);
echo '@\import "' . $list[array_rand($list, 1)] . '";';
?>