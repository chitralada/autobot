<?php
$access_token = 'wRQNGle5Ls+wZg+3l11oboVsF3PK8EZV/TObGFS9qTWn3Kxzw6oZb2qbzGRtj1RLaFw7JIhuFNMZF8B4NZs4QS5qmcFRy6X1IJof7n27QAeS5drnwdnpvtHiZyaO6gI1YGkZjv6HcxAI95cVHuJyawdB04t89/1O/w1cDnyilFU=';
$url = 'https://select2web-tnmcbot.herokuapp.com/';
$headers = array('Authorization: Bearer ' . $access_token);
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);
echo $result;
