<?php
header("Access-Control-Allow-Origin:*");
extract($_GET);
$links=array("Times Of India","The Hindu","The Economic Times");
if($val=='1')
	$str=file_get_contents("http://hci-flask.run-ap-south1.goorm.io/getpapers");
else if($val=='2')
	$str=file_get_contents("http://hci-flask.run-ap-south1.goorm.io/getcat/".rawurlencode($pap_cat));
else
	$str=file_get_contents("http://hci-flask.run-ap-south1.goorm.io/getnews/".rawurlencode($val1).'/'.rawurlencode($val2));
echo $str;
?>

