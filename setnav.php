﻿<?php
	include 'actk.php';
	$post='
	{
     "button":[
	     {
	           "name":"微学习",
	           "sub_button":[
	           {	
	               "type":"view",
	               "name":"三严三实",
	               "url":"http://www.6du3.com/2/zt_list.php"
	            },
	            {
	               "type":"view",
	               "name":"学先进",
	               "url":"http://www.6du3.com/2/zt_list.php"
	            }]
	       },
			{
	           "name":"微服务",
	           "sub_button":[
	           {	
	              "type":"click",
	               "name":"最新班表",
	               "key":"banbiao"
	            },
	           {	
	              "type":"view",
	               "name":"我要订餐",
	               "url":"https://open.weixin.qq.com/connect/oauth2/authorize?appid=wx1767aea2b19d2053&redirect_uri=http://www.6du3.com/2/openidcheck.php&response_type=code&scope=snsapi_base&state=dc#wechat_redirect"
	            },
		   {	
	               "type":"view",
	               "name":"签收通知",
	               "url":"https://open.weixin.qq.com/connect/oauth2/authorize?appid=wx1767aea2b19d2053&redirect_uri=http://www.6du3.com/2/openidcheck.php&response_type=code&scope=snsapi_base&state=tz#wechat_redirect"
	            },
	            {
	               "type":"view",
	               "name":"绑定微信",
	               "url":"http://www.6du3.com/2/login.php"
	            }]
	       },
	     {	
	          "type":"view",
	          "name":"微网站",
	          "url":"http://www.6du3.com/stbj/index.php"
	      }
	  ]
 }	';//
	//$actk="oUBVt_TqgewPOHLPR8AATjsYsUaGPBgwqzRDK3Tqf58faKKr2ze7QdUWaNxo_RrU3v57m6oWB9OeFYYdFtCAuI9sn092_BcTZL788uy3uEY";
	$url="https://api.weixin.qq.com/cgi-bin/menu/create?access_token={$access_token}";
	$ch=curl_init();
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_POST, 1);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
	curl_exec($ch);
	curl_close($ch);
?>