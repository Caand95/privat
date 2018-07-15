<?php
$url = 'http://' . $_SERVER['HTTP_HOST'];
$url .= rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
$tmp = explode(@"/", $url);
$url = $tmp[0].'//'.$tmp[1].$tmp[2].'/'.$tmp[3].'/'.$tmp[4]; //developer path
echo $url;
header('Location: ' . $url, true, 302);
?>
