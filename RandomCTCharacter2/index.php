<?php
header('Content-type: text/css');
header('Cache-Control: no-cache');
header('Pragma: no-cache');
$list = array('https://dl.dropboxusercontent.com/s/g6z482a3emss4r8/ct-render-01.png', 'https://dl.dropboxusercontent.com/s/gxl9pl6rua4rsby/ct-render-02.png', 'https://dl.dropboxusercontent.com/s/z7nxpd77fota2o2/ct-render-03.png', 'https://dl.dropboxusercontent.com/s/x8qj4mbhvn7o8zh/ct-render-04.png', 'https://dl.dropboxusercontent.com/s/ffmew5enkp2g2tk/ct-render-05.png', 'https://dl.dropboxusercontent.com/s/szmj38s5syobbl0/ct-render-06.png', 'https://dl.dropboxusercontent.com/s/rq3u3kj9anhha54/ct-render-07.png', 'https://dl.dropboxusercontent.com/s/awdn7qm05n8bsu9/ct-render-08.png', 'https://dl.dropboxusercontent.com/s/91fjfp4jbytpeci/ct-render-09.png');
shuffle($list);
echo '.list-unit .list-status-title .text, .list-unit .list-status-title:after {background-image: url(' . $list[array_rand($list, 1)] . ') !important;}';
?>