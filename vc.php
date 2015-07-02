<?php

// offer simple sanitization on input
$version = preg_replace("/[^0-9.]/","",@$_GET['v']);
$urlvc = "http://www.monstaftp.com/vc.php?v=" . $version;

$data = "";
if ($data == "" && intval(ini_get("allow_url_fopen")) == 1) {
    if ($data == "" && function_exists("file_get_contents")) {
        $data = @file_get_contents($urlvc);
    }
    if ($data == "" && function_exists("fopen") && function_exists("stream_get_contents")) {
        $fh = @fopen($urlvc, "rb");
        $data = @stream_get_contents($fh);
        @fclose($fh);
    }
}
if ($data == "" && function_exists("curl_init") && function_exists("curl_exec")) {
    $ch = curl_init($urlvc);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_HEADER, 0);
    $data = @curl_exec($ch);
    @curl_close($ch);
}

echo $data;
