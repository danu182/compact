<?php

namespace App\Helpers;

use DateTime;
use Illuminate\Support\Facades\Http;

use function PHPUnit\Framework\returnSelf;

function formatDate($dateString, $format = 'Y-m-d')
{
    $date = new DateTime($dateString);
    return $date->format($format);
}


function headersVclaim()
{
//    try{
        $consid = env('consid');
        $secretKey = env('secretKey');
        $user_key=env('user_key');
        date_default_timezone_set('UTC');
        $tStamp = strval(time()-strtotime('1970-01-01 00:00:00'));
        $signature = hash_hmac('sha256', $consid."&".$tStamp, $secretKey, true);
        $encodedSignature = base64_encode($signature);
       
        $headers = [
            'X-cons-id'=>$consid,
            'X-timestamp'=>$tStamp ,
            'X-signature'=>$encodedSignature,
            'user_key'=>$user_key,  
        ];
        return $headers;
}


function vClaim($alamat)
{
    try{
        $consid = env('consid');
        $secretKey = env('secretKey');
        $user_key=env('user_key');
        date_default_timezone_set('UTC');
        $tStamp = strval(time()-strtotime('1970-01-01 00:00:00'));
        $signature = hash_hmac('sha256', $consid."&".$tStamp, $secretKey, true);
        $encodedSignature = base64_encode($signature);
       
        $headers = [
            'X-cons-id'=>$consid ,
            'X-timestamp'=>$tStamp ,
            'X-signature'=>$encodedSignature,
            'user_key'=>$user_key,  
        ];
   
            $url= env('baseurl').$alamat;
            $hasil =Http::withHeaders(
                $headers
            )->get($url);
                $mama=$hasil["response"];
                $encrypt_method = 'AES-256-CBC';
                $key= $consid.$secretKey.$tStamp;
                $key_hash = hex2bin(hash('sha256', $key));
                $iv = substr(hex2bin(hash('sha256', $key)), 0, 16);
                $output = openssl_decrypt(base64_decode($mama), $encrypt_method, $key_hash, OPENSSL_RAW_DATA, $iv);
               
                $susah = \LZCompressor\LZString::decompressFromEncodedURIComponent($output);
                $data = json_decode($susah, true);
                return [$data, $hasil];
    }catch (\Exception $e){
        // return $e->getMessage();
        return "eroor dari kantor bpjs";
    }

}
