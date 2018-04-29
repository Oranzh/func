<?php

/**
 * 
 * 
 * @author name <@yunbix.com>
 * @copyright 2015~ (c) @yunbix.com
 * @Time: Tue 04 Jul 2017 11:41:21 AM CST
 */
 function getCardInfo($cardNo) {
	$url = sprintf('https://ccdcapi.alipay.com/validateAndCacheCardInfo.json?_input_charset=utf-8&cardNo=%d&cardBinCheck=true',$cardNo);
	$res = file_get_contents($url);
	$res = json_decode($res,true);
	$bank = file_get_contents('card.json');
	$bank = json_decode($bank,true);
	echo  $bank[$res['bank']],"\n";
}

getCardInfo('6222600810016413866');
