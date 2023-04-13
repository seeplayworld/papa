<?php

$get_vtt_link = base64_decode($_REQUEST['vtt']);


function get_curl_link($url){
    $ch = curl_init();
	curl_setopt($ch, CURLOPT_REFERER, $url);
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
    $result = curl_exec($ch);
	return strip_tags($result);
}

if($get_vtt_link){
	echo get_curl_link($get_vtt_link);
}
?>
