<?php

$url = "https://www.foxnews.com";

$handle = curl_init();

curl_setopt($handle, CURLOPT_URL, $url);

$data = curl_exec($handle);

//echo $data;

$url = "https://edition.cnn.com";

$handle = curl_init();

curl_setopt($handle, CURLOPT_URL, $url);

$data1 = curl_exec($handle);

echo $data1;
