<?php
$url = 'filename=oss_test%2Fpexels-photo-175773.jpeg&size=5910146&mimeType=image%2Fjpeg&height=3744&width=5616';
$url = urldecode($url);
//$url =parse_url($url,$output);
//var_dump($output);

$str = "first=value&arr[]=foo+bar&arr[]=baz";

$url = 'filename=oss_test%2Fpexels-photo-175773.jpeg&size=5910146&mimeType=image%2Fjpeg&height=3744&width=5616';
$str= urldecode($url);
// 推荐用法
parse_str($str, $output);
echo $output['filename'];  // value
