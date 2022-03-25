<?php

header('Content-Type: application/json; charset=utf-8');
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: *");

$base_url = 'https://masak-apa.tomorisakura.vercel.app';

require($_SERVER["DOCUMENT_ROOT"] . "/server-makanan/". "vendor/autoload.php");

$request = new GuzzleHttp\Client(['base_uri' => $base_url]);
