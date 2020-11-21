<?php
header("Access-Control-Allow-Origin:*");
extract($_GET);
if($val=='1')
	$str=file_get_contents("https://timesofindia.indiatimes.com/rssfeeds/-2128936835.cms");
else if($val=='2')
	$str=file_get_contents("https://timesofindia.indiatimes.com/rssfeeds/4719148.cms");
else
	$str=file_get_contents("https://timesofindia.indiatimes.com/rssfeeds/3908999.cms");
echo $str;
?>

