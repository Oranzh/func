<?php


function decode_aes($data,$key,$serialize = false,$method = 'aes-256-cbc') {
    $iv = chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0);
    $decrypted = openssl_decrypt(base64_decode($data), $method, $key, OPENSSL_RAW_DATA, $iv);
    if($serialize)  $decrypted = swoole_serialize::unpack($decrypted);
    return $decrypted;
}

$data = 'r8CXBEaUaXvxBFQuX93slMvMePR9sHoJFA1aXc6beOggcl5l59ZlyObKb8LIpxj';
$key = '$2y$12$L5dEP6vNVoIoy2jMHPnDquH0m3IxcXgCULxuy9BhpmX8Fn1EBv2/6';
$res = decode_aes($data,$key,true);
