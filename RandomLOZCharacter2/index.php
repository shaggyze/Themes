<?php
header('Content-type: text/css');
header('Cache-Control: no-cache');
header('Pragma: no-cache');
$list = array('https://dl.dropboxusercontent.com/s/syv1pjczgzjoncn/loz-render-01.png', 'https://dl.dropboxusercontent.com/s/bpw7i4gla6jxalp/loz-render-02.jpg', 'https://dl.dropboxusercontent.com/s/r3pr65r2hc6w50z/loz-render-03.png', 'https://dl.dropboxusercontent.com/s/kdgfvqpwevtt7hj/loz-render-04.png', 'https://dl.dropboxusercontent.com/s/wn0416ehwjjypor/loz-render-05.png', 'https://dl.dropboxusercontent.com/s/6b03t2ks9dh8e1c/loz-render-06.png', 'https://dl.dropboxusercontent.com/s/ud4roeowskhajav/loz-render-07.png', 'https://dl.dropboxusercontent.com/s/ltuvcu137h1q8tf/loz-render-08.jpg', 'https://dl.dropboxusercontent.com/s/bowj4z7ph074byi/loz-render-09.png', 'https://dl.dropboxusercontent.com/s/qpn8xhhz9nt707o/loz-render-10.png');

echo 'body:after {background-image: url(' . $list[array_rand($list, 1)] . ') !important;}';
?>