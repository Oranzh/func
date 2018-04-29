<?php 
 
/** 
 *  
 *  
 * @author name <@yunbix.com> 
 * @copyright 2015~ (c) @yunbix.com 
 * @Time: 2016年08月22日 星期一 14时07分18秒 
 */ 
 
class QRCode 
{  
    public function qrcode($url){  
        $qr_url =  QRCode::httpGet('http://qr.liantu.com/api.php?el=h&text='.urlEncode($url)); 
        return $qr_url; 
    }  
 
    public function httpGet($url, $data=null) { 
        $curl = curl_init(); 
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);//把输出转化为字符串，而不是直接输出到屏幕 
        curl_setopt($curl, CURLOPT_TIMEOUT, 60);// 
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);//禁止从服务端进行验证 
        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);//禁止检查服务器SSL证书 
        curl_setopt($curl, CURLOPT_URL, $url); 
        if(!empty($data)){ 
            curl_setopt($curl, CURLOPT_POST, 1); 
            curl_setopt($curl, CURLOPT_POSTFIELDS, $data); 
        } 
        $res = curl_exec($curl); 
        if(empty($res)){ 
            throw new Blue_Exception_Fatal('http get fail', array('url' => $url)); 
        } 
        curl_close($curl); 
        return $res; 
    }    
}


$qrcode = new QRCode();
$res = $qrcode->qrcode('https://www.baidu.com');
var_dump($res);
