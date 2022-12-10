<?php

use Illuminate\Support\Str;
use Carbon\Carbon;

function enkrip($string)
{
     $output = false;
     $security       = parse_ini_file("../config/security.ini");
     $secret_key     = $security["encryption_key"];
     $secret_iv      = $security["iv"];
     $encrypt_method = $security["encryption_mechanism"];
     $key    = hash("sha256", $secret_key);
     $iv     = substr(hash("sha256", $secret_iv), 0, 16);
     $result = openssl_encrypt($string, $encrypt_method, $key, 0, $iv);
     $output = base64_encode($result);
     return $output;
}
function dekrip($string)
{
     $output = false;
     $security       = parse_ini_file("../config/security.ini");
     $secret_key     = $security["encryption_key"];
     $secret_iv      = $security["iv"];
     $encrypt_method = $security["encryption_mechanism"];
     $key    = hash("sha256", $secret_key);
     $iv = substr(hash("sha256", $secret_iv), 0, 16);
     $output = openssl_decrypt(base64_decode($string), $encrypt_method, $key, 0, $iv);
     return $output;
}
function id()
{
     return date('ymdHis') . '' . rand(pow(10, 5 - 1), pow(10, 5) - 1);
}
function money($d)
{
     return 'Rp. ' . number_format($d, 0, ',', '.');
}
