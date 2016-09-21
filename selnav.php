<?php
	include 'actk.php';
	$url="https://api.weixin.qq.com/cgi-bin/menu/get?access_token={$access_token}";
	$ch=curl_init();
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_exec($ch);
	curl_close($ch);
?>